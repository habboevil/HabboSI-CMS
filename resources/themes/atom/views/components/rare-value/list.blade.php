@props(['categories'])

@foreach ($categories as $category)
    <x-rare-value.item :category="$category" />
@endforeach

