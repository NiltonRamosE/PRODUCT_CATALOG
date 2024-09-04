
<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Inicio</div>
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <div class="nav-link-icon"><i class="fa-solid fa-chart-column"></i></div>
                    Dashboard
                </a>
                <div class="sidenav-menu-heading">Opciones</div>
                <a class="nav-link" href="{{ route('category.index') }}">
                    <div class="nav-link-icon"><i class="fa-solid fa-layer-group"></i></div>
                    Categoría
                </a>
                <a class="nav-link" href="{{ route('subcategory.index') }}">
                    <div class="nav-link-icon"><i class="fa-solid fa-indent"></i></div>
                    Sub Categoría
                </a>
                <a class="nav-link" href="{{ route('product.index') }}">
                    <div class="nav-link-icon"><i class="fa-solid fa-box"></i></div>
                    Productos
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logueado como:</div>
                @if (session('user'))
                    <div class="sidenav-footer-title">{{ strtolower(session('user')->work_email) }}</div>
                @endif
            </div>
        </div>
    </nav>
</div>
