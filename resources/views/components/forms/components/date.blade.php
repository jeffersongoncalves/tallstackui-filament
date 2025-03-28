@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-dynamic-component
        :component="TallStackUi::prefix('date')"
        :format="$getFormat()"
        :helpers="$getHelpers()"
        :min-date="$getMinDate()"
        :max-date="$getMaxDate()"
        :min-year="$getMinYear()"
        :max-year="$getMaxYear()"
        :disable="$getDisableDates() ?? []"
        :range="$getRange()"
        :multiple="$getMultiple()"
        :month-year-only="$getMonthYearOnly()"
        :invalidate="true"
        :placeholder="$getPlaceholder()"
        :attributes="
            $attributes
                ->merge([
                    'autofocus' => $isAutofocused(),
                    'disabled' => $isDisabled(),
                    'id' => $getId(),
                    'required' => $isRequired() && (! $isConcealed()),
                    'wire:loading.attr' => 'disabled',
                    $applyStateBindingModifiers('wire:model') => $statePath,
                ], escape: false)
                ->merge($getExtraAttributes(), escape: false)
                ->merge($getExtraInputAttributes(), escape: false)
        "
    />
</x-dynamic-component>
