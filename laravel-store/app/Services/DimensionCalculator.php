<?php

public const MM = 'mm';
public const CM = 'cm';
public const IN = 'in';
public const FT = 'ft';

public const UNITS = [
    DimensionCalculatorService::MM => 1,
    DimensionCalculatorService::CM => 10,
    DimensionCalculatorService::IN => 25.4,
    DimensionCalculatorService::FT => 304.8,
];
public static function convertUnit(int $value, string $unitOfMeasurement): string
{
if ($value < 0) {
throw new Exception('Dimension must be greater than 0');
}

return number_format($value / DimensionCalculatorService::UNITS[$unitOfMeasurement], 2) . $unitOfMeasurement;
}
