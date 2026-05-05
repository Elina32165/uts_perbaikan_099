<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = \App\Models\pasien::all(); 
            return view('pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'no_rekam_medis' => 'required',
        'nama_pasien' => 'required',
        'jenis_kelamin' => 'required',
        'umur' => 'required|numeric',
    ]);
     \App\Models\pasien::create($request->all());

    return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan!');
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
        $pasien = \App\Models\pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'no_rekam_medis' => 'required',
        'nama_pasien' => 'required',
        'jenis_kelamin' => 'required',
        'umur' => 'required|numeric',
    ]);

    $pasien = \App\Models\pasien::findOrFail($id);
    $pasien->update($request->all());

    return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = \App\Models\pasien::findOrFail($id);
    $pasien->delete();

    return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus!');
    }
}
