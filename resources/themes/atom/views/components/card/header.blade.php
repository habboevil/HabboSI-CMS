@props(['icon' => null, 'badge' => null, 'title' => null, 'subtitle' => null, 'guest' => false])

<div @if ($iconColor) style="border-color: {{ $iconColor }}!important" @endif @class([
    'flex items-center gap-3 p-3 -mx-3 -mt-3 rounded-[3px] border-l-4 shadow-[0px_2px_5px_0px_rgba(0,0,0,0.1),0px_0px_2px_0px_rgba(0,0,0,0.1)]',
    '!bg-transparent !border-0' => $guest,
    $attributes->get('class'),
])>
    @if ($icon || $badge || $iconSrc)
        <div
            class="flex items-center justify-center flex-shrink-0 min-w-12 min-h-12 overflow-hidden flex-shrink-none"
        >
            @if ($icon) <img src="{{ asset('images/icons/' . $icon . '_icon.png') }}" alt="{{ $icon }}">
            @elseif ($iconSrc) <img src="{{ Storage::url($iconSrc) }}" alt="{{ $iconSrc }}">
            @elseif ($badge) <img src="{{ Storage::disk('album1584')->url($badge . '.gif') }}" alt="{{ $badge }}"> @endif
        </div>
    @endif

    <div class="flex flex-col justify-center text-sm">
        @if($title)
            <p class="font-normal text-white text-2xl">{{ $title }}</p>
        @endif

        @if($subtitle)
            <p class="text-white italic opacity-60 font-light text-base">{{ $subtitle }}</p>
        @endif
    </div>
</div>
