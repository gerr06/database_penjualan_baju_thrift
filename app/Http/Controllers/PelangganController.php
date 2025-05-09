<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function show($id)
    {
        $data = Pelanggan::find($id);
        return view('pelanggan.show', compact('data'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        // Belum implementasi DB, hanya redirect dengan pesan
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil disimpan (dummy).');
    }

    public function edit($id)
    {
        $data = Pelanggan::find($id);
        return view('pelanggan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil diupdate (dummy).');
    }

    public function destroy($id)
    {
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus (dummy).');
    }
}
