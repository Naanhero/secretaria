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
        $city1->name = "Apia";
        $city1->save();

        $city2 = new City();
        $city2->name = "Balboa";
        $city2->save();

        $city3 = new City();
        $city3->name = "Belen de Umbria";
        $city3->save();
        
        $city4 = new City();
        $city4->name = "Dosquebradas";
        $city4->save();
        
        $city5 = new City();
        $city5->name = "Guatica";
        $city5->save();
        
        $city6 = new City();
        $city6->name = "La Celia";
        $city6->save();
        
        $city7 = new City();
        $city7->name = "La Virginia";
        $city7->save();
        
        $city8 = new City();
        $city8->name = "Marsella";
        $city8->save();
        
        $city9 = new City();
        $city9->name = "Mistrato";
        $city9->save();
        
        $city10 = new City();
        $city10->name = "Pereira";
        $city10->save();
        
        $city11 = new City();
        $city11->name = "Pueblo Rico";
        $city11->save();
        
        $city12 = new City();
        $city12->name = "Quinchia";
        $city12->save();
        
        $city13 = new City();
        $city13->name = "Santa Rosa";
        $city13->save();
        
        $city14 = new City();
        $city14->name = "Santuario";
        $city14->save();
        
    }
}
