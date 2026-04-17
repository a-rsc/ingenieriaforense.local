<?php

namespace App\Core;

class App
{
    public function run(): void
    {
        $router = new Router();

        require BASE_PATH . '/src/routes/web.php';

        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $segments = array_values(array_filter(explode('/', trim($uri, '/'))));

        $supportedLangs = Config::get('app.supported_langs', ['es']);
        $langCode = null;

        if (!empty($segments) && in_array($segments[0], $supportedLangs, true)) {
            $langCode = $segments[0];
            array_shift($segments);
        }

        $cleanUri = '/' . implode('/', $segments);

        // Normalización de idioma en URL

        // 1. Español → eliminar prefijo /es
        if ($langCode === 'es' && ($uri === '/es' || $uri === '/es/' || str_starts_with($uri, '/es/'))) {
            $redirectUri = substr($uri, 3);

            if ($redirectUri === '' || $redirectUri === false) {
                $redirectUri = '/';
            }

            header('Location: ' . $redirectUri, true, 301);
            exit;
        }

        // 2. Inglés → evitar /en/ (slash final)
        if ($langCode === 'en' && $uri === '/en/') {
            header('Location: /en', true, 301);
            exit;
        }

        $langFilepath = BASE_PATH . "/src/config/lang/{$langCode}.php";

        if (!file_exists($langFilepath)) {
            $langCode = 'es';
            $langFilepath = Config::get('app.lang_filepath', BASE_PATH . '/src/config/lang/es.php');
        }

        $langConfigMap = [
            'es' => [
                'lang' => 'es-ES',
                'lang_locale' => 'es_ES',
                'language' => 'Spanish',
            ],
            'en' => [
                'lang' => 'en-GB',
                'lang_locale' => 'en_GB',
                'language' => 'English',
            ],
        ];

        $currentLangConfig = $langConfigMap[$langCode] ?? $langConfigMap['es'];

        Config::set('app.lang', $currentLangConfig['lang']);
        Config::set('app.lang_locale', $currentLangConfig['lang_locale']);
        Config::set('app.language', $currentLangConfig['language']);
        Config::set('app.lang_code', $langCode);
        Config::set('app.lang_filepath', require $langFilepath);

        $pageKey = route_key_from_uri($cleanUri);

        Config::set('current_page', $pageKey);

        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $router->dispatch($cleanUri, $method);
    }
}