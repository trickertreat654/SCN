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


<div class="grid grid-cols-3 gap-4 ">
  <img src="../Components/residential.gif" alt="">
  <img src="../Components/industrial.gif" alt="">
  <img src="../Components/commercial.gif" alt="">
  
</div>

</template>