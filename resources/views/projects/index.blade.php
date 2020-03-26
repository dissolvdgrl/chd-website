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
            <h1>{{ $project->title }}</h1>
            <p>{{ $project->description }}</p>
            <p>{{ $project->tools }}</p>
            <a href="/projects/{{ $project->slug }}">View project</a>
        </div>
    @endforeach
</section>
@endsection