@php
    $statePath = $getStatePath();
    $size = $getSize();
    $labelPosition = $getLabelPosition();
    $labelAlignment = $getLabelAlignment();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :label="$getInline() ? false : $getLabel()"
>
    <x-ts-checkbox
        :color="$getColor()"
        :position="$getLabelPosition()"
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
    >
        @if($getInline())
            <x-slot:label
                :position="$labelPosition"
                :attributes="
                    $attributes
                        ->merge([
                            $labelAlignment => $labelAlignment
                        ])"
            >
                {{ $getLabel() }}
            </x-slot:label>
        @endif
    </x-ts-checkbox>
</x-dynamic-component>
