<?php

$pageContent = [
    'keywords' => 'términos y condiciones, política de uso, condiciones de servicio, contrato, legalidad, términos legales',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/terms-and-conditions.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Términos y condiciones',
            'category' => '',
            'title' => 'Términos y condiciones',
            'description' => 'En esta sección se detallan los términos y condiciones de uso de IF360, estableciendo las reglas y responsabilidades de los usuarios al acceder a nuestro sitio web y utilizar nuestros servicios, con el objetivo de garantizar una experiencia segura y transparente para todos los visitantes.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];