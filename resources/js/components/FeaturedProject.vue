<template>
    <div id="featured-project">
        <img src="" alt="project title thumbnail">
        <p class="featured-project-title">Project title</p>
        <p class="project-tools">['html5', 'scss', 'php', 'vuejs']</p>
        <a href="#" class="link">View project</a>
        <a href="/projects" class="button">Show me more projects</a>
    </div>
</template>

<script>
    export default {

    }
</script>

<style lang="scss">
    @import '../../sass/variables';
    #featured-project {
        display: flex;
        flex-direction: column;
        align-items: flex-end;

        img {
            width: 320px;
            height: 165px;
            background-color: black;
        }

        .button {
            margin-top: 1rem;
        }
    }

    .featured-project-title {
        font-family: $headings;
        font-size: 2rem;
        margin: 0;
    }
</style>