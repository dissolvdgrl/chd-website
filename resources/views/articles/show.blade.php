@extends('layouts.main')

@section('pageTitle', $article->title . ' / ')

@section('content')
<div>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>
</div>
@endsection