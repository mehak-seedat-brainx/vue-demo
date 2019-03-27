<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function home() {
        $users = User::all();
        return view('home', compact('users'));
    }

    public function index() {
        $users = User::all();
        return view('welcome', compact('users'));    }

    public function create(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt("123456");
        $user->save();
        return response()->json(User::all());
    }

    public function signin(Request $request) {
            $user = User::where('email', $request->email)->first();
        if (Hash::check($request->password, $user->password)) {
            return response()->json($user);
        }
        else {
            return response()->json(['errors' => ['message' => 'Incorrect password', 'error_code' => '401']], 404);

        }
    }
}
