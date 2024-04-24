<script setup>
const props = defineProps({
    label: String,
    inputType: String,
    errors: {
        type: Array,
        default: () => []
    },
})
const model = defineModel();
</script>

<template>
    <div class="p-1">
        <label for="name" class="block text-sm font-medium text-gray-700">{{ label }}</label>
        <input id="name" :type="inputType" name="name" v-model="model"
               class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
        <div v-if="errors.length" class="text-red-500 text-xs mt-1">
            <small>{{ errors }}</small>
        </div>
    </div>
</template>

<style scoped>

</style>
