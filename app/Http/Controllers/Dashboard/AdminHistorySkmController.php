<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responden;
use App\Models\Pertanyaan;
use App\Models\Jawaban;

class AdminHistorySkmController extends Controller
{
    public function index(Request $request)
    {
        $responden = Responden::paginate(1);
        $pertanyaan = Pertanyaan::all();

        if ($responden->count() > 0) {
            $jawaban = Jawaban::where('responden_id', $responden->first()->id)->get();
        } else {
            $jawaban = collect();
        }

        return view('admin.skm.history', compact('responden', 'pertanyaan', 'jawaban'));
    }
}
