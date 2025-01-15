<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKerja;
use App\Models\Kunjungan;
use App\Models\Pengaduan;
use App\Models\TindakanPengaduan;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $kunjunganCount = Kunjungan::count();
        $unitKerjaCount = UnitKerja::count();
        $pengaduanCount = Pengaduan::count();
        $tindakanPengaduanCount = TindakanPengaduan::count();

        // Mendapatkan data terbaru untuk setiap tabel
        $latestKunjungan = Kunjungan::latest()->take(5)->get();
        $latestPengaduan = Pengaduan::latest()->take(5)->get();
        $latestTindakan = TindakanPengaduan::latest()->take(5)->get();

        return view('admin.dashboard.index', compact(
            'kunjunganCount',
            'unitKerjaCount',
            'pengaduanCount',
            'tindakanPengaduanCount',
            'latestKunjungan',
            'latestPengaduan',
            'latestTindakan'
        ));
    }
}
