@extends('layouts.app')

@section('title', 'Sponsorship Letter')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-4">
                <?php
                $imagePath = 'path/to/your/image.jpg';
                ?>
                <div class="container mx-auto">
                    <h3 class="text-center text-2xl font-bold underline mb-4">SPONSORSHIP LETTER</h3>
                    <h3 class="text-center text-xl mb-4">{{ $surat->nomor }}</h3>
                    <table class="w-full mb-4">
                        <tr>
                            <td colspan="2" class="text-left">
                                <p class="mb-2">{{ $surat->tempat_buat }}, {{ date('M d Y', strtotime($surat->tgl_buat)) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>
                                    <p class="mb-2">To:</p>
                                    <p class="mb-2" style="margin-right: 150px; width: 35%">{{ $surat->nama_pembuat }}</p>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-4">
                                <p class="mb-2">Dear Sir/Madam</p>
                                <p class="mb-2">I, the undersigned:</p>
                                <p class="mb-2">Name</p>
                                <p class="mb-2">Position</p>
                            </td>
                            <td>
                                <p class="mb-2">: {{ $surat->nama_pembuat }}</p>
                                <p class="mb-2">: {{ $surat->jabatan_pembuat }}</p>
                            </td>
                        </tr>
                    </table>
                    <p class="mb-4">
                        Is a permanent employee as Consultant at PT. Eclectic Consulting and will be going to South Korea for holiday from April 27th, 2020 until May 2nd, 2020.
                        All kinds of expenses during the trip will be fully covered by herself. I acknowledge and guarantee that she will not seek any employment or permanent stay in your country and will return to Indonesia after the end of the trip.
                        It will be highly appreciated if you could grant her the necessary visa to enter your country at your earliest convenience.
                        Thank you for your kind attention and cooperation.
                    </p>
                    <table class="w-full">
                        <tr>
                            <td class="text-left">
                                <div class="mb-4">
                                    <p class="mb-2">Sincerely</p>
                                    <div class="flex items-center mb-2">
                                        <img src="{{ $imagePath }}" alt="Image" class="h-16 w-16">
                                    </div>
                                    <p class="mb-2"><u>{{ $surat->nama_pembuat }}</u></p>
                                    <p>{{ $surat->jabatan_pembuat }}</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="text-right mt-4">
                    <button id="btn_indo" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ganti ke Bahasa Indonesia</button>
                    <button id="btn_eng" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ganti ke Bahasa English</button>
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
@endsection
