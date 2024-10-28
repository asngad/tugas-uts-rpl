<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latihan;

class LatihanController extends Controller
{
    public function index()
    {
        $latihans = Latihan::all();
        return view('latihan.index', compact('latihans'));
    }

    public function create()
    {
        return view('latihan.create');
    }

    public function store(Request $request)
    {
        $latihan = new Latihan;
        $latihan->nama_latihan = $request->nama_latihan;
        $latihan->deskripsi = $request->deskripsi;
        $latihan->durasi = $request->durasi;
        $latihan->jenis = $request->jenis;
        $latihan->save();

        return redirect('/latihan')->with('success', 'Latihan berhasil ditambahkan.');
    }

    public function edit($latihan_id)
    {
        $latihan = Latihan::findOrFail($latihan_id);
        return view('latihan.edit', compact('latihan'));
    }

    public function update(Request $request, $latihan_id)
    {
        $latihan = Latihan::findOrFail($latihan_id);
        $latihan->nama_latihan = $request->nama_latihan;
        $latihan->deskripsi = $request->deskripsi;
        $latihan->durasi = $request->durasi;
        $latihan->jenis = $request->jenis;
        $latihan->save();

        return redirect('/latihan')->with('success', 'Latihan berhasil diperbarui.');
    }

    public function destroy($latihan_id)
    {
        $latihan = Latihan::findOrFail($latihan_id);
        $latihan->delete();
        return redirect('/latihan')->with('success', 'Latihan berhasil dihapus.');
    }
}
