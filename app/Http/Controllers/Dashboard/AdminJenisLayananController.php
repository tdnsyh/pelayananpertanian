<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLayanan;

class AdminJenisLayananController extends Controller
{
    public function index()
    {
        $layanan = JenisLayanan::all();
        return view('admin.jenis-layanan.index', compact('layanan'));
    }

    public function create()
    {
        return view('admin.jenis-layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        JenisLayanan::create($request->all());

        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil ditambahkan');
    }

    public function edit(JenisLayanan $jenisLayanan)
    {
        return view('admin.jenis-layanan.edit', compact('jenisLayanan'));
    }

    public function update(Request $request, JenisLayanan $jenisLayanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $jenisLayanan->update($request->all());

        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil diperbarui');
    }

    public function destroy(JenisLayanan $jenisLayanan)
    {
        $jenisLayanan->delete();

        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil dihapus');
    }
}
