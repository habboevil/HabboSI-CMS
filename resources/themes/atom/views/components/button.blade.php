@props(['variant' => 'primary', 'type' => 'button', 'disabled' => false])

<button
    {{ $attributes->merge(['type' => $type ]) }}
    @disabled($disabled)
    @class([
        'w-full rounded p-2 border-2 text-white transition ease-in-out duration-300',
        'bg-secondary bg-opacity-90 hover:bg-opacity-100 border-secondary' => $variant === 'primary',
        'bg-green-600 hover:bg-green-700 border-green-500' => $variant === 'secondary',
        'bg-red-500 hover:bg-red-600 border-red-400' => $variant === 'danger',
        'disabled:opacity-50 disabled:cursor-normal' => $disabled,
        'bg-tertiary border-tertiary' => $variant === 'shop',
        $attributes->get('class'),
    ])
>
    {{ $slot }}
</button>