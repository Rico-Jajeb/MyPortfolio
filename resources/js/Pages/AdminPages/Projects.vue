<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectForm from '../Forms/ProjectForm.vue';

import Toast from '../Toast/Toast.vue';

import { ref } from 'vue'
const open = ref(false)


</script>

<template>
    <AppLayout title="Projects">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                         <button @click="open = true">Open Modal</button>
      
                                <h1>haha</h1>
                </div>
            </div>
        </div>



        <!-- MODAL -->
        <!-- <div v-if="open" class="modal bg-red-400 p-4 rounded-lg ">
            <button @click="open = false" class="closebtn"><i class="pi pi-times-circle "  style="font-size: 1.5rem"></i></button> 
            <h1 class="modalheader">Add New Project</h1>
            <div class="mt-2">
                <ProjectForm />                
            </div>

        </div> -->

        <div v-if="open"  class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
           
                                 <!-- Flash message -->
                        <Toast/>

            <div class="w-full max-w-md md:max-w-lg lg:max-w-xl p-6 m-1 bg-white rounded-lg shadow-lg">
                <div class=" flex justify-end">
                    <button @click="open = false" class="z-20" ><i class="pi pi-times-circle "  style="font-size: 1.5rem"></i></button>     
                </div>

                
                <h2 class="text-xl font-bold  relative -top-7">Add New Project</h2>

                <!-- <p class="text-gray-700 mb-4">This is the modal content. Add more details here.</p> -->
                <div class="">
                    
                <ProjectForm />                
                </div>
                
            </div>
        </div>




    </AppLayout>
</template>


<style scoped>

/* .closebtn{
    position: relative;
    left: 90%;
    top:12px ;
} */


</style>