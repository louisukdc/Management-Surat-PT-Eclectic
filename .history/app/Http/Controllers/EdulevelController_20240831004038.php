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
        return view('page.isisurat', compact('jenis_surat', 'user'));
    }

    public function index(Request $request)
    {
        $surats = Surat::all();
        $surats = Surat::paginate(3); // Adjust the number 10 to the number of items per page you want
        // dd($edulevels);
        // return $edulevels;
        // return view('edulevel.data', ['edulevels' => $edulevels]);
        // return view('edulevel.data', compact('edulevels'));
        $query = Surat::query();
        $search = $request->input('search'); // Retrieve the search query from the request
    
        if ($search) {
            $query->where('nomor', 'like', "%{$search}%")
                  ->orWhere('nama_pembuat', 'like', "%{$search}%")
                  ->orWhere('jabatan_pembuat', 'like', "%{$search}%");
        }

        return view('page.index', compact('surats', 'search'));
    }


    public function create()
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
    public function showsurat(string $id) 
    {
        //get post by ID
        $surat = Surat::findOrFail($id);

        //render view with post
        return view('page.showsurat', compact('surat'));
    }

    public function edit($id)
    {
        $surat = Surat::findOrFail($id);
        $user = User::all(); // Assuming you need to pass users to the view
        $jenis_surat = Jenis_Surat::all(); // Assuming you need to pass jenis_surat to the view
    
        return view('surat.edit', compact('surat', 'user', 'jenis_surat'));
    }
        
    public function update(Request $request, string $id)
    {
        // Temukan surat berdasarkan ID
        $surat = Surat::findOrFail($id);
    
        // Update surat dengan data dari request
        $surat->update($request->all());
    
        // Ambil nomor halaman dari request
        $page = $request->input('page', 1);
    
        // Redirect ke halaman index dengan halaman yang sesuai
        return redirect()->route('surat.index', ['page' => $page])
                         ->with('success', 'Surat berhasil diperbarui');
    }
    
    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $surats = Surat::query()
            ->where('nomor', 'like', "%{$search}%")
            ->orWhere('nama_pembuat', 'like', "%{$search}%")
            ->orWhere('jabatan_pembuat', 'like', "%{$search}%")
            ->paginate(10); // Gunakan paginate untuk pagination
    
        dd($surats); // Debug output
    
        return view('surat.index', compact('surats', 'search'));
    }
    


    public function show(string $id)
    {
        $surat = Surat::findOrFail($id);
 
        return view('surat.show', compact('surat'));
    }


    public function destroy(string $id)
    {
        $surat = Surat::findOrFail($id);
 
        $surat->delete();
 
        return redirect()->route('page.index')->with('success', 'Surat berhasil dihapus');

    }
    
}