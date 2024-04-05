/*const $next = document.querySelector('.next');
const $prev = document.querySelector('.prev');

$next.addEventListener(
    'click',
    () => {
        const items = document.querySelectorAll('.slide-1-item');
        document.querySelector('.slide').appendChild(items[0]);
    },
);

google atelier numerique
edx coursity
classcentral
universe.io

$prev.addEventListener(
    'click',
    () => {
        const items = document.querySelectorAll('.slide-1-item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    },
);*/
/*
const $slide_1_next = () => {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').appendChild(items[0]);
};

const $slide_1_prev = () => {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').prepend(items[items.length - 1]);
};
*/


function slide_1_next () {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').appendChild(items[0]);
};

function slide_1_prev () {
    const items = document.querySelectorAll('.slide-1-item');
    document.querySelector('.slide-1').prepend(items[items.length - 1]);
};