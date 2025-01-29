@props(['articles'])

@foreach ($articles as $article)
    <x-article.newsitem :article="$article" />
@endforeach