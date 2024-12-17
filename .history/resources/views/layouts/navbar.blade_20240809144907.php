    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="{{ url('/') }}">
                        <i class="nc-icon nc-layout-11"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Dashboard</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="{{ url('/surat') }}">
                        <i class="nc-icon nc-email-85"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Surat</span>
                        </p>
                    </a>
                </li>

                <!-- Add more navigation items here -->
            </ul>
        </div>
    </div>
</nav>
