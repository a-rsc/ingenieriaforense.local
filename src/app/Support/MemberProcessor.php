<?php

namespace App\Support;

use App\Enums\Member;

class MemberProcessor
{
    public static function process(array $members): array
    {
        // Filtrar activos
        $members = array_filter($members, fn(array $member) => ($member['status'] ?? null)?->isActive());

        // Separar por categoría manteniendo keys
        $clients = [];
        $partners = [];
        $staff = [];
        $testimonials = [];

        foreach ($members as $key => $member) {
            match ($member['category']) {
                Member::CLIENT => $clients[$key] = $member,
                Member::PARTNER => $partners[$key] = $member,
                Member::STAFF => $staff[$key] = $member,
                Member::TESTIMONIAL => $testimonials[$key] = $member,
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