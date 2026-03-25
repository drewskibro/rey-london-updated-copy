  /* Scroll Reveal */
  (function(){
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){ e.target.classList.add('mt-revealed'); }
      });
    },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.mt-reveal').forEach(function(el){ obs.observe(el); });
  })();
