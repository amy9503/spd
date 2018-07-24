<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
