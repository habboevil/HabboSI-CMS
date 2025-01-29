<div class="max-w-2xl w-full mx-auto p-2 flex flex-col gap-8">
    <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Hallo, <b>{{ auth()->user()->username}}! </b></p>
            <p class="text-center font-light text-lg text-white">
                Wie <span class="text-tertiary">läuft</span> dein Tag?
            </p>
        </div>
    <div class="flex flex-col md:flex-row gap-14 pt-[4em]">
        <div class="habbo-stand">
            <a href="{{ route('profiles', auth()->user()) }}">
                <img src="{{ auth()->user()->avatar }}&direction=2&head_direction=3&gesture=sml&size=l" alt="{{ auth()->user()->username }}" class="relative transition-all duration-300 -top-20 hover:scale-[101%] drop-shadow image-rendering-pixelated" />
            </a>
        </div>
        <div class="flex flex-col gap-10 -mt-12 text-center w-full">
            <p class="text-4xl text-white italic font-light">„{{ auth()->user()->motto}}“</p>
            <div class="flex items-center gap-2 flex-col md:flex-row w-full justify-between text-lg">
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/credits.png" alt="">
                    {{auth()->user()->credits}}
                </div>
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/diamonds.png" alt="">
                    {{auth()->user()->currencies->firstWhere('type', 5)?->amount ?? 0}}
                </div>
                <div class="flex items-center gap-1.5 text-white font-light">
                    <img src="/assets/images/icons/home/duckets.png" alt="">
                    {{auth()->user()->currencies->firstWhere('type', 0)?->amount ?? 0}}
                </div>
            </div>
            <a href="{{ route('game.nitro') }}">
                <button class="w-full rounded p-2 text-white transition ease-in-out duration-300 bg-secondary bg-opacity-90 hover:bg-opacity-100 ">
                    {{ __('Nitro client') }}
                </button>
            </a>
        </div>
    </div>
</div>