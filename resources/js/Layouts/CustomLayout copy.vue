<script setup>
import { Link } from '@inertiajs/vue3';
import { useMouse} from '@vueuse/core'
import logo from '../Components/intro2.gif'
import NavButton from '../Components/NavButton.vue'

</script>

<template>

<div class="absolute z-10 flex items-center justify-center w-screen h-screen pointer-events-none">

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
<div class="w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%
 flex flex-col items-center justify-start relative overflow-hidden">
    


<div class="relative flex justify-center w-screen h-screen text-white"
v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="800"
    >
    <div class="flex flex-col w-screen mt-10 bg-gray-200 border rounded-lg h-3/5 ring-8 ring-blue-500/30 lg:w-3/4">
    <!-- Top section -->
    <div class="py-4 text-center bg-gray-400">
      <h1 class="text-xl font-bold text-white">Your Company Name</h1>
    </div>

    <!-- Middle section -->
    <div class="flex flex-row items-center justify-center flex-grow h-1/2">
      <!-- Sidebar -->
      <div class="w-64 h-full bg-gray-300">
        <nav>
          <ul class="p-4 space-y-4">
            <NavButton :href="route('keypad')" :active="$page.component == 'KeyPad'" >Home</NavButton>
            <NavButton :href="route('tester')" :active="$page.component == 'Tester'" >Test</NavButton>
             <!-- Add more links as needed -->
          </ul>
        </nav>
      </div>

      <!-- Screen -->
      <div class="w-full h-full max-w-2xl mx-4 bg-white">
        <!-- Put your content here -->
        <Transition name="bob" mode="out-in">
          <slot/>

        </Transition>
      </div>

      <!-- Empty space to mimic a handheld device -->
      <div class="w-64 bg-gray-400"></div>
    </div>

    <!-- Bottom section -->
    <div class="py-4 bg-gray-400">
      <!-- Any content you want at the bottom -->
    </div>
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