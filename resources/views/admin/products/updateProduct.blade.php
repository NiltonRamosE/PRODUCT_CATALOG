<!-- Modal para actualizar un producto-->
<div class="modal fade" id="updateProductModal_{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "POST" action="{{ route('product.update' , ['id' => $product->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" placeholder="Ingrese un producto" aria-label="Username" name="nombre" value ="{{$product->name}}" required>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="addClt_nombre" placeholder="" name ="descripcion" value ="{{$product->description}}" required>
                        <label for="floatingInput">Descripción</label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Precio</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" name="precio" value ="{{$product->price}}" required>
                        <span class="input-group-text">Stock</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" name="stock" value ="{{$product->stock}}" required>
                    </div>
                    <select class="form-select mb-3" aria-label="Default select example" name="sub_category_id" required>
                        <option selected>Selecciona la categoría</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" {{ $product->sc_id == $subcategory->id ? 'selected' : '' }}>
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    </select>
                    <style>
                        .image-container {
                            position: relative;
                            display: inline-block;
                        }

                        .img-thumbnail {
                            cursor: pointer;
                        }

                        .file-input {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            opacity: 0;
                            cursor: pointer;
                        }
                    </style>
                    @if (isset($images[$product->id]))
                    <div class="form-group mb-3">
                        <label for="imagenes" class="form-label">Imágenes actuales:</label>
                        <div id="current-images">
                            
                                @foreach ($images[$product->id] as $index => $image)
                                    <div class="image-container mb-2">
                                        <!-- Imagen con clic para cambiar -->
                                        <img src="{{ $image->route }}" alt="Imagen del producto" class="img-thumbnail change-image" style="max-width: 100px; max-height: 100px;">
                                        <!-- Input oculto para el archivo -->
                                        <input type="file" name="imagen_{{ $index + 1 }}" class="d-none file-input" id="file-input-{{ $index + 1 }}">
                                    </div>
                                @endforeach
                            
                            
                        </div>
                    </div>
                    @else
                        @include('layouts._partials.inputFileAdd')
                    @endif
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i>
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>