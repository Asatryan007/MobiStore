"use strict"

let form = document.querySelector('#form'),
    formInputs = document.querySelectorAll('.input'),
    inputEmail = document.querySelector('.input-email'),
    inputPhone = document.querySelector('.input-phone'),
    inputRadiobox1 = document.querySelector('#cash'),
    inputRadiobox2 = document.querySelector('#card'),
    msg = document.querySelector('.msg');


function validateEmail(email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}




function validatePhone(phone) {
    let re = /^[0-9\s]*$/;
    return re.test(String(phone));
}

form.onsubmit = function () {
    let emailVal = inputEmail.value,
        phoneVal = inputPhone.value,
        emptyInputs = Array.from(formInputs).filter(input => input.value === '');

    formInputs.forEach(function (input) {
        if (input.value === '') {
            input.classList.add('error');

        } else {
            input.classList.remove('error');
        }
    });

    if (emptyInputs.length !== 0) {
        console.log('inputs not filled');
        return false;
    }

    if(!validateEmail(emailVal)) {
        console.log('email not valid');
        inputEmail.classList.add('error');
        return false;
    } else {
        inputEmail.classList.remove('error');
    }

    if (!validatePhone(phoneVal)) {
        console.log('phone not valid');
        inputPhone.classList.add('error');
        return false;
    } else {
        inputPhone.classList.remove('error');
    }
    if(inputRadiobox1.checked == true || inputRadiobox2.checked == true ) {
        return true
    }else{
        msg.innerHTML = 'Ընտրեք վճարման եղանակը'
        return false;
    }

    

}