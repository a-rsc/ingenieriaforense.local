<?php

namespace App\Enums;

use App\Core\Config;

enum Status: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case DRAFT = 'draft';
    case DELETED = 'deleted';

    /**
     * Obtener todos los valores
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Comprobar si es activo
     */
    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }

    /**
     * Clave de traducción
     */
    public function key(): string
    {
        return 'status.' . $this->value;
    }

    /**
     * Label traducido
     */
    public function label(): string
    {
        return Config::get($this->key(), ucfirst($this->value));
    }
}