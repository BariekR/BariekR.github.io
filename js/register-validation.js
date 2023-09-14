const fullName = document.getElementById("form-fullName");
const email = document.getElementById("form-email");
const password = document.getElementById("form-pass");
const confirmedPassword = document.getElementById("form-re-pass");
const createAccountButton = document.getElementById("account-button");

let fullNameValid = false;
let emailValid = false;
let passwordValid = false;
let confirmedPasswordValid = false;

function validateButton() {
  if (fullNameValid && emailValid && passwordValid && confirmedPasswordValid) {
    createAccountButton.removeAttribute("disabled");
    createAccountButton.classList.remove("btn-subscribe-disabled");
  } else {
    createAccountButton.setAttribute("disabled", "");
    createAccountButton.classList.add("btn-subscribe-disabled");
  }
}

password.addEventListener("blur", () => {
  if (password.value.length >= 8) {
    password.classList.remove("input-error");
    passwordValid = true;
  } else {
    password.classList.add("input-error");
    passwordValid = false;
  }
  validateButton();
});

confirmedPassword.addEventListener("blur", () => {
  if (confirmedPassword.value === password.value) {
    confirmedPassword.classList.remove("input-error");
    confirmedPasswordValid = true;
  } else {
    confirmedPassword.classList.add("input-error");
    confirmedPasswordValid = false;
  }
  validateButton();
});

fullName.addEventListener("blur", () => {
  if (fullName.value.length > 0) {
    fullName.classList.remove("input-error");
    fullNameValid = true;
  } else {
    fullName.classList.add("input-error");
    fullNameValid = false;
  }
  validateButton();
});

email.addEventListener("blur", () => {
  if (email.value.length > 0) {
    email.classList.remove("input-error");
    emailValid = true;
  } else {
    email.classList.add("input-error");
    emailValid = false;
  }
  validateButton();
});
