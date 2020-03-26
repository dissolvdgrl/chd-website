@extends('layouts.main')

@section('pageTitle', $project->title . ' / ')

@section('content')
    <div>
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <p>{{ $project->tools }}</p>
    </div>
@endsection