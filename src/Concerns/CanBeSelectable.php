<?php

namespace TallStackUIFilament\TallStackUIFilament\Concerns;

use Closure;

trait CanBeSelectable
{
    protected Closure | bool $selectable = false;

    public function selectable(Closure | bool $value = true): static
    {
        $this->selectable = $value;

        return $this;
    }

    public function getSelectable(): bool
    {
        return $this->evaluate($this->selectable);
    }
}
