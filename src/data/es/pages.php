<?php

use App\Core\Config;
use App\Enums\NavType;
use App\Enums\Status;
use App\Support\PageProcessor;

$brand = Config::get('company.brand');
$name = Config::get('company.name');
$schemaPage = Config::get('app.translations.schema.page', 'Página de ');

$makePage = function (
    string $name = '',
    NavType|null $category = null,
    string $title = '',
    string $description = '',
    string $url = '',
    Status $status = Status::ACTIVE,
    string $image = '',
    ?string $parent = null
) use ($schemaPage): array {
    return [
        'name' => $name,
        'category' => $category,
        'parent' => $parent,
        'title' => $title,
        'description' => $description,
        'url' => $url,
        'image' => $image,
        'status' => $status,
        'schema' => $schemaPage . $name,
    ];
};

$pages = [
    'home' => $makePage(
        'Home',
        NavType::PRIMARY,
        'Home',
        'Ingeniería técnica para proyectos, licencias de actividad e informes periciales. Te ayudamos a tramitar, analizar y documentar cada caso con rigor y claridad.',
        '',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'industrial-fires' => $makePage(
        'Incendios industriales',
        NavType::PRIMARY,
        'Ingeniería Forense de Incendios industriales',
        'Más allá del "Origen y Causa": Evidencia científica para el sector legal y asegurador.',
        '/incendios-industriales',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'industrial-fires-origin-cause' => $makePage(
        'Origen y causa',
        null,
        'Investigación de origen y causa en incendios industriales',
        'Análisis técnico-forense para determinar foco, fuente de ignición y secuencia causal en incendios industriales.',
        '/incendios-industriales/origen-y-causa',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-fire-dynamics' => $makePage(
        'Dinámica del fuego',
        null,
        'Análisis dinámico del fuego en incendios industriales',
        'Estudio de propagación, humos, sectorización y evolución térmica en incendios industriales.',
        '/incendios-industriales/dinamica-del-fuego',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-pci-audit' => $makePage(
        'Auditoría PCI',
        null,
        'Auditoría forense de sistemas PCI',
        'Evaluación técnica del diseño, mantenimiento y funcionamiento de sistemas de protección contra incendios.',
        '/incendios-industriales/auditoria-pci',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'standard' => $makePage(
        'Casos habituales',
        NavType::PRIMARY,
        'Casos habituales',
        'Analizamos casos habituales relacionados con licencias, proyectos técnicos, humedades, grietas, daños estructurales, defectos constructivos y conflictos de obra.',
        '/casos-habituales',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'blog' => $makePage(
        'Blog',
        NavType::PRIMARY,
        'Blog',
        'Blog sobre licencias de actividad, proyectos técnicos, informes periciales, patologías constructivas y dudas frecuentes para ayudarte a tomar mejores decisiones técnicas.',
        '/blog',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'about' => $makePage(
        'Nosotros',
        NavType::PRIMARY,
        'Sobre ' . $brand,
        "Conoce a {$name}, una firma especializada en proyectos técnicos, licencias de actividad e ingeniería forense con enfoque claro, riguroso e independiente.",
        '/nosotros',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'contact' => $makePage(
        'Contacto',
        NavType::PRIMARY,
        'Contáctanos para más información',
        'Contacta con nosotros para valorar tu caso, resolver dudas técnicas y solicitar presupuesto para proyectos, licencias de actividad o informes periciales.',
        '/contacto',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'privacy-policy' => $makePage(
        'Política de Privacidad',
        NavType::SECONDARY,
        'Política de Privacidad',
        'Consulta nuestra política de privacidad para entender cómo protegemos tus datos personales.',
        '/politica-de-privacidad',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'terms-and-conditions' => $makePage(
        'Términos y Condiciones',
        NavType::SECONDARY,
        'Términos y Condiciones',
        'Consulta los términos y condiciones de uso de este sitio web y la información aplicable a su navegación y utilización.',
        '/terminos-y-condiciones',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'legal-notice' => $makePage(
        'Aviso Legal',
        NavType::SECONDARY,
        'Aviso Legal',
        'Consulta el aviso legal de este sitio web para conocer la información identificativa, condiciones generales y aspectos legales aplicables.',
        '/aviso-legal',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    '404' => $makePage(
        'Página no encontrada',
        null,
        'Página no encontrada',
        'La página que buscas no se ha encontrado. Es posible que haya sido eliminada, cambiada de nombre o esté temporalmente no disponible.',
        '404',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),
];

// Procesar (común)
return PageProcessor::process($pages);