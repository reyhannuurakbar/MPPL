<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pesanan;
use App\RestaurantPackage;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //buka halaman pesen
    public function Pesen(){

      $restaurant_packages = RestaurantPackage::all();
      return view('pages.booking',[
           'restaurant_packages'=> $restaurant_packages
      ]);
    }
    // mesen meja
    public function add(Request $request){
      $this->validate($request, [
        'nama' => 'required|max:255',
        'restoran' => 'required',
        'no_hp' => 'required|max:13',
        'jam' => 'required',
        'jumlah' => 'required',
        'tanggal' => 'required|date',
        'note' => 'required'
      ]);
      $pesanan = new Pesanan;
      //$pesanan->timestamps = false;
      //$user_id = Auth::user()->id;
      //$user_id = input('id_user');
      $user_id = Auth::user()->id;
      $pesanan->id_user = $user_id;
      $pesanan->nama = $request->input('nama');
      $pesanan->id_restoran = $request->input('restoran');
      $pesanan->no_hp = $request->input('no_hp');
      $pesanan->jam = $request->input('jam');
      $pesanan->jumlah = $request->input('jumlah');
      $pesanan->tanggal = $request->input('tanggal');
      $pesanan->note = $request->input('note');
      $pesanan->status = 'Pending';
      // $statuspemesanan = input('statuspemesanan');
      $pesanan->save();
      return redirect('/pay');
    }
}
