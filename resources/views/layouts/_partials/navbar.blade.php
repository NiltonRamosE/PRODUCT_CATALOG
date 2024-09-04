
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ route('dashboard.index') }}">
        <img src="{{ asset('img/M4.png') }}" alt="" style="height: 50px;">
    </a>
    
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <img class="img-fluid" src="{{ asset('img/usuario_defecto.png') }}">
                
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">

                    <img class="dropdown-user-img" src="{{ asset('img/usuario_defecto.png') }}">
                    <div class="dropdown-user-details">
                        @if (session('user'))
                            <div class="dropdown-user-details-name">{{ ucwords(strtolower(session('user')->paternal_surname . ' ' . session('user')->maternal_surname)) }}</div>
                            <div class="dropdown-user-details-email">{{ strtolower(session('user')->work_email) }}</div>
                        @endif
                        
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Mi perfil
                </a>
                <a class="dropdown-item" href="{{ route('login.out') }}">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Cerrar sesión
                </a>
            </div>
        </li>
    </ul>
</nav>