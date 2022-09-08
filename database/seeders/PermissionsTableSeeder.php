<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission permission
        Permission::create([
            'name'          => 'permissions.index',
            'guard_name'    => 'web'
        ]);

        //permission user
        Permission::create([
            'name'          => 'user.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'user.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'user.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'user.delete',
            'guard_name'    => 'web'
        ]);

        //permission customer
        Permission::create([
            'name'          => 'customer.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'customer.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'customer.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'customer.delete',
            'guard_name'    => 'web'
        ]);

        //permission reservation
        Permission::create([
            'name'          => 'reservasi.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'reservasi.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'reservasi.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'reservasi.delete',
            'guard_name'    => 'web'
        ]);

        //permission billings
        Permission::create([
            'name'          => 'billing.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'billing.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'billing.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'billing.delete',
            'guard_name'    => 'web'
        ]);

        //permission paket
        Permission::create([
            'name'          => 'paket.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paket.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paket.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paket.delete',
            'guard_name'    => 'web'
        ]);

        //permission paketDetail
        Permission::create([
            'name'          => 'paketDetail.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paketDetail.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paketDetail.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'paketDetail.delete',
            'guard_name'    => 'web'
        ]);

        //permission fasilitator
        Permission::create([
            'name'          => 'fasilitator.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'fasilitator.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'fasilitator.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'fasilitator.delete',
            'guard_name'    => 'web'
        ]);

        //permission wilayah
        Permission::create([
            'name'          => 'wilayah.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'wilayah.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'wilayah.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'wilayah.delete',
            'guard_name'    => 'web'
        ]);

        //permission kendaraan
        Permission::create([
            'name'          => 'kendaraan.index',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'kendaraan.create',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'kendaraan.edit',
            'guard_name'    => 'web'
        ]);

        Permission::create([
            'name'          => 'kendaraan.delete',
            'guard_name'    => 'web'
        ]);
    }
}
