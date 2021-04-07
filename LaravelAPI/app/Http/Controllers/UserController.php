<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function users() {
        return User::all();
    }
    function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'age' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }
        $test = User::all()->where('email', $request->email)->first(); 
        if (!$test){
            $user = new User();
            $user-> username = $request->username;
            $user-> email = $request->email;
            $user-> password = Hash::make($request->password);
            $user-> name = $request->name;
            $user-> firstname = $request->firstname;
            $user-> age = $request->age;
            $user->save();
            return response($user,201);
        } else {
            return response("Username or Email already used.",400);
        }
    }
    function auth(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }
        $user = User::all()->where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response("Authentification succesful.",200);
            } else {
                return response("Authentification incorrect.",400);
            }
        }
        else {
            return response("E-mail is incorrect.",400);
        }
    }
}
