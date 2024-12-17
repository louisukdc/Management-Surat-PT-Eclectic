@extends('layouts.app')

@section('title', 'Offering')

@section('content')
<div class="flex justify-center mt-8">
    <h1 class="mb-0">Edit Surat</h1>
    <hr />
    <form action="{{ route('surat.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Nomor Urut -->
            <div class="col mb-3">
                <label for="nomor" class="form-label">Nomor Urut</label>
                <input type="text" id="nomor" name="nomor" class="form-control" placeholder="Nomor Urut" value="{{ $surat->nomor }}">
            </div>

            <!-- Nomor Surat -->
            <div class="col mb-3">
                <label for="nosurat" class="form-label">Nomor Surat</label>
                <input type="text" id="nosurat" name="nosurat" class="form-control" placeholder="Nomor Surat" value="{{ $surat->nosurat }}">
            </div>
        </div>

        <div class="row">
            <!-- Tempat Pembuatan -->
            <div class="col mb-3">
                <label for="tempat_buat" class="form-label">Tempat Pembuatan</label>
                <input type="text" id="tempat_buat" name="tempat_buat" class="form-control" placeholder="Tempat Pembuatan" value="{{ $surat->tempat_buat }}">
            </div>

            <!-- Id Pembuat -->
            <div class="col mb-3">
                <label for="id_pembuat" class="form-label">Id Pembuat</label>
                <select id="id_pembuat" name="id_pembuat" class="form-select">
                    <option value="">- Pilih -</option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id }}" {{ $surat->id_pembuat == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Nama Pembuat -->
            <div class="col mb-3">
                <label for="nama_pembuat" class="form-label">Nama Pembuat</label>
                <input type="text" id="nama_pembuat" name="nama_pembuat" class="form-control" placeholder="Nama Pembuat" value="{{ $surat->nama_pembuat }}">
            </div>

            <!-- Jabatan Pembuat -->
            <div class="col mb-3">
                <label for="jabatan_pembuat" class="form-label">Jabatan Pembuat</label>
                <input type="text" id="jabatan_pembuat" name="jabatan_pembuat" class="form-control" placeholder="Jabatan Pembuat" value="{{ $surat->jabatan_pembuat }}">
            </div>
        </div>

        <div class="row">
            <!-- Id Tipe Surat -->
            <div class="col mb-3">
                <label for="id_tipe_surat" class="form-label">Id Tipe Surat</label>
                <select id="id_tipe_surat" name="id_tipe_surat" class="form-select">
                    <option value="">- Pilih -</option>
                    @foreach ($jenis_surat as $item)
                        <option value="{{ $item->id }}" {{ $surat->id_tipe_surat == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection
