<?php

namespace App\Http\Controllers;
use App\RestaurantPackage;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(Request $request)
    {
    	$items = RestaurantPackage::all();
        return view('pages.paket',[
            'items'=>$items
        ]);
    }
}
