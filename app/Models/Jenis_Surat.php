<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Surat extends Model
{
    use HasFactory;

    protected $table = 'jenis_surat';
    protected $primaryKey = 'nama';  // Set the primary key to 'nama'
    public $incrementing = false;    // Disable auto-incrementing
    protected $keyType = 'string';   // Set the key type to string

    protected $fillable = [
        'nama',
        'bahasa',
    ];

    public function Surat() {
        return $this->hasMany(Surat::class, 'id_tipe_surat', 'nama');
    }
}

