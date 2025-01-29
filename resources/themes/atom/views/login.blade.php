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

    <title>{{ $settings->get('hotel_name') }} - {{ __('Login!') }}</title>

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

<body class="bg-primary">

    <x-messages.flash-messages />
    <canvas id="snowCanvas"></canvas>
    <main id="app" class="relative h-screen">

        <div class="flex items-center justify-center h-full w-full p-3 md:p-0">
            <div class="max-w-[30em] w-full flex flex-col gap-3">
                <div class="flex items-center gap-[1.5em]">
                    <img src="/assets/images/icons/habboicon.png" alt="">
                    <div class="flex flex-col">
                        <p class="font-bold text-white md:text-3xl">Login</p>
                        <p class="font-extralight leading-5 md:leading-[1.75rem] md:text-lg text-white text-opacity-60">Hast du deine Habbo-Schlüssel dabei?</p>
                    </div>
                </div>
                <x-form.form route="{{ route('login.store') }}" class="flex flex-col gap-8 pt-[2em]">
                    <x-form.input
                        id="username"
                        label="{{ __('Username') }}"
                        placeholder="{{ __('Username') }}"
                        value="{{ old('username') }}"
                        autofocus
                    />

                    <x-form.input
                        id="password"
                        label="{{ __('Password') }}"
                        placeholder="{{ __('Password') }}"
                        type="password"
                    />

                    @if (config('services.turnstile.enabled'))
                        <x-turnstile />
                    @endif

                    <a href="#" class="relative text-xs opacity-80 hover:opacity-100 duration-300 -mb-4 -mt-4 text-secondary">Passwort vergessen?</a>

                    <x-button type="submit">{{ __('Login') }}</x-button>
                </x-form.form>
                <div class="relative text-xs text-white text-opacity-60">
                    Du hast noch kein Account? <a href="/register" class="text-xs opacity-80 hover:opacity-100 duration-300 -mb-4 -mt-4 text-secondary">Kostenlos anmelden</a>
                </div>

            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/@popperjs/core@2"></script>
</body>
</html>