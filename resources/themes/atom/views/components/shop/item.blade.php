@props(['article'])

<div class="p-8 bg-[#262626]">

    <p class="text-2xl font-light" style="color:{{ $article->color }}">{{ $article->name }}</p>
    <p class="text-5xl text-white opacity-80 font-extralight mb-4">{{$article->costs}} €</p>
    <p class="italic text-sm text-white opacity-60 font-light">Monatlich - ohne Kündigungsfrist</p>
    <hr class="border-[#ffffff0d] m-0 mt-5 mb-3">
    <x-form.form route="{{ route('shop.purchase', $article) }}" class="grid grid-cols-1 gap-3">
        <div class="grid grid-cols-2 gap-3 md:grid-cols-6">
            @foreach ($article->badgeItems as $badge)
                <x-shop.badge :badge="$badge" />
            @endforeach

            @foreach ($article->items as $furniture)
                <x-shop.furni :furniture="$furniture" />
            @endforeach
        </div>

        <article class="prose-sm prose dark:prose-invert">

            <ul class="font-light text-lg">
                <p class="mb-[3em]">{{ $article->info }}</p>
                @if ($article->credits)<li>{{ $article->credits }} {{ __('Credits') }}</li>@endif
                @if ($article->duckets)<li>{{ $article->duckets }} {{ __('Duckets') }}</li>@endif
                @if ($article->diamonds)<li>{{ $article->diamonds }} {{ __('Diamonds') }}</li>@endif
                @foreach ($article->features as $feature)<li>{{$feature->content}}</li>@endforeach
            </ul>
        </article>

        <button type="submit" class="w-full rounded p-2 text-white transition ease-in-out duration-300 font-medium" style="background:{{ $article->color }}">
            {{ __('Buy for $:cost', ['cost' => $article->costs]) }}
        </button>
    </x-form.form>
</div>
