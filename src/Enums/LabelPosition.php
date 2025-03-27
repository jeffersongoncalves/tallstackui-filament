<?php

namespace TallStackUIFilament\Enums;

enum LabelPosition: string
{
    case LEFT = 'left';
    case RIGHT = 'right';

    public static function availableValues(): array
    {
        return array_map(fn (LabelPosition $position) => $position->value, self::cases());
    }
}
