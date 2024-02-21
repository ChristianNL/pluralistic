/* document.addEventListener("DOMContentLoaded", function() {
    // Validation du formulaire
    const form = document.getElementById("form1");
    const inputs = {
        name: document.getElementById('name'),
        comment: document.getElementById('comment'),
    };

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (validateInputs()) {
            window.alert('Ajout du nouveau service !');
            redirectToService();
        } else {
            window.alert('Certains champs sont invalides. Veuillez réessayer.');
        }
    });

    form.addEventListener('input', validateForm);

    function validateForm() {
        Object.keys(inputs).forEach(inputId => {
            const value = inputs[inputId].parentElement.querySelector('.error');
            if (value === '') {
                errorDisplay.innerText = `${inputId.charAt(0).toUpperCase() + inputId.slice(1)} obligatoire`;
            } else {
                errorDisplay.innerText = '';
            }
        });
    }

    function validateInputs() {
        let isValid = true;

        Object.keys(inputs).forEach(inputId => {
            const value = inputs[inputId].value.trim();
            const errorDisplay = inputs[inputId].parentElement.querySelector('.error');
      
            if (value === '') {
                errorDisplay.innerText = `${inputId.charAt(0).toUpperCase() + inputId.slice(1)} obligatoire`;
                isValid = false;
            } else {
                errorDisplay.innerText = '';
            }
          });
        return isValid;
    }

    function redirectToService() {
        window.location.href = document.referrer;
    }
});
 */

document.addEventListener("DOMContentLoaded", function() {
    // Validation du formulaire
    var form = document.getElementById("form1");
    form.addEventListener("submit", function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    // Validation des champs
    function validateForm() {
        var nameInput = document.getElementById("name");
        var commentInput = document.getElementById("comment");

        var isValid = true;

        // Vérification du champ "Name"
        var nameError = document.getElementById("name-error");
        if (nameInput.value.trim() === "") {
            nameError.textContent = "Veuillez entrer le nom du service.";
            nameError.style.color = "red";
            nameError.style.fontSize= "14px";
            isValid = false;
        } else {
            nameError.textContent = ""; // Efface le message d'erreur si le champ est valide
        }

        // Vérification du champ "Description"
        var commentError = document.getElementById("comment-error");
        if (commentInput.value.trim() === "") {
            commentError.textContent = "Veuillez entrer la description du service.";
            commentError.style.color = "red";
            commentError.style.fontSize= "14px";
            isValid = false;
        } else if (commentInput.value.length > 150) {
            commentError.textContent = "La description ne doit pas dépasser 150 lettres.";
            commentError.style.color = "red";
            commentError.style.fontSize= "14px";
            isValid = false;
        } else {
            commentError.textContent = ""; // Efface le message d'erreur si le champ est valide
        }

        return isValid;
    }

    // Gestion du lien "Retour"
    var backButton = document.querySelector(".back-button");
    backButton.addEventListener("click", function() {
        // Redirection vers la page précédente
        window.history.back();
    });
});
