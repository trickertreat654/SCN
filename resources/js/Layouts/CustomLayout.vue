<script setup>
import { Link } from '@inertiajs/vue3';
import { useMouse} from '@vueuse/core'
import logo from '../Components/intro2.gif'
import NavButton from '../Components/NavButton.vue'
import {ref} from 'vue'
import { onClickOutside } from '@vueuse/core';
import { onMounted } from 'vue'
import sideBarComp from '../Components/nav_Sidebar.vue';
import Modal from '../Components/CustomModal.vue'


const scrolledNav = ref(false)
const sideBarOpen = ref(false)
const sideBar = ref(null)
// const cartCount =  computed(() => usePage().props.value.cartCount)
const openSideBar = ref(false)
const isOpen = ref(false)

function toggleModal() {
  shown.value = !shown.value;
}

function toggleSideBar() {
  sideBarOpen.value = !sideBarOpen.value;
}



onClickOutside(sideBar, () => (sideBarOpen.value = false))



const parentInput = ref('');
const updateParentInput = (value) => {
  parentInput.value = value;
};


</script>

<template>

<div class="fixed top-0 right-0 z-10 flex justify-end text-red-500 bg-transparent lg:hidden Linktext-7x/usersl">
   
   <button :disabled="!sideBar" @click="toggleSideBar" ref="sideBar"
     :class="!sideBarOpen ? 'px-1 py-1.5 mt-4 mr-8 bg-gray-100' : 'px-1 rounded-md border-green-600 border py-1.5 mt-4 mr-8 bg-gray-100' ">
     <div class="space-y-1">
       <div :class="!sideBarOpen ? 'w-8 h-1 bg-gray-600' : 'w-8 h-1 bg-gray-100 '"></div>
       <div class="w-8 h-1 bg-gray-600"></div>
       <div :class="!sideBarOpen ? 'w-8 h-1 bg-gray-600' : 'w-8 h-1 bg-gray-100 '"></div>
     </div>
   </button>
 </div>




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
 <div class=" md:flex items-start overflow-hidden justify-center w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%">
  <!-- w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%
 flex flex-col items-center justify-start relative overflow-hidden -->
  

 <div class="flex items-center justify-start w-full h-16 bg-gray-400 md:hidden">
  <h1 class="ml-4 text-5xl font-bold text-blue-500">SCN</h1>
 

</div>
<div class="block md:hidden"
v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="800">

  <Transition name="bob" mode="out-in">
          <slot></slot>

        </Transition>
</div>
 
<div class="relative items-center hidden w-full md:flex">
<div class="absolute m-10 bg-blue-500 rounded-lg xl:my-8 -inset-3 blur-xl "
v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="1000"
></div>
 
   <div class="flex flex-col w-full bg-gray-300 lg:m-10 xl:my-8 rounded-xl "
   v-motion
:initial="{ opacity: 0, y: 0, scale: 1}"
  :enter="{ opacity: 1, y: 0, scale: 1, }"
  :leave="{ opacity: 0, y: 100, }"
  
  :delay="800">
   
     <div class="flex flex-row items-center justify-center w-full h-24 my-6 space-x-6 bg-gray-300 ">
      <div class="">
        <p class="font-bold text-blue-500 text-8xl">SCN</p>
      </div>
      <div class="flex flex-col font-bold">
        <p class="text-2xl">SECURITY COMMUNICATION</p>
        <p class="text-5xl">NETWORK INC</p>
      </div>  
    </div>
     <div class="flex flex-row w-full h-auto bg-gray-300">
       <div class="hidden w-1/5 h-full bg-gray-300 lg:block">
        <nav>
          <ul class="p-4 space-y-4">
            <NavButton :href="route('Home')" :active="$page.component == 'Home'" >Home</NavButton>
            <NavButton :href="route('Company')" :active="$page.component == 'Company'" >Company</NavButton>
            <NavButton :href="route('Services')" :active="$page.component == 'Services'" >Services</NavButton>
            <NavButton :href="route('Applications')" :active="$page.component == 'Applications'" >Applications</NavButton>
            <NavButton :href="route('HS')" :active="$page.component == 'HS'" >Homeland Security</NavButton>
            <button @click="isOpen = true" class="block px-4 py-2 font-bold text-center text-white bg-blue-500 rounded-full hover:bg-blue-700" :active="$page.component == 'Support'" >Support</button>
             <!-- Add more links as needed -->
          </ul>
        </nav>
       </div>
       <div class="w-full h-full mx-8 bg-black rounded-lg lg:ml-0 xl:mx-0 xl:w-3/5 ring-black ring-8">
        <Transition name="bob" mode="out-in">
          <slot></slot>

        </Transition>
       </div>
       <div class="hidden w-1/5 h-full xl:block">
        <div class="mx-12 bg-transparent ">
<h1>

  {{ parentInput }}
</h1>
        </div>
       </div>
     </div>
     <div class="w-full h-24 mt-4 text-5xl text-center text-black bg-gray-300 rounded-xl lg:text-7xl text-bold">The Power to Know...</div>
   </div>
  </div>
   
  

</div> 

<Transition name="bob" >
  <div v-if="isOpen" class="block"
  
  >
  
  
  <!-- <teleport to="body"> -->
          
    <!-- <Modal @close="isOpen = false" @child-input="updateParentInput" title="does it work" /> -->
    <Modal @close="isOpen = false" @child-input="updateParentInput" title="does it work" />
    
  <!-- </teleport> -->
</div>
</Transition>   
 



<sideBarComp @open="isOpen = true" :openSideBar="sideBarOpen">

</sideBarComp>


</template>

<style scoped>


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