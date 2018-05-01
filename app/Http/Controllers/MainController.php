<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Country;

class MainController extends Controller
{
    public function index()
    {
    	
    	return view('index');

    }

    public function delivery()
    {
    	return view('delivery');
    }

    public function pay()
    {
    	return view('pay');
    }

    public function return()
    {
    	return view('return');
    }

    public function contacts()
    {
    	return view('contacts');
    }

    public function regions(Request $req)
    {
        return response()->json(Country::find($req->id)->regions()->orderBy('name')->get());
    }
}
