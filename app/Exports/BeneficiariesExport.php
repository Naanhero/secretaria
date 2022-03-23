<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BeneficiariesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $beneficiaries = DB::table('beneficiaries')
                    ->select(
                        'beneficiaries.first_name',
                        'beneficiaries.last_name',
                        'beneficiaries.second_last_name',
                        'beneficiaries.phone',
                        'beneficiaries.address',
                        'beneficiaries.age',
                        'genders.name as gender',
                        'cities.name as city',
                        'ethnic_groups.name as ethnic_group',
                        'beneficiaries.email',
                        'beneficiaries.active',
                        'beneficiaries.created_at',
                        )
                    ->join('genders','beneficiaries.gender_id','=','genders.id')
                    ->join('cities','beneficiaries.city_id','=','cities.id')
                    ->join('ethnic_groups','beneficiaries.ethnic_group_id','=','ethnic_groups.id')
                    ->get();
        $beneficiaries->each( function($beneficiary){
            if($beneficiary->active == 1) $beneficiary->active = "SI";
            if($beneficiary->active == 0) $beneficiary->active = "NO";
        });
        return $beneficiaries;
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Segundo apellido',
            'telefono',
            'dirección',
            'Edad',
            'Género',
            'Ciudad',
            'Grupo etnico',
            'Email',
            'estado',
            'Fecha de creado'
        ];
    }
}
