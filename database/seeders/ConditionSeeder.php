<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    public function run()
    {
        $condition1 = new Condition();
        $condition1->name = "Ninguna";
        $condition1->save();

        $condition2 = new Condition();
        $condition2->name = "Victima C.A.I*";
        $condition2->save();

        $condition3 = new Condition();
        $condition3->name = "Mujer cabeza de hogar";
        $condition3->save();

        $condition4 = new Condition();
        $condition4->name = "Migrante";
        $condition4->save();

        $condition5 = new Condition();
        $condition5->name = "Discapacidad";
        $condition5->save();
    }
}
