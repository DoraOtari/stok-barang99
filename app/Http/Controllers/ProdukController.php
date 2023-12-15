<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('page.produk.stok',['produk' => Produk::latest()->get()]);
    }

    public function masuk()
    {
        return view('page.produk.masuk');
    }

    public function store(Request $request)
    {
        Produk::create([
            'nama' => $request->nama,
            'supplier' => $request->supplier,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ]);

        return redirect()->back()->with('pesan', 'berhasil tambah produk');
    }

    public function show(Produk $produk)
    {
        //
    }

    public function edit(Produk $produk)
    {
        //
    }

    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
