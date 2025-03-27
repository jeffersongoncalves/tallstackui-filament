<?php

declare(strict_types = 1);

namespace TallStackUIFilament\TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\TallStackUIFilament\Enums\LabelAlignments;
use TallStackUIFilament\TallStackUIFilament\Enums\LabelPosition;
use TallStackUIFilament\TallStackUIFilament\Enums\Size;

class Checkbox extends Field
{
    use HasExtraInputAttributes;

    protected string $view = 'tallstackuifilament::components.forms.components.checkbox';

    protected string $size = 'md';

    protected string $color = 'primary';

    protected string $labelPosition = 'right';

    protected string $labelAlignment = 'middle';

    protected bool $inline = true;

    protected function setUp(): void
    {
        parent::setUp();

        $this->default(false);

        $this->afterStateHydrated(static function (Checkbox $component, $state): void {
            $component->state((bool) $state);
        });

        $this->rule('boolean');
    }

    public function size(Size | string $size): self
    {
        if ($size instanceof Size) {
            $size = $size->value;
        }

        if (! in_array($size, Size::availableValues())) {
            throw new \InvalidArgumentException('Invalid size provided.');
        }

        $this->size = $size;

        return $this;
    }

    public function color(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function labelPosition(string | LabelPosition $position): self
    {
        if ($position instanceof LabelPosition) {
            $position = $position->value;
        }

        if (! in_array($position, LabelPosition::availableValues())) {
            throw new \InvalidArgumentException('Invalid label position provided.');
        }

        $this->labelPosition = $position;

        return $this;
    }

    public function inline(bool $inline = true): self
    {
        $this->inline = $inline;

        return $this;
    }

    public function labelAlignment(LabelAlignments | string $alignment): self
    {
        if ($alignment instanceof LabelAlignments) {
            $alignment = $alignment->value;
        }

        if (! in_array($alignment, LabelAlignments::availableValues())) {
            throw new \InvalidArgumentException('Invalid label alignment provided.');
        }

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

    public function getInline(): bool
    {
        return $this->inline;
    }
}
