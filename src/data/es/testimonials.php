<?php

use App\Enums\Status;

$testimonials = [
    [
        'name' => 'Carlos Martínez',
        'text' => 'Un servicio excelente y muy profesional. Superaron nuestras expectativas.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de Carlos Martínez'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Laura Gómez',
        'text' => 'Gran atención al detalle y comunicación constante. Muy recomendables.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de Laura Gómez'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Javier López',
        'text' => 'Un equipo muy eficiente que entrega resultados de alta calidad.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de Javier López'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Marta Sánchez',
        'text' => 'Estamos encantados con el resultado. Todo el proceso fue muy sencillo.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de Marta Sánchez'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'David Fernández',
        'text' => 'Profesionales, cercanos y muy comprometidos con el proyecto.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de David Fernández'],
        ],
        'status' => Status::ACTIVE,
    ],
    [
        'name' => 'Ana Ruiz',
        'text' => 'Nos ayudaron a mejorar nuestro proyecto con resultados excelentes.',
        'images' => [
            ['src' => e(''), 'alt' => 'Imagen de Ana Ruiz'],
        ],
        'status' => Status::ACTIVE,
    ],
];

// Solo testimonials activos
$testimonials = filterActiveMembers($testimonials);

$testimonials = array_map(function ($testimonial) {
    $testimonial['title'] = $testimonial['name'];
    return $testimonial;
}, $testimonials);

return $testimonials;
?>
