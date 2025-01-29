@props(['title', 'icon', 'items', 'fn', 'color'])


<div class="flex flex-col gap-3 mt-3">
    @foreach ($items as $index => $item)
        <x-leaderboard.items :item="$item" :color="$color" :index="$index" :fn="$fn" :icon="$icon" :title="$title" />
    @endforeach
</div>
