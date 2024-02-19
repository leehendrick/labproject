/******/ import {AcademicCapIcon, CurrencyDollarIcon, UsersIcon} from "@heroicons/vue/24/outline/index.js";

(() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	
/******/ 	
/******/ })()
;

export const navigation = [
        { name: 'Home', href: '/' },
        { name: 'Inscrições', href: '/registro' },
        { name: 'Contatos', href: '/contatos' },
];

export const stats = [
        { id: 1, name: 'Total Formandos', stat: '71,897', icon: UsersIcon, change: '122', changeType: 'increase' },
        { id: 2, name: 'Total Receitas', stat: '1.246.700Kz', icon: CurrencyDollarIcon, change: '5%', changeType: 'increase' },
        { id: 3, name: 'Total Turmas', stat: '18', icon: AcademicCapIcon, change: '3.2%', changeType: 'decrease' },
]