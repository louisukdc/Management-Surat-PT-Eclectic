@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Tambah Surat</h4>
            </div>
            <div class="px-6 py-4">
                <form action="{{ route('postsurat') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Form fields here (as provided by you) -->
                    <!-- Nomor -->
                    <div class="mb-6">
                        <label for="nomor" class="block text-xl text-gray-700">Nomor Urut</label>
                        <input type="text" id="nomor" name="nomor" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('nomor') border-red-500 @enderror" value="{{ old('nomor') }}" autofocus>
                        @error('nomor')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor Surat -->
                    <div class="mb-6">
                        <label for="nosurat" class="block text-xl text-gray-700">Nomor Surat</label>
                        <input type="text" id="nosurat" name="nosurat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('nosurat') border-red-500 @enderror" value="{{ old('nosurat') }}">
                        @error('nosurat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tempat Pembuatan -->
                    <div class="mb-6">
                        <label for="tempat_buat" class="block text-xl text-gray-700">Tempat Pembuatan</label>
                        <input type="text" id="tempat_buat" name="tempat_buat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('tempat_buat') border-red-500 @enderror" value="{{ old('tempat_buat') }}">
                        @error('tempat_buat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Id Pembuat -->
                    <div class="mb-6">
                        <label for="id_pembuat" class="block text-xl text-gray-700">Id Pembuat</label>
                        <select id="id_pembuat" name="id_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('id_pembuat') border-red-500 @enderror">
                            <option value="">- Pilih -</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}" {{ old('id_pembuat') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_pembuat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nama Pembuat -->
                    <div class="mb-6">
                        <label for="nama_pembuat" class="block text-xl text-gray-700">Nama Pembuat</label>
                        <input type="text" id="nama_pembuat" name="nama_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('nama_pembuat') border-red-500 @enderror" value="{{ old('nama_pembuat') }}">
                        @error('nama_pembuat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jabatan Pembuat -->
                    <div class="mb-6">
                        <label for="jabatan_pembuat" class="block text-xl text-gray-700">Jabatan Pembuat</label>
                        <input type="text" id="jabatan_pembuat" name="jabatan_pembuat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('jabatan_pembuat') border-red-500 @enderror" value="{{ old('jabatan_pembuat') }}">
                        @error('jabatan_pembuat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Id Tipe Surat -->
                    <div class="mb-6">
                        <label for="id_tipe_surat" class="block text-xl text-gray-700">Id Tipe Surat</label>
                        <select id="id_tipe_surat" name="id_tipe_surat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-xl py-1 focus:ring-blue-500 focus:border-blue-500 @error('id_tipe_surat') border-red-500 @enderror">
                            <option value="">- Pilih -</option>
                            @foreach ($jenis_surat as $item)
                                <option value="{{ $item->id }}" {{ old('id_tipe_surat') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_tipe_surat')
                        <p class="mt-2 text-xl text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-500 text-white text-xl px-6 py-2 rounded-md hover:bg-blue-600">Save</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Daftar Surat</h4>
            </div>
            <div class="px-6 py-4">
                <table id="suratTable" class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Nomor</th>
                            <th class="py-3 px-6 text-left">Nama Pembuat</th>
                            <th class="py-3 px-6 text-left">Jabatan Pembuat</th>
                            <th class="py-3 px-6 text-left">Created At</th>
                            <th class="py-3 px-6 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($surats as $surat)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $surat->id }}</td>
                            <td class="py-3 px-6 text-left">{{ $surat->nomor }}</td>
                            <td class="py-3 px-6 text-left">{{ $surat->nama_pembuat }}</td>
                            <td class="py-3 px-6 text-left">{{ $surat->jabatan_pembuat }}</td>
                            <td class="py-3 px-6 text-left">{{ $surat->created_at->diffForHumans() }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="far fa-edit"></i>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#suratTable').DataTable();
        });
    </script>
@endsection
