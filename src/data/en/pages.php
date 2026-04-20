<?php

use App\Enums\NavType;
use App\Enums\Status;
use App\Support\PageProcessor;

$makePage = function (
    string $name = '',
    array $category = [],
    string $title = '',
    string $description = '',
    string $url = '',
    Status $status = Status::ACTIVE,
    string $image = '',
    ?string $parent = '',
    array $children = [],
): array {
    return [
        'name' => $name,
        'category' => $category,
        'parent' => $parent,
        'children' => $children,
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
        [
            NavType::HEADERPRIMARY,
        ],
        'Home',
        'Technical engineering for projects, activity licenses and expert reports. We help you process, analyze and document each case with rigor and clarity.',
        lang_prefix() . '',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'industrial-fires' => $makePage(
        'Industrial fires',
        [
            NavType::HEADERPRIMARY,
            NavType::FOOTERPRIMARY
        ],
        'Industrial fires',
        'Beyond "Origin and Cause": Scientific Evidence for the Legal and Insurance Sectors.',
        lang_prefix() . '/industrial-fires',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        '',
        [
            'industrial-fires-origin-cause',
            'industrial-fires-fire-dynamics',
            'industrial-fires-pci-audit',
        ],
    ),

    'industrial-fires-origin-cause' => $makePage(
        'Origen y causa',
        [],
        'Investigación de origen y causa en incendios industriales',
        'Análisis técnico-forense para determinar foco, fuente de ignición y secuencia causal en incendios industriales.',
        lang_prefix() . '/industrial-fires/origin-and-cause',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-fire-dynamics' => $makePage(
        'Dinámica del fuego',
        [],
        'Análisis dinámico del fuego en incendios industriales',
        'Estudio de propagación, humos, sectorización y evolución térmica en incendios industriales.',
        lang_prefix() . '/industrial-fires/fire-dynamics',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-fires-pci-audit' => $makePage(
        'Auditoría PCI',
        [],
        'Auditoría forense de sistemas PCI',
        'Evaluación técnica del diseño, mantenimiento y funcionamiento de sistemas de protección contra incendios.',
        lang_prefix() . '/industrial-fires/pci-audit',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-fires',
    ),

    'industrial-accidents' => $makePage(
        'Siniestros industriales',
        [
            NavType::HEADERPRIMARY,
            NavType::FOOTERPRIMARY
        ],
        'Ingeniería Forense de Incendios industriales',
        'Más allá del "Origen y Causa": Evidencia científica para el sector legal y asegurador.',
        lang_prefix() . '/industrial-accidents',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        '',
        [
            'industrial-accidents-child1',
            'industrial-accidents-child2',
            'industrial-accidents-child3',
        ],
    ),

    'industrial-accidents-child1' => $makePage(
        'Siniestros industriales 1',
        [],
        'Investigación de origen y causa en incendios industriales',
        'Análisis técnico-forense para determinar foco, fuente de ignición y secuencia causal en incendios industriales.',
        lang_prefix() . '/industrial-accidents/industrial-accidents-child1',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-accidents',
    ),

    'industrial-accidents-child2' => $makePage(
        'Siniestros industriales 2',
        [],
        'Análisis dinámico del fuego en incendios industriales',
        'Estudio de propagación, humos, sectorización y evolución térmica en incendios industriales.',
        lang_prefix() . '/industrial-accidents/industrial-accidents-child2',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-accidents',
    ),

    'industrial-accidents-child3' => $makePage(
        'Siniestros industriales 3',
        [],
        'Auditoría forense de sistemas PCI',
        'Evaluación técnica del diseño, mantenimiento y funcionamiento de sistemas de protección contra incendios.',
        lang_prefix() . '/industrial-accidents/industrial-accidents-child3',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
        'industrial-accidents',
    ),

    'standard' => $makePage(
        'Standard Cases',
        [
            NavType::HEADERPRIMARY,
        ],
        'Standard Cases',
        'We analyze typical cases related to licenses, technical projects, moisture, cracks, structural damages, construction defects and construction conflicts.',
        lang_prefix() . '/standard',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'blog' => $makePage(
        'Blog',
        [
            NavType::HEADERPRIMARY,
        ],
        'Blog',
        'Blog about activity licenses, technical projects, expert reports, construction pathologies and frequent questions to help you make better technical decisions.',
        lang_prefix() . '/blog',
        Status::INACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'about' => $makePage(
        'About',
        [
            NavType::HEADERPRIMARY,
        ],
        'About ' . $config['company']['brand'],
        "Get to know {$config['company']['name']}, a firm specialized in technical projects, activity licenses and forensic engineering with a clear, rigorous and independent approach.",
        lang_prefix() . '/about',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'contact' => $makePage(
        'Contact',
        [
            NavType::HEADERPRIMARY,
        ],
        'Contact',
        'Contact us to evaluate your case, resolve technical questions and request a quote for projects, activity licenses or expert reports.',
        lang_prefix() . '/contact',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'privacy-policy' => $makePage(
        'Privacy Policy',
        [
            NavType::FOOTERSECONDARY,
        ],
        'Privacy Policy',
         'Consult our privacy policy to understand how we protect your personal data.',
         lang_prefix() . '/privacy-policy',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'terms-and-conditions' => $makePage(
        'Terms and Conditions',
        [
            NavType::FOOTERSECONDARY,
        ],
        'Terms and Conditions',
         'Consult the terms and conditions of use of this website and the information applicable to its navigation and use.',
         lang_prefix() . '/terms-and-conditions',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    'legal-notice' => $makePage(
        'Legal Notice',
        [
            NavType::FOOTERSECONDARY,
        ],
        'Legal Notice',
         'Consult the legal notice of this website to know the identifying information, general conditions and applicable legal aspects.',
         lang_prefix() . '/legal-notice',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),

    '404' => $makePage(
        'Page Not Found',
        [],
        'Page Not Found',
        'The page you are looking for could not be found. It may have been deleted, renamed, or is temporarily unavailable.',
        lang_prefix() . '/404',
        Status::ACTIVE,
        '/images/pages/Causas-de-humedad.webp',
    ),
];

// Procesar (común)
return PageProcessor::process($pages);