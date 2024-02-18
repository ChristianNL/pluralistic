document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('login-form');
    const inputs = {
      username: document.getElementById('username'),
      password: document.getElementById('password'),
    };
  
    form.addEventListener('submit', e => {
        e.preventDefault();
        if (validateInputs()) {
            // Effectuer l'authentification ou d'autres actions nécessaires
            window.alert('Connexion réussie!');
            redirectToDashboard();
        } else {
            window.alert('Certains champs sont invalides. Veuillez réessayer.');
        }
    });
  
    form.addEventListener('input', validateForm);
  
    function validateForm() {
        Object.keys(inputs).forEach(inputId => {
        const value = inputs[inputId].value.trim();
        const errorDisplay = inputs[inputId].parentElement.querySelector('.error');
  
        if (value === '') {
          errorDisplay.innerText = `${inputId.charAt(0).toUpperCase() + inputId.slice(1)} obligatoire`;
        } else {
          errorDisplay.innerText = '';
  
          // Ajoutez d'autres validations si nécessaire
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
  
          // Ajoutez d'autres validations si nécessaire
        }
      });
  
      return isValid;
    }

    // Incluez cette fonction dans votre fichier JavaScript
    function redirectToDashboard() {
        window.location.href = "dashbord.html";
    }

});
  