import {AcademicCapIcon, CurrencyDollarIcon, HomeIcon, UsersIcon} from "@heroicons/vue/24/outline/index.js";

export const navigation = [
        { name: 'Home', href: '/' },
        { name: 'Inscrições', href: 'registro' },
        { name: 'Contatos', href: 'contatos' },
];

export const stats = [
        { id: 1, name: 'Total Formandos', stat: '71,897', icon: UsersIcon, change: '122', changeType: 'increase' },
        { id: 2, name: 'Total Receitas', stat: '1.246.700Kz', icon: CurrencyDollarIcon, change: '5%', changeType: 'increase' },
        { id: 3, name: 'Total Turmas', stat: '18', icon: AcademicCapIcon, change: '3.2%', changeType: 'decrease' },
]

export const userNavigation = [
        { name: 'Your profile', href: '#' },
        { name: 'Sign out', href: '#' },
]

export function getNavigationAdm() {
        const sessionCurrent = sessionStorage.getItem('current');
        const defaultCurrent = true;

        return [
                {
                        name: 'Home',
                        href: '/dashboard',
                        icon: HomeIcon,
                        current: sessionCurrent === 'dashboard'
                },
                {
                        name: 'Inscrições',
                        href: '/dashboard/inscricoes',
                        icon: UsersIcon,
                        current: sessionCurrent === 'inscricoes'
                },
                {
                        name: 'Cursos',
                        href: '/dashboard/cursos',
                        icon: AcademicCapIcon,
                        current: sessionCurrent === 'cursos'
                },
        ];
}
