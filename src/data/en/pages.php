<?php

use App\Enums\NavType;
use App\Enums\Status;
use App\Support\PageProcessor;

$makePage = function (
    string $name = '',
    NavType|null $category = null,
    string $title = '',
    string $description = '',
    string $url = '',
    Status $status = Status::ACTIVE,
    string $image = '',
    ?string $parent = null
): array {
    return [
        'name' => $name,
        'category' => $category,
        'parent' => $parent,
        'content' => [
            'title' => $title,
            'description' => $description,
        ],
        'url' => $url,
        'image' => $image,
        'status' => $status,
    ];
};

$pages = [
    'home' => $makePage(
        'Home',
        NavType::PRIMARY,
        'Home',
        'Technical engineering for projects, activity licenses and expert reports. We help you process, analyze and document each case with rigor and clarity.',
        lang_prefix() . '',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'industrial-fires' => $makePage(
        'Industrial Fires',
        NavType::PRIMARY,
        'Industrial Fires',
        'Beyond "Origin and Cause": Scientific Evidence for the Legal and Insurance Sectors.',
        lang_prefix() . '/industrial-fires',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'industrial-fires-origin-cause' => $makePage(
        'Origen y causa',
        null,
        'Investigación de origen y causa en incendios industriales',
        'Análisis técnico-forense para determinar foco, fuente de ignición y secuencia causal en incendios industriales.',
        lang_prefix() . '/industrial-fires/origin-and-cause',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-fire-dynamics' => $makePage(
        'Dinámica del fuego',
        null,
        'Análisis dinámico del fuego en incendios industriales',
        'Estudio de propagación, humos, sectorización y evolución térmica en incendios industriales.',
        lang_prefix() . '/industrial-fires/fire-dynamics',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-pci-audit' => $makePage(
        'Auditoría PCI',
        null,
        'Auditoría forense de sistemas PCI',
        'Evaluación técnica del diseño, mantenimiento y funcionamiento de sistemas de protección contra incendios.',
        lang_prefix() . '/industrial-fires/pci-audit',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'standard' => $makePage(
        'Standard Cases',
        NavType::PRIMARY,
        'Standard Cases',
        'We analyze typical cases related to licenses, technical projects, moisture, cracks, structural damages, construction defects and construction conflicts.',
        lang_prefix() . '/standard',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'blog' => $makePage(
        'Blog',
        NavType::PRIMARY,
        'Blog',
        'Blog about activity licenses, technical projects, expert reports, construction pathologies and frequent questions to help you make better technical decisions.',
        lang_prefix() . '/blog',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'about' => $makePage(
        'About',
        NavType::PRIMARY,
        'About ' . $config['company']['brand'],
        "Get to know {$config['company']['name']}, a firm specialized in technical projects, activity licenses and forensic engineering with a clear, rigorous and independent approach.",
        lang_prefix() . '/about',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'contact' => $makePage(
        'Contact',
        NavType::PRIMARY,
        'Contact',
        'Contact us to evaluate your case, resolve technical questions and request a quote for projects, activity licenses or expert reports.',
        lang_prefix() . '/contact',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'privacy-policy' => $makePage(
        'Privacy Policy',
        NavType::SECONDARY,
        'Privacy Policy',
         'Consult our privacy policy to understand how we protect your personal data.',
         lang_prefix() . '/privacy-policy',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'terms-and-conditions' => $makePage(
        'Terms and Conditions',
        NavType::SECONDARY,
        'Terms and Conditions',
         'Consult the terms and conditions of use of this website and the information applicable to its navigation and use.',
         lang_prefix() . '/terms-and-conditions',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'legal-notice' => $makePage(
        'Legal Notice',
        NavType::SECONDARY,
        'Legal Notice',
         'Consult the legal notice of this website to know the identifying information, general conditions and applicable legal aspects.',
         lang_prefix() . '/legal-notice',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    '404' => $makePage(
        'Page Not Found',
        null,
        'Page Not Found',
        'The page you are looking for could not be found. It may have been deleted, renamed, or is temporarily unavailable.',
        lang_prefix() . '/404',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),
];

// Procesar (común)
return PageProcessor::process($pages);