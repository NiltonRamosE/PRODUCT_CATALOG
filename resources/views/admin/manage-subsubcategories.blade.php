@extends('layouts.template_admin')

@section('title', 'Gestión Sub Sub Categorias')

@section('styles')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

@endsection

@section('content')

@include('admin.subsubcategories.addSubSubCategory')

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon">
                            <i class="fa-solid fa-indent"></i>
                        </div>
                        Sub Sub Categorías
                    </h1>
                    <div class="page-header-subtitle">Lista de sub sub categorías registradas</div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-xl px-4 mt-n10">
    
    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between align-items-center">
            Sub Sub categorías
            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addSubSubCategoryModal">
                <i class="fa-solid fa-user-plus me-2"></i>
                Añadir Sub Sub categoría
            </button>
        </div>

        @if (session('mensaje') == 'La sub sub categoría se ha creado correctamente.')
        <div class="card-header" id="cardHeader" id="cardHeader">
            <div class="alert alert-primary alert-dismissible fade show mb-0" role="alert">
                <p>{{ session('mensaje') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="cerrarCard()"></button>
            </div>
        </div>
        @elseif (session('mensaje') == 'La sub sub categoría se ha actualizado correctamente.')
        <div class="card-header" id="cardHeader" id="cardHeader">
            <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                <p>{{ session('mensaje') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="cerrarCard()"></button>
            </div>
        </div>
        @elseif (session('mensaje') != null)
        <div class="card-header" id="cardHeader" id="cardHeader">
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                <p>{{ session('mensaje') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="cerrarCard()"></button>
            </div>
        </div>
        @endif
        
        <div class="card-body">

            <table class="my-2" id="datatablesSimple">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Sub Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Sub Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>

                <tbody>

                    @foreach ($subsubcategories as $subsubcategory)
                        <tr>
                            <td>{{ $subsubcategory->id }}</td>
                            <td>{{ $subsubcategory->name}}</td>
                            <td>{{ $subsubcategory->subcategory_name }}</td>
                            <td>

                                <div class="dropstart">
                                    <button class="btn btn-transparent-dark p-1" type="button" id="dropdownMenuButton_{{ $subsubcategory->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical me-2"></i>
                                        Opciones
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $subsubcategory->id }}">
                                        <li>
                                            <button type="button" class="dropdown-item text-gray-700" data-bs-toggle="modal" data-bs-target="#updateSubSubCategoryModal_{{ $subsubcategory->id }}">
                                                <i class="fa-solid fa-pencil me-3"></i>
                                                Editar Registro
                                            </button>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-gray-700" href="{{ route('subsubcategory.destroy', ['id' => $subsubcategory->id]) }}">
                                                <i class="fa-regular fa-trash-can me-3"></i>
                                                Eliminar registro
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @include('admin.subsubcategories.updateSubSubCategory')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
<script>
    function cerrarCard() {
        var cardHeader = document.getElementById('cardHeader');
        cardHeader.parentNode.removeChild(cardHeader);
    }
</script>

@endsection