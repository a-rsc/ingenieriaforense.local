<?php

declare(strict_types=1);

/**
 * Autoload PSR-4 simple para el namespace App\
 *
 * Permite cargar clases automáticamente sin usar require manual.
 * Ejemplo:
 *   use App\Core\Router;
 *   new Router();
 *
 * Buscará:
 *   src/app/Core/Router.php
 */
spl_autoload_register(function (string $class): void {

    // Prefijo de namespace
    $prefix = 'App\\';

    // Carpeta base donde están las clases
    $baseDir = BASE_PATH . '/src/app/';

    // Si la clase no usa el namespace App\, ignorar
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    // Quitar el prefijo (App\)
    $relativeClass = substr($class, strlen($prefix));

    // Convertir namespace a ruta de archivo
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // Verificar si el archivo existe
    if (!file_exists($file)) {
        return;
    }

    // Cargar el archivo automáticamente
    require $file;
});