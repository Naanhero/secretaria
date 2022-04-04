<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InstructorsExport implements FromCollection, WithHeadings
{
    use Exportable;
    public $userId;

    public function forUser($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $beneficiaries = DB::table('beneficiary_user')
                            ->select('beneficiaries.first_name','beneficiaries.second_name' , 'beneficiaries.last_name', 'beneficiaries.second_last_name' , 'beneficiaries.identification' ,'users.name as instructor_name', 'users.last_name as instructor_last_name' )
                            ->join('users','beneficiary_user.user_id','=','users.id')
                            ->join('beneficiaries','beneficiary_user.beneficiary_id','=','beneficiaries.id')
                            ->where('beneficiary_user.user_id',$this->userId)
                            ->get();
        return $beneficiaries;
    }

    public function headings(): array
    {
        return [
            'Primer Nombre',
            'Segundo Apellido',
            'Primer Apellido',
            'Segundo Apellido',
            'Identificación',
            'Nombre Instructor',
            'Apellido Instructor'
        ];
    }
}
