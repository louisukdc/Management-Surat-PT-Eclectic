<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'surat';
    protected $fillable = [
        'nomor',
        'id_tipe_surat',
        'tempat_buat',
        'tgl_buat',
        'id_pembuat',
        'nama_pembuat',
        'jabatan_pembuat',
    ];

    public function Isi_Surat() {
 
        return $this->hasMany(Isi_Surat::class, 'id_surat', 'id_pembuat','id');
    }

    public function Jenis_Surat(){
        return $this->belongsTo(Jenis_Surat::class, 'id_tipe_surat', 'id');
    }

    public function User(){
        return $this->belongsTo(Jenis_Surat::class, 'id_pembuat', 'id');
    }

    use HasFactory;
    protected $guarded = ['id'];
}
