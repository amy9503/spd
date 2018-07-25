<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }

    public function login() {
    	return view('frontend.login');
    }

    public function register() {
    	return view('frontend.register');
    }

    public function registerPost(Request $request) {
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'icno' => 'required|unique:users',
    		'password' => 'required',
    	], [
    		'name.required' => 'Sila masukkkan nama anda.',
    		'email.required' => 'Sila masukkan emel anda !',
            'email.email' => 'Email anda tidak sah !',
    		'email.unique' => 'Email sudah wujud !',
    	]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->icno = $request->icno;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success','Successfully registered!');
    }
}
