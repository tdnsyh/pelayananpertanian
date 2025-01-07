<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLayanan;
use App\Models\Pertanyaan;
use App\Models\Responden;
use App\Models\Jawaban;

class FormKuisionerController extends Controller
{
    public function create()
    {
        $layanan = JenisLayanan::all();
        $pertanyaan = Pertanyaan::all();

        return view('visitor.form-kuisioner', compact('layanan', 'pertanyaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelamin' => 'required|string',
            'usia' => 'required|integer',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
        ]);

        $responden = Responden::create($request->only(['jenis_kelamin', 'usia', 'pendidikan', 'pekerjaan']));

        foreach ($request->pertanyaan as $pertanyaanId => $jawaban) {
            Jawaban::create([
                'responden_id' => $responden->id,
                'pertanyaan_id' => $pertanyaanId,
                'jawaban' => $jawaban,
                'jenis_layanan_id' => $request->jenis_layanan,
            ]);
        }

        return back()->with('success', 'Kuisioner berhasil disubmit');
    }
}
