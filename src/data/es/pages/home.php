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
                'src' => '/images/home1.jpg',
                'alt' => 'Imagen de Home 1',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];