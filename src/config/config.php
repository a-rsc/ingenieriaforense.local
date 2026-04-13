<?php
// Configuración

// Aplicación
define('APP_NAME', 'IF360');
define('DOMAIN', 'ingenieriaforense.local');
define('BASE_URL', 'https://' . DOMAIN);
define('APP_VERSION', '1.0.0');

// Entorno
define('APP_ENV', 'development'); // Entornos: development, testing, staging y production

// Idioma y localización
define('APP_LOCALE', 'es_ES'); // Entorno de programación
define('APP_LANG', 'es-ES'); // Estándar IETF BCP 47
define('APP_LANGUAGE', 'Spanish'); // Language name in English

// Zona horaria
date_default_timezone_set('Europe/Madrid');

// Empresa
define('COMPANY_BRAND', 'IF360'); // Marca
define('COMPANY_NAME', 'Ingeniería Forense 360'); // Nombre
define('COMPANY_NIF', '53126821H'); // NIF
define('COMPANY_ADDRESS', '-'); // Dirección
define('COMPANY_LOCALITY', 'Barcelona'); // Ciudad
define('COMPANY_COUNTRY', 'ES'); // País
define('COMPANY_AREA_SERVED', 'ES'); // Área
define('COMPANY_PRICE_RANGE', '€€'); // Moneda
define('COMPANY_EMAIL', 'if360@' . DOMAIN); // Email
define('COMPANY_PHONE', '+34608084789'); // Teléfono
define('COMPANY_PHONE_A11Y', '+34 608 084 789'); // Teléfono accesibilidad (“a11y”)
define('COMPANY_ICON', '/images/if360-80x80.png'); // Icono
define('COMPANY_LOGO', '/images/if360.png'); // Logo
define('COMPANY_OG_LOGO', '/images/if360-1200x630.png'); // Logo Open Graph: Es un protocolo creado por Facebook para controlar cómo se ve tu web cuando se comparte en redes sociales. Se genera una tarjeta con: título, descripción, imagen... (WhatsApp, Facebook, LinkedIn, Twitter (X))

// Base de datos
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

// Correo electrónico
define('EMAIL_HOST', 'smtp.' . DOMAIN);
define('EMAIL_PORT', 587);
define('EMAIL_FROM', 'no-reply@' . DOMAIN);
// define('EMAIL_FROM_USER', '');
// define('EMAIL_FROM_PASS', '');
define('EMAIL_TO', 'if360@' . DOMAIN);
// define('EMAIL_TO_USER', 'if360@' . DOMAIN);
// define('EMAIL_TO_PASS', 'A6e6BFnfWa_*2A6');
define('CSRF_TOKEN', bin2hex(random_bytes(32))); // Token CSRF para formularios

// Caché
define('CACHE_ENABLED', true);
define('CACHE_PATH', BASE_PATH . 'cache/');

// Logs
define('LOG_ENABLED', true);
define('LOG_PATH', BASE_PATH . 'logs/');

// Seguridad
define('SECURITY_SALT', 'una_cadena_secreta_para_hashing');

// Archivos
define('UPLOADS_PATH', BASE_PATH . 'uploads/');

// Sesiones
define('SESSION_LIFETIME', 3600); // 1 hora
define('SESSION_NAME', 'session');
?>