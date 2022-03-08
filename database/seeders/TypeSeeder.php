<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type1 = new Type();
        $type1 -> name = 'REGISTRO CIVIL';
        $type1 -> save();

        $type2 = new Type();
        $type2 -> name = 'TARJETA IDENTIDAD';
        $type2 -> save();

        $type3 = new Type();
        $type3 -> name = 'CÉDULA CIUDADANIA';
        $type3 -> save();

        $type4 = new Type();
        $type4 -> name = 'CÉDULA EXTRANJERIA';
        $type4 -> save();

        $type5 = new Type();
        $type5 -> name = 'SIN DOCUMENTO';
        $type5 -> save();

        $type6 = new Type();
        $type6 -> name = 'PASAPORTE';
        $type6 -> save();
    }
}
