<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return $cities;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //FORMA 1
        $city1 = new City();
        $city1->name = $request->name;
        $city1->save();

        //FORMA 2
        City::create($request->all());
    }

    public function show($city)
    {
        $city = City::find($city);
        // $city = City::where('id','=',$city)->get();
        return $city;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $city)
    {
        $city = City::find($city);
        $city->update($request->all());
        return $city;
    }

    public function destroy($city)
    {
        $city = City::find($city);
        $city->delete();
        return "se elimino la ciudad";
    }
}
