<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Katalog;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        return view('Katalogview',[
            'katalog' => $katalogs]);
    }

    public function servicedetail(string $id)
    {
        $detail = Katalog::where('id_layanan', '=', $id)->first();
        return view('servicedetail',[
            'detail'=>$detail
        ]);
    }
}