<?php
declare(strict_types=1);

require BASE_PATH . "/src/var/$lang/pages/industrial-fires-page.php";

// Pages
$pages = [
    'Home' => [
        'name' => 'Home',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Home',
        'description' => 'Ingeniería técnica para proyectos, licencias de actividad e informes periciales. Te ayudamos a tramitar, analizar y documentar cada caso con rigor y claridad.',
        'text' => '<p>En ' . COMPANY_BRAND . ' ofrecemos <strong>ingeniería técnica</strong> orientada a <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>informes periciales</strong>. Trabajamos con un enfoque claro, riguroso e independiente para ayudarte a resolver trámites, adaptar espacios y documentar técnicamente cada caso.</p><p>Prestamos servicio tanto a empresas y titulares de actividad como a particulares, comunidades y despachos que necesitan apoyo en <strong>apertura o legalización de negocios</strong>, <strong>adecuación de locales y naves</strong> o <strong>análisis técnico de daños, humedades, grietas e incumplimientos de obra</strong>.</p><p>El objetivo es aportar <strong>claridad técnica, documentación bien planteada y una vía de actuación útil</strong> desde el primer análisis hasta la tramitación o el informe final.</p>',
        'list' => [],
        'url' => '/',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Home'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial'
    ],
    'Industrial Fires' => [
        'name' => 'Incendios industriales',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Ingeniería Forense de Incendios industriales',
        'description' => 'Más allá del "Origen y Causa": Evidencia científica para el sector legal y asegurador.',
        'text' => $industrialFiresPage,
        'list' => [],
        'url' => '/incendios-industriales',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Incendios industriales'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => ''
    ],
    'Permits' => [
        'name' => 'Licencias',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Licencias de actividad',
        'description' => 'Gestionamos licencias de actividad, comunicaciones previas y legalizaciones con revisión técnica previa, documentación adecuada y enfoque para reducir incidencias y requerimientos.',
        'text' => '<p>Gestionamos <strong>licencias de actividad</strong>, <strong>comunicaciones previas</strong> y procesos de <strong>legalización de actividad</strong> con una revisión técnica previa que permite detectar condicionantes y preparar correctamente la documentación desde el inicio.</p><p>Analizamos el caso, revisamos el <strong>local o nave</strong>, identificamos el procedimiento aplicable y te ayudamos a presentar un expediente más sólido, con el objetivo de <strong>reducir incidencias, requerimientos y retrasos</strong>.</p><p>Este servicio está orientado a empresas, titulares de negocio y propietarios que necesitan abrir, adaptar o regularizar una actividad con mayor <strong>seguridad técnica y administrativa</strong>.</p>',
        'list' => [],
        'url' => '/licencias-de-actividad',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Licencias de actividad'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'licencias de actividad, licencia de apertura, licencia de actividad nave industrial, comunicación previa, legalización de actividad, ingeniero licencia actividad, tramitación licencia actividad'
    ],
    'Reports' => [
        'name' => 'Peritajes',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Ingeniería forense',
        'description' => 'Realizamos informes periciales e ingeniería forense para humedades, grietas, daños estructurales, defectos constructivos e incumplimientos de obra con análisis técnico independiente.',
        'text' => '<p>Realizamos servicios de <strong>ingeniería forense</strong> e <strong>informes periciales</strong> para casos de <strong>humedades, grietas, daños estructurales, defectos constructivos e incumplimientos de obra</strong>. Nuestro enfoque parte del análisis técnico independiente, la causalidad y la utilidad documental del informe.</p><p>Estudiamos cada caso para identificar el origen real del problema, valorar su alcance y documentarlo con criterio técnico, tanto para una reclamación amistosa como para un procedimiento judicial o una negociación entre partes.</p><p>Este bloque está orientado a particulares, comunidades, empresas y despachos que necesitan un <strong>diagnóstico claro</strong> y una <strong>base técnica defendible</strong> para tomar decisiones o reclamar con fundamento.</p>',
        'list' => [],
        'url' => '/ingenieria-forense',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Peritajes'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'ingeniería forense, informes periciales, peritajes, perito humedades, perito grietas, daños estructurales, defectos constructivos, incumplimiento de obra, tasación judicial'
    ],
    'Standard' => [
        'name' => 'Casuística habitual',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Casuística habitual',
        'description' => 'Analizamos casos habituales relacionados con licencias, proyectos técnicos, humedades, grietas, daños estructurales, defectos constructivos y conflictos de obra.',
        'text' => '<p>En esta sección reunimos <strong>casos habituales</strong> que tratamos en el ámbito de las <strong>licencias de actividad</strong>, los <strong>proyectos técnicos</strong> y la <strong>ingeniería forense</strong>. El objetivo es ayudarte a identificar mejor tu situación y entender qué tipo de intervención técnica puede necesitar.</p><p>Aquí encontrarás escenarios frecuentes como <strong>licencia para nave industrial</strong>, <strong>comunicación previa</strong>, <strong>legalización de actividad</strong>, <strong>humedades</strong>, <strong>grietas</strong>, <strong>defectos constructivos</strong>, <strong>daños estructurales</strong> o <strong>incumplimientos de obra</strong>.</p><p>Esta página sirve como punto de entrada para orientar al usuario hacia el servicio más adecuado según su problema, necesidad de trámite o tipo de conflicto técnico.</p>',
        'list' => [],
        'url' => '/casuistica-habitual',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Casuística habitual'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'casos habituales, licencia de actividad, proyecto técnico, humedades, grietas, daños estructurales, defectos constructivos, informe pericial, conflicto de obra'
    ],
    'Blog' => [
        'name' => 'Blog',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Blog',
        'description' => 'Blog sobre licencias de actividad, proyectos técnicos, informes periciales, patologías constructivas y dudas frecuentes para ayudarte a tomar mejores decisiones técnicas.',
        'text' => '<p>En nuestro <strong>blog de ingeniería</strong> compartimos contenidos sobre <strong>licencias de actividad</strong>, <strong>proyectos técnicos</strong>, <strong>informes periciales</strong> y <strong>patologías constructivas</strong> para ayudarte a entender mejor cada situación antes de tomar una decisión.</p><p>Publicamos artículos sobre trámites, documentación, plazos, viabilidad, humedades, grietas, defectos constructivos y otras dudas frecuentes relacionadas con la apertura de actividades o la resolución de conflictos técnicos.</p><p>El objetivo del blog es aportar información útil y clara, conectada con problemas reales y orientada a facilitar el siguiente paso cuando se necesita apoyo profesional.</p>',
        'list' => [],
        'url' => '/blog',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Blog'],
        ],
        'slide-image' => '',
        'status' => Status::INACTIVE,
        'keywords' => 'blog ingeniería, licencias de actividad, proyectos técnicos, informes periciales, humedades, grietas, patologías constructivas, comunicación previa, perito judicial'
    ],
    'About' => [
        'name' => 'Nosotros',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Sobre ' . COMPANY_BRAND,
        'description' => 'Conoce a ' . COMPANY_BRAND . ', una firma especializada en proyectos técnicos, licencias de actividad e ingeniería forense con enfoque claro, riguroso e independiente.',
        'text' => '<p><strong>' . COMPANY_BRAND . '</strong> es una firma especializada en <strong>proyectos técnicos</strong>, <strong>licencias de actividad</strong> e <strong>ingeniería forense</strong>. Trabajamos con un enfoque profesional basado en el rigor técnico, la claridad documental y la utilidad real de cada intervención.</p><p>Nuestro trabajo se orienta a ayudar a empresas, particulares, comunidades y despachos a resolver necesidades técnicas relacionadas con trámites administrativos, adecuación de espacios, análisis de daños y elaboración de informes periciales.</p><p>Priorizamos la <strong>claridad, la independencia profesional y la trazabilidad técnica</strong> para que cada proyecto, licencia o informe aporte una base sólida para decidir, tramitar o defender una posición con fundamento.</p>',
        'list' => [],
        'url' => '/sobre-' . strtolower(COMPANY_BRAND),
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Nosotros'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => COMPANY_BRAND . ', ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, rigor técnico, independencia profesional'
    ],
    'Contact' => [
        'name' => 'Contacto',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::PRIMARY,
        'title' => 'Contacto',
        'description' => 'Contacta con nosotros para valorar tu caso, resolver dudas técnicas y solicitar presupuesto para proyectos, licencias de actividad o informes periciales.',
        'text' => '<p>Si necesitas ayuda con un <strong>proyecto técnico</strong>, una <strong>licencia de actividad</strong> o un <strong>informe pericial</strong>, puedes contactar con nosotros para valorar tu caso y orientarte sobre la mejor vía técnica.</p><p>Cuéntanos tu situación, la documentación disponible y el objetivo que necesitas resolver. Analizaremos tu caso para indicarte si hace falta un proyecto, una tramitación, una revisión técnica previa o un informe pericial más completo.</p><p>Este es el punto de entrada para solicitar <strong>presupuesto</strong>, resolver dudas y dar el siguiente paso con una base más clara y ordenada.</p>',
        'list' => [],
        'url' => '/contacto',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Contacto'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'contacto ingeniería técnica, presupuesto licencia de actividad, presupuesto proyecto técnico, presupuesto informe pericial, consulta técnica, peritaje, ingeniería forense'
    ],
    'Privacy Policy' => [
        'name' => 'Política de Privacidad',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::SECONDARY,
        'title' => 'Política de Privacidad',
        'description' => 'Consulta nuestra política de privacidad para conocer cómo tratamos y protegemos tus datos personales en este sitio web.',
        'text' => '<p>En esta página puedes consultar nuestra política de privacidad y conocer cómo tratamos, protegemos y gestionamos los datos personales facilitados a través de este sitio web.</p>',
        'list' => [],
        'url' => '/politica-de-privacidad',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Política de Privacidad'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'política de privacidad, protección de datos, privacidad web, tratamiento de datos personales, RGPD'
    ],
    'Terms and Conditions' => [
        'name' => 'Términos y Condiciones',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::SECONDARY,
        'title' => 'Términos y Condiciones',
        'description' => 'Consulta los términos y condiciones de uso de este sitio web y la información aplicable a su navegación y utilización.',
        'text' => '<p>En esta página puedes consultar los términos y condiciones aplicables al uso de este sitio web, así como la información relativa a su navegación, acceso y utilización.</p>',
        'list' => [],
        'url' => '/terminos-y-condiciones',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Términos y Condiciones'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'términos y condiciones, condiciones de uso, uso del sitio web, condiciones legales'
    ],
    'Legal Notice' => [
        'name' => 'Aviso Legal',
        'category' => Category::PAGE,
        'subcategory' => NavCategory::SECONDARY,
        'title' => 'Aviso Legal',
        'description' => 'Consulta el aviso legal de este sitio web para conocer la información identificativa, condiciones generales y aspectos legales aplicables.',
        'text' => '<p>En esta página puedes consultar el aviso legal del sitio web, incluyendo la información identificativa del titular, las condiciones generales y los aspectos legales aplicables.</p>',
        'list' => [],
        'url' => '/aviso-legal',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Aviso Legal'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'aviso legal, información legal, titular del sitio web, condiciones legales, información corporativa'
    ],
    '404' => [
        'name' => 'Página no encontrada',
        'category' => Category::PAGE,
        'subcategory' => '',
        'title' => 'Página no encontrada',
        'description' => 'La página que buscas no está disponible o ha cambiado de ubicación.',
        'text' => '<p>La página que buscas no está disponible, ha cambiado de ubicación o ya no existe.</p>',
        'list' => [],
        'url' => '/',
        'images' => [
            ['src' => e('/'), 'alt' => 'Imagen de Página no encontrada'],
        ],
        'slide-image' => '',
        'status' => Status::ACTIVE,
        'keywords' => 'error 404, página no encontrada'
    ],
];

// Solo pages activos
$pages = filterActiveMembers($pages);

foreach ($pages as &$page) {
    $page['slide-alt'] = 'Imagen de ' . $page['name'];
    $page['name-schema'] = 'Página de ' . $page['name'];
}
unset($page);
?>