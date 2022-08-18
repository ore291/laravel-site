<script setup>
const emit = defineEmits(['selectPlan'])
const props = defineProps(['plans'])

function selectPlan(plan, duration) {
    emit("selectPlan", { plan, duration });
}
</script>


<template>
    
</template>

// <script>
// export default {
//     props: ['plans', 'payment_option'],
//     emits: ["selectPlan"],
//     methods: {

//     },

// }
// </script>



<style>
</style>