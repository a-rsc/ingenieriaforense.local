<?php

$pageContent = [
    'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial',
    'content' => [
        'item_1_title' => '',
        'item_1' => "<p><strong>{$config['company']['name']}</strong> es una firma especializada en <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>ingeniería forense</strong>. Trabajamos con un enfoque profesional basado en el rigor técnico, la claridad documental y la utilidad real de cada intervención.</p><p>Nuestro trabajo se orienta a ayudar a empresas, particulares, comunidades y despachos a resolver necesidades técnicas relacionadas con trámites administrativos, adecuación de espacios, análisis de daños y elaboración de informes periciales.</p><p>Priorizamos la <strong>claridad, la independencia profesional y la trazabilidad técnica</strong> para que cada proyecto, licencia o informe aporte una base sólida para decidir, tramitar o defender una posición con fundamento.</p>",
        'item_2_title' => 'Historia',
        'item_2' => '<p>Nacimos con el propósito de aportar soluciones técnicas de alto nivel en el ámbito de los proyectos técnicos, licencias de actividad y peritajes. Desde el inicio, reunimos a un equipo de ingenieros especializados en distintas disciplinas, comprometidos con el análisis riguroso, la objetividad y la independencia profesional.</p>',
        'item_3_title' => 'Trayectoria',
        'item_3' => '<p>A lo largo de nuestra trayectoria hemos acompañado a clientes privados, empresas y administraciones públicas en la resolución de casos complejos, elaborando informes claros, verificables y fundamentados. Nuestro trabajo se apoya en metodologías contrastadas y en la actualización continua de conocimientos.</p>',
        'item_4_title' => 'Metodología',
        'item_4' => '<p>Aplicamos un enfoque multidisciplinar con inspecciones in situ, contraste documental y análisis normativo. Cada dictamen incluye diagnóstico de causas, evaluación de daños y conclusiones sólidas, preparadas para superar el escrutinio técnico y legal.</p>',
        'item_5_title' => 'Valores',
        'item_5' => '',
        'item_5_1_title' => 'Calidad: ',
        'item_5_1' => 'mejora continua y cumplimiento normativo.',
        'item_5_2_title' => 'Rigor técnico: ',
        'item_5_2' => 'criterios objetivos y verificables.',
        'item_5_3_title' => 'Independencia: ',
        'item_5_3' => 'imparcialidad en todo el proceso.',
        'item_5_4_title' => 'Transparencia: ',
        'item_5_4' => 'comunicación clara con el cliente.',
        'item_6_title' => 'Conoce a nuestro equipo',
        'item_6' => '¿Quieres saber más sobre nuestro equipo de ingenieros y áreas de especialización? Contáctanos para recibir información detallada.',
        'list' => [],

    ],
    'images' => [
        [
            'src' => '/images/pages/about.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Nosotros',
            'category' => '',
            'title' => 'Nuestro equipo',
            'description' => 'Conoce a los profesionales que conforman nuestro equipo de ingenieros y especialistas.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];