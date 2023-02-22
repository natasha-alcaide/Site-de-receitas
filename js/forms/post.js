const commentForm = document.querySelector('#comment-form');
const commentSubmit = document.querySelector('#comment-submit');

const commentAuthor = document.querySelector('#comment-author');
const commentEmail = document.querySelector('#comment-email');
const commentContent = document.querySelector('#comment-content');

const commentAuthorError = document.querySelector('#comment-author-error');
const commentEmailError = document.querySelector('#comment-email-error');
const commentContentError = document.querySelector('#comment-content-error');

const validateAuthor = () => {
  if (commentAuthor.value === '') {
    commentAuthor.classList.add('invalid');

    commentAuthorError.classList.add('visible');

    commentAuthorError.innerHTML = 'Autor é obrigatório.';

    return false;
  } else {
    commentAuthor.classList.remove('invalid');

    commentAuthorError.classList.remove('visible');

    return true;
  }
};

const validateEmail = () => {
  if (commentEmail.value === '') {
    commentEmail.classList.add('invalid');

    commentEmailError.classList.add('visible');

    commentEmailError.innerHTML = 'Email é obrigatório.';

    return false;
  } else {
    commentEmail.classList.remove('invalid');

    commentEmailError.classList.remove('visible');

    return true;
  }
};

const validateContent = () => {
  if (commentContent.value === '') {
    commentContent.classList.add('invalid');

    commentContentError.classList.add('visible');

    commentContentError.innerHTML = 'O comentário não pode ser vazio.';

    return false;
  } else if (commentContent.value.length < 6) {
    commentContent.classList.add('invalid');

    commentContentError.classList.add('visible');

    commentContentError.innerHTML =
      'Comentário precisa ter pelo menos 6 caracteres.';

    return false;
  } else if (commentContent.value.length > 3000) {
    commentContent.classList.add('invalid');

    commentContentError.classList.add('visible');

    commentContentError.innerHTML =
      'Comentário pode ter no máximo 3000 caracteres.';

    return false;
  } else {
    commentContent.classList.remove('invalid');

    commentContentError.classList.remove('visible');

    return true;
  }
};

const validateData = () => {
  let isValid = true;

  if (!validateAuthor()) {
    isValid = false;
  }

  if (!validateEmail()) {
    isValid = false;
  }

  if (!validateContent()) {
    isValid = false;
  }

  return isValid;
};


commentForm.addEventListener('submit', (event) => {
  event.preventDefault();

  if (!validateData()) {
    return;
  }

  const formData = new FormData(commentForm);
  url = window.location.href;

  const postData = {
    author: formData.get('comment-author'),
    email: formData.get('comment-email'),
    content: formData.get('comment-content'),
  };

  commentForm.submit();
});

