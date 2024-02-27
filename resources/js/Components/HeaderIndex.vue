<script setup>
import { navigation } from '/public/js/script.js';
import { InertiaLink } from "@inertiajs/inertia-vue3";
</script>
<template>
  <header class="bg-secondary lg:fixed top-0 w-full ">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Top">
      <div class="flex w-full items-center justify-between border-b border-indigo-500 py-6 lg:border-none">
        <div class="flex items-center">
          <a href="#">
            <span class="sr-only">Your Company</span>
          </a>
          <div v-for="link in navigation" class="ml-10 hidden space-x-8 lg:block">
            <InertiaLink  :href="link.href" :key="link.name" class="text-base font-medium text-white hover:text-indigo-50">
                {{ link.name }}
            </InertiaLink>
          </div>
        </div>
        <div class="ml-10 space-x-4">
          <a href="/login" class="inline-block rounded-md border border-transparent bt-hover px-4 py-2 text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
          <a href="#" class="inline-block rounded-md border border-transparent bg-white px-4 py-2 text-base font-medium text-primary hover:bg-indigo-50">Sign up</a>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-x-6 py-4 lg:hidden">
        <div v-for="link in navigation" :key="link.name" class="text-base font-medium text-white hover:text-indigo-50">
          <InertiaLink :href="link.href">
            {{ link.name }}
          </InertiaLink>
        </div>
      </div>
    </nav>
  </header>
</template>

<style scoped>

</style>