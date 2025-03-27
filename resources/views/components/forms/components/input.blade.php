@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :prefix-icon="false"
    :suffix-icon="false"
>
    <x-ts-input
        :invalidate="true"
        :placeholder="$getPlaceholder()"
        :clearable="$getClearable()"
        :icon="$getIcon()"
        :position="$getIconPosition()"
        :prefix="$getPrefix()"
        :suffix="$getSuffix()"
        :attributes="
                $attributes
                    ->merge([
                        'type' => $getType(),
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
