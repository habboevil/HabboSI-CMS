@props(['photo'])

<a href="{{ $photo->url }}" data-fancybox="gallery" class="cursor-pointer">
    <x-card.base class="!p-0 relative aspect-square group">
        <img src="{{ $photo->url }}" alt="{{ $photo->name }}" class="object-cover rounded-sm aspect-square">
        <div class="absolute w-full mx-auto h-full opacity-0 group-hover:opacity-100 transition-all duration-300 bg-opacity-50 bg-[#1d1d1d] rounded-lg flex flex-col gap-0.5 items-center justify-center">
            <img class="drop-shadow" src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{ $photo->user->look ?? '' }}&direction=2&headonly=1&head_direction=2&gesture=sml" alt="">
        <p class="text-white">{{ $photo->user?->username ?? '-' }}</p>
    </div>
    </x-card.base>
</a>