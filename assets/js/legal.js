/* Legal page — tab switching + URL hash sync */
(function () {
  var tabs   = document.querySelectorAll('.legal-tab');
  var panels = document.querySelectorAll('.legal-panel');
  if (!tabs.length) return;

  function activate(id) {
    tabs.forEach(function (t) {
      var active = t.getAttribute('aria-controls') === id;
      t.classList.toggle('legal-tab--active', active);
      t.setAttribute('aria-selected', active ? 'true' : 'false');
    });
    panels.forEach(function (p) {
      p.classList.toggle('legal-panel--active', p.id === id);
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      var panelId = tab.getAttribute('aria-controls');
      activate(panelId);
      history.replaceState(null, '', '#' + panelId.replace('panel-', ''));
      window.scrollTo({ top: document.querySelector('.legal-tabs-wrap').offsetTop, behavior: 'smooth' });
    });
  });

  // On load: activate panel from URL hash
  var hash = window.location.hash.replace('#', '');
  var map  = { 'privacy': 'panel-privacy', 'terms': 'panel-terms', 'accessibility': 'panel-accessibility',
               'privacy-policy': 'panel-privacy', 'terms-and-conditions': 'panel-terms' };
  if (hash && map[hash]) {
    activate(map[hash]);
  }
})();
