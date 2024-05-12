<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\UlasanController;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Layanan;
use App\Models\Reservasi;
use App\Models\Artikel;
use App\Models\Ulasan;

class Controller extends BaseController
{
    public function index()
    {

        $layanan = Layanan::where('status', '=', 1)->get();
        // return response()->json([
        //             'layanan' => $layanans,
        //             'artikel' => $artikel,
        //             'ulasan' => $ulasan]);
        return view('home',[

            'pilihan' => $layanan,

            ]);
    }

    public function addReservasi(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'layanan' => 'required',
            'name' => 'required|max:255',
            'no_telp' => 'required',
            'alamat' => 'required',
            'merk_hp' => 'required'
        ]);

        $id_layanan = Layanan::where('nama_layanan','=', $request->layanan)->first();
        // dd($id_layanan);

        if (isset($_FILES["foto"]) && !empty($_FILES["foto"]["name"])) {
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            $file->move(public_path('images/reservasi'), $filename);
            $post = new Reservasi([
                'id_layanan' => $id_layanan->id_layanan,
                'name' => $validatedData['name'],
                'no_telp' => $validatedData['no_telp'],
                'alamat' => $validatedData['alamat'],
                'merk_hp' => $validatedData['merk_hp'],
                'keterangan' => $request['keterangan'],
                'foto' => $filename,
                'status' => "Belum Dikonfirmasi",
                'created_at' => now()
            ]);
        }else{

        // Create a new Post instance with the validated data
        $post = new Reservasi([
            'id_layanan' => $id_layanan->id_layanan,
            'name' => $validatedData['name'],
            'no_telp' => $validatedData['no_telp'],
            'alamat' => $validatedData['alamat'],
            'merk_hp' => $validatedData['merk_hp'],
            'keterangan' => $request['keterangan'],
            'status' => "Belum Dikonfirmasi",
            'created_at' => now()
        ]);
        }

        $post->save(); // Save the new post to the database

        // return redirect('/',[
        //     'message' => 'Data Berhasil Dikirim!',
        // ]); // Return the new post as JSON
        return redirect()->back()->with('message', 'Reservasi kamu berhasil terkirim.');

    }
}
