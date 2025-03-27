<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasColor;
use TallStackUIFilament\Concerns\HasLabelAlignment;
use TallStackUIFilament\Concerns\HasLabelPosition;
use TallStackUIFilament\Concerns\HasSize;
use TallStackUIFilament\Concerns\CanBeInline;

class Checkbox extends Field
{
    use HasExtraInputAttributes;
    use HasColor;
    use HasSize;
    use HasLabelAlignment;
    use HasLabelPosition;
    use CanBeInline;

    protected string $view = 'tallstackuifilament::components.forms.components.checkbox';

    protected function setUp(): void
    {
        parent::setUp();

        $this->default(false);

        $this->afterStateHydrated(static function (Checkbox $component, $state): void {
            $component->state((bool) $state);
        });

        $this->rule('boolean');
    }
}
