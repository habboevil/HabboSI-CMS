@props(['team'])

<x-card.base badge="{{ $team->badge }}" title="{{ $team->rank_name }}" subtitle="{{ $team->job_description }}" icon-color="{{ $team->staff_color }}">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:px-2 gap-5">
        @forelse ($team->users as $user)
            <a href="{{ route('profiles', $user->username) }}" class="w-full bg-[#0000001a] relative overflow-hidden flex items-center h-[100px] rounded-[5px] hover:-translate-y-2 duration-300">
                <div class="min-h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#242424]" style="background-image:url({{ $user->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)"></div>
                <div class="flex flex-col justify-center py-2 px-5 truncate">
                    <p class="text-white text-3xl font-light truncate">{{ $user->username }}</p>
                    <p class="text-white font-light opacity-60 italic">„{{ $user->motto }}“</p>
                </div>
                <div class="top-4 absolute right-4 w-2 h-2 rounded-full {{ $user->online === '1' ? 'bg-[#49d85a] opacity-100 shadow-[0px_0px_5px_#49d85a]' : 'bg-[#d84949] opacity-25 shadow-[0px_0px_5px_#d84949] ' }}"></div>
            </a>
        @empty
            <div class="col-span-1 text-center sm:col-span-2 lg:col-span-3 text-opacity-60 font-light ">
                {{ __('We currently have no staff in this position') }}
            </div>
        @endforelse
    </div>
</x-card.base>
