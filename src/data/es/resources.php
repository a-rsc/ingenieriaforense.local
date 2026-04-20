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
        'Enginyers Industrials de Catalunya',
        ResourceType::PARTNER,
        'Colegio y asociación profesional que representa a los ingenieros industriales en Cataluña.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.eic.cat/',
        '/images/resources/Enginyers-Industrials-Catalunya.jpg',
    ),

    $makeResource(
        'Universitat Politècnica de Catalunya',
        ResourceType::PARTNER,
        'Universitat pública catalana especialitzada en enginyeria, arquitectura, ciència i tecnologia.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.upc.edu/ca',
        '/images/resources/UPC.png',
    ),

    $makeResource(
        'Bcn Drone Productions',
        ResourceType::PARTNER,
        'Audiovisuales con drones, cámaras 360, escáners láser etc.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.bcndroneproductions.es/',
        '/images/resources/Bcn-Drone-Productions.webp',
    ),

    $makeResource(
        'Carlos Martínez',
        ResourceType::TESTIMONIAL,
        'Un servicio excelente y muy profesional. Superaron nuestras expectativas.',
        '',
        [],
        '',
        '/images/resources/carlos-martinez.jpg',
    ),

    $makeResource(
        'Laura Gómez',
        ResourceType::TESTIMONIAL,
        'Gran atención al detalle y comunicación constante. Muy recomendables.',
        '',
        [],
        '',
        '/images/resources/laura-gomez.jpg',
    ),

    $makeResource(
        'Javier López',
        ResourceType::TESTIMONIAL,
        'Un equipo muy eficiente que entrega resultados de alta calidad.',
        '',
        [],
        '',
        '/images/resources/javier-lopez.jpg',
    ),

    $makeResource(
        'Marta Sánchez',
        ResourceType::TESTIMONIAL,
        'Estamos encantados con el resultado. Todo el proceso fue muy sencillo.',
        '',
        [],
        '',
        '/images/resources/marta-sanchez.jpg',
    ),

    $makeResource(
        'David Fernández',
        ResourceType::TESTIMONIAL,
        'Profesionales, cercanos y muy comprometidos con el proyecto.',
        '',
        [],
        '',
        '/images/resources/david-fernandez.jpg',
    ),

    $makeResource(
        'Ana Ruiz',
        ResourceType::TESTIMONIAL,
        'Nos ayudaron a mejorar nuestro proyecto con resultados excelentes.',
        '',
        [],
        '',
        '/images/resources/ana-ruiz.jpg',
    ),
];

// Procesar (común)
return ResourceProcessor::process($resources);