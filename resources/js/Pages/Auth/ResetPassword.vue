<template>

    <!-- Login v1 -->
    <div class="card mb-0">
        <div class="card-body">
            <a href="javascript:void(0);" class="brand-logo">
                <img src="/images/logo.png" width="70">
            </a>
            <div class="text-center">
                <h4 class="card-title mb-1">Update Password</h4>
                <div class="alert alert-primary" role="alert">
                    <div v-if="session.status" class="alert-body">
                        {{ session.status }}
                    </div>
                </div>
            </div>

            <form class="auth-login-form mt-2" @submit.prevent="submit">
                <div class="form-group">
                    <label for="login-email" class="form-label">Email</label>
                    <input v-model="form.email" :class="{ 'is-invalid' : errors.email}" placeholder="Email" type="email"
                        class="form-control" tabindex="1" autofocus />
                </div>

                <div v-if="errors.email" class="alert alert-danger">
                    {{ errors.email }}
                </div>

                <!-- password -->
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password">Password</label>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input v-model="form.password" :class="{'is-invalid' : errors.password}" type="password"
                            class="form-control form-control-merge" placeholder="password" name="password"
                            tabindex="2" />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>
                <div v-if="errors.password" class="alert alert-danger mt-1">
                    {{ errors.password }}
                </div>

                <div class="form-group">
                    <div class="input-group input-group-merge form-password-toggle">
                        <input v-model="form.password_confirmation"
                            :class="{'is-invalid' : errors.password_confirmation}" type="password"
                            class="form-control form-control-merge" placeholder="password confirmation" name="password"
                            tabindex="3" />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block" tabindex="4">Update Password</button>
            </form>

        </div>
    </div>
    <!-- /Login v1 -->
</template>

<script>
//import layout
import LayoutAuth from '../../Layouts/Auth.vue';
//import reactive
import { reactive } from 'vue';
//import inertia adapter
import { Inertia } from '@inertiajs/inertia';
//import Heade and useForm from Inertia
import {
    Head,
    Link,
} from '@inertiajs/inertia-vue3';
export default {
    //layout
    layout: LayoutAuth,
    //register component
    components: {
        Head,
        Link
    },
    props: {
        errors: Object,
        session: Object
    },
    //define composition API
    setup() {
        //define form state
        const form = reactive({
            email: '',
        });
        //submit method
        const submit = () => {
            //send data to server
            Inertia.post('/forgot-password', {
                email: form.email,
            });
        }
        //return form state and submit method
        return {
            form,
            submit,
        };
    }
}
</script>
<style>

</style>

