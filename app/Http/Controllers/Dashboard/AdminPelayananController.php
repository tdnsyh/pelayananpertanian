<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPelayananController extends Controller
{
    public function index()
    {
        return view('admin.pelayanan.index');
    }
}
