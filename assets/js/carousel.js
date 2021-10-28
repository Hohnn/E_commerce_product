const carousel_images = document.querySelectorAll('.carousel .item');

function orderCarouselImages() {
    let length = carousel_images.length;
    carousel_images.forEach((image, index) => {
        image.style.zIndex = length;
        length--;
    });
}

orderCarouselImages();