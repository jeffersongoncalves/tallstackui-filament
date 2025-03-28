<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Textarea extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.textarea';

    protected Closure | bool $resize = false;

    protected Closure | bool $resizeAuto = true;

    protected Closure | int | null $maxLength = null;

    protected Closure | bool $count = false;

    public function resize(Closure | bool $resize = true): static
    {
        $this->resize = $resize;

        return $this;
    }

    public function resizeAuto(Closure | bool $resizeAuto = true): static
    {
        $this->resizeAuto = $resizeAuto;

        return $this;
    }

    public function maxLength(Closure | int | null $maxLength): static
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function count(Closure | bool $count = true): static
    {
        $this->count = $count;

        return $this;
    }

    public function getResize(): ?bool
    {
        return $this->evaluate($this->resize);
    }

    public function getResizeAuto(): ?bool
    {
        return $this->evaluate($this->resizeAuto);
    }

    public function getMaxLength(): ?int
    {
        return $this->evaluate($this->maxLength);
    }

    public function getCount(): ?bool
    {
        return $this->evaluate($this->count);
    }
}
