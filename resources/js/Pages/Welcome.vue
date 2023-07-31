
<script lang="ts">
import Layout from "../Layouts/CustomLayout.vue"

export default {
  
}

</script>

<script setup lang="ts">
import { computed, ref } from 'vue'
import { Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import { useMouse, useWindowSize} from '@vueuse/core'
import logo from '../Components/intro2.gif'

const {width, height} = useWindowSize()


const dx = computed(() => Math.abs(x.value - width.value/2))
const dy = computed(() => Math.abs(y.value - height.value/2))

const distance = computed(() => Math.sqrt(dx.value * dx.value + dy.value * dy.value))

const size = computed(() => Math.max(300 - distance.value/3, 150) )

const {x, y} = useMouse()

const opacity = computed(() => Math.min(Math.max(size.value/300, 0.7), 1))

const logoref = ref<HTMLElement>()

const logoGradient = computed(() => {
    let rect = logoref.value?.getBoundingClientRect()
    const xPos = x.value - (rect?.left ?? 0)
    const yPos = y.value - (rect?.top ?? 0)
    
    return `radial-gradient(circle at ${xPos}px ${yPos}px,
    black 30%, transparent 100%)`
  }
)

</script>




<template layout="guestlayout">

<div class="w-screen h-screen bg-gradient-to-b from-black to-blue-500 from-80%
 flex items-center justify-center relative overflow-hidden">
    
<div class="absolute z-10 hidden -translate-x-1/2 -translate-y-1/2 rounded-full pointer-events-none bg-yellow-500/50 lg:block blur-3xl"
:style="{
  opacity,
    left: `${x}px`,
    top: `${y}px`,
    width: `${size}px`,
    height: `${size}px`,
    
}"/>

<div ref="logoref"
:style="{maskImage: logoGradient}"
>
  

<Transition name="side-bar" mode="out-in">
<Link

href="/home"
    v-motion
    :initial="{
    scale: 10,
    opacity: 0
  }"
  :enter="{
    scale: 1,
    opacity: 1,
  }"
  
  
  
  >

  <img src="../Components/intro2.gif" alt="">
  
</Link>
</Transition>


</div>

</div>


</template>

<style>

.fade-enter-from, .fade-leave-from {
  transition: opacity 0;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
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