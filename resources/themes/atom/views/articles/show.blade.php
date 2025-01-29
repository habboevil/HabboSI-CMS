@extends('layouts.app')

@push('title', $article->title)

@section('content')
    <x-article.base :article="$article" :articles="$articles" />
@endsection
