var angle = 0;

function galleryspin_1(sign) { 
    spinner = document.querySelector("#spinner");
    if (!sign) { 
        angle = angle + 120; 
    } else { 
        angle = angle - 120; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}

function carousselgalleryspin(sign) { 
    spinner = document.querySelector("#spinner-2");
    if (!sign) { 
        angle = angle + 90; 
    } else { 
        angle = angle - 90; 
    }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}