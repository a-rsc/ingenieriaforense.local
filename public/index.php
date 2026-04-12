<?php
// Activar el modo estricto de comprobación de tipos para ese archivo
declare(strict_types=1);

// Ruta base del proyecto
define('BASE_PATH', dirname(__DIR__, 1));

// Cargar el código común
require BASE_PATH . '/src/autoload.php';

// Resolver página
require BASE_PATH . '/src/core/page-resolver.php';

// Cargar la plantilla
require BASE_PATH . '/src/core/page-dispatcher.php';

// Renderizar el layout
require BASE_PATH . '/src/templates/layout.php';

// Renderizar el layout
?>
