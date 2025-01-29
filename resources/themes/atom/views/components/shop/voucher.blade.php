<div class="flex flex-col">
    <div class="items-center justify-center font-light text-center bg-[#0000003f] group-hover:bg-[#c82223] duration-300 text-white text-xl rounded-[3px] p-3 mb-4 shadow-[0px_2px_5px_0px_rgba(0,0,0,0.1),0px_0px_2px_0px_rgba(0,0,0,0.1)]">
        {{ __('Voucher') }}
    </div>
    <x-form.form route="{{ route('shop.voucher.redeem') }}" class="flex flex-col gap-3">
        <x-form.input
            id="code"
            placeholder="{{ __('Voucher ')}}"
            autofocus
        />
        <x-button type="submit" variant="primary">{{ __('Use voucher') }}</x-button>
    </x-form.form>
</div>