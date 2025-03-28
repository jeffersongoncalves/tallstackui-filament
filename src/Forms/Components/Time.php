<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Time extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.time';

    protected Closure | int $format = 12;

    protected Closure | int | null $minMinute = null;

    protected Closure | int | null $maxMinute = null;

    protected Closure | int | null $minHour = null;

    protected Closure | int | null $maxHour = null;

    protected Closure | bool $helper = false;

    protected Closure | int | null $stepHour = null;

    protected Closure | int | null $stepMinute = null;

    public function format(int $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function minMinute(Closure | int | null $minMinute): static
    {
        $this->minMinute = $minMinute;

        return $this;
    }

    public function maxMinute(Closure | int | null $maxMinute): static
    {
        $this->maxMinute = $maxMinute;

        return $this;
    }

    public function minHour(Closure | int | null $minHour): static
    {
        $this->minHour = $minHour;

        return $this;
    }

    public function maxHour(Closure | int | null $maxHour): static
    {
        $this->maxHour = $maxHour;

        return $this;
    }

    public function helper(Closure | bool $helper = true): static
    {
        $this->helper = $helper;

        return $this;
    }

    public function stepHour(Closure | int | null $stepHour): static
    {
        $this->stepHour = $stepHour;

        return $this;
    }

    public function stepMinute(Closure | int | null $stepMinute): static
    {
        $this->stepMinute = $stepMinute;

        return $this;
    }

    public function getFormat(): int
    {
        return $this->evaluate($this->format);
    }

    public function getMinMinute(): ?int
    {
        return $this->evaluate($this->minMinute);
    }

    public function getMaxMinute(): ?int
    {
        return $this->evaluate($this->maxMinute);
    }

    public function getMinHour(): ?int
    {
        return $this->evaluate($this->minHour);
    }

    public function getMaxHour(): ?int
    {
        return $this->evaluate($this->maxHour);
    }

    public function getHelper(): bool
    {
        return $this->evaluate($this->helper);
    }

    public function getStepHour(): ?int
    {
        return $this->evaluate($this->stepHour);
    }

    public function getStepMinute(): ?int
    {
        return $this->evaluate($this->stepMinute);
    }
}
