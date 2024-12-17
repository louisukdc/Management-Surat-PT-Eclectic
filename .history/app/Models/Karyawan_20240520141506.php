<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $fillable = [
        'id_user', 
        'nama_lengkap', 
        'alamat', 
        'awal_masa_kerja', 
        'akhir_masa_kerja', 
        'no_ktp', 
        'alasan_pengunduran_diri', 
        'tanggal_pengunduran_diri', 
    ];

    public function User(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
