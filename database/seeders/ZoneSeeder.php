<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zone1 = new Zone();
        $zone1 -> name = 'Urbano';
        $zone1 -> save();

        $zone2 = new Zone();
        $zone2 -> name = 'Rural';
        $zone2 -> save();
    }
}
