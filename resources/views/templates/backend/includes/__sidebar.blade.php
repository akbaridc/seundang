<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/template') }}/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/template') }}/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/template') }}/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/template') }}/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/backoffice/dashboard">
                        <i class="las la-tachometer-alt"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title"><span>Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/backoffice/user">
                        <i class="las la-tachometer-alt"></i> <span>Member</span>
                    </a>

                </li> <!-- end Dashboard Menu -->
                <li class="menu-title"><span>Settings</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/backoffice/post/faq">
                        <i class="las la-question-circle"></i> <span>FAQ</span>
                    </a>
                    <a class="nav-link menu-link" href="/backoffice/post/term-condition">
                        <i class="las la-book"></i><span>Term n Conditions</span>
                    </a>
                    <a class="nav-link menu-link" href="/backoffice/post/privacy-policy">
                        <i class="las la-book"></i><span>Kebijakan dan Privasi</span>
                    </a>
                    <a class="nav-link menu-link" href="/backoffice/site">
                        <i class="lab la-chrome"></i> <span>Site</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
