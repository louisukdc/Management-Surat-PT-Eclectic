<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('assets/img/logo-small.png') }}">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            Paper Dashboard
        </a>
    </div>
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
