<script setup>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    label: String,
    href: String,
    iconName: String,
})

const isRoutCurrent = () => {
    return window.location.href === props.href;
}
import 'primeicons/primeicons.css';
</script>
<template>
    <Link :href="href"
          class="flex items-center px-4 py-3 rounded-lg transition duration-200 ease-in-out hover:bg-gray-100 dark:hover:bg-gray-700 group"
          :class="isRoutCurrent() ? 'bg-gray-100' : ''"
    >
        <div class="flex-shrink-0">
            <font-awesome-icon :icon="iconName"/>
        </div>
        <div class="ml-3">
        <span
            class="text-sm font-medium text-gray-900 transition duration-200 ease-in-out group-hover:text-gray-700 dark:text-gray-200 dark:group-hover:text-white"
        >
            {{ label }}
        </span>
        </div>
    </Link>
</template>
