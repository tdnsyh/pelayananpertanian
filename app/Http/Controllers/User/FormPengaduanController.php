<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TindakanPengaduan;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\UnitKerja;

class FormPengaduanController extends Controller
{
    public function create()
    {
        $unitKerjas = UnitKerja::all();
        return view('visitor.form-pengaduan', compact('unitKerjas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telf' => 'required|string|max:15',
            'deskripsi_pengaduan' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('pengaduan', 'public');
        }

        $pengaduan = Pengaduan::create($validated);

        TindakanPengaduan::create([
            'pengaduan_id' => $pengaduan->id,
            'status' => 'pending', // Status default
        ]);

        return back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
