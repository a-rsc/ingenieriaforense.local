<?php
// Activar el modo estricto de comprobación de tipos para ese archivo
declare(strict_types=1);

// Ruta base del proyecto
define('BASE_PATH', dirname(__DIR__, 1));

// Cargar el código común
require BASE_PATH . '/src/autoload.php';

// Cargar el servicio específico
require BASE_PATH . '/src/services/mail.php';
