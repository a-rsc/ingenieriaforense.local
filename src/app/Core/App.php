<?php

namespace App\Core;

class App
{
    public function run(): void
    {
        $router = new Router();

        require BASE_PATH . '/src/routes/web.php';

        $supportedLangs = Config::get('app.supported_langs', ['es', 'en']);
        $langCode = Config::get('app.lang_code', 'es');

        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $segments = array_values(array_filter(explode('/', trim($uri, '/'))));

        if (!empty($segments)) {
            $firstSegment = strtolower($segments[0]);

            if (in_array($firstSegment, $supportedLangs, true)) {
                $langCode = $firstSegment;
                array_shift($segments);
            }
        }

        $cleanUri = '/' . implode('/', $segments);

        // Español → eliminar prefijo /es
        $this->handleSpanishCanonicalRedirect($langCode, $uri);
        // Inglés → forzar /en en minúsculas
        $this->handleEnglishCanonicalRedirect($langCode, $uri);

        $translationsPath = BASE_PATH . "/src/config/lang/{$langCode}.php";

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

    private function handleSpanishCanonicalRedirect(string $langCode, string $uri): void
    {
        if ($langCode !== 'es') {
            return;
        }

        $uriLower = strtolower($uri);

        if ($uriLower === '/es' || $uriLower === '/es/' || str_starts_with($uriLower, '/es/')) {
            header('Location: ' . (substr($uri, 3) ?: '/'), true, 301);
            exit;
        }
    }

    private function handleEnglishCanonicalRedirect(string $langCode, string $uri): void
    {
        if ($langCode !== 'en') {
            return;
        }

        $uriLower = strtolower($uri);

        if ($uriLower === '/en' || $uriLower === '/en/' || str_starts_with($uriLower, '/en/')) {
            if ($uri === '/en/') {
                header('Location: /en', true, 301);
                exit;
            }

            if ($uri !== $uriLower) {
                header('Location: ' . $uriLower, true, 301);
                exit;
            }

            return;
        }

        header('Location: /en' . ($uri === '/' ? '' : $uri), true, 301);
        exit;
    }
}