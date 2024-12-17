<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class SuratController extends Controller
{
    public function index()
    {
        $suratCount = Surat::where("id_pembuat", auth()->id())->count();

        return view('surat.index', [
            'suratCount' => $suratCount,
        ]);
    }

    public function create(Request $request)
    {
        return view('surat.create');
    }

    public function store(StoreSuratRequest $request)
    {
        Surat::create([
            'nomor'             => $request->nomor,
            'nosurat'           => $request->nosurat,
            'id_tipe_surat'     => $request->id_tipe_surat,
            'tempat_buat'       => $request->tempat_buat ?? 'Surabaya',
            'tgl_buat'          => now(),
            'id_pembuat'        => auth()->id(),
            'nama_pembuat'      => $request->nama_pembuat,
            'jabatan_pembuat'   => $request->jabatan_pembuat,
            'slug'              => Str::slug($request->nomor, '-'),
            'uuid'              => Str::uuid(),
        ]);

        return to_route('surat.index')->with('success', 'Surat has been created!');
    }

    public function show($uuid)
    {
        $surat = Surat::where("uuid", $uuid)->firstOrFail();

        return view('surat.show', [
            'surat' => $surat,
        ]);
    }

    public function edit($uuid)
    {
        $surat = Surat::where("uuid", $uuid)->firstOrFail();

        return view('surat.edit', [
            'surat' => $surat,
        ]);
    }

    public function update(UpdateSuratRequest $request, $uuid)
    {
        $surat = Surat::where("uuid", $uuid)->firstOrFail();
        $surat->update($request->all());

        $surat->slug = Str::slug($request->nomor, '-');
        $surat->save();

        return redirect()
            ->route('surat.index')
            ->with('success', 'Surat has been updated!');
    }

    public function destroy($uuid)
    {
        $surat = Surat::where("uuid", $uuid)->firstOrFail();
        $surat->delete();

        return redirect()
            ->route('surat.index')
            ->with('success', 'Surat has been deleted!');
    }
}
