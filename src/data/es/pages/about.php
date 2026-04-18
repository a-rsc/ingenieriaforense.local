<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'about' => [
        'text' => "<p><strong>{$name}</strong> es una firma especializada en <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>ingeniería forense</strong>. Trabajamos con un enfoque profesional basado en el rigor técnico, la claridad documental y la utilidad real de cada intervención.</p><p>Nuestro trabajo se orienta a ayudar a empresas, particulares, comunidades y despachos a resolver necesidades técnicas relacionadas con trámites administrativos, adecuación de espacios, análisis de daños y elaboración de informes periciales.</p><p>Priorizamos la <strong>claridad, la independencia profesional y la trazabilidad técnica</strong> para que cada proyecto, licencia o informe aporte una base sólida para decidir, tramitar o defender una posición con fundamento.</p>",
        'item_1' => 'Historia',
        'item_1_text' => '<p>Nacimos con el propósito de aportar soluciones técnicas de alto nivel en el ámbito de los proyectos técnicos, licencias de actividad y peritajes. Desde el inicio, reunimos a un equipo de ingenieros especializados en distintas disciplinas, comprometidos con el análisis riguroso, la objetividad y la independencia profesional.</p>',
        'item_2' => 'Trayectoria',
        'item_2_text' => '<p>A lo largo de nuestra trayectoria hemos acompañado a clientes privados, empresas y administraciones públicas en la resolución de casos complejos, elaborando informes claros, verificables y fundamentados. Nuestro trabajo se apoya en metodologías contrastadas y en la actualización continua de conocimientos.</p>',
        'item_3' => 'Metodología',
        'item_3_text' => '<p>Aplicamos un enfoque multidisciplinar con inspecciones in situ, contraste documental y análisis normativo. Cada dictamen incluye diagnóstico de causas, evaluación de daños y conclusiones sólidas, preparadas para superar el escrutinio técnico y legal.</p>',
        'item_4' => 'Valores',
        'item_4_value_1' => 'Calidad: ',
        'item_4_value_1_text' => 'mejora continua y cumplimiento normativo.',
        'item_4_value_2' => 'Rigor técnico: ',
        'item_4_value_2_text' => 'criterios objetivos y verificables.',
        'item_4_value_3' => 'Independencia: ',
        'item_4_value_3_text' => 'imparcialidad en todo el proceso.',
        'item_4_value_4' => 'Transparencia: ',
        'item_4_value_4_text' => 'comunicación clara con el cliente.',
        'item_5' => 'Conoce a nuestro equipo',
        'item_5_text' => '¿Quieres saber más sobre nuestro equipo de ingenieros y áreas de especialización? Contáctanos para recibir información detallada.',
        'list' => [],
        'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial',
        'images' => [
            [
                'src' => '/images/about1.jpg',
                'alt' => 'Imagen de About 1',
                'category' => 'Equipo',
                'title' => 'Nuestro equipo',
                'description' => 'Conoce a los profesionales que conforman nuestro equipo de ingenieros y especialistas.',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];