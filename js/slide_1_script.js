
const $slide_1_next = () => {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').appendChild(items[0]);
};

const $slide_1_prev = () => {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').prepend(items[items.length - 1]);
};

const $slide_1_next_2 = () => {
    const items = document.querySelectorAll('.slide-2-item');
    document.querySelector('.slide-1').appendChild(items[0]);
};

const $slide_1_prev_2 = () => {
    const items = document.querySelectorAll('.slide-2-item');
    document.querySelector('.slide-1').prepend(items[items.length - 1]);
};
