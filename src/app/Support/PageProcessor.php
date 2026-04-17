<?php

namespace App\Support;

use App\Core\Config;
use App\Enums\NavType;

class PageProcessor
{
    public static function process(array $pages): array
    {
        // Obtener datos de contexto
        $langCode = app_lang_code();
        $pageKey = Config::get('current_page');

        // Filtrar activos
        $pages = array_filter($pages, fn(array $page) => ($page['status'] ?? null)?->isActive());

        // Cargar contenido específico de la página
        $pageContentPath = BASE_PATH . "/src/data/{$langCode}/pages/{$pageKey}.php";

        if (!file_exists($pageContentPath)) {
            $pageContentPath = BASE_PATH . "/src/data/es/pages/{$pageKey}.php";
        }

        $pageContent = file_exists($pageContentPath)
            ? require $pageContentPath
            : [];

        $pages = array_replace_recursive($pages, $pageContent['pages'] ?? []);

        // Separar por categoría manteniendo keys
        $navPrimaries = [];
        $navSecondaries = [];

        foreach ($pages as $key => $page) {
            match ($page['category']) {
                NavType::PRIMARY => $navPrimaries[$key] = $page,
                NavType::SECONDARY => $navSecondaries[$key] = $page,
                default => null,
            };
        }

        return [
            'pages' => $pages,
            'navPrimaries' => $navPrimaries,
            'navSecondaries' => $navSecondaries,
        ];
    }
}