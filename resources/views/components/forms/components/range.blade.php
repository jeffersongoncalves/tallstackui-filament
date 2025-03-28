@php
    $statePath = $getStatePath();
    $size = $getSize();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :prefix-icon="false"
    :suffix-icon="false"
>
    <x-dynamic-component :component="TallStackUi::prefix('range')"
        :invalidate="true"
        :color="$getColor()"
        :attributes="
                $attributes
                    ->merge([
                        $size => $size,
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
