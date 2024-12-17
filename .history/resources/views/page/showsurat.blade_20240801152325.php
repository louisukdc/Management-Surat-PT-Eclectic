@extends('layouts.app')

@section('title', 'Sponsorship Letter')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
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
                    $surat = (object)[
                        'nomor' => 'SPONSORSHIP/2024/001',
                        'tempat_buat' => 'Jakarta',
                        'tgl_buat' => '2024-07-30',
                        'nama_pembuat' => 'John Doe',
                        'jabatan_pembuat' => 'Director'
                    ];
                    ?>
                    <div class="container">
                        <h3><u>SPONSORSHIP LETTER</u></h3>
                        <h3><?php echo $surat->nomor; ?></h3>
                        <table class="job">
                            <tr style="width:105%">
                                <td class="forleft2" colspan="2">
                                    <p class="job1"><?php echo $surat->tempat_buat; ?>, <?php echo date('M d Y', strtotime($surat->tgl_buat)); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b>
                                        <p>To:</p>
                                        <p class="job3" style="margin-right: 150px; width: 35%"><?php echo $surat->nama_pembuat; ?></p>
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="job3">Dear Sir/Madam</p>
                                    <p class="job2 english">I, the undersigned:</p>
                                    <p class="job3">Name</p>
                                    <p class="job2 english">Position</p>
                                </td>
                                <td>
                                    <p>: <?php echo $surat->nama_pembuat; ?></p>
                                    <p>: <?php echo $surat->jabatan_pembuat; ?></p>
                                </td>
                            </tr>
                        </table>
                        <p>
                            <br>Is a permanent employee as Consultant at PT. Eclectic Consulting and will be going to
                            South Korea for holiday from April 27th, 2020 until May 2nd, 2020.</br>
                            <br>All kinds of expenses during the trip will be fully covered by herself. I acknowledge and guarantee that she will not seek any employment or permanent stay in your country and will return to Indonesia after the end of the trip.</br>
                            <br>It will be highly appreciated if you could grant her the necessary visa to enter your country at your earliest convenience.</br>
                            <br>Thank you for your kind attention and cooperation.</br>
                        </p>
                        <table class="sincerely">
                            <tr>
                                <td style="width: 50%;">
                                    <div class="english">
                                        <p>Sincerely</p>
                                        <div class="company-info">
                                            <img src="<?php echo $imagePath; ?>" alt="Image">
                                        </div>
                                        <p><br><u><?php echo $surat->nama_pembuat; ?></u>
                                        <br><?php echo $surat->jabatan_pembuat; ?></p>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection
