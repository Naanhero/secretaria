<?php

namespace App\Http\Controllers;

use App\Http\Requests\Beneficiary\CreateBeneficiaryRequest;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\EthnicGroup;
use App\Models\Gender;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiaries = Beneficiary::all();

        return view('modules.beneficiaries.index',compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $genders = Gender::all();
        $ethnicGroups = EthnicGroup::all();

        return view('modules.beneficiaries.create',compact('cities','genders','ethnicGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBeneficiaryRequest $request)
    {
        Beneficiary::create($request->all());

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficiary $beneficiary)
    {
        $cities = City::all();
        $genders = Gender::all();
        $ethnicGroups = EthnicGroup::all();

        return view('modules.beneficiaries.edit',compact('beneficiary','cities','genders','ethnicGroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBeneficiaryRequest $request, Beneficiary $beneficiary)
    {
        $beneficiary->update($request->all());

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();

        return redirect()->route('beneficiaries.index')->with('success','Beneficiario eliminado correctamente');
    }
}
