@props(['badge'])

<div class="flex items-center h-[64px] w-[64px] justify-center rounded bg-[#1d1d1d] aspect-square">
    <img src="{{ Storage::disk('album1584')->url($badge->badge_code . '.gif') }}" alt="{{ $badge->badge_code }}" />
</div>