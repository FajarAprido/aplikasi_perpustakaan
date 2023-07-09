<?php

namespace App\Http\Controllers;

use App\Models\Peminjman;
use App\Http\Requests\StorePeminjmanRequest;
use App\Http\Requests\UpdatePeminjmanRequest;

class PeminjmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPeminjman = peminjman::all();
        return view('peminjman.index', compact('dataPeminjman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepeminjmanRequest $request)
    {
        Peminjman::create($request->all());
        return redirect()->route('peminjman.index')->with('success','peminjman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(peminjman $peminjman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjman $peminjman)
    {
        return view('peminjman.edit',compact('peminjman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepeminjmanRequest $request, peminjman $peminjman)
    {
        $peminjman->update($request->all());  
        return redirect()->route('peminjman.index')->with('success','peminjman berhasil di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjman $peminjman)
    {
        $peminjman->delete();
        return redirect()->route('peminjman.index')->with('success','peminjman berhasil dihapus.');
    }
}
