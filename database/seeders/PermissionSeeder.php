<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['id'=>1,'guard_name'=>'web','name'=>'areas.create']); //areas (recurso) create (accion)
        Permission::create(['id'=>2,'guard_name'=>'web','name'=>'areas.read']); //areas (recurso) create (accion)
        Permission::create(['id'=>3,'guard_name'=>'web','name'=>'areas.update']); //areas (recurso) create (accion)
        Permission::create(['id'=>4,'guard_name'=>'web','name'=>'areas.delete']);
        Permission::create(['id'=>5,'guard_name'=>'web','name'=>'programs.create']);
        Permission::create(['id'=>6,'guard_name'=>'web','name'=>'programs.read']);
        Permission::create(['id'=>7,'guard_name'=>'web','name'=>'programs.update']);
        Permission::create(['id'=>8,'guard_name'=>'web','name'=>'programs.delete']);
        Permission::create(['id'=>9,'guard_name'=>'web','name'=>'activities.create']);
        Permission::create(['id'=>10,'guard_name'=>'web','name'=>'activities.read']);
        Permission::create(['id'=>11,'guard_name'=>'web','name'=>'activities.update']);
        Permission::create(['id'=>12,'guard_name'=>'web','name'=>'activities.delete']);
        Permission::create(['id'=>13,'guard_name'=>'web','name'=>'instructors.create']);
        Permission::create(['id'=>14,'guard_name'=>'web','name'=>'instructors.read']);
        Permission::create(['id'=>15,'guard_name'=>'web','name'=>'instructors.update']);
        Permission::create(['id'=>16,'guard_name'=>'web','name'=>'instructors.delete']);
        Permission::create(['id'=>17,'guard_name'=>'web','name'=>'beneficiaries.create']);
        Permission::create(['id'=>18,'guard_name'=>'web','name'=>'beneficiaries.read']);
        Permission::create(['id'=>19,'guard_name'=>'web','name'=>'beneficiaries.update']);
        Permission::create(['id'=>20,'guard_name'=>'web','name'=>'beneficiaries.delete']);
        Permission::create(['id'=>21,'guard_name'=>'web','name'=>'users.create']);
        Permission::create(['id'=>22,'guard_name'=>'web','name'=>'users.read']);
        Permission::create(['id'=>23,'guard_name'=>'web','name'=>'users.update']);
        Permission::create(['id'=>24,'guard_name'=>'web','name'=>'users.delete']);
        Permission::create(['id'=>25,'guard_name'=>'web','name'=>'stats.beneficiaries.group_ethnic.read']);
        Permission::create(['id'=>26,'guard_name'=>'web','name'=>'stats.beneficiaries.cities.read']);
        Permission::create(['id'=>27,'guard_name'=>'web','name'=>'stats.beneficiaries.gender.read']);
        
    }
}
