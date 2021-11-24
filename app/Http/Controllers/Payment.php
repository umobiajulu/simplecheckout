<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Payment extends Controller
{
    //
    public function index()
    {
    	return view('index');
    }

    //
    public function initialize(Request $request)
    {
		$response = Http::withHeaders([
		    'Authorization' => 'test_pk_sample-public-key-1'
		])->post('https://test-api.squadinc.co/payment/initiate', [
		    'name' => $request->name,
		    'email' => $request->email,
		    'amount' => floatval($request->amount),
		    'currency' => 'NGN'
		]);

		dd($response->body());
    }
}
