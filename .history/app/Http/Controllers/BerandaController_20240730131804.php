<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Isi_Surat;
use App\Models\Surat;
use Illuminate\Support\Arr;
use App\Models\Beranda;


class BerandaController extends Controller
{
    //
    public function index()
    {
        $title = 'Beranda';

        return view('admin.index', compact('title'));
    }

    

    public function isisuratsponsorship()
    {
        $beranda = Beranda::all();
        return view('isisurat', compact('beranda'));
    }

    public function insert(Request $request)
    {
        $beranda = new Beranda(); // Create a new instance of the Beranda model
        $beranda->nosurat = $request->input('nosurat');
        $beranda->namapembuat = $request->input('namapembuat'); // Corrected 'nosurat' to 'namapembuat'
        $beranda->save();
    
        return redirect('/')->with('status', 'Inserted Successfully');
    }
    
    public function create() {
        return view('post.create');    
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beranda_controllers' => 'required|string|max:255',
        ]);

        $beranda_controllers = BerandaController::create($validatedData);

        return redirect()->route('beranda_controllers.index')->with('success', 'Property created successfully!');
    }


    public function indexs(Request $request)
    {
        // return view('suratketerangankerja');
        return view('indexs');

    }

    public function surat(Request $request)
    {
        // return view('suratketerangankerja');
        return view('tester');

    }
    public function surat_keterangan_kerja(Request $request)
    {
        $surat = Surat::find('1');
        $dataDetail = array();

        $isi_nama = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Nama')->first();
        $isi_alamat = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Alamat')->first();
        $isi_jabatan = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Jabatan')->first();
        $isi_mk_1 = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Masa_Kerja_1')->first();
        $isi_mk_2 = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Masa_Kerja_2')->first();
        $isi_mk1_e = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Masa_Kerja_1_English')->first();
        $isi_mk2_e = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Masa_Kerja_2_English')->first();
        $isi_alasan = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Alasan')->first();
        $isi_alasan_e = Isi_Surat::where('id_surat', '=', $surat->id)->where('nama_input', '=', 'Alasan English')->first();

        $dataDetail = Arr::add($dataDetail, 'Nama', $isi_nama->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Alamat', $isi_alamat->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Jabatan', $isi_jabatan->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Masa_Kerja_1', $isi_mk_1->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Masa_Kerja_2', $isi_mk_2->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Masa_Kerja_1_English', $isi_mk1_e->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Masa_Kerja_2_English', $isi_mk2_e->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Alasan', $isi_alasan->isi_input);
        $dataDetail = Arr::add($dataDetail, 'Alasan_English', $isi_alasan_e->isi_input);

        return view('suratketerangankerja', compact('surat', 'dataDetail'));

    }
    public function suratoffering(Request $request)
    {
        $suratoffering = Surat::find('3');
        $dataDetailoffering = array();

        $isi_kepada = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Kepada')->first();
        $isi_posisi = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Posisi')->first();
        $isi_bertugas = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Bertugas')->first();
        $isi_tanggal = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Tanggal')->first();
        $isi_selama = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Selama')->first();
        $isi_tertulis = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Tertulis')->first();
        $isi_terdiriatas = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Terdiri atas')->first();
        $isi_terdiriatasx = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Terdiri atas :')->first();
        $isi_melalui = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Melalui')->first();
        $isi_hakcuti = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Hakcuti')->first();
        $isi_benefit = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Benefit')->first();
        $isi_benefit = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Benefitx')->first();


        $dataDetailoffering = Arr::add($dataDetailoffering, 'Kepada', $isi_kepada->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Posisi', $isi_posisi->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Bertugas', $isi_bertugas->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Tanggal', $isi_tanggal->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Selama', $isi_selama->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Tertulis', $isi_tertulis->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Terdiri atas', $isi_terdiriatas->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Terdiri atas :', $isi_terdiriatasx->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Melalui', $isi_melalui->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Hakcuti', $isi_hakcuti->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Benefit', $isi_benefit->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Benefitx', $isi_benefit->isi_input);

        return view('page/suratoffering', compact('suratoffering', 'dataDetailoffering'));

    }
    public function suratofferingx(Request $request)
    {
        $suratoffering = Surat::find('3');
        $dataDetailoffering = array();

        $isi_kepada = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Kepada')->first();
        $isi_posisi = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Posisi')->first();
        $isi_bertugas = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Bertugas')->first();
        $isi_tanggal = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Tanggal')->first();
        $isi_selama = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Selama')->first();
        $isi_tertulis = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Tertulis')->first();
        $isi_terdiriatas = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Terdiri atas')->first();
        $isi_terdiriatasx = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Terdiri atas :')->first();
        $isi_melalui = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Melalui')->first();
        $isi_hakcuti = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Hakcuti')->first();
        $isi_benefit = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Benefit')->first();
        $isi_benefit = Isi_Surat::where('id_surat', '=', $suratoffering->id)->where('nama_input', '=', 'Benefitx')->first();


        $dataDetailoffering = Arr::add($dataDetailoffering, 'Kepada', $isi_kepada->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Posisi', $isi_posisi->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Bertugas', $isi_bertugas->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Tanggal', $isi_tanggal->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Selama', $isi_selama->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Tertulis', $isi_tertulis->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Terdiri atas', $isi_terdiriatas->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Terdiri atas :', $isi_terdiriatasx->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Melalui', $isi_melalui->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Hakcuti', $isi_hakcuti->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Benefit', $isi_benefit->isi_input);
        $dataDetailoffering = Arr::add($dataDetailoffering, 'Benefitx', $isi_benefit->isi_input);

        return view('page/suratoffering', compact('suratoffering', 'dataDetailoffering'));

    }
    public function suratsponsorship(Request $request)
    {
        $suratsponsorship = Surat::find('2');
        $dataDetailsponsorship = array();

        $isi_name = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Name')->first();
        $isi_position = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Position')->first();
        $isi_nametwo = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Nametwo')->first();
        $isi_positiontwo = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Positiontwo')->first();
        $isi_pasport = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Passport No.')->first();
        $isi_tanggalsurat = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Tanggalsurat')->first();
        $isi_to = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'To')->first();
        $isi_tox = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Tox')->first();
        $isi_toxy = Isi_Surat::where('id_surat', '=', $suratsponsorship->id)->where('nama_input', '=', 'Toxy')->first();


        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Name', $isi_name->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Position', $isi_position->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Nametwo', $isi_nametwo->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Positiontwo', $isi_positiontwo->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'PassportNo', $isi_pasport->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Tanggalsurat', $isi_tanggalsurat->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'To', $isi_to->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Tox', $isi_tox->isi_input);
        $dataDetailsponsorship = Arr::add($dataDetailsponsorship, 'Toxy', $isi_toxy->isi_input);

        return view('suratsponsorship', compact('suratsponsorship', 'dataDetailsponsorship'));

    }


}
