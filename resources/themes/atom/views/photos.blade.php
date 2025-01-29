@extends('layouts.app')

@push('title', __('Photos'))

@section('content')
    <div class="flex flex-col col-span-12 gap-3 md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">{{ __('Latest Photos') }}</p>
            <p class="text-center font-light text-lg text-white">
                Schau dir die <span class="text-quinary">Fotos</span> aus dem Hotel an.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-4">
        @foreach ($photos as $photo)
            <x-photo.item :photo="$photo" />
        @endforeach

        @if ($photos instanceof \Illuminate\Pagination\LengthAwarePaginator && $photos->lastPage() > 1)
            <div class="col-span-1 sm:col-span-2 md:col-span-4">
            {{ $photos->links() }}
            </div>
        @endif
    </div>
    </div>
@endsection 