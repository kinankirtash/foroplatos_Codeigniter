let email = document.getElementById('email');
let phone = document.getElementById('tlf');
let password = document.getElementById('password');
const currentUrl = window.location.href;
const currentDir = currentUrl.substring(0, currentUrl.lastIndexOf('/'));
const phpAdmin = currentDir + "/APP/php/config.php";
console.log(phpAdmin)

function validateEmail() {
    let validEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;

    if (email.value != "") {
        if (validEmail.test(email.value)) {
            console.log(`El Email ${email.value} es válido `);
        } else {
            alert(`El email ${email.value} no es válido.`);
            email.value = "";
        }
    }
}

function validateTlf() {
    let validPhone = /^(\+?\d{1,2})?(\d{10})$/;

    if (phone.value != "") {
        if (validPhone.test(phone.value)) {
            console.log(`El número de teléfono ${phone.value} es válido `);
        } else {
            alert(`El número de teléfono ${phone.value} no es válido.`);
            phone.value = "";
        }
    }

}

function addPrefixNumber() {
    if (!phone.value.match(/\+/)) {
        phone.value = "+" + phone.value;
    }
}

function validatePassword() {
    let validPassword = /^[a-zA-Z0-9]{6,}$/

    if (password.value.match(validPassword)) {
        console.log(`La contraseña es válida`);
    } else {
        alert(`Debe contener letras y números, mínimo 6 carácteres.`);
        password.value = "";
    }
}



