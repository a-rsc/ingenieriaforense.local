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
        'Industrial Engineers of Catalonia',
        Member::PARTNER,
        'Professional college and association that represents industrial engineers in Catalonia.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.eic.cat/',
        '/images/members/Enginyers-Industrials-Catalunya.jpg',
    ),

    $makeMember(
        'Universitat Politècnica de Catalunya',
        Member::PARTNER,
        'Public university in Catalonia specialized in engineering, architecture, science and technology.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.upc.edu/ca',
        '/images/members/UPC.png',
    ),

    $makeMember(
        'Bcn Drone Productions',
        Member::PARTNER,
        'Audiovisuals with drones, 360 cameras, laser scanners, etc.',
        '',
        [
            'Collaboration in research and development projects.',
            'Participation in training and capacity-building programs for students and professionals.',
            'Knowledge and resource exchange to promote innovation in the construction sector.',
        ],
        'https://www.bcndroneproductions.es/',
        '/images/members/Bcn-Drone-Productions.webp',
    ),

    $makeMember(
        'Carlos Martínez',
        Member::TESTIMONIAL,
        'Excellent and very professional service. They exceeded our expectations.',
        '',
        [],
        '',
        '/images/members/carlos-martinez.jpg',
    ),

    $makeMember(
        'Laura Gómez',
        Member::TESTIMONIAL,
        'Excellent attention to detail and constant communication. Highly recommended.',
        '',
        [],
        '',
        '/images/members/laura-gomez.jpg',
    ),

    $makeMember(
        'Javier López',
        Member::TESTIMONIAL,
        'A very efficient team that delivers high-quality results.',
        '',
        [],
        '',
        '/images/members/javier-lopez.jpg',
    ),

    $makeMember(
        'Marta Sánchez',
        Member::TESTIMONIAL,
        'We are delighted with the result. The entire process was very simple.',
        '',
        [],
        '',
        '/images/members/marta-sanchez.jpg',
    ),

    $makeMember(
        'David Fernández',
        Member::TESTIMONIAL,
        'Professionals, approachable and very committed to the project.',
        '',
        [],
        '',
        '/images/members/david-fernandez.jpg',
    ),

    $makeMember(
        'Ana Ruiz',
        Member::TESTIMONIAL,
        'They helped us improve our project with excellent results.',
        '',
        [],
        '',
        '/images/members/ana-ruiz.jpg',
    ),
];

// Procesar (común)
return MemberProcessor::process($members);