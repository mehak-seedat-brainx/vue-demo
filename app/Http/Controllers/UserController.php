<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function  index() {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function create(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt("123456");
        $user->save();
        return response()->json(User::all());
    }
}
