
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Components</div>
                <a class="nav-link" href="{{ route('application') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-file-text"></i></div>
                    Applications
                </a>
                <a class="nav-link" href="{{ route('users') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-user-secret"></i></div>
                    User Accounts
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>
