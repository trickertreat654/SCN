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
      <h1 class="py-2 mb-6 text-4xl font-bold text-center border-4 border-gray-400 ">Company Information</h1>
      <p>
        Security Communication Network Inc. is a unique group consisting of Engineers, Technicians, Systems Designers, and Service professionals that allow us to provide many Custom, or Special Services in a standard Product. We provide Integrated Access, Video, Security, Fire, and Communication Systems into a cohesive operating environment.
   <br><br>
     </p>
      <p>
        SCN is a full-service, fully licensed and UL listed security and communications company. As one of the largest independent alarm companies in the Southern California Basin, we offer commercial, industrial, residential design, installation, service, telephone systems, intercoms, access control, closed circuit TV, paging, background music, and Tele-entry systems and monitoring from our own UL listed central station. In addition we are also UL listed for UL 2050 Industrial Security for DOD and DIS systems. We are manufacturer's representatives for several lines of equipment and offer independent consulting and design services for developers, contractors, and architects.
<br><br>
      </p>
<p>
  Quite often, companies have invested a great deal of money on a system, that when actually put into use was totally or partially unworkable. What was left out was something that SCN Security Communication Network has made a key point in all Systems Design... HUMAN ENGINEERING. Without it, your entire investment can be totally lost. With it, you can invest in systems that provide an Upward Mobile Path for Expansion, and Integration of New Technologies, with the least duplication of effort and expense.
<br><br>
</p>
<p>
  Our Key phrase is "EVERYTHING is SUBJECT to CHANGE and PROBABLY WILL". We expect change, and keep all designs flexible, and manageable. In this way every investment dollar you spend with us is protected as much as possible from obsolescence.
<br><br>
</p>
<p>
  Our design staff has been involved in New Product design with some of the leading manufacturers in associated industries, and still are actively assisting the development of new products that will be marketed Internationally. Our Associates have provided assistance to Government agencies, and our Associate Counter Intelligence group is one of the finest in the world.

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
      <h1 class="py-2 mb-6 text-4xl font-bold text-center border-4 border-gray-400 ">Company Information</h1>
      <p>
        Security Communication Network Inc. is a unique group consisting of Engineers, Technicians, Systems Designers, and Service professionals that allow us to provide many Custom, or Special Services in a standard Product. We provide Integrated Access, Video, Security, Fire, and Communication Systems into a cohesive operating environment.
   <br><br>
     </p>
      <p>
        SCN is a full-service, fully licensed and UL listed security and communications company. As one of the largest independent alarm companies in the Southern California Basin, we offer commercial, industrial, residential design, installation, service, telephone systems, intercoms, access control, closed circuit TV, paging, background music, and Tele-entry systems and monitoring from our own UL listed central station. In addition we are also UL listed for UL 2050 Industrial Security for DOD and DIS systems. We are manufacturer's representatives for several lines of equipment and offer independent consulting and design services for developers, contractors, and architects.
<br><br>
      </p>
<p>
  Quite often, companies have invested a great deal of money on a system, that when actually put into use was totally or partially unworkable. What was left out was something that SCN Security Communication Network has made a key point in all Systems Design... HUMAN ENGINEERING. Without it, your entire investment can be totally lost. With it, you can invest in systems that provide an Upward Mobile Path for Expansion, and Integration of New Technologies, with the least duplication of effort and expense.
<br><br>
</p>
<p>
  Our Key phrase is "EVERYTHING is SUBJECT to CHANGE and PROBABLY WILL". We expect change, and keep all designs flexible, and manageable. In this way every investment dollar you spend with us is protected as much as possible from obsolescence.
<br><br>
</p>
<p>
  Our design staff has been involved in New Product design with some of the leading manufacturers in associated industries, and still are actively assisting the development of new products that will be marketed Internationally. Our Associates have provided assistance to Government agencies, and our Associate Counter Intelligence group is one of the finest in the world.

</p>
      <!-- more text -->
    </div>
  </div>
</div>
</div>
</template>