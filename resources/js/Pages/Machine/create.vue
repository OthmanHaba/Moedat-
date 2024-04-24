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
    formData.post(route('drivers.store'))
}
</script>

<template>
    <AppLayout>
        <template #header>
            <broad-camp :headers="[
                {text:'driver'},
                {text:'Drivers' , link :'/drivers'},
                {text:'Add new Driver' , link :'/drivers/create'},
            ]"></broad-camp>
        </template>
        <form @submit.prevent="handleSubmit">
            <FormArea :form-title="'Driver information'">
                <FormGroup :input-type="'text'" v-model="formData.name" :label="'name'" :errors="formData.errors.name"/>
                <FormGroup :input-type="'number'" v-model="formData.age" :label="'age'" :errors="formData.errors.age"/>
                <FormGroup :input-type="'text'" v-model="formData.phone" :label="'phone'"
                           :errors="formData.errors.phone"/>
                <FormGroup :input-type="'number'" v-model="formData.hourly_rating" :label="'Hourly rating'"
                           :errors="formData.errors.hourly_rating"/>
                <FormGroup :input-type="'number'" v-model="formData.daily_rating" :label="'Daily rating'"
                           :errors="formData.errors.daily_rating"/>
                <FormGroup :input-type="'number'" v-model="formData.monthly_rating" :label="'Monthly rating'"
                           :errors="formData.errors.monthly_rating"/>
                <form-submit-button :label="'save'"/>
            </FormArea>
        </form>

    </AppLayout>
</template>

<style scoped>

</style>
