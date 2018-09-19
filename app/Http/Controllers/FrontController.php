<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index()
  {
     $buku = \App\Buku::get();

    return view('index', compact('buku'));
  }

  public function list()
  {
     $buku = \App\Buku::get();
    return view('list',compact('buku'));
  }

  public function logout()
  {
    \Auth::logout();
      return redirect('/');
  }

  public function beli($id)
  {

      $transaksi = new \App\Transaksi;
      $transaksi->jumlah = 1;
      $transaksi->user_id =\Auth::user()->id;
      $transaksi->buku_id = $id;
      $transaksi->save();

      return redirect('/user/mybook');
  }

  public function mybook()
  {
    $buku = \App\Transaksi::where('user_id','=',\Auth::user()->id)->get();
    return view('user/mybook',compact('buku'));
  }
}
