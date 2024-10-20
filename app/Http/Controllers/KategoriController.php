<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {
        return Kategori::all();
    }

    public function store(Request $request) {
        $request->validate(['nama_kategori' => 'required']);
        $kategori = Kategori::create($request->all());
        return response()->json($kategori, 201);
    }
}