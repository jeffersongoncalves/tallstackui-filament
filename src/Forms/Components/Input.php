<?php

declare(strict_types = 1);

namespace TallStackUIFilament\TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\TallStackUIFilament\Concerns\HasPlaceholder;

class Input extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.input';

    protected string $type = 'text';


}
