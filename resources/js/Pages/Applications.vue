<script>
import Layout from "../Layouts/CustomLayout.vue"

export default {
  layout: Layout
}

</script>


<script setup >
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3';
import { useMouse} from '@vueuse/core'
import logo from '../Components/intro2.gif'



const {x, y} = useMouse()

</script>

<template>
<div class="">
<div class="md:hidden">
<div class="">
  <h1 class="mt-8 text-5xl text-center text-blue-500" >Applications</h1>
</div> 

<div class="flex flex-wrap justify-center gap-4 mt-16 sm:gap-x-8 ">
 <div class="relative w-2/5">

    <div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>
    
    <div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md h-80 sm:h-72 ">
    
      <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
</svg>
</div>
    <div class="flex flex-col items-center ">
      <h1 class="py-4 text-2xl text-center whitespace-nowrap">Industrial</h1>
      <p>Manufacturing, Distribution, Hospitals, Airports, Country & State Emergency Response and much more... </p>
    </div>
    
  </div>
</div>
<div class="relative w-2/5">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md h-80 sm:h-72 ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
</svg>

</div>
<div class="flex flex-col items-center ">
  <h1 class="py-4 text-2xl text-center whitespace-nowrap">Commercial</h1>
  <p>
    Restraunts, Doctors, Dentists, Housing Complexes, Computer Services, Lawyer Offices and Goods or Service Based Industies. 
  </p>
</div>
</div>
</div>
<div class="relative w-2/5 my-4">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md h-80 sm:h-72 ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
</svg>


</div>
<div class="flex flex-col items-center ">
  <h1 class="py-4 text-2xl text-center whitespace-nowrap">Residential</h1>
 <p>Homes, Duplexes, Condos, Rentals, Cacation Homes and more...</p>
</div>
</div>
</div>



</div>
</div>

<div class="hidden h-auto grid-cols-2 md:grid sm:grid-cols-3 ">
  
  <div class="relative group ">
  <img src="../Components/residential.gif" alt="Your image" class="object-cover w-full h-full overflow-hidden ring ring-black">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white transition-opacity duration-500 opacity-0 ring ring-black group-hover:opacity-100">
    <h1 class="py-4 text-2xl text-center">Industrial</h1>
      <p class="mx-4" >Manufacturing, Distribution, Hospitals, Airports, Country & State Emergency Response and much more... </p>
  </div>
  
</div>
<div class="relative group ">
  <img src="../Components/industrial.gif" alt="Your image" class="object-cover w-full h-full overflow-hidden ring ring-black">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white transition-opacity duration-500 opacity-0 ring ring-black group-hover:opacity-100">
    <h1 class="py-4 text-2xl text-center whitespace-nowrap">Commercial</h1>
  <p class="mx-4">
    Restraunts, Doctors, Dentists, Housing Complexes, Computer Services, Lawyer Offices and Goods or Service Based Industies. 
  </p>
  </div>
  
</div>
<div class="relative group ">
  <img src="../Components/commercial.gif" alt="Your image" class="object-cover w-full h-full overflow-hidden ring ring-black">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white transition-opacity duration-500 opacity-0 ring ring-black group-hover:opacity-100">
    <h1 class="py-4 text-2xl text-center whitespace-nowrap">Residential</h1>
 <p class="mx-4">Homes, Duplexes, Condos, Rentals, Cacation Homes and more...</p>
  </div>
  
</div>

</div>
</div>
</template>