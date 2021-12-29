<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = Activity::create(['name' => 'Partido de Futbol','start_date' => now() , 'end_date' => now()->addDay() , 'program_id' => 1]);
        $activity->assistance()->create();
    }
}
