<?php
declare(strict_types=1);

$members = [
    [
        'name' => 'Enginyers Industrials de Catalunya',
        'category' => Category::MEMBER,
        'subcategory' => MemberCategory::PARTNER,
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
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Universitat Politècnica de Catalunya',
        'category' => Category::MEMBER,
        'subcategory' => MemberCategory::PARTNER,
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
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Bcn Drone Productions',
        'category' => Category::MEMBER,
        'subcategory' => MemberCategory::PARTNER,
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
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
];

// Solo members activos
$members = filterActiveMembers($members);

foreach ($members as &$member) {
    $member['title'] = $member['name'];
    // $member['url'] = titleToUrl($member['name']);
    $member['slide-alt'] = 'Imagen de ' . $member['name'];
    $member['name-schema'] = 'Página de ' . $member['name'];
}
unset($member);
?>
