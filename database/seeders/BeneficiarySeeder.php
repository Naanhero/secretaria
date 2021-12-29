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
        Beneficiary::create(['name' => 'Alba','last_name'=>'garcia','second_last_name'=>'cortes','phone'=>'1234567890','address'=>'Parque Olaya Calle 22','age'=>42,'gender_id'=>2,'city_id'=>1,'ethnic_group_id'=>3,'email'=>'alba@gmail.com','active'=>1]);
    }
}
