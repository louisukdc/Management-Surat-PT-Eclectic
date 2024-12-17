<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{ url('dashboard') }}" class="simple-text logo-normal">
            <img src="{{ asset('assets/img/logo-EC.png') }}">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="logoline">
                <a href="{{ url('dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="buat">
                <a href="{{ url('index') }}">
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
                <a href="{{ route('surat') }}">
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
