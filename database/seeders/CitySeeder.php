<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city1 = new City();
        $city1->name = "Pereira";
        $city1->save();

        $city2 = new City();
        $city2->name = "Dosquebradas";
        $city2->save();

        $city3 = new City();
        $city3->name = "Santa Rosa";
        $city3->save();
        
        $city4 = new City();
        $city4->name = "La Viriginia";
        $city4->save();
        
        $city5 = new City();
        $city5->name = "Marsella";
        $city5->save();
        
        $city6 = new City();
        $city6->name = "Apia";
        $city6->save();
        
        $city7 = new City();
        $city7->name = "Belen de Umbria";
        $city7->save();
        
        $city8 = new City();
        $city8->name = "Guatica";
        $city8->save();
        
        $city9 = new City();
        $city9->name = "Quinchia";
        $city9->save();
        
        $city10 = new City();
        $city10->name = "Balboa";
        $city10->save();
        
        $city11 = new City();
        $city11->name = "La Celia";
        $city11->save();
        
        $city12 = new City();
        $city12->name = "Santuario";
        $city12->save();
        
        $city13 = new City();
        $city13->name = "Mistrato";
        $city13->save();
        
        $city14 = new City();
        $city14->name = "Pueblo Rico";
        $city14->save();
        
    }
}
