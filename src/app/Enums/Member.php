<?php

namespace App\Enums;

use App\Core\Config;

enum Member: string
{
    case CLIENT = 'client';
    case PARTNER = 'partner';
    case STAFF = 'staff';

    /**
     * Obtener todos los valores
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Clave de traducción
     */
    public function key(): string
    {
        return 'category.' . $this->value;
    }

    /**
     * Label traducido
     */
    public function label(): string
    {
        return Config::get($this->key(), ucfirst($this->value));
    }
}