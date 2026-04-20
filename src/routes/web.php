<?php

use App\Controllers\PageController;
use App\Core\Config;

$routeHandlers = [
    'home' => [PageController::class, 'index'],

    'industrial-fires' => [PageController::class, 'industrialFires'],
    'industrial-fires-origin-cause' => [PageController::class, 'industrialFires'],
    'industrial-fires-fire-dynamics' => [PageController::class, 'industrialFires'],
    'industrial-fires-pci-audit' => [PageController::class, 'industrialFires'],

    'industrial-accidents' => [PageController::class, 'industrialAccidents'],
    'industrial-accidents-child1' => [PageController::class, 'industrialAccidents'],
    'industrial-accidents-child2' => [PageController::class, 'industrialAccidents'],
    'industrial-accidents-child3' => [PageController::class, 'industrialAccidents'],

    'standard' => [PageController::class, 'standard'],
    'about' => [PageController::class, 'about'],
    'contact' => [PageController::class, 'contact'],

    'privacy-policy' => [PageController::class, 'legalContent'],
    'terms-and-conditions' => [PageController::class, 'legalContent'],
    'legal-notice' => [PageController::class, 'legalContent'],
];

$routes = Config::get('routes', []);

foreach ($routes as $lang => $langRoutes) {
    foreach ($langRoutes as $key => $slug) {
        if (!isset($routeHandlers[$key])) {
            continue;
        }

        $path = $slug === '' ? '/' : $slug;

        $router->get($path, $routeHandlers[$key]);
    }
}

$router->get('/404', [PageController::class, 'notFound']);