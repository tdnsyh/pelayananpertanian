<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kunjungan;

class AdminKunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = Kunjungan::with('unitKerja')->get();
        return view('admin.kunjungan.index', compact('kunjungan'));
    }
}
