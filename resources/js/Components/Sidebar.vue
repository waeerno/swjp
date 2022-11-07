<template>
    <v-app>
        <div class="horizontal-menu-wrapper">
            <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border"
                role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mr-auto">
                            <a class="navbar-brand" href="">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="35">
                                <h2 class="brand-text mb-0">SWJP</h2>
                            </a>
                        </li>
                        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                                data-toggle="collapse"><i
                                    class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                                    data-feather="x"></i></a></li>
                    </ul>
                </div>
                <div class="shadow-bottom"></div>
                <!-- Horizontal menu content-->
                <div class="navbar-container main-menu-content" data-menu="menu-container">
                    <!-- include includes/mixins-->
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

                        <li :class="{ 'active': $page.url.startsWith('/apps/dashboard') }" class="nav-item">
                            <Link class="nav-link d-flex align-items-center" href="/apps/dashboard">
                            <v-icon icon="mdi-home" />
                            <span>Dashboard</span>
                            </Link>
                        </li>

                        <li :class="{ 'active': $page.url.startsWith('/apps/users') }" class="nav-item">
                            <Link class="nav-link d-flex align-items-center" href="/apps/users">
                            <v-icon icon="mdi-home" />
                            <span>User</span>
                            </Link>
                        </li>

                        <li :class="{ 'active': $page.url.startsWith('/apps/roles') }" class="nav-item">
                            <Link class="nav-link d-flex align-items-center" href="/apps/roles">
                            <v-icon icon="mdi-home" />
                            <span>Roles</span>
                            </Link>
                        </li>

                        <li :class="{ 'active': $page.url.startsWith('/apps/permissions') }" class="nav-item">
                            <Link class="nav-link d-flex align-items-center" href="/apps/permissions">
                            <v-icon icon="mdi-home" />
                            <span>Permissions</span>
                            </Link>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </v-app>
</template>

<script>
import { createVuetify } from 'vuetify'
import { aliases, mdi } from 'vuetify/iconsets/mdi'

//import Link
import { Link } from '@inertiajs/inertia-vue3';
export default {
    name: "app",
    icons: {
        defaultSet: 'mdi',
        aliases,
        sets: {
            mdi,
        }
    }, components: {
        Link
    },
    props: {
        auth: Object
    }

}
</script>

<style>

</style>
