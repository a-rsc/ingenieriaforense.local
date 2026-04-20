<?php

use App\Controllers\PageController;

$router->get('/', [PageController::class, 'index']);

// Páginas estáticas
// Parent 1 - child 3
$router->get('/incendios-industriales', [PageController::class, 'industrialFires']);
$router->get('/industrial-fires', [PageController::class, 'industrialFires']);

$router->get('/incendios-industriales/origen-y-causa', [PageController::class, 'industrialFires']);
$router->get('/industrial-fires/origin-and-cause', [PageController::class, 'industrialFires']);

$router->get('/incendios-industriales/dinamica-del-fuego', [PageController::class, 'industrialFires']);
$router->get('/industrial-fires/fire-dynamics', [PageController::class, 'industrialFires']);

$router->get('/incendios-industriales/auditoria-pci', [PageController::class, 'industrialFires']);
$router->get('/industrial-fires/pci-audit', [PageController::class, 'industrialFires']);

// Parent 2 - child 3
$router->get('/accidentes-industriales', [PageController::class, 'industrialAccidents']);
$router->get('/industrial-accidents', [PageController::class, 'industrialAccidents']);

$router->get('/accidentes-industriales/industrial-accidents-child1', [PageController::class, 'industrialAccidents']);
$router->get('/industrial-accidents/industrial-accidents-child1', [PageController::class, 'industrialAccidents']);

$router->get('/accidentes-industriales/industrial-accidents-child2', [PageController::class, 'industrialAccidents']);
$router->get('/industrial-accidents/industrial-accidents-child2', [PageController::class, 'industrialAccidents']);

$router->get('/accidentes-industriales/industrial-accidents-child3', [PageController::class, 'industrialAccidents']);
$router->get('/industrial-accidents/industrial-accidents-child3', [PageController::class, 'industrialAccidents']);

$router->get('/casos-habituales', [PageController::class, 'standard']);
$router->get('/standard', [PageController::class, 'standard']);
$router->get('/nosotros', [PageController::class, 'about']);
$router->get('/about', [PageController::class, 'about']);
$router->get('/contacto', [PageController::class, 'contact']);
$router->get('/contact', [PageController::class, 'contact']);

$router->get('/politica-de-privacidad', [PageController::class, 'legalContent']);
$router->get('/privacy-policy', [PageController::class, 'legalContent']);
$router->get('/terminos-y-condiciones', [PageController::class, 'legalContent']);
$router->get('/terms-and-conditions', [PageController::class, 'legalContent']);
$router->get('/aviso-legal', [PageController::class, 'legalContent']);
$router->get('/legal-notice', [PageController::class, 'legalContent']);

// 404 interna
$router->get('/404', [PageController::class, 'notFound']);