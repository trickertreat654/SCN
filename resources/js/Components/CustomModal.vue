<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    align: {
        type: String,
        default: 'right',
    },
    width: {
        type: String,
        default: '48',
    },
    contentClasses: {
        type: String,
        default: 'py-1 bg-white',
    },
    title: {
        type: String,
        default: 'no title',
    },
    button: {
        type: String,
        default: 'no button',
    },

});

// define emits


let form = useForm({
    name: '',
    email: '',
    city: '',
    state: '',
    phone: '',
    comments: '',
    type_of_service: '',
    type_of_business: '',
})

let submit = () => {
    form.post('/ticket')
    emit('close')
}

//const childInput = ref('')

const emit = defineEmits(['close'], ['child-input'])

const emitInput = () => {
    emit('child-input', form.name)
}

</script>


<template>

<div class="absolute top-0 right-0 z-20 w-screen h-screen bg-black opacity-30">
</div>

<div class="absolute top-0 right-0 z-20 flex flex-col items-center justify-center w-screen h-screen bg-transparent">

    <div class="px-6 pt-4 pb-8 mx-12 bg-white border border-blue-500 border-solid xl:w-1/3 lg:w-1/2 border-t-transparent border-x-transparent rounded-t-xl w-96">
        <button @click="emit('close')" class="top-0 w-full text-xl text-end">X</button>    
        <h1 class="text-3xl">Start a Conversation with Our Expert</h1>

        </div>
    <div class="flex flex-col px-6 py-8 mx-12 overflow-y-scroll bg-white w-96 xl:w-1/3 lg:w-1/2 lg:h-1/2 h-3/4">

       

    <div class="rounded-2xl">
        
        
        <form @submit.prevent="form.post('/ticket')" class="mb-0 space-y-6 rounded-2xl" action="">
            
            <div >
                <label for="name" class="block" >
                    Name
                </label>
                <div class="mt-1">

                    <input type="text" name="name" @input="emitInput" id="name" v-model="form.name"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    Email
                </label>
                <div class="mt-1">

                    <input type="email" name="email" id="email" @input="emitInput" v-model="form.email"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    City
                </label>
                <div class="mt-1">

                    <input type="text" name="city" id="city" v-model="form.city"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    State
                </label>
                <div class="mt-1">

                    <input type="text" name="state" id="state" v-model="form.state"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    Phone
                </label>
                <div class="mt-1">

                    <input type="text" name="phone" id="phone" v-model="form.phone"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    Type of Service
                </label>
                <div class="mt-1">

                    <select type="select" name="typeOfService" id="type_of_service" v-model="form.type_of_service"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    </select>
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    Type of Business
                </label>
                <div class="mt-1">

                    <select type="select" name="typeOfBusiness" id="type_of_business" v-model="form.type_of_business"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    <option value="1">Option 1</option>
                    </select>
                </div>
            </div>
            <div >
                <label for="name" class="block" >
                    Additional Information
                </label>
                <div class="mt-1">

                    <textarea  name="comments" id="comments" v-model="form.comments"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    />
                </div>
                <div v-if="form.errors.comments">{{ form.errors.comments }}</div>
            </div>

            <button type="submit" :disabled="form.processing"  class="p-3 m-6 bg-blue-400 rounded-lg disabled:opacity-25" >Submit</button>
        </form>
    </div>
    </div>

<div class="px-6 py-4 mx-12 bg-white rounded-t-none rounded-xl xl:w-1/3 lg:w-1/2 w-96"></div>

    <!-- <div class="flex flex-col bg-white w-80 h-96">




        <h1>{{title}}</h1>
        <button @click="$emit('close')">{{button}}</button>
        <input type="text" v-model="childInput" @input="emitInput">
    </div> -->
</div>
    
</template>