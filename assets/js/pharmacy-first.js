/* NHS Pharmacy First — Scroll reveal + FAQ accordion */
document.addEventListener('DOMContentLoaded', function () {
  /* Scroll reveal */
  var revealEls = document.querySelectorAll('.pf-reveal');
  if (revealEls.length && 'IntersectionObserver' in window) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('pf-revealed'); obs.unobserve(e.target); } });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { obs.observe(el); });
  }

  /* FAQ accordion */
  document.querySelectorAll('.pf-faq-trigger').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.parentElement;
      var answer = item.querySelector('.pf-faq-answer');
      var isOpen = item.classList.contains('open');

      document.querySelectorAll('.pf-faq-item.open').forEach(function (openItem) {
        openItem.classList.remove('open');
        openItem.querySelector('.pf-faq-answer').style.maxHeight = null;
      });

      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
});
