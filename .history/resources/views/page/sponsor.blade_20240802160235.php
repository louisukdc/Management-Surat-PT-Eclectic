<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship Letter</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4 bg-white shadow-lg mt-8">
        <h3 class="text-2xl text-center font-bold underline mb-6">SPONSORSHIP LETTER</h3>
        <h3 class="text-xl text-center mb-6">{{ $suratsponsorship->nomor }}</h3>

        <div class="text-right mb-6">
            <p class="text-gray-600">{{ $suratsponsorship->tempat_buat }}, {{ Carbon\Carbon::parse($suratsponsorship->tgl_buat)->format('M d Y') }}</p>
        </div>

        <div class="mb-4">
            <b>
                <p>To:</p>
                <p class="ml-4">{{ $dataDetailsponsorship['To'] }}</p>
                <p class="ml-4">{{ $dataDetailsponsorship['Tox'] }}</p>
                <p class="ml-4">{{ $dataDetailsponsorship['Toxy'] }}</p>
            </b>
        </div>

        <div class="mb-4">
            <p class="font-semibold">Dear Sir/Madam,</p>
            <p class="mb-2">I, the undersigned:</p>
            <div class="flex">
                <div class="w-1/2">
                    <p>Name</p>
                    <p>Position</p>
                </div>
                <div class="w-1/2">
                    <p>: {{ $suratsponsorship->nama_pembuat }}</p>
                    <p>: {{ $suratsponsorship->jabatan_pembuat }}</p>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <p class="font-semibold">Herewith certify that:</p>
            <div class="flex">
                <div class="w-1/2">
                    <p>Name</p>
                    <p>Position</p>
                    <p>Passport No.</p>
                </div>
                <div class="w-1/2">
                    <p>: {{ $dataDetailsponsorship['Nametwo'] }}</p>
                    <p>: {{ $dataDetailsponsorship['Positiontwo'] }}</p>
                    <p>: {{ $dataDetailsponsorship['PassportNo'] }}</p>
                </div>
            </div>
        </div>

        <p class="mb-4">
            Is a permanent employee as Consultant at PT. Eclectic Consulting and will be going to South Korea for holiday from April 27th, 2020 until May 2nd, 2020.
        </p>
        <p class="mb-4">
            All kinds of expenses during the trip will be fully covered by herself. I acknowledge and guarantee that she will not seek any employment or permanent stay in your country and will return to Indonesia after the end of the trip.
        </p>
        <p class="mb-4">
            It will be highly appreciated if you could grant her the necessary visa to enter your country at your earliest convenience.
        </p>
        <p class="mb-4">
            Thank you for your kind attention and cooperation.
        </p>

        <div class="mt-8 text-left">
            <p class="font-semibold">Sincerely,</p>
            <div class="flex items-center">
                <img src="{{ $imagePath }}" alt="Image" class="h-20 w-20 mr-4">
                <div>
                    <p class="mt-4">
                        <br><u>{{ $suratsponsorship->nama_pembuat }}</u>
                        <br>{{ $suratsponsorship->jabatan_pembuat }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button id="btn_indo" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2">Ganti ke Bahasa Indonesia</button>
        <button id="btn_eng" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ganti ke Bahasa English</button>
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
