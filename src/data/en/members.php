<?php

use App\Enums\Member;
use App\Enums\Status;
use App\Support\MemberProcessor;

$makeMember = function (
    string $name,
    Member|null $category = null,
    string $description = '',
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
    'enginyers-industrials-catalunya' => $makeMember(
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

    'universitat-politecnica-catalunya' => $makeMember(
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

    'bcn-drone-productions' => $makeMember(
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
];

// Procesar (común)
return MemberProcessor::process($members);