<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <style>
        small {
                display: block;
                margin-top: -25px;
                color: green;
            }
        .pull-center {
            text-align: center;
            margin-left: 90px;
            margin-top: 10px;
            text-size-adjust: 90px;
            font-size: 30px;
            padding: 10px;
            }
        .pull-right {
            text-align: right;
            margin-right: 10px;
            margin-top: 10px;
            text-size-adjust: 90px;
            font-size: 30px;
            }
        .card-head{
            padding: 0.5rem 2rem ;
            margin-bottom: 10;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 2px solid rgba(0, 0, 0, 0.125);
        }
        .btn-second{
            border-right-width: 43.8;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<!-- <table>
    <tr>
            <td>Fix</td>
    </tr>
</table> -->

@extends('layout.main')

@section('title', 'Program')

@section('breadcrumbs')
<!-- <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Program</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Program</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div> -->
@endsection






@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-center">
            <strong>Tambah Surat</strong>
        </div>
        <div class="card">
            <div class="card-head">
                <div class="pull-right">
                    <a href="{{ url('isisuratsponsorship') }}" class="btn btn-secondary btn-sm btn-second">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ route('postsurat') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Nomor Urut</label>
                                <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" value="{{ old('nomor') }}" autofocus>
                                @error('nomor')
                                <div class="nomor">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nomor Surat</label>
                                <input type="text" name="nosurat" class="form-control @error('nosurat') is-invalid @enderror" value="{{ old('nosurat') }}" autofocus>
                                @error('nosurat')
                                <div class="nomor">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="2" class="form-group">
                                <label>Tempat Pembuatan</label>
                                <input type="text" name="tempat_buat" class="form-control @error('tempat_buat') is-invalid @enderror" value="{{ old('tempat_buat') }}" autofocus>
                                @error('tempat_buat')
                                <div class="nomor">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="4" class="form-group">
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
                            
                            <div id="5" class="form-group">
                                <label>Nama Pembuat</label>
                                <input type="text" name="nama_pembuat" class="form-control @error('nama_pembuat') is-invalid @enderror" value="{{ old('nama_pembuat') }}" autofocus>
                                @error('nama_pembuat')
                                <div class="nomor">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="6" class="form-group">
                                <label>Jabatan Pembuat</label>
                                <input type="text" name="jabatan_pembuat" class="form-control @error('jabatan_pembuat') is-invalid @enderror" value="{{ old('jabatan_pembuat') }}" autofocus>
                                @error('jabatan_pembuat')
                                <div class="nomor">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="6" class="form-group">
                                <label>Id Tipe Surat</label>
                                <select name="id_tipe_surat" class="form-control @error('id_tipe_surat') is-invalid @enderror">
                                    <option value="2">- Pilih -</option>
                                    @foreach ($jenis_surat as $item)
                                        <option value="{{ $item->id }}" {{ old('id_tipe_surat') == $item->id ? 'selected' : null }}>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_pembuat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-second">Save</button>
                        </form>

                        <a href="show">Detail</a>
                    </div>
                </div>

            </div>
        </div>      

    </div>

</div>
@endsection


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#surat').on('change', function() {
                var nama = $(this).val();
                // console.log(kode_kategori);
                if (nama) {
                    $.ajax({
                        url: '/barang/' + nama,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data);
                            if (data) {
                                $('#barang').empty();
                                $('#barang').append('<option value="">-Pilih-</option>');
                                $.each(data, function(key, user) {
                                    $('select[name="barang"]').append(
                                        '<option value="' + user.id + '">' +
                                        user.nama + '</option>'
                                    );
                                });
                            } else {
                                $('#barang').empty();
                            }
                        }
                    });
                } else {
                    $('#barang').empty();
                }
            });
        });
    </script>




</body>
</html>

