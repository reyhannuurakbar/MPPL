<?php

namespace App\Http\Controllers;

use Auth;
use App\Pesanan;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $last = Pesanan::where('id_user', $user_id)->orderBy('id_pesanan', 'DESC')->first();
        return view('pages.pembayaran',['last' => $last]);
        //$pesanan = Pesanan::find('id_pesanan',$id_pesanan);
        //return view('pages.pembayaran', ['pesanan' => $pesanan]);
      }
}
