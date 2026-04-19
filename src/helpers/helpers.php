<?php

use App\Core\Config;

/**
 * =========================
 * ⚙️ INTERNAL HELPERS
 * =========================
 */
if (!function_exists('app_lang_code')) {
    function app_lang_code(): string
    {
        return Config::get('app.lang_code', 'es');
    }
}

if (!function_exists('normalize_uri')) {
    function normalize_uri(string $uri): string
    {
        $uri = parse_url($uri, PHP_URL_PATH) ?: '/';

        // root
        if ($uri === '/' || $uri === '') {
            return '';
        }

        // normalizar
        $uri = '/' . trim($uri, '/');

        return rtrim($uri, '/');
    }
}

/**
 * =========================
 * 🔐 SECURITY / ESCAPE
 * =========================
 */
if (!function_exists('e')) {
    function e(mixed $value): string
    {
        return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
    }
}

/**
 * =========================
 * 🌐 TRANSLATIONS
 * =========================
 */
if (!function_exists('__')) {
    function __(string $key): string
    {
        return Config::get('app.translations.' . $key, $key);
    }
}

/**
 * =========================
 * 🌍 LANGUAGE HELPERS
 * =========================
 */
if (!function_exists('lang_prefix')) {
    function lang_prefix(): string
    {
        $langCode = app_lang_code();

        return $langCode === 'es' ? '' : '/' . $langCode;
    }
}

/**
 * =========================
 * 🗺️ ROUTE MAPS
 * =========================
 */
if (!function_exists('route_map')) {
    function route_map(): array
    {
        return Config::get('routes', []);
    }
}

/**
 * =========================
 * 🌍 URL HELPERS
 * =========================
 */
if (!function_exists('route_slug')) {
    function route_slug(string $name): string
    {
        $lang = app_lang_code();
        $routes = route_map();

        if (!isset($routes[$lang][$name])) {
            throw new \Exception("Ruta no definida: {$name}");
        }

        return $routes[$lang][$name];
    }
}

if (!function_exists('route_key_from_uri')) {
    function route_key_from_uri(string $uri): string
    {
        $uri = normalize_uri($uri);

        $lang = app_lang_code();
        $routes = route_map();

        $inverseRoutes = array_flip($routes[$lang] ?? []);

        return $inverseRoutes[$uri] ?? '404';
    }
}

if (!function_exists('url')) {
    function url(string $name = ''): string
    {
        $lang = app_lang_code();
        $slug = route_slug($name);

        if ($slug === '') {
            return $lang === 'es' ? '/' : '/' . $lang;
        }

        if ($lang === 'es') {
            return $slug;
        }

        return '/' . $lang . $slug;
    }
}

if (!function_exists('current_url')) {
    function current_url(): string
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? Config::get('app.domain');

        $currentPage = Config::get('current_page', 'home');

        if (!is_string($currentPage) || $currentPage === '404') {
            $currentPage = 'home';
        }

        return $protocol . '://' . $host . url($currentPage);
    }
}

if (!function_exists('current_path')) {
    function current_path(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        return normalize_uri($uri);
    }
}

if (!function_exists('localized_route')) {
    function localized_route(string $pageKey, string $targetLang): string
    {
        $routes = Config::get('routes', []);
        $langRoutes = $routes[$targetLang] ?? [];

        if (!array_key_exists($pageKey, $langRoutes)) {
            return $targetLang === 'en' ? '/en' : '/';
        }

        $path = trim((string) $langRoutes[$pageKey]);

        if ($path === '') {
            return $targetLang === 'en' ? '/en' : '/';
        }

        if ($path[0] !== '/') {
            $path = '/' . $path;
        }

        return $targetLang === 'en' ? '/en' . $path : $path;
    }
}

if (!function_exists('switch_language_url')) {
    function switch_lang_code_url(): string
    {
        $currentPage = Config::get('current_page', 'home');
        $currentLang = Config::get('app.lang_code', 'es');
        $targetLang = $currentLang === 'en' ? 'es' : 'en';

        return localized_route($currentPage, $targetLang);
    }
}

/**
 * =========================
 * 🎯 NAVIGATION / ACTIVE
 * =========================
 */
if (!function_exists('activeClass')) {
    function activeClass(string $url, string $classes = 'active', bool $strict = true): string
    {
        $uri = current_path();
        $url = normalize_uri($url);

        $isActive = $strict
            ? $uri === $url
            : ($url === '/' ? $uri === '/' : str_starts_with($uri, $url));

        return $isActive ? $classes : '';
    }
}

/**
 * =========================
 * 📊 CONTENT HELPERS
 * =========================
 */
if (!function_exists('content_path')) {
    function content_path(string $folder, string $file): string
    {
        $lang = app_lang_code();

        $path = BASE_PATH . "/src/{$folder}/{$lang}/{$file}.php";

        if (!file_exists($path)) {
            $path = BASE_PATH . "/src/{$folder}/es/{$file}.php";
        }

        return $path;
    }
}

if (!function_exists('random_item')) {
    function random_item(array $array): mixed
    {
        if (empty($array)) {
            return null;
        }

        $values = array_values($array);

        return $values[array_rand($values)];
    }
}

/**
 * =========================
 * 🧰 DEBUG
 * =========================
 */
if (!function_exists('dd')) {
    function dd(mixed $data): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit;
    }
}