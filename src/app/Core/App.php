<?php

namespace App\Core;

class App
{
    public function run(): void
    {
        $router = new Router();

        require_once BASE_PATH . '/src/routes/web.php';

        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $segments = array_values(array_filter(explode('/', trim($uri, '/'))));

        $supportedLangs = ['es', 'en'];
        $langCode = null;

        if (!empty($segments) && in_array($segments[0], $supportedLangs, true)) {
            $langCode = $segments[0];
            array_shift($segments);
        }

        if ($langCode === null) {
            $default = Config::get('app.lang', 'es-ES');
            $langCode = substr($default, 0, 2);
        }

        $langFile = BASE_PATH . "/src/config/lang/{$langCode}.php";

        if (!file_exists($langFile)) {
            $langCode = 'es';
            $langFile = BASE_PATH . '/src/config/lang/es.php';
        }

        $langConfigMap = [
            'es' => [
                'lang' => 'es-ES',
                'locale' => 'es_ES',
                'language' => 'Spanish',
            ],
            'en' => [
                'lang' => 'en-GB',
                'locale' => 'en_GB',
                'language' => 'English',
            ],
        ];

        $currentLangConfig = $langConfigMap[$langCode] ?? $langConfigMap['es'];

        Config::set('lang', require $langFile);
        Config::set('lang_code', $langCode);

        Config::set('app.lang', $currentLangConfig['lang']);
        Config::set('app.locale', $currentLangConfig['locale']);
        Config::set('app.language', $currentLangConfig['language']);

        $cleanUri = '/' . implode('/', $segments);
        if ($cleanUri === '/' || $cleanUri === '') {
            $cleanUri = '/';
        }

        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $router->dispatch($cleanUri, $method);
    }
}
?>