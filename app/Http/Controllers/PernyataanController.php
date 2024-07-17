<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pernyataan;
use App\Http\Requests\StorePernyataanRequest;
use App\Http\Requests\UpdatePernyataanRequest;

class PernyataanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pernyataan=Pernyataan::all();
        return view('admin.pernyataan.index',compact('pernyataan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pernyataan.create',[
            'pernyataan'=>Pernyataan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePernyataanRequest $request)
    {
        $validateData=$request->validate([
            'kode_pernyataan'=>'required',
            'pernyataan'=>'required'
        ]);
        Pernyataan::create($validateData);
        return redirect()->route('admin/pernyataan')->with('pesan','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pernyataan $pernyataan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pernyataan $pernyataan)
    {
        return view('admin.pernyataan.edit', compact('pernyataan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePernyataanRequest $request, $kode_gejala)
    {
            $per =Pernyataan::findOrFail($request->kode_pernyataan);
            $per->update($request->all());

            return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pernyataan)
    {
        Pernyataan::where('kode_pernyataan', $pernyataan)->delete();
        return redirect()->route('admin/pernyataan')->with('pesan','data berhasil dihapus');
    }
}