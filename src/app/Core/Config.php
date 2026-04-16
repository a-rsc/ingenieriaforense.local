<?php

namespace App\Core;

class Config
{
    private static array $items = [];

    public static function load(string $path): void
    {
        self::$items = require $path;
    }

    public static function set(string $key, mixed $value): void
    {
        $keys = explode('.', $key);
        $temp =& self::$items;

        foreach ($keys as $segment) {
            if (!isset($temp[$segment]) || !is_array($temp[$segment])) {
                $temp[$segment] = [];
            }
            $temp =& $temp[$segment];
        }

        $temp = $value;
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $keys = explode('.', $key);
        $value = self::$items;

        foreach ($keys as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return $default;
            }
            $value = $value[$segment];
        }

        return $value;
    }

    public static function all(): array
    {
        return self::$items;
    }

    public static function has(string $key): bool
    {
        return self::get($key) !== null;
    }
}