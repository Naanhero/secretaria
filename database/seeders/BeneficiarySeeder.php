<?php

namespace Database\Seeders;

use App\Models\Beneficiary;
use Illuminate\Database\Seeder;

class BeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beneficiary::create([
            'first_name' => 'Alba',
            'second_name' => 'Lucia',
            'last_name'=>'garcia',
            'second_last_name'=>'cortes',
            'age'=>now(),
            'type_id'=> 2,
            'identification'=> '111112234',
            'phone'=>'1234567890',
            'condition_id'=> 1,
            'gender_id'=>2,
            'ethnic_group_id'=>3,
            'city_id'=>1,
            'address'=>'Parque Olaya Calle 22',
            'neighborhood'=> 'Centro',
            'zone_id'=> 2,
            'stratum_id'=> 3,
            'email'=>'alb@gmail.com',
            'group'=>'Los bloques',
            'program_id'=>1,
            'active'=>1
        ]);
    }
}
