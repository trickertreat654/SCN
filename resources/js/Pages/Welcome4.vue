<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3';
import { useMouse } from '@vueuse/core'
import { useMotion } from '@vueuse/motion'
import logo from '../Components/intro2.gif'

const {x, y} = useMouse()

const linkControls = useMotion({
  x: 0,
  y: 0,
  scale: 1,
})

const moveLinkUp = (event) => {
  event.preventDefault()
  linkControls.start({
    y: -window.innerHeight,
    transition: { duration: 2 },
  }).then(() => {
    Inertia.visit(event.currentTarget.href)
  })
}
</script>

<template>
<div class="w-screen h-screen bg-gradient-to-b from-black to-green-500 from-80%
 flex items-center justify-center relative overflow-hidden">
    
<div class="absolute bg-green-500 rounded-full
-translate-x-1/2 -translate-y-1/2 pointer-events-none blur-3xl z-10"
:style="{
    left: `${x}px`,
    top: `${y}px`,
    width: '200px',
    height: '200px',
    
}"/>

<Link
  :href="route('keypad')"
  v-bind="linkControls"
  @click="moveLinkUp"
>
  <div
    v-motion
    :initial="{
    scale: 1,
  }"
  :enter="{
    scale: 1,
    transition: {
      delay: 1000,
    },
  }"
  :leave="{
    scale: 1,
    transition: {
      delay: 1000,
    },
  }"
  >
    <img src="../Components/intro2.gif" alt="">
  </div>
</Link>

</div>
</template>
