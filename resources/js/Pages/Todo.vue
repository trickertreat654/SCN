<script setup>
import { ref } from 'vue';

const isOpen = ref(false);

function change(){
    isOpen.value = !isOpen.value;
} 
</script>

<template>

<div class="relative bg-green-500">
    <button class="bg-blue-500 " @click="change">
    click me
    </button>

   <teleport to="body">

       <div v-if="isOpen" class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-slate-400">
        
        <div  class="p-8 bg-red-500 ">
        <h1>big dick</h1>
        <button @click="change" class="bg-green-500 ">cuck me</button>
        </div>
</div>
</teleport> 


</div>



</template>