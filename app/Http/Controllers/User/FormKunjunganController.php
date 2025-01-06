<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKerja;
use App\Models\Kunjungan;

class FormKunjunganController extends Controller
{
    public function create()
    {
        $unit_kerja = UnitKerja::all();
        return view('visitor.form-kunjungan', compact('unit_kerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_telf_aktif' => 'required|string',
            'keperluan' => 'required|string',
        ]);

        Kunjungan::create([
            'unit_kerja_id' => $request->unit_kerja_id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telf_aktif' => $request->no_telf_aktif,
            'keperluan' => $request->keperluan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Kunjungan berhasil ditambahkan');
    }
}
