@extends('layouts.app')

@section('title', 'Kerja')

@section('content')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-6xl flex">
        <!-- Main Content -->
        <div class="w-3/4">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-800 text-white px-6 py-4 rounded-t-lg">
                    <h4 class="text-2xl font-semibold">Surat Page II</h4>
                </div>
                <div class="p-6">
                    <div class="container mx-auto">
                        <h1 class="text-center text-3xl font-bold underline mb-6">KETERANGAN KERJA</h1>
                        <h1 class="text-center text-xl mb-6">{{ $suratoffering->nomor }}</h1>
                        <table class="w-full mb-6">
                            <tr>
                                <td colspan="2" class="w-3/5">
                                    <p>Kepada Yth.</p>
                                    <p class="font-semibold">{{ $dataDetailoffering['Kepada'] }}</p>
                                    <p class="text-gray-500 english">di tempat</p>
                                </td>
                            </tr>
                        </table>
                        <div class="w-full text-justify">
                            <p class="mb-4 text-xl">
                                Dengan Hormat,<br>
                                Kami mewakili PT Eclectic Consulting Menyampaikan informasi bahwa Anda terpilih untuk mengisi posisi {{ $dataDetailoffering['Posisi'] }} di perusahaan kami.<br>
                                Selama proses seleksi dan wawancara, kami sangat terkesan dengan ketrampilan dan pengalaman Anda, dan kami percaya bahwa hal tersebut sangat bernilai dan dapat memberikan kontribusi bagi perusahaan kami.<br>
                                Apabila menerima tawaran ini, Anda akan memegang posisi sebagai {{ $dataDetailoffering['Posisi'] }} dan akan bertugas di Project Kami Yang sedang berjalan. Anda akan bertugas {{ $dataDetailoffering['Bertugas'] }}.<br>
                                Kami berharap Anda dapat bergabung dengan kami pada tanggal {{ $dataDetailoffering['Tanggal'] }}, Seandainya berhalangan pada tanggal tersebut, kami mohon Anda dapat segera menghubungi dan memberitahukan kepada kami. Anda diharapkan untuk bekerja menyesuaikan project yang sedang berjalan.<br>
                                Anda akan menjalani masa percobaan selama {{ $dataDetailoffering['Selama'] }}, yang mana dalam waktu tersebut masing-masing pihak berhak memutuskan hubungan kerja dengan memberikan pemberitahuan tertulis {{ $dataDetailoffering['Tertulis'] }} sebelumnya.<br>
                                Atas kontribusi Anda menjalankan tanggung jawab pekerjaan, perusahaan kami akan memberikan imbalan berupa kompensasi yang terdiri atas:<br>
                                <ul class="list-disc ml-6">
                                    <li>{{ $dataDetailoffering['Terdiri atas'] }}</li>
                                    <li>{{ $dataDetailoffering['Terdiri atas :'] }}</li>
                                </ul>
                            </p>
                            <p class="mb-4 text-xl english">
                                Yang akan dibayarkan setiap bulan melalui {{ $dataDetailoffering['Melalui'] }} pada akhir bulan. Perusahaan memberi Anda hak cuti {{ $dataDetailoffering['Hakcuti'] }}.<br>
                            </p>
                        </div>
                        <div class="w-full text-justify">
                            <p class="text-xl">Benefit:</p>
                            <ul class="list-disc ml-6 text-xl">
                                <li>{{ $dataDetailoffering['Benefit'] }}</li>
                                <li>{{ $dataDetailoffering['Benefitx'] }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button id="btn_indo" class="bg-blue-500 text-white text-xl px-4 py-2 rounded hover:bg-blue-600">Ganti ke Bahasa Indonesia</button>
                        <button id="btn_eng" class="bg-blue-500 text-white text-xl px-4 py-2 rounded hover:bg-blue-600">Ganti ke Bahasa English</button>
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
            <!-- Sidebar -->
            <div class="w-1/4 ml-6">
                @include('layouts/list_template')
            </div>
    </div>
</div>
@endsection