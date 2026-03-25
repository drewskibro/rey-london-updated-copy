  /* HPV Page — Scroll Reveal */
  (function(){
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){ e.target.classList.add('hpv-revealed'); }
      });
    },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.hpv-reveal').forEach(function(el){ obs.observe(el); });
  })();

  /* FAQ Accordion */
  document.querySelectorAll('.hpv-faq-trigger').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.closest('.hpv-faq-item');
      var answer=item.querySelector('.hpv-faq-answer');
      var isOpen=item.classList.contains('open');
      // close all
      document.querySelectorAll('.hpv-faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.hpv-faq-answer').style.maxHeight=null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight=answer.scrollHeight+'px';
      }
    });
  });
  </script>
</body>
