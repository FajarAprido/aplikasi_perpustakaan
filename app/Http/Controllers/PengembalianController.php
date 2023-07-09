<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use App\Http\Requests\StorepengembalianRequest;
use App\Http\Requests\UpdatepengembalianRequest;
use App\Models\Pengembalian as ModelsPengembalian;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPengembalian = pengembalian::all();
        return view('pengembalian.index', compact('dataPengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengembalian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepengembalianRequest $request)
    {
        Pengembalian::create($request->all());
        return redirect()->route('pengembalian.index')->with('success','pengembalian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengembalian $pengembalian)
    {
        return view('pengembalian.edit',compact('pengembalian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepengembalianRequest $request, pengembalian $pengembalian)
    {
        $pengembalian->update($request->all());  
        return redirect()->route('pengembalian.index')->with('success','pengembalian berhasil di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengembalian $pengembalian)
    {
        $pengembalian->delete();
        return redirect()->route('pengembalian.index')->with('success','pengembalian berhasil dihapus.');
    }
}
