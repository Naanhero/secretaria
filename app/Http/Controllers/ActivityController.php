<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity\CreateActivityRequest;
use App\Models\Activity;
use App\Models\Program;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('modules.activities.index', compact('activities'));
    }

    public function create ()
    {
        $programs = Program::all();
        return view('modules.activities.create',compact('programs'));
    }

    public function store(CreateActivityRequest $request)
    {
        $activity = Activity::create($request->all());
        $activity->assistance()->create();
        
        return redirect()->route('activities.index')->with('success','Actividad creada correctamente');
    }

    public function edit (Activity $activity)
    {
        $programs = Program::all();
        return view('modules.activities.edit',compact('activity','programs'));
    }

    public function update(CreateActivityRequest $request , Activity $activity)
    {
        $activity->update($request->all());

        return redirect()->route('activities.index')->with('success','Actividad actualizada correctamente');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('activities.index')->with('success','Actividad eliminada correctamente');
    }

}
