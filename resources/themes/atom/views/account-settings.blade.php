@extends('layouts.app')

@push('title', __('Account settings'))

@section('content')
    <div class="flex flex-col col-span-12 gap-3 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">{{ __('Account settings') }}</p>
            <p class="text-center font-light text-lg text-white">
                Verwalte deine <span class="text-tertiary">Kontoeinstellungen</span>
                im Habbo Hotel
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            <x-form.form action="{{ route('users.settings.password.store') }}" class="flex flex-col flex-1 gap-3">
                <x-form.input
                    id="password_current"
                    label="{{ __('Current password') }}"
                    info="{{ __('Enter your current password') }}"
                    type="password"
                />

                <x-form.input
                    id="password"
                    label="{{ __('New password') }}"
                    info="{{ __('Enter a new secure password. Do not forget to save it somewhere safe') }}"
                    type="password"
                />

                <x-form.input
                    id="password_confirmation"
                    label="{{ __('Confirm new password') }}"
                    info="{{ __('Please confirm your new password') }}"
                    type="password"
                />

                <div class="ml-auto w-full">
                    <x-button type="submit">{{ __('Update password') }}</x-button>
                </div>
            </x-form.form>
            <x-form.form action="{{ route('users.settings.account.store') }}" class="flex flex-col flex-1 gap-3">
                <x-form.input
                    id="motto"
                    label="{{ __('Motto') }}"
                    info="{{ __('Spice up your profile with a nice motto') }}"
                    value="{{ auth()->user()->motto }}"
                    autofocus
                />

                <div class="flex flex-col gap-3">
                    <x-form.input
                        id="mail_current"
                        label="{{ __('Aktuelle E-mail') }}"
                        info="{{ __('Enter your current email address') }}"
                        type="email"
                    />

                    <x-form.input
                        id="mail"
                        label="{{ __('E-mail') }}"
                        info="{{ __('Make sure to use an email that you remember, if you ever lose your password, your email will be required.') }}"
                        type="email"
                    />

                    <x-form.input
                        id="mail_confirmation"
                        label="{{ __('Wiederhole deine E-mail') }}"
                        info="{{ __('Make sure to use an email that you remember, if you ever lose your password, your email will be required.') }}"
                        type="email"
                    />
                </div>

                <div class="ml-auto w-full">
                    <x-button type="submit">{{ __('Update settings') }}</x-button>
                </div>
            </x-form.form>
        </div>
    </div>
@endsection