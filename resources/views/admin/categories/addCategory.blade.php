<!-- Modal para agregar una categoría-->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "POST" action="{{ route('category.store') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" placeholder="Ingrese una categoría" aria-label="Username" name="nombre" required>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="addClt_nombre" placeholder="" name ="descripcion" required>
                        <label for="floatingInput">Descripción</label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i>
                            Insertar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>