<script setup>
import HeaderIndex from "@/Components/HeaderIndex.vue";
import { ref } from "vue";
import IndividualForm from "@/Components/IndividualForm.vue";


const selectedFormType = ref('default');

const handleSelectChange = () => {
  //
};

</script>

<template>
  <header-index/>
  <main class="mt-16 container mx-auto p-4">

    <div class="flex flex-col md:flex-row">
      <!-- Container do lado esquerdo -->
      <div class="w-full md:w-3/5 bg-white p-4">
        <h2 class="text-2xl font-bold mb-4 mt-6">Inscrição CCD</h2>
        <div class="mt-2">
          <select v-model="selectedFormType" @change="handleSelectChange" id="typeForm" name="typeForm" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option selected disabled>Selecione o tipo de inscrição</option>
            <option>Individual</option>
            <option>Empresarial</option>
          </select>
        </div>
        <hr class="border-layout mt-10"/>
        <div id="fillForm" class="mt-6">
          <individual-form v-if="selectedFormType === 'Individual'"></individual-form>
        </div>
      </div>

      </div>
  </main>
</template>

<style scoped>

</style>