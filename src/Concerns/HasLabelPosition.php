<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Concerns;

use Closure;
use TallStackUIFilament\Enums\LabelPosition;

trait HasLabelPosition
{
    protected Closure | string $labelPosition = 'right';

    public function labelPosition(LabelPosition | Closure | string  $position): self
    {
        if ($position instanceof LabelPosition) {
            $position = $position->value;
        }

        $this->labelPosition = $position;

        return $this;
    }

    public function getLabelPosition(): string
    {
        return $this->evaluate($this->labelPosition);
    }
}
