<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pernyataan;
use App\Models\Rule;
use App\Http\Requests\StoreRuleRequest;
use App\Http\Requests\UpdateRuleRequest;
use Illuminate\Http\Request;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $basis_rule = Rule::where('gejala_id', $request->get('gejala_id'))
        ->get();
        // dd($basis_rule);
        // foreach($basis_rule as $rule){
        //     dd($rule->load('data_pernyataan'));
        // }
        $data_gejala = Gejala::all();
        $pernyataan = Pernyataan::all();

        return view('Admin.rule.index')->with([
        'admin' => $basis_rule,
        'data_gejala' => $data_gejala,
        'pernyataan' => $pernyataan
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Rule.create',[
            'basis_rule'=>Rule::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRuleRequest $request)
    {
        $validatedData=$request->validate([
            'rule'=>'required',
            'gejala_id'=>'required',
            'pernyataan_id'=>'required',
            'nilai_mb'=>'required',
            'nilai_md'=>'required',
            'nilai_cf'=>'required|decimal:2'
        ]);
        // dd($validatedData);
        Rule::create($validatedData);
        return redirect('/admin/rule')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRuleRequest $request, Rule $rule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rule $rule)
    {
        //
    }
}