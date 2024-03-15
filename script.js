// image slider
alert("linked")
const left = document.querySelector('.left');
const right = document.querySelector('.right');
const slideimage = document.querySelector('.slider');
let count = 1;

function clickright() {
    count++;
    if (count > 3) {
        count = 1;
    }
    changeSlide();
}

function clickleft() {
    count--;
    if (count < 1) {
        count = 3;
    }
    changeSlide();
}

function changeSlide() {
    if (count === 1) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_1.jpg")';
    } else if (count === 2) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_2.jpg")';
    } else if (count === 3) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_3.jpg")';
    }
}

///image slider function end