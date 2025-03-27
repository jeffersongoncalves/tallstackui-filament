@php
    $statePath = $getStatePath();
    $size = $getSize();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :label="false"
>
    <x-ts-checkbox
        :color="$getColor()"
        :position="$getLabelPosition()"
        :xs="$size === 'xs' ? 'xs' : null"
        :sm="$size === 'sm' ? 'sm' : null"
        :md="$size === 'md' ? 'md' : null"
        :lg="$size === 'lg' ? 'lg' : null"
        :xl="$size === 'xl' ? 'xl' : null"
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
    >
        <x-slot:label>
            {{ $getLabel() }}
        </x-slot:label>
    </x-ts-checkbox>
</x-dynamic-component>
