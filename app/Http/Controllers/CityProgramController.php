<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Program;
use Illuminate\Http\Request;

class CityProgramController extends Controller
{
    public function edit(Program $program) //la variable busca en el modelo
    {
        $cities = City::all();
        return view('modules.city_program.edit', compact('program','cities'));//voy a retornar el programa y las ciudades
    }
    public function store(Request $request)//la peticion esta alojada en $request
    {
        $program = Program::find($request->program_id);//a la request le vamosa leer la propiedad program_id
        $program->cities()->attach($request->city_id);//va a crear un vinculo entre program y ciudad
        return back();
    }

    public function removeCity(Request $request)
    {   
        $program = Program::find($request->program_id);//a la request le vamosa leer la propiedad program_id
        $program->cities()->detach($request->city_id);//va a crear un vinculo entre program y ciudad
        return back();
    }
}
