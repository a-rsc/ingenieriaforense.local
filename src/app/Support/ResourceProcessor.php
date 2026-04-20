<?php

namespace App\Support;

use App\Enums\ResourceType;

class ResourceProcessor
{
    public static function process(array $resources): array
    {
        // Filtrar activos
        $resources = array_filter($resources, fn(array $resource) => ($resource['status'] ?? null)?->isActive());

        // Separar por categoría manteniendo keys
        $clients = [];
        $partners = [];
        $staff = [];
        $testimonials = [];

        foreach ($resources as $key => $resource) {
            match ($resource['category']) {
                ResourceType::CLIENT => $clients[$key] = $resource,
                ResourceType::PARTNER => $partners[$key] = $resource,
                ResourceType::STAFF => $staff[$key] = $resource,
                ResourceType::TESTIMONIAL => $testimonials[$key] = $resource,
                default => null,
            };
        }

        return [
            'clients' => $clients,
            'partners' => $partners,
            'staff' => $staff,
            'testimonial' => random_item($testimonials),
        ];
    }
}