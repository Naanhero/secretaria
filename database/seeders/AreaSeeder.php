<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['name' => 'Deportes']);
        Area::create(['name' => 'Recreación']);
        Area::create(['name' => 'Cultura']);
    }
}
