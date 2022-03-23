<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Models\Gender;
use App\Models\Position;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['can:users.read'])->only(['index']);
        $this->middleware(['can:users.create'])->only(['create','store']);
        $this->middleware(['can:users.update'])->only(['edit','update']);
        $this->middleware(['can:users.delete'])->only(['destroy']);

    }

    public function index ()
    {
        $users = User::all();
        return view('modules.users.index',compact('users'));
    }

    public function create ()
    {
        $genders = Gender::all();
        $positions = Position::all();
        $types = Type::all();

        return view('modules.users.create',compact('genders','positions','types'));
    }

    public function store (CreateUserRequest $request)
    {   
        $user = $request->all();
        if($request->password == ''){
            $user['password'] = Hash::make('12345678');
        }else{
            $user['password'] = Hash::make($user['password']);
        }

        User::create($user);

        return redirect()->route('users.index')->with('success','Usuario Creado correctamente');

    }

    public function edit (User $user)
    {
        $genders = Gender::all();
        $positions = Position::all();

        return view('modules.users.edit',compact('user','genders','positions'));
    }

    public function update(CreateUserRequest $request , User $user)
    {
        $newData = $request->all();
        if($request->password == ''){
            $newData = $request->except(['password']);
        }else{
            $newData = $request->all();
            $newData['password'] = Hash::make($newData['password']);
        }

        $user->update($newData);

        return redirect()->route('users.index')->with('success','Usuario actualizado correctamente');

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success','Usuario eliminado correctamente');
    }
 

}
