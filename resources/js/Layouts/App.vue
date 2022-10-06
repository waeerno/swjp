<template>
    <!-- BEGIN: Header-->
    <Header />
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <Sidebar />
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Data Paket</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Paket dan Tawaran</a>
                                    </li>
                                    <li class="breadcrumb-item active">Paket
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="mr-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <slot />
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <Footer />
    <!-- END: Footer-->
    <!-- <Scripts /> -->
</template>

<script>
import Header from '../Components/Header.vue'
import Sidebar from '../Components/Sidebar.vue'
import Footer from '../Components/Footer.vue'

export default {
    components: {
        Header,
        Sidebar,
        Footer,
    }
}
</script>

<style>

</style>
