  /* Hair Loss Page — Scroll Reveal */
  (function(){
    if(window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('.hl-reveal').forEach(function(el){ el.classList.add('hl-revealed'); });
      return;
    }
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){ e.target.classList.add('hl-revealed'); obs.unobserve(e.target); }
      });
    },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.hl-reveal').forEach(function(el){ obs.observe(el); });
  })();

  /* FAQ Accordion */
  document.querySelectorAll('.hl-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.hl-faq-item');
      var answer=item.querySelector('.hl-faq-answer');
      var isOpen=item.classList.contains('open');
      document.querySelectorAll('.hl-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.hl-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
