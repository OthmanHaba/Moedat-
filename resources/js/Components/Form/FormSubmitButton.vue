<script setup>
const props = defineProps({
    label: String,
})
</script>

<template>
    <div class="flex w-full justify-center ">
        <button type="submit" class="bg-blue-500 w-1/3 text-[1.2rem] px-8 py-3 mt-3 rounded text-white">{{
                label
            }}
        </button>
    </div>
</template>

<style scoped>

</style>
