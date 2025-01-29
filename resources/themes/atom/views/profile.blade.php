@extends('layouts.app')

@push('title', $user->username)

@section('content')
    <div class="col-span-12 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-5xl md:text-6xl font-extralight">Profil von: {{ $user->username  }}</p>
            <p class="text-center font-light text-lg text-white">
             Wow! Du stöberst gerade im <span class="text-tertiary">Profil</span> von {{ $user->username }}. Was wirst du wohl entdecken?
            </p>
        </div>
        <x-profile.hero :user="$user" />
        <x-profile.badge.list :user="$user" />
        <x-profile.room.list :user="$user" />
        <x-profile.friend.list :user="$user" />
    </div>
@endsection