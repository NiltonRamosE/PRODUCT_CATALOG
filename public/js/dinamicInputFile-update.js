window.onload = function () {
    const imageContainers = document.querySelectorAll('.image-container');

    imageContainers.forEach(container => {
        const image = container.querySelector('.img-thumbnail');
        const inputFile = container.querySelector('.file-input');

        image.addEventListener('click', function () {
            inputFile.click();
        });

        inputFile.addEventListener('change', function () {
            if (inputFile.files && inputFile.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function (e) {
                    image.src = e.target.result;
                }
                
                reader.readAsDataURL(inputFile.files[0]);
            }
        });
    });
};