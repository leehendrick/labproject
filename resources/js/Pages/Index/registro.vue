<script setup>
import HeaderIndex from "@/Components/HeaderIndex.vue";
import {onMounted, ref} from "vue";
import IndividualForm from "@/Components/IndividualForm.vue";
import {useRoute} from "vue-router";
import Swal from "sweetalert2";
import {cursoDetalhe} from "../../../../public/js/index.js";
import EmpresarialForm from "@/Components/EmpresarialForm.vue";
const cursos = ref();
const selectedFormType = ref('Individual');
const route = useRoute();

const handleSelectChange = () => {
  //
};



onMounted(async () => {
  try {
    const id = sessionStorage.getItem('cursoID');
    console.log('ID do curso:', id);

    if (id) {
      const detalhesDoCurso = await cursoDetalhe(parseInt(id, 10));
      console.log('Detalhes do curso:', detalhesDoCurso);
      cursos.value = detalhesDoCurso;
      sessionStorage.removeItem('cursoID');
    } else {
      console.error('ID do curso não encontrado em sessionStorage');
    }
  } catch (error) {
    console.error('[ERRO AO OBTER DETALHES DE CURSO]', error);
    Swal.fire({
      icon: 'error',
      title: 'ERRO AO OBTER DETALHES DE CURSO',
      text: `${error}`,
      showConfirmButton: true,
    });
  }

});
</script>

<template>
  <header-index/>
  <main class="lg:mt-16 container mx-auto p-4">
    <div class="flex flex-col md:flex-row">
      <!-- Container do lado esquerdo -->
      <div class="w-full md:w-3/5 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4 mt-6">Inscrição CCD</h2>
        <div class="mt-2">
          <select v-model="selectedFormType" @change="handleSelectChange" id="typeForm" name="typeForm" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 my-ring2 sm:max-w-xs sm:text-sm sm:leading-6">
            <option selected value="Individual">Individual</option>
            <option value="Empresarial">Empresarial</option>
          </select>
        </div>
        <div class="bg-transparent border-layout rounded-md shadow-md mt-6 h-screen flex items-center justify-center">
        <div class="m-6 w-full">
          <!-- Conteúdo do container -->
          <div id="fillForm">
            <individual-form v-if="selectedFormType === 'Individual'"></individual-form>
            <empresarial-form v-if="selectedFormType === 'Empresarial'"></empresarial-form>
          </div>
        </div>
        </div>
      </div>
      <section id="show">
        <p class="lg:mt-36 mt-10 ml-4">Something here.</p>
        <div v-if="cursos" class="max-w-lg mx-auto mt-4 bg-white shadow-md rounded p-6 border border-layout">
          <h2 class="text-2xl font-bold mb-4">{{cursos.nome_curso}}</h2>
          <p class="text-gray-600 mb-2"><strong>Valor</strong>: {{ cursos.preco }}</p>
          <p class="text-gray-600 mb-2"><strong>Data</strong>: {{ cursos.data_inicio }} / {{ cursos.data_termino }}</p>
          <p class="text-gray-600 mb-2"><strong>Horario</strong>: {{ cursos.horario }}</p>
          <p class="text-gray-600 mb-2"><strong>Local</strong>: {{ cursos.localizacao }}</p>
          <p class="text-gray-600 mb-2"><strong>Nota</strong>: {{ cursos.nota }}</p>
        </div>

        <div v-if="selectedFormType==='Empresarial'" class="max-w-lg mx-auto mt-4 bg-white shadow-md rounded p-6 border border-layout">
          <h2>Lista de Formandos</h2>
        </div>
      </section>
      </div>
  </main>
</template>

<style scoped>

</style>