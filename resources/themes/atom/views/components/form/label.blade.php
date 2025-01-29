@props(['id' => '', 'label' => '', 'info' => ''])

@if ($label || $info)
    <div class="flex flex-col gap-1 -mb-1">
        @if ($label)
            <label for="{{ $id }}" lang="en" {{ $attributes->merge(['class' => 'block font-light text-white text-opacity-60 uppercase text-sm']) }}>{!! $label !!}</label>
        @endif
    </div>
@endif
