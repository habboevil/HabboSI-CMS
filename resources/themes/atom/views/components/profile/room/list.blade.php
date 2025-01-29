@props(['user'])

<div class="col-span-1 pt-[3em]">
    <p class="text-center text-white text-opacity-60 text-3xl font-light">Das sind die Räume von <b class="text-tertiary">{{ $user->username }}</b></p>
    <div class="flex flex-wrap justify-center items-center gap-4 pt-[2em]">
        @forelse($user->rooms as $room)
            <x-profile.room.item :room="$room" />
        @empty
            <p class="col-span-2 text-sm font-semibold text-center md:col-span-8 sm:col-span-4">
                {{ __('It seems like :user got no rooms.', ['user' => $user->username]) }}
            </p>
        @endforelse
    </div>
</div>
