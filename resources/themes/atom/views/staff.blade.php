@extends('layouts.app')

@push('title', __('Staff'))

@section('content')
    <div class="col-span-12 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Mitarbeiter</p>
            <p class="text-center font-light text-lg text-white">
                Diese <span class="text-quarternary">Gesichter</span>
                stecken hinter dem Hotel
            </p>
        </div>
        <div class="flex flex-col gap-12">
            <x-staff.list :permissions="$permissions" />
        </div>
    </div>

@endsection