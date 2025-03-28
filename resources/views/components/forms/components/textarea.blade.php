@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field" :prefix-icon="false" :suffix-icon="false">
    <x-dynamic-component
        :component="TallStackUi::prefix('textarea')"
        :invalidate="true"
        :placeholder="$getPlaceholder()"
        :resize="$getResize()"
        :resize-auto="$getResizeAuto()"
        :count="$getCount()"
        :maxlength="$getMaxLength()"
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
