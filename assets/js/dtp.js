  // ============================================
  // PREMIUM SCROLL-REVEAL SYSTEM
  // ============================================
  (function(){
    var revealSelectors = [
      '.dtp-section-white .section-title',
      '.dtp-section-white .section-subtitle',
      '.dtp-section-light .section-title',
      '.dtp-section-light .section-subtitle',
      '.dtp-section-dark .section-title',
      '.dtp-section-dark .section-subtitle',
      '.dtp-faq-section .section-title',
      '.dtp-locations .section-title',
      '.dtp-locations .section-subtitle',
      '.dtp-quick-pill',
      '.dtp-eyebrow',
      '.dtp-section-title',
      '.dtp-who-card',
      '.dtp-why-card',
      '.dtp-process-step',
      '.dtp-loc-card',
      '.dtp-faq-item',
      '.dtp-stat-box',
      '.dtp-two-col',
      '.dtp-compare-wrapper',
      '.dtp-callout',
      '.dtp-highlight-box',
      '.dtp-price-card',
      '.dtp-pricing-info-box',
      '.dtp-safety-box',
      '.dtp-serving-text',
      '.dtp-info-box',
      '.dtp-footer-cta-top',
      '.dtp-footer-newsletter-row',
    ];
    revealSelectors.forEach(function(sel){
      document.querySelectorAll(sel).forEach(function(el){
        if(!el.classList.contains('dtp-reveal')) el.classList.add('dtp-reveal');
      });
    });
    var staggerContainers = [
      '.dtp-who-grid','.dtp-why-grid',
      '.dtp-process-steps','.dtp-loc-grid','.dtp-faq-list',
      '.dtp-stat-grid','.dtp-hiw-grid','.dtp-pricing-grid'
    ];
    staggerContainers.forEach(function(sel){
      var el = document.querySelector(sel);
      if(el) el.classList.add('dtp-stagger-children');
    });
    document.querySelectorAll('.dtp-loc-card:first-child').forEach(function(el){ el.classList.add('dtp-reveal-left'); });
    document.querySelectorAll('.dtp-loc-card:last-child').forEach(function(el){ el.classList.add('dtp-reveal-right'); });

    var revealObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('dtp-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.08,rootMargin:'0px 0px -60px 0px'});
    document.querySelectorAll('.dtp-reveal').forEach(function(el){ revealObserver.observe(el); });

    // Quick-info cards staggered reveal
    var quickCards = document.querySelectorAll('.dtp-quick-card');
    quickCards.forEach(function(card, i){ card.style.transitionDelay = (i * 0.12) + 's'; });
    var quickObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          quickCards.forEach(function(card){ card.classList.add('dtp-visible'); });
          quickObserver.disconnect();
        }
      });
    },{threshold:0.3});
    var quickSection = document.querySelector('.dtp-quick');
    if(quickSection) quickObserver.observe(quickSection);

    // Stat number animations
    var statBoxes = document.querySelectorAll('.dtp-stat-box .dtp-stat-num');
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
  document.querySelectorAll('.dtp-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.dtp-faq-item');
      var answer=item.querySelector('.dtp-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.dtp-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.dtp-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
