<template>

    <!-- Login v1 -->
    <div class="card mb-0">
        <div class="card-body">
            <a href="javascript:void(0);" class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="90pt">
            </a>
            <div class="text-center">
                <h4 class="card-title mb-1">Welcome</h4>
                <p class="card-text mb-2">Enter your email to continue.</p>
            </div>

            <form class="auth-login-form mt-2" action="index.html" method="POST">
                <div class="form-group">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="john@example.com"
                        aria-describedby="login-email" tabindex="1" autofocus />
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password">Password</label>
                        <a href="page-auth-forgot-password-v1.html">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" name="password" tabindex="2" />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                        <label class="custom-control-label" for="remember-me"> Remember Me </label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
            </form>

            <div class="divider my-2">
                <div class="divider-text">or</div>
            </div>

            <p class="text-center mt-2">
                <span>New on our platform?</span>
                <a href="page-auth-register-v1.html">
                    <span>Create an account</span>
                </a>
            </p>

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
            password: '',
        });
        //submit method
        const submit = () => {
            //send data to server
            Inertia.post('/login', {
                //data
                email: form.email,
                password: form.password,
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

