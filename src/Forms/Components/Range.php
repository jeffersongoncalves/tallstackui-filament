<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasColor;
use TallStackUIFilament\Concerns\HasSize;

class Range extends Field
{
    use HasExtraInputAttributes;
    use HasColor;
    use HasSize;

    protected string $view = 'tallstackuifilament::components.forms.components.range';
}
