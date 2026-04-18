<?php
declare(strict_types=1);

// Schema array
$schema = [
    [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => $pages[$pageByUrl]['name-schema'],
        "description" => $pages[$pageByUrl]['description'],
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id" => BASE_URL . "#empresa",
        ],
        "name" => COMPANY_NAME,
        "url" => BASE_URL,
        "image" => BASE_URL . COMPANY_OG_LOGO,
        "email" => COMPANY_EMAIL,
        "telephone" => COMPANY_PHONE,
        "address" => [
            "@type" => "PostalAddress",
            "addressLocality" => COMPANY_LOCALITY,
            "addressCountry" => COMPANY_COUNTRY
        ],
        "areaServed" => COMPANY_AREA_SERVED,
        "priceRange" => COMPANY_PRICE_RANGE,
        "contactPoint" => [
            "@type" => "ContactPoint",
            "contactType" => "Soporte al cliente",
            "email" => COMPANY_EMAIL,
            "telephone" => COMPANY_PHONE,
            "areaServed" => COMPANY_AREA_SERVED,
            "availableLanguage" => APP_LANGUAGE,
        ],
    ],
    [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "description" => "Ruta de navegación del sitio web",
        "itemListElement" => getBreadcrumbList($pages, $pageByUrl, $service),
    ],
];

// Print JSON-LD
echo "\t<script type=\"application/ld+json\">";
echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo "\t</script>\n";
?>
