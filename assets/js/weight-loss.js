    // FAQ accordion
    document.querySelectorAll('.wl-faq-item').forEach(item => {
      item.addEventListener('toggle', function() {
        document.querySelectorAll('.wl-faq-item').forEach(other => {
          if (other !== item && other.open) other.removeAttribute('open');
        });
      });
    });

    // ============================================
    // SCROLL-REVEAL SYSTEM
    // ============================================
    (function() {
      // Tag elements for reveal
      const revealSelectors = [
        // Section titles & subtitles
      '.wl-vs-header',
      '.wl-vs-stats',
        '#treatments .products-header',
        '#results .section-title',
        '#results .section-subtitle',
        '#how-it-works .section-title',
        '#how-it-works .section-subtitle',
        '#testimonials .testimonials-header',
        '#locations .section-title',
        '#locations .section-subtitle',
        '#why-us .team-header',
        '#faq .section-title',
        '#faq .section-subtitle',
        '#consultation .cta-content-full',
        // Cards
        '.wl-vs-card',
        '.product-card',
        '.benefit-card',
        '.step-card',
        '.testimonial-card',
        '.location-card',
        '.stat-card-hero',
        '.wl-pillar',
        '.wl-faq-item',
        '.wl-eligibility-note',
        '.certifications-modern',
        '.testimonials-trust',
        // Pharmacist section
        '.pharmacist-hero',
      ];

      revealSelectors.forEach(function(sel) {
        document.querySelectorAll(sel).forEach(function(el) {
          if (!el.classList.contains('wl-reveal')) {
            el.classList.add('wl-reveal');
          }
        });
      });

      // Mark stagger containers
      var staggerContainers = [
        '.wl-vs-grid',
        '.products-grid',
        '.benefits-grid',
        '.steps-grid',
        '.testimonials-grid',
        '.locations-grid',
        '.stats-grid-premium',
        '.wl-pillars',
        '.wl-faq-grid',
      ];
      staggerContainers.forEach(function(sel) {
        var el = document.querySelector(sel);
        if (el) el.classList.add('wl-stagger-children');
      });

      // Alternate reveal directions for 2-col grids
      document.querySelectorAll('.wl-vs-card:first-child, .location-card:first-child').forEach(function(el) {
        el.classList.add('wl-reveal-left');
      });
      document.querySelectorAll('.wl-vs-card:last-child, .location-card:last-child').forEach(function(el) {
        el.classList.add('wl-reveal-right');
      });

      // Pharmacist hero: scale entrance
      document.querySelectorAll('.pharmacist-hero').forEach(function(el) {
        el.classList.add('wl-reveal-scale');
      });

      // IntersectionObserver
      var revealObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('wl-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.08, rootMargin: '0px 0px -60px 0px' });

      document.querySelectorAll('.wl-reveal').forEach(function(el) {
        revealObserver.observe(el);
      });

      // ============================================
      // PROOF BAR — staggered reveal + counter
      // ============================================
      var proofItems = document.querySelectorAll('.wl-proof-item');
      proofItems.forEach(function(item, i) {
        item.style.transitionDelay = (i * 0.12) + 's';
      });

      var proofObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            proofItems.forEach(function(item) {
              item.classList.add('wl-visible');
            });
            // Animate numbers
            proofItems.forEach(function(item) {
              var numEl = item.querySelector('.wl-proof-number');
              if (!numEl) return;
              var raw = numEl.textContent.trim();
              animateProofNumber(numEl, raw);
            });
            proofObserver.disconnect();
          }
        });
      }, { threshold: 0.3 });

      var proofBar = document.querySelector('.wl-proof-bar');
      if (proofBar) proofObserver.observe(proofBar);

      function animateProofNumber(el, raw) {
        // Parse numbers like "10,000+", "4.9/5", "10–20%", "Same Day", "2"
        if (raw === 'Same Day') return; // Skip text-only
        // Handle "10–20%"
        if (raw.indexOf('–') !== -1) return; // Range — skip counting

        var suffix = '';
        var prefix = '';
        var targetNum = parseFloat(raw.replace(/[^0-9.]/g, ''));
        if (isNaN(targetNum)) return;

        // Detect suffix
        if (raw.indexOf('+') !== -1) suffix = '+';
        if (raw.indexOf('/5') !== -1) suffix = '/5';
        if (raw.indexOf('%') !== -1) suffix = '%';
        if (raw.indexOf(',') !== -1) {
          // Thousands formatting
          var isDecimal = raw.indexOf('.') !== -1;
          var duration = 1200;
          var startTime = null;
          function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            var current = Math.round(ease * targetNum);
            el.textContent = current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
          return;
        }

        // Decimal numbers (like 4.9)
        var isDecimal = raw.indexOf('.') !== -1;
        var duration = 1000;
        var startTime = null;
        function step(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var ease = 1 - Math.pow(1 - progress, 3);
          var current = ease * targetNum;
          if (isDecimal) {
            el.textContent = current.toFixed(1) + suffix;
          } else {
            el.textContent = Math.round(current) + suffix;
          }
          if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
      }


    })();
