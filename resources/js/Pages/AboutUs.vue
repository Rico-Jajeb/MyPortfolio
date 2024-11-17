<template>
     <Head title="About Us" />
    <AppLayout>
        <main>
            <header>
           
            </header>
        </main>

        <article>
            <h1>This is the About Page</h1>
        </article>
        <br>
        <li v-for="(item, index) in msgg" :key="index">{{ item }}</li>
    </AppLayout>
</template>


<script setup>
   import AppLayout from '@/Layouts/MainLayout.vue';
   import { Head } from '@inertiajs/vue3'

   defineProps({
        msgg: String
    });
</script>