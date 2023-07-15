<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\pembelian;
use App\Models\produk;
use App\Models\supplier;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelians = pembelian::all();
        return view('admin.pembelian.index',[
            'pembelians' => $pembelians
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = produk::get();
        $suppliers = supplier::get();
        return view('admin.pembelian.create',compact('produks','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi Input
         $validated = $request->validate([
            'tanggal' => 'required',
            'jumlah' => 'required',
            'harga_beli' => 'required',
            'produk_id' => 'required',
            'supplier_id' => 'required',
        ]);
        
        pembelian::create($validated);
        return redirect('dashboard/pembelian');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli = pembelian::find($id);
        return view('admin.pembelian.show', [
            'pembeli' => $pembeli
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = pembelian::find($id);
        $produks = produk::get();
        $suppliers = supplier::get();
        return view('admin.pembelian.edit',['pembeli' => $pembeli],compact('suppliers','produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ambil data id
        $pembeli = pembelian::find($id);

        // validasi form input
        $validated = $request->validate([
            'tanggal' => 'required',
            'jumlah' => 'required',
            'harga_beli' => 'required',
            'produk_id' => 'required',
            'supplier_id' => 'required',
        ]);

        // update data
        $pembeli->tanggal = $request->input('tanggal');
        $pembeli->jumlah = $request->input('jumlah');
        $pembeli->harga_beli = $request->input('harga_beli');
        $pembeli->produk_id = $request->input('produk_id');
        $pembeli->supplier_id = $request->input('supplier_id');
        $pembeli->save();
        
        return redirect('/dashboard/pembelian')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Data sesuai ID
        $pembeli = pembelian::find($id);

        // Hapus Data
        $pembeli->delete();

        return redirect('/dashboard/pembelian');
    }
}
