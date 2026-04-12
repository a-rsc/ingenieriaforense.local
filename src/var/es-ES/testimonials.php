<?php
declare(strict_types=1);

$testimonials = [
    [
        'name' => 'Carlos Martínez',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Un servicio excelente y muy profesional. Superaron nuestras expectativas.',
        'list' => [],
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Laura Gómez',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Gran atención al detalle y comunicación constante. Muy recomendables.',
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Javier López',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Un equipo muy eficiente que entrega resultados de alta calidad.',
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Marta Sánchez',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Estamos encantados con el resultado. Todo el proceso fue muy sencillo.',
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'David Fernández',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Profesionales, cercanos y muy comprometidos con el proyecto.',
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Ana Ruiz',
        'category' => '',
        'subcategory' => '',
        'description' => '',
        'text' => 'Nos ayudaron a mejorar nuestro proyecto con resultados excelentes.',
        'url' => '',
        'images' => [
            e(''),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => '',
        'status' => Status::ACTIVE,
    ],
];

// Solo testimonials activos
$testimonials = array_filter(
    $testimonials,
    static fn(array $testimonial): bool => ($testimonial['status'] ?? null) === Status::ACTIVE
);

foreach ($testimonials as &$testimonial) {
    $testimonial['title'] = $testimonial['name'];
    $testimonial['alt'] = 'Imagen de ' . $testimonial['name'];
    // $testimonial['url'] = titleToUrl($testimonial['name']);
    $testimonial['slide-text'] = $testimonial['description'];
}
unset($testimonial);
?>
