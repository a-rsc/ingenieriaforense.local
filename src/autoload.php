<?php
declare(strict_types=1);

// Cargar las configuraciones de la aplicación
require BASE_PATH . '/src/config/config.php';

// Cargar las variables globales
require BASE_PATH . '/src/var/globals.php';
require BASE_PATH . '/src/var/enums.php'; // Enums

// Cargar las funciones helpers
require BASE_PATH . '/src/helpers/helpers.php';

// Cargar las variables locales
require BASE_PATH . "/src/var/{$lang}/enums.php"; // Enums
require BASE_PATH . "/src/var/{$lang}/pages.php"; // Página y SEO del sitio
require BASE_PATH . "/src/var/{$lang}/members.php"; // Miembro del equipo, cliente o colaborador
require BASE_PATH . "/src/var/{$lang}/permits.php"; // Licencia
require BASE_PATH . "/src/var/{$lang}/projects.php"; // Proyecto
require BASE_PATH . "/src/var/{$lang}/reports.php"; // Ingeniería forense
require BASE_PATH . "/src/var/{$lang}/testimonials.php"; // Testimonio

exit;
?>
