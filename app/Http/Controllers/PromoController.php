<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index(Request $request)
    {
    	return view('pages.promo');
    }
}
