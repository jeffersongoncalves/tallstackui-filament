<?php

namespace TallStackUIFilament\TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;

class Checkbox extends Field
{
    use HasExtraInputAttributes;

    protected string $view = 'tallstackuifilament::components.forms.components.checkbox';

    protected string $size = 'md';

    protected string $color = 'primary';

    protected string $labelPosition = 'right';

    protected string $labelAlignment = 'left';

    protected function setUp(): void
    {
        parent::setUp();

        $this->default(false);

        $this->afterStateHydrated(static function (Checkbox $component, $state): void {
            $component->state((bool) $state);
        });

        $this->rule('boolean');
    }

    public function size(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function color(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function labelPosition(string $position): self
    {
        $this->labelPosition = $position;

        return $this;
    }

    public function labelAlignment(string $alignment): self
    {
        $this->labelAlignment = $alignment;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getLabelPosition(): string
    {
        return $this->labelPosition;
    }

    public function getLabelAlignment(): string
    {
        return $this->labelAlignment;
    }
}
