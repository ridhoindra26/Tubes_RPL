<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

class ArticleController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('article',[
            'artikel' => $artikel
        ]);
    }

    public function articledetail(string $id)
    {
        $detail = Artikel::where('id_artikel', '=', $id)->first();
        $artikel = Artikel::where('id_artikel', '!=', $id)->orderBy('created_at')->take(3)->get();
        return view('articledetail',[
            'detail' => $detail,
            'artikel' => $artikel
        ]);
    }
}