@props(['article', 'articles'])

<div class="col-span-12 space-y-4 flex flex-col md:pt-[4em]">
    <x-article.content :article="$article" />
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($articles->take(4) as $item)
            <a href="{{ route('community.articles.show',  $item) }}" class="hover:scale-[110%] w-full h-[14em] flex flex-col justify-between rounded-[7px] ease-in-out duration-300 !bg-[-200px_-2px]" style="box-shadow: 0 8px 5px rgba(0, 0, 0, .1);background-image: url({{ Storage::exists( $item->image) ? Storage::url( $item->image) :  $item->image }});">
                <div class="news relative -top-3 mx-auto w-max py-1 px-4 rounded-3xl bg-secondary uppercase text-white text-sm" style="box-shadow: 0 0 15px rgba(73, 216, 90, .35);">
                    News
                </div>
                <div class="relative text-white text-shadow-lg p-4 pt-4 pb-5 rounded-b-lg" style="background: linear-gradient(0deg, #000 10%, rgba(0, 0, 0, 0) 100%);">
                    <p class="text-2xl font-medium">{{  $item->title }}</p>
                    <p class="italic opacity-60 font-light truncate">{{  $item->short_story }}</p>
                </div>
            </a>
        @empty
            <p class="text-sm text-center dark:text-white">{{ __('There is currently no other articles') }}</p>
        @endforelse
    </div>
</div>