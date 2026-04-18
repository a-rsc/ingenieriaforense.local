<?php

namespace App\Core;

class View
{
    public static function render(string $view, array $data = [], string $layout = 'layouts/main'): void
    {
        $viewPath = BASE_PATH . '/src/app/Views/' . $view . '.php';
        $layoutPath = BASE_PATH . '/src/app/Views/' . $layout . '.php';

        if (!file_exists($viewPath)) {
            throw new \RuntimeException("Vista no encontrada: $viewPath");
        }

        extract($data, EXTR_SKIP);

        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        require $layoutPath;
    }

    public static function partial(string $partial, array $data = []): void
    {
        $partialPath = BASE_PATH . '/src/app/Views/partials/' . $partial . '.php';

        if (!file_exists($partialPath)) {
            throw new \RuntimeException("Partial no encontrado: $partialPath");
        }

        extract($data, EXTR_SKIP);

        require $partialPath;
    }
}