<?php

namespace App\Enums;

enum EventTypeEnum: int
{
    case INDOOR = 1;
    case OUTDOOR = 2;

    public static function values(): array
    {
        return [
            self::INDOOR->value,
            self::OUTDOOR->value,
        ];
    }

    public function lang(): string
    {
        return match ($this) {
            self::INDOOR => 'OutDoor',
            self::OUTDOOR => 'InDoor',
        };
    }
}
