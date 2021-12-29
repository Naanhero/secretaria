<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create(['name' => 'Adulto Mayor' , 'area_id' => 1 , 'start_date' => now() , 'end_date' => now()->addDay() , 'active' => 1 ,'description' => 'Es un programa para adultos mayores' ]);
    }
}
