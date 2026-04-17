<?php

use App\Enums\NavType;

if (!function_exists('process_pages')) {
    function process_pages(array $pages): array
    {
        // Filtrar activos
        $pages = array_filter(
            $pages,
            fn(array $page) => ($page['status'] ?? null)?->isActive()
        );

        // Enriquecer datos manteniendo keys
        $pages = array_map(function (array $page) {
            $page['slide-alt'] = 'Imagen de ' . $page['name'];
            $page['name-schema'] = 'Página de ' . $page['name'];

            return $page;
        }, $pages);

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