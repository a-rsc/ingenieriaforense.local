<?php

namespace App\Core;

class App
{
    public function run(): void
    {
        $router = new Router();

        require BASE_PATH . '/src/routes/web.php';

        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $uriLower = strtolower($uri);
        $segments = array_values(array_filter(explode('/', trim($uri, '/'))));

        $supportedLangs = Config::get('app.supported_langs', ['es']);
        $langCode = 'es';

        if (!empty($segments)) {
            $firstSegment = strtolower($segments[0]);

            if (in_array($firstSegment, $supportedLangs, true)) {
                $langCode = $firstSegment;
                array_shift($segments);
            }
        }

        $cleanUri = '/' . implode('/', $segments);

        // Español → eliminar prefijo /es
        if ($langCode === 'es' && ($uriLower === '/es' || $uriLower === '/es/' || str_starts_with($uriLower, '/es/'))) {
            $redirectUri = substr($uri, 3);

            if ($redirectUri === '' || $redirectUri === false) {
                $redirectUri = '/';
            }

            header('Location: ' . $redirectUri, true, 301);
            exit;
        }

        // Inglés → forzar /en en minúsculas
        if ($langCode === 'en') {
            if ($uriLower === '/en' || $uriLower === '/en/' || str_starts_with($uriLower, '/en/')) {
                if ($uri !== $uriLower) {
                    header('Location: ' . $uriLower, true, 301);
                    exit;
                }

                if ($uri === '/en/') {
                    header('Location: /en', true, 301);
                    exit;
                }
            } else {
                $redirectUri = '/en' . ($uri === '/' ? '' : $uri);
                header('Location: ' . $redirectUri, true, 301);
                exit;
            }
        }

        $translationsPath = BASE_PATH . "/src/config/lang/{$langCode}.php";

        if (!file_exists($translationsPath)) {
            $langCode = 'es';
            $translationsPath = Config::get('app.translations_path', BASE_PATH . '/src/config/lang/es.php');
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
        Config::set('app.translations_path', $translationsPath);
        Config::set('app.translations', require $translationsPath);

        $pageKey = route_key_from_uri($cleanUri);

        Config::set('current_page', $pageKey);

        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $router->dispatch($cleanUri, $method);
    }
}