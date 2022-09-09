import "./bootstrap";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            //set mixins
            .mixin({
                methods: {
                    //method "hasAnyPermission"
                    hasAnyPermission: function (permissions) {
                        //get permissions from props
                        let allPermissions = this.$page.props.auth.permissions;
                        let hasPermission = false;
                        //Jika ada key yang sama, maka variable hasPermission akan di set menjadi true.
                        permissions.forEach(function (item) {
                            if (allPermissions[item]) hasPermission = true;
                        });
                        return hasPermission;
                    },
                },
            })

            .use(plugin)
            .mount(el);
    },
});

InertiaProgress.init();
