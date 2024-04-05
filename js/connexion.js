document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('login-form');
    const inputs = {
    	username: document.getElementById('username'),
    	password: document.getElementById('password'),
    };
  
    form.addEventListener('submit', e => {
        e.preventDefault();
        if (validateInputs()) {
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

    function redirectToDashboard() {
        window.location.href = "../AdminSpace/dashboard.html";
    }

});
  