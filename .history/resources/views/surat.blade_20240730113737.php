@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <head>
            <title>Offering Letter</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f0f0; }
                .container { max-width: 800px; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
                h2, h3 { text-align: center; margin-top: 50px; margin-bottom: 0px; }
                h4 { text-align: left; margin-top: 50px; margin-bottom: 0px; }
                p { margin-bottom: 5px; }
                .company-info { text-align: left; margin-top: 40px; color: #666; }
                .company-info p { margin: 0; }
                h3 { margin-top: 0px; }
                h4 { margin-top: 0px; }
                .job {
                    margin-top: 10px; margin-bottom: -10px;
                }
                .job1 {
                    margin-bottom: 10px; margin-top: 30px; width: 90%; margin-left: 150px;
                }
                .job2 {
                    margin-bottom: 10px; margin-top: -10px;
                }
                .job9 {
                    margin-bottom: 10px; margin-top: -10px; width: 200px; 
                }
                .job7 {
                    margin-bottom: 0px; margin-top: -20px;
                }
                .job8 {
                    margin-bottom: 0px; margin-top: 0px;
                }
                .job6 {
                    margin-bottom: 10px; margin-top: -10px; text-align: center;
                }
                .job3 {
                    margin-bottom: 10px; margin-top: 10px; width: 300px; margin-right: -150px;
                }
                .job4 {
                    margin-bottom: 10px; margin-top: 10px; text-align: center;
                }
                .table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 10px;
                    text-align: left;
                }
                th, td {
                    padding: 8px;
                    padding-right: 98px;
                    margin-right: 98px;
                    border-bottom: 1px solid #fff;
                }
                .sincerely-right-side {
                    float: left;
                    padding: 30px;
                    margin-right: 20px;
                    margin-left: 90px;
                }
                .forleft {
                    float: left;
                    text-align: left;
                    margin-right: 20px;
                }
                .forleft2 {
                    text-align: right;
                }
            </style>
        </head>
        <body>
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
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $(".indo").hide();
                $("#btn_indo").click(function(){
                    $(".english").hide();
                    $(".indo").show();
                });
                $("#btn_eng").click(function(){
                    $(".english").show();
                    $(".indo").hide();
                });
                });
            </script>
    </body>
    </div>
@endsection
