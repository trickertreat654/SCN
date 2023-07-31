<script setup>
import { Link } from '@inertiajs/vue3';
import { useMouse} from '@vueuse/core'
import logo from '../Components/intro2.gif'
import NavButton from '../Components/NavButton.vue'

</script>

<template>

<div
 
class="absolute z-10 flex items-center justify-center w-screen h-screen pointer-events-none">

<Link
:href="route('/')" >
<div class=""
v-motion
  :initial="{ opacity: 1, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 0, }"
  :leave="{ opacity: 0, y: 100, }"
  :variants="{ custom: { scale: 2 } }"
  :delay="300"
    
    >
<img src="../Components/intro2.gif" alt="">
</div>

</Link>
</div>     
 <div class="flex items-start overflow-hidden justify-center w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%">
  <!-- w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%
 flex flex-col items-center justify-start relative overflow-hidden -->
  

 
 
<div class="relative flex items-center w-full">
<div class="absolute m-24 bg-blue-500 rounded-lg -inset-3 blur-xl "
v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="1000"
></div>
 
   <div class="flex flex-col w-full m-24 bg-gray-300 rounded-xl "
   v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="800">
   
     <div class="flex flex-row items-center justify-center w-full h-24 my-6 space-x-6 bg-gray-300">
      <div class="">
        <p class="font-bold text-blue-500 text-8xl">SCN</p>
      </div>
      <div class="flex flex-col font-bold">
        <p class="text-2xl">SECURITY COMMUNICATION</p>
        <p class="text-5xl">NETWORK INC</p>
      </div>  
    </div>
     <div class="flex flex-row w-full h-auto bg-gray-300">
       <div class="w-1/5 h-full bg-gray-300">
        <nav>
          <ul class="p-4 space-y-4">
            <NavButton :href="route('Home')" :active="$page.component == 'Home'" >Home</NavButton>
            <NavButton :href="route('Company')" :active="$page.component == 'Company'" >Company</NavButton>
            <NavButton :href="route('Services')" :active="$page.component == 'Services'" >Services</NavButton>
            <NavButton :href="route('Applications')" :active="$page.component == 'Applications'" >Applications</NavButton>
            <NavButton :href="route('HS')" :active="$page.component == 'HS'" >Homeland Security</NavButton>
            <NavButton :href="route('Support')" :active="$page.component == 'Support'" >Support</NavButton>
             <!-- Add more links as needed -->
          </ul>
        </nav>
       </div>
       <div class="w-3/5 h-full bg-black rounded-lg ring-black ring-8">
        <Transition name="bob" mode="out-in">
          <slot/>

        </Transition>
       </div>
       <div class="w-1/5 h-full bg-slate-400"></div>
     </div>
     <div class="w-full h-24 mt-4 text-center text-black bg-gray-300 rounded-xl text-7xl text-bold">The Power to Know...</div>
   </div>
  </div>
   
  

</div> 





</template>

<style>


.bob-enter-active,
.bob-leave-active {
  transition: opacity 0.5s;
}

.bob-enter-from,
.bob-leave-to {
  opacity: 0;
}


.fade-enter-from, 
.fade-leave-to {
  transition: opacity 0;

}
.fade-enter-active, 
.fade-leave-active {
  transition: opacity 0.5s ease-out;

}

.side-bar-enter-active,
.side-bar-leave-active {
  transition: 0.1s ease all;
}

.side-bar-enter-from,
.side-bar-leave-to {
  transform: translateX(-250px);
}

.side-bar-enter-to {
  transform: translateX(0);
}


</style>