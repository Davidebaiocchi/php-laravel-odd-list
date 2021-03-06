import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import About from './pages/About';
import Contact from './pages/Contact';
import Address from './pages/Address';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: '/',
            name: "home",
            component: Home
        },
        {
            path: '/about',
            name: "about",
            component: About
        },
        {
            path: '/contact',
            name: "contact",
            component: Contact
        },
        {
            path: '/address',
            name: "address",
            component: Address
        }
    ]
});

export default router;