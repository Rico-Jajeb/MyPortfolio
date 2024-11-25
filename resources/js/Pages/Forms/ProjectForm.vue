<script setup>
import { useForm } from '@inertiajs/vue3'



const form = useForm({

  name: null,
  description: null,
  img: null,
  links: null,
  

})
</script>

<template>

  <form @submit.prevent="form.post('/add-Project')">
  
    <!-- Project Name -->
    <div class="mb-3">
      <label for="Project Name " class="">Project Name:</label>
      <input type="text" v-model="form.name" placeholder="Enter project name here..." class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2  ">
      <div class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
    </div>
    <!-- Project Description -->
    <div class="mb-3">
      <label for="Project Description">Project Description:</label>
      <!-- <input  class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2 " placeholder="Enter project description"> -->

      <textarea type="text" v-model="form.description" id="message" rows="2" class="block bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5  mt-2" placeholder="Enter project description here..."></textarea>
      <div class="text-red-500" v-if="form.errors.description">{{ form.errors.description }}</div>      
    </div>


  <!-- Project Image -->
    <div class="mb-3">
      <label for="Project Img">Project Image:</label>
      <input type="text" v-model="form.img" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2 ">
      <div class="text-red-500" v-if="form.errors.img">{{ form.errors.img }}</div>
    </div>

    
  <!-- Project Links -->
    <div class="mb-3">
      <label for="Project Links">Project Links:</label>
      <input type="text" v-model="form.links" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2  " placeholder="Enter project Links here...">
      <div class="text-red-500" v-if="form.errors.links">{{ form.errors.links }}</div>    
    </div>
    <!-- submit -->
    <button type="submit" :disabled="form.processing"  class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
  </form>
</template>