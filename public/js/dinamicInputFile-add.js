document.addEventListener('DOMContentLoaded', function() {
    const maxFiles = 5; // Límite máximo de inputs

    function initFileInputHandlers(modalId) {
        const fileInputsDiv = document.querySelector(`#${modalId} #file-inputs`);
        const addFileInputBtn = document.querySelector(`#${modalId} #add-file-input`);

        if (!fileInputsDiv || !addFileInputBtn) return;

        // Función para actualizar el contador y los nombres de los inputs
        function updateFileInputNames() {
            const fileInputWrappers = fileInputsDiv.querySelectorAll('.file-input-wrapper');
            fileInputWrappers.forEach((wrapper, index) => {
                const input = wrapper.querySelector('input[type="file"]');
                input.name = `imagen_${index + 1}`;
            });
        }

        // Añadir nuevo input
        addFileInputBtn.addEventListener('click', function() {
            const fileCount = fileInputsDiv.querySelectorAll('.file-input-wrapper').length;

            if (fileCount < maxFiles) {
                const wrapper = document.createElement('div');
                wrapper.className = 'file-input-wrapper';
                wrapper.style.display = 'flex';
                wrapper.style.alignItems = 'center';

                const newInput = document.createElement('input');
                newInput.type = 'file';
                newInput.name = `imagen_${fileCount + 1}`;
                newInput.className = 'form-control';
                newInput.style.marginBottom = '10px';

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'btn btn-danger btn-sm remove-file-input';
                removeButton.style.marginLeft = '10px';
                removeButton.textContent = 'Eliminar';

                wrapper.appendChild(newInput);
                wrapper.appendChild(removeButton);
                fileInputsDiv.appendChild(wrapper);

                // Desactivar botón si se llega al límite
                if (fileCount + 1 === maxFiles) {
                    addFileInputBtn.disabled = true;
                }

                // Añadir evento para eliminar el input
                removeButton.addEventListener('click', function() {
                    wrapper.remove();
                    updateFileInputNames();

                    // Reactivar botón si hay menos de 5 inputs
                    if (fileInputsDiv.querySelectorAll('.file-input-wrapper').length < maxFiles) {
                        addFileInputBtn.disabled = false;
                    }
                });
            }
        });

        // Evento para eliminar el input si se presiona "Eliminar"
        fileInputsDiv.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-file-input')) {
                const wrapper = event.target.closest('.file-input-wrapper');
                wrapper.remove();
                updateFileInputNames();

                // Reactivar botón si hay menos de 5 inputs
                if (fileInputsDiv.querySelectorAll('.file-input-wrapper').length < maxFiles) {
                    addFileInputBtn.disabled = false;
                }
            }
        });
    }

    // Inicializa para el modal de agregar
    initFileInputHandlers('addProductsModal');

    // Escucha cuando se muestra un modal
    document.addEventListener('shown.bs.modal', function (event) {
        var modal = event.target;
        var modalId = modal.id;
        
        // Inicializa para el modal de actualización, basado en el ID del modal
        if (modalId.startsWith('updateProductModal')) {
            initFileInputHandlers(modalId);
        }
    });
});
