@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :prefix-icon="false"
    :suffix-icon="false"
>
    <x-ts-number
        :invalidate="true"
        :placeholder="$getPlaceholder()"
        :step="$getStep()"
        :min="$getMinValue()"
        :max="$getMaxValue()"
        :centralized="$getCentralized()"
        :selectable="$getSelectable()"
        :chevron="$getChevron()"
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
