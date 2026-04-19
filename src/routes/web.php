<?php

use App\Controllers\PageController;

$router->get('/', [PageController::class, 'index']);

// Páginas estáticas
$router->get('/incendios-industriales', [PageController::class, 'industrialFires']);
$router->get('/industrial-fires', [PageController::class, 'industrialFires']);

$router->get('/incendios-industriales/origen-y-causa', [PageController::class, 'industrialFiresOriginCause']);
$router->get('/industrial-fires/origin-and-cause', [PageController::class, 'industrialFiresOriginCause']);

$router->get('/incendios-industriales/dinamica-del-fuego', [PageController::class, 'industrialFiresFireDynamics']);
$router->get('/industrial-fires/fire-dynamics', [PageController::class, 'industrialFiresFireDynamics']);

$router->get('/incendios-industriales/auditoria-pci', [PageController::class, 'industrialFiresPciAudit']);
$router->get('/industrial-fires/pci-audit', [PageController::class, 'industrialFiresPciAudit']);

$router->get('/casos-habituales', [PageController::class, 'standard']);
$router->get('/standard', [PageController::class, 'standard']);
$router->get('/nosotros', [PageController::class, 'about']);
$router->get('/about', [PageController::class, 'about']);
$router->get('/contacto', [PageController::class, 'contact']);
$router->get('/contact', [PageController::class, 'contact']);
$router->get('/politica-de-privacidad', [PageController::class, 'privacyPolicy']);
$router->get('/privacy-policy', [PageController::class, 'privacyPolicy']);
$router->get('/terminos-y-condiciones', [PageController::class, 'termsAndConditions']);
$router->get('/terms-and-conditions', [PageController::class, 'termsAndConditions']);
$router->get('/aviso-legal', [PageController::class, 'legalNotice']);
$router->get('/legal-notice', [PageController::class, 'legalNotice']);

// 404 interna
$router->get('/404', [PageController::class, 'notFound']);