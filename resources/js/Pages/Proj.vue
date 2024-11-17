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
  <progress v-if="form.progress" :value="form.progress.percentage" max="100">
  {{ form.progress.percentage }}%
  </progress>

  <form @submit.prevent="form.post('/projects')">
  
    <!-- Project Name -->
    <label for="Project Name">Project Name:</label>
    <input type="text" v-model="form.name">
    <div v-if="form.errors.name">{{ form.errors.name }}</div>
    <br>
    <!-- Project Name -->
    <label for="Project Description">Project Description:</label>
    <input type="text" v-model="form.description">
    <div v-if="form.errors.description">{{ form.errors.description }}</div>
    <br>
  <!-- Project Name -->
      <label for="Project Img">Project Image:</label>
      <input type="text" v-model="form.img">
      <div v-if="form.errors.img">{{ form.errors.img }}</div>
      <br>
  <!-- Project Name -->
      <label for="Project Links">Project Links:</label>
      <input type="text" v-model="form.links">
      <div v-if="form.errors.links">{{ form.errors.links }}</div>
      <br>
    <!-- submit -->
    <button type="submit" :disabled="form.processing">Submit</button>
  </form>
</template>