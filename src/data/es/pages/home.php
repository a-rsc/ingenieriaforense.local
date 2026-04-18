<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'home' => [
        'text' => "<p>En {$name} ofrecemos <strong>ingeniería técnica</strong> orientada a <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>informes periciales</strong>. Trabajamos con un enfoque claro, riguroso e independiente para ayudarte a resolver trámites, adaptar espacios y documentar técnicamente cada caso.</p><p>Prestamos servicio tanto a empresas y titulares de actividad como a particulares, comunidades y despachos que necesitan apoyo en <strong>apertura o legalización de negocios</strong>, <strong>adecuación de locales y naves</strong> o <strong>análisis técnico de daños, humedades, grietas e incumplimientos de obra</strong>.</p><p>El objetivo es aportar <strong>claridad técnica, documentación bien planteada y una vía de actuación útil</strong> desde el primer análisis hasta la tramitación o el informe final.</p>",
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
    ]
];

return [
    'pages' => $pageContent,
];