<nav x-data="{ dropdownVisible: false }" class="mainNav shadow-[0_1px_0_0_rgba(255,_255,_255,_0.05)] lg:shadow-none" x-on:click.outside="dropdownVisible = false">
    <div class="container min-h-[60px] px-4 py-3 lg:flex md:items-center md:justify-between md:mx-auto relative">
        <div class="relative flex flex-col items-center w-full h-full py-3 md:flex-1 md:w-auto gap-y-2 md:flex lg:flex-row md:gap-x-4 md:gap-y-0 md:py-0">
            <button class="relative flex items-center w-full justify-between ml-auto text-gray-900 dark:text-white top-1.5 lg:hidden" x-on:click="dropdownVisible = !dropdownVisible">
                <img src="/assets/images/habbo.gif" alt="">
                <x-icon.hamburger />
            </button>
            <img class="hidden lg:block" src="/assets/images/habbo.gif" alt="">
            {{--@auth
                <x-navigation.item href="{{ route('users.me') }}" icon="home" :active="request()->routeIs('users*') || request()->routeIs('profiles')">
                    {{ auth()->user()->username }}
                </x-navigation.item>
            @endauth--}}

            {{--@guest--}}
                <x-navigation.item href="{{ route('index') }}" icon="home" :active="request()->routeIs('index')">
                    {{ __('Home') }}
                </x-navigation.item>
            {{--@endguest--}}

            <x-dropdown.base alignment="left" x-cloak>
                    <span class="flex gap-2 px-1 h-auto md:h-[60px] opacity-75 items-center text-[18px] font-light text-white transition duration-200 ease-in-out hover:opacity-100">Community</span>
                    <x-slot:children>     
                        <x-dropdown.item class="text-white" href="/community/articles">{{ __('Articles') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('community.staff') }}">{{ __('Staff') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('community.teams') }}">{{ __('Teams') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('leaderboards') }}">{{ __('Leaderboards') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('community.photos.index') }}">{{ __('Photos') }}</x-dropdown.item>
                    </x-slot:children>
            </x-dropdown.base>


            <x-dropdown.base alignment="left" x-cloak>
                    <span class="flex gap-2  px-1 h-auto md:h-[60px] opacity-75 items-center text-[18px] font-light text-white transition duration-200 ease-in-out hover:opacity-100">
                        Extras
                    </span>
                    <x-slot:children>     
                        <x-dropdown.item class="text-white" href="#">{{ __('Badgecreator (coming soon)') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('rare-values') }}">{{ __('Rare values') }}</x-dropdown.item>
                    </x-slot:children>
            </x-dropdown.base>


            <x-navigation.item href="{{ route('shop.index') }}" icon="shop" color="#56ff79" :active="request()->routeIs('shop.index')">
                {{ __('Shop') }}
            </x-navigation.item>
        </div>

        @guest
        <div :class="dropdownVisible ? 'flex md:flex' : 'hidden lg:flex'" class="justify-end w-full gap-4 py-5 md:justify-center md:w-auto md:py-0">
            <a href="https://discord.gg/habbopie" target="_blank" class="w-[24px] h-[24px] group relative top-2">
                <svg id="Bold" class="w-full h-full opacity-75 group-hover:opacity-100" fill="#fff" enable-background="new 0 0 24 24" height="0" viewBox="0 0 24 24" width="0" xmlns="http://www.w3.org/2000/svg">
                <path d="m3.58 21.196h14.259l-.681-2.205 1.629 1.398 1.493 1.338 2.72 2.273v-21.525c-.068-1.338-1.22-2.475-2.648-2.475l-16.767.003c-1.427 0-2.585 1.139-2.585 2.477v16.24c0 1.411 1.156 2.476 2.58 2.476zm10.548-15.513-.033.012.012-.012zm-7.631 1.269c1.833-1.334 3.532-1.27 3.532-1.27l.137.135c-2.243.535-3.26 1.537-3.26 1.537s.272-.133.747-.336c3.021-1.188 6.32-1.102 9.374.402 0 0-1.019-.937-3.124-1.537l.186-.183c.291.001 1.831.055 3.479 1.26 0 0 1.844 3.15 1.844 7.02-.061-.074-1.144 1.666-3.931 1.726 0 0-.472-.534-.808-1 1.63-.468 2.24-1.404 2.24-1.404-.535.337-1.023.537-1.419.737-.609.268-1.219.4-1.828.535-2.884.468-4.503-.315-6.033-.936l-.523-.266s.609.936 2.174 1.404c-.411.469-.818 1.002-.818 1.002-2.786-.066-3.802-1.806-3.802-1.806 0-3.876 1.833-7.02 1.833-7.02z"></path>
                <path d="m14.308 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.576-1.335-1.29-1.335v.003c-.708 0-1.288.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"></path>
                <path d="m9.69 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.575-1.335-1.286-1.335l-.004.003c-.711 0-1.29.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"></path></svg>
            </a>
            <a href="/login" class="rounded-btn px-3 max-h-[35px]">
                {{ __('Login') }}
            </a>
        </div>
        @endguest

        @auth   
            <div :class="dropdownVisible ? 'flex md:flex w-max' : 'hidden lg:flex'" class="mx-auto flex items-center py-2 h-12 text-white px-5 rounded-2xl titillium-web-bold gap-6 lg:absolute right-0 bg-[#1d1d1d]" >
                <x-dropdown.base x-cloak alignment="right">
                    <i class="fa-solid fa-chevron-down text-white text-sm"></i>
                    <p class="text-white text-sm font-light">{{ auth()->user()->username }}</p>
                    <div class="avatar w-[64px] h-[84px] -mt-9 -ml-6 relative left-3" style="background-image: url({{ auth()->user()->avatar }}&size=m&direction=4&gesture=sml)"></div>
                    <x-slot:children>
                        <x-dropdown.item class="text-white" href="{{ route('users.me') }}">{{ __('Dashboard') }}</x-dropdown.item>
                        @if (auth()->user()->rank >= $settings->get('min_housekeeping_rank'))
                            <x-dropdown.item class="text-quinary" href="{{ route('nova.pages.dashboard') }}" target="_blank">{{ __('Housekeeping') }}</x-dropdown.item>
                        @endif
                        <x-dropdown.item class="text-white" href="{{ route('users.settings.account.index') }}">{{ __('User settings') }}</x-dropdown.item>
                        <x-dropdown.item class="text-white" href="{{ route('logout') }}">{{ __('Logout') }}</x-dropdown.item>
                    </x-slot:children>
                </x-dropdown.base>
            </div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @endauth
    </div>
</nav>