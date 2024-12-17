<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_table;
use App\Models\Provinces;
use App\Models\User; // Import model User
use App\Models\Regency; // Import model Regency
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Surat;
use PhpOffice\PhpSpreadsheet\Calculation\Category;
use App\Models\Jenis_Surat;

class PanggilController extends Controller
{
    // Function untuk menampilkan view isisuratsponsorship
    function HomeIndex(){
        return view('isisurat');
    }

    // Function untuk menyimpan data yang dikirimkan dari form ke dalam database
    function DataInsert(Request $request){
        // Mengambil data dari request
        $jenis_surat = Jenis_Surat::all();
        $user = User::all();
        // dd($request);
        // $request->validate([
        //     'nomor' => 'required',
        //     'nosurat' => 'required|nosurat|unique:users',
        //     'tempat_buat' => 'required|min:6',
        // ]);

        // $nomor = $request->nomor;
        // $nosurat = $request->nosurat;
        // $tempat_buat = $request->tempat_buat;
        // $tgl_buat = $request->tgl_buat;
        // $id_tipe_surat = $request->id_tipe_surat;
        // $id_pembuat = $request->id_pembuat;
        // $nama_pembuat = $request->nama_pembuat;
        // $jabatan_pembuat = $request->jabatan_pembuat;


        $nomor = $request->input("nomor");
        $nosurat = $request->input("nosurat");
        $tempat_buat = $request->input("tempat_buat");
        $tgl_buat = $request->input("tgl_buat");
        $id_tipe_surat = $request->input("id_tipe_surat");
        $id_pembuat = $request->input("id_pembuat");
        $nama_pembuat = $request->input("nama_pembuat");
        $jabatan_pembuat = $request->input("jabatan_pembuat");

        
        // Periksa apakah user dengan id_pembuat yang diberikan ada
        $surat = Surat::find($id_pembuat);
        if($surat) {
            // Jika ada, lakukan penyimpanan data
            $isInsertSuccess = Customer_table::create([
                'nomor' => $nomor,
                'nosurat' => $nosurat,
                'id_tipe_surat' => $id_tipe_surat,
                'tempat_buat' => $tempat_buat,
                'tgl_buat' => $tgl_buat,
                'id_pembuat' => $id_pembuat,
                'nama_pembuat' => $nama_pembuat,
                'jabatan_pembuat' => $jabatan_pembuat
            ]);



            // Menampilkan pesan sesuai dengan keberhasilan penyimpanan
            if($isInsertSuccess) {
                echo '<h1>Insert Success</h1>';
            } else {
                echo '<h1>Insert Failed</h1>';
            }
        } else {
            // Jika user dengan id_pembuat tidak ditemukan, berikan pesan kesalahan
            echo '<h1>User not found</h1>';
        }
        return view('isisurat', compact('surat'));
    }

    public function indexs()
    {
        return view('isisurat', [
            'surat' => Surat::all() // Mendapatkan semua kategori
        ]);
    }

}

