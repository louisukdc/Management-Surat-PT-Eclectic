@extends('layouts.app')

@section('title', 'offering')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Surat Page</h4>
                </div>
                <div class="card-body">


                    <?php
                    $companyName = "PT. ECLECTIC CONSULTING";
                    $certificateNumber = "GL/06/OF/IN/13106/2022";
                    $name = "Anastasia Cynthia Widyasari Khuangga";
                    $address = "Jalan Flamboyan Raya Perum Wijaya Kusuma No. 99A, RT 002 RW 005, Kutoharjo, Pati.";
                    $occupation = "SAP ABAP Consultant";
                    $startDate = "15 Maret 2017";
                    $endDate = "30 Juni 2022";
                    $reason = "Mengundurkan diri";
                    $imagePath = 'path/to/your/image.jpg';
                    ?>
                    <div class="container">
                        <h3><u>OFFERING LETTER</u></h3>
                        <!-- <h3>GL/02/OF/IN/20112/2022</h3> -->
                        <h3>{{$suratoffering->nomor}}</h3>
                        <!-- <h3><i>CERTIFICATE OF EMPLOYMENT</i></h3> -->
                        <table class="job">
                            <!-- <tr style="width:105%">
                                <td class="forleft2"  colspan="2">
                                    <p class="job1">Surabaya, February 24th 2020</p>
                                </td>
                            </tr> -->
                            <tr>
                                <td colspan="2" style="width: 55%;">
                                        <p>Kepada Yth.</p>
                                        <p class="job3">{{$dataDetailoffering['Kepada']}}</p>
                                        <p class="job2 english">di tempat</p>
                                </td>
                            </tr>
                        </table>
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


                    <div style="text-align: right; padding: 10px;">
                        <button id="btn_indo">Ganti ke Bahasa Indonesia</button>
                        <button id="btn_eng">Ganti ke Bahasa English</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

