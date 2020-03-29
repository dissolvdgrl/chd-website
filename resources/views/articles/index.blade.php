@extends('layouts.main')

@section('pageTitle', 'Articles ')

@section('content')
    <section class="header">
        <div>
            <h1 class="main-heading">Articles</h1>
            <p class="header-small">Strong opinions, ramblings about code and other codswallop. Go away if you're easily offended :) </p>
        </div>
    </section>
    @foreach ($articles as $article)
        <div class="article-box">
            <h1 class="body-heading"><a href="/articles/{{ $article->slug }}" class="link">{{ $article->title }}</a></h1>
            <p class="subtext">{{ $article->created_at->format('d F Y') }}</p>
            <p>{{ $article->excerpt }}</p>
            <a href="/articles/{{ $article->slug }}" class="button">README.html</a>
        </div>
    @endforeach
@endsection