<?php

namespace App\Core;

abstract class Controller
{
    protected array $sharedData = [];

    public function __construct()
    {
        // Idioma actual (de la URL)
        $lang = Config::get('lang_code', 'es');

        // Rutas dinámicas
        $membersPath = BASE_PATH . "/src/data/{$lang}/members.php";
        $testimonialsPath = BASE_PATH . "/src/data/{$lang}/testimonials.php";

        // Fallback por si no existe idioma
        if (!file_exists($membersPath)) {
            $membersPath = BASE_PATH . '/src/data/es/members.php';
        }

        if (!file_exists($testimonialsPath)) {
            $testimonialsPath = BASE_PATH . '/src/data/es/testimonials.php';
        }

        $membersData = require $membersPath;
        $testimonialsData = require $testimonialsPath;

        $this->sharedData = [
            'config' => Config::all(),

            'clients' => $membersData['clients'] ?? [],
            'partners' => $membersData['partners'] ?? [],
            'staff' => $membersData['staff'] ?? [],

            'testimonials' => $testimonialsData ?? [],
        ];
    }

    protected function view(string $view, array $data = [], string $layout = 'layouts/main'): void
    {
        $data = array_merge($this->sharedData, $data);

        View::render($view, $data, $layout);
    }
}
?>
