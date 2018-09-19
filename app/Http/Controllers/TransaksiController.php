<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
  public function index()
  {
     $transaksi = \App\Transaksi::join('users','transaksis.user_id','=','users.id')->
     join('bukus','transaksis.buku_id','=','bukus.id')->get();

    return view('admin.transaksi.index', compact('transaksi'));
  }

  public function create()
  {
    $buku = \App\Buku::get();
    return view('admin.transaksi.create',compact('buku'));
  }

  public function store(Request $request)
  {
    $jumlah = $request->jumlah;
    $buku_id = $request->buku_id;

    $transaksi = new \App\Transaksi;
    $transaksi->jumlah = $jumlah;
    $transaksi->user_id =\Auth::user()->id;
    $transaksi->buku_id = $buku_id;
    $transaksi->save();

    return redirect('admin/transaksi');
  }

  public function edit($id)
  {
      $buku = \App\Transaksi::find($id);
      return view('admin.transaksi.update', compact('transaksi'));
  }

  public function update(Request $request, $id)
  {

    $jumlah = $request->jumlah;
    $buku_id = $request->buku_id;

    $transaksi = \App\Transaksi::find($id);
    $transaksi->jumlah = $jumlah;
    $transaksi->user_id =\Auth::user()->id;
    $transaksi->buku_id = $buku_id;
    $transaksi->save();

    return redirect('admin/transaksi');
  }

  public function destroy($id)
  {
    $transaksi = \App\Transaksi::find($id);
    $transaksi->delete();

    return redirect('/admin/transaksi');
  }
}
