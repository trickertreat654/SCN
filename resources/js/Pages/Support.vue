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


<div class="grid h-auto grid-cols-2 sm:grid-cols-3 ">
  <img class="w-full h-full overflow-hidden" src="../Components/residential.gif" alt="">
  <img class="w-full h-full overflow-hidden" src="../Components/industrial.gif" alt="">
  <img class="w-full h-full overflow-hidden" src="../Components/commercial.gif" alt="">
  
</div>

</template>