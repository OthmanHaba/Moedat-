<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import BroadCamp from "@/Components/BroadCamp.vue";
import {ref} from "vue";

const collapse = ref(false)
</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'contracts'},
            ]"/>
        </template>

        <div class="flex flex-col lg:flex-row items-center justify-between bg-white p-6 rounded-lg shadow-lg">
            <div class="mb-4 lg:mb-0">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md shadow-md transition duration-300 ease-in-out">
                    Add Contract
                </button>
            </div>
            <div class="flex flex-col lg:flex-row items-center text-gray-800 ">
                <div class="mb-4 lg:mb-0 lg:mr-8">
                    <div class="text-lg font-semibold mb-2">Contracts Overview</div>
                    <div class="flex flex-col space-y-2">
                        <div class="flex items-center">
                            <span class="text-green-500">Active Contracts</span>
                            <span class="text-sm text-gray-600 ml-2">(10)</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-red-500">Expired Contracts</span>
                            <span class="text-sm text-gray-600 ml-2">(3)</span>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block w-px bg-gray-300 h-16 mx-4"></div>
            </div>
        </div>


        <div class="mt-3">
            <div class="collapse collapse-plus rounded-lg  bg-white mt-4">
                <input type="checkbox" class="bg-black h-full w-full"/>
                <div class="collapse-title text-xl flex justify-between font-medium ">
                    <div>
                        <div class="text-gray-600 font-semibold mb-1">Contract Code</div>
                        <div class="text-gray-800 font-bold text-lg mb-4">ABC123</div>
                        <div class="text-gray-600 font-semibold mb-1">Customer Name</div>
                        <div class="text-gray-800 font-bold text-lg mb-4">John Doe</div>
                    </div>
                    <div class=" rounded">
                        <p class="text-gray-900 font-semibold mb-1">click to see more info</p>
                    </div>
                </div>
                <div class="collapse-content">
                    <div class="md:flex-grow">
                        <div class="md:flex md:justify-between">
                            <div class="mb-4 md:mb-0">
                                <div class="text-gray-600 font-semibold mb-1">Services Included</div>
                                <ul class="list-disc list-inside text-gray-800">
                                    <li>Excavation</li>
                                    <li>Grading</li>
                                    <li>Demolition</li>
                                </ul>
                            </div>
                            <div class="mb-4 md:mb-0">
                                <div class="text-gray-600 font-semibold mb-1">Assigned Personnel</div>
                                <ul class="list-disc list-inside text-gray-800">
                                    <li>Bob Smith (Project Manager)</li>
                                    <li>Alice Johnson (Operator)</li>
                                    <li>Tom Wilson (Operator)</li>
                                </ul>
                            </div>
                            <div>
                                <div class="text-gray-600 font-semibold mb-1">Financial Details</div>
                                <div class="text-gray-800 font-bold">Total Amount:</div>
                                <div class="text-gray-800 mb-2">$50,000</div>
                                <div class="text-gray-800 font-bold">Paid Amount:</div>
                                <div class="text-gray-800 mb-2">$20,000</div>
                                <div class="text-gray-800 font-bold">Remaining Amount:</div>
                                <div class="text-gray-800 mb-2">$30,000</div>
                                <div class="text-gray-600 font-semibold mb-1">Payment Schedule</div>
                                <ul class="list-disc list-inside text-gray-800">
                                    <li>Deposit (20%): Paid on 03/15/2023</li>
                                    <li>Midway (30%): Due on 05/01/2023</li>
                                    <li>Completion (50%): Due on 06/15/2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </AppLayout>
</template>

<style scoped>

</style>
