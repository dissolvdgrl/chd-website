<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle') chilldsgn.com / Websites for all kinds of people & small businesses</title>

        <!-- Fonts -->
        <link rel='stylesheet' href='//cdn.jsdelivr.net/npm/hack-font@3.3.0/build/web/hack-subset.css'>
        <link rel="stylesheet" href="https://use.typekit.net/yvx7xbn.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        <div id="app">
            <modal v-if="showModal" @close="showModal = false"></modal>
            <nav>
                <a href="/" class="logo-link"></a>
                <span class="long-line"></span>
                <a href="/articles" class="nav-link">Articles</a>
                <a href="/projects" class="nav-link">Projects</a>
                <span class="nav-link" @click="showModal = true">Contact</span>
                <span class="short-line"></span>
                <a href="https://www.linkedin.com/in/christie-hill/" class="nav-icon" target="_blank">
                    <img src="{{ asset('storage/images/linkedin-icon.svg') }}" alt="LinkedIn icon">
                </a>
                <a href="https://www.instagram.com/chilldsgn_dev/" class="nav-icon" target="_blank">
                    <img src="{{ asset('storage/images/instagram-icon.svg') }}" alt="Instagram icon">
                </a>
                <a href="https://github.com/dissolvdgrl" class="nav-icon" target="_blank">
                    <img src="{{ asset('storage/images/github-icon.svg') }}" alt="Github icon">
                </a>            
            </nav>
            <div id="main-content">
                <div id="top-thing">
                    <span @click="toggleDarkMode">dark mode</span>
                </div>
                @yield('content')
            </div>   

            <footer>
                <p>/end</p>
                <span class="horizontal-line"></span>
                <p class="colophon">Colophon</p>
                <p>Built using <a href="https://laravel.com/" class="link" target="_blank">Laravel</a>, <a href="https://vuejs.org/" class="link" target="_blank">Vuejs</a> and plenty of coffee. Running on Linode.</p>
                <p>I <span class="emphasis">do not track</span> your interactions with this website.</p>
            </footer>                 
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>