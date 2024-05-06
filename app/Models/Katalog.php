<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $fillable = [
     'id_katalog',
     'nama_katalog',
     'harga_katalog',
     'merk_hp',
     'status',
     'keterangan',
     'foto',
     'created_at',
     'updated_at'];
}
