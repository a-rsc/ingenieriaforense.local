<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'text' => '',
    'list' => [],
    'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial',
    'images' => [
        [
            'src' => '/images/maincarousel/Causas-de-humedad.webp',
            'alt' => 'Imagen de Causas de humedad',
            'category' => 'Humedades',
            'title' => 'Causas de humedad',
            'description' => 'Análisis técnico de las causas de humedad en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/maincarousel/Danos-estructurales.webp',
            'alt' => 'Imagen de Daños estructurales',
            'category' => 'Daños estructurales',
            'title' => 'Daños estructurales',
            'description' => 'Evaluación de daños estructurales en edificios, viviendas y locales comerciales, con análisis técnico y propuestas de reparación.',
        ],
        [
            'src' => '/images/maincarousel/Defectos-constructivos.webp',
            'alt' => 'Imagen de Defectos constructivos',
            'category' => 'Defectos constructivos',
            'title' => 'Defectos constructivos',
            'description' => 'Análisis técnico de los defectos constructivos en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/maincarousel/Incumplimiento-contrato-obra.webp',
            'alt' => 'Imagen de Incumplimiento de obra',
            'category' => 'Incumplimiento de obra',
            'title' => 'Incumplimiento de obra',
            'description' => 'Análisis técnico de los incumplimientos de obra en edificios, viviendas y locales comerciales.',
        ],
    ],
];

return [
    'pages' => $pageContent,
];