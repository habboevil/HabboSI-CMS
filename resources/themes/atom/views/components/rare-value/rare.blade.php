@props(['rare'])

<div class="flex flex-col gap-3 col-span-12 md:col-span-4 p-2.5 group bg-blackie rounded-[3px]">

   <div class="flex items-center justify-center bg-[#0000003f] group-hover:bg-[#c82223] duration-300 text-white text-xl rounded-[3px] p-3 mb-12 shadow-[0px_2px_5px_0px_rgba(0,0,0,0.1),0px_0px_2px_0px_rgba(0,0,0,0.1)]">
        {{ $rare->item->public_name }}
   </div>


   <div class="w-full h-[159px] flex items-center justify-center !bg-no-repeat !bg-center relative habbo-stand">

        <img class="relative -top-5" src="/storage/{{ $rare->furniture_icon ? $rare->furniture_icon : 'default-furniture-icon.png' }}" alt="{{ $rare->item->public_name }}">
        
        <div class="flex items-center gap-2 absolute bottom-4">

            <div class="flex items-center gap-3 px-3 py-1 bg-yellow-400 rounded">
                <img src="/images/icons/currency/credits.png" alt="Credits">
                <p class="text-sm font-semibold text-black/70">{{ $rare->credit_value ?? 0 }}</p>
            </div>
            

            @php
                $background = match($rare->currency_type) {
                    '0' => 'bg-[#da68c6]', // Duckets
                    '5' => 'bg-[#4c71a9]', // Diamonds
                    '101' => 'bg-green-500', // Seasonal
                    default => 'bg-gray-500' // Other
                };

                $icon = match($rare->currency_type) {
                    '0' => '/images/icons/currency/duckets.png',
                    '5' => '/images/icons/currency/diamonds.png',
                    '101' => '/images/icons/currency/seasonal.png',
                    default => '/images/icons/currency/other.png'
                };

                $currencyName = match($rare->currency_type) {
                    '0' => 'Duckets',
                    '5' => 'Diamonds',
                    '101' => 'Seasonal',
                    default => 'Other'
                };
            @endphp

            <div class="flex items-center gap-3 px-3 py-1 rounded {{ $background }}">
                <img src="{{ $icon }}" alt="{{ $currencyName }}">
                <p class="text-sm font-semibold text-white/70">
                    {{ $rare->currency_value ?? 0 }}
                </p>
            </div>
        </div>
   </div>
</div>
