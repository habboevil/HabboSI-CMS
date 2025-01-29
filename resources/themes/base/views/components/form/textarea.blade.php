@props(['id' => '', 'label' => '', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => false])

<fieldset class="flex flex-col w-full gap-1">
    <x-form.label id="{{ $id }}" label="{{ $label }}" />
    <textarea class="w-full h-auto px-3 py-2 text-sm text-gray-900 border-0 rounded shadow-none outline-none ring-2 focus:ring-blue-500" type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ $value }}" required="{{ $required }}"></textarea>
    <x-form.error id="{{ $id }}" />
</fieldset>
