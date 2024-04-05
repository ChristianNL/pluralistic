/*
const $realisation_slide_1_next = () => {
    const items = document.querySelectorAll('.realisation-slide-1-item');
    document.querySelector('.realisation-slide-1').appendChild(items[0]);
};

const $realisation_slide_1_prev = () => {
    const items = document.querySelectorAll('.realisation-slide-1-item');
    document.querySelector('.realisation-slide-1').prepend(items[items.length - 1]);
};*/

function realisation_slide_1_next() {
    const items = document.querySelectorAll('.realisation-slide-1-item');
    document.querySelector('.realisation-slide-1').appendChild(items[0]);
}

function realisation_slide_1_prev() {
    const items = document.querySelectorAll('.realisation-slide-1-item');
    document.querySelector('.realisation-slide-1').prepend(items[items.length - 1]);
}

