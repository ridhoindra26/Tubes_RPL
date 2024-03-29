<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function Lowongan() {
        $Lowongans = Lowongan::all();
        return view ('Lowongan.Lowongan',[
            'Lowongan'=>$Lowongans
        ]);
    }
    public function editLowongan() {
        return view ('Lowongan.editLowongan');
    }

    public function lowongandetail(string $id)
    {
        $detail = Lowongan::where('id_Lowongan', '=', $id)->first();
        return view('Lowongan.editLowongan',[
            'detail' => $detail,
        ]);
    }

    public function getLowongan()
    {
        $posts = Lowongan::all(); // Retrieve all posts from the database
        $back = json_decode($posts);
        // return view('welcome',['inspections' => $back]);
        return response()->json($posts); // Return the data as JSON
    }
    public function addlowongan(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'cabang_perusahaan' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp|max:4096', // Allow JPEG, PNG, GIF, WebP, etc
        ]);
        if(isset($_FILES["foto"]) && !empty($_FILES["foto"]["name"])){
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            // Storage::disk('public')->url($filename);
            // Storage::putFile('photos', new File('admin.bayutirta.masuk.id/public/Image'), $filename);
            $file->storeAs('Lowongan', $filename, 'public');
            // $file->move('admin.bayutirta.masuk.id/public/Image' , $filename);
            // $file-> move(public_path(), $filename);
            // $request['foto']= $filename;
            $post = new Lowongan([
            'judul' => $validatedData['judul'],
            'cabang_perusahaan' => $validatedData['cabang_perusahaan'],
            'posisi' => $validatedData['posisi'],
            'deskripsi' => $validatedData['deskripsi'],
            'foto' => $filename,
            'created_at' => now()
        ]);

        
        }else{
            $post = new Lowongan([
            'judul' => $validatedData['judul'],
            'nama_penulis' => $validatedData['nama_penulis'],
            'title_penulis' => $validatedData['title_penulis'],
            'isi' => $validatedData['isi'],
            'foto' =>'kodak ultramax.jpg',
            'created_at' => now()
        ]);
        }


        // Create a new Post instance with the validated data
         // Save the new post to the database
        $post->save();
        return redirect('Lowongan'); // Return the new post as JSON
    }

    public function edit(Request $request, string $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'cabang_perusahaan' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required'
        ]);

        if(isset($_FILES["foto"]) && !empty($_FILES["foto"]["name"])){
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            // Storage::disk('public')->url($filename);
            // Storage::putFile('photos', new File('admin.bayutirta.masuk.id/public/Image'), $filename);
            $file->storeAs('Lowongan', $filename, 'public');
            // $file->move('admin.bayutirta.masuk.id/public/Image' , $filename);
            // $file-> move(public_path(), $filename);
            // $request['foto']= $filename;
            Lowongan::where('id_Lowongan', '=', $id)->update([
                'foto' => $filename
            ]);
        }


        // Create a new Post instance with the validated data
        Lowongan::where('id_Lowongan', '=', $id)->update([
            'judul' => $validatedData['judul'],
            'nama_penulis' => $validatedData['nama_penulis'],
            'title_penulis' => $validatedData['title_penulis'],
            'isi' => $validatedData['isi']
        ]);

        return redirect('Lowongan'); // Return the new post as JSON
    }

    public function deleteLowongan(string $id)
    {
        Lowongan::where('id_Lowongan', '=', $id)->delete();

        return redirect('Lowongan');
    }
}