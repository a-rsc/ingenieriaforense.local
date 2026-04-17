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

if (!function_exists('normalize_path')) {
    function normalize_path(string $path): string
    {
        $path = '/' . trim($path, '/');
        return $path === '/' ? '/' : rtrim($path, '/');
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
        return Config::get('app.lang_filepath.' . $key, $key);
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
    function route_slug(string $uri): string
    {
        $lang = app_lang_code();
        $routes = route_map();

        if (!isset($routes[$lang][$uri])) {
            throw new \Exception("Ruta no definida: {$uri}");
        }

        return $routes[$lang][$uri];
    }
}

if (!function_exists('route_key_from_uri')) {
    function route_key_from_uri(string $uri): string
    {
        $uri = trim($uri, '/');
        $lang = app_lang_code();
        $routes = route_map();

        $inverseRoutes = array_flip($routes[$lang] ?? []);

        return $inverseRoutes[$uri] ?? '404';
    }
}

if (!function_exists('url')) {
    function url(string $uri = ''): string
    {
        $lang = app_lang_code();
        $slug = route_slug($uri);

        if ($lang === 'es') {
            return $slug === '' ? '/' : '/' . $slug;
        }

        return $slug === ''
            ? '/' . $lang . '/'
            : '/' . $lang . '/' . $slug;
    }
}

if (!function_exists('current_url')) {
    function current_url(): string
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? Config::get('app.domain');
        $uri = $_SERVER['REQUEST_URI'] ?? '/';

        return $protocol . '://' . $host . $uri;
    }
}

if (!function_exists('current_path')) {
    function current_path(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        return normalize_path($uri);
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
        $url = normalize_path($url);

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