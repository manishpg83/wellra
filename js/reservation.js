document.addEventListener('DOMContentLoaded', () => {
  const reserveForm = document.getElementById('payment-form');
  if (!reserveForm) return;

  const emailField = document.getElementById('email');
  const phoneField = document.getElementById('phone');
  const submitBtn = reserveForm.querySelector('button[type="submit"]');
  const cardErrors = document.getElementById('card-errors');
  const cardElementMount = document.getElementById('card-element');

  const stripePublishableKey = typeof STRIPE_PUBLISHABLE_KEY !== 'undefined' ? STRIPE_PUBLISHABLE_KEY : '';

  if (!window.Stripe || !stripePublishableKey || !cardElementMount) {
    if (cardErrors) cardErrors.textContent = 'Payment form could not load. Please refresh the page.';
    if (submitBtn) submitBtn.disabled = true;
    return;
  }

  try {
    const savedEmail = sessionStorage.getItem('wellra_email');
    if (savedEmail && emailField && !emailField.value) {
      emailField.value = savedEmail;
    }
  } catch (err) {
    // Continue without prefill if storage is unavailable.
  }

  const stripe = Stripe(stripePublishableKey);
  const elements = stripe.elements();
  const cardElement = elements.create('card', {
    hidePostalCode: true,
    style: {
      base: {
        color: '#111111',
        fontFamily: 'Helvetica, Arial, sans-serif',
        fontSize: '15px',
        '::placeholder': {
          color: '#8a8f98'
        }
      },
      invalid: {
        color: '#d8524f',
        iconColor: '#d8524f'
      }
    }
  });

  cardElement.mount('#card-element');

  const setButtonLoading = (isLoading) => {
    if (!submitBtn) return;
    submitBtn.disabled = isLoading;
    submitBtn.textContent = isLoading ? 'Processing...' : 'PAY NOW';
  };

  const showError = (field, message) => {
    const errorEl = reserveForm.querySelector(`[data-error-for="${field}"]`);
    if (errorEl) errorEl.textContent = message || '';

    const input = document.getElementById(field);
    if (input) input.classList.toggle('invalid', Boolean(message));
  };

  const showCardError = (message) => {
    if (cardErrors) cardErrors.textContent = message || '';
    cardElementMount.classList.toggle('invalid', Boolean(message));
  };

  const validateEmail = (value) => {
    if (!value) return 'Email is required.';
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return 'Enter a valid email address.';
    return '';
  };

  const validatePhone = (value) => {
    const digits = value.replace(/\D/g, '');
    if (!digits) return 'Phone number is required.';
    if (digits.length < 7 || digits.length > 15) return 'Enter a valid phone number.';
    return '';
  };

  const validateForm = () => {
    const emailError = validateEmail(emailField.value.trim());
    const phoneError = validatePhone(phoneField.value.trim());

    showError('email', emailError);
    showError('phone', phoneError);

    if (emailError) {
      emailField.focus();
      return false;
    }

    if (phoneError) {
      phoneField.focus();
      return false;
    }

    return true;
  };

  phoneField.addEventListener('input', () => {
    phoneField.value = phoneField.value.replace(/[^\d+\-\s()]/g, '');
  });

  emailField.addEventListener('blur', () => {
    showError('email', validateEmail(emailField.value.trim()));
  });

  phoneField.addEventListener('blur', () => {
    showError('phone', validatePhone(phoneField.value.trim()));
  });

  cardElement.on('change', (event) => {
    showCardError(event.error ? event.error.message : '');
  });

  reserveForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    showCardError('');

    if (!validateForm()) return;

    setButtonLoading(true);

    try {
      const response = await fetch('reserve.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          email: emailField.value.trim(),
          phone: phoneField.value.trim()
        })
      });

      const data = await response.json();

      if (!response.ok || !data.success || !data.clientSecret) {
        throw new Error(data.message || 'Unable to start payment. Please try again.');
      }

      const result = await stripe.confirmCardPayment(data.clientSecret, {
        payment_method: {
          card: cardElement,
          billing_details: {
            email: emailField.value.trim(),
            phone: phoneField.value.trim()
          }
        }
      });

      if (result.error) {
        throw new Error(result.error.message || 'Payment failed. Please check your card details.');
      }

      if (result.paymentIntent && result.paymentIntent.status === 'succeeded') {
        window.location.href = 'thankyou.html';
        return;
      }

      throw new Error('Payment was not completed. Please try again.');
    } catch (err) {
      showCardError(err.message || 'Something went wrong. Please try again.');
      setButtonLoading(false);
    }
  });
});
