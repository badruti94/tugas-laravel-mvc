<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
    	return view('form');
    }

    public function welcome(Request $request)
    {
    	$data = [
    		'nama' => $request->first_name . ' ' . $request->last_name
    	];
    	return view('welcome', $data);
    }
}
