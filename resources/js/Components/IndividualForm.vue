<script setup>

</script>

<template>
  <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md w-full md:w-3/5">
    <h2 class="text-2xl font-semibold mb-4">Formulário de Inscrição</h2>

    <!-- Nome Completo -->
    <div class="mb-4">
      <label for="nome" class="block text-sm font-medium text-gray-600">Nome Completo</label>
      <input type="text" id="nome" name="nome" class="mt-1 p-2 w-full border rounded-md" placeholder="Digite seu nome completo">
    </div>

    <!-- Sexo -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-600">Sexo</label>
      <div class="mt-1">
        <label class="inline-flex items-center">
          <input type="radio" class="form-radio" name="sexo" value="masculino">
          <span class="ml-2">Masculino</span>
        </label>
        <label class="inline-flex items-center ml-6">
          <input type="radio" class="form-radio" name="sexo" value="feminino">
          <span class="ml-2">Feminino</span>
        </label>
      </div>
    </div>

    <!-- Número do BI -->
    <div class="mb-4">
      <label for="bi" class="block text-sm font-medium text-gray-600">Número do BI</label>
      <input type="text" id="bi" name="bi" class="mt-1 p-2 w-full border rounded-md" placeholder="Digite o número do BI">
    </div>

    <!-- Número de Telefone -->
    <div class="mb-4">
      <label for="telefone" class="block text-sm font-medium text-gray-600">Número de Telefone</label>
      <input type="tel" id="telefone" name="telefone" class="mt-1 p-2 w-full border rounded-md" placeholder="Digite o número de telefone">
    </div>

    <!-- Instituição de Ensino -->
    <div class="mb-4">
      <label for="instituicao" class="block text-sm font-medium text-gray-600">Instituição de Ensino</label>
      <input type="text" id="instituicao" name="instituicao" class="mt-1 p-2 w-full border rounded-md" placeholder="Digite o nome da instituição de ensino">
    </div>

    <!-- Grau Acadêmico -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-600">Grau Acadêmico</label>
      <select class="mt-1 p-2 w-full border rounded-md">
        <option value="bacharelado">Escolha uma opção</option>
        <option value="bacharelado">Ensino de Base</option>
        <option value="licenciatura">Ensino Médio</option>
        <option value="mestrado">1º Ano - Licenciatura</option>
        <option value="doutorado">2º Ano - Licenciatura</option>
        <option value="doutorado">3º Ano - Licenciatura</option>
        <option value="doutorado">4º Ano - Licenciatura</option>
        <option value="doutorado">5º Ano - Licenciatura</option>
        <option value="doutorado">Licenciado</option>
        <option value="doutorado">Mestre ou Superior</option>
      </select>
    </div>

    <!-- Botão de Envio -->
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Enviar</button>
  </div>


</template>

<style scoped>

</style>