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
            'alt' => "Image of {$name}",
        ],
        'status' => $status,
    ];
};

$testimonials = [
    'carlos-martinez' => $makeTestimonial(
        'Carlos Martínez',
        'Excellent and very professional service. They exceeded our expectations.',
        '/carlos-martinez.jpg',
    ),

    'laura-gomez' => $makeTestimonial(
        'Laura Gómez',
        'Excellent attention to detail and constant communication. Highly recommended.',
        '/laura-gomez.jpg',
    ),

    'javier-lopez' => $makeTestimonial(
        'Javier López',
        'A very efficient team that delivers high-quality results.',
        '/javier-lopez.jpg',
    ),

    'marta-sanchez' => $makeTestimonial(
        'Marta Sánchez',
        'We are delighted with the result. The entire process was very simple.',
        '/marta-sanchez.jpg',
    ),

    'david-fernandez' => $makeTestimonial(
        'David Fernández',
        'Professionals, approachable and very committed to the project.',
        '/david-fernandez.jpg',
    ),

    'ana-ruiz' => $makeTestimonial(
        'Ana Ruiz',
        'They helped us improve our project with excellent results.',
        '/ana-ruiz.jpg',
    ),
];

// Solo testimonials activos
$testimonials = array_filter($testimonials, fn(array $testimonial) => ($testimonial['status'] ?? null)?->isActive());

return [
    'testimonials' => $testimonials,
];