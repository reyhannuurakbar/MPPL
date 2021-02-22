<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pesanan;
use App\User;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        $User = User::all();
        return view('pages.admin.transaksi.index', ['pesanan' => $pesanan], ['User' => $User]);
    }
    public function accepted($id_pemesanan){
        $data = array(
          'status' => "Accepted"
        );
        $accepted = Pesanan::where('id_pesanan',$id_pemesanan)->update($data);
        $pesanan = Pesanan::all();
        return view('pages.admin.transaksi.index', ['pesanan' => $pesanan]);
      }
      public function deny($id_pemesanan){
        $data = array(
          'status' => "Deny"
        );
        $deny = Pesanan::where('id_pesanan',$id_pemesanan)->update($data);
        $pesanan = Pesanan::all();
        return view('pages.admin.transaksi.index', ['pesanan' => $pesanan]);
      }

    
}
