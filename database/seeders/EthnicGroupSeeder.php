<?php

namespace Database\Seeders;

use App\Models\EthnicGroup;
use Illuminate\Database\Seeder;

class EthnicGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EthnicGroup::create(['name' => 'Ninguno']);
        EthnicGroup::create(['name' => 'Afrocolombiano']);
        EthnicGroup::create(['name' => 'Indigena']);
        EthnicGroup::create(['name' => 'Mestizo']);
    }
}
