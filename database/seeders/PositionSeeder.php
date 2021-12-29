<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position1 = new Position();
        $position1->name = "super administrador";
        $position1->save();

        $position2 = new Position();
        $position2->name = "administrador";
        $position2->save();

        $position3 = new Position();
        $position3->name = "instructor";
        $position3->save();

        $position4 = new Position();
        $position4->name = "auxiliar";
        $position4->save();
    }
}
