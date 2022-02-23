<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:instructors.read'])->only(['index']);
        $this->middleware(['can:instructors.create'])->only(['create','store']);
        $this->middleware(['can:instructors.update'])->only(['edit','update']);
        $this->middleware(['can:instructors.delete'])->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = User::where('position_id',3)->get();
        return view('modules.instructors.index',compact('instructors'));
    }

    public function edit(User $instructor)
    {
        return view('modules.instructors.instructor-group',compact('instructor'));
    }

}
