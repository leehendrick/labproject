
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Swal from "sweetalert2";

export const inscricao = {
    nome: '',
    email: '',
    sexo: '',
    bi: '',
    instituicao: '',
    grau_academico: '',
    tipo: 'individual',
};

export const cursoNew = {
    nome: '',
    descricao: '',
    data_inicio: '',
    data_termino: '',
    vagas: '',
    local: '',
    preco: '',
    modulos: '',
    nota: '',
    requisitos: '',
    duracao: '',
    horario: '',
    criado_por: ''
}

//Função para retornar os cursos
export default function useCursos() {
    const cursos = ref([]);

    onMounted(async () => {
        try {
            const response = await axios.get(`/api/cursos`);
            cursos.value = response.data;
        } catch (error) {
            console.error(error);
        }
    });
    return {
        cursos,
    };
};

export function useHorarios() {
    const horarios = ref({});

    onMounted(async () => {
        try {
            const response = await axios.get(`/api/horarios`);
            horarios.value = response.data;
        } catch (error) {
            console.error(error);
        }
    });

    return {
        horarios,
    };
}

export function useDuracao() {
    const duracao = ref({});

    onMounted(async () => {
        try {
            const response = await axios.get(`/api/duracaos`);
            duracao.value = response.data;
        } catch (error) {
            console.error(error);
        }
    });

    return {
        duracao,
    };
}

export function getCriador(id){
    const criador = ref([]);

    onMounted(async () => {
        try {
            const response = await axios.get(`/profile/${id}`);
            criador.value = response.data;
        } catch (error) {
            console.error(error);
        }
    });

    return {
        criador,
    };
}

export async function fetchInscricao(id) {
    try {
        const response = await axios.get(`/api/inscricoes/${id}`);
        Object.assign(inscricao, response.data);
    } catch (error) {
        console.error(error);
    }
}

//Cadastrar nova inscrição
export async function submitInscricao(){
    try{
        console.log(inscricao)
        await axios.post('/api/inscricoes', inscricao);
        Swal.fire({
            icon: 'success',
            title: 'Inscrição realizada com sucesso!',
            showConfirmButton: false,
            timer: 1500,
        });

    } catch (error){
        console.log('[ERRO AO INSERIR NA BD]:', error);
        Swal.fire({
            icon: 'error',
            title: 'Erro ao realizar inscrição',
            text: `${error}`,
            showConfirmButton: true,
        })
    }
}

//Cadastrar Cursos
export async function addCurso(){
    try{
        console.log(cursoNew)
        await axios.post('/api/cursos', cursoNew);
        Swal.fire({
            icon: 'success',
            title: 'Curso adicionado com sucesso!',
            showConfirmButton: false,
            timer: 1500,
        })
        setTimeout(function (){
            location.reload()
        }, 3000)

    } catch (error){
        console.log('[ERRO AO INSERIR NA BD]:', error);
        Swal.fire({
            icon: 'error',
            title: 'Erro ao realizar cadastro',
            text: 'Desculpe, houve um erro ao processar o cadastro',
            showConfirmButton: true,
        })
    }
}

export async function cursoDetalhe(id){
    try{
        const response = await axios.get(`/registro/${id}`);
        console.log('Resposta da API:', response.data);
        return response.data.curso;
    } catch (error) {
        console.error('[ERRO AO OBTER DETALHES DE CURSO]', error);
        Swal.fire({
            icon: 'error',
            title: 'ERRO AO OBTER DETALHES DE CURSO',
            text: `${error}`,
            showConfirmButton: true,
        })
        throw error;
    }
}



