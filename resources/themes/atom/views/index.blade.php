<!DOCTYPE html>
<html class="w-full min-h-full app {{ $settings->get('cms_color_mode') }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('meta.description', ['name' => $settings->get('hotel_name')]) }}" />
    <meta name="keywords" content="{{ __('meta.keywords', ['name' => $settings->get('hotel_name'), 'url' => config('app.url')]) }}" />
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta itemprop="name" content="{{ $settings->get('hotel_name') }}">
    <meta itemprop="description" content="{{ __('meta.description', ['name' => $settings->get('hotel_name')]) }}">
    <meta itemprop="image" content="{{ asset('images/app_summary_image.png') }}">

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $settings->get('hotel_name') }}">
    <meta property="og:title" content="{{ $settings->get('hotel_name') }}">
    <meta property="og:description" content="{{ __('meta.description', ['name' => $settings->get('hotel_name')]) }}">
    <meta property="og:image" content="{{ asset('images/app_summary_image.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ url()->current() }}">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $settings->get('hotel_name') }}">
    <meta name="twitter:description" content="{{ __('meta.description', ['name' => $settings->get('hotel_name')]) }}">
    <meta name="twitter:image" content="{{ asset('images/app_summary_image.png') }}">
    <meta name="twitter:site" content="{{ __('meta.twitter') }}">

    <title>{{ $settings->get('hotel_name') }} - Startseite @stack('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <link rel="icon" type="image/png" sizes="18x17" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    
    @if (config('services.turnstile.enabled'))@turnstileScripts()@endif

    @if (config('sentry.dsn'))<script src="https://js.sentry-cdn.com/06998e4b6cace292c6d5ac3fb05698e7.min.js" crossorigin="anonymous"></script>@endif

    @stack('scripts')

    @vite(sprintf('resources/themes/%s/css/app.css', $settings->get('theme')))
    @vite(sprintf('resources/themes/%s/js/app.js', $settings->get('theme')))
</head>

<body class="flex flex-col min-h-screen indexBody !bg-primary">

    <canvas id="snowCanvas"></canvas>
    <x-messages.flash-messages />

    <main id="app">
        <x-navigation.base />

        <div class="grid grid-cols-12 p-6 mx-auto mt-10 container gap-x-3 gap-y-8 md:mt-0 ">
            <div class="col-span-12 relative">
                <div class="particles">
                    <div class="particles__content" style="transform: translate(29.54px, 57.245px);">
                    <div class="particle-1"></div>
                    <div class="particle-2"></div>
                    <div class="particle-3"></div>
                    <div class="particle-4"></div>
                    <div class="particle-5"></div>
                    <div class="particle-6"></div>
                    <div class="particle-7"></div>
                    <div class="particle-8"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-12">
                    <div class="pt-[8em] grid grid-cols-12">
                    <div class="col-span-12 md:col-span-7 flex flex-col order-2 md:order-1">
                        <p class="text-3xl text-white font-medium mb-6">Bist du bereit auf ein Abenteuer?</p>
                        <p class="text-xl font-light text-white mb-6">Habbo ist ein kostenloses Spiel, in welchem du eine riesige Welt von Räumen entdecken <br> kannst, Suchen abschliessen, chatten und Preise gewinnen kannst ohne etwas zahlen zu <br> müssen! </p>
                        <p class="text-xl font-light text-white mb-8">Auf dich warten gerade <b>{{ $online }} Habbo Mitglieder</b>, die im Hotel sind. Werde ein Teil der weltweit größten Online-Community für Teenager.</p>
                        @auth
                        <a href="/game/nitro" class="rounded-btn-primary !bg-green !text-white w-max">Jetzt einchecken!</a>
                        @endauth
                        @guest
                        <a href="/register" class="rounded-btn-primary !bg-white !text-black w-max">Registrieren</a>
                        @endguest
                    </div>
                    <div class="col-span-12 md:col-span-5 relative max-w-[478px] h-[404px] md:w-full order-1 md:order-2">
                        <div class="introduction-image"></div>
                        <div class="introduction-image-key"></div>
                    </div>
                    </div>
                    <div class="pt-[5em] flex flex-col">
                    <p class="text-[5em] text-center text-white font-extralight">Habbo?</p>
                    <p class="text-center text-white text-[1.25em] -mt-2 font-light"> Du kannst mit dem Begriff <span class="text-quarternary">Habbo</span> nichts anfangen? </p>
                    <div class="max-w-[50em] mx-auto pt-[1.5em] font-light text-center text-white text-opacity-75">
                        <b>Habbo</b> ist eine virtuelle online Community im vintage Pixelkunst Style wo du deinen eigenen Avatar kreieren, Freunde finden, chatten, Räume bauen, Spiele spielen kannst und vieles mehr! Es ist fast alles möglich in diesem seltsamen Ort mit vielen tollen Leuten…
                    </div>
                    </div>
                </div>
                <div class="w-full relative pt-[8em]">
                    <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper mb-16">
                        <div class="swiper-slide">
                        <div class="flex flex-col h-[384px] justify-center items-center">
                            <img class="w-[181px] h-[153px] mb-8 relative top-2" src="/assets/images/slider/liebe.png" alt="">
                            <p class="text-white text-2xl font-normal mb-3">Habbo Liebe</p>
                            <p class="text-white text-opacity-60 tracking-wide max-w-[22.5em] break-words text-center text-base font-light">
                                Sich virtuell verabreden, zu flirten, sich
                                verknallen, vielleicht den besonderen Jemand treffen
                                ...oder das besondere Etwas?
                            </p>
                        </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col h-[384px] justify-center items-center">
                                <img class="w-[196px] h-[174px] mb-8" src="/assets/images/slider/expertewerden.png" alt="">
                                <p class="text-white text-2xl font-normal mb-3">Experte werden</p>
                                <p class="text-white text-opacity-60 tracking-wide max-w-[22.5em] break-words text-center text-base font-light">
                                    Größere Ziele? Versuche am Hotelerlebnis viel mitzunehmen und
                                    werde vielleicht ein Teil vom Habbo Team.
                                </p>
                        </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col h-[384px] justify-center items-center">
                                <img class="w-[198px] h-[157px] mb-8" src="/assets/images/slider/findfriends.png" alt="">
                                <p class="text-white text-2xl font-normal mb-3">Neue Freunde treffen</p>
                                <p class="text-white text-opacity-60 tracking-wide max-w-[22.5em] break-words text-center text-base font-light">
                                    Liebst du es mit deinen Freunden zu chatten und mit ihnen rumzuhängen?
                                    Habbo ist ein toller Ort um zu beginnen.
                                </p>
                        </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col h-[384px] justify-center items-center">
                                <img class="w-[294px] h-[170px] mb-8" src="/assets/images/slider/quests.png" alt="">
                                <p class="text-white text-2xl font-normal mb-3">Aufregende Quests</p>
                                <p class="text-white text-opacity-60 tracking-wide max-w-[22.5em] break-words text-center text-base font-light">
                                    Stelle deine Fähigkeiten unter Beweis,
                                    erreiche hohe Levelstufen und erhalte zahlreiche Belohnungen.
                                </p>
                        </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col h-[384px] justify-center items-center">
                                <img class="w-[270px] h-[198px] mb-8" src="/assets/images/slider/createrooms.png" alt="">
                                <p class="text-white text-2xl font-normal mb-3">Hotelräume gestalten</p>
                                <p class="text-white text-opacity-60 tracking-wide max-w-[22.5em] break-words text-center text-base font-light">
                                    Deiner Kreativität sind im Habbo Hotel keinerlei Grenzen gesetzt.
                                    Du bist der Boss deines eigenen virtuellen Zimmers.
                                </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="pt-[-1.5em] flex flex-col">
                    <p class="text-[3.5em] text-center text-white font-extralight">Neuigkeiten</p>
                    <p class="text-center text-white text-[1.25em] font-light">Was geschieht
                        <span class="text-tertiary">aktuell</span>  im Habbo Hotel?
                    </p>
                    <div class="flex flex-wrap flex-row gap-x-8 gap-y-10 justify-center pt-[4em] pb-[2em]">
                        <x-article.list :articles="$articles" />
                    </div>
                    </div>
                    <div class="pt-[8em] flex flex-col gap-4">
                        <p class="text-[3.5em] text-center text-white font-extralight">Community</p>
                        <p class="text-center text-white text-[1.25em] font-light">Ein seltsamer Ort mit tollen
                            <span class="text-quinary">tollen</span> Leuten!
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="sticky-element pt-24 md:sticky top-0 md:top-[calc(50vh-105px)] self-start">
                                <p class="uppercase text-4xl font-extralight opacity-90 text-white text-center">Ruhmeshalle</p>
                                <hr class="w-full h-1 mt-3 pb-3 opacity-40">
                                <p class="uppercase opacity-60 text-white font-light text-center" lang="en">
                                    Unsere geliebten Habbo Stars im Hotel
                                </p>
                            </div>
                            <div class="right h-[856px] flex flex-col justify-center gap-6 items-center pt-24 max-w-[30em] w-full mx-auto">
                                @foreach ($achievements as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#c5f27f]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..besitzt <b>{{ $user->settings->first()?->achievement_score ?? 'No data available' }} Score</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/achievement.gif" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($credits as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#f6d76a]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..besitzt <b>{{ $user->credits }} Taler</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/taler.png" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($diamonds as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#67abed]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..besitzt <b>{{ $user->currencies->first()->amount }} Diamantes</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/diamonds.gif" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($duckets as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#c461d8]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..besitzt <b>{{ $user->currencies->first()->amount }} Duckets</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/duckets.gif" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($onlineTimes as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#ef975c]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..hat <b>{{ $user->settings->first()?->online_time ?? 'No data available' }} Onlinestunden</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/onlinestunden.gif" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($respects as $user)
                                <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] border-[#95b5f2]">
                                    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                    <div class="flex flex-col justify-center p-2 grow">
                                        <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                        <p class="text-white font-extralight opacity-80">..hat <b>{{ $user->settings->first()?->respects_received ?? 'No data available' }} Lobe erhalten</b></p>
                                    </div>
                                    <div class="absolute right-3">
                                        <img src="/assets/images/icons/currency/respect.gif" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pt-[3em] flex flex-col gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="right flex flex-col justify-center gap-6 items-center pt-24 max-w-[30em] w-full mx-auto order-2 md:order-1">
                                <div class="right flex flex-col justify-center gap-6 items-center pt-24 max-w-[30em] w-full mx-auto order-2 md:order-1">
                                    @foreach ($users as $index => $user)
                                        @php
                                            $isTopTwo = $index < 2; // İlk 2 kullanıcıyı belirle
                                            $borderClass = $isTopTwo ? 'border-quinary' : 'border-secondary';
                                            $icon = $isTopTwo ? '/assets/images/icons/managament.gif' : '/assets/images/icons/staff.gif';
                                        @endphp

                                        <div class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] px-2 border-l-[4px] rounded-[5px] {{ $borderClass }}">
                                            <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                                            <div class="flex flex-col justify-center p-2 grow">
                                                <p class="text-white text-3xl font-light">{{ $user->username }}</p>
                                                <p class="text-white font-extralight opacity-80">{{ $user->motto }}</p>
                                            </div>
                                            <div class="absolute right-3">
                                                <img src="{{ $icon }}" alt="icon">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="relative order-1 md:order-2">
                                <div class="sticky-element pt-24 md:sticky top-0 md:top-[calc(50vh-105px)] self-start">
                                    <p class="uppercase text-5xl font-extralight opacity-90 text-white text-center" lang="en">Mitarbeiter</p>
                                    <hr class="w-full h-1 mt-3 pb-3 opacity-40">
                                    <p class="uppercase opacity-60 text-white font-light text-center" lang="en">Diese Gesichter stecken hinter dem Hotel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[8em] flex flex-col lg:flex-row gap-20">
                        <div class="right md:ml-8">
                            <img class="premium-img mx-auto" src="/assets/images/premium.png" alt="">
                        </div>
                        <div class="flex flex-col max-w-4xl justify-start gap-3">
                            <div class="flex flex-col text-[3.75em] leading-[0.8em]">
                                <p class="uppercase inline-block font-extrabold text-white w-max" style="background:url(/assets/images/icons/forumtitle.gif)">Habbo</p>
                                <p class="uppercase inline-block font-extrabold text-tertiary w-max" lang="en">Premium</p>
                            </div>
                            <p class="pt-4 text-white opacity-80 leading-[1.80rem] text-[20px] font-light">..ist ein besonderer Bestandteil von Habbo, dem du beitreten kannst, um einzigartige Raritäten zu erhalten, exklusive Features nutzen kannst, sowie viele andere verschiedene Vorteile die du als Premium Mitglied erhältst.</p>
                            <p class="pt-4 text-white opacity-80 leading-[1.80rem] text-[20px] font-light"><b class="opacity-100">Die Premiummitgliedschaft bei HabboSI ist geradezu ein Muss</b>, wenn man wirklich daran interessiert ist, sein Habbo Leben zu erleichtern.</p>
                            <p class="pt-4 text-white opacity-80 leading-[1.80rem] text-[20px] font-light">Wir bieten zwei Alternativen der Premium-Mitgliedschaft an:
                            <span class="text-tertiary font-medium">die Special-Mitgliedschaft</span>
                            mit Einstiegsfunktionen oder die <span class="text-quinary font-medium">King-Mitgliedschaft</span>,
                            mit der Du alle relevanten Funktionen für deinen Habbo nutzen kannst.
                            </p>
                            <a href="/shop" class="rounded-btn-primary !bg-white !text-black font-light w-max">Jetzt ab 4,99€</a>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/@popperjs/core@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/functions.js"></script>
</body>
</html>