var angle = 0;
var angle1 = 0;
var angle2 = 0;

function galleryspin_1(sign) { 
    spinner = document.querySelector("#spinner");
    if (!sign) { 
        angle = angle + 45; 
    } else { 
        angle = angle - 45; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}

function carousselgalleryspin(sign) { 
    spinner = document.querySelector("#spinner-2");
    if (!sign) { 
        angle = angle + 60; 
    } else { 
        angle = angle - 60; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}

function galleryspinThird(sign) { 
    spinner = document.querySelector("#spinner-3");
    if (!sign) { 
        angle3 = angle3 + 45; 
    } else { 
        angle3 = angle3 - 45; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle3 +"deg); -moz-transform: rotateY("+ angle3 +"deg); transform: rotateY("+ angle3 +"deg);");
}

function galleryspinFourth(sign) { 
    spinner = document.querySelector("#spinner-4");
    if (!sign) { 
        angle2 = angle2 + 45; 
    } else { 
        angle2 = angle2 - 45; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle2 +"deg); -moz-transform: rotateY("+ angle2 +"deg); transform: rotateY("+ angle2 +"deg);");
}