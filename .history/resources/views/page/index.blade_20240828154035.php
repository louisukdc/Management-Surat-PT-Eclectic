@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Daftar Surat</h4>
            </div>
            <div class="px-6 py-4">
                <div class="mb-4 flex justify-between items-center">
                    <a href="{{ url('isisurat') }}" class="bg-green-500 text-white text-xl px-6 py-2 rounded-md hover:bg-green-600">
                        Tambah Surat
                    </a>
                    <form action="{{ url('surats') }}" method="GET" class="flex">
                        <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" class="px-4 py-2 border border-gray-300 rounded-l-md">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600">
                            Search
                        </button>
                    </form>
                </div>
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
                                    <a href="{{ route('surat.show', $surat->id) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ url('surats/'.$surat->id.'/edit') }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="{{ url('surats/'.$surat->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $surats->appends(['search' => request('search')])->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#suratTable').DataTable({
                "paging": false, // Disable DataTables pagination
                "info": false, // Disable DataTables info
                "searching": true // Disable DataTables search
            });
        });
    </script>
@endsection
