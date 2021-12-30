<?php

namespace App\Http\Controllers\Stats;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;

class UserStatController extends Controller
{
    public function userTypes()
    {
        $positions = Position::withCount('users')->get();

        $data = array();

        $positions->each( function($position,$key) use (&$data) {
            $data[$key] = ['name' => $position->name,'y' => $position->users_count];
        });

        return view('modules.stats.users.user-types',['data' => json_encode($data)]);
    }
}
