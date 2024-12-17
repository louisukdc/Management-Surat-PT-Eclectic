<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Surat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\Karyawan;
use App\Models\Customer_table;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class EdulevelController extends Controller
{
    
    public function data()
    {
        $jenis_surat = Jenis_Surat::all();
        $user = User::all();
        // dd($edulevels);
        // return $edulevels;
        // return view('edulevel.data', ['edulevels' => $edulevels]);
        // return view('edulevel.data', compact('edulevels'));
        return view('page.isisurat', compact('jenis_surat', 'user', 'surats'));
    }

    public function index()
    {
        $surats = Surat::all();
        // dd($edulevels);
        // return $edulevels;
        // return view('edulevel.data', ['edulevels' => $edulevels]);
        // return view('edulevel.data', compact('edulevels'));
        return view('page.index', compact('surats'));
    }


    public function add()
    {
        return view('surat.isisurat');
    }

    public function ceksurat(Request $request)
    {
        $jenis_surat = Jenis_Surat::all();
        $user = User::all();
        // dd($jenis_surat);

        // $nomor = $request->nomor;
        // $nosurat = $request->nosurat;
        // $tempat_buat = $request->tempat_buat;
        // $tgl_buat = $request->tgl_buat;
        // $id_tipe_surat = $request->id_tipe_surat;
        // $id_pembuat = $request->id_pembuat;
        // $nama_pembuat = $request->nama_pembuat;
        // $jabatan_pembuat = $request->jabatan_pembuat;

        $request->validate([
            'nomor' => 'required',
            'nosurat' => 'required|nosurat|unique:user',
            'tempat_buat' => 'required|min:6',
        ]);

        $nomor = $request->input("nomor");
        $nosurat = $request->input("nosurat");
        $tempat_buat = $request->input("tempat_buat");
        $tgl_buat = $request->input("tgl_buat");
        $id_tipe_surat = $request->input("id_tipe_surat");
        $id_pembuat = $request->input("id_pembuat");
        $nama_pembuat = $request->input("nama_pembuat");
        $jabatan_pembuat = $request->input("jabatan_pembuat");

        // Pastikan model Customer_table menggunakan koneksi database yang benar
        // Simpan data ke dalam tabel surat
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

        // Tampilkan pesan sesuai keberhasilan penyimpanan
        if($isInsertSuccess) {
            Customer_table::flash('success_message', 'Insert Success');
        } else {
            Customer_table::flash('error_message', 'Insert Failed');
        }

        return redirect()->back();
        return view('isisuratsponsorship', compact('jenis_surat', 'user'));
    }

    public function postsurat(Request $request): RedirectResponse
    {
        // validate form
        // $this->validate($request, [
        //     'nomor'     => 'required|min:5',
        //     'nosurat'     => 'required|min:5',
        //     'tempat_buat'   => 'required|min:5',
        //     'tgl_buat'   => 'required|min:5',
        //     'id_tipe_surat'   => 'required|min:0',
        //     'id_pembuat'   => 'required|min:0',
        //     'nama_pembuat'   => 'required|min:5',
        //     'jabatan_pembuat'   => 'required|min:5'
        // ]);

        $nomor = $request->input("nomor");
        $nosurat = $request->input("nosurat");
        $tempat_buat = $request->input("tempat_buat");
        $tgl_buat = $request->input("tgl_buat");
        $id_tipe_surat = $request->input("id_tipe_surat");
        $id_pembuat = $request->input("id_pembuat");
        $nama_pembuat = $request->input("nama_pembuat");
        $jabatan_pembuat = $request->input("jabatan_pembuat");

        
        // create post
        $surat = Surat::create([
            'nomor'     => $request->nomor,
            'nosurat'     => $request->nosurat,
            'tempat_buat'   => $request->tempat_buat,
            'tgl_buat'   => $request->tgl_buat,
            'id_tipe_surat'   => $request->id_tipe_surat,
            'id_pembuat'   => $request->id_pembuat,
            'nama_pembuat'   => $request->nama_pembuat,
            'jabatan_pembuat'   => $request->jabatan_pembuat,
        ]);

        // return redirect()->back();
        return redirect()->route('showsurat', $surat->id)->with(['success' => 'Data Berhasil Disimpan!']);
        // return view ('isisuratsponsorship', compact('surat'));
    }

    /**
     * show
     *
     * @param  mixed $id
     */
    public function show(string $id) 
    {
        //get post by ID
        $surat = Surat::findOrFail($id);

        //render view with post
        return view('page.show', compact('surat'));
    }

    public function showsurat(string $id) 
    {
        //get post by ID
        $surat = Surat::findOrFail($id);

        //render view with post
        return view('page.showsurat', compact('surat'));
    }


}
