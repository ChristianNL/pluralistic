document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('form');
  const inputs = {
    name: document.getElementById('name'),
    surname: document.getElementById('surname'),
    ville: document.getElementById('ville'),
    email: document.getElementById('email'),
    phone: document.getElementById('phone'),
    WhatsAppNumber: document.getElementById("WhatsAppNumber"),
  };

  /*form.addEventListener('submit', e => {
    e.preventDefault();
    if (validateInputs()) {
      // Supprimer les espaces avant d'enregistrer le numéro
      const cleanedPhone = inputs.phone.value.replace(/\s/g, '');
      const cleanedWhatsAppNumber = inputs.WhatsAppNumber.value.replace(/\s/g, '');

      //window.alert(`Validation réussie! Numéro de téléphone: ${cleanedPhone}, WhatsApp: ${cleanedWhatsAppNumber}`);
      window.history.back();
    } else {
      window.alert('Certains champs sont invalides. Veuillez réessayer.');
    }
  });*/

  form.addEventListener("submit", function(event) {
    event.preventDefault();
    if (!validateInputs()) {
      return;
    }

    var formData = new FormData(form);
    var req = new XMLHttpRequest();
    req.open("POST", "save_subscriber.php", true);
    req.onload = function () {
      if (req.status === 200) {
        alert(req.responseText);
        window.history.back();
      } else {
        alert("erreur lors de la soumission du formulaire : " + req.statusText);
      }
    };

    req.send(formData);
  });

  function validateForm() {
    Object.keys(inputs).forEach(inputId => {
      const value = inputs[inputId].value.trim();
      const errorDisplay = inputs[inputId].parentElement.querySelector('.error');

      if (value === '') {
        errorDisplay.innerText = `${inputId.charAt(0).toUpperCase() + inputId.slice(1)} obligatoire`;
      } else {
        errorDisplay.innerText = '';

        if (inputId === 'email' && !isValidEmail(value)) {
          errorDisplay.innerText = 'Adresse mail non valide. Réessayer';
        }

        if ((inputId === 'phone' || inputId === 'WhatsAppNumber') && !isValidNumber(value)) {
          errorDisplay.innerText = 'Numéro invalide. Réessayer';
        }
      }
    });
  }

  function isValidEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function isValidNumber(number) {
    // Supprimer les espaces avant la validation
    const cleanedNumber = number.replace(/\s/g, '');

    // Motif acceptant 9 chiffres avec le 6 au début
    const phonePattern = /^(\+237|00237)?6\d{8}([- ]?\d{2})?$/;

    return phonePattern.test(cleanedNumber);
  }

  function validateInputs() {
    let isValid = true;

    Object.keys(inputs).forEach(inputId => {
      const value = inputs[inputId].value.trim();
      const errorDisplay = inputs[inputId].parentElement.querySelector('.error');

      if (value === '' || (inputId === 'WhatsAppNumber' && value === '6')) {
        errorDisplay.innerText = `${inputId.charAt(0).toUpperCase() + inputId.slice(1)} obligatoire`;
        isValid = false;
      } else {
        errorDisplay.innerText = '';

        if (inputId === 'email' && !isValidEmail(value)) {
          errorDisplay.innerText = 'Adresse mail non valide. Réessayer';
          isValid = false;
        }

        if ((inputId === 'phone' || inputId === 'WhatsAppNumber') && !isValidNumber(value)) {
          errorDisplay.innerText = 'Numéro invalide. Réessayer';
          isValid = false;
        }
      }
    });

    return isValid;
  }
});
