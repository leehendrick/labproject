<script setup>

import {inscricao} from "../../../public/js/index.js";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {ref} from "vue";

</script>

<template>
  <form @submit.prevent="submitForm()" class="m-4">
    <h2 class="text-2xl font-bold mb-4">Dados da empresa</h2>
    <div class="relative z-0">
      <label for="nome_empresa" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nome da empresa</label>
      <input type="text" name="nome_empresa" id="nome_empresa" v-model="inscricao.nome" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="SONANGOL" required />
    </div>

    <div class="relative mt-5">
      <label for="nome_responsavel" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nome do responsavel</label>
      <input type="text" name="nome_responsavel" id="nome_responsavel" v-model="inscricao.email" class=" outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Hendrick Nkuba" required />
    </div>

    <div class="relative mt-5">
      <label for="email" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email do responsavel</label>
      <input type="email" name="email" id="email" v-model="inscricao.email" class=" outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@sonangol.co.ao" required />
    </div>

    <div class="relative mt-5">
      <label for="telefone" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Telefone</label>
      <input type="text" name="telefone" id="telefone" v-model="inscricao.bi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="942388756" required/>
    </div>

    <div class="relative mt-5">
      <label for="endereco" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Endereço</label>
      <input type="text" name="endereco" id="endereco" v-model="inscricao.instituicao" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Av. via Luanda Sul" required/>
    </div>

    <hr class="border-layout mt-4"/>
    <h2 class="text-2xl font-bold mb-4 mt-4">Dados do formando</h2>

    <div class="relative mt-5">
      <label for="nome_formando" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nome Completo</label>
      <input type="text" name="nome_formando" id="nome_formando" v-model="inscricao.nome" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Hendrick Nkuba" required/>
    </div>

    <div class="mt-6">
      <button type="button"  class="ml-20 bg-green-700 hover:bg-green-800 text-white rounded font-semibold inline-flex items-center px-2 py-1">Adicionar</button>
      <button class="lg:ml-4 ml-2 bg-red-600 hover:bg-red-800 text-white rounded font-semibold inline-flex items-center px-2 py-1">Cancelar</button>
      <primary-button class="lg:ml-4 mt-10 ">Enviar</primary-button>
    </div>
  </form>
</template>

<style scoped>

</style>