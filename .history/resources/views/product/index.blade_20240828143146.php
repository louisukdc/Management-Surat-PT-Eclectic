@extends('layouts.appx')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection


@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Tambah Surat</h4>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">List Product</h1>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
            </div>
            <hr />
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

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
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#suratTable').DataTable();
        });
    </script>
@endsection
