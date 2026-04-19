<?php

use App\Enums\Member;
use App\Enums\Status;
use App\Support\MemberProcessor;

$makeMember = function (
    string $name,
    Member|null $category = null,
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

$members = [
    $makeMember(
        'Enginyers Industrials de Catalunya',
        Member::PARTNER,
        'Colegio y asociación profesional que representa a los ingenieros industriales en Cataluña.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.eic.cat/',
        '/images/members/Enginyers-Industrials-Catalunya.jpg',
    ),

    $makeMember(
        'Universitat Politècnica de Catalunya',
        Member::PARTNER,
        'Universitat pública catalana especialitzada en enginyeria, arquitectura, ciència i tecnologia.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.upc.edu/ca',
        '/images/members/UPC.png',
    ),

    $makeMember(
        'Bcn Drone Productions',
        Member::PARTNER,
        'Audiovisuales con drones, cámaras 360, escáners láser etc.',
        '',
        [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'https://www.bcndroneproductions.es/',
        '/images/members/Bcn-Drone-Productions.webp',
    ),

    $makeMember(
        'Carlos Martínez',
        Member::TESTIMONIAL,
        'Un servicio excelente y muy profesional. Superaron nuestras expectativas.',
        '',
        [],
        '',
        '/images/members/carlos-martinez.jpg',
    ),

    $makeMember(
        'Laura Gómez',
        Member::TESTIMONIAL,
        'Gran atención al detalle y comunicación constante. Muy recomendables.',
        '',
        [],
        '',
        '/images/members/laura-gomez.jpg',
    ),

    $makeMember(
        'Javier López',
        Member::TESTIMONIAL,
        'Un equipo muy eficiente que entrega resultados de alta calidad.',
        '',
        [],
        '',
        '/images/members/javier-lopez.jpg',
    ),

    $makeMember(
        'Marta Sánchez',
        Member::TESTIMONIAL,
        'Estamos encantados con el resultado. Todo el proceso fue muy sencillo.',
        '',
        [],
        '',
        '/images/members/marta-sanchez.jpg',
    ),

    $makeMember(
        'David Fernández',
        Member::TESTIMONIAL,
        'Profesionales, cercanos y muy comprometidos con el proyecto.',
        '',
        [],
        '',
        '/images/members/david-fernandez.jpg',
    ),

    $makeMember(
        'Ana Ruiz',
        Member::TESTIMONIAL,
        'Nos ayudaron a mejorar nuestro proyecto con resultados excelentes.',
        '',
        [],
        '',
        '/images/members/ana-ruiz.jpg',
    ),
];

// Procesar (común)
return MemberProcessor::process($members);