@php
    $statePath = $getStatePath();
    $afterSlot = $getAfterSlot();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-dynamic-component
        :component="TallStackUi::prefix('select.styled')"
        :invalidate="false"
        :options="$getOptions()"
        :multiple="$getMultiple()"
        :placeholder="$getPlaceholder()"
        :searchable="$getSearchable()"
        :group="$getGroup()"
        :lazy="$getLazyLoading()"
        :limit="$getLimit()"
        :request="$getRequest()"
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
        @if(! empty($afterSlot))
            <x-slot:after>
                {!! $afterSlot !!}
            </x-slot:after>
        @endif
    </x-dynamic-component>
</x-dynamic-component>
