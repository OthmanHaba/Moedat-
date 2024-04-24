<script setup>
const props = defineProps({
    formTitle: String,
    classes: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <div class="bg-white lg:w-2/3">
        <header>
            <div class="border-b border-stroke px-6 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">{{ formTitle }}</h3>
            </div>
        </header>
        <div class="px-6 pb-7 mt-3">
            <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" :class="classes">
                <slot/>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
