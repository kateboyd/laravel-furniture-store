<?php

namespace App\Services;

class DimensionConverterService
{
    private static array $unitConverterValue = [
        'mm' => 1,
        'cm' => 10,
        'in' => 25.4,
        'ft' => 304.8,
    ];
    public static function dimensionConverter(int $databaseValue, int $unitValue, float $unitConverterValue): float
    {
        $unitValue = $databaseValue / $unitConverterValue;
        if ($unitValue < 0) {
            throw new \Exception('Invalid dimension value. Dimension must be greater than 0');
        } else {
            return $unitValue;
        }
    }
}
