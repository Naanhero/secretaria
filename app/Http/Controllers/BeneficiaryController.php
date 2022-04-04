<?php

namespace App\Http\Controllers;

use App\Http\Requests\Beneficiary\CreateBeneficiaryRequest;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\Condition;
use App\Models\EthnicGroup;
use App\Models\Gender;
use App\Models\Program;
use App\Models\Stratum;
use App\Models\Zone;
use App\Models\Type;
use App\Models\User;
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
        $programs = Program::all();
       //$users = User::all();

        return view('modules.beneficiaries.create',compact('cities','genders','ethnicGroups','zones','stratums','conditions','types','programs'));
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
        $programs = Program::all();
        //$users = User::all();

        return view('modules.beneficiaries.edit',compact('beneficiary','cities','genders','ethnicGroups','zones','stratums','conditions','types','programs'));
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

    public function beneficiaryInstructor(beneficiary $beneficiary)
    {
        $users = User::where('position_id',3)->where('active',1)->get();
        return view('modules.beneficiaries.instructor-beneficiary',compact('beneficiary','users'));
    }

    public function  addInstructor(Request $request)
    {
        $beneficiary = Beneficiary::find($request->beneficiary_id);

        foreach ($beneficiary->users as $user) {
            if ($user->id == $request->user_id) return back();
        }
        $beneficiary->users()->attach($request->user_id);
        return back();
    }

    public function removeInstructor(Beneficiary $beneficiary, User $user)
    {
        $beneficiary->users()->detach($user->id);
        return back();
    }

}
