<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use App\Models\JenisLayanan;
use App\Models\Responden;

class AdminSkmController extends Controller
{
    public function index(Request $request)
    {
        $jenisLayanans = JenisLayanan::all();
        $jenisLayananId = $request->get('jenis_layanan_id');
        $query = Jawaban::with(['pertanyaan', 'jenisLayanan']);

        if ($jenisLayananId) {
            $query->where('jenis_layanan_id', $jenisLayananId);
        }

        $jawaban = $query->get();
        $noResponden = $jawaban->isEmpty();
        $persentaseJawaban = [];

        foreach ($jawaban as $jawab) {
            if (!isset($persentaseJawaban[$jawab->pertanyaan_id])) {
                $persentaseJawaban[$jawab->pertanyaan_id] = [
                    'a' => 0,
                    'b' => 0,
                    'c' => 0,
                    'd' => 0,
                    'count' => 0
                ];
            }

            switch ($jawab->jawaban) {
                case 'a':
                    $persentaseJawaban[$jawab->pertanyaan_id]['a'] += 1;
                    break;
                case 'b':
                    $persentaseJawaban[$jawab->pertanyaan_id]['b'] += 1;
                    break;
                case 'c':
                    $persentaseJawaban[$jawab->pertanyaan_id]['c'] += 1;
                    break;
                case 'd':
                    $persentaseJawaban[$jawab->pertanyaan_id]['d'] += 1;
                    break;
            }

            $persentaseJawaban[$jawab->pertanyaan_id]['count'] += 1;
        }

        foreach ($persentaseJawaban as $pertanyaanId => $data) {
            $persentaseJawaban[$pertanyaanId]['a'] = $data['count'] ? ($data['a'] / $data['count']) * 100 : 0;
            $persentaseJawaban[$pertanyaanId]['b'] = $data['count'] ? ($data['b'] / $data['count']) * 100 : 0;
            $persentaseJawaban[$pertanyaanId]['c'] = $data['count'] ? ($data['c'] / $data['count']) * 100 : 0;
            $persentaseJawaban[$pertanyaanId]['d'] = $data['count'] ? ($data['d'] / $data['count']) * 100 : 0;
        }

        $pertanyaan = Pertanyaan::all();

        return view('admin.skm.index', compact('persentaseJawaban', 'pertanyaan', 'jenisLayanans', 'jenisLayananId', 'noResponden'));
    }
}
