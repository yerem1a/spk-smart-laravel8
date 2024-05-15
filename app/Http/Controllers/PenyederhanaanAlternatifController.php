<?php

namespace App\Http\Controllers;

use App\Models\PenyederhanaanAlternatif;
use Illuminate\Http\Request;

class PenyederhanaanAlternatifController extends Controller
{
    public function index()
    {
        $data = PenyederhanaanAlternatif::all();
        return view('home', compact('data'));
    }
}
