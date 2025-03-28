<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Concerns;

use Closure;

trait CanBeClearable
{
    protected Closure | bool $clearable = false;

    public function clearable(Closure | bool $value = true): static
    {
        $this->clearable = $value;

        return $this;
    }

    public function getClearable(): bool
    {
        return $this->evaluate($this->clearable);
    }
}
