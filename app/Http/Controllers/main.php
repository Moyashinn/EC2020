<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\Users;

class main extends Controller
{
    
	public function __construct(){
		$this->middleware('logi');
	}
	
	public function basket(){
		$token = session('token');
		$name = DB::table('user')->where('token', $token)->value('name');
		$basket = DB::table('baskets')->where('name', $name);
		return view('basket', ['basket' => $basket]);
	}
	
	public function product($id){
		$product = DB::table('products')->where('id', $id)->get();
		return view('product', ['product' => $product]);
	}
	
	public function store(){
	}
}
