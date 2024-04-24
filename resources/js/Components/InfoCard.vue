<script setup>


const props = defineProps({
    title: String,
    count: Number,
})
</script>

<template>
    <div class="w-full bg-blue-100 rounded-lg shadow-lg p-6 relative">
        <div
            class="absolute top-0 left-0 w-full h-full bg-gray-100 rounded-lg opacity-50"></div>
        <h2 class="text-lg font-semibold text-black mb-4 relative z-10">{{ title }}</h2>
        <div class="flex items-center justify-between relative z-10">
            <div class="flex items-center">
                <svg class="h-6 w-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                </svg>
                <p class="text-sm text-gray-700">Total :</p>
            </div>
            <p class="text-xl font-semibold text-emerald-800">{{ count }}</p>
        </div>
    </div>
</template>

<style scoped>

</style>
