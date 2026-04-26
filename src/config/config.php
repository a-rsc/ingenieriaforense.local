<?php

// Base del sistema
$protocol = 'https';
$domain = 'ingenieriaforense.es';
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

            'industrial-fires' => '/incendios-industriales',
            'industrial-fires-origin-cause' => '/incendios-industriales/origen-y-causa',
            'industrial-fires-fire-dynamics' => '/incendios-industriales/dinamica-del-fuego',
            'industrial-fires-pci-audit' => '/incendios-industriales/auditoria-pci',

            'industrial-accidents' => '/accidentes-industriales',
            'industrial-accidents-child1' => '/accidentes-industriales/industrial-accidents-child1',
            'industrial-accidents-child2' => '/accidentes-industriales/industrial-accidents-child2',
            'industrial-accidents-child3' => '/accidentes-industriales/industrial-accidents-child3',

            'standard' => '/casos-habituales',
            'about' => '/nosotros',
            'contact' => '/contacto',
            'privacy-policy' => '/politica-de-privacidad',
            'terms-and-conditions' => '/terminos-y-condiciones',
            'legal-notice' => '/aviso-legal',
        ],
        'en' => [
            'home' => '',

            'industrial-fires' => '/industrial-fires',
            'industrial-fires-origin-cause' => '/industrial-fires/origin-and-cause',
            'industrial-fires-fire-dynamics' => '/industrial-fires/fire-dynamics',
            'industrial-fires-pci-audit' => '/industrial-fires/pci-audit',

            'industrial-accidents' => '/industrial-accidents',
            'industrial-accidents-child1' => '/industrial-accidents/industrial-accidents-child1',
            'industrial-accidents-child2' => '/industrial-accidents/industrial-accidents-child2',
            'industrial-accidents-child3' => '/industrial-accidents/industrial-accidents-child3',

            'standard' => '/standard',
            'about' => '/about',
            'contact' => '/contact',
            'privacy-policy' => '/privacy-policy',
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
        'translations_path' => BASE_PATH . '/src/config/lang/es.php',
        'translations' => [],
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
        'phone_a11y' => '608 084 789',

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