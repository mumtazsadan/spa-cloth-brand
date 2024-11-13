import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

//vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import { VDateInput } from 'vuetify/labs/VDateInput'

//mdi
import '@mdi/font/css/materialdesignicons.min.css';

//ziggy
// import { ZiggyVue } from 'ziggy';


const vuetify = createVuetify({
    components,
    VDateInput,
    directives,
    icons: {
        defaultSet: 'mdi'
    },
})

createInertiaApp({
    resolve: name => {
        const pages =
            import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(vuetify)
            // .use(ZiggyVue)
            .use(plugin)
            .mount(el)
    },
})