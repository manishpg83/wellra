var inviteSelectors = '.top-form, .email-box, .reserve-form';

document.querySelectorAll(inviteSelectors).forEach(function (box) {
  var input = box.querySelector('input[type="email"]');
  var button = box.querySelector('button');
  var form = box.querySelector('form');

  if (!input || !button) return;

  input.setAttribute('aria-invalid', 'false');

  if (form) {
    form.setAttribute('novalidate', 'novalidate');
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      validateInvite(box);
    });
  }

  button.addEventListener('click', function (event) {
    if (!form) {
      event.preventDefault();
      validateInvite(box);
    }
  });

  input.addEventListener('input', function () {
    clearInviteError(box);
  });

  input.addEventListener('blur', function () {
    if (input.value.trim() !== '' && !isValidEmail(input.value.trim())) {
      showInviteError(box, 'Please enter a valid email address.', false);
    }
  });
});

function validateInvite(box) {
  var input = box.querySelector('input[type="email"]');
  var button = box.querySelector('button');
  var email = input.value.trim();

  clearInviteError(box);

  if (email === '') {
    showInviteError(box, 'Please enter your email address.', true);
    return false;
  }

  if (!isValidEmail(email)) {
    showInviteError(box, 'Please enter a valid email address.', true);
    return false;
  }

  submitInvite(email, button);
  return true;
}

function submitInvite(email, button) {
  button.disabled = true;
  button.dataset.originalText = button.dataset.originalText || button.textContent;
  button.textContent = 'Please wait...';

  var form = document.createElement('form');
  form.method = 'POST';
  form.action = 'create-checkout-session.php';

  var field = document.createElement('input');
  field.type = 'hidden';
  field.name = 'email';
  field.value = email;

  form.appendChild(field);
  document.body.appendChild(form);
  form.submit();
}

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function showInviteError(box, message, shouldFocus) {
  var input = box.querySelector('input[type="email"]');
  var error = getInviteError(box);

  error.textContent = message;
  error.classList.add('show');
  box.classList.remove('invite-shake');
  void box.offsetWidth;
  box.classList.add('has-error', 'invite-shake');
  input.setAttribute('aria-invalid', 'true');
  input.setAttribute('aria-describedby', error.id);
  if (shouldFocus) {
    input.focus();
  }
}

function clearInviteError(box) {
  var input = box.querySelector('input[type="email"]');
  var error = box.querySelector('.email-error');

  box.classList.remove('has-error', 'invite-shake');
  if (input) {
    input.setAttribute('aria-invalid', 'false');
    input.removeAttribute('aria-describedby');
  }
  if (error) {
    error.textContent = '';
    error.classList.remove('show');
  }
}

function getInviteError(box) {
  var error = box.querySelector('.email-error');

  if (!error) {
    error = document.createElement('p');
    error.className = 'email-error';
    error.id = 'email-error-' + Math.random().toString(36).slice(2, 9);
    box.appendChild(error);
  }

  return error;
}
