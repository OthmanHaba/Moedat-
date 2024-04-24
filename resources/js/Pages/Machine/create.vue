<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import BroadCamp from "@/Components/BroadCamp.vue";
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";
import FormArea from "@/Components/Form/FormArea.vue";
import FormGroup from "@/Components/Form/FormGroup.vue";
import FormSubmitButton from "@/Components/Form/FormSubmitButton.vue";


const formData = useForm({
    name: '',
    category: '',
    rental_price: 0,
    location: '',
    condition: '',
    purchase_date: '',
    image: null,
})
const handleSubmit = () => {
    formData.post(route('machines.store'))
}
</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'machines'},
                {text:'machines' , link :'/machines'},
                {text:'Add new Machine' , link :'/machines/create'},
            ]"></broad-camp>
        </template>
        <form @submit.prevent="handleSubmit">
            <FormArea :form-title="'Driver information'">
                <FormGroup :input-type="'text'" v-model="formData.name" :label="'name'" :errors="formData.errors.name"/>
                <FormGroup :input-type="'text'" v-model="formData.category" :label="'category'"
                           :errors="formData.errors.category"/>
                <FormGroup :input-type="'number'" v-model="formData.rental_price" :label="'rental_price'"
                           :errors="formData.errors.rental_price"/>
                <FormGroup :input-type="'text'" v-model="formData.location" :label="'location'"
                           :errors="formData.errors.location"/>
                <FormGroup :input-type="'text'" v-model="formData.condition" :label="'condition'"
                           :errors="formData.errors.condition"/>
                <FormGroup :input-type="'date'" v-model="formData.purchase_date" :label="'purchase_date'"
                           :errors="formData.errors.purchase_date"/>

                <div class="flex items-center justify-center w-full mt-8">
                    <label for="dropzone-file"
                           class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class=""
                               @input="formData.image = $event.target.files[0]"/>
                    </label>
                </div>

                <progress v-if="formData.progress" class="bg-white text-black" :value="formData.progress.percentage"
                          max="100">
                    {{ formData.progress.percentage }}%
                </progress>

                <form-submit-button :label="'save'"/>
            </FormArea>
        </form>

    </AppLayout>
</template>

<style scoped>

</style>
