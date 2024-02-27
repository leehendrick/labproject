<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {ref, onMounted} from "vue";
import {inscricao, submitInscricao} from "../../../public/js/index.js";


//Carregar os dados da inscrição existente
onMounted(async () => {
  //await fetchInscricao(id.value);
})

 async function submitForm(){
  await submitInscricao();
}

</script>

<template>
  <form @submit.prevent="submitForm()" class="m-4">
  <h2 class="text-2xl font-bold mb-4">Formulário de Inscrição</h2>
  <div class="relative">
    <label for="nome" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nome Completo</label>
    <input type="text" name="nome" id="nome" v-model="inscricao.nome" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Hendrick Nkuba" required />
  </div>

  <div class="relative mt-5">
    <label for="email" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
    <input type="email" name="email" id="email" v-model="inscricao.email" class=" outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com" required />
  </div>

  <div class="relative mt-5">
    <label for="sexo" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Sexo</label>
    <select id="sexo" name="sexo" v-model="inscricao.sexo" class="form-select block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300" required>
      <option disabled selected>Selecione</option>
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
  </div>

  <div class="relative mt-5">
    <label for="bi" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Número do BI</label>
    <input type="text" name="bi" id="bi" v-model="inscricao.bi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="098765432LA123" required/>
  </div>

  <div class="relative mt-5">
    <label for="instituicao" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Instituição de Ensino</label>
    <input type="text" name="instituicao" id="instituicao" v-model="inscricao.instituicao" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="ISPTEC" required/>
  </div>

  <div class="relative mt-5">
    <label for="grau_academico" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Grau Académico</label>
    <select id="grau_academico" name="grau_academico" v-model="inscricao.grau_academico" class="form-select block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300" required>
      <option disabled selected>Selecione</option>
      <option value="ensinoBase">Ensino de Base</option>
      <option value="ensinoMedio">Ensino Médio</option>
      <option value="licenciatura1">1º Ano - Licenciatura</option>
      <option value="licenciatura2">1º Ano - Licenciatura</option>
      <option value="licenciatura3">1º Ano - Licenciatura</option>
      <option value="licenciatura4">1º Ano - Licenciatura</option>
      <option value="licenciatura5">1º Ano - Licenciatura</option>
      <option value="licenciatura6">Licenciado</option>
      <option value="mestre">Mestre</option>
    </select>
  </div>
  <div class="relative mt-5">
    <label for="anexo" class=" absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">
      Anexar B.I
    </label>
    <input class="block w-full text-sm px-4  border-gray-300 rounded-md cursor-pointer border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="large_size" type="file">
  </div>

  <div class="mt-5">
    <primary-button>Enviar</primary-button>
  </div>
  </form>
</template>

<style scoped>

</style>