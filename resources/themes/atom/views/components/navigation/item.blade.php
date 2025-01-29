@props(['href', 'color'=>'white', 'icon', 'children', 'active' => false, 'dropdown' => false])

<div x-data="{ active: false }" :class="dropdownVisible ? 'block lg:block' : 'hidden lg:block'" class="relative w-full text-center py-1 md:py-0 md:w-auto" x-transition x-on:click.outside="active = false">
    <a href="{{ $href }}" style="color: {{ $color }}" @class([
        'flex gap-2 px-1 h-auto md:h-[60px] opacity-75 items-center text-[18px] font-light text-white transition duration-200 ease-in-out hover:opacity-100',
        '' => $active,
        $attributes->get('class'),
    ]) @if ($dropdown) x-on:click.prevent="active = !active" @endif>

        <span class="flex-1 md:flex-0">{{ $slot }}</span>

    </a>

    @if (isset($children))
        <x-navigation.dropdown>
            {{ $children }}
        </x-navigation.dropdown>
    @endif
</div>