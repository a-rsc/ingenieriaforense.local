<?php

use App\Core\Config;
use App\Enums\NavType;
use App\Enums\Status;
use App\Support\PageProcessor;

$brand = Config::get('company.brand');
$name = Config::get('company.name');
$schemaPage = Config::get('app.lang_filepath.schema.page', 'Página de ');

$makePage = function (
    string $name = '',
    NavType|null $category = null,
    string $title = '',
    string $description = '',
    string $url = '',
    Status $status = Status::ACTIVE
) use ($schemaPage): array {
    return [
        'name' => $name,
        'category' => $category,
        'title' => $title,
        'description' => $description,
        'url' => $url,
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
        lang_prefix() . '/',
    ),

    'industrial-fires' => $makePage(
        'Incendios industriales',
        NavType::PRIMARY,
        'Ingeniería Forense de Incendios industriales',
        'Más allá del "Origen y Causa": Evidencia científica para el sector legal y asegurador.',
        lang_prefix() . '/incendios-industriales',
        Status::INACTIVE,
    ),

    'standard' => $makePage(
        'Casos habituales',
        NavType::PRIMARY,
        'Casos habituales',
        'Analizamos casos habituales relacionados con licencias, proyectos técnicos, humedades, grietas, daños estructurales, defectos constructivos y conflictos de obra.',
        lang_prefix() . '/casos-habituales',
        Status::INACTIVE,
    ),

    'blog' => $makePage(
        'Blog',
        NavType::PRIMARY,
        'Blog',
        'Blog sobre licencias de actividad, proyectos técnicos, informes periciales, patologías constructivas y dudas frecuentes para ayudarte a tomar mejores decisiones técnicas.',
        lang_prefix() . '/blog',
        Status::INACTIVE,
    ),

    'about' => $makePage(
        'Nosotros',
        NavType::PRIMARY,
        'Sobre ' . $brand,
        "Conoce a {$name}, una firma especializada en proyectos técnicos, licencias de actividad e ingeniería forense con enfoque claro, riguroso e independiente.",
        lang_prefix() . '/nosotros',
    ),

    'contact' => $makePage(
        'Contacto',
        NavType::PRIMARY,
        'Contacto',
        'Contacta con nosotros para valorar tu caso, resolver dudas técnicas y solicitar presupuesto para proyectos, licencias de actividad o informes periciales.',
        lang_prefix() . '/contacto',
    ),

    'privacy-policy' => $makePage(
        'Política de Privacidad',
        NavType::SECONDARY,
        'Política de Privacidad',
        'Consulta nuestra política de privacidad para entender cómo protegemos tus datos personales.',
        lang_prefix() . '/politica-de-privacidad',
    ),

    'terms-and-conditions' => $makePage(
        'Términos y Condiciones',
        NavType::SECONDARY,
        'Términos y Condiciones',
        'Consulta los términos y condiciones de uso de este sitio web y la información aplicable a su navegación y utilización.',
        lang_prefix() . '/terminos-y-condiciones',
    ),

    'legal-notice' => $makePage(
        'Aviso Legal',
        NavType::SECONDARY,
        'Aviso Legal',
        'Consulta el aviso legal de este sitio web para conocer la información identificativa, condiciones generales y aspectos legales aplicables.',
        lang_prefix() . '/aviso-legal',
    ),

    '404' => $makePage(
        'Página no encontrada',
        null,
        'Página no encontrada',
        'La página que buscas no se ha encontrado. Es posible que haya sido eliminada, cambiada de nombre o esté temporalmente no disponible.',
        lang_prefix() . '/404',
    ),
];

// Procesar (común)
return PageProcessor::process($pages);