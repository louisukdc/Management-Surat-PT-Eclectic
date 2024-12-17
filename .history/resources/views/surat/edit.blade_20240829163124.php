@extends('layouts.app')

@section('title', 'Daftar Surat')

@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('surat.update', $surat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nomor Urut</label>
                <input type="text" name="nomor" class="form-control" placeholder="nomor" value="{{ $surat->nomor }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Surat</label>
                <input type="text" name="nosurat" class="form-control" placeholder="nosurat" value="{{ $surat->nosurat }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tempat pembuatan</label>
                <input type="text" name="tempat_buat" class="form-control" placeholder="tempat_buat" value="{{ $surat->tempat_buat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Id Pembuatan</label>
                <input type="text" name="id_pembuat" class="form-control" placeholder="id_pembuat" value="{{ $surat->id_pembuat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Pembuat</label>
                <input type="text" name="nama_pembuat" class="form-control" placeholder="nama_pembuat" value="{{ $surat->nama_pembuat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jabatan Pembuat</label>
                <input type="text" name="jabatan_pembuat" class="form-control" placeholder="jabatan_pembuat" value="{{ $surat->jabatan_pembuat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Id Tipe Surat</label>
                <input type="text" name="id_tipe_surat" class="form-control" placeholder="id_tipe_surat" value="{{ $surat->id_tipe_surat }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
