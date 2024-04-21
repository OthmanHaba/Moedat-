<script setup>
import {ref} from 'vue';
import {Head, Link, router} from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import {items} from '@/store/sidebar.js'
import SideBarButton from "@/Components/SideBarButton.vue";


defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);


const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title"/>

        <Banner/>

        <div class="min-h-screen bg-gray-100">


            <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
                    aria-controls="separator-sidebar" type="button"
                    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                          d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>

            <aside id="separator-sidebar"
                   class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            >
                <div class="px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    logo
                </div>
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="flex flex-col  font-medium">
                        <li class="mb-4" v-for="(item,index) in items" :key="index">
                            <SideBarButton :label="item.label" :href="item.href" :icon-name="item.iconName"/>
                        </li>
                    </ul>
                </div>
            </aside>


            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-4 sm:ml-64">
                <main>
                    <slot/>
                </main>
            </div>

        </div>
    </div>
</template>
