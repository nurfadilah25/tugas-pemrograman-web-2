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
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'brand' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
        ], [
            'name.required' => 'Nama jam wajib diisi',
            'name.string' => 'Nama jam harus berupa teks',
            'name.min' => 'Nama jam minimal :min karakter',

            'brand.required' => 'Merek wajib diisi',
            'brand.string' => 'Merek harus berupa teks',

            'category.required' => 'Kategori wajib diisi',
            'category.string' => 'Kategori harus berupa teks',

            'price.required' => 'Harga wajib diisi',
            'price.integer' => 'Harga harus berupa angka bulat tanpa titik atau koma',
            'price.min' => 'Harga tidak boleh kurang dari :min',

            'stock.required' => 'Stok wajib diisi',
            'stock.integer' => 'Stok harus berupa angka bulat',
            'stock.min' => 'Stok tidak boleh kurang dari :min',

            'description.required' => 'Deskripsi wajib diisi',
            'description.string' => 'Deskripsi harus berupa teks',
        ]);

        Jam::create($validated);

        return to_route('jam.index')->with('success', 'Data jam baru ditambahkan');

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
    public function edit(Jam $jam)
    {
        return view('jam.edit', ['title' => 'Edit Data Jam', 'jam' => $jam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jam $jam)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'brand' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
        ], [
            'name.required' => 'Nama jam wajib diisi',
            'name.string' => 'Nama jam harus berupa teks',
            'name.min' => 'Nama jam minimal :min karakter',

            'brand.required' => 'Merek wajib diisi',
            'brand.string' => 'Merek harus berupa teks',

            'category.required' => 'Kategori wajib diisi',
            'category.string' => 'Kategori harus berupa teks',

            'price.required' => 'Harga wajib diisi',
            'price.integer' => 'Harga harus berupa angka bulat tanpa titik atau koma',
            'price.min' => 'Harga tidak boleh kurang dari :min',

            'stock.required' => 'Stok wajib diisi',
            'stock.integer' => 'Stok harus berupa angka bulat',
            'stock.min' => 'Stok tidak boleh kurang dari :min',

            'description.required' => 'Deskripsi wajib diisi',
            'description.string' => 'Deskripsi harus berupa teks',
        ]);

        $jam->update($validated);

        return to_route('jam.index')->with('success', 'Data jam baru diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jam $jam)
    {
        $jam->delete();

        return to_route('jam.index')->with('success','Data jam berhasil dihapus');
    }
}
