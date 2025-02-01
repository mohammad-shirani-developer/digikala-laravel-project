<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // مدیریت محصولات
            'view product',
            'edit product',
            'delete product',
            'create product',

            // مدیریت سفارشات
            'view order',
            'process order',

            // مدیریت دسته بندی
            'view category',
            'edit category',
            'delete category',
            'create category',


        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate([
                'name' => $permission,
                'guard_name' => 'admin',
            ]);
        }

        $superAdmin = Role::query()->firstOrCreate([
            'name' => 'super admin',
            'guard_name' => 'admin',
        ]);

        $superAdmin->givePermissionTo(Permission::all());

        $productAdmin = Role::query()->firstOrCreate([
            'name' => 'product admin',
            'guard_name' => 'admin',
        ]);

        $productAdmin->givePermissionTo([
            'view product',

            'edit product',

            'delete product',

            'create product',

            'view category',

            'edit category',

            'delete category',

            'create category',
        ]);

        $orderAdmin = Role::query()->firstOrCreate([
            'name' => 'order admin',
            'guard_name' => 'admin',
        ]);

        $orderAdmin->givePermissionTo([
            'view order',
            'process order',
        ]);



        $superAdminUser = Admin::query()->firstOrCreate([
            'email' => 'superAdmin@gmail.com'
        ], [
            'name'=>'Super Admin',
            'password'=>bcrypt('225588'),
            'mobile'=>'09130000001'
        ]);

        $superAdminUser->assignRole('super admin');

        $productAdminUser = Admin::query()->firstOrCreate([
            'email' => 'productAdmin@gmail.com'
        ], [
            'name'=>'Product Admin',
            'password'=>bcrypt('225588'),
            'mobile'=>'09130000002'
        ]);
        $productAdminUser->assignRole('product admin');


        $orderAdminUser = Admin::query()->firstOrCreate([
            'email' => 'orderAdmin@gmail.com'
        ], [
            'name'=>'Order Admin',
            'password'=>bcrypt('225588'),
            'mobile'=>'09130000003'
        ]);

        $orderAdminUser->assignRole('order admin');

    }
}
