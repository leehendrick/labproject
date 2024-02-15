<script setup>

import HeaderIndex from "@/Components/HeaderIndex.vue";
</script>

<template>
<header-index/>
  <main class="mt-40 container mx-auto p-4">

    <div class="flex flex-col md:flex-row">
      <!-- Container do lado esquerdo -->
      <div class=" w-full md:w-3/5 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4">Cursos Disponíveis</h2>

        <div class="max-w-lg mx-auto mt-8 bg-white shadow-md rounded p-6">
          <h2 class="text-2xl font-bold mb-4">Curso de Tailwind CSS</h2>
          <p class="text-gray-600 mb-4">Vagas Disponíveis: 10</p>
          <button class="bg-suave bt-hover text-white font-bold py-2 px-4 rounded">
            Inscrever-se
          </button>
        </div>
      </div>

      <!-- Linha vertical separadora -->
      <hr class="border-layout"/>

      <!-- Container do lado direito -->
      <div class="w-full md:w-1/4 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4">Notas Informativas</h2>
        <!-- Conteúdo do container direito aqui -->
        <div class="overflow-auto break-words">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
      </div>
    </div>
  </main>
</template>

<style scoped>

</style>