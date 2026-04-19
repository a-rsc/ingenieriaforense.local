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
        'Technical engineering for projects, activity licenses and expert reports. We help you process, analyze and document each case with rigor and clarity.',
        lang_prefix() . '',
    ),

    'industrial-fires' => $makePage(
        'Industrial Fires',
        NavType::PRIMARY,
        'Industrial Fires',
        'Beyond "Origin and Cause": Scientific Evidence for the Legal and Insurance Sectors.',
        lang_prefix() . '/industrial-fires',
        Status::ACTIVE,
    ),

    'industrial-fires-origin-cause' => $makePage(
        'Origen y causa',
        null,
        'Investigación de origen y causa en incendios industriales',
        'Análisis técnico-forense para determinar foco, fuente de ignición y secuencia causal en incendios industriales.',
        lang_prefix() . '/incendios-industriales/origen-y-causa',
        Status::ACTIVE,
    ),

    'industrial-fires-fire-dynamics' => $makePage(
        'Dinámica del fuego',
        null,
        'Análisis dinámico del fuego en incendios industriales',
        'Estudio de propagación, humos, sectorización y evolución térmica en incendios industriales.',
        lang_prefix() . '/incendios-industriales/dinamica-del-fuego',
        Status::ACTIVE,
    ),

    'industrial-fires-pci-audit' => $makePage(
        'Auditoría PCI',
        null,
        'Auditoría forense de sistemas PCI',
        'Evaluación técnica del diseño, mantenimiento y funcionamiento de sistemas de protección contra incendios.',
        lang_prefix() . '/incendios-industriales/auditoria-pci',
        Status::ACTIVE,
    ),

    'standard' => $makePage(
        'Standard Cases',
        NavType::PRIMARY,
        'Standard Cases',
        'We analyze typical cases related to licenses, technical projects, moisture, cracks, structural damages, construction defects and construction conflicts.',
        lang_prefix() . '/standard',
        Status::INACTIVE,
    ),

    'blog' => $makePage(
        'Blog',
        NavType::PRIMARY,
        'Blog',
        'Blog about activity licenses, technical projects, expert reports, construction pathologies and frequent questions to help you make better technical decisions.',
        lang_prefix() . '/blog',
        Status::INACTIVE,
    ),

    'about' => $makePage(
        'About',
        NavType::PRIMARY,
        'About ' . $brand,
        "Get to know {$name}, a firm specialized in technical projects, activity licenses and forensic engineering with a clear, rigorous and independent approach.",
        lang_prefix() . '/about',
    ),

    'contact' => $makePage(
        'Contact',
        NavType::PRIMARY,
        'Contact',
        'Contact us to evaluate your case, resolve technical questions and request a quote for projects, activity licenses or expert reports.',
        lang_prefix() . '/contact',
    ),

    'privacy-policy' => $makePage(
        'Privacy Policy',
        NavType::SECONDARY,
        'Privacy Policy',
         'Consult our privacy policy to understand how we protect your personal data.',
         lang_prefix() . '/privacy-policy',
    ),

    'terms-and-conditions' => $makePage(
        'Terms and Conditions',
        NavType::SECONDARY,
        'Terms and Conditions',
         'Consult the terms and conditions of use of this website and the information applicable to its navigation and use.',
         lang_prefix() . '/terms-and-conditions',
    ),

    'legal-notice' => $makePage(
        'Legal Notice',
        NavType::SECONDARY,
        'Legal Notice',
         'Consult the legal notice of this website to know the identifying information, general conditions and applicable legal aspects.',
         lang_prefix() . '/legal-notice',
    ),

    '404' => $makePage(
        'Page Not Found',
        null,
        'Page Not Found',
        'The page you are looking for could not be found. It may have been deleted, renamed, or is temporarily unavailable.',
        lang_prefix() . '/404',
    ),
];

// Procesar (común)
return PageProcessor::process($pages);