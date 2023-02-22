const adminRegisterForm = document.querySelector('#admin-register-form');
const adminRegisterSubmit = document.querySelector('#admin-register-submit');

const adminRegisterUsername = document.querySelector(
  '#admin-register-username'
);
const adminRegisterFirstName = document.querySelector(
  '#admin-register-firstname'
);
const adminRegisterLastName = document.querySelector(
  '#admin-register-lastname'
);
const adminRegisterEmail = document.querySelector('#admin-register-email');
const adminRegisterPassword = document.querySelector(
  '#admin-register-password'
);
const adminRegisterConfirmPassword = document.querySelector(
  '#admin-register-confirm-password'
);

const adminRegisterUsernameError = document.querySelector(
  '#admin-register-username-error'
);
const adminRegisterFirstNameError = document.querySelector(
  '#admin-register-firstname-error'
);
const adminRegisterLastNameError = document.querySelector(
  '#admin-register-lastname-error'
);
const adminRegisterEmailError = document.querySelector(
  '#admin-register-email-error'
);
const adminRegisterPasswordError = document.querySelector(
  '#admin-register-password-error'
);
const adminRegisterConfirmPasswordError = document.querySelector(
  '#admin-register-confirm-password-error'
);

const validateAdminUsername = () => {
  if (adminRegisterUsername.value === '') {
    adminRegisterUsername.classList.add('invalid');

    adminRegisterUsernameError.classList.add('visible');

    adminRegisterUsernameError.innerHTML = 'Username é obrigatório.';

    return false;
  } else if (adminRegisterUsername.value.length < 3) {
    adminRegisterUsername.classList.add('invalid');

    adminRegisterUsernameError.classList.add('visible');

    adminRegisterUsernameError.innerHTML =
      'Username precisa ter pelo menos 3 caracteres.';

    return false;
  } else if (adminRegisterUsername.value.length > 50) {
    adminRegisterUsername.classList.add('invalid');

    adminRegisterUsernameError.classList.add('visible');

    adminRegisterUsernameError.innerHTML =
      'Username pode ter no máximo 50 caracteres.';
    return false;
  } else {
    adminRegisterUsername.classList.remove('invalid');

    adminRegisterUsernameError.classList.remove('visible');

    return true;
  }
};

const validateAdminFirstName = () => {
  if (adminRegisterFirstName.value === '') {
    adminRegisterFirstName.classList.add('invalid');

    adminRegisterFirstNameError.classList.add('visible');

    adminRegisterFirstNameError.innerHTML = 'Primeiro nome é obrigatório.';

    return false;
  } else if (adminRegisterFirstName.value.length < 3) {
    adminRegisterFirstName.classList.add('invalid');

    adminRegisterFirstNameError.classList.add('visible');

    adminRegisterFirstNameError.innerHTML =
      'Primeiro nome precisa ter pelo menos 3 caracteres.';
    return false;
  } else if (adminRegisterFirstName.value.length > 50) {
    adminRegisterFirstName.classList.add('invalid');

    adminRegisterFirstNameError.classList.add('visible');

    adminRegisterFirstNameError.innerHTML =
      'Primeiro nome pode ter no máximo 50 caracteres.';

    return false;
  } else {
    adminRegisterFirstName.classList.remove('invalid');

    adminRegisterFirstNameError.classList.remove('visible');

    return true;
  }
};

const validateAdminLastName = () => {
  if (adminRegisterLastName.value === '') {
    adminRegisterLastName.classList.add('invalid');

    adminRegisterLastNameError.classList.add('visible');

    adminRegisterLastNameError.innerHTML = 'Sobrenome é obrigatório.';

    return false;
  } else if (adminRegisterLastName.value.length < 3) {
    adminRegisterLastName.classList.add('invalid');

    adminRegisterLastNameError.classList.add('visible');

    adminRegisterLastNameError.innerHTML =
      'Sobrenome precisa ter pelo menos 3 caracteres.';

    return false;
  } else if (adminRegisterLastName.value.length > 50) {
    adminRegisterLastName.classList.add('invalid');

    adminRegisterLastNameError.classList.add('visible');

    adminRegisterLastNameError.innerHTML =
      'Sobrenome pode ter no máximo 50 caracteres.';

    return false;
  } else {
    adminRegisterLastName.classList.remove('invalid');

    adminRegisterLastNameError.classList.remove('visible');

    return true;
  }
};

const validateAdminEmail = () => {
  if (adminRegisterEmail.value === '') {
    adminRegisterEmail.classList.add('invalid');

    adminRegisterEmailError.classList.add('visible');

    adminRegisterEmailError.innerHTML = 'Email é obrigatório.';

    return false;
  } else {
    adminRegisterEmail.classList.remove('invalid');

    adminRegisterEmailError.classList.remove('visible');

    return true;
  }
};

const validateAdminPassword = () => {
  if (adminRegisterPassword.value === '') {
    adminRegisterPassword.classList.add('invalid');

    adminRegisterPasswordError.classList.add('visible');

    adminRegisterPasswordError.innerHTML = 'Senha é obrigatória.';

    return false;
  } else if (adminRegisterPassword.value.length < 6) {
    adminRegisterPassword.classList.add('invalid');

    adminRegisterPasswordError.classList.add('visible');

    adminRegisterPasswordError.innerHTML =
      'Senha precisa ter pelo menos 6 caracteres.';

    return false;
  } else if (adminRegisterPassword.value.length > 50) {
    adminRegisterPassword.classList.add('invalid');

    adminRegisterPasswordError.classList.add('visible');

    adminRegisterPasswordError.innerHTML =
      'Senha pode ter no máximo 50 caracteres.';

    return false;
  } else {
    adminRegisterPassword.classList.remove('invalid');

    adminRegisterPasswordError.classList.remove('visible');

    return true;
  }
};

const validateAdminConfirmPassword = () => {
  if (adminRegisterConfirmPassword.value === '') {
    adminRegisterConfirmPassword.classList.add('invalid');

    adminRegisterConfirmPasswordError.classList.add('visible');

    adminRegisterConfirmPasswordError.innerHTML =
      'Confirmação de senha é obrigatória.';

    return false;
  } else if (
    adminRegisterPassword.value !== adminRegisterConfirmPassword.value
  ) {
    adminRegisterConfirmPassword.classList.add('invalid');

    adminRegisterConfirmPasswordError.classList.add('visible');

    adminRegisterConfirmPasswordError.innerHTML =
      'As senhas precisam ser iguais.';

    return false;
  } else {
    adminRegisterConfirmPassword.classList.remove('invalid');

    adminRegisterConfirmPasswordError.classList.remove('visible');

    return true;
  }
};

const validateData = () => {
  let isValid = true;

  if (!validateAdminUsername()) {
    isValid = false;
  }

  if (!validateAdminFirstName()) {
    isValid = false;
  }

  if (!validateAdminLastName()) {
    isValid = false;
  }

  if (!validateAdminEmail()) {
    isValid = false;
  }

  if (!validateAdminPassword()) {
    isValid = false;
  }

  if (!validateAdminConfirmPassword()) {
    isValid = false;
  }

  return isValid;
};

adminRegisterForm.addEventListener('submit', (event) => {
  event.preventDefault();

  if (!validateData()) {
    return;
  }
});
