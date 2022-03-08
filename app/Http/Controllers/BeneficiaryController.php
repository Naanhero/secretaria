<?php

namespace App\Http\Controllers;

use App\Http\Requests\Beneficiary\CreateBeneficiaryRequest;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\Condition;
use App\Models\EthnicGroup;
use App\Models\Gender;
use App\Models\Stratum;
use App\Models\Zone;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class BeneficiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:beneficiaries.read'])->only(['index']);
        $this->middleware(['can:beneficiaries.create'])->only(['create','store']);
        $this->middleware(['can:beneficiaries.update'])->only(['edit','update']);
        $this->middleware(['can:beneficiaries.delete'])->only(['destroy']);
    }

    public function index()
    {
        $beneficiaries = Beneficiary::all();

        return view('modules.beneficiaries.index',compact('beneficiaries'));
    }

    public function create()
    {
        $cities = City::all();
        $genders = Gender::all();
        $ethnicGroups = EthnicGroup::all();
        $zones = Zone::all();
        $stratums = Stratum::all();
        $conditions = Condition::all();
        $types = Type::all();

        return view('modules.beneficiaries.create',compact('cities','genders','ethnicGroups','zones','stratums','conditions','types'));
    }

    public function store(CreateBeneficiaryRequest $request)
    {
        Beneficiary::create($request->all());

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario Creado correctamente');
    }

    public function edit(Beneficiary $beneficiary)
    {
        $cities = City::all();
        $genders = Gender::all();
        $ethnicGroups = EthnicGroup::all();
        $zones = Zone::all();
        $stratums = Stratum::all();
        $conditions = Condition::all();
        $types = Type::all();

        return view('modules.beneficiaries.edit',compact('beneficiary','cities','genders','ethnicGroups','zones','stratums','conditions','types'));
    }

    public function update(CreateBeneficiaryRequest $request, Beneficiary $beneficiary)
    {
        $beneficiary->update($request->all());

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario actualizado correctamente');
    }

    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario eliminado correctamente');
    }
}
