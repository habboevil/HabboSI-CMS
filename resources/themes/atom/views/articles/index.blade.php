@extends('layouts.app')

@push('title', __('Articles'))

@section('content')
    <div class="flex flex-col col-span-12 gap-3 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Neuigkeiten</p>
            <p class="text-center font-light text-lg text-white">
                Die neusten <span class="text-tertiary">Neuigkeiten</span>
                im Habbo Hotel?
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <x-article.newslist :articles="$articles" />
        </div>
    </div>
@endsection