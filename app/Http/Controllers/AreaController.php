<?php

namespace App\Http\Controllers;

use App\Http\Requests\Area\CreateAreaRequest;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['areas.read'])->only(['index']);
        $this->middleware(['areas.create'])->only(['create','store']);
        $this->middleware(['areas.update'])->only(['edit','update']);
        $this->middleware(['areas.delete'])->only(['destroy']);
    }
    public function index()
    {
        $areas = Area::all();
        return view('modules.areas.index', compact('areas'));
    }

    public function create ()
    {
        return view('modules.areas.create');
    }

    public function store (CreateAreaRequest $request)
    {
        Area::create($request->all());
        
        return redirect()->route('areas.index')->with('success','Area Creada correctamente');
    }

    public function edit (Area $area)
    {
        return view('modules.areas.edit',compact('area'));
    }

    public function update(CreateAreaRequest $request , Area $area)
    {
        $area->update($request->all());

        return redirect()->route('areas.index')->with('success','Area actualizada correctamente');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('areas.index')->with('success','Area eliminada correctamente');
    }
}
