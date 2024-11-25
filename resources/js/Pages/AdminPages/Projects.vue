<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectForm from '../Forms/ProjectForm.vue';

import Toast from '../Toast/Toast.vue';

import { ref } from 'vue'
const open = ref(false)

// Define the props directly within the script
// Define props to accept the 'projects' data passed from the controller
const props = defineProps({
  projects: Array,
});

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
                    <br>

                    <div v-for="project in projects" :key="project.id" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ project.proj_name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ project.proj_description }} </p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div v-if="open"  class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <!-- Pop up message -->
            <Toast/>
            <div class="w-full max-w-md md:max-w-lg lg:max-w-xl p-6 m-1 bg-white rounded-lg shadow-lg">
                <div class=" flex justify-end">
                    <button @click="open = false" class="z-20" ><i class="pi pi-times-circle "  style="font-size: 1.5rem"></i></button>     
                </div>
                <h2 class="text-xl font-bold  relative -top-7">Add New Project</h2>
                <div class="">
                    <!-- Add project Form -->
                    <ProjectForm />                
                </div> 
            </div>
        </div>
    </AppLayout>
</template>


<style scoped>


</style>