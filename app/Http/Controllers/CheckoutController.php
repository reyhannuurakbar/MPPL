<?php

namespace App\Http\Controllers;

use Auth;
use App\Pesanan;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
         // ini buat total pesanan berdasarkan id
        $pesanan = Pesanan::where('id_user', $user_id)->get();
    	return view('pages.chekout',['pesanan' => $pesanan]);
    }  
}
