<?php

namespace App\Exports;

use App\Models\Beneficiary;
use Maatwebsite\Excel\Concerns\FromCollection;

class BeneficiariesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Beneficiary::all();
    }

    public function headings(): array
    {
        return [
            'id',
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
