@props(['group'])

<div class="flex items-center justify-center rounded bg-gray-50 aspect-square">
    <img src="{{ Storage::disk('group_badges')->url($group->badge . '.png') }}" alt="{{ $group->badge }}" />
</div>
