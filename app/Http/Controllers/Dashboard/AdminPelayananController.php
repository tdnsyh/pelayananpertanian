<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DetailPelayanan;
use Illuminate\Http\Request;
use App\Models\UnitKerja;
use App\Models\Pelayanan;

class AdminPelayananController extends Controller
{
    public function index()
    {
        $unitKerja = UnitKerja::with(['pelayanan.detailPelayanan'])
            ->whereHas('pelayanan')
            ->get();

        return view('admin.pelayanan.index', compact('unitKerja'));
    }

    public function create()
    {
        $unitKerja = UnitKerja::all();
        return view('admin.pelayanan.create', compact('unitKerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
            'kategori_pelayanan' => 'required|string',
            'komponen.*' => 'required|string',
            'uraian.*' => 'required|string',
        ]);

        $pelayanan = Pelayanan::where('unit_kerja_id', $request->unit_kerja_id)
            ->where('kategori_pelayanan', $request->kategori_pelayanan)
            ->first();

        if ($pelayanan) {

            $pelayanan->kategori_pelayanan = $request->kategori_pelayanan;
            $pelayanan->save();

            foreach ($request->komponen as $key => $komponen) {
                DetailPelayanan::create([
                    'pelayanan_id' => $pelayanan->id,
                    'komponen' => $komponen,
                    'uraian' => $request->uraian[$key],
                ]);
            }

            return back()->with('success', 'Pelayanan berhasil diperbarui.');
        } else {
            $pelayanan = Pelayanan::create([
                'unit_kerja_id' => $request->unit_kerja_id,
                'kategori_pelayanan' => $request->kategori_pelayanan,
            ]);

            foreach ($request->komponen as $key => $komponen) {
                DetailPelayanan::create([
                    'pelayanan_id' => $pelayanan->id,
                    'komponen' => $komponen,
                    'uraian' => $request->uraian[$key],
                ]);
            }

            return back()->with('success', 'Pelayanan berhasil dibuat.');
        }
    }

    public function edit($id)
    {
        $detailPelayanan = DetailPelayanan::findOrFail($id);

        return view('admin.pelayanan.edit', compact('detailPelayanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'komponen' => 'required|string',
            'uraian' => 'required|string',
        ]);

        $detailPelayanan = DetailPelayanan::findOrFail($id);

        $detailPelayanan->komponen = $request->komponen;
        $detailPelayanan->uraian = $request->uraian;
        $detailPelayanan->save();

        return redirect()->route('pelayanan.index')->with('success', 'Detail pelayanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $detailPelayanan = DetailPelayanan::findOrFail($id);
        $pelayanan = $detailPelayanan->pelayanan;
        $detailPelayanan->delete();

        if ($pelayanan->detailPelayanan->count() == 0) {
            $pelayanan->delete();
        }

        return redirect()->route('pelayanan.index')->with('success', 'Detail pelayanan berhasil dihapus.');
    }
}
