<?php

namespace App\Http\Controllers;

use App\Models\Assistance;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class AssistanceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:assistance.read'])->only(['index']);
        $this->middleware(['can:assistance.create'])->only(['create','store']);
        $this->middleware(['can:assistance.update'])->only(['edit','update']);
        $this->middleware(['can:assistance.delete'])->only(['destroy']);
    }
    public function edit(Assistance $assistance)
    {
        $beneficiaries = Beneficiary::all();
        return view('modules.assistance.edit',compact('assistance','beneficiaries'));
    }

    public function store(Request $request)
    {
        $assistance = Assistance::find($request->assistance_id);
        foreach ($assistance->beneficiaries as $beneficiary) {
            if ($beneficiary->id == $request->beneficiary_id) return back()->with('warning','Ya tiene asistencia');
        }
        $assistance->beneficiaries()->attach($request->beneficiary_id);//relacion de conexion entre los modelos

        return back()->with('success','Agregado');
    }

    public function removeBeneficiary(Request $request)
    {
        $assistance = Assistance::find($request->assistance_id);
        $assistance->beneficiaries()->detach($request->beneficiary_id);

        return back()->with('success','Removido');

    }
}
