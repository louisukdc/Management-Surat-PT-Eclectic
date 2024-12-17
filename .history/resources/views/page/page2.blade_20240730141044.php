@extends('layouts.app') 

@section('title', 'Tambah Surat')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Surat</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('postsurat') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nomor Urut</label>
                            <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" value="{{ old('nomor') }}" autofocus>
                            @error('nomor')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" name="nosurat" class="form-control @error('nosurat') is-invalid @enderror" value="{{ old('nosurat') }}" autofocus>
                            @error('nosurat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tempat Pembuatan</label>
                            <input type="text" name="tempat_buat" class="form-control @error('tempat_buat') is-invalid @enderror" value="{{ old('tempat_buat') }}" autofocus>
                            @error('tempat_buat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Id Pembuat</label>
                            <select name="id_pembuat" class="form-control @error('id_pembuat') is-invalid @enderror">
                                <option value="2">- Pilih -</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}" {{ old('id_pembuat') == $item->id ? 'selected' : null }}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_pembuat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Pembuat</label>
                            <input type="text" name="nama_pembuat" class="form-control @error('nama_pembuat') is-invalid @enderror" value="{{ old('nama_pembuat') }}" autofocus>
                            @error('nama_pembuat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jabatan Pembuat</label>
                            <input type="text" name="jabatan_pembuat" class="form-control @error('jabatan_pembuat') is-invalid @enderror" value="{{ old('jabatan_pembuat') }}" autofocus>
                            @error('jabatan_pembuat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Id Tipe Surat</label>
                            <select name="id_tipe_surat" class="form-control @error('id_tipe_surat') is-invalid @enderror">
                                <option value="2">- Pilih -</option>
                                @foreach ($jenis_surat as $item)
                                    <option value="{{ $item->id }}" {{ old('id_tipe_surat') == $item->id ? 'selected' : null }}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_tipe_surat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
