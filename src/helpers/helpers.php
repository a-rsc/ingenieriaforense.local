<?php

use App\Core\Config;

if (!function_exists('__')) {
    function __(string $key): string
    {
        return Config::get('lang.' . $key, $key);
    }
}

/**
 * Escape HTML (XSS protection)
*/
if (!function_exists('e')) {
    function e(string $url): string
    {
        return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
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

if (!function_exists('route_slug')) {
    function route_slug(string $name): string
    {
        $lang = \App\Core\Config::get('lang_code', 'es');

        $routes = [
            'es' => [
                'home' => '',
                'about' => 'nosotros',
                'contact' => 'contacto',
            ],
            'en' => [
                'home' => '',
                'about' => 'about',
                'contact' => 'contact',
            ],
        ];

        if (!isset($routes[$lang][$name])) {
            throw new Exception("Ruta no definida: $name");
        }

        return $routes[$lang][$name];
    }
}

if (!function_exists('url')) {
    function url(string $name = ''): string
    {
        $lang = Config::get('lang_code', 'es');
        $slug = route_slug($name);

        // Español SIN prefijo
        if ($lang === 'es') {
            return $slug === '' ? '/' : '/' . $slug;
        }

        // Otros idiomas CON prefijo
        return $slug === ''
            ? '/' . $lang . '/'
            : '/' . $lang . '/' . $slug;
    }
}

if (!function_exists('dd')) {
    function dd(mixed $data): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit;
    }
}

if (!function_exists('filterActiveMembers')) {
    function filterActiveMembers(array $items): array
    {
        return array_filter($items, function ($item) {
            return isset($item['status']) && $item['status']?->isActive();
        });
    }
}