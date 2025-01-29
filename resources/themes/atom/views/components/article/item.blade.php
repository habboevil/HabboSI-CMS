@props(['article'])

<a href="{{ route('community.articles.show', $article) }}" class="max-w-[25em] hover:scale-[110%] md:min-w-[25em] w-full h-[14em] flex flex-col justify-between rounded-[7px] ease-in-out duration-300 !bg-[-200px_-2px]" style="box-shadow: 0 8px 5px rgba(0, 0, 0, .1);background-image: url({{ Storage::exists($article->image) ? Storage::url($article->image) : $article->image }});">
    <div class="news relative -top-3 mx-auto w-max py-1 px-4 rounded-3xl bg-secondary uppercase text-white text-sm" style="box-shadow: 0 0 15px rgba(73, 216, 90, .35);">
        News
    </div>
    <div class="relative text-white text-shadow-lg p-4 pt-4 pb-5 rounded-b-lg" style="background: linear-gradient(0deg, #000 10%, rgba(0, 0, 0, 0) 100%);">
        <p class="text-2xl font-medium">{{ $article->title }}</p>
        <p class="italic opacity-60 font-light truncate">{{ $article->short_story }}</p>
    </div>
</a>