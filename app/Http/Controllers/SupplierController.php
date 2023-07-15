<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = supplier::all();
        return view('admin.supplier.index',[
            'suppliers' => $suppliers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi Input
        $validated = $request->validate([
            'nama' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'cp' => 'required'
        ]);

        supplier::create($validated);
        return redirect('dashboard/supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = supplier::find($id);
        return view('admin.supplier.show', [
            'supplier' => $supplier
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil Data
        $supplier = supplier::find($id);
        return view('admin.supplier.edit', [
            'supplier' => $supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //ambil data id
         $supplier = supplier::find($id);

         // validasi form input
         $validated = $request->validate([
             'nama'=> 'required',
             'kota' => 'required',
             'email' => 'required',
             'telephone' => 'required',
             'cp' => 'required'
         ]);
 
         // update data
         $supplier->nama = $request->input('nama');
         $supplier->kota = $request->input('kota');
         $supplier->email = $request->input('email');
         $supplier->telephone = $request->input('telephone');
         $supplier->cp = $request->input('cp');

         $supplier->save();
         
         return redirect('/dashboard/supplier')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Data sesuai ID
        $supplier = supplier::find($id);

        // Hapus Data
        $supplier->delete();

        return redirect('/dashboard/supplier');
    }
}
