<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use Filament\Support\Enums\IconPosition;
use TallStackUIFilament\Concerns\CanBeClearable;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Input extends Field
{
    use CanBeClearable;
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.input';

    protected string $type = 'text';

    protected Closure | string | null $icon = null;

    protected Closure | string | null $iconPosition = null;

    protected Closure | string | null $prefix = null;

    protected Closure | string | null $suffix = null;

    public function type(Closure | string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function icon(Closure | string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function iconPosition(IconPosition | Closure | string $iconPosition): self
    {
        if ($iconPosition instanceof IconPosition) {
            match ($iconPosition) {
                IconPosition::After  => $iconPosition = 'right',
                IconPosition::Before => $iconPosition = 'left',
            };
        }

        $this->iconPosition = $iconPosition;

        return $this;
    }

    public function prefix(Closure | string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function suffix(Closure | string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getType(): string
    {
        return $this->evaluate($this->type);
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function getIconPosition(): ?string
    {
        return $this->evaluate($this->iconPosition);
    }

    public function getPrefix(): ?string
    {
        return $this->evaluate($this->prefix);
    }

    public function getSuffix(): ?string
    {
        return $this->evaluate($this->suffix);
    }
}
