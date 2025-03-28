@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field" :prefix-icon="false" :suffix-icon="false">
    <x-dynamic-component
        :component="TallStackUi::prefix('pin')"
        :invalidate="true"
        :clear="$getClearable()"
        :length="$getLength()"
        :letters="$getLetters() ? true : null"
        :numbers="$getNumbers() ? true : null"
        :prefix="$getPrefix()"
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
