<?php

namespace App\Http\Controllers\Stats;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\EthnicGroup;
use App\Models\Gender;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeneficiaryStatController extends Controller
{
    public function beneficiariesForEthnicGroups()
    {
        $date = now();
        $ethnicGroups = EthnicGroup::withCount(['beneficiaries' => function($q) use ($date){
            $q->where('created_at','<=',$date);
        }])->get();
        
        return view('modules.stats.beneficiaries.ethnic-groups',['data'=>$ethnicGroups]);
    }

    public function beneficiariesForCities()
    {
        $date = now();
        $beneficiaries = City::withCount(['beneficiaries' => function($q) use ($date){
            $q->where('created_at','<=',$date);
        }])->get();

        return view('modules.stats.beneficiaries.cities',['data'=>$beneficiaries]);

    }

    public function beneficiariesForGenders()
    {
        $date = now();
        $genders = Gender::withCount(['beneficiaries' => function($q) use ($date){
            $q->where('created_at','<=',$date);
        }])->get();
        
        $genders->each( function($gender) use ($genders){
            $gender['percentage'] = number_format(($gender->beneficiaries_count / $genders->sum('beneficiaries_count') )*100,2);
        });
        
        return view('modules.stats.beneficiaries.genders',['data'=>$genders]);
    }
}
