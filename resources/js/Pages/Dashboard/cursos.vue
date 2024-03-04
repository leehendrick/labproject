<template>
  <AdminLayout>
      <template v-slot:mainContent>
        <h1>Cursos</h1>
      </template>
  </AdminLayout>
</template>
<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import showInscricao from "@/dashboard.js";


const current = 'cursos';
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