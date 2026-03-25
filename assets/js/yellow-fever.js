  // ============================================
  // PREMIUM SCROLL-REVEAL SYSTEM
  // ============================================
  (function(){
    // 1. Tag elements for reveal
    var revealSelectors = [
      // Section titles & subtitles
      '.yf-section-white .section-title',
      '.yf-section-white .section-subtitle',
      '.yf-section-light .section-title',
      '.yf-section-light .section-subtitle',
      '.yf-section-dark .section-title',
      '.yf-section-dark .section-subtitle',
      '.yf-faq-section .section-title',
      '.yf-locations .section-title',
      '.yf-quick-pill',
      '.yf-eyebrow',
      '.yf-section-title',
      // Cards
      '.yf-need-card',
      '.yf-who-card',
      '.yf-why-card',
      '.yf-risk-col',
      '.yf-process-step',
      '.yf-loc-card',
      '.yf-faq-item',
      '.yf-stat-box',
      // Two-col sections
      '.yf-two-col',
      // Special blocks
      '.yf-cert-card',
      '.yf-transit-box',
      '.yf-info-box',
      '.yf-callout',
      '.yf-highlight-box',
      '.yf-price-card-single',
      '.yf-pricing-info-box',
      '.yf-safety-box',
      '.yf-serving-text',
      // Lifestyle banners
      '.yf-lifestyle-banner',
      '.yf-safety-banner',
      // Footer CTA
      '.yf-footer-cta-top',
      '.yf-footer-newsletter-row',
    ];

    revealSelectors.forEach(function(sel){
      document.querySelectorAll(sel).forEach(function(el){
        if(!el.classList.contains('yf-reveal')){
          el.classList.add('yf-reveal');
        }
      });
    });

    // 2. Mark stagger containers
    var staggerContainers = [
      '.yf-need-grid',
      '.yf-who-grid',
      '.yf-why-grid',
      '.yf-risk-two-col',
      '.yf-process-steps',
      '.yf-loc-grid',
      '.yf-faq-list',
      '.yf-stat-grid',
      '.yf-hiw-grid',
    ];
    staggerContainers.forEach(function(sel){
      var el = document.querySelector(sel);
      if(el) el.classList.add('yf-stagger-children');
    });

    // 3. Alternate reveal directions for 2-col layouts
    document.querySelectorAll('.yf-risk-col:first-child, .yf-loc-card:first-child').forEach(function(el){
      el.classList.add('yf-reveal-left');
    });
    document.querySelectorAll('.yf-risk-col:last-child, .yf-loc-card:last-child').forEach(function(el){
      el.classList.add('yf-reveal-right');
    });

    // Lifestyle banners: scale entrance
    document.querySelectorAll('.yf-lifestyle-banner, .yf-safety-banner').forEach(function(el){
      el.classList.add('yf-reveal-scale');
    });

    // 4. IntersectionObserver
    var revealObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('yf-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.08,rootMargin:'0px 0px -60px 0px'});

    document.querySelectorAll('.yf-reveal').forEach(function(el){
      revealObserver.observe(el);
    });

    // ============================================
    // QUICK-INFO CARDS — staggered reveal + counter
    // ============================================
    var quickCards = document.querySelectorAll('.yf-quick-card');
    quickCards.forEach(function(card, i){
      card.style.transitionDelay = (i * 0.12) + 's';
    });

    var quickObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          quickCards.forEach(function(card){ card.classList.add('yf-visible'); });
          // Animate stat numbers
          quickCards.forEach(function(card){
            var numEl = card.querySelector('.yf-quick-stat');
            if(!numEl) return;
            animateStatText(numEl, numEl.textContent.trim());
          });
          quickObserver.disconnect();
        }
      });
    },{threshold:0.3});

    var quickSection = document.querySelector('.yf-quick');
    if(quickSection) quickObserver.observe(quickSection);

    // ============================================
    // STAT BOXES — animate numbers on scroll
    // ============================================
    var statBoxes = document.querySelectorAll('.yf-stat-box .yf-stat-num');
    var statObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          animateStatText(entry.target, entry.target.textContent.trim());
          statObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.5});
    statBoxes.forEach(function(el){ statObserver.observe(el); });

    function animateStatText(el, raw){
      // Skip text-only values
      if(/^[A-Z]/.test(raw) && !/^\d/.test(raw)) return;
      // Skip ranges like "30–60K"
      if(raw.indexOf('–') !== -1) return;

      var suffix = '';
      var targetNum = parseFloat(raw.replace(/[^0-9.]/g,''));
      if(isNaN(targetNum)) return;

      // Detect suffix
      if(raw.indexOf('+') !== -1) suffix = '+';
      if(raw.indexOf('/5') !== -1) suffix = '/5';
      if(raw.indexOf('%') !== -1) suffix = '%';
      if(raw.indexOf('K') !== -1) suffix = 'K';

      // Thousands formatting (comma-separated)
      if(raw.indexOf(',') !== -1){
        var duration = 1200;
        var startTime = null;
        function stepComma(ts){
          if(!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var ease = 1 - Math.pow(1 - progress, 3);
          var current = Math.round(ease * targetNum);
          el.textContent = current.toLocaleString() + suffix;
          if(progress < 1) requestAnimationFrame(stepComma);
        }
        requestAnimationFrame(stepComma);
        return;
      }

      var isDecimal = raw.indexOf('.') !== -1;
      var duration = 1000;
      var startTime = null;
      function step(ts){
        if(!startTime) startTime = ts;
        var progress = Math.min((ts - startTime) / duration, 1);
        var ease = 1 - Math.pow(1 - progress, 3);
        var current = ease * targetNum;
        if(isDecimal){
          el.textContent = current.toFixed(1) + suffix;
        } else {
          el.textContent = Math.round(current) + suffix;
        }
        if(progress < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    }
  })();

  /* FAQ Accordion */
  document.querySelectorAll('.yf-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.yf-faq-item');
      var answer=item.querySelector('.yf-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.yf-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.yf-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
  </script>
</body>
