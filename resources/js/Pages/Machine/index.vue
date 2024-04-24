<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/vue3";
import TableRow from "@/Components/TableComponent/TableRow.vue";
import TableHeadCell from "@/Components/TableComponent/TableHeadCell.vue";
import TableCell from "@/Components/TableComponent/TableCell.vue";
import BroadCamp from "@/Components/BroadCamp.vue";
import TableHead from "@/Components/TableComponent/TableHead.vue";
import InfoCard from "@/Components/InfoCard.vue";
import TableComponent from "@/Components/TableComponent.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";


const props = defineProps({
    machines: {
        type: Array,
        default: () => [],
    },

})


</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'machines'},
                {text:'All Machines' , link :'/machines'},
            ]"/>
        </template>
        <div class="flex flex-col w-full lg:flex-row">
            <div class="grid grid-cols-2 gap-6 lg:w-3/4">
                <info-card title="Available Machines" count="4"/>
                <info-card title="Unavailable Machines" count="3"/>
            </div>
            <div class="flex justify-end items-center w-1/4 lg:w-1/4">
                <Link :href="route('machines.create')" type="button"
                      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none">
                    Add New machine
                </Link>
            </div>
        </div>

        <div class="mt-10">
            <div class="overflow-x-auto rounded-lg shadow-md">
                <TableComponent class="w-full text-sm  text-gray-500 dark:text-gray-400">
                    <TableHead :classes="'bg-gray-300'">
                        <tr>
                            <TableHeadCell>
                                name
                            </TableHeadCell>
                            <TableHeadCell>
                                category
                            </TableHeadCell>
                            <TableHeadCell>
                                availability
                            </TableHeadCell>
                            <TableHeadCell>
                                rental_price
                            </TableHeadCell>
                            <TableHeadCell>
                                location
                            </TableHeadCell>
                            <TableHeadCell>
                                condition
                            </TableHeadCell>
                            <TableHeadCell>
                                purchase_date
                            </TableHeadCell>

                            <TableHeadCell>
                                image
                            </TableHeadCell>
                        </tr>
                    </TableHead>
                    <tbody>
                    <TableRow v-for="machine in props.machines" :key="machine.id">
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.name }}</p>
                        </TableCell>

                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.category }}</p>
                        </TableCell>
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.availability ? 'Avallable' : "Un Avallabel" }}</p>
                        </TableCell>
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.rental_price }}</p>
                        </TableCell>
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.location }}</p>
                        </TableCell>
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.condition }}</p>
                        </TableCell>
                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                {{ machine.purchase_date }}</p>
                        </TableCell>

                        <TableCell class="px-6 py-4 text-center">
                            <p class="font-medium text-black dark:text-blue-500 ">
                                <img class="h-16 w-16" :src="machine.image" alt="no"></p>
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
