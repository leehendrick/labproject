//Chamando os componentes Vue
import Dashboard from "@/Pages/Dashboard.vue";
import Home from "@/Pages/Home.vue";
import Index from "@/Pages/index.vue";
import Login from "@/Pages/Auth/Login.vue";
import Registro from "@/Pages/Index/registro.vue";
import Contatos from "@/Pages/Index/contatos.vue";
import {createRouter, createWebHistory} from "vue-router";
import Register from "@/Pages/Auth/Register.vue";


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
            component: 'index',
        },
    ];


const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;