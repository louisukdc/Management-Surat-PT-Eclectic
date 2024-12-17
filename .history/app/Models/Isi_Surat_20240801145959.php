<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isi_Surat extends Model
{
    use HasFactory;

    protected $table = 'isi_surat';
    protected $fillable = [
        'id_surat',
        'nama_input',
        'isi_input',
    ];

    public function Surat(){
        return $this->belongsTo(Surat::class, 'id_surat', 'id');
    }

    public function Surat() {
 
        return $this->hasMany(Surat::class, 'id_tipe_surat', 'id');
    }
}