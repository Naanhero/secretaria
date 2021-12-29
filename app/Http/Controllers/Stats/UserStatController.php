<?php

namespace App\Http\Controllers\Stats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserStatController extends Controller
{
    public function userTypes()
    {
        return view('modules.stats.users.user-types');
    }
}
