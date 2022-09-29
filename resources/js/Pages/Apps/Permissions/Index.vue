<template>
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Permission</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search by permission name...">
                            <button class="btn btn-primary input-group-text" type="submit">
                                <i class="fa fa-search me-2"></i>
                                SEARCH
                            </button>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover-animation">
                        <thead>
                            <tr>
                                <th>Permission Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(permission, index) in permissions.data" :key="index">
                                <td> {{ permission.name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <Pagination :links="permissions.links" align="end" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//import layout
import LayoutApp from '../../../Layouts/App.vue';
//import component pagination
import Pagination from '../../../Components/Pagination.vue';
//import Heade and Link from Inertia
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
    //layout
    layout: LayoutApp,
    //register component
    components: {
        Head,
        Link,
        Pagination
    },
    //props
    props: {
        permissions: Object,
    }
}
</script>
