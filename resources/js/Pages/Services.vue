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
  <h1 class="mt-8 text-5xl text-center text-blue-500" >Services</h1>
</div> 

<div class="flex flex-wrap justify-center gap-4 mt-16 sm:gap-x-8 ">
 <div class="relative w-2/5 ">

    <div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>
    
    <div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md ">
    
      <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
</svg>
</div>
    <div class="flex flex-col items-center ">
      <h1 class="py-4 text-lg text-center sm:text-xl whitespace-nowrap">Video Surveillance</h1>
      <ul class="list-disc ">
        <li>Vandal-Proof</li>
        <li>Pan, Tilt, Zoom</li>
        <li>IP Megapixel</li>
        <li>Traffic Solutions</li>
      </ul>
    </div>
    
  </div>
</div>
<div class="relative w-2/5">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
</svg>

</div>
<div class="flex flex-col items-center ">
  <h1 class="py-4 text-lg text-center whitespace-nowrap">Access Control</h1>
  <ul class="list-disc ">
    <li>Boimentric Scan</li>
    <li>Card Readers</li>
    <li>Wireless Key Fob</li>
    <li>Iris Scanning</li>
  </ul>
</div>
</div>
</div>
<div class="relative w-2/5 my-4">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
</svg>


</div>
<div class="flex flex-col items-center ">
  <h1 class="py-4 text-lg text-center sm:text-xl whitespace-nowrap">Central Station</h1>
  <ul class="list-disc ">
    <li>Alarm & Burglary</li>
    <li>Immediate Dispatch</li>
    <li>Fire Monitoring</li>
    <li>Video Verification</li>
  </ul>
</div>
</div>
</div>
<div class="relative w-2/5 my-4">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
</svg>

</div>
<div class="flex flex-col items-center ">
  <h1 class="py-4 text-lg text-center sm:text-xl whitespace-nowrap">Fire Alarm</h1>
  <ul class="list-disc ">
    <li>Panic Alarm</li>
    <li>Evacuation Planning</li>
    <li>Sprinkler Monitoring</li>
    <li>And More!</li>
  </ul>
</div>
</div>
</div>
<div class="relative w-2/5 ">

<div class="absolute bg-blue-500 rounded-lg -inset-0 blur-xl "></div>

<div class="relative flex flex-col px-4 pt-4 pb-4 bg-gray-400 rounded-md ">

  <div class="mx-auto "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
</svg>

</div>
<div class="flex flex-col items-center">
  <h1 class="py-4 text-lg text-center sm:text-xl whitespace-nowrap">Burglary</h1>
  <ul class="list-disc ">
    <li>Loss Prevention</li>
    <li>Event Tracking</li>
    <li>Elder Watch</li>
    <li>CCTV</li>
  </ul>
</div>
</div>
</div>


</div>
</div>

<div class="hidden h-auto grid-cols-2 md:grid sm:grid-cols-5 ">
  <div class="relative group ">
  <img src="../Components/access-off.gif" alt="Your image" class="object-cover w-full h-full">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 opacity-0 group-hover:opacity-100">
    <p class="text-2xl text-center text-white">Access</p>
  </div>
</div> 
<div class="relative group ">
  <img src="../Components/burg-off.gif" alt="Your image" class="object-cover w-full h-full">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 opacity-0 group-hover:opacity-100">
    <p class="text-2xl text-center text-white">Burglary</p>
  </div>
</div>
<div class="relative group ">
  <img src="../Components/fire-off.gif" alt="Your image" class="object-cover w-full h-full">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 opacity-0 group-hover:opacity-100">
    <p class="text-2xl text-center text-white">Fire</p>
  </div>
</div>
<div class="relative group ">
  <img src="../Components/video-off.gif" alt="Your image" class="object-cover w-full h-full">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 opacity-0 group-hover:opacity-100">
    <p class="text-2xl text-center text-white">Video</p>
  </div>
</div>
<div class="relative group ">
  <img src="../Components/comm-off.gif" alt="Your image" class="object-cover w-full h-full">
  <div class="absolute inset-0 transition-opacity duration-500 bg-black opacity-0 group-hover:opacity-80"></div>
  <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-500 opacity-0 group-hover:opacity-100">
    <p class="text-2xl text-center text-white">Network</p>
  </div>
</div>

</div>
</div>
</template>