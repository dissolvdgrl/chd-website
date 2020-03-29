@extends('layouts.main')

@section('pageTitle', $project->title . ' / ')

@section('content')
<section class="header">
    <div>
        <a href="/projects" class="link go-back">View all projects</a>
        <h1 class="main-heading">{{ $project->title }}</h1>
        <p class="header-small">{{ $project->tools }}</p>
    </div>
</section>
<section class="active-project">
    <div>
        <p>{{ $project->description }}</p>
        <a href="{{ $project->url }}" target="_blank" class="button">Visit site</a>
    </div>
    <img src="/storage/{{ $project->image }}" alt="An image displaying {{ $project->title }}">
</section>
@endsection