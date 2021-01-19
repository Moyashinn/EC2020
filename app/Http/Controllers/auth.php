<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class auth extends Controller
{
	public function __construct(Request $r){
		$vali_data = $r->validate([
			'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
	}
    public function register(Request $r){
		$user = new User;
		if(User('name', $r->name)->doesntExist($r->name)){
			$user->user_name = $r->name;
			$user->email = $r->email;
			$user->password = Hash:make($r->password);
			$user->save();
		}
		return view('test');
	}
	public function login(Request $r){
		if(User('name', $r->name)->exist()){
			$user = User::where('name', $r->name)->first();
			
			if(hash::check($r->password, $user->password){
				$token = Str::rondom(40);
				session(['token' => $token]);
				$user = new User;
				$user->token = $token;
				$user->save();
			}
		}else{
			return view('/login');
		}
		return view('test');
	}
}
