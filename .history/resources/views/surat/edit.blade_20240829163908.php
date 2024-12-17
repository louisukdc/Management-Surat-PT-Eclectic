@extends('layouts.appx')

@section('title', 'Edit Surat')

@section('content')
<div class="card-body">
    <div class="bg-white shadow-md rounded-lg mb-6 p-6">
        <h1 class="text-xl font-semibold mb-4">Edit Surat</h1>
        <form action="{{ route('surat.update', $surat->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nomor Urut</label>
                        <input type="text" name="nomor" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Nomor" value="{{ $surat->nomor }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                        <input type="text" name="nosurat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Nomor Surat" value="{{ $surat->nosurat }}">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tempat Pembuatan</label>
                        <input type="text" name="tempat_buat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Tempat Pembuatan" value="{{ $surat->tempat_buat }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">ID Pembuatan</label>
                        <input type="text" name="id_pembuat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="ID Pembuatan" value="{{ $surat->id_pembuat }}">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Pembuat</label>
                        <input type="text" name="nama_pembuat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Nama Pembuat" value="{{ $surat->nama_pembuat }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jabatan Pembuat</label>
                        <input type="text" name="jabatan_pembuat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Jabatan Pembuat" value="{{ $surat->jabatan_pembuat }}">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">ID Tipe Surat</label>
                    <input type="text" name="id_tipe_surat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="ID Tipe Surat" value="{{ $surat->id_tipe_surat }}">
                </div>
                <div>
                    <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
