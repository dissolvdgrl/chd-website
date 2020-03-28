<template>
    <div role="tabpanel" v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: {
            title: {},
            image: {},
            active: { type: Boolean, default: false }
        },

        data() {
            return {
                isActive: this.active
            }
        }
    }
</script>