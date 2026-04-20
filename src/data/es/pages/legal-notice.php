<?php

$pageContent = [
    'keywords' => 'aviso legal, condiciones de uso, politica de privacidad, responsabilidad, terminos legales',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/legal-notice.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Aviso legal',
            'category' => '',
            'title' => 'Aviso Legal',
            'description' => 'Este es el aviso legal de IF360, donde se establecen las condiciones de uso, la política de privacidad y la responsabilidad de los usuarios al acceder a nuestro sitio web.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];