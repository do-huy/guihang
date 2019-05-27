<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpressController extends Controller
{
    public function index()
    {
    	return view('index.index');
    }
}
