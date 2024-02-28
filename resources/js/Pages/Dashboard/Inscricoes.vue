<template>
  <AdminLayout>
      <template v-slot:mainContent>
        <div class="py-12 shadow-md mt-4 rounded p-6 border border-layout">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                  <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Inscrições</h1>
                  </div>
                  <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <primary-button>Adicionar</primary-button>
                  </div>
                </div>
                <div class="mt-8 flow-root">
                  <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Nome</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Curso Pretendido</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tipo de Inscrição</th>
                          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                          </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        <tr v-for="person in inscricao">
                          <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                            <div class="flex items-center">
                              <div class="">
                                <div class="font-medium text-gray-900">{{ person.nome }}</div>
                                <div class="mt-1 text-gray-500">{{ person.email }}</div>
                              </div>
                            </div>
                          </td>
                          <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                            <div class="text-gray-900">{{ person.instituicao }}</div>
                          </td>
                          <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                          </td>
                          <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{ person.tipo }}</td>
                          <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

                            <button @click="ver" class="btn-ver">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                              </svg>
                            </button>

                            <button @click="eliminar" class="btn-delete">
                              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                              </svg>
                            </button>

                            <button @click="editar" class="btn-edit">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                              </svg>
                            </button>

                            <button @click="confirmar" class="btn-confirm">
                              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                              </svg>
                            </button>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </template>
  </AdminLayout>
</template>
<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import showInscricao from "@/dashboard.js";


const current = 'inscricoes';
sessionStorage.setItem('current', current);
const { inscricao } = showInscricao();
</script>

<style>
.btn-delete, .btn-edit, .btn-confirm, .btn-ver {
  @apply p-2 ml-1 rounded-full text-white inline-flex items-center justify-center focus:outline-none focus:ring focus:border-blue-300;
}
.btn-delete{
  @apply bg-red-600  hover:bg-red-700
}
.btn-edit{
  @apply bg-indigo-600 hover:bg-indigo-700
}
.btn-confirm{
  @apply bg-green-600  hover:bg-green-700
}
.btn-ver{
  background-color: #FFC423;
}
.btn-ver:hover{
  background-color: #eda900;
}
</style>