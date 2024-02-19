document.addEventListener("DOMContentLoaded", function() {
    var productForm = document.getElementById("productForm");
    
    // Validation du formulaire
    productForm.addEventListener("submit", function(event) {
        if (!validateProductForm()) {
            event.preventDefault();
        }
    });

    // Validation des champs
    function validateProductForm() {
        var productNameInput = document.getElementById("productName");
        var productPriceInput = document.getElementById("productPrice");
        var productImageInput = document.getElementById("productImage");
        var productDescriptionInput = document.getElementById("productDescription");

        var isValid = true;

        // Vérification du champ "Nom du produit"
        var productNameError = document.getElementById("productName-error");
        if (productNameInput.value.trim() === "") {
            productNameError.textContent = "Veuillez entrer le nom du produit.";
            productNameError.style.color = "red";
            productNameError.style.fontSize = "14px";
            isValid = false;
        } else if (productNameInput.value.length > 30) {
            productNameError.textContent = "Nom du produit trop long";
            productNameError.style.color = "red";
            productNameError.style.fontSize = "14px";
            isValid = false;
        } else {
            productNameError.textContent = "";
        }

        // Vérification du champ "Prix"
        var productPriceError = document.getElementById("productPrice-error");
        if (productPriceInput.value.trim() === "" || isNaN(productPriceInput.value.trim())) {
            productPriceError.textContent = "Veuillez entrer un prix valide.";
            productPriceError.style.color = "red";
            productPriceError.style.fontSize = "14px";
            isValid = false;
        } else {
            productPriceError.textContent = "";
        }

        // Vérification du champ "Image du produit"
        var productImageError = document.getElementById("productImage-error");
        if (productImageInput.files.length === 0) {
            productImageError.textContent = "Veuillez sélectionner une image.";
            productImageError.style.color = "red";
            productImageError.style.fontSize = "14px";
            isValid = false;
        } else {
            var fileSize = productImageInput.files[0].size; // Taille du fichier en octets
            var maxSize = 2 * 1024 * 1024;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.heif|\.heic)$/i;

            if (!allowedExtensions.test(productImageInput.value)) {
                productImageError.textContent = "Veuillez sélectionner une image au format JPG, JPEG, PNG, GIF, HEIF ou HEIC.";
                productImageError.style.color = "red";
                productImageError.style.fontSize = "14px";
                isValid = false;
            } else if (fileSize > maxSize) {
                productImageError.textContent = "La taille de l'image ne doit pas dépasser 2 Mo.";
                productImageError.style.color = "red";
                productImageError.style.fontSize = "14px";
                isValid = false;
            } else {
                productImageError.textContent = "";

                // Renommage du fichier avec le nom du produit
                var fileName = productNameInput.value.replace(/\s+/g, '_').toLowerCase();
                productImageInput.files[0].name = fileName + getFileExtension(productImageInput.files[0].name);
            }
        }

        // Vérification du champ "Description"
        var productDescriptionError = document.getElementById("productDescription-error");
        if (productDescriptionInput.value.trim() === "") {
            productDescriptionError.textContent = "Veuillez entrer une description.";
            productDescriptionError.style.color = "red";
            isValid = false;
        } else {
            productDescriptionError.textContent = "";
        }

        console.log("success");
        return isValid;
    }

    // Fonction pour obtenir l'extension du fichier
    function getFileExtension(filename) {
        return filename.slice((filename.lastIndexOf(".") - 1 >>> 0) + 2);
    }

    // Gestion du lien "Retour"
    var backButton = document.querySelector(".back-button");
    backButton.addEventListener("click", function() {
        // Redirection vers la page précédente
        window.location.href = document.referrer;
    });

});
