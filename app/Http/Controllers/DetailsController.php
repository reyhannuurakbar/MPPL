<?php

namespace App\Http\Controllers;

use App\RestaurantPackage;
use Illuminate\Http\Request;


class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = RestaurantPackage::all()
                ->where('slug',$slug);

        return view('pages.details',[
           'item' => $item
        ]);
    }
}
