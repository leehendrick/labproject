
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Swal from "sweetalert2";




//Função para retornar os cursos no componente index
export default function useCursos() {
    const cursos = ref({});

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
}


export const inscricao = {
    nome: '',
    email: '',
    sexo: '',
    bi: '',
    instituicao: '',
    grau_academico: '',
    tipo: 'individual',
};

function LimparCampos(){
    inscricao.nome = '';
    inscricao.email = '';
    inscricao.sexo = '';
    inscricao.bi = '';
    inscricao.instituicao = '';
    inscricao.grau_academico = '';
}
export async  function fetchInscricao(id) {
    try {
        const response = await axios.get(`/api/inscricoes/${id}`);
        Object.assign(inscricao, response.data);
    } catch (error) {
        console.error(error);
    }
}


export async function submitInscricao(){
    try{
        console.log(inscricao)
        await axios.post('/api/inscricoes', inscricao);
        Swal.fire({
            icon: 'success',
            title: 'Inscrição realizada com sucesso!',
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
            title: 'Erro ao realizar inscrição',
            text: `${error}`,
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



