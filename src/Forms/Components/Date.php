<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use TallStackUIFilament\Concerns\HasPlaceholder;

class Date extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'tallstackuifilament::components.forms.components.date';

    protected string $format = 'YYYY-MM-DD';

    protected bool $helpers = false;

    protected Carbon | string | null $minDate = null;

    protected Carbon | string | null $maxDate = null;

    protected ?int $minYear = null;

    protected ?int $maxYear = null;

    protected Collection|array|null $disableDates = null;

    protected bool $range = false;

    protected bool $multiple = false;

    protected bool $monthYearOnly = false;

    public function format(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function helpers(bool $helpers = true): self
    {
        $this->helpers = $helpers;

        return $this;
    }

    public function minDate(Carbon |string $minDate): self
    {
        $this->minDate = $minDate;

        return $this;
    }

    public function maxDate(Carbon | string $maxDate): self
    {
        $this->maxDate = $maxDate;

        return $this;
    }

    public function minYear(?int $minYear): self
    {
        $this->minYear = $minYear;

        return $this;
    }

    public function maxYear(?int $maxYear): self
    {
        $this->maxYear = $maxYear;

        return $this;
    }

    public function disableDates(Collection|array $dates): self
    {
        $this->disableDates = $dates;

        return $this;
    }

    public function range(bool $range = true): self
    {
        $this->range = $range;

        return $this;
    }

    public function multiple(bool $multiple = true): self
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function monthYearOnly(bool $monthYearOnly = true): self
    {
        $this->monthYearOnly = $monthYearOnly;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getHelpers(): bool
    {
        return $this->helpers;
    }

    public function getMinDate(): Carbon | string | null
    {
        return $this->minDate;
    }

    public function getMaxDate(): Carbon | string | null
    {
        return $this->maxDate;
    }

    public function getMinYear(): ?int
    {
        return $this->minYear;
    }

    public function getMaxYear(): ?int
    {
        return $this->maxYear;
    }

    public function getDisableDates(): Collection|array|null
    {
        return $this->disableDates;
    }

    public function getRange(): bool
    {
        return $this->range;
    }

    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    public function getMonthYearOnly(): bool
    {
        return $this->monthYearOnly;
    }
}
