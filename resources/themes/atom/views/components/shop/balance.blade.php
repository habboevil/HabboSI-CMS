<div class="flex flex-col">
    <div class="items-center justify-center font-light text-center bg-[#0000003f] group-hover:bg-[#c82223] duration-300 text-white text-xl rounded-[3px] p-3 mb-4 shadow-[0px_2px_5px_0px_rgba(0,0,0,0.1),0px_0px_2px_0px_rgba(0,0,0,0.1)]">
        {{ __('Top up account') }}
    </div>
    <x-form.form route="{{ route('shop.top-up') }}" class="flex flex-col md:flex-row gap-3">
        <div class="px-4 py-2 text-base text-center text-white text-opacity-60 rounded h-max mt-[0.5em] font-light flex flex-col">
            {{ __('Current balance: ')}} <br>
            <p class="text-2xl mt-3">{{auth()->user()->website_balance}}</p>
        </div>

        <div class="flex flex-col w-full gap-3">
            <x-form.input
                id="amount"
                type="number"
                placeholder="{{ __('Amount') }}"
                min="5"
                step="5"
                required
            />

            <x-button type="submit" variant="shop">{{ __('Donate') }}</x-button>
        </div>
    </x-form.form>
</div>