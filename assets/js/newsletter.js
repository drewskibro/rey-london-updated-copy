// Newsletter signup — handles all .newsletter-form instances site-wide
(function() {
  document.addEventListener('submit', function(e) {
    var form = e.target.closest('.newsletter-form');
    if (!form) return;
    if (typeof rlAjax === 'undefined') return;
    e.preventDefault();

    var input = form.querySelector('.newsletter-input');
    var btn   = form.querySelector('.newsletter-btn');
    if (!input || !btn) return;

    var email = input.value.trim();
    if (!email) return;

    var origHTML = btn.innerHTML;
    btn.disabled = true;
    btn.textContent = 'Subscribing…';

    var data = new FormData();
    data.append('action', 'rl_newsletter_signup');
    data.append('nonce', rlAjax.newsletterNonce);
    data.append('email', email);
    data.append('rl_hp', form.querySelector('[name="rl_hp"]') ? form.querySelector('[name="rl_hp"]').value : '');

    fetch(rlAjax.url, { method: 'POST', body: data })
      .then(function(r) { return r.json(); })
      .then(function(res) {
        if (res.success) {
          showSuccess(form);
        } else {
          btn.innerHTML = origHTML;
          btn.disabled = false;
          var msg = res.data && res.data.message ? res.data.message : 'Please try again.';
          input.setCustomValidity(msg);
          input.reportValidity();
          setTimeout(function() { input.setCustomValidity(''); }, 3000);
        }
      })
      .catch(function() {
        btn.innerHTML = origHTML;
        btn.disabled = false;
      });
  });

  function showSuccess(form) {
    var wrapper = form.querySelector('.newsletter-input-wrapper');
    var existing = form.querySelector('.newsletter-success');
    if (existing) existing.remove();

    var hubLink = '/health-hub/';
    var successEl = document.createElement('div');
    successEl.className = 'newsletter-success';
    successEl.innerHTML =
      '<span class="newsletter-success-icon">' +
      '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>' +
      '</span>' +
      '<span class="newsletter-success-text">You\'re subscribed! While you\'re here, </span>' +
      '<a href="' + hubLink + '" class="newsletter-success-link">browse the Health Hub ' +
      '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>' +
      '</a>';

    if (wrapper) {
      wrapper.style.display = 'none';
    }
    form.appendChild(successEl);
  }
})();
