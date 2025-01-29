@props(['id' => '', 'label' => '', 'info' => '', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => false, 'readonly' => false, 'disabled' => false, 'autofocus' => false, 'labelClass' => ''])


<fieldset class="flex flex-col w-full">
    <x-form.label id="{{ $id }}" :label="$label" :info="$info" class="{{ $labelClass }}" />

    <div class="relative flex items-center">
        <input
            @class(['focus:ring-0 habbo-input', 'border-red-600 ring-red-500' => $errors->has($id)])
            type="{{ $type }}"
            name="{{ $id }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            @if ($required) required @endif
            @if ($disabled) disabled @endif
            @if ($readonly) readonly @endif
            @if ($autofocus) autofocus @endif
        />

        <div class="absolute right-3">
            {{ $slot }}
        </div>
    </div>

    <x-form.error id="{{ $id }}" />
</fieldset>
