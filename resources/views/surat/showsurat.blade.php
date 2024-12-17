<!DOCTYPE html>
<html>
    <head>
        <title>Sponsorship Letter</title>
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
            <h3><u>SPONSORSHIP LETTER</u></h3>
            <h3>{!! $surat->nomor !!}</h3>
            <table class="job">
                <tr style="width:105%">
                    <td class="forleft2"  colspan="2">
                        <p class="job1">{{$surat->tempat_buat}}, {{Carbon\Carbon::parse($surat->tgl_buat)->format('M d Y')}}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <b>
                            <p>To:</p>
                            <p class="job3" style="margin-right: 150px; width: 35%">{{$surat->nama_pembuat}}</p>
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
                        <p>: {{$surat->nama_pembuat}}</p>
                        <p>: {{$surat->jabatan_pembuat}}</p>
                    </td>
                </tr>
            </table>
                    <p>
                        <br>Is a permanent employee as Consultant at PT. Eclectic Consulting and will be going to
                        South Korea for holiday from April 27th, 2020 until May 2nd, 2020.</br>
                        <br>All kinds of expenses during the trip will be fully covered by herself. I acknowledge. and guarantee that she will not, seek any employment or permanent stay in your country and will return to Indonesia after the end of the trip.</br>
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
                        <p><br><u>{{$surat->nama_pembuat}}</u>
                        <br>{{$surat->jabatan_pembuat}}</p>
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
</body>
</html>
