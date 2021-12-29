<?php

namespace App\Http\Controllers;

use App\Http\Requests\Program\CreateProgramRequest;
use App\Models\Area;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index ()
    {
        $programs = Program::all();
        return view('modules.programs.index',compact('programs'));
    }

    public function create ()
    {
        $areas = Area::all();
        return view('modules.programs.create',compact('areas'));
    }

    public function store(CreateProgramRequest $request)
    {
        Program::create($request->all());

        return redirect()->route('programs.index')->with('success','Programa creado correctamente');
    }

    public function edit (Program $program)
    {
        $areas = Area::all();
        $users = User::all();
        return view('modules.programs.edit',compact('program','areas','users'));
    }

    public function update(CreateProgramRequest $request , Program $program)
    {
        $program->update($request->all());

        return redirect()->route('programs.index')->with('success','Programa actualizado correctamente');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('programs.index')->with('success','Programa eliminado correctamente');
    }

    public function instructorProgram(Program $program)
    {
        $users = User::where('position_id',3)->where('active',1)->get();

        return view('modules.programs.instructor-program',compact('program','users'));
    }

    public function addInstructor(Request $request)
    { 
        $program = Program::find($request->program_id);

        foreach ($program->users as $user) {
            if ($user->id == $request->user_id) return back();
        }

        $program->users()->attach($request->user_id);

        return back();
    }

    public function removeInstructor(Program $program , User $user)
    {
        $program->users()->detach($user->id);

        return back();
    }
}
