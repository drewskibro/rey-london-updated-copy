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
          input.value = '';
          btn.textContent = '✓ Subscribed!';
          btn.style.background = 'linear-gradient(135deg, #10B981 0%, #059669 100%)';
          setTimeout(function() {
            btn.innerHTML = origHTML;
            btn.style.background = '';
            btn.disabled = false;
          }, 4000);
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
})();
