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
  <div class="h-screen md:hidden">
  <div class="absolute inset-0 grid grid-cols-3 p-5 pb-48 space-y-4 overflow-y-auto bg-black bg-opacity-25 ">
    <!-- Add as many paragraphs as you like -->
    <div class="col-span-3 mx-4 mb-6 text-white ">
      <h1 class="py-2 mb-6 text-4xl font-bold text-center border-4 border-gray-400 ">Homeland Security</h1>
      <p class="text-blue-500 text-bold">Homeland Security</p>
      <p>
        The Department of Homeland Security has a vital mission: to secure the nation from the many threats we face. Our duties are wide-ranging, but our goal is clear - keeping America safe.
        <br><br>
     </p>
     <p class="text-blue-500 text-bold">California Emergency Management Agency</p>
      <p>
        The California Emergency Management Agency exists to enhance safety and preparedness in California through strong leadership, collaboration, and meaningful partnerships. Our mission is founded in public service. Our goal is to protect lives and property by effectively preparing for, preventing, responding to, and recovering from all threats, crimes, hazards, and emergencies.

<br><br>
     </p>
     <p class="text-blue-500 text-bold">FEMA Preparing</p>
      <p>
        In 2004, The Department of Homeland Security (DHS) and The Federal Emergency Management Agency (FEMA) launched Ready Business, an extension of the Ready campaign that focuses on business preparedness. Ready Business helps owners and managers of small- to medium-sized businesses prepare their employees, operations and assets in the event of an emergency.
<br><br>
     </p>
      <!-- more text -->
    </div>
  </div>
</div>

<div class="relative hidden grid-cols-3 border-gray-400 md:grid">
  <!-- Images -->
  <img class="object-cover w-full h-full opacity-0" src="../Components/residential.gif" alt="">
  <img class="object-cover w-full h-full opacity-0" src="../Components/industrial.gif" alt="">
  <img class="object-cover w-full h-full opacity-0" src="../Components/commercial.gif" alt="">

  <!-- Text Container -->
  <div class="absolute inset-0 grid grid-cols-3 p-5 space-y-4 overflow-y-auto bg-black bg-opacity-25">
    <!-- Add as many paragraphs as you like -->
    <div class="col-span-3 mx-4 mb-6 text-white ">
      <h1 class="py-2 mb-6 text-4xl font-bold text-center border-4 border-gray-400 ">Homeland Security</h1>
      <p class="text-blue-500 text-bold">Homeland Security</p>
      <p>
        The Department of Homeland Security has a vital mission: to secure the nation from the many threats we face. Our duties are wide-ranging, but our goal is clear - keeping America safe.
        <br><br>
     </p>
     <p class="text-blue-500 text-bold">California Emergency Management Agency</p>
      <p>
        The California Emergency Management Agency exists to enhance safety and preparedness in California through strong leadership, collaboration, and meaningful partnerships. Our mission is founded in public service. Our goal is to protect lives and property by effectively preparing for, preventing, responding to, and recovering from all threats, crimes, hazards, and emergencies.

<br><br>
     </p>
     <p class="text-blue-500 text-bold">FEMA Preparing</p>
      <p>
        In 2004, The Department of Homeland Security (DHS) and The Federal Emergency Management Agency (FEMA) launched Ready Business, an extension of the Ready campaign that focuses on business preparedness. Ready Business helps owners and managers of small- to medium-sized businesses prepare their employees, operations and assets in the event of an emergency.
<br><br>
     </p>
      <!-- more text -->
    </div>
  </div>
</div>
</div>

</template>