<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use Illuminate\Http\Request;

class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jam.index', [
            'title' => 'Jam',
            'jams' => Jam::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jam.create', ['title' => 'Tambah Data Jam']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jam $jam)
    {
        return view('jam.show', [
            'title' => 'Detail Jam',
            'jam' => $jam,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('jam.edit', ['title' => 'Edit Data Jam']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
