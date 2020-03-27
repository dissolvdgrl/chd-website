@extends('layouts.main')

@section('pageTitle', 'Projects / ')

@section('content')
<section class="header">
    <div>
    <p class="header-small">Portfolio</p>
    <h1 class="main-heading">Projects I've<br>worked on</h1>
    </div>
    <div class="header-links">
        <span id="show-modal" @click="showModal = true" class="button">I need a website too!</span>
    </div>
</section>

<section id="filmstrip">
    <div class="project-thumbnail black">
        asd
    </div>
    <div class="project-thumbnail black">
        asd
    </div>
    <div class="project-thumbnail black">
        asd
    </div>
    <div class="project-thumbnail black">
        asd
    </div>
</section>

<section id="project-container">
    @foreach($projects as $project)
        <div class="active-project">
            <div class="project-info">
                <h1>{{ $project->title }}</h1>
                <p>{{ $project->tools }}</p>
                <p>{{ $project->description }}</p>
                <a href="{{ $project->url }}" target="_blank" class="button">Visit site</a>
            </div>
        <img src="/storage/{{ $project->image }} " alt="An image displaying {{ $project->title }}">
        </div>
    @endforeach
</section>
@endsection