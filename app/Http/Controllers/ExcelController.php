<?php

namespace App\Http\Controllers;

use App\Exports\ActivitiesExport;
use App\Exports\BeneficiariesExport;
use App\Exports\InstructorsExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function UserExport()
    {       
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function BeneficiaryExport()
    {       
        return Excel::download(new BeneficiariesExport, 'beneficiaries.xlsx');
    }

    public function activityExport()
    {       
        return Excel::download(new ActivitiesExport, 'activities.xlsx');
    }

    public function instructorExport(Request $request)
    {
        return (new InstructorsExport)->forUser($request->instructor)->download('instructors.xlsx');
    }
}
