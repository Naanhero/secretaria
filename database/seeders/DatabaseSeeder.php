<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $this->call(CitySeeder::class);
         $this->call(GenderSeeder::class);
         $this->call(PositionSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(EthnicGroupSeeder::class);
         $this->call(AreaSeeder::class);
         $this->call(ProgramSeeder::class);
         $this->call(ActivitySeeder::class);
         $this->call(BeneficiarySeeder::class);
    }
}
