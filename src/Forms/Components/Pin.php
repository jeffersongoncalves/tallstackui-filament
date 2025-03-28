<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\CanBeClearable;

class Pin extends Field
{
    use HasExtraInputAttributes;
    use CanBeClearable;

    protected string $view = 'tallstackuifilament::components.forms.components.pin';

    protected Closure | int $length = 5;

    protected Closure | string | null $prefix = null;

    protected Closure | bool $letters = false;

    protected Closure | bool $numbers = false;

    public function length(Closure | int $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function prefix(Closure | string $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function letters(Closure | bool $condition = true): static
    {
        $this->letters = $condition;

        return $this;
    }

    public function numbers(Closure | bool $condition = true): static
    {
        $this->numbers = $condition;

        return $this;
    }

    public function getLength(): int
    {
        return $this->evaluate($this->length);
    }

    public function getPrefix(): ?string
    {
        return $this->evaluate($this->prefix);
    }

    public function getLetters(): bool
    {
        return $this->evaluate($this->letters);
    }

    public function getNumbers(): bool
    {
        return $this->evaluate($this->numbers);
    }
}
