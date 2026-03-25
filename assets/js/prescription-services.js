    // FAQ accordion — close others when one opens
    document.querySelectorAll('.rx-faq-item').forEach(function(item) {
      item.addEventListener('toggle', function() {
        if (this.open) {
          document.querySelectorAll('.rx-faq-item').forEach(function(other) {
            if (other !== item && other.open) other.removeAttribute('open');
          });
        }
      });
    });

    // Scroll-reveal for prescription page elements
    (function() {
      var revealEls = document.querySelectorAll('.rx-step-card, .rx-feature-card, .rx-repeat-card, .rx-why-card, .rx-accept-card, .rx-faq-item, .rx-benefit-item, .rx-collect-step, .rx-stat-item');
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('rx-revealed');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

      revealEls.forEach(function(el, i) {
        el.classList.add('rx-hidden');
        el.style.transitionDelay = ((i % 4) * 0.1) + 's';
        observer.observe(el);
      });
    })();
  </script>
</body>
