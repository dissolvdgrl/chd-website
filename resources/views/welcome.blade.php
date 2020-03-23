@extends('layouts.main')

@section('pageTitle', 'Welcome to ')

@section('content')
    <section class="header">
        <div>
        <p class="header-small">Hey, I'm Christie and I make</p>
        <h1 class="main-heading">websites for <br>small businesses <br>and individuals</h1>
        </div>
        <div class="header-links">
            <a href="#" class="button">I need a website!</a>
            <a href="/work" class="link">or check out my work</a>
        </div>
    </section>

    <section class="service-intro">
        <div class="left">
            <h1 class="body-heading">I'll help you with:</h1>
            <ul class="checklist">
                <li>Complete brand design & development</li>
                <li>Website design & development</li>
                <li>Upgrading or redesign of your current site</li>
                <li>Search engine optimisation</li>
                <li>Technical consultations & migrations</li>
                <li>Content Management Systems</li>
            </ul>
            <a href="#" class="button">Yes, I need this!</a>
            <p class="subtext">Or at least one of these checkmarks :)</p>
        </div>
        <div class="right">
            <featured-project></featured-project>
        </div>
    </section>

    <section class="about">
        <h1 class="body-heading">About</h1>
        <p>I am a South African web developer and designer currently working at a psychometrics company in Johannesburg and studying towards a Bachelor of Science in Computing degree.</p>
        <p>I love being able to simultaneously apply what I learn during work hours!</p>
        <p>My main goal while roaming the planet is to learn and grow as an individual and due to tech's ever-changing scenery, I can achieve that. I am an <a href="https://www.mbtionline.com/en-US/MBTI-Types/INTJ" target="_blank" class="link">INTJ</a>, which means that I'm curious, creative and always finding ways to optimise and improve.</p>
        <p>Please get in touch with me if you'd like to work with me or just say hi :)</p>
        <a href="#" class="button chat">c@chilldsgn.com</a>
    </section>
@endsection