<?php

use App\Enums\Member;
use App\Enums\Status;

$members = [
    [
        'name' => 'Enginyers Industrials de Catalunya',
        'category' => Member::PARTNER,
        'description' => 'Colegio y asociación profesional que representa a los ingenieros industriales en Cataluña.',
        'text' => '',
        'list' => [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'url' => 'https://www.eic.cat/',
        'images' => [
            ['src' => e('/images/members/Enginyers-Industrials-Catalunya.jpg'), 'alt' => 'Imagen de Enginyers Industrials de Catalunya'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Universitat Politècnica de Catalunya',
        'category' => Member::PARTNER,
        'description' => 'Universitat pública catalana especialitzada en enginyeria, arquitectura, ciència i tecnologia.',
        'text' => '',
        'list' => [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'url' => 'https://www.upc.edu/ca',
        'images' => [
            ['src' => e('/images/members/UPC.png'), 'alt' => 'Imagen de Universitat Politècnica de Catalunya'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Bcn Drone Productions',
        'category' => Member::PARTNER,
        'description' => 'Audiovisuales con drones, cámaras 360, escáners láser etc.',
        'text' => '',
        'list' => [
            'Colaboración en proyectos de investigación y desarrollo tecnológico.',
            'Participación en programas de formación y capacitación para estudiantes y profesionales.',
            'Intercambio de conocimientos y recursos para fomentar la innovación en el sector de la construcción.',
        ],
        'url' => 'https://www.bcndroneproductions.es/',
        'images' => [
            ['src' => e('/images/members/Bcn-Drone-Productions.webp'), 'alt' => 'Imagen de Bcn Drone Productions'],
        ],
        'status' => Status::ACTIVE,
    ],
];

// Filtrar activos
$members = filterActiveMembers($members);

// Enriquecer datos
$members = array_map(function ($member) {
    $member['title'] = $member['name'];
    return $member;
}, $members);

// Separar por categoría
$clients = [];
$partners = [];
$staff = [];

foreach ($members as $member) {
    match ($member['category']) {
        Member::CLIENT => $clients[] = $member,
        Member::PARTNER => $partners[] = $member,
        Member::STAFF => $staff[] = $member,
        default => null,
    };
}

// Devolver todo organizado
return [
    'clients' => $clients,
    'partners' => $partners,
    'staff' => $staff,
];
?>
