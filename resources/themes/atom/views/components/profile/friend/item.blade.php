@props(['friend'])

<div class="flex items-center justify-center overflow-hidden w-[64px] h-[64px] rounded bg-[#1d1d1d] aspect-square">
    <img src="{{ $friend->friend->avatar }}&headonly=1" alt="{{ $friend->friend->username }}" />
</div>