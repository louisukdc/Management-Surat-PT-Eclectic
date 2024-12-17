@extends('layouts.app')

@section('title', 'Tambah Surat')

@section('content')
        <div class="bg-white shadow-md rounded-lg mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold">Tambah Surat</h4>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h4 class="text-xl font-semibold">List Surat</h4>
                </div>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
            </div>
            <hr />
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="px-6 py-4">
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
            </div>
        </div>
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#suratTable').DataTable();
        });
    </script>
@endsection
