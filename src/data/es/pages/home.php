<?php

$pageContent = [
    'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial',
    'content' => [
        'item_1_title' => '',
        'item_1' => "<p>En {$config['company']['name']} ofrecemos <strong>ingeniería técnica</strong> orientada a <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>informes periciales</strong>. Trabajamos con un enfoque claro, riguroso e independiente para ayudarte a resolver trámites, adaptar espacios y documentar técnicamente cada caso.</p><p>Prestamos servicio tanto a empresas y titulares de actividad como a particulares, comunidades y despachos que necesitan apoyo en <strong>apertura o legalización de negocios</strong>, <strong>adecuación de locales y naves</strong> o <strong>análisis técnico de daños, humedades, grietas e incumplimientos de obra</strong>.</p><p>El objetivo es aportar <strong>claridad técnica, documentación bien planteada y una vía de actuación útil</strong> desde el primer análisis hasta la tramitación o el informe final.</p>",
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/Causas-de-humedad.webp',
            'alt' => $config['app']['translations']['alt'] . 'Causas de humedad',
            'category' => 'Humedades',
            'title' => 'Causas de humedad',
            'description' => 'Análisis técnico de las causas de humedad en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/pages/Danos-estructurales.webp',
            'alt' => $config['app']['translations']['alt'] . 'Daños estructurales',
            'category' => 'Daños',
            'title' => 'Daños estructurales',
            'description' => 'Evaluación de daños estructurales en edificios, viviendas y locales comerciales, con análisis técnico y propuestas de reparación.',
        ],
        [
            'src' => '/images/pages/Defectos-constructivos.webp',
            'alt' => $config['app']['translations']['alt'] . 'Defectos constructivos',
            'category' => 'Defectos',
            'title' => 'Defectos constructivos',
            'description' => 'Análisis técnico de los defectos constructivos en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/pages/Incumplimiento-contrato-obra.webp',
            'alt' => $config['app']['translations']['alt'] . 'Incumplimiento contrato obra',
            'category' => 'Incumplimiento',
            'title' => 'Incumplimiento contrato obra',
            'description' => 'Análisis técnico de los incumplimientos de obra en edificios, viviendas y locales comerciales.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];