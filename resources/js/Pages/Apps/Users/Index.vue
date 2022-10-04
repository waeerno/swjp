<template>

    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="handleSearch">
                        <div class="input-group mb-3">
                            <Link href="/apps/users/create" v-if="hasAnyPermission(['user.create'])"
                                class="btn btn-primary input-group-text"> <i class="fa fa-plus-circle me-2"></i> NEW
                            </Link>
                            <input type="text" class="form-control" v-model="search"
                                placeholder="search by user name...">
                            <button class="btn btn-primary input-group-text" type="submit">
                                <i data-feather='search'></i>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table table-hover-animation">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Roles</th>
                                <th scope="col" style="width:20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users.data" :key="index">
                                <td>{{ index +1 }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    <span v-for="(role,
                                    index) in user.roles" :key="index"
                                        class="badge badge-primary shadow border-0 ms-2">
                                        {{ role.name }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <Link href="#" v-if="hasAnyPermission(['user.edit'])"
                                        class="btn btn-success btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> EDIT
                                    </Link>
                                    <button v-if="hasAnyPermission(['user.delete'])" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i> DELETE</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <Pagination :links="users.links" align="end" />
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
        users: Object,
    },

    setup() {
        //define state search
        const search = ref('' || (new
            URL(document.location)).searchParams.get('q'));
        //define method search
        const handleSearch = () => {
            Inertia.get('/apps/users', {
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

<style>

</style>
