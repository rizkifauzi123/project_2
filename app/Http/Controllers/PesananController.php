<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\pesanan;
use App\Models\produk;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanans = pesanan::all();
        return view('admin.pesanan.index',[
            'pesanans' => $pesanans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = produk::get();
        return view('admin.pesanan.create',compact('produks'));
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
            'nama_pembeli' => 'required',
            'produk_id' => 'required',
        ]);
        
        pesanan::create($validated);
        return redirect('dashboard/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil Data
        $pesan = pesanan::find($id);
        // return view('admin.produk.edit', [
        //     'produk' => $produk
        // ]);
        $produks = produk::get();
        return view('admin.pesanan.edit',['pesan' => $pesan],compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ambil data id
        $pesan = pesanan::find($id);

        // validasi form input
        $validated = $request->validate([
            'tanggal' => 'required',
            'jumlah' => 'required',
            'nama_pembeli' => 'required',
            'produk_id' => 'required'
        ]);

        // update data
        $pesan->tanggal = $request->input('tanggal');
        $pesan->jumlah = $request->input('jumlah');
        $pesan->nama_pembeli = $request->input('nama_pembeli');
        $pesan->produk_id = $request->input('produk_id');
        $pesan->save();
        
        return redirect('/dashboard/pesanan')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Data sesuai ID
        $pesan = pesanan::find($id);

        // Hapus Data
        $pesan->delete();

        return redirect('/dashboard/pesanan');
    }
}
