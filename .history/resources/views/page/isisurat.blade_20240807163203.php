@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="mb-4">
            <a href="{{ url('daftarsurat') }}" class="bg-green-500 text-white text-xl px-6 py-2 rounded-md hover:bg-green-600">
                Tambah Surat
            </a>
        </div>
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Daftar Surat</h4>
            </div>
            <div class="px-6 py-4">
                <table id="suratTable" class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2">ID</th>
                            <th class="py-2">Nomor</th>
                            <th class="py-2">Nomor Surat</th>
                            <th class="py-2">Tempat Pembuatan</th>
                            <th class="py-2">Tanggal Pembuatan</th>
                            <th class="py-2">Nama Pembuat</th>
                            <th class="py-2">Jabatan Pembuat</th>
                            <th class="py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surats as $surat)
                            <tr>
                                <td class="py-2">{{ $surat->id }}</td>
                                <td class="py-2">{{ $surat->nomor }}</td>
                                <td class="py-2">{{ $surat->nosurat }}</td>
                                <td class="py-2">{{ $surat->tempat_buat }}</td>
                                <td class="py-2">{{ $surat->tgl_buat }}</td>
                                <td class="py-2">{{ $surat->nama_pembuat }}</td>
                                <td class="py-2">{{ $surat->jabatan_pembuat }}</td>
                                <td class="py-2">
                                    <a href="{{ route('surat.show', $surat->id) }}" class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('surat.edit', $surat->id) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('surat.destroy', $surat->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $surats->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#suratTable').DataTable();
        });
    </script>
@endsection
