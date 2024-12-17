@extends('layouts.app')

@section('title', 'surat')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Surat Page</h4>
                </div>
                <div class="card-body">
                    <table style="width: 110%; text-align:justify">
                        <tr>
                            <td>
                                <p>
                                    <br>Dengan Hormat</br>
                                    <br>Kami mewakili PT Eclectic Consulting Menyampaikan informasi bahwa Anda terpilih untuk mengisi posisi {{$dataDetailoffering['Posisi']}} di perusahaan kami.</br>
                                    <br>Selama proses seleksi dan wawancara, kami sangat terkesan dengan ketrampilan dan pengalaman Anda, dan kami percaya bahwa hal tersebut sangat bernilai dan dapat memberikan kontribusi bagi perusahaan kami. </br>
                                    <br>Apabila menerima tawaran ini, Anda akan memegang posisi sebagai {{$dataDetailoffering['Posisi']}} dan akan bertugas di Project Kami Yang sedang berjalan. Anda akan bertugas {{$dataDetailoffering['Bertugas']}}.</br>
                                    <br>Kami berharap Anda dapat bergabung dengan kami pada tanggal {{$dataDetailoffering['Tanggal']}}, Seandainya berhalangan pada tanggal tersebut, kami mohon Anda dapat segera menghubungi dan memebritahukan kepada kami. Anda diharapkan untuk bekerja menyesuaikan project yang sedang berjalan.</br>
                                    <br>Anda akan menjalani masa percobaan selama {{$dataDetailoffering['Selama']}}, yang mana dalam waktu tersebut masing-masing pihak berhak memutuskan hubungan kerja dengan memberikan pemberitahuan tertulis {{$dataDetailoffering['Tertulis']}} sebelumnya.</br>
                                    <br>Atas kontribusi Anda menjalankan tanggung jawab pekerjaan, perusahaan kami akan memberikan imbalan berupa kompensasi yang terdiri atas:</br>      
                                    <ul>
                                        <li>{{$dataDetailoffering['Terdiri atas']}}</li>
                                        <li>{{$dataDetailoffering['Terdiri atas :']}}</li>
                                    </ul>
                                </p>
                                <p>
                                    <br>Yang akan dibayarkan setiap bulan melalui {{$dataDetailoffering['Melalui']}} pada akhir bulan Perusahaan memberi Anda hak cuti {{$dataDetailoffering['Hakcuti']}}.</br>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                            <p>Benefit:</p>
                                <ul>
                                    <li>{{$dataDetailoffering['Benefit']}}</li>
                                    <li>{{$dataDetailoffering['Benefitx']}}</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

