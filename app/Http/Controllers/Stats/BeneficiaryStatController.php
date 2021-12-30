<?php

namespace App\Http\Controllers\Stats;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\EthnicGroup;
use Illuminate\Http\Request;

class BeneficiaryStatController extends Controller
{
    public function beneficiariesForEthnicGroups()
    {
        $ethnicGroups = EthnicGroup::withCount('beneficiaries')->get();
        
        return view('modules.stats.beneficiaries.ethnic-groups');
    }
}
