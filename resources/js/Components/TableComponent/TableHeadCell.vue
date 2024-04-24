<script setup>
const props = defineProps({
    classes: {
        type: String,
        default: ''
    }

})
</script>

<template>
    <th scope="col" class="px-6 py-3" :class="classes">
        <slot/>
    </th>
</template>

<style scoped>

</style>
