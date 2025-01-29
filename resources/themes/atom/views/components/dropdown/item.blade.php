@props(['href' => '', 'target' => '_self'])

<a href="{{ $href }}" target="{{ $target }}" @class([
    'block py-2 px-4 font-semibold hover:bg-[#222] text-gray-900 text-sm dark:text-gray-200 dark:hover:bg-gray-700',
    $attributes->get('class'),
])>
    {{ $slot }}
</a>