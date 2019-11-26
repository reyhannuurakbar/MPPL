<?php

namespace App\Http\Controllers;

use App\RestaurantPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = RestaurantPackage::all();
        return view('pages.home',[
            'items'=>$items
        ]);
    }
}
