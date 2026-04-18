<?php

namespace App\Core;

use App\Core\Config;

abstract class Controller
{
    protected array $sharedData = [];

    public function __construct()
    {
        $pagesData = require content_path('data', 'pages');

        $membersData = require content_path('data', 'members');
        $testimonialData = require content_path('data', 'testimonials');

        $this->sharedData = [
            'config' => Config::all(),

            'pages' => $pagesData['pages'] ?? [],
            'navPrimaries' => $pagesData['navPrimaries'] ?? [],
            'navSecondaries' => $pagesData['navSecondaries'] ?? [],

            'clients' => $membersData['clients'] ?? [],
            'partners' => $membersData['partners'] ?? [],
            'staff' => $membersData['staff'] ?? [],

            'testimonial' => $testimonialData ?? [],
        ];
    }

    protected function view(string $view, array $data = [], string $layout = 'layouts/main'): void
    {
        $data = array_merge($this->sharedData, $data);

        View::render($view, $data, $layout);
    }
}