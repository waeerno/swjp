<template>
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Permission</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="handleSearch">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-model="search"
                                placeholder="search by permission name...">
                            <button class="btn btn-primary input-group-text" type="submit">
                                <i data-feather='search'></i></button>
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
//import ref from vue
import { ref } from 'vue';
//import inertia adapter
import { Inertia } from '@inertiajs/inertia';

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
    },
    setup() {
        //define state search
        const search = ref('' || (new
            URL(document.location)).searchParams.get('q'));
        //define method search
        const handleSearch = () => {
            Inertia.get('/apps/permissions', {
                //send params "q" with value from state "search"
                q: search.value,
            });
        }
        //return
        return {
            search,
            handleSearch,
        }
    }
}
</script>
