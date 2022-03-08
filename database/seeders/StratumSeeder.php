<?php

namespace Database\Seeders;

use App\Models\Stratum;
use Illuminate\Database\Seeder;

class StratumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stratum1 = new Stratum();
        $stratum1 -> name = '1';
        $stratum1 -> save();

        $stratum2 = new Stratum();
        $stratum2 -> name = '2';
        $stratum2 -> save();

        $stratum3 = new Stratum();
        $stratum3 -> name = '3';
        $stratum3 -> save();

        $stratum4 = new Stratum();
        $stratum4 -> name = '4';
        $stratum4 -> save();

        $stratum5 = new Stratum();
        $stratum5 -> name = '5';
        $stratum5 -> save();

        $stratum6 = new Stratum();
        $stratum6 -> name = '6';
        $stratum6 -> save();
        
    }
}
