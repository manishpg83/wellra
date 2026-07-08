// ==========================================================================
// Wellra PureSqueeze — homepage interactivity
// (FAQ accordion needs no JS — native <details>/<summary> handles it)
// ==========================================================================

document.addEventListener('DOMContentLoaded', () => {

  document.querySelectorAll('[data-email-form]').forEach((form) => {
    const input = form.querySelector('input[type="email"]');
    const button = form.querySelector('button[type="submit"]');
    const originalLabel = button.textContent;

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      if (!input.checkValidity()) {
        input.reportValidity();
        return;
      }

      // Simple inline confirmation (no backend wired up)
      button.disabled = true;
      button.textContent = 'You\'re In! ✓';
      form.classList.add('submitted');

      setTimeout(() => {
        button.disabled = false;
        button.textContent = originalLabel;
        input.value = '';
        form.classList.remove('submitted');
      }, 2500);
    });
  });

});
