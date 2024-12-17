@extends('layouts.app')

@section('title', 'surat')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    <p class="tmt-3">
                                        {!! $surat->nomor !!}
                                    </p>
                                    <hr>
                                    <h4>{{ $surat->id_tipe_surat }}</h4>
                                    <p class="tmt-3">
                                        {!! $surat->tempat_buat !!}
                                    </p>
                                    <p class="tmt-3">
                                        {!! $surat->tgl_buat !!}
                                    </p>
                                    <p class="tmt-3">
                                        {!! $surat->id_pembuat !!}
                                    </p>
                                    <p class="tmt-3">
                                        {!! $surat->nama_pembuat !!}
                                    </p>
                                    <p class="tmt-3">
                                        {!! $surat->jabatan_pembuat !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            </div>
        </div>
    </div>
@endsection
