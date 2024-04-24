<script setup>
const props = defineProps({
    classes: {
        type: String,
        default: ''
    }

})
</script>

<template>
    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" :class="classes">
        <slot/>
    </tr>
</template>

<style scoped>

</style>
