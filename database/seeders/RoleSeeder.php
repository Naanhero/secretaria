<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['guard_name'=>'web','name' => 'SuperAdmin']);
        $role2 = Role::create(['guard_name'=>'web','name' => 'Admin']);
        $role3 = Role::create(['guard_name'=>'web','name' => 'Coordinator']);
        $role4 = Role::create(['guard_name'=>'web','name' => 'Instructor']);
        $role5 = Role::create(['guard_name'=>'web','name' => 'Aux']);
        $role2 ->syncPermissions([1, 2, 3, 5, 6, 9, 10, 11, 13, 14, 15, 17, 18, 19, 21, 22, 23, 25, 26, 27]);
        $role3 ->syncPermissions([2, 6, 9, 10, 11, 13, 14, 15, 17, 18, 19, 25, 26, 27]);
        $role4 ->syncPermissions([9, 10, 11, 13, 14, 15, 17, 18, 19]);
        $role5 ->syncPermissions([10, 11, 13, 14, 15, 17, 18, 19]);

    }
}
