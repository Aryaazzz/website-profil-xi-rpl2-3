<?php

namespace App\Http\Controllers;

use App\Models\murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = murid::latest()->paginate(10);

        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|numeric|unique:murid,nisn',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
        ]);

        murid::create($validated);

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(murid $murid)
    {
        return view('murid.edit', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, murid $murid)
    {
        $validated = $request->validate([
            'nisn' => 'required|numeric|unique:murid,nisn,' . $murid->id,
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
        ]);

        $murid->update($validated);

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(murid $murid)
    {
        $murid->delete();

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil dihapus.');
    }
}
