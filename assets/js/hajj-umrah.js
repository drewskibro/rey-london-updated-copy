  // ============================================
  // PREMIUM SCROLL-REVEAL SYSTEM
  // ============================================
  (function(){
    var revealSelectors = [
      '.hajj-section-white .section-title',
      '.hajj-section-white .section-subtitle',
      '.hajj-section-light .section-title',
      '.hajj-section-light .section-subtitle',
      '.hajj-section-dark .section-title',
      '.hajj-section-dark .section-subtitle',
      '.hajj-faq-section .section-title',
      '.hajj-locations .section-title',
      '.hajj-locations .section-subtitle',
      '.hajj-quick-pill',
      '.hajj-eyebrow',
      '.hajj-section-title',
      '.hajj-who-card',
      '.hajj-why-card',
      '.hajj-process-step',
      '.hajj-loc-card',
      '.hajj-faq-item',
      '.hajj-stat-box',
      '.hajj-two-col',
      '.hajj-compare-wrapper',
      '.hajj-callout',
      '.hajj-highlight-box',
      '.hajj-price-card',
      '.hajj-pricing-info-box',
      '.hajj-safety-box',
      '.hajj-serving-text',
      '.hajj-info-box',
      '.hajj-footer-cta-top',
      '.hajj-footer-newsletter-row',
    ];
    revealSelectors.forEach(function(sel){
      document.querySelectorAll(sel).forEach(function(el){
        if(!el.classList.contains('hajj-reveal')) el.classList.add('hajj-reveal');
      });
    });
    var staggerContainers = [
      '.hajj-who-grid','.hajj-why-grid',
      '.hajj-process-steps','.hajj-loc-grid','.hajj-faq-list',
      '.hajj-stat-grid','.hajj-hiw-grid','.hajj-pricing-grid'
    ];
    staggerContainers.forEach(function(sel){
      var el = document.querySelector(sel);
      if(el) el.classList.add('hajj-stagger-children');
    });
    document.querySelectorAll('.hajj-loc-card:first-child').forEach(function(el){ el.classList.add('hajj-reveal-left'); });
    document.querySelectorAll('.hajj-loc-card:last-child').forEach(function(el){ el.classList.add('hajj-reveal-right'); });

    var revealObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('hajj-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.08,rootMargin:'0px 0px -60px 0px'});
    document.querySelectorAll('.hajj-reveal').forEach(function(el){ revealObserver.observe(el); });

    // Quick-info cards staggered reveal
    var quickCards = document.querySelectorAll('.hajj-quick-card');
    quickCards.forEach(function(card, i){ card.style.transitionDelay = (i * 0.12) + 's'; });
    var quickObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          quickCards.forEach(function(card){ card.classList.add('hajj-visible'); });
          quickObserver.disconnect();
        }
      });
    },{threshold:0.3});
    var quickSection = document.querySelector('.hajj-quick');
    if(quickSection) quickObserver.observe(quickSection);

    // Stat number animations
    var statBoxes = document.querySelectorAll('.hajj-stat-box .hajj-stat-num');
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
  document.querySelectorAll('.hajj-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.hajj-faq-item');
      var answer=item.querySelector('.hajj-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.hajj-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.hajj-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
