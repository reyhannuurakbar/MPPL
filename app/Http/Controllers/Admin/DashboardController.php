<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RestaurantPackage;
use App\Pesanan;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	return view('pages.admin.dashboard',[
            'restaurant_package'=>RestaurantPackage::count(),
            'pesanan'=>Pesanan::count(),
            'transaksi_pending'=>Pesanan::where('status','Pending')->count(),
            'transaksi_deny'=>Pesanan::where('status','Deny')->count(),
            'transaksi_success'=>Pesanan::where('status','Accepted')->count(),
        ]);
    }
}
