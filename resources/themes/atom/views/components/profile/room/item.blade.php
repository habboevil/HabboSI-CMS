@props(['room'])

<div class="flex flex-col w-[106px] h-[107px] p-1 group bg-[#1d1d1d] rounded-md items-center justify-center gap-y-1 relative">
    <div class="flex items-center justify-center aspect-square">
        <img src="{{ asset('images/room_placeholder.png') }}" alt="{{ $room->name }}" />
    </div>
    <p class="px-2 py-1 text-sm absolute z-50 w-max text-center truncate bg-[#2a2a2a]  bg-opacity-100 rounded text-white opacity-0 group-hover:opacity-100 duration-300 pointer-events-none">{{ $room->name }}</p>
</div>