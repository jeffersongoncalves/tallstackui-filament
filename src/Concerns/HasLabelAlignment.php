<?php

namespace TallStackUIFilament\Concerns;

use Closure;
use TallStackUIFilament\Enums\LabelAlignments;

trait HasLabelAlignment
{
    protected Closure | string $labelAlignment = 'middle';

    public function labelAlignment(LabelAlignments | Closure | string $alignment): static
    {
        if ($alignment instanceof LabelAlignments) {
            $alignment = $alignment->value;
        }

        $this->labelAlignment = $alignment;

        return $this;
    }

    public function getLabelAlignment(): string
    {
        return $this->evaluate($this->labelAlignment);
    }
}
