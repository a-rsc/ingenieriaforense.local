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

    shuffle($array);

    return array_slice($array, 0, $limit);
}

/**
 * Generate a BreadcrumbList schema based on the current page and service
 */
function getBreadcrumbList($pages, $pageByUrl, $service = null) {
    $list = [];

    // 1. Siempre empezamos por Home
    $list[] = [
        "@type" => "ListItem",
        "position" => 1,
        "name" => $pages['Home']['name'],
        "item" => BASE_URL . $pages['Home']['url'],
    ];

    if ($service === null) {
        // 2. Si no hay servicio, el segundo nivel es la página actual (ej. Contacto)
        $list[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => $pages[$pageByUrl]['name'],
            "item" => BASE_URL . $pages[$pageByUrl]['url'],
        ];
    } else {
        // 2. Si hay servicio, el segundo nivel es la categoría (ej. Peritajes)
        $list[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => $pages[$pageByUrl]['name'],
            "item" => BASE_URL . $pages[$pageByUrl]['url'],
        ];
        // 3. Y el tercer nivel es el servicio específico (ej. Humedades)
        $list[] = [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $service['name'],
            "item" => BASE_URL . $service['url'],
        ];
    }

    return $list;
}
?>
