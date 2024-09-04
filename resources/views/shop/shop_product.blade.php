@extends('layouts.template_shop')
@section('content-nav-shop')
    <ul class="menu">
        <li>
            <button id="todos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Todos los productos</button>
        </li>
        <li>
            <a class="boton-menu boton-carrito" href="{{ route('shop.shoppingcart') }}">
                <i class="bi bi-cart-fill"></i> Carrito <span id="numerito" class="numerito">0</span>
            </a>
        </li>
        @foreach ($categories as $category)
        <li>
            <button id="{{ $category->id }}" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>{{ $category->name }}</button>
        </li>
        @endforeach
    </ul>
@endsection

@section('content-main-shop')
    <h2 class="titulo-principal" id="titulo-principal">Catálogo de productos</h2>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{ route('shop.index') }}">Inicio</a>
        
    </div>

    <div id="contain-category-cards" class="contain-category-cards"></div>
    <div id="contenedor-productos" class="contenedor-productos"></div>
@endsection

@section('content-script-shop')
    @include('layouts._partials.script_shop')
@endsection