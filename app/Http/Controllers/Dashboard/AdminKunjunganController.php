<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kunjungan;

class AdminKunjunganController extends Controller
{
    public function index(Request $request)
    {
        $query = Kunjungan::with('unitKerja');
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        $kunjungan = $query->get();

        return view('admin.kunjungan.index', compact('kunjungan'));
    }
}
