
import { ref, onMounted } from 'vue';
import axios from 'axios';


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
