<?php

declare(strict_types = 1);

namespace TallStackUIFilament\TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
use TallStackUIFilament\TallStackUIFilament\Concerns\CanBeClearable;
use TallStackUIFilament\TallStackUIFilament\Concerns\HasPlaceholder;

class Color extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;
    use CanBeClearable;

    protected string $view = 'tallstackuifilament::components.forms.components.color';

    protected bool $picker = false;

    protected bool $selectable = false;

    protected Collection | array | null $colors = null;

    public function picker(bool $value = true): self
    {
        $this->picker = $value;

        return $this;
    }

    public function selectable(bool $value = true): self
    {
        $this->selectable = $value;

        return $this;
    }

    public function colors(Collection | array $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    public function getPicker(): bool
    {
        return $this->picker;
    }

    public function getSelectable(): bool
    {
        return $this->selectable;
    }

    public function getColors(): Collection | array | null
    {
        return $this->colors;
    }
}
