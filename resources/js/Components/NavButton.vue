<script setup>
import { Link } from '@inertiajs/vue3';


defineProps({
    active: Boolean
})

</script>

<template>
<Link 
 :class="{'font-bold ring-4 ring-green-500': active}" 
class="block px-4 py-2 font-bold text-center text-white bg-blue-500 rounded-full hover:bg-blue-700"
>
<slot />
</Link>

</template>