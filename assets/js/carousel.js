const carousel_images = document.querySelectorAll('.carousel .item');

function orderCarouselImages() {
    let length = carousel_images.length;
    carousel_images.forEach((image, index) => {
        image.style.zIndex = length;
        length--;
    });
}

/* orderCarouselImages(); */

const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const allImages = document.querySelectorAll('[data-carousel]');
const allImagesPreview = document.querySelectorAll('[data-preview]');

function carouselArrow (direction){
    let active = document.querySelector('.carousel .active')
    let activeData = active.getAttribute('data-carousel');
    active.classList.add('fading');
    active.classList.remove('active');
    let prevImageCount = (direction == 'prev') ? activeData - 1 : +activeData + 1;
    let prevImage = allImages[prevImageCount - 1]
    if (prevImageCount == 0){
        prevImage = allImages[allImages.length - 1]
    } else if (prevImageCount > allImages.length){
        prevImage = allImages[allImages.length - (allImages.length)]
    }
    prevImage.classList.add('active')
    setTimeout(()=>{
        active.classList.remove('fading');
    }, 300)
    activePreview(prevImage)
}

prevBtn.addEventListener('click', () => { 
    carouselArrow('prev')
})
nextBtn.addEventListener('click', () => { 
    carouselArrow('next')
})

const preview = document.getElementById('preview')

window.addEventListener('keydown', (event) => {
    if (event.code === 'ArrowRight') {
        carouselArrow('next')
    } else if (event.code === 'ArrowLeft') {
        carouselArrow('prev')
    }
});


function activePreview (param) {
    let activeData = param.getAttribute('data-carousel')
    let target = allImagesPreview[activeData - 1]
    let active = document.querySelector('.itemPreview .active');
    active.classList.remove('active')
    target.classList.add('active')
}

allImagesPreview.forEach( element => {
    element.addEventListener('click', function () {
        let data = this.dataset.preview
        let active = document.querySelector('.carousel .active')
        active.classList.add('fading');
        active.classList.remove('active');
        let target = allImages[data - 1]
        target.classList.add('active')
        setTimeout(()=>{
            active.classList.remove('fading');
        }, 300)
        activePreview(target)
    })
})

const closePreview = document.getElementById('closePreview')
closePreview.addEventListener('click', () => {
    preview.classList.remove('open')
})


// main page

const mainImage = document.getElementById('mainImage')

mainImage.addEventListener('click', () => {
    preview.classList.add('open')
})

const allThumbnail = document.querySelectorAll('[data-thumbnail]')
console.log(allThumbnail);
allThumbnail.forEach( element => {
    element.addEventListener('click', function (){
        let source = this.dataset.thumbnail
        mainImage.querySelector('img').src = `./assets/images/image-product-${source}.jpg`
    })
})


document.addEventListener('click', function(e){
    console.log(e.target);

    if (preview.classList.contains('open')) {
        if (e.target == preview) {
            preview.classList.remove('open')
        }
    }
})

