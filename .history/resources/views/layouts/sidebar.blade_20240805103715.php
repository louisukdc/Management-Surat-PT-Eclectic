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
                <a href="{{ url('/') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/surat') }}">
                    <i class="nc-icon nc-email-85"></i>
                    <p>Surat</p>
                </a>
            </li>
            <!-- Add more navigation items here -->
        </ul>
    </div>
</div>
