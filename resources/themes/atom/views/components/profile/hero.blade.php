@props(['user'])

<div class="max-w-2xl w-full mx-auto p-2 flex flex-col gap-8 pt-[3em]">
    <div class="flex flex-col md:flex-row gap-14 pt-[4em]">
        <div class="habbo-stand">
            <img src="{{ $user->avatar }}&direction=2&head_direction=3&gesture=sml&size=l" alt="" class="relative transition-all duration-300 -top-20 hover:scale-[101%] drop-shadow image-rendering-pixelated" />
        </div>
        <div class="flex flex-col gap-10 -mt-12 text-center w-full">
            <p class="text-4xl text-white italic font-light">„{{ $user->motto }}“</p>
            <div class="flex items-center gap-2 flex-col md:flex-row w-full justify-between text-lg">
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/credits.png" alt="">
                    {{ $user->credits }}
                </div>
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/diamonds.png" alt="">
                    {{ $user->currencies->firstWhere('type', 0)?->amount ?? 0 }}
                </div>
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/duckets.png" alt="">
                    {{ $user->currencies->firstWhere('type', 5)?->amount ?? 0 }}
                </div>
            </div>
        </div>
    </div>
</div>