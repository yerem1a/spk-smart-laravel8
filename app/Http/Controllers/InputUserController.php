<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenyederhanaanAlternatif;

class InputUserController extends Controller
{
    public function create()
    {
        return view('inputuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alternatif' => 'required|string|max:255',
            'nama' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'jumlah_tanggungan' => 'required|integer',
            'status' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'penghasilan' => 'required|integer',
            'pengeluaran' => 'required|integer',
        ]);

        PenyederhanaanAlternatif::create($request->all());

        return redirect()->route('home')->with('success', 'Data berhasil di tambahkan ');
    }
}
