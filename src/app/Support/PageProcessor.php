<?php

namespace App\Support;

use App\Core\Config;
use App\Enums\NavType;

class PageProcessor
{
    public static function process(array $pages): array
    {
        // Get context data
        $langCode = app_lang_code();
        $pageKey = Config::get('current_page');

        // Filter active pages
        $pages = array_filter(
            $pages,
            fn(array $page) => ($page['status'] ?? null)?->isActive()
        );

        // Load page-specific content
        $pageContentPath = BASE_PATH . "/src/data/{$langCode}/pages/{$pageKey}.php";

        if (!file_exists($pageContentPath)) {
            $pageContentPath = BASE_PATH . "/src/data/es/pages/{$pageKey}.php";
        }

        $pageContent = file_exists($pageContentPath)
            ? require $pageContentPath
            : [];

        $pages[$pageKey] = array_replace_recursive(
            $pages[$pageKey] ?? [],
            $pageContent['pages'] ?? []
        );

        $parent = [];
        $children = [];
        $navHeaderPrimaries = [];
        $navFooterPrimaries = [];
        $navFooterSecondaries = [];
        $pagesByParent = [];

        // Split pages by category while preserving original keys
        foreach ($pages as $key => $page) {
            $categories = $page['category'] ?? [];

            if (in_array(NavType::HEADERPRIMARY, $categories, true)) {
                $navHeaderPrimaries[$key] = $page;
            }

            if (in_array(NavType::FOOTERPRIMARY, $categories, true)) {
                $navFooterPrimaries[$key] = $page;
            }

            if (in_array(NavType::FOOTERSECONDARY, $categories, true)) {
                $navFooterSecondaries[$key] = $page;
            }

            // Group pages by parent key
            $parentKey = $page['parent'] ?? null;

            if ($parentKey !== null) {
                $pagesByParent[$parentKey][$key] = $page;
            }
        }

        // Attach child pages to each footer primary item
        foreach ($navFooterPrimaries as $key => &$footerPage) {
            $footerPage['children'] = $pagesByParent[$key] ?? [];
        }
        unset($footerPage);

        // Resolve current page parent
        if (!empty($pages[$pageKey]['parent'])) {
            $parentKey = $pages[$pageKey]['parent'];

            if (!empty($pages[$parentKey])) {
                $parent = $pages[$parentKey];
            }
        }

        // Resolve current page children
        $children = $pagesByParent[$pageKey] ?? [];

        return [
            'pages' => $pages,
            'currentPage' => $pages[$pageKey] ?? [],
            'parent' => $parent,
            'children' => $children,
            'navHeaderPrimaries' => $navHeaderPrimaries,
            'navFooterPrimaries' => $navFooterPrimaries,
            'navFooterSecondaries' => $navFooterSecondaries,
        ];
    }
}