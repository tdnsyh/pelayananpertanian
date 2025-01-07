<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\UnitKerja;
use Illuminate\Support\Facades\Auth;

class AdminPengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::with('tindakanPengaduans')->get();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::with('tindakanPengaduans')->findOrFail($id);
        $tindakanPengaduan = $pengaduan->tindakanPengaduans->last();
        return view('admin.pengaduan.detail', compact('pengaduan', 'tindakanPengaduan'));
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::with('tindakanPengaduans')->findOrFail($id);
        $unitKerjas = UnitKerja::all();
        $tindakanPengaduan = $pengaduan->tindakanPengaduans->last();
        return view('admin.pengaduan.update', compact('pengaduan', 'unitKerjas', 'tindakanPengaduan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string|max:255',
            'deskripsi_tindakan' => 'nullable|string|max:1000',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $tindakanPengaduan = $pengaduan->tindakanPengaduans->last();

        $tindakanPengaduan->update([
            'status' => $validated['status'],
            'deskripsi_tindakan' => $validated['deskripsi_tindakan'] ?? null,
            'user_id' => Auth::id(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Tindakan pengaduan berhasil diupdate!');
    }
}
