<template>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <slot />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
</template>
<script>
export default {
}
</script>
<style>

</style>
