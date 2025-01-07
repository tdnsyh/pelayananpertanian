<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class AdminPertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view('admin.pertanyaan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('admin.pertanyaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
        ]);

        Pertanyaan::create($request->all());

        return back()->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function edit(Pertanyaan $pertanyaan)
    {
        return view('admin.pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
        ]);

        $pertanyaan->update($request->all());

        return redirect()->route('pertanyaan.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();

        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}
