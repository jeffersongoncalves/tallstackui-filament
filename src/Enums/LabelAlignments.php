<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Enums;

enum LabelAlignments: string
{
    case MIDDLE = 'middle';
    case START  = 'start';

    public static function availableValues(): array
    {
        return array_map(fn (LabelAlignments $alignment) => $alignment->value, self::cases());
    }
}
