const mainImg = document.getElementById('main-img');
const thumbnails = document.querySelectorAll('.thumb-img');

document.addEventListener('DOMContentLoaded', () => {
    
    const mainImgIndex = mainImg.dataset.index;

    thumbnails.forEach(thumb => {
        if (thumb.dataset.index === mainImgIndex) {
            thumb.style.display = 'none';
        }
    });
});

function changeImage(element) {
    mainImg.src = element.src;
    mainImg.dataset.index = element.dataset.index;

    thumbnails.forEach(thumb => {
        if (thumb.dataset.index === mainImg.dataset.index) {
            thumb.style.display = 'none';
        } else {
            thumb.style.display = 'block';
        }
    });
}

