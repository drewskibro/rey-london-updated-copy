  // FAQ Accordion
  document.querySelectorAll('.th-faq-trigger').forEach(function(trigger) {
    trigger.addEventListener('click', function() {
      var item = this.closest('.th-faq-item');
      var isOpen = this.getAttribute('aria-expanded') === 'true';
      // Close all
      document.querySelectorAll('.th-faq-item').forEach(function(i) {
        i.classList.remove('is-open');
        i.querySelector('.th-faq-trigger').setAttribute('aria-expanded', 'false');
      });
      // Toggle clicked
      if (!isOpen) {
        item.classList.add('is-open');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Scroll reveal
  var revealObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('th-revealed');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.th-stat-card-dark, .th-why-card, .th-service-card, .th-vaccine-card, .step-card, .th-feature-card, .th-faq-item, .location-card, .dest-card').forEach(function(el) {
    revealObserver.observe(el);
  });
