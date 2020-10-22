<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
	public function sign_up(Request $req) {
		
		$register = new User();
		$register->login = $req->input('login');
		$register->login2 = $req->input('login2');
		$register->mail = $req->input('mail');
		$register->password = $req->input('password');

		$register->save();
		return redirect()->route('home');
	}
}