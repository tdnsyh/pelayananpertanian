<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKerja;

class AdminUnitKerjaController extends Controller
{
    public function index()
    {
        $unitKerja = UnitKerja::all();
        return view('admin.unitkerja.index', compact('unitKerja'));
    }

    public function create()
    {
        return view('admin.unitkerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_unit_kerja' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'jenis_pelayanan' => 'required|string|max:255',
        ]);

        UnitKerja::create($request->all());

        return redirect()->route('unitkerja.index')->with('success', 'Unit kerja berhasil ditambahkan');
    }

    public function edit($id)
    {
        $unitKerja = UnitKerja::findOrFail($id);
        return view('admin.unitkerja.edit', compact('unitKerja'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_unit_kerja' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'jenis_pelayanan' => 'required|string|max:255',
        ]);

        $unitKerja = UnitKerja::findOrFail($id);
        $unitKerja->update($request->all());

        return redirect()->route('unitkerja.index')->with('success', 'Unit kerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        $unitKerja = UnitKerja::findOrFail($id);
        $unitKerja->delete();

        return redirect()->route('unitkerja.index')->with('success', 'Unit kerja berhasil dihapus');
    }
}
