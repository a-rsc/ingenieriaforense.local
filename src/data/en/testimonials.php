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
    $makeTestimonial(
        'Carlos Martínez',
        'Excellent and very professional service. They exceeded our expectations.',
        '/carlos-martinez.jpg',
    ),

    $makeTestimonial(
        'Laura Gómez',
        'Excellent attention to detail and constant communication. Highly recommended.',
        '/laura-gomez.jpg',
    ),

    $makeTestimonial(
        'Javier López',
        'A very efficient team that delivers high-quality results.',
        '/javier-lopez.jpg',
    ),

    $makeTestimonial(
        'Marta Sánchez',
        'We are delighted with the result. The entire process was very simple.',
        '/marta-sanchez.jpg',
    ),

    $makeTestimonial(
        'David Fernández',
        'Professionals, approachable and very committed to the project.',
        '/david-fernandez.jpg',
    ),

    $makeTestimonial(
        'Ana Ruiz',
        'They helped us improve our project with excellent results.',
        '/ana-ruiz.jpg',
    ),
];

// Solo testimonials activos
$testimonials = array_filter($testimonials, fn(array $testimonial) => ($testimonial['status'] ?? null)?->isActive());

return [
    'testimonial' => random_item($testimonials),
];