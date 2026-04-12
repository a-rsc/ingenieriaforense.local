<?php
declare(strict_types=1);

/**
 * Find the key of a web page by its URL
 */
function findKeyByUrl(array $array, string $url): string|int|null {
    $key = array_search(
        $url,
        array_map(fn($page) => $page['url'], $array),
        true
    );

    return $key === false ? null : $key;
}

/**
 * Escape HTML (XSS protection)
*/
function e(string $url): string {
    return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate a full URL based on the base URL and the given path
*/
function filterActiveMembers(array $members): array {
    return array_filter(
        $members,
        static fn(array $member): bool => ($member['status'] ?? null) === Status::ACTIVE
    );
}

/**
 * Converts a title into a URL-friendly slug.
 * Example: "Memoria técnica" becomes "/memoria-tecnica".
 */
function titleToUrl(string $title): string {
    $title = mb_strtolower($title, 'UTF-8');

    $replacements = [
        'á' => 'a',
        'é' => 'e',
        'í' => 'i',
        'ó' => 'o',
        'ú' => 'u',
        'ü' => 'u',
        'ñ' => 'n',
    ];

    $title = strtr($title, $replacements);
    $title = preg_replace('/[^a-z0-9]+/', '-', $title);
    $title = trim($title, '-');

    return '/' . $title;
}

/**
 * Check if url is home
 */
function isHome(?string $url): bool {
    return $url === 'Home';
}

/**
 * Return active class
 */
function activeClass(string $url, string $classes = 'active', bool $strict = true): string {
    global $currentPage;

    // $url = trim($url, '/') ?: 'index';

    $isActive = $strict
        ? $currentPage === $url
        : str_contains($currentPage, $url);

    return $isActive ? $classes : '';
}

/**
 * Check if url is active
 */
function isActive(string $url, bool $strict = true): bool {
    global $currentPage;

    // $url = trim($url, '/') ?: 'index';

    if (!isset($currentPage)) return false;

    if ($strict) {
        return $currentPage === $url;
    }

    return str_contains($currentPage, $url);
}

/**
 * Get a random element from an array
 */
function getRandomElement(array $array) {
    if (empty($array)) return null;

    return $array[array_rand($array)];
}

/**
 * Get random elements from an array
 */
function getRandomItems(array $array, int $limit = 1): array|null {
    if (empty($array)) return null;

    if ($limit <= 0) {
        return [];
    }

    if (count($array) <= $limit) {
        shuffle($array);
        return $array;
    }

    $keys = array_rand($array, $limit);

    // Si n = 1, array_rand devuelve una clave, no array
    if (!is_array($keys)) {
        return [$array[$keys]];
    }

    return array_map(fn($key) => $array[$key], $keys);
}

/**
 * Get random active slides from an array
 */
function getRandomActiveSlides(array $array, int $limit = 2): array|null {
    if (empty($array)) return null;

    $filtered = array_values(array_filter($array, fn($s) =>
        ($s['slide'] ?? null) == Status::ACTIVE
    ));

    shuffle($filtered);

    return array_slice($filtered, 0, $limit);
}
?>
