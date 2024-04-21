<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import BroadCamp from "@/Components/BroadCamp.vue";
import InfoCard from "@/Components/InfoCard.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'driver'},
                {text:'Drivers' , link :'/drivers'},
            ]"/>
        </template>
        <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:flex-row gap-6 max-w-screen-xl">

            <info-card :title="'available  Drivers'" :count="4"/>

            <info-card :title="'Total Unavailable:'" :count="3"/>
        </div>


        <div class="mt-10">
            <div class="overflow-x-auto rounded-lg shadow-md">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Driver Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Driver Age
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Driver Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            salary pre hour
                        </th>
                        <th scope="col" class="px-6 py-3">
                            salary pre day
                        </th>
                        <th scope="col" class="px-6 py-3">
                            salary pre month
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">othamn</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">12</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">12334</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">120$</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">420</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">1200</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex gap-2 items-center justify-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <font-awesome-icon icon="fa fa-edit"/>
                                </a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-500">
                                    <font-awesome-icon class=" hover:text-blue-500" icon="fa fa-delete"/>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
