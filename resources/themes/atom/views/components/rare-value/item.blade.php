@props(['category'])


@foreach($category->rareValues as $rare)
    <x-rare-value.rare :rare="$rare" />
@endforeach

