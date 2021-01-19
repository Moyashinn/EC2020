<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;


class index extends Controller
{
    public function index(){
		$products = DB::table('products')->get();
		
		return view('top',['products' => $products]);
	}
}
