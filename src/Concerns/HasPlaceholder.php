<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Concerns;

use Closure;

trait HasPlaceholder
{
    protected Closure | string | null $placeholder = null;

    public function placeholder(string | Closure $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }
}
