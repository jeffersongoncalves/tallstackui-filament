<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Concerns;

use Closure;

trait HasSize
{
    protected Closure | string $size = 'md';

    public function size(string | Closure $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): string
    {
        return $this->evaluate($this->size);
    }
}
