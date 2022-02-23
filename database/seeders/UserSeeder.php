<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "super";
        $user->last_name = "administrador";
        $user->second_last_name = "sistema";
        $user->phone = "1234567890";
        $user->address = "casa de nathalia";
        $user->email = "superadmin@gmail.com";
        $user->password = Hash::make("12345678");
        $user->active = 1;
        $user->position_id = 1;
        $user->gender_id = 1;

        $user->save();
        $user->assignRole(1);

        $instructor = new User();
        $instructor->name = "Camilo";
        $instructor->last_name = "Roman";
        $instructor->second_last_name = "Perez";
        $instructor->phone = "1234567890";
        $instructor->address = "casa de camilo";
        $instructor->email = "camilo@gmail.com";
        $instructor->password = Hash::make("12345678");
        $instructor->active = 1;
        $instructor->position_id = 3;
        $instructor->gender_id = 1;

        $instructor->save();
        $instructor->assignRole(2);

    }
}
