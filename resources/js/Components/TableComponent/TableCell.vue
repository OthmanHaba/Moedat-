<script setup>
const props = defineProps({
    classes: {
        type: String,
        default: ''
    }

})

</script>

<template>
    <td class="px-6 py-4 text-center" :class="classes">
        <slot/>
    </td>
</template>

<style scoped>

</style>
