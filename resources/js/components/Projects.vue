<template>
    <div>
        <section id="filmstrip">
            <div class="project-thumbnail" 
                v-for="(project, index) in projects">
                <img :src="project.image" @click="activeProject = project" >
            </div>
        </section>
            <section id="project-container">
                <slot></slot>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                projects: [],
                activeProject: null
            };
        },

        mounted() {
            this.projects = this.$children;
            this.setInitialActiveProject();
        },

        watch: {
            activeProject(activeProject) {
                this.projects.map(project => (project.isActive = project == activeProject));
            }
        },

        methods: {
            setInitialActiveProject() {
                this.activeProject = this.projects.find(project => project.active) || this.projects[0];
            }
        }
    }
</script>