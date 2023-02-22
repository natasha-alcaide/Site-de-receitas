const adminLoginForm = document.querySelector('#admin-login-form');
const adminLoginSubmit = document.querySelector('#admin-login-submit');

const adminLoginEmail = document.querySelector('#admin-login-email');
const adminLoginPassword = document.querySelector('#admin-login-password');

const adminLoginEmailError = document.querySelector('#admin-login-email-error');
const adminLoginPasswordError = document.querySelector(
  '#admin-login-password-error'
);

const validateAdminEmail = () => {
  if (adminLoginEmail.value === '') {
    adminLoginEmail.classList.add('invalid');

    adminLoginEmailError.classList.add('visible');

    adminLoginEmailError.innerHTML = 'Email é obrigatório.';

    return false;
  } else {
    adminLoginEmail.classList.remove('invalid');

    adminLoginEmailError.classList.remove('visible');

    return true;
  }
};

const validateAdminPassword = () => {
  if (adminLoginPassword.value === '') {
    adminLoginPassword.classList.add('invalid');

    adminLoginPasswordError.classList.add('visible');

    adminLoginPasswordError.innerHTML = 'Senha é obrigatória.';

    return false;
  } else if (adminLoginPassword.value.length < 6) {
    adminLoginPassword.classList.add('invalid');

    adminLoginPasswordError.classList.add('visible');

    adminLoginPasswordError.innerHTML =
      'Senha precisa ter pelo menos 6 caracteres.';

    return false;
  } else if (adminLoginPassword.value.length > 50) {
    adminLoginPassword.classList.add('invalid');

    adminLoginPasswordError.classList.add('visible');

    adminLoginPasswordError.innerHTML =
      'Senha pode ter no máximo 50 caracteres.';

    return false;
  } else {
    adminLoginPassword.classList.remove('invalid');

    adminLoginPasswordError.classList.remove('visible');

    return true;
  }
};

const validateData = () => {
  let isValid = true;

  if (!validateAdminEmail()) {
    isValid = false;
  }

  if (!validateAdminPassword()) {
    isValid = false;
  }

  return isValid;
};

adminLoginForm.addEventListener('submit', (event) => {
  event.preventDefault();

  if (!validateData()) {
    return;
  }
});
