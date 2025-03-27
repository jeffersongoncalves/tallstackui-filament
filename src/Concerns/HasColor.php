<?php

namespace TallStackUIFilament\Concerns;

use Closure;

trait HasColor
{
    protected Closure | string $color = 'primary';

    public function color(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        return $this->evaluate($this->color);
    }
}
