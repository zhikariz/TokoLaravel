<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
  public function index()
  {
     $buku = \App\Buku::get();

    return view('admin.buku.index', compact('buku'));
  }

  public function create()
  {
    return view('admin.buku.create');
  }

  public function store(Request $request)
  {
    $nama_buku = $request->nama_buku;
    $pengarang = $request->pengarang;
    $penerbit = $request->penerbit;

    $buku = new \App\Buku;
    $buku->nama_buku = $nama_buku;
    $buku->pengarang = $pengarang;
    $buku->penerbit = $penerbit;
    $buku->save();

    return redirect('admin/buku');
  }

  public function edit($id)
  {
      $buku = \App\Buku::find($id);
      return view('admin.buku.update', compact('buku'));
  }

  public function update(Request $request, $id)
  {
    $nama_buku = $request->nama_buku;
    $pengarang = $request->pengarang;
    $penerbit = $request->penerbit;

    $buku =  \App\Buku::find($id);
    $buku->nama_buku = $nama_buku;
    $buku->pengarang = $pengarang;
    $buku->penerbit = $penerbit;
    $buku->save();

    return redirect('admin/buku');
  }

  public function destroy($id)
  {
    $buku = \App\Buku::find($id);
    $buku->delete();

    return redirect('/admin/buku');
  }
}
