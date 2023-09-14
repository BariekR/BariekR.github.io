const email = document.getElementById("form-email");
const password = document.getElementById("form-pass");
const createAccountButton = document.getElementById("account-button");

let emailValid = false;
let passwordValid = false;

function validateButton() {
  if (emailValid && passwordValid) {
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
