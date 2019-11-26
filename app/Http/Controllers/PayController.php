<?php

namespace App\Http\Controllers;

use Auth;
use App\Pesanan;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index(){
        $pesanan = Pesanan::all();
        return view('pages.pembayaran', ['pesanan' => $pesanan]);
      }
}
