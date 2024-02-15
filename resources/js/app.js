import './bootstrap';
import '../css/app.css';



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import {createRouter, createWebHistory} from "vue-router";


//Chamando os componentes Vue
import Dashboard from "@/Pages/Dashboard.vue";
import Home from "@/Pages/Home.vue";
import Index from "@/Pages/index.vue";

const routes = [
    { path: '/index', component: Index },
    { path: '/home', component: Home },
    { path: '/dashboard', component: Dashboard },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const el = document.getElementById('app');

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue)
            .use(VueSweetalert2)
            .mount(el);

    },
    progress: {
        color: '#4B5563',
    },
})
