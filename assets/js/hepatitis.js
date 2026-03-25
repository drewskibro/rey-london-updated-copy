  // ============================================
  // PREMIUM SCROLL-REVEAL SYSTEM
  // ============================================
  (function(){
    var revealSelectors = [
      '.hep-section-white .section-title',
      '.hep-section-white .section-subtitle',
      '.hep-section-light .section-title',
      '.hep-section-light .section-subtitle',
      '.hep-section-dark .section-title',
      '.hep-section-dark .section-subtitle',
      '.hep-faq-section .section-title',
      '.hep-locations .section-title',
      '.hep-locations .section-subtitle',
      '.hep-quick-pill',
      '.hep-eyebrow',
      '.hep-section-title',
      '.hep-who-card',
      '.hep-why-card',
      '.hep-risk-col',
      '.hep-process-step',
      '.hep-loc-card',
      '.hep-faq-item',
      '.hep-stat-box',
      '.hep-two-col',
      '.hep-compare-wrapper',
      '.hep-callout',
      '.hep-highlight-box',
      '.hep-price-card',
      '.hep-pricing-info-box',
      '.hep-safety-box',
      '.hep-serving-text',
      '.hep-info-box',
      '.hep-footer-cta-top',
      '.hep-footer-newsletter-row',
    ];
    revealSelectors.forEach(function(sel){
      document.querySelectorAll(sel).forEach(function(el){
        if(!el.classList.contains('hep-reveal')) el.classList.add('hep-reveal');
      });
    });
    var staggerContainers = [
      '.hep-who-grid','.hep-why-grid','.hep-risk-two-col',
      '.hep-process-steps','.hep-loc-grid','.hep-faq-list',
      '.hep-stat-grid','.hep-hiw-grid','.hep-pricing-grid'
    ];
    staggerContainers.forEach(function(sel){
      var el = document.querySelector(sel);
      if(el) el.classList.add('hep-stagger-children');
    });
    document.querySelectorAll('.hep-risk-col:first-child, .hep-loc-card:first-child').forEach(function(el){ el.classList.add('hep-reveal-left'); });
    document.querySelectorAll('.hep-risk-col:last-child, .hep-loc-card:last-child').forEach(function(el){ el.classList.add('hep-reveal-right'); });

    var revealObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('hep-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.08,rootMargin:'0px 0px -60px 0px'});
    document.querySelectorAll('.hep-reveal').forEach(function(el){ revealObserver.observe(el); });

    // Quick-info cards staggered reveal
    var quickCards = document.querySelectorAll('.hep-quick-card');
    quickCards.forEach(function(card, i){ card.style.transitionDelay = (i * 0.12) + 's'; });
    var quickObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          quickCards.forEach(function(card){ card.classList.add('hep-visible'); });
          quickObserver.disconnect();
        }
      });
    },{threshold:0.3});
    var quickSection = document.querySelector('.hep-quick');
    if(quickSection) quickObserver.observe(quickSection);

    // Stat number animations
    var statBoxes = document.querySelectorAll('.hep-stat-box .hep-stat-num');
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
      if(/^[A-Z]/.test(raw) && !/^\d/.test(raw)) return;
      var suffix = '';
      var targetNum = parseFloat(raw.replace(/[^0-9.]/g,''));
      if(isNaN(targetNum)) return;
      if(raw.indexOf('+') !== -1) suffix = '+';
      if(raw.indexOf('%') !== -1) suffix = '%';
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
        if(isDecimal) el.textContent = current.toFixed(1) + suffix;
        else el.textContent = Math.round(current) + suffix;
        if(progress < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    }
  })();

  /* FAQ Accordion */
  document.querySelectorAll('.hep-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.hep-faq-item');
      var answer=item.querySelector('.hep-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.hep-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.hep-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
