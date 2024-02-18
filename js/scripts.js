/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

const registration = document.getElementById("registration");
const username = document.getElementById("username");
const passwword = document.getElementById("password");

registration.addEventListener('submit', e => {
    e.preventDefault();

    ValidityInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement();
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const ValidityInputs = () => {
    const username = username.value.trim();
    const password = passwword.value.trim();

    if (usernameValue === '') {
        setError(username, "Nom d'utilisateur requis");
    } else {
        setSuccess(username);
    }

    if (emailValue === '') {
        setError(email, "Adresse mail requise");
    } else if (!isValidEmail(emailValue)) {
        setError(email, "Adresse mail invalide. Reessayez");
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'Mot de passe requis. Reessayer');
    } else if(passwordValue.lenght < 8) {
        setError(password, "Mot de passe doit contenir plus de 8 caracteres");
    } else {
        setSuccess(password);
    }
}