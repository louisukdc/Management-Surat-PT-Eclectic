@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Daftar Surat</h4>
                <button type="submit" class="bg-blue-500 text-white text-xl px-6 py-2 rounded-md hover:bg-blue-600"><a href="{{ url('daftarsurat') }}">Save</a></button>
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
