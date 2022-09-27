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
                    <li class="nav-item  @if (Request::segment(1)=='beranda' ) active @endif">
                        <a class="dropdown d-flex align-items-center" href="/dashboard">
                            <i data-feather="home"></i>
                            <span data-i18n="Dashboard">Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><i data-feather="package"></i><span data-i18n="Apps">Data
                                Master</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-todo.html"
                                    data-toggle="dropdown" data-i18n="Todo"><i data-feather="users"></i><span
                                        data-i18n="users">Pengguna</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-calendar.html"
                                    data-toggle="dropdown" data-i18n="Calendar"><i data-feather="calendar"></i><span
                                        data-i18n="Calendar">Hotel</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-kanban.html"
                                    data-toggle="dropdown" data-i18n="Kanban"><i data-feather="grid"></i><span
                                        data-i18n="Kanban">Wilayah</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><i data-feather="layers"></i><span data-i18n="User Interface">Paket
                                dan Penawaran</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="ui-typography.html" data-toggle="dropdown" data-i18n="Typography"><i
                                        data-feather="type"></i><span data-i18n="Typography">Paket</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-colors.html"
                                    data-toggle="dropdown" data-i18n="Colors"><i data-feather="droplet"></i><span
                                        data-i18n="Colors">Penawaran</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><i data-feather="edit"></i><span
                                data-i18n="Forms &amp; Tables">Reservasi</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-layout.html"
                                    data-toggle="dropdown" data-i18n="Form Layout"><i data-feather="box"></i><span
                                        data-i18n="Form Layout">Reservasi</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-wizard.html"
                                    data-toggle="dropdown" data-i18n="Form Wizard"><i data-feather="package"></i><span
                                        data-i18n="Form Wizard">Arsip</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item @if (Request::segment(1)=='penjelasan' ) active @endif">
                        <a class=" dropdown d-flex align-items-center" href="">
                            <i data-feather='help-circle'></i>
                            <span data-i18n="Dashboard">Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="dropdown d-flex align-items-center" href="/logout">
                            <i data-feather='power'></i>
                            <span data-i18n="Dashboard">Log out</span>
                        </a>
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
