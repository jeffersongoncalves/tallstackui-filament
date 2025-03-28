<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Tag extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.tag';

    protected Closure | int | null $limit = null;

    protected Closure | string | null $prefix = null;

    public function limit(Closure | int | null $limit): static
    {
        $this->limit = $limit;

        return $this;
    }

    public function prefix(Closure | string | null $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->evaluate($this->limit);
    }

    public function getPrefix(): ?string
    {
        return $this->evaluate($this->prefix);
    }
}
