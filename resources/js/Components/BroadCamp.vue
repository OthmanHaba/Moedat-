<template>
    <div class="breadcrumb">
    <span v-for="(header, index) in headers" :key="index">
      <Link v-if="header.link" :href="header.link" class="breadcrumb-link">{{ header.text }}</Link>
      <span v-else class="breadcrumb-text">{{ header.text }}</span>
      <span v-if="index !== headers.length - 1" class="breadcrumb-separator">/</span>
    </span>
    </div>
</template>

<script setup>
import {defineProps, withDefaults} from 'vue'
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    headers: {
        type: Array,
        required: true,
    }
})
</script>

<style scoped>
.breadcrumb {
    @apply flex items-center;
}

.breadcrumb-link {
    @apply text-blue-500 hover:underline;
}

.breadcrumb-text {
    @apply text-gray-800;
}

.breadcrumb-separator {
    @apply mx-2 text-gray-400;
}
</style>
