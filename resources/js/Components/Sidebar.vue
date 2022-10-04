<template>
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
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
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
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                        </Link>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='database'></i>
                            <span data-i18n="Apps">Data Master</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li :class="{ 'active': $page.url.startsWith('/apps/user') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/users">
                                <i data-feather='circle'></i>
                                <span>User</span>
                                </Link>
                            </li>
                            <li :class="{ 'active': $page.url.startsWith('/apps/wilayah') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/wilayah">
                                <i data-feather='circle'></i>
                                <span>Wiyayah</span>
                                </Link>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i>
                            <span data-i18n="Apps">Paket dan Penawaran</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li :class="{ 'active': $page.url.startsWith('/apps/customer') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/dashboard">
                                <i data-feather='circle'></i>
                                <span>Paket</span>
                                </Link>
                            </li>
                            <li :class="{ 'active': $page.url.startsWith('/apps/penawaran') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/dashboard">
                                <i data-feather='circle'></i>
                                <span>Penawaran</span>
                                </Link>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="edit"></i>
                            <span data-i18n="Apps">Reservasi</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li :class="{ 'active': $page.url.startsWith('/apps/customer') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/dashboard">
                                <i data-feather='circle'></i>
                                <span>Reservasi</span>
                                </Link>
                            </li>
                            <li :class="{ 'active': $page.url.startsWith('/apps/arsip') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/dashboard">
                                <i data-feather='circle'></i>
                                <span>Arsip</span>
                                </Link>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='share-2'></i>
                            <span data-i18n="Apps">Authorize</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li :class="{ 'active': $page.url.startsWith('/apps/roles') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/roles">
                                <i data-feather='circle'></i>
                                <span>Role</span>
                                </Link>
                            </li>
                            <li :class="{ 'active': $page.url.startsWith('/apps/permissions') }" data-menu="">
                                <Link class="dropdown-item d-flex align-items-center" href="/apps/permissions">
                                <i data-feather='circle'></i>
                                <span>Permissions</span>
                                </Link>
                            </li>
                        </ul>
                    </li>

                    <li :class="{ 'active': $page.url.startsWith('/apps/profile') }" class="nav-item">
                        <Link class="nav-link d-flex align-items-center" href="/apps/dashboard">
                        <i data-feather="user"></i>
                        <span>Profile</span>
                        </Link>
                    </li>

                    <li class="nav-item">
                        <Link class="nav-link d-flex align-items-center" href="/apps/dashboard">
                        <i data-feather="power"></i>
                        <span>Logout</span>
                        </Link>
                    </li>

                </ul>
            </div>
        </div>
    </div>


</template>

<script>
//import Link
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    }
}
</script>
