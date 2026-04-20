<?php

use App\Enums\ResourceType;
use App\Enums\Status;
use App\Support\ResourceProcessor;

$makeResource = function (
    string $name,
    ResourceType|null $category = null,
    string $description = '', // quote
    string $text = '',
    array $list = [],
    string $url = '',
    string $imageSrc = '',
    Status $status = Status::ACTIVE
): array {
    return [
        'name' => $name,
        'category' => $category,
        'title' => $name,
        'description' => $description,
        'text' => $text,
        'list' => $list,
        'url' => $url,
        'images' => [
            'src' => $imageSrc,
            'alt' => "Imagen de {$name}",
        ],
        'status' => $status,
    ];
};

$resources = [
    $makeResource(
        'Industrial Engineers of Catalonia',
        ResourceType::PARTNER,
        'Professional college and association that represents industrial engineers in Catalonia.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.eic.cat/',
        '/images/resources/Enginyers-Industrials-Catalunya.jpg',
    ),

    $makeResource(
        'Universitat Politècnica de Catalunya',
        ResourceType::PARTNER,
        'Public university in Catalonia specialized in engineering, architecture, science and technology.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.upc.edu/ca',
        '/images/resources/UPC.png',
    ),

    $makeResource(
        'Bcn Drone Productions',
        ResourceType::PARTNER,
        'Audiovisuals with drones, 360 cameras, laser scanners, etc.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.bcndroneproductions.es/',
        '/images/resources/Bcn-Drone-Productions.webp',
    ),

    $makeResource(
        'Carlos Martínez',
        ResourceType::TESTIMONIAL,
        'Excellent and very professional service. They exceeded our expectations.',
        '',
        [],
        '',
        '/images/resources/carlos-martinez.jpg',
    ),

    $makeResource(
        'Laura Gómez',
        ResourceType::TESTIMONIAL,
        'Excellent attention to detail and constant communication. Highly recommended.',
        '',
        [],
        '',
        '/images/resources/laura-gomez.jpg',
    ),

    $makeResource(
        'Javier López',
        ResourceType::TESTIMONIAL,
        'A very efficient team that delivers high-quality results.',
        '',
        [],
        '',
        '/images/resources/javier-lopez.jpg',
    ),

    $makeResource(
        'Marta Sánchez',
        ResourceType::TESTIMONIAL,
        'We are delighted with the result. The entire process was very simple.',
        '',
        [],
        '',
        '/images/resources/marta-sanchez.jpg',
    ),

    $makeResource(
        'David Fernández',
        ResourceType::TESTIMONIAL,
        'Professionals, approachable and very committed to the project.',
        '',
        [],
        '',
        '/images/resources/david-fernandez.jpg',
    ),

    $makeResource(
        'Ana Ruiz',
        ResourceType::TESTIMONIAL,
        'They helped us improve our project with excellent results.',
        '',
        [],
        '',
        '/images/resources/ana-ruiz.jpg',
    ),
];

// Procesar (común)
return ResourceProcessor::process($resources);