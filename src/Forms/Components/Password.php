<?php

declare(strict_types = 1);

namespace TallStackUIFilament\TallStackUIFilament\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use TallStackUIFilament\TallStackUIFilament\Concerns\HasPlaceholder;

class Password extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.password';

    protected Closure | bool $generator = false;

    protected Closure | array $passwordRules = [];

    public function passwordRules(Closure | array $rules): self
    {
        $this->passwordRules = $rules;

        return $this;
    }

    public function generator(Closure | bool $condition = true): self
    {
        $this->generator = $condition;

        return $this;
    }

    public function getPasswordRules(): ?array
    {
        return $this->evaluate($this->passwordRules);
    }

    public function getGenerator(): bool
    {
        return $this->evaluate($this->generator);
    }
}
