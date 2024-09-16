@extends('layouts.template_admin')

@section('title', 'Dashboard')

@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Dashboard
                        </h1>
                        <div class="page-header-subtitle">Módulo para la gestión de KLimaCity</div>
                    </div>
                    <div class="col-12 col-xl-auto mt-4">
                        <div class="input-group input-group-joined border-0" style="width: 19rem">
                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                            <input class="form-control ps-auto" placeholder="{{ $data['fecha'] }}" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10">

        <div class="card card-waves mb-4">
            <div class="card-body p-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        @if (session('user'))
                            <h2 class="text-primary mb-4">¡Bienvenido de vuelta, {{ ucwords(strtolower(session('user')->name . ' ' . session('user')->paternal_surname . ' ' . session('user')->maternal_surname)) }}!</h2>
                        @else
                            <h2 class="text-primary mb-4">¡Bienvenido de vuelta!</h2>
                        @endif
                        <p class="text-gray-700">Puedes iniciar a gestionar tu tienda en línea </p>
                        <p class="text-gray-700">¿Comenzamos?</p>
                        <a class="btn btn-primary p-3" href="{{ route('product.index') }}">
                            Ir a Módulo Productos
                            <i class="ms-1" data-feather="arrow-right"></i>
                        </a>
                    </div>
                    <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="" /></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Productos</div>
                                <div class="h5">{{ $data['totalProductos'] }}</div>
                            </div>
                            <div class="ms-2">
                                <i class="fa-solid fa-box fa-2x text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="text-decoration-none">
                    <div class="card border-start-lg border-start-success h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-success mb-1">Categorías</div>
                                    <div class="h5">{{ $data['totalCategorias'] }}</div>
                                </div>
                                <div class="ms-2">
                                    <i class="fa-solid fa-layer-group fa-2x text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="text-decoration-none">
                    <div class="card border-start-lg border-start-danger h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-danger mb-1">Sub Categorías</div>
                                    <div class="h5">{{ $data['totalSubCategorias'] }}</div>
                                </div>
                                <div class="ms-2">
                                    <i class="fa-solid fa-indent fa-2x text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection