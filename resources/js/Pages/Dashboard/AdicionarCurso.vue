<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {cursoNew, addCurso, useHorarios, useDuracao} from "../../../../public/js/index.js";
import axios from "axios";
import {onMounted, ref} from "vue";

const usuarioID = ref(null);
const { horarios } =  useHorarios();
const { duracao } = useDuracao();

const selectedHorario = ref(null);
const selectedDuracao = ref(null);

function addSelect(){
  if(selectedHorario == null && selectedDuracao == null){
    console.log('VALORES NULOS NO SELECT')
  }else {
    cursoNew.duracao = selectedDuracao.value;
    cursoNew.horario = selectedHorario.value;
    console.log('VALORES ADICIONADOS')
  }
}

async function submitForm(){
  await addCurso();
}

onMounted(async () => {
  try{
    const response = await axios.get('/usuario-logado');
    usuarioID.value = response.data.id;
  } catch (err){
    console.log('ERRO AO OBTER ID', err);
  }
  cursoNew.criado_por = usuarioID.value;
})
</script>


<template>
  <form @submit.prevent="submitForm()" class="m-4">
    <h2 class="text-2xl font-bold mb-4">Adicionar Novo Curso </h2>
    <div class="relative flex justify-content align-items w-full space-x-5">
      <div class="flex-grow">
        <label for="nome" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nome do Curso</label>
        <input type="text"  name="nome" id="nome" v-model="cursoNew.nome" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm without-ring ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="Curso de Excel Básico" required />
      </div>
      <div class="flex-grow">
        <label for="local" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Local </label>
        <input type="text" name="local" id="local" v-model="cursoNew.local" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="Laboratórios Profissionalizantes" required />
      </div>
    </div>

    <div class="relative flex justify-content align-items w-full space-x-5 mt-3">
      <div class="flex-grow">
        <label for="data_inicio" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Data de Início</label>
        <input type="date"  name="data_inicio" id="data_inicio" v-model="cursoNew.data_inicio"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm without-ring ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="Curso de Excel Básico" required />
      </div>
      <div class="flex-grow">
        <label for="data_termino" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Data de Término </label>
        <input type="date" name="data_termino" id="data_termino" v-model="cursoNew.data_termino" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="Laboratórios Profissionalizantes" required />
      </div>
    </div>

    <div class="relative flex justify-content align-items w-full space-x-5 mt-3">
      <div class="flex-grow">
        <label for="vagas" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Vagas</label>
        <input type="number"  name="vagas" id="vagas" v-model="cursoNew.vagas" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm without-ring ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="50" required />
      </div>
      <div class="flex-grow">
        <label for="modulos" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Módulos</label>
        <input type="number" name="modulos" id="modulos" v-model="cursoNew.modulos" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="3" required />
      </div>

      <div class="flex-grow">
        <label for="preco" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Preço</label>
        <input type="text" name="preco" id="preco" v-model="cursoNew.preco" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="10.000,00" required />
      </div>
    </div>

    <div class="relative flex justify-content align-items w-full space-x-5 mt-3">
      <div class="flex-grow">
        <div class="relative flex justify-content align-items w-full space-x-2">
          <div class="flex-grow">
            <label for="dias" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Horario</label>
            <select @change="addSelect" v-model="selectedHorario" id="dias" name="dias" class="form-select block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:border-0 my-ring2 " required>
              <option  disabled selected>Selecione</option>
              <option :key="horario.id" :value="horario.id" v-for="horario in horarios">{{horario.dias}}</option>
            </select>

            <p>O Valor selecionado é : {{selectedHorario}}</p>
          </div>
        </div>
      </div>

      <div class="flex-grow">
        <label for="duracao" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Duração</label>
        <select @click="addSelect" v-model="selectedDuracao" id="duracao" name="duracao" class="form-select block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:border-0 my-ring2 " required>
          <option disabled selected>Selecione</option>
          <option v-for="item in duracao" :value="item.id" :key="item.id">{{ item.tempo }}</option>
        </select>

        <p>O Valor selecionando é : {{selectedDuracao}}</p>
      </div>
    </div>

    <div class="relative flex justify-content align-items w-full space-x-5 mt-3">
      <div class="flex-grow">
        <label for="requisitos" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Requisitos</label>
        <textarea name="requisitos" id="requisitos" v-model="cursoNew.requisitos" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="" required/>
      </div>

      <div class="flex-grow">
        <label for="descricao" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Descrição</label>
        <textarea name="descricao" id="descricao" v-model="cursoNew.descricao" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="" required/>
      </div>
    </div>

    <div class="relative flex justify-content align-items w-full space-x-5 mt-3">
      <div class="flex-grow">
        <label for="nota" class="-top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Nota ou Observação</label>
        <textarea id="nota" name="nota" v-model="cursoNew.nota" class="outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 my-ring2 sm:text-sm sm:leading-6" placeholder="" required/>
      </div>
    </div>

    <div class="mt-10 relative flex justify-content  align-items w-full space-x-5">
      <primary-button>Adicionar</primary-button>
      <button class="rounded-md font-semibold text-xs uppercase tracking-widest inline-flex items-center px-4 py-2 bg-red-500 text-white hover:bg-red-700">Cancelar</button>
    </div>
  </form>
</template>

