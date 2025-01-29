@extends('layouts.app')

@push('title', __('Ruhmeshalle'))

@section('content')
    <div class="flex flex-col col-span-12 gap-3 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Ruhmeshalle</p>
            <p class="text-center font-light text-lg text-white">
                Unsere geliebten <span class="text-quinary">Stars</span>
                im Habbo Hotel
            </p>
        </div>
        <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
            <x-leaderboard.list
                class="bg-[#e9b124] outline-[#f6d76a]"
                title="{{ __('Taler') }}"
                icon="credits.png"
                :items="$credits"
                color="#f6d76a"
                :fn="fn ($user) => $user->credits"
            />

            <x-leaderboard.list
                class="bg-[#c44aacb] outline-[#c461d8]"
                title="{{ __('duckets') }}"
                icon="duckets.png"
                :items="$duckets"
                color="#c461d8"
                :fn="fn ($user) => $user->currencies->firstWhere('type', 0)?->amount ?? 0"
            />

            <x-leaderboard.list
                class="bg-[#caf1f3] outline-[#6caff4]"
                title="{{ __('Diamantes') }}"
                icon="diamond.png"
                color="#67abed"
                :items="$diamonds"
                :fn="fn ($user) => $user->currencies->firstWhere('type', 5)?->amount ?? 0"
            />

            <div class="col-span-1 lg:col-span-3 lg:mb-12">
                <div class="pt-[8em] grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-5 relative md:w-full leaderboards">
                        <img src="/assets/images/icons/leaderboard.png" alt="">
                    </div>
                    <div class="col-span-12 lg:col-span-7 flex flex-col relative lg:top-40 lg:ml-8 text-center lg:text-start">
                        <p class="text-5xl text-white font-medium mb-6">Cool oder? ;)</p>
                        <p class="text-3xl italic opacity-60 font-light leading-[2.7rem] tracking-wider text-white mb-6">
                            „Werde beliebt und reich, und vielleicht gehörst du auch bald zu den Besten der Besten!“
                        </p>
                    </div>
                </div>
            </div>

            <x-leaderboard.liste
                class="bg-red-400 outline-red-500"
                title="{{ __('Onlinestunden') }}"
                icon="clock.gif"
                color="#ef975c"
                :items="$onlineTimes"
                :fn="fn ($user) => round($user->setting->online_time / 3600)"
            />

            <x-leaderboard.liste
                class="bg-red-400 outline-red-500"
                title="{{ __('Lobe erhalten') }}"
                icon="heart.gif"
                color="#95b5f2"
                :items="$respects"
                :fn="fn ($user) => $user->setting->respects_received"
            />

            <x-leaderboard.liste
                class="bg-[#e9b124] outline-[#b26d18]"
                title="{{ __('Smaragd') }}"
                icon="smaragd.gif"
                color="#c5f27f"
                :items="$smaragd"
                :fn="fn ($user) => $user->currencies->firstWhere('type', 103)?->amount ?? 0"
            />
        </div>
    </div>
@endsection