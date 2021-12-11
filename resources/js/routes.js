import home from './components/home.vue';
import books from './components/books.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: home
    },
    {
        name: 'books',
        path: '/books',
        component: books
    }
];