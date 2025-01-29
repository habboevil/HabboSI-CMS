@props(['article'])

<div class="flex flex-col gap-2 mb-2">
    <p class="text-center text-white text-6xl font-extralight">{{ $article->title }}</p>
    <p class="text-center font-light text-lg text-quarternary italic">
        {{ $article->short_story }}
    </p>
</div>

<article class="prose-sm prose !max-w-full dark:prose-invert prose-a:text-blue-500 prose-img:inline prose-img:!my-0 relative -top-2 text-lg bg-[#0000001a] p-[2em] mb-2">
    {!! $article->full_story !!}
    <hr class="border-[#ffffff0d] m-0 mt-1 mb-3">
    <div class="flex items-center gap-1 text-white justify-end text-opacity-50 text-base pr-8 top-3 relative">
        <div class="flex items-center w-8 h-8 overflow-hidden bg-primary rounded-full jusitfy-center">
            <img class="ml-[0.140rem] mt-0.5" src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{ $article->user?->look }}&size=s&headonly=1&head_direction=3" alt="Systemaccount">
        </div>
        {{ $article->user->username }}
    </div>
</article>
