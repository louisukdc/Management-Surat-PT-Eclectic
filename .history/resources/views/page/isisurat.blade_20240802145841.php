@extends('layouts.app') 

@section('title', 'Tambah Surat')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Tambah Surat</h4>
            </div>
            <div class="px-6 py-4">
                <form action="{{ route('postsurat') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="nomor" class="block text-gray-700">Nomor Urut</label>
                        <input type="text" id="nomor" name="nomor" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nomor') border-red-500 @enderror" value="{{ old('nomor') }}" autofocus>
                        @error('nomor')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nosurat" class="block text-gray-700">Nomor Surat</label>
                        <input type="text" id="nosurat" name="nosurat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nosurat') border-red-500 @enderror" value="{{ old('nosurat') }}" autofocus>
                        @error('nosurat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="tempat_buat" class="block text-gray-700">Tempat Pembuatan</label>
                        <input type="text" id="tempat_buat" name="tempat_buat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('tempat_buat') border-red-500 @enderror" value="{{ old('tempat_buat') }}" autofocus>
                        @error('tempat_buat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="id_pembuat" class="block text-gray-700">Id Pembuat</label>
                        <select id="id_pembuat" name="id_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('id_pembuat') border-red-500 @enderror">
                            <option value="2">- Pilih -</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}" {{ old('id_pembuat') == $item->id ? 'selected' : null }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_pembuat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nama_pembuat" class="block text-gray-700">Nama Pembuat</label>
                        <input type="text" id="nama_pembuat" name="nama_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nama_pembuat') border-red-500 @enderror" value="{{ old('nama_pembuat') }}" autofocus>
                        @error('nama_pembuat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="jabatan_pembuat" class="block text-gray-700">Jabatan Pembuat</label>
                        <input type="text" id="jabatan_pembuat" name="jabatan_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('jabatan_pembuat') border-red-500 @enderror" value="{{ old('jabatan_pembuat') }}" autofocus>
                        @error('jabatan_pembuat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="id_tipe_surat" class="block text-gray-700">Id Tipe Surat</label>
                        <select id="id_tipe_surat" name="id_tipe_surat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('id_tipe_surat') border-red-500 @enderror">
                            <option value="2">- Pilih -</option>
                            @foreach ($jenis_surat as $item)
                                <option value="{{ $item->id }}" {{ old('id_tipe_surat') == $item->id ? 'selected' : null }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_tipe_surat')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
