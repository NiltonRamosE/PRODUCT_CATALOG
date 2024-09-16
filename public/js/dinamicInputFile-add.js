document.addEventListener('DOMContentLoaded', function() {
    const maxFiles = 6; // Límite máximo de inputs

    function initFileInputHandlers(modalId) {
        const fileInputsDiv = document.querySelector(`#${modalId} #file-inputs`);
        const addFileInputBtn = document.querySelector(`#${modalId} #add-file-input`);

        if (!fileInputsDiv || !addFileInputBtn) return;

        function updateFileInputNames() {
            const fileInputWrappers = fileInputsDiv.querySelectorAll('.file-input-wrapper');
            fileInputWrappers.forEach((wrapper, index) => {
                const input = wrapper.querySelector('input[type="file"]');
                input.name = `imagen_${index + 1}`;
            });
        }

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

                if (fileCount + 1 === maxFiles) {
                    addFileInputBtn.disabled = true;
                }

                removeButton.addEventListener('click', function() {
                    wrapper.remove();
                    updateFileInputNames();

                    if (fileInputsDiv.querySelectorAll('.file-input-wrapper').length < maxFiles) {
                        addFileInputBtn.disabled = false;
                    }
                });
            }
        });

        fileInputsDiv.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-file-input')) {
                const wrapper = event.target.closest('.file-input-wrapper');
                wrapper.remove();
                updateFileInputNames();

                if (fileInputsDiv.querySelectorAll('.file-input-wrapper').length < maxFiles) {
                    addFileInputBtn.disabled = false;
                }
            }
        });
    }

    initFileInputHandlers('addProductsModal');

    document.addEventListener('shown.bs.modal', function (event) {
        var modal = event.target;
        var modalId = modal.id;
        
        if (modalId.startsWith('updateProductModal')) {
            initFileInputHandlers(modalId);
        }
    });
});
