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

    public function keluar()
    {
        return view('page.produk.keluar', ['produk' => Produk::all()]);
    }

    public function cari(Request $req)
    {
        $produkCari = Produk::find($req->produk_id);
        return view('page.produk.keluar',[
            'produk'     => Produk::all(),
            'produkCari' => $produkCari
        ]);
    }

    public function jual(Request $req)
    {
        $produk = Produk::find($req->produkCari_id);
        $produk->decrement('qty', $req->qty_jual);
        return redirect('/produk')->with('pesan',"Berhasil mengungari stok sebesar $req->qty_jual");
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
