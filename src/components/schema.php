<?php
declare(strict_types=1);

// Array para el schema
$schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "@id" => BASE_URL . "#empresa",
    "name" => COMPANY_NAME,
    "url" => BASE_URL,
    "image" => COMPANY_OG_LOGO,
    "telephone" => COMPANY_PHONE,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => COMPANY_LOCALITY,
        "addressCountry" => COMPANY_COUNTRY
    ],
    "areaServed" => COMPANY_AREA_SERVED,
    "priceRange" => COMPANY_PRICE_RANGE,
    "sameAs" => []
];

// Imprimir JSON-LD
echo "\t<script type=\"application/ld+json\">";
echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo "\t</script>\n";
?>
