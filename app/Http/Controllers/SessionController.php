<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
	public function index() {
    	return view('login');
    }

    public function store(Request $request) {

    	if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended(route('admin_path'));
        }

        return redirect()->back()->with('errors', 'Wrong email or password');
    }

    public function delete(){
    	Auth::logout();
        return redirect()->back();
    }
}
