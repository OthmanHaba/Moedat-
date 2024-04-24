<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import BroadCamp from "@/Components/BroadCamp.vue";
import InfoCard from "@/Components/InfoCard.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import {ref} from "vue";
import TableHead from "@/Components/TableComponent/TableHead.vue";
import TableCell from "@/Components/TableComponent/TableCell.vue";
import TableHeadCell from "@/Components/TableComponent/TableHeadCell.vue";
import TableRow from "@/Components/TableComponent/TableRow.vue";
import {Link} from "@inertiajs/vue3";
import TableComponent from "@/Components/TableComponent.vue";

const props = defineProps({
    drivers: {
        type: Array,
        required: true,
        default: () => []
    }
})

const drivers = ref(props.drivers);
</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'driver'},
                {text:'Drivers' , link :'/drivers'},
            ]"/>
        </template>
        <div class="flex flex-col w-full lg:flex-row">
            <div class="grid grid-cols-2 gap-6 lg:w-3/4">
                <info-card title="Available Drivers" count="4"/>
                <info-card title="Unavailable Drivers" count="3"/>
            </div>
            <div class="flex justify-end items-center w-1/4 lg:w-1/4">
                <Link :href="route('drivers.create')" type="button"
                      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none">
                    Add New Driver
                </Link>
            </div>
        </div>

        <div class="mt-10">
            <div class="overflow-x-auto rounded-lg shadow-md">
                <TableComponent class="w-full text-sm  text-gray-500 dark:text-gray-400">
                    <TableHead :classes="'bg-gray-300'">
                        <tr>
                            <TableHeadCell>
                                Driver Name
                            </TableHeadCell>
                            <TableHeadCell>
                                Driver Age
                            </TableHeadCell>
                            <TableHeadCell>
                                Driver Phone Number
                            </TableHeadCell>
                            <TableHeadCell>
                                salary pre hour
                            </TableHeadCell>
                            <TableHeadCell>
                                salary pre day
                            </TableHeadCell>
                            <TableHeadCell>
                                salary pre month
                            </TableHeadCell>
                            <TableHeadCell>
                                Actions
                            </TableHeadCell>
                        </tr>
                    </TableHead>
                    <tbody>
                    <TableRow v-for="driver in drivers" :key="driver.id">
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 hover:underline">
                                {{ driver.name }}</p>
                        </TableCell>
                        <TableCell>
                            <p class="font-medium text-black dark:text-blue-500 hover:underline">
                                {{ driver.age }}</p>
                        </TableCell>
                        <TableCell>
                            <p class="font-medium text-black dark:text-white hover:underline">
                                {{ driver.phone }}</p>
                        </TableCell>
                        <TableCell>
                            <p class="font-medium text-black dark:text-white hover:underline">
                                {{ driver.hourly_rating }}</p>
                        </TableCell>
                        <TableCell>
                            <p class="font-medium text-black dark:text-white hover:underline">
                                {{ driver.daily_rating }}</p>
                        </TableCell>
                        <TableCell>
                            <p class="font-medium text-black dark:text-white hover:underline">
                                {{ driver.monthly_rating }}</p>
                        </TableCell>
                        <TableCell>
                            <div class="flex gap-2 items-center justify-center">
                                <Link :href="route('drivers.edit',driver.id)">
                                    <div class="text-blue-400 hover:text-blue-600">
                                        <font-awesome-icon :icon="['fas', 'pen-to-square']"/>
                                    </div>
                                </Link>
                                <Link href="#" class="font-medium text-blue-300 dark:text-blue-600  hover:text-red-900">
                                    <div class="text-red-500 hover:text-red-950">
                                        <font-awesome-icon icon="trash"/>
                                    </div>
                                </Link>
                            </div>
                        </TableCell>
                    </TableRow>
                    </tbody>
                </TableComponent>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
