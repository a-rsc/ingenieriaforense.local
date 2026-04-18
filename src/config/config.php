<?php

// Base del sistema
$protocol = 'https';
$domain = 'ingenieriaforense.local';
$baseUrl = $protocol . '://' . $domain;

// Email base
$emailFrom = 'no-reply@' . $domain;
$emailTo = 'if360@' . $domain;
$smtpHost = 'smtp.' . $domain;

// Rutas base
$storagePath = BASE_PATH . '/storage/';
$cachePath = $storagePath . 'cache/';
$logPath = $storagePath . 'logs/';
$uploadPath = $storagePath . 'uploads/';

// Configuración de entorno
date_default_timezone_set('Europe/Madrid');

return [

    'current_page' => 'home',

    'routes' => [
        'es' => [
            'home' => '',
            'about' => '/nosotros',
            'contact' => '/contacto',
            'privacy' => '/politica-de-privacidad',
            'terms-and-conditions' => '/terminos-y-condiciones',
            'legal-notice' => '/aviso-legal',
        ],
        'en' => [
            'home' => '',
            'about' => '/about',
            'contact' => '/contact',
            'privacy' => '/privacy-policy',
            'terms-and-conditions' => '/terms-and-conditions',
            'legal-notice' => '/legal-notice',
        ],
    ],

    'app' => [
        'name' => 'IF360',
        'version' => '1.0.0',
        'env' => 'development',
        'protocol' => $protocol,
        'domain' => $domain,
        'url' => $baseUrl,
        'charset' => 'UTF-8',
        'timezone' => 'Europe/Madrid',

        'supported_langs' => ['es', 'en'],
        'lang' => 'es-ES',
        'lang_locale' => 'es_ES',
        'language' => 'Spanish',
        'lang_code' => 'es',
        'lang_filepath' => BASE_PATH . '/src/config/lang/es.php',
    ],

    'company' => [
        'brand' => 'IF360',
        'name' => 'Ingeniería Forense 360',
        'nif' => '53126821H',
        'address' => '-',
        'locality' => 'Barcelona',
        'country' => 'ES',
        'area_served' => 'ES',
        'price_range' => '€€',
        'email' => $emailTo,
        'phone' => '+34608084789',
        'phone_a11y' => '+34 608 084 789',

        // URLs completas (muy útil para SEO)
        'icon' => $baseUrl . '/images/if360-80x80.png',
        'logo' => $baseUrl . '/images/if360.png',
        'og_logo' => $baseUrl . '/images/if360-1200x630.png',
    ],

    'db' => [
        'host' => '127.0.0.1',
        'dbname' => 'test',
        'user' => 'root',
        'pass' => 'password',
        'charset' => 'utf8mb4',
    ],

    'email' => [
        'host' => $smtpHost,
        'port' => 587,
        'from' => $emailFrom,
        'to' => $emailTo,
        'csrf_token' => bin2hex(random_bytes(32)),
    ],

    'paths' => [
        'storage' => $storagePath,
        'cache' => $cachePath,
        'logs' => $logPath,
        'uploads' => $uploadPath,
    ],

    'cache' => [
        'enabled' => true,
        'path' => $cachePath,
    ],

    'log' => [
        'enabled' => true,
        'path' => $logPath,
    ],

    'security' => [
        'salt' => 'una_cadena_secreta_para_hashing',
    ],

    'uploads' => [
        'path' => $uploadPath,
    ],

    'session' => [
        'lifetime' => 3600,
        'name' => 'if360_session',
    ],
];