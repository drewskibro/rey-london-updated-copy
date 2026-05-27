  // ============================================
  // PREMIUM SCROLL-REVEAL SYSTEM
  // ============================================
  (function(){
    var revealSelectors = [
      '.mal-section-white .section-title',
      '.mal-section-white .section-subtitle',
      '.mal-section-light .section-title',
      '.mal-section-light .section-subtitle',
      '.mal-section-dark .section-title',
      '.mal-section-dark .section-subtitle',
      '.mal-faq-section .section-title',
      '.mal-locations .section-title',
      '.mal-locations .section-subtitle',
      '.mal-quick-pill',
      '.mal-eyebrow',
      '.mal-section-title',
      '.mal-who-card',
      '.mal-why-card',
      '.mal-process-step',
      '.mal-loc-card',
      '.mal-faq-item',
      '.mal-stat-box',
      '.mal-two-col',
      '.mal-compare-wrapper',
      '.mal-callout',
      '.mal-highlight-box',
      '.mal-price-card',
      '.mal-pricing-info-box',
      '.mal-safety-box',
      '.mal-serving-text',
      '.mal-info-box',
      '.mal-footer-cta-top',
      '.mal-footer-newsletter-row',
    ];
    revealSelectors.forEach(function(sel){
      document.querySelectorAll(sel).forEach(function(el){
        if(!el.classList.contains('mal-reveal')) el.classList.add('mal-reveal');
      });
    });
    var staggerContainers = [
      '.mal-who-grid','.mal-why-grid',
      '.mal-process-steps','.mal-loc-grid','.mal-faq-list',
      '.mal-stat-grid','.mal-hiw-grid','.mal-pricing-grid'
    ];
    staggerContainers.forEach(function(sel){
      var el = document.querySelector(sel);
      if(el) el.classList.add('mal-stagger-children');
    });
    document.querySelectorAll('.mal-loc-card:first-child').forEach(function(el){ el.classList.add('mal-reveal-left'); });
    document.querySelectorAll('.mal-loc-card:last-child').forEach(function(el){ el.classList.add('mal-reveal-right'); });

    var revealObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('mal-revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },{threshold:0.08,rootMargin:'0px 0px -60px 0px'});
    document.querySelectorAll('.mal-reveal').forEach(function(el){ revealObserver.observe(el); });

    // Quick-info cards staggered reveal
    var quickCards = document.querySelectorAll('.mal-quick-card');
    quickCards.forEach(function(card, i){ card.style.transitionDelay = (i * 0.12) + 's'; });
    var quickObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          quickCards.forEach(function(card){ card.classList.add('mal-visible'); });
          quickObserver.disconnect();
        }
      });
    },{threshold:0.3});
    var quickSection = document.querySelector('.mal-quick');
    if(quickSection) quickObserver.observe(quickSection);

    // Stat number animations
    var statBoxes = document.querySelectorAll('.mal-stat-box .mal-stat-num');
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
  document.querySelectorAll('.mal-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.mal-faq-item');
      var answer=item.querySelector('.mal-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.mal-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.mal-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
