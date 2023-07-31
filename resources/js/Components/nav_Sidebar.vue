<script setup>
import { onMounted, ref } from 'vue'
import { Link } from '@inertiajs/vue3';

const emit = defineEmits(['open'])

const props = defineProps({
    openSideBar: Boolean,
})
</script>

<template>

    <div v-if="openSideBar" class="fixed top-0 z-20 w-screen h-screen bg-gray-800 md:hidden bg-opacity-60">
        
</div>

<Transition name="side-bar">


  <div ref="sideBar" v-if="openSideBar"
    class="fixed top-0 z-20 flex flex-col h-screen text-2xl bg-black bg-opacity-100 lg:hidden w-fit text-gray-50">

    <Link href="/home" :class="$page.component == 'Home' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Home</Link>
    <Link href="/company" :class="$page.component == 'Company' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Company</Link>

    
    
    <Link href="/services" :class="$page.component == 'Services' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Services</Link>
 

    <Link href="/applications" :class="$page.component == 'Applications' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Applications</Link>
    <!-- <Link href="/band" :class="$page.component == 'band' ? 'text-gradient-asight-unseen border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Band</Link> -->
    <Link href="/HS" :class="$page.component == 'HS' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Homeland Security</Link>
    <button  @click="emit('open')" :class="$page.component == 'Support' ? 'text-blue-500  border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Support</button>
    <!-- <Link href="/unseennation"  :class="$page.component == 'unseennation' ? 'text-gradient-asight-unseen border-b-2 py-1 pl-3' : 'hover:text-gradient-asight-unseen border-b-2 py-1 pl-3' ">Unseen Nation</Link> -->


    
    <div class="mt-auto mb-4 mx-14">
        <button
        class="inline-flex items-center p-2 space-x-2 font-semibold text-white bg-transparent lg:text-black hover:text-gradient-asight-unseen rounded-3xl">
        <svg class="w-5 h-5 fill-current hover:text-gradient-asight-unseen" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
          d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg>
      </button>

      <button
        class="inline-flex items-center p-2 space-x-2 font-semibold text-white bg-transparent rounded lg:text-black">
        <svg class="w-5 h-5 fill-current hover:text-gradient-asight-unseen" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24">
          <path
            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
        </svg>
    </button>
    

    
    
      <button
        class="inline-flex items-center p-2 space-x-2 font-semibold text-white bg-transparent rounded lg:text-black">
        <svg class="w-5 h-5 fill-current hover:text-gradient-asight-unseen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
          <path
            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
        </svg>
      </button>
      
      <button
      class="inline-flex items-center p-2 space-x-2 font-semibold text-white bg-transparent rounded lg:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
        role="img" class="w-5 hover:text-gradient-asight-unseen" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
          <g fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"
              fill="currentColor" />
          </g>
        </svg>
    </button>

</div>



</div>
</Transition>


    </template>



<style>
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