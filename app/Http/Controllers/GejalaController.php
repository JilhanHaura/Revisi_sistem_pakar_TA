<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Http\Requests\StoreGejalaRequest;
use App\Http\Requests\UpdateGejalaRequest;
use GuzzleHttp\Psr7\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_gejala=Gejala::all();
        return view('Admin.gejala.index',compact('data_gejala'));
        // return view('admin.gejala.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('Admin.gejala.create',[
            'data_gejala'=>Gejala::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGejalaRequest $request)
    {
        $validateData=$request->validate([
            'kode_gejala'=>'required',
            'nama_gejala'=>'required',
        ]);
        // dd($validateData);
        Gejala::create($validateData);
        return redirect()->route('admin/gejala')->with('pesan','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }



    public function update(UpdateGejalaRequest $request, $kode_gejala)
    {
            $gejala =Gejala::findOrFail($request->kode_gejala);
            $gejala->update($request->all());

            return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_gejala)
    {
        Gejala::where('kode_gejala', $kode_gejala)->delete();
        return redirect('/admin/gejala')->with('Pesan', 'Data berhasil dihapus');
    }
}