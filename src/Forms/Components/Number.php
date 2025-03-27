<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\CanBeSelectable;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Number extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;
    use CanBeSelectable;

    protected string $view = 'tallstackuifilament::components.forms.components.number';

    protected Closure | int | float | null $maxValue = null;

    protected Closure | int | float | null $minValue = null;

    protected int | Closure $step = 1;

    protected Closure | bool $centralized = false;

    protected Closure | bool $chevron = false;

    public function maxValue(Closure | int | float $value): static
    {
        $this->maxValue = $value;

        $this->rule(static function (Number $component): string {
            $value = $component->getMaxValue();

            return "max:{$value}";
        }, static fn (Number $component): bool => filled($component->getMaxValue()));

        return $this;
    }

    public function minValue(Closure | int | float $value): static
    {
        $this->minValue = $value;

        $this->rule(static function (Number $component): string {
            $value = $component->getMinValue();

            return "min:{$value}";
        }, static fn (Number $component): bool => filled($component->getMinValue()));

        return $this;
    }

    public function step(int | Closure $step): static
    {
        $this->step = $step;

        return $this;
    }

    public function centralized(bool | Closure $condition = true): static
    {
        $this->centralized = $condition;

        return $this;
    }

    public function chevron(bool | Closure $condition = true): static
    {
        $this->chevron = $condition;

        return $this;
    }

    public function getMaxValue(): int | float | null
    {
        return $this->evaluate($this->maxValue);
    }

    public function getMinValue(): int | float | null
    {
        return $this->evaluate($this->minValue);
    }

    public function getStep(): int | null
    {
        return $this->evaluate($this->step);
    }

    public function getCentralized(): bool
    {
        return $this->evaluate($this->centralized);
    }

    public function getChevron(): bool
    {
        return $this->evaluate($this->chevron);
    }
}
