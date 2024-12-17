<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'nomor',
        'nosurat',
        'id_tipe_surat',
        'tempat_buat',
        'tgl_buat',
        'id_pembuat',
        'nama_pembuat',
        'jabatan_pembuat'
    ];
}