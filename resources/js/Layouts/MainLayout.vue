<template>
    <main>
        <header class="flex gap-4 justify-between">
            <div class="">
                <Link href="/" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Home</Link>
                <Link href="/about-us" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">About</Link>
                <Link href="/contact-us" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Contact</Link>            
            </div>

            <div class="">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </Link>
            <template v-else>
                <Link :href="route('login')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
                </Link>
                <Link :href="route('register')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
                </Link>       
            </template>             
            </div>
 
        </header>
       

        <br>

        <article>
          <slot />  <!-- Content from the page will be injected here -->
        </article>
    </main>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3';

</script>

