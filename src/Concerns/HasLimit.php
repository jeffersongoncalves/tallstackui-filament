<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Concerns;

use Closure;

trait HasLimit
{
    protected Closure | int | null $limit = null;

    public function limit(Closure | int | null $limit): static
    {
        $this->limit = $limit;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->evaluate($this->limit);
    }
}
