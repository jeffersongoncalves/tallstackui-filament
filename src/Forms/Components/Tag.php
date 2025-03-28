<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\Concerns\HasLimit;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Tag extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;
    use HasLimit;

    protected string $view = 'tallstackuifilament::components.forms.components.tag';

    protected Closure | string | null $prefix = null;

    public function prefix(Closure | string | null $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->evaluate($this->prefix);
    }
}
