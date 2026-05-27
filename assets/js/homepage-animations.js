      // ============================================
      // HOMEPAGE PREMIUM MOTION SYSTEM
      // ============================================
      (function() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        // ---- SCROLL-REVEAL SYSTEM ----
        var revealSelectors = [
          // Section titles & subtitles
          '.health-hub-section .health-hub-header',
          '.destinations-section .destinations-header',
          '.destinations-section .destinations-stats',
          '.locations-section .section-title',
          '.locations-section .section-subtitle',
          '.services-section .section-title',
          '.testimonials-premium .testimonials-header',
          '.how-it-works .section-title',
          '.how-it-works .section-subtitle',
          '.team-section .team-header',
          '.products-section .products-header',
          '.hp-footer-cta-top',
          // Cards
          '.article-card',
          '.dest-card',
          '.dest-stat-card',
          '.location-card',
          '.benefit-card',
          '.testimonial-card',
          '.step-card',
          '.pharmacist-hero',
          '.stat-card-hero',
          '.product-card',
          '.certifications-modern',
          '.testimonials-trust',
        ];

        revealSelectors.forEach(function(sel) {
          document.querySelectorAll(sel).forEach(function(el) {
            if (!el.classList.contains('hp-reveal')) {
              el.classList.add('hp-reveal');
            }
          });
        });

        // Mark stagger containers
        var staggerContainers = [
          '.articles-grid',
          '.destinations-grid',
          '.destinations-stats',
          '.locations-grid',
          '.benefits-grid',
          '.testimonials-grid',
          '.steps-grid',
          '.stats-grid-premium',
          '.products-grid',
        ];
        staggerContainers.forEach(function(sel) {
          var el = document.querySelector(sel);
          if (el) el.classList.add('hp-stagger-children');
        });

        // Alternate reveal directions for 2-col grids
        document.querySelectorAll('.locations-grid .location-card:first-child').forEach(function(el) {
          el.classList.add('hp-reveal-left');
        });
        document.querySelectorAll('.locations-grid .location-card:last-child').forEach(function(el) {
          el.classList.add('hp-reveal-right');
        });

        // Pharmacist hero: scale entrance
        document.querySelectorAll('.pharmacist-hero').forEach(function(el) {
          el.classList.add('hp-reveal-scale');
        });

        // IntersectionObserver
        var revealObserver = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('hp-visible');
              revealObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.08, rootMargin: '0px 0px -60px 0px' });

        document.querySelectorAll('.hp-reveal').forEach(function(el) {
          revealObserver.observe(el);
        });

        // ---- DESTINATIONS STAT NUMBER COUNTER ----
        var destStatCards = document.querySelectorAll('.dest-stat-card');
        destStatCards.forEach(function(card) {
          var numEl = card.querySelector('.dest-stat-number');
          if (numEl) numEl.classList.add('hp-stat-counter');
        });

        var destObserver = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              destStatCards.forEach(function(card, i) {
                var numEl = card.querySelector('.hp-stat-counter');
                if (numEl) {
                  numEl.style.transitionDelay = (i * 0.12) + 's';
                  numEl.classList.add('hp-visible');
                  animateNumber(numEl, numEl.textContent.trim());
                }
              });
              destObserver.disconnect();
            }
          });
        }, { threshold: 0.3 });

        var destSection = document.querySelector('.destinations-stats');
        if (destSection) destObserver.observe(destSection);

        // ---- TESTIMONIALS TRUST NUMBER COUNTER ----
        var trustItems = document.querySelectorAll('.testimonials-trust-item');
        trustItems.forEach(function(item) {
          var numEl = item.querySelector('.testimonials-trust-number');
          if (numEl) numEl.classList.add('hp-trust-counter');
        });

        var trustObserver = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              trustItems.forEach(function(item, i) {
                var numEl = item.querySelector('.hp-trust-counter');
                if (numEl) {
                  numEl.style.transitionDelay = (i * 0.15) + 's';
                  numEl.classList.add('hp-visible');
                  animateNumber(numEl, numEl.textContent.trim());
                }
              });
              trustObserver.disconnect();
            }
          });
        }, { threshold: 0.3 });

        var trustSection = document.querySelector('.testimonials-trust');
        if (trustSection) trustObserver.observe(trustSection);

        // ---- TEAM STAT NUMBER COUNTER ----
        var statHeroCards = document.querySelectorAll('.stat-card-hero');
        var statObserver = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              statHeroCards.forEach(function(card) {
                var numEl = card.querySelector('.stat-number-hero');
                if (numEl) animateNumber(numEl, numEl.textContent.trim());
              });
              statObserver.disconnect();
            }
          });
        }, { threshold: 0.3 });

        var statsGrid = document.querySelector('.stats-grid-premium');
        if (statsGrid) statObserver.observe(statsGrid);

        // ---- NUMBER ANIMATION UTILITY ----
        function animateNumber(el, raw) {
          if (!raw) return;
          // Skip pure text values
          if (/^[A-Za-z\s]+$/.test(raw)) return;
          // Skip star ratings like "5★"
          if (raw.indexOf('★') !== -1) {
            var starNum = parseFloat(raw.replace(/[^0-9.]/g, ''));
            if (isNaN(starNum)) return;
            var starDuration = 800;
            var starStart = null;
            function starStep(ts) {
              if (!starStart) starStart = ts;
              var p = Math.min((ts - starStart) / starDuration, 1);
              var ease = 1 - Math.pow(1 - p, 3);
              el.textContent = Math.round(ease * starNum) + '★';
              if (p < 1) requestAnimationFrame(starStep);
            }
            requestAnimationFrame(starStep);
            return;
          }
          // Handle ranges like "10–20%"
          if (raw.indexOf('–') !== -1) return;

          var suffix = '';
          var targetNum = parseFloat(raw.replace(/[^0-9.]/g, ''));
          if (isNaN(targetNum)) return;
          // Skip single-digit numbers — they animate too fast and look jittery
          if (targetNum < 10 && raw.indexOf('.') === -1 && raw.indexOf(',') === -1) return;

          if (raw.indexOf('+') !== -1) suffix = '+';
          if (raw.indexOf('/5') !== -1) suffix = '/5';
          if (raw.indexOf('%') !== -1) suffix = '%';

          var hasComma = raw.indexOf(',') !== -1;
          var isDecimal = raw.indexOf('.') !== -1;
          var duration = hasComma ? 1200 : 1000;
          var startTime = null;

          function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            var current = ease * targetNum;

            if (hasComma) {
              el.textContent = Math.round(current).toLocaleString() + suffix;
            } else if (isDecimal) {
              el.textContent = current.toFixed(1) + suffix;
            } else {
              el.textContent = Math.round(current) + suffix;
            }
            if (progress < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
        }

      })();
