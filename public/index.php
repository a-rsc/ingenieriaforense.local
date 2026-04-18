<?php

declare(strict_types=1);

// echo ini_get('log_errors') . '<br>';
// echo ini_get('error_log') . '<br>';

use App\Core\App;
use App\Core\Config;

define('BASE_PATH', dirname(__DIR__, 1));

try {
    require BASE_PATH . '/src/autoload.php';
    Config::load(BASE_PATH . '/src/config/config.php');
    require BASE_PATH . '/src/helpers/helpers.php';

    $app = new App();
    $app->run();

} catch (Throwable $e) {
    error_log($e->getMessage());
    http_response_code(500);
    $lang = $_GET['lang'] ?? 'es';
    require BASE_PATH . '/src/app/Views/500.php';
    exit;
}