<?php

namespace TallStackUIFilament\TallStackUIFilament\Enums;

enum Size: string
{
    case XS = 'xs';
    case SM = 'sm';
    case MD = 'md';
    case LG = 'lg';

    public static function availableValues(): array
    {
        return array_map(fn (Size $size) => $size->value, self::cases());
    }
}
