@props(['index', 'item', 'fn', 'title', 'color'])

<a href="{{ route('profiles', $item) }}" 
   class="w-full bg-[#0000001a] relative overflow-hidden flex items-center gap-2 h-[100px] px-2 rounded-[5px] {{ $index === 0 ? 'border-l-[4px] border-['.$color.']' : '' }}">
    <div class="h-[100px] w-[140px] !bg-[50%_-30px] min-w-[100px] !bg-no-repeat bg-[#0000000d]" 
         style="background-image:url({{ $item->avatar }}&head_direction=3&gesture=sml&direction=2&size=l)">
    </div>
    <div class="flex flex-col justify-center p-2 grow">
        <p class="text-white text-3xl font-light">{{ $item->username }}</p>
        <p class="text-white font-extralight opacity-80"><b>{{ $fn($item) }} {{$title}}</b></p>
    </div>
    @if ($index === 0)
        <div class="absolute right-3">
            <img src="/assets/images/icons/ruhmeshalle/{{$title}}.gif" alt="">
        </div>
    @endif
</a>
