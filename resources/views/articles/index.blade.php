@extends('layouts.main')

@section('pageTitle', 'Articles ')

@section('content')
    @foreach ($articles as $article)
        <p>{{ $article->title }}</p>
    @endforeach
@endsection