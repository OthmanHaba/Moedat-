<script setup>
const props = defineProps({
    classes: {
        type: String,
        default: ''
    }
})
</script>

<template>
    <table class="w-full text-sm  text-gray-500 dark:text-gray-400" :class="classes">
        <slot/>
    </table>
</template>

<style scoped>

</style>
