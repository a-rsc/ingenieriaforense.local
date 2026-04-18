<?php
declare(strict_types=1);

/**
 * Get category label
 */
function categoryLabel(Category $category, string $lang = 'es-ES'): string
{
    return [
        Category::MEMBER->value => [
            'es-ES' => 'Miembro del equipo, cliente o colaborador',
        ],
        Category::PERMIT->value => [
            'es-ES' => 'Licencia',
        ],
        Category::INDUSTRIALFIRE->value => [
            'es-ES' => 'Incendio industrial',
        ],
        Category::REPORT->value => [
            'es-ES' => 'Peritaje',
        ],
        Category::TESTIMONIAL->value => [
            'es-ES' => 'Testimonio',
        ],
        Category::PAGE->value => [
            'es-ES' => 'Página del sitio',
        ],
    ][$category->value][$lang] ?? $category->value;
}
?>
