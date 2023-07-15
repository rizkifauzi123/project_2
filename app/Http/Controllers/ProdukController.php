<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\produk;
use App\Models\jenis_produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = produk::all();
        return view('admin.produk.index',[
            'produks' => $produks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.produk.create');

        // relasi jenis produk
        $jenis_produks = jenis_produk::get();
        return view('admin.produk.create',compact('jenis_produks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi Input
         $validated = $request->validate([
            'nama' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'jenis_produks_id' => 'required',
        ]);
        
        produk::create($validated);
        return redirect('dashboard/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = produk::find($id);
        return view('admin.produk.show', [
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil Data
        $produk = produk::find($id);
        // return view('admin.produk.edit', [
        //     'produk' => $produk
        // ]);
        $jenis_produks = jenis_produk::get();
        return view('admin.produk.edit',['produk' => $produk],compact('jenis_produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ambil data id
        $produk = produk::find($id);

        // validasi form input
        $validated = $request->validate([
            'nama' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'jenis_produks_id' => 'required',
        ]);

        // update data
        $produk->nama = $request->input('nama');
        $produk->stok = $request->input('stok');
        $produk->harga_beli = $request->input('harga_beli');
        $produk->harga_jual = $request->input('harga_jual');
        $produk->jenis_produks_id = $request->input('jenis_produks_id');
        $produk->save();
        
        return redirect('/dashboard/produk')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Data sesuai ID
        $produk = produk::find($id);

        // Hapus Data
        $produk->delete();

        return redirect('/dashboard/produk');
    }
}
