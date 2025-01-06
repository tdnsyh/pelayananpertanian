<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPengaduanController extends Controller
{
    public function index()
    {
        return view('admin.pengaduan.index');
    }
}
