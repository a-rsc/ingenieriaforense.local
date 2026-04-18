<?php

use App\Enums\Status;

$makeTestimonial = function (
    string $name = '',
    string $text = '',
    string $imageSrc = '',
    Status $status = Status::ACTIVE
): array {
    return [
        'name' => $name,
        'text' => $text,
        'images' => [
            'src' => $imageSrc,
            'alt' => "Imagen de {$name}",
        ],
        'status' => $status,
    ];
};

$testimonials = [
    $makeTestimonial(
        'Carlos Martínez',
        'Un servicio excelente y muy profesional. Superaron nuestras expectativas.',
        '/carlos-martinez.jpg',
    ),

    $makeTestimonial(
        'Laura Gómez',
        'Gran atención al detalle y comunicación constante. Muy recomendables.',
        '/laura-gomez.jpg',
    ),

    $makeTestimonial(
        'Javier López',
        'Un equipo muy eficiente que entrega resultados de alta calidad.',
        '/javier-lopez.jpg',
    ),

    $makeTestimonial(
        'Marta Sánchez',
        'Estamos encantados con el resultado. Todo el proceso fue muy sencillo.',
        '/marta-sanchez.jpg',
    ),

    $makeTestimonial(
        'David Fernández',
        'Profesionales, cercanos y muy comprometidos con el proyecto.',
        '/david-fernandez.jpg',
    ),

    $makeTestimonial(
        'Ana Ruiz',
        'Nos ayudaron a mejorar nuestro proyecto con resultados excelentes.',
        '/ana-ruiz.jpg',
    ),
];

// Solo testimonials activos
$testimonials = array_filter($testimonials, fn(array $testimonial) => ($testimonial['status'] ?? null)?->isActive());

return [
    'testimonial' => random_item($testimonials),
];