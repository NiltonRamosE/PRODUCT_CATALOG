@extends('layout.template_shop')
@section('content-nav-shop')
    <ul class="menu">
        <li>
            <button id="todos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Todos los productos</button>
        </li>
        
        @foreach ($categories as $category)
        <li>
            <button id="{{ $category->id }}" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>{{ $category->name }}</button>
        </li>
        @endforeach
        <li>
            <a class="boton-menu boton-carrito" href="{{ route('shop.shopcar') }}">
                <i class="bi bi-cart-fill"></i> Carrito <span id="numerito" class="numerito">0</span>
            </a>
        </li>
    </ul>
@endsection

@section('content-main-shop')
    <h2 class="titulo-principal" id="titulo-principal">Catálogo de productos</h2>

    <div id="contain-category-cards" class="contain-category-cards"></div>
    <div id="contenedor-productos" class="contenedor-productos"></div>
@endsection

@section('content-script-shop')
    <script src="{{secure_asset ('js/botonCategoria.js?v=3')}}"></script>
@endsection
