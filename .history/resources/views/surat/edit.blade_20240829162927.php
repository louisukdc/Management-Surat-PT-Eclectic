@extends('layouts.app')

@section('title', 'Daftar Surat')

@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('surat.update', $surat->id) }}" method="POST">
        @csrf
        @method('PUT')

        'nomor'     => $request->nomor,
        'nosurat'     => $request->nosurat,
        'tempat_buat'   => $request->tempat_buat,
        'tgl_buat'   => $request->tgl_buat,
        'id_tipe_surat'   => $request->id_tipe_surat,
        'id_pembuat'   => $request->id_pembuat,
        'nama_pembuat'   => $request->nama_pembuat,
        'jabatan_pembuat'   => $request->jabatan_pembuat,

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nomor Urut</label>
                <input type="text" name="nomor" class="form-control" placeholder="nomor" value="{{ $surat->nomor }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Surat</label>
                <input type="text" name="nosurat" class="form-control" placeholder="nosurat" value="{{ $product->nosurat }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tempat pembuatan</label>
                <input type="text" name="tempat_buat" class="form-control" placeholder="tempat_buat" value="{{ $product->tempat_buat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Id Pembuatan</label>
                <input type="text" name="id_pembuat" class="form-control" placeholder="id_pembuat" value="{{ $product->id_pembuat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Pembuat</label>
                <input type="text" name="nama_pembuat" class="form-control" placeholder="nama_pembuat" value="{{ $product->nama_pembuat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jabatan Pembuat</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Id Tipe Surat</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
