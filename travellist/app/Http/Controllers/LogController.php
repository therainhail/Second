<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LogController extends Controller
{
    public function sign_in(Request $req) {
		
			
    	$email = User::where('mail', $req->input('mail'))->first();
         $password = User::where('password', $req->input('password'))->first();
         if($email && $password) {
         	return 'Вы ввели верные данные';
         }else{
         	return 'Вы ввели неверные данные';
         }
		//return redirect()->route('home');
	}
}
