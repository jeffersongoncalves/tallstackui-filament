<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use TallStackUIFilament\Concerns\HasLimit;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Select extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;
    use HasLimit;

    protected string $view = 'tallstackuifilament::components.forms.components.select';

    protected Closure | Collection | array $options = [];

    protected Closure | bool $multiple = false;

    protected Closure | string | null $select = null;

    protected Closure | bool $searchable = false;

    protected Closure | int | null $lazy = null;

    protected Closure | bool $group = false;

    protected Closure | HtmlString | string | null $afterSlot = null;

    protected Closure | array | null $request = null;

    public function options(Closure | Collection | array $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function multiple(Closure | bool $multiple = true): static
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function select(Closure | string $select): static
    {
        $this->select = $select;

        return $this;
    }

    public function searchable(Closure | bool $searchable = true): static
    {
        $this->searchable = $searchable;

        return $this;
    }

    public function lazyLoading(Closure | int $lazy): static
    {
        $this->lazy = $lazy;

        return $this;
    }

    public function group(Closure | bool $group = true): static
    {
        $this->group = $group;

        return $this;
    }

    public function afterSlot(Closure | HtmlString | string $afterSlot): static
    {
        $this->afterSlot = $afterSlot;

        return $this;
    }

    public function request(Closure | array $request): static
    {
        $this->request = $request;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->evaluate($this->options);
    }

    public function getMultiple(): bool
    {
        return $this->evaluate($this->multiple);
    }

    public function getSelect(): ?string
    {
        return $this->evaluate($this->select);
    }

    public function getSearchable(): bool
    {
        return $this->evaluate($this->searchable);
    }

    public function getLazyLoading(): ?int
    {
        return $this->evaluate($this->lazy);
    }

    public function getGroup(): bool
    {
        return $this->evaluate($this->group);
    }

    public function getAfterSlot(): ?string
    {
        return $this->evaluate($this->afterSlot);
    }

    public function getRequest(): ?array
    {
        return $this->evaluate($this->request);
    }
}
