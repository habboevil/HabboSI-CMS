@extends('layouts.app')

@push('title', __('Rare values'))

@section('content')
    <div class="col-span-12 gap-3 grid grid-cols-12 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6 col-span-12">
            <p class="text-center text-white text-6xl font-extralight">Preisliste</p>
            <p class="text-center font-light text-lg text-white">
                Welche Seltenheit ist <span class="text-[#c82223]">am wertvollsten</span>
                im Habbo Hotel?
            </p>
        </div>
        <x-rare-value.list :categories="$categories" />
    </div>
@endsection
