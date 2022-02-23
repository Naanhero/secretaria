<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
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
            'Email',
            'estado',
            'Cargo',
            'Género',
            'Fecha de creado'
        ];
    }
}
