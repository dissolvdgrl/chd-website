@extends('layouts.main')

@section('pageTitle', 'Projects / ')

@section('content')
<div>
    @foreach($projects as $project)
        <h1>{{ $project->title }}</h1>
        <img src="storage/{{ $project->image }}" >
    @endforeach
</div>
@endsection