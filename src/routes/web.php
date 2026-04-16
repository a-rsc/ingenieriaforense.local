<?php

use App\Controllers\HomeController;
use App\Controllers\AboutController;

$router->get('/', [HomeController::class, 'index']);

// Misma página, distintas rutas según idioma
$router->get('/nosotros', [AboutController::class, 'index']);
$router->get('/about', [AboutController::class, 'index']);