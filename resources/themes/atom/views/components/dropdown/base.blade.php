@props(['children', 'alignment' => 'left'])

<div x-data="{ active: false }" {{ $attributes->merge(['class' => 'relative']) }} x-transition x-on:mouseover="active = true" x-on:mouseover.outside="active = false">
    <button class="flex items-center gap-3 text-gray-800 cursor-pointer">{{ $slot }}</button>

    @isset($children)
        <div x-show="active" @class([
            'absolute z-10 min-w-full md:min-w-[150px] py-px mt-2 overflow-hidden bg-[#1d1d1d] rounded shadow top-full text-white whitespace-nowrap',
            'left-0' => $alignment === 'left',
            'right-0' => $alignment === 'right',
        ]) x-transition.offset.top.left>
            {{ $children }}
        </div>    
    @endisset
</div>