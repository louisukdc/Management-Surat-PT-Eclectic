<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="{{ url('dashboard') }}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('isisurat') }}">
                        <i class="nc-icon nc-email-85"></i>
                        <p>Buat Surat</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('surat') }}">
                        <i class="nc-icon nc-badge"></i>
                        <p>X</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('daftarsurat') }}">
                        <i class="nc-icon nc-tablet-2"></i>
                        <p>y</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('offering') }}">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>Template Surat</p>
                    </a>
                </li>
                <!-- Add more navigation items here -->
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
