document.querySelectorAll('.top-form button, .reserve-form button').forEach(function (btn) {
  btn.addEventListener('click', function () {
    var box = btn.closest('.top-form, .reserve-form');
    var input = box.querySelector('input[type="email"]');
    var email = input.value.trim();

    // clear any previous error first
    clearError(input);

    // 1. empty check
    if (email === '') {
      showError(input, 'Please enter your email address.');
      return;
    }

    // 2. format check
    if (!isValidEmail(email)) {
      showError(input, 'Please enter a valid email address.');
      return;
    }

    // all good — disable button so they can't double-click, then submit
    btn.disabled = true;
    btn.textContent = 'Please wait...';

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
  });
});

// checks the email looks real: something@something.something
function isValidEmail(email) {
  var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}

// show a red message under the box
function showError(input, message) {
  var box = input.closest('.top-form, .reserve-form');
  var error = box.parentElement.querySelector('.email-error');

  if (!error) {
    error = document.createElement('p');
    error.className = 'email-error';
    box.parentElement.insertBefore(error, box.nextSibling);
  }

  error.textContent = message;
  input.style.outline = '2px solid #e74c3c';
  input.focus();
}

// remove the error message + red outline
function clearError(input) {
  var box = input.closest('.top-form, .reserve-form');
  var error = box.parentElement.querySelector('.email-error');
  if (error) error.textContent = '';
  input.style.outline = 'none';
}

// also clear the error the moment they start typing again
document.querySelectorAll('.top-form input, .reserve-form input').forEach(function (input) {
  input.addEventListener('input', function () {
    clearError(input);
  });
});
