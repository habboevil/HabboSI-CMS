@extends('layouts.app')

@push('title', __('Ehrenamt'))

@section('content')
    <div class="col-span-12 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Ehrenamt</p>
            <p class="text-center font-light text-lg text-white">
                Dieses  <span class="text-quarternary">Team</span>
                arbeitet ehrenamtlich.
            </p>
        </div>
        <div class="flex flex-col gap-3">
            <x-team.list :teams="$teams" />
        </div>
    </div>
@endsection