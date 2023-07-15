<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\jenis_produk ;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_produks = jenis_produk::all();
        return view('admin.jenis_produk.index',[
            'jenis_produks' => $jenis_produks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis_produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi Input
        $validated = $request->validate([
            'nama' => 'required'
        ]);

        jenis_produk::create($validated);
        return redirect('dashboard/jenis_produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $jenis = jenis_produk::find($id);
        // return view('admin.jenis_produk.show', [
        //     'jenis' => $jenis
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil Data
        $jenis = jenis_produk::find($id);
        return view('admin.jenis_produk.edit', [
            'jenis' => $jenis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ambil data id
        $jenis = jenis_produk::find($id);

        // validasi form input
        $validated = $request->validate([
            'nama'=> 'required'
        ]);

        // update data
        $jenis->nama = $request->input('nama');
        $jenis->save();
        
        return redirect('/dashboard/jenis_produk')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Data sesuai ID
        $jenis = jenis_produk::find($id);

        // Hapus Data
        $jenis->delete();

        return redirect('/dashboard/jenis_produk');
    }
}
