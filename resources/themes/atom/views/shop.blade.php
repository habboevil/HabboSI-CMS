@extends('layouts.app')

@push('title', __('Shop'))

@section('content')
    <div class="col-span-12  md:pt-[4em]">
        <div class="flex flex-col gap-2 mb-10 md:mb-6">
            <p class="text-center text-white text-6xl font-extralight">Habbo Premium</p>
            <p class="text-center font-light text-lg text-white">
                Eine <span class="text-tertiary">Premiummitgliedschaft</span>
                hebt deinen Habbo auf ein neues Level.
            </p>
        </div>
    </div>
    <div class="col-span-12 gap-3 md:col-span-12 grid grid-cols-1 md:grid-cols-3">
        <x-shop.list :articles="$articles" />
    </div>
    <div class="col-span-12 grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-6">
            <x-shop.balance />
        </div>
        <div class="col-span-12 md:col-span-6">
            <x-shop.voucher />
        </div>
    </div>


@endsection