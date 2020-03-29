@extends('layouts.main')

@section('pageTitle', $article->title . ' / ')

@section('content')
<div>
    <h1 class="article-heading">{{ $article->title }}</h1>
    <div class="article-meta">
        <p class="subtext">{{ $article->created_at->format('d F Y') }}</p>
    </div>

    <p class="article-excerpt">{{ $article->excerpt }}</p>
    <div class="article-body">
        {!! $article->body !!}
    </div>
</div>
@endsection