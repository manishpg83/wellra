// ==========================================================================
// Wellra PureSqueeze — shared interactivity
// ==========================================================================

document.addEventListener('DOMContentLoaded', () => {

  /* ---------- Email capture forms (ribbon, hero, CTA) -> go to reservation ---------- */
  document.querySelectorAll('[data-email-form]').forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = form.querySelector('input[type="email"]');
      if (!input.checkValidity()) {
        input.reportValidity();
        return;
      }
      try {
        sessionStorage.setItem('wellra_email', input.value.trim());
      } catch (err) { /* storage unavailable, continue anyway */ }
      window.location.href = 'reservation.html';
    });
  });

  /* ---------- Reservation form ---------- */
  const reserveForm = document.getElementById('reserve-form');
  if (reserveForm) {

    // Pre-fill email if it was captured on the previous page
    try {
      const savedEmail = sessionStorage.getItem('wellra_email');
      const emailField = document.getElementById('email');
      if (savedEmail && emailField && !emailField.value) {
        emailField.value = savedEmail;
      }
    } catch (err) { /* ignore */ }

    const cardInput = document.getElementById('card');
    const cvcInput = document.getElementById('cvc');
    const expInput = document.getElementById('exp');
    const phoneInput = document.getElementById('phone');

    // Format card number in groups of 4
    cardInput.addEventListener('input', () => {
      let digits = cardInput.value.replace(/\D/g, '').slice(0, 16);
      cardInput.value = digits.replace(/(.{4})/g, '$1 ').trim();
    });

    // Digits only for CVC
    cvcInput.addEventListener('input', () => {
      cvcInput.value = cvcInput.value.replace(/\D/g, '').slice(0, 4);
    });

    // Auto-format expiration as MM / YY
    expInput.addEventListener('input', () => {
      let digits = expInput.value.replace(/\D/g, '').slice(0, 4);
      if (digits.length >= 3) {
        expInput.value = `${digits.slice(0, 2)} / ${digits.slice(2)}`;
      } else {
        expInput.value = digits;
      }
    });

    // Digits, spaces, +, - only for phone
    phoneInput.addEventListener('input', () => {
      phoneInput.value = phoneInput.value.replace(/[^\d+\-\s()]/g, '');
    });

    const showError = (field, message) => {
      const el = reserveForm.querySelector(`[data-error-for="${field}"]`);
      if (el) el.textContent = message || '';
    };

    const validateField = (name, value) => {
      switch (name) {
        case 'email':
          if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return 'Enter a valid email address.';
          break;
        case 'phone':
          if (value.replace(/\D/g, '').length < 7) return 'Enter a valid phone number.';
          break;
        case 'card':
          if (value.replace(/\D/g, '').length < 15) return 'Enter a valid card number.';
          break;
        case 'cvc':
          if (value.length < 3) return 'Enter a valid CVC.';
          break;
        case 'exp': {
          const m = value.match(/^(\d{2})\s*\/\s*(\d{2})$/);
          if (!m) return 'Use MM / YY format.';
          const month = parseInt(m[1], 10);
          if (month < 1 || month > 12) return 'Enter a valid month.';
          break;
        }
      }
      return '';
    };

    ['email', 'phone', 'card', 'cvc', 'exp'].forEach((name) => {
      const input = document.getElementById(name);
      input.addEventListener('blur', () => {
        input.classList.add('touched');
        showError(name, validateField(name, input.value.trim()));
      });
    });

    reserveForm.addEventListener('submit', (e) => {
      e.preventDefault();
      let hasError = false;
      ['email', 'phone', 'card', 'cvc', 'exp'].forEach((name) => {
        const input = document.getElementById(name);
        input.classList.add('touched');
        const msg = validateField(name, input.value.trim());
        showError(name, msg);
        if (msg) hasError = true;
      });

      if (hasError) {
        reserveForm.querySelector('.error-text:not(:empty)')?.closest('.field')?.querySelector('input')?.focus();
        return;
      }

      // Simulate payment processing
      const submitBtn = reserveForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;
      submitBtn.textContent = 'Processing…';
      submitBtn.disabled = true;

      setTimeout(() => {
        window.location.href = 'thanks.html';
      }, 700);
    });
  }

});
