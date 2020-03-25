@extends('layouts.main')

@section('pageTitle', 'Projects / ')

@section('content')
<div>
    @foreach($projects as $project)
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <p>{{ $project->tools }}</p>
        <a href="/projects/{{ $project->slug }}">View project</a>
    @endforeach
</div>
@endsection