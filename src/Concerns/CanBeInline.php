<?php

namespace TallStackUIFilament\Concerns;

use Closure;

trait CanBeInline
{
    protected Closure | bool $inline = false;

    public function inline(bool | Closure $inline = true): static
    {
        $this->inline = $inline;

        return $this;
    }

    public function getInline(): bool
    {
        return $this->evaluate($this->inline);
    }
}
