  // ========== B12 Page — Scroll Reveal ==========
  (function() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('.b12-stat-card, .b12-fact-card, .b12-symptom-card, .b12-compare-card, .b12-step-card, .b12-benefit-card, .b12-pricing-card, .b12-faq-item').forEach(function(el) {
        el.classList.add('b12-revealed');
      });
      return;
    }

    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('b12-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.b12-stat-card, .b12-fact-card, .b12-symptom-card, .b12-compare-card, .b12-step-card, .b12-benefit-card, .b12-pricing-card, .b12-faq-item').forEach(function(el) {
      el.classList.remove('b12-revealed');
      revealObserver.observe(el);
    });
  })();

  // ========== B12 Page — FAQ Accordion ==========
  (function() {
    document.querySelectorAll('.b12-faq-trigger').forEach(function(trigger) {
      trigger.addEventListener('click', function() {
        var item = this.closest('.b12-faq-item');
        var isOpen = item.classList.contains('is-open');

        // Close all others
        document.querySelectorAll('.b12-faq-item.is-open').forEach(function(openItem) {
          openItem.classList.remove('is-open');
        });

        // Toggle clicked
        if (!isOpen) {
          item.classList.add('is-open');
        }
      });
    });
  })();
