//Chamando os componentes Vue
import {createRouter, createWebHistory} from "vue-router";
import Index from "/resources/js/Pages/index.vue";
import Home from "/resources/js/Pages/Home.vue";
import Dashboard from "/resources/js/Pages/Dashboard.vue";
import Login from "/resources/js/Pages/Auth/Login.vue";
import Registro from "/resources/js/Pages/Index/registro.vue";
import Contatos from "/resources/js/Pages/Index/contatos.vue";
import Register from "/resources/js/Pages/Auth/Register.vue";
import index from "/resources/js/Pages/index.vue";
import edit from "/resources/js/Pages/Profile/Edit.vue";
import Inscricoes from "@/Pages/Dashboard/Inscricoes.vue";



const routes = [
        {
            path: '/',
            component: Index,
        },
        {
            path: '/home',
            component: Home,
        },
        {
            path: '/dashboard',
            component: Dashboard,
        },
        {
            path: '/login',
            component: Login,
        },
        {
            path: '/registro',
            component: Registro,
            name: 'registro'
        },
        {
            path: '/contatos',
            component: Contatos,
        },
        {
            path: '/register',
            component: Register,
        },
        {
            path: '/cursos',
            component: index,
        },
        {
            path: '/profile',
            component: edit,
        },
        {
            path: '/registro/create',
            component: 'index',
        },
        {
            path: '/dashboard/inscrições',
            component: Inscricoes,
        },
    ];


const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;