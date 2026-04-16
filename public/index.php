<?php

declare(strict_types=1);

use App\Core\App;
use App\Core\Config;

// Ruta base del proyecto
define('BASE_PATH', dirname(__DIR__, 1));

// Autoload
require BASE_PATH . '/src/autoload.php';

// Helpers
require_once BASE_PATH . '/src/helpers/helpers.php';

// Config
Config::load(BASE_PATH . '/src/config/config.php');

// Run app
$app = new App();
$app->run();
?>