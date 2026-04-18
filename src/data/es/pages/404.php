<?php

$pageContent = [
    '404' => [
        'text' => '<p>La página que buscas no se ha encontrado. Es posible que haya sido eliminada, cambiada de nombre o esté temporalmente no disponible. Te recomendamos volver a la <a href="' . url('home') . '">Página Home</a> o utilizar el menú de navegación para encontrar la información que necesitas.</p>',
        'list' => [],
        'keywords' => 'página no encontrada, error 404, página inexistente, enlace roto, recurso no disponible',
        'images' => [
            [
                'src' => '/images/legal-notice1.jpg',
                'alt' => 'Imagen de Legal Notice 1',
                'category' => 'Error 404',
                'title' => 'Error 404',
                'description' => 'La página que buscas no se ha encontrado.',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];