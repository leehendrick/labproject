<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Dashboard" />
    <GuestLayout>
      <template v-slot:mainContent>
        <div class="py-12 shadow-md">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">You're logged as admin!</div>
            </div>
          </div>
        </div>
      </template>
    </GuestLayout>
</template>
