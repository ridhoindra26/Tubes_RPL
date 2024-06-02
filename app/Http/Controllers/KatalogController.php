<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Katalog;
use App\Models\KatalogDiskusi;
class KatalogController extends Controller
{
    
    public function index()
    {
        $katalogs = Katalog::all();
        return view('Katalogview', [
            'katalog' => $katalogs
        ]);
    }

    public function katalogdetail(string $id)
    {
        $detail = Katalog::where('id_penjualan', '=', $id)->first();
        $diskusi = KatalogDiskusi::where('id_penjualan', '=', $id)->get();
        return view('katalogdetail', [
            'detail' => $detail,
            'diskusi' => $diskusi
        ]);
    }

    public function katalogDiskusi(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'isi' => 'required'
        ]);

        $post = new KatalogDiskusi([
            'id_penjualan' => $id,
            'name' => $validatedData['name'],
            'isi' => $validatedData['isi'], 
            'created_at' => now()
        ]);

        $post->save();
        return redirect()->back();
    }
    
}