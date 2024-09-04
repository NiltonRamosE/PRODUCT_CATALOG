<!-- Modal para actualizar una subcategoría-->
<div class="modal fade" id="updateSubCategoryModal_{{ $subcategory->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Sub Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "POST" action="{{ route('subcategory.update' , ['id' => $subcategory->id]) }}" >
                    @csrf

                    <div class="input-group mb-3" >
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" placeholder="Ingrese una sub categoría" aria-label="Username" name="nombre" value="{{ $subcategory->name }}" required>
                    </div>
                    
                    <select class="form-select mb-3" aria-label="Default select example" name="category_id" required>
                        <option selected>Selecciona la categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $subcategory->c_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

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