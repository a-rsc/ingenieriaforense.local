<?php

namespace App\Core;

use App\Core\Config;

abstract class Controller
{
    protected array $sharedData = [];

    public function __construct()
    {
        $config = Config::all();
        $pagesData = require content_path('data', 'pages');
        $resourcesData = require content_path('data', 'resources');

        $this->sharedData = [
            'config' => $config,

            'currentPage' => $pagesData['currentPage'] ?? [],
            'pages' => $pagesData['pages'] ?? [],
            'navHeaderPrimaries' => $pagesData['navHeaderPrimaries'] ?? [],
            'navFooterPrimaries' => $pagesData['navFooterPrimaries'] ?? [],
            'navFooterSecondaries' => $pagesData['navFooterSecondaries'] ?? [],

            'clients' => $resourcesData['clients'] ?? [],
            'partners' => $resourcesData['partners'] ?? [],
            'staff' => $resourcesData['staff'] ?? [],
            'testimonial' => $resourcesData['testimonial'] ?? [],
        ];
    }

    protected function view(string $view, array $data = [], string $layout = 'layouts/main'): void
    {
        $data = array_merge($this->sharedData, $data);

        View::render($view, $data, $layout);
    }
}