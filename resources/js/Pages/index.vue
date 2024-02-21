<script setup>
import HeaderIndex from "@/Components/HeaderIndex.vue";
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';

const cursos = ref({});
const route = useRoute();

onMounted(async () => {
  try {
    const response = await axios.get(`/api/cursos`);
    cursos.value = response.data;
  } catch (error) {
    console.error(error);
  }
});
</script>

<template>
<header-index/>
  <main class="mt-32 container mx-auto p-4">

    <div class="flex flex-col md:flex-row">
      <!-- Container do lado esquerdo -->
      <div class="w-full md:w-3/5 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4">Cursos Disponíveis</h2>

        <div v-for="curso in cursos" class="max-w-lg mx-auto mt-8 bg-white shadow-md rounded p-6 border border-layout">
          <h2 class="text-2xl font-bold mb-4">{{curso.nome_curso}}</h2>
          <p class="text-gray-600 mb-2">Vagas Disponíveis: {{ curso.vagas }}</p>
          <p class="text-gray-600 mb-2">Duração: {{ curso.duracao }}</p>
          <p class="text-gray-600 mb-2">Preço: {{ curso.preco }}AOA</p>
          <button class="bg-suave bt-hover text-white font-bold py-2 px-4 rounded" @click="inscrever(curso.id)">
            Inscrever-se
          </button>
        </div>
      </div>

      <!-- Linha vertical separadora -->
      <hr class="border-layout2"/>
      <!-- Container do lado direito -->
      <div class="w-full md:w-1/4 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4">Notas Informativas</h2>
        <!-- Conteúdo do container direito -->
        <div class="overflow-auto break-words">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
      </div>
    </div>
  </main>
</template>