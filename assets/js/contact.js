  // ============================================
  // CONTACT PAGE — Scroll Reveal + FAQ + Form
  // ============================================
  (function() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    // Scroll reveal
    var revealEls = document.querySelectorAll('.ct-reveal');
    var revealObs = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          e.target.classList.add('ct-revealed');
          revealObs.unobserve(e.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(function(el) { revealObs.observe(el); });

    // Staggered cards inside grids
    document.querySelectorAll('.ct-quick-grid .ct-quick-card, .ct-loc-grid .ct-loc-card, .ct-hours-grid .ct-hours-card, .ct-faq-grid .ct-faq-item, .ct-hero-cards .ct-hero-card').forEach(function(el, i) {
      el.classList.add('ct-reveal');
      el.style.transitionDelay = (i * 0.1) + 's';
      revealObs.observe(el);
    });
  })();

  // FAQ accordion
  document.querySelectorAll('.ct-faq-q').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var isOpen = this.getAttribute('aria-expanded') === 'true';
      // Close all
      document.querySelectorAll('.ct-faq-q').forEach(function(b) {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling.classList.remove('is-open');
      });
      // Toggle
      if (!isOpen) {
        this.setAttribute('aria-expanded', 'true');
        this.nextElementSibling.classList.add('is-open');
      }
    });
  });

  // Simple form handler (UI only)
  var contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var btn = contactForm.querySelector('.ct-form-submit');
      var origHTML = btn.innerHTML;
      btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg> Message Sent!';
      btn.style.background = 'linear-gradient(135deg, #10B981 0%, #059669 100%)';
      setTimeout(function() {
        btn.innerHTML = origHTML;
        btn.style.background = '';
        contactForm.reset();
      }, 3000);
    });
  }
  </script>
</body>
