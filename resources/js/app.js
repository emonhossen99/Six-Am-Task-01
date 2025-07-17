import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

const pages = {
    'Auth/Login': () => import('./Pages/Auth/Login.vue'),
    'Dashboard': () => import('./Pages/Dashboard.vue'),
};

createInertiaApp({
    resolve: name => {
        if (pages[name]) {
            return pages[name]();
        }
        throw new Error(`Page ${name} not found`);
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
