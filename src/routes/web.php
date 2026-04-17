<?php

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\PrivacyPolicyController;
use App\Controllers\TermsAndConditionsController;
use App\Controllers\LegalNoticeController;

$router->get('/', [HomeController::class, 'index']);

// Páginas estáticas
$router->get('/nosotros', [AboutController::class, 'index']);
$router->get('/about', [AboutController::class, 'index']);
$router->get('/politica-de-privacidad', [PrivacyPolicyController::class, 'index']);
$router->get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
$router->get('/terminos-y-condiciones', [TermsAndConditionsController::class, 'index']);
$router->get('/terms-and-conditions', [TermsAndConditionsController::class, 'index']);
$router->get('/aviso-legal', [LegalNoticeController::class, 'index']);
$router->get('/legal-notice', [LegalNoticeController::class, 'index']);
