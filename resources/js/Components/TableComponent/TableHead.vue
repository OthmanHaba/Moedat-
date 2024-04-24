<script setup>
const props = defineProps({
    classes: {
        type: String,
        default: ''
    }
})
</script>

<template>
    <thead :class="classes"
           class="text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <slot/>
    </thead>
</template>

<style scoped>

</style>
