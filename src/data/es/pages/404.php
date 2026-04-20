<?php

$pageContent = [
    'keywords' => 'página no encontrada, error 404, página inexistente, enlace roto, recurso no disponible',
    'content' => [
        'item_1_title' => '',
        'item_1' => '<p>La página que buscas no se ha encontrado. Es posible que haya sido eliminada, cambiada de nombre o esté temporalmente no disponible. Te recomendamos volver a la <a href="' . url('home') . '">Página Home</a> o utilizar el menú de navegación para encontrar la información que necesitas.</p>',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/404.jpg',
            'alt' => $config['app']['translations']['alt'] . '404',
            'category' => '',
            'title' => 'Error 404',
            'description' => 'La página que buscas no se ha encontrado.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];