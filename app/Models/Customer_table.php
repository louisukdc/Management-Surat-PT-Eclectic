<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_table extends Model
{
    public $table = "surat";
    public $primaryKey = "id";
    protected $fillable = [ // Tambahkan atribut fillable untuk memungkinkan mass assignment
        'nomor',
        'nosurat',
        'id_tipe_surat',
        'tempat_buat',
        'id_pembuat',
        'nama_pembuat',
        'jabatan_pembuat',
    ];
    public $timestamps=false;   
}
