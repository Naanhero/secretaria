<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ActivitiesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('activities')
                            ->select('activities.name','programs.name as program','activities.created_at')
                            ->join('programs','activities.program_id','=','programs.id')
                            ->get();
        
    }

    public function headings(): array
    {
        return [
            'ACTIVIDAD',
            'PROGRAMA',
            'Fecha de creado'
        ];
    }
}
