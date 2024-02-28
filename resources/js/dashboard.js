import {onMounted, ref} from "vue";
import axios from "axios";

export default function showInscricao() {
    const inscricao = ref({});

    onMounted(async () => {
        try {
            const response = await axios.get(`/api/inscricoes`);
            inscricao.value = response.data;
        } catch (error) {
            console.error(error);
        }
    });

    return {
        inscricao,
    };
}