<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Surat extends Model
{
    use HasFactory;

    protected $table = 'jenis_surat';
    protected $fillable = [
        'nama',
        'bahasa',
    ];


    public function Surat() {
 
        return $this->hasMany(Surat::class, 'id_tipe_surat', 'id');
    }
}
