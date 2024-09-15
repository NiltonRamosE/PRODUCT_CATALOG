<!-- Modal para actualizar una subcategoría-->
<div class="modal fade" id="updateSubSubCategoryModal_{{ $subsubcategory->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Sub Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "POST" action="{{ route('subsubcategory.update' , ['id' => $subsubcategory->id]) }}" >
                    @csrf

                    <div class="input-group mb-3" >
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" placeholder="Ingrese una sub categoría" aria-label="Username" name="nombre" value="{{ $subsubcategory->name }}" required>
                    </div>
                    
                    <select class="form-select mb-3" aria-label="Default select example" name="sub_category_id" required>
                        <option selected>Selecciona la categoría</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" {{ $subsubcategory->sc_id == $subcategory->id ? 'selected' : '' }}>
                                {{ $subcategory->name }}
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