<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts._partials.head_template')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

    <div class="wrapper">
        <header class="header-mobile">
            <img src="{{ asset('img/M10.png') }}" alt="" class="logo">
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <img src="{{ asset('img/M10.png') }}" alt="" class="logo">
            </header>
            <nav>
                @yield('content-nav-shop')
            </nav>
            
            <footer>
                <p class="texto-footer">© 2024 KLimaCity</p>
            </footer>
        </aside>
        <main>
            @yield('content-main-shop')
        </main>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    @yield('content-script-shop')
</body>
</html>