<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Layanan;
use App\Models\Reservasi;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        $belum_dikonfirmasi = 1;
        $diterima = 1;
        $total = 2;
        $reservasi = [
            [
                'id_reservasi' => 1,
                'name' => 'name_pelanggan',
                'no_telp' => 'no_telp_pelanggan',
                'alamat' => 'alamat_pelanggan',
                'merk_hp' => 'merk_hp_pelanggan',
                'keterangan' => 'keterangan_pelanggan',
                'nama_layanan' => 'layanan_1',
                'status' => 'Belum Dikonfirmasi',
                'created_at' => '2024-04-28 12:56:16',
                'updated_at' => '2024-04-29 12:56:16',
            ],
            [
                'id_reservasi' => 2,
                'name' => 'name_pelanggan',
                'no_telp' => 'no_telp_pelanggan',
                'alamat' => 'alamat_pelanggan',
                'merk_hp' => 'merk_hp_pelanggan',
                'keterangan' => 'keterangan_pelanggan',
                'nama_layanan' => 'layanan_2',
                'status' => 'Diterima',
                'created_at' => '2024-04-28 12:56:16',
                'updated_at' => '2024-04-29 12:56:16',
            ]
        ];
        $reservasi = json_decode(json_encode($reservasi));
        $nama_layanan = ['layanan1','layanan2'];
        $total_layanan=[1,1];
        
        return view("dashboard.dashboard",[
            'belum_dikonfirmasi'=>$belum_dikonfirmasi,
            'diterima'=>$diterima,
            'total'=>$total,
            'reservasi'=>$reservasi,
            'nama_layanan'=>$nama_layanan,
            'total_layanan'=>$total_layanan
        ]);
    }
}