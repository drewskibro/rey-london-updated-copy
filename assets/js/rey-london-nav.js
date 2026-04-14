// ================================
// Mobile Hamburger Navigation
// ================================
(function () {
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileNav = document.getElementById('mobileNav');
  const mobileNavClose = document.getElementById('mobileNavClose');
  const mobileNavOverlay = document.getElementById('mobileNavOverlay');

  function openNav() {
    mobileNav.classList.add('is-open');
    mobileNavOverlay.classList.add('is-open');
    hamburgerBtn.classList.add('is-open');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
    document.body.classList.add('mobile-nav-open');
  }

  function closeNav() {
    mobileNav.classList.remove('is-open');
    mobileNavOverlay.classList.remove('is-open');
    hamburgerBtn.classList.remove('is-open');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('mobile-nav-open');
  }

  if (hamburgerBtn) hamburgerBtn.addEventListener('click', openNav);
  if (mobileNavClose) mobileNavClose.addEventListener('click', closeNav);
  if (mobileNavOverlay) mobileNavOverlay.addEventListener('click', closeNav);

  // Accordion triggers
  document.querySelectorAll('.mobile-nav-trigger').forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      var sub = this.nextElementSibling;
      var isOpen = this.getAttribute('aria-expanded') === 'true';

      // Close all others
      document.querySelectorAll('.mobile-nav-trigger').forEach(function (t) {
        t.setAttribute('aria-expanded', 'false');
        t.nextElementSibling.classList.remove('is-open');
      });

      // Toggle clicked
      if (!isOpen) {
        this.setAttribute('aria-expanded', 'true');
        sub.classList.add('is-open');
      }
    });
  });

  // Close nav when a sub-link or direct link is clicked
  document.querySelectorAll('.mobile-nav-sub-link, .mobile-nav-link').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  // Close on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });
})();

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href !== '#') {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        // Close any open dropdowns
        document.querySelectorAll('.nav-item').forEach(item => {
          item.classList.remove('active');
        });
        
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
  });
});

// Header scroll effect
let lastScroll = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  
  if (currentScroll > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
  
  lastScroll = currentScroll;
});

// Dropdown menu interactions — debounced hover to prevent flicker on gap crossing
document.querySelectorAll('.nav-item.has-dropdown').forEach(item => {
  const link = item.querySelector('.nav-link');
  let closeTimer = null;

  // Prevent default click on dropdown triggers (desktop only)
  link.addEventListener('click', (e) => {
    if (window.innerWidth > 1024) {
      e.preventDefault();
    }
  });

  // Open immediately on mouseenter
  item.addEventListener('mouseenter', () => {
    if (closeTimer) {
      clearTimeout(closeTimer);
      closeTimer = null;
    }
    item.classList.add('active');
  });

  // Delay close by 120ms — covers the gap between nav link and dropdown panel
  item.addEventListener('mouseleave', () => {
    closeTimer = setTimeout(() => {
      item.classList.remove('active');
      closeTimer = null;
    }, 120);
  });

  // Also keep open if mouse enters the dropdown panel itself
  const dropdown = item.querySelector('.mega-dropdown, .dropdown-menu');
  if (dropdown) {
    dropdown.addEventListener('mouseenter', () => {
      if (closeTimer) {
        clearTimeout(closeTimer);
        closeTimer = null;
      }
      item.classList.add('active');
    });

    dropdown.addEventListener('mouseleave', () => {
      closeTimer = setTimeout(() => {
        item.classList.remove('active');
        closeTimer = null;
      }, 120);
    });
  }
});

// Close all dropdowns when clicking outside
document.addEventListener('click', (e) => {
  if (!e.target.closest('.nav-item.has-dropdown')) {
    document.querySelectorAll('.nav-item.has-dropdown').forEach(item => {
      item.classList.remove('active');
    });
  }
});

// Search overlay functionality
const searchBtn = document.querySelector('.search-btn');
let searchOverlay = document.querySelector('.search-overlay');
const searchClose = document.querySelector('.search-close');
const searchInput = document.querySelector('.search-overlay-input');

// Move the search overlay out of <header> to <body> so that
// header's backdrop-filter stacking context doesn't clip it
if (searchOverlay && searchOverlay.parentElement && searchOverlay.parentElement.tagName !== 'BODY') {
  document.body.appendChild(searchOverlay);
}

if (searchBtn && searchOverlay) {
  searchBtn.addEventListener('click', () => {
    searchOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
      if (searchInput) searchInput.focus();
    }, 300);
  });
}

if (searchClose) {
  searchClose.addEventListener('click', () => {
    searchOverlay.classList.remove('active');
    document.body.style.overflow = '';
  });
}

// Close search overlay on escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
    searchOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }
});

// Close search overlay on background click
if (searchOverlay) {
  searchOverlay.addEventListener('click', (e) => {
    if (e.target === searchOverlay) {
      searchOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
}

// ================================
// Search functionality — full page index with real-time filtering
// ================================
(function () {
  var sInput = document.querySelector('.search-overlay-input');
  if (!sInput) return;

  var resultsBox = document.getElementById('searchResults');
  var popularBox = document.getElementById('searchPopular');

  // Full site page index — keywords, title, description, url, category
  var pageIndex = [
    { title: 'Weight Loss Programs', desc: 'Mounjaro, Wegovy & GLP-1 weight management in Chislehurst', url: 'weight-loss.html', category: 'Services', keywords: 'weight loss mounjaro wegovy glp-1 ozempic slimming obesity bmi diet injection tirzepatide semaglutide chislehurst' },
    { title: 'Yellow Fever Vaccine', desc: 'NaTHNaC registered yellow fever vaccination centre in London', url: 'yellow-fever-vaccine-london.html', category: 'Travel Health', keywords: 'yellow fever vaccine vaccination certificate icvp nathnac africa south america tropical travel jab london' },
    { title: 'Hepatitis A & B Vaccines', desc: 'Hepatitis A, B & combined Twinrix vaccinations in London', url: 'hepatitis-vaccine-london.html', category: 'Travel Health', keywords: 'hepatitis a b vaccine twinrix hep liver vaccination travel london chislehurst' },
    { title: 'HPV Vaccine (Gardasil 9)', desc: 'HPV vaccination for cervical cancer protection in London', url: 'hpv-vaccine-london.html', category: 'Services', keywords: 'hpv vaccine gardasil 9 cervical cancer human papillomavirus warts vaccination london' },
    { title: 'Vitamin B12 Injections', desc: 'B12 energy injections for fatigue & deficiency in South East London', url: 'https://chislehurstpharmacygroup.kinsta.cloud/vitamin-b12-london/', category: 'Services', keywords: 'vitamin b12 injection energy fatigue deficiency tiredness boost hydroxocobalamin south east london chislehurst' },
    { title: 'Travel Health Clinic', desc: 'Travel vaccinations & health advice for South East London', url: 'travel-health-south-east-london.html', category: 'Travel Health', keywords: 'travel health clinic vaccinations travel vaccines malaria prevention south east london chislehurst' },
    { title: 'Prescription Services', desc: 'NHS repeat prescriptions, collection & free delivery', url: 'https://chislehurstpharmacygroup.kinsta.cloud/nhs-prescriptions/', category: 'NHS Services', keywords: 'nhs prescription repeat dispensing collection delivery free pharmacy chislehurst south east london' },
    { title: 'Thailand Travel Vaccinations', desc: 'Essential vaccines & health advice for Thailand travel', url: 'thailand.html', category: 'Travel Health', keywords: 'thailand travel vaccines hepatitis typhoid rabies malaria bangkok phuket chiang mai' },
    { title: 'Hair Loss Treatment', desc: 'Effective hair loss treatments & consultations', url: 'https://chislehurstpharmacygroup.kinsta.cloud/hair-loss-london/', category: 'Services', keywords: 'hair loss treatment finasteride minoxidil thinning alopecia consultation' },
    { title: 'Health Hub', desc: 'Expert health guides, articles & pharmacy advice', url: 'health-hub.html', category: 'About', keywords: 'health hub blog articles guides advice pharmacy wellness' },
    { title: 'Meet the Team', desc: 'Meet our experienced pharmacists at Chislehurst Pharmacy Group', url: 'meet-the-team.html', category: 'About', keywords: 'team pharmacist pharmacists staff dilip about us meet' },
    { title: 'Mounjaro Weight Loss Guide', desc: 'Why patients wish they\'d started Mounjaro sooner', url: 'health-hub/mounjaro-weight-loss-south-east-london.html', category: 'Health Hub', keywords: 'mounjaro tirzepatide weight loss glp-1 gip injection guide article blog' },
    { title: 'Mounjaro vs Wegovy', desc: 'Clinical trials comparison — which GLP-1 is better?', url: 'health-hub/mounjaro-vs-wegovy-clinical-trials.html', category: 'Health Hub', keywords: 'mounjaro vs wegovy comparison clinical trials semaglutide tirzepatide glp-1 step surmount' },
    { title: 'Travel Health Checklist 2026', desc: 'The ultimate pre-travel health checklist', url: 'health-hub/travel-health-checklist-2026.html', category: 'Health Hub', keywords: 'travel health checklist vaccines malaria kit insurance 2026 preparation' },
    { title: 'B12 Deficiency Signs', desc: '7 signs you might be B12 deficient', url: 'health-hub/b12-deficiency-signs.html', category: 'Health Hub', keywords: 'b12 deficiency signs symptoms fatigue tingling anaemia vegan vegetarian' },
    { title: 'Seasonal Flu Guide', desc: 'Who should get the flu jab — and who pays for it', url: 'health-hub/seasonal-flu-guide.html', category: 'Health Hub', keywords: 'flu jab vaccine influenza nhs private winter seasonal guide eligibility' },
    { title: 'NHS Consultations', desc: 'Free pharmacist consultations for common conditions', url: '#nhs-consultations', category: 'NHS Services', keywords: 'nhs consultation pharmacist advice free common conditions' },
    { title: 'NHS Vaccinations', desc: 'Flu jabs & routine immunisations', url: '#nhs-vaccinations', category: 'NHS Services', keywords: 'nhs vaccinations flu jab immunisations routine covid' },
    { title: 'Malaria Prevention', desc: 'Antimalarial tablets — Malarone, Doxycycline & more', url: 'https://chislehurstpharmacygroup.kinsta.cloud/malaria-prevention-london/', category: 'Travel Health', keywords: 'malaria prevention tablets antimalarial malarone doxycycline atovaquone chloroquine' },
    { title: 'Rabies Vaccine', desc: 'Pre-exposure rabies vaccination course', url: '#rabies-pre-exposure', category: 'Travel Health', keywords: 'rabies vaccine pre-exposure course animal bite travel' },
    { title: 'Erectile Dysfunction', desc: 'Discreet consultations & treatment', url: '#erectile-dysfunction', category: 'Services', keywords: 'erectile dysfunction ed viagra sildenafil tadalafil discreet treatment' },
    { title: 'Free Delivery', desc: 'Free prescription delivery on orders over £20 across London', url: '#delivery', category: 'Services', keywords: 'free delivery prescription london courier home' },
    { title: 'Pond Pharmacy', desc: '59 High St, Chislehurst BR7 5AF', url: '#pond-pharmacy', category: 'Locations', keywords: 'pond pharmacy high street chislehurst br7 5af location directions' },
    { title: 'Chislehurst Pharmacy', desc: '59 Chislehurst Rd, BR7 5NP', url: '#chislehurst-pharmacy', category: 'Locations', keywords: 'chislehurst pharmacy chislehurst road br7 5np location directions' }
  ];

  // Category icons (SVG) by category name
  var catIcons = {
    'Services': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
    'Travel Health': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
    'NHS Services': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>',
    'Health Hub': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
    'About': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
    'Locations': '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>'
  };

  function escapeHtml(str) {
    return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }

  function highlightMatch(text, query) {
    if (!query) return escapeHtml(text);
    var escaped = escapeHtml(text);
    var re = new RegExp('(' + query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + ')', 'gi');
    return escaped.replace(re, '<mark class="search-highlight">$1</mark>');
  }

  function searchPages(query) {
    if (!query || query.length < 2) return [];
    var q = query.toLowerCase();
    var words = q.split(/\s+/).filter(function(w) { return w.length > 0; });

    var scored = [];
    for (var i = 0; i < pageIndex.length; i++) {
      var page = pageIndex[i];
      var titleLower = page.title.toLowerCase();
      var descLower = page.desc.toLowerCase();
      var kw = page.keywords;
      var catLower = page.category.toLowerCase();
      var score = 0;

      for (var w = 0; w < words.length; w++) {
        var word = words[w];
        if (titleLower.indexOf(word) !== -1) score += 10;
        if (descLower.indexOf(word) !== -1) score += 5;
        if (kw.indexOf(word) !== -1) score += 3;
        if (catLower.indexOf(word) !== -1) score += 2;
      }

      if (score > 0) {
        scored.push({ page: page, score: score });
      }
    }

    scored.sort(function(a, b) { return b.score - a.score; });
    return scored.slice(0, 8);
  }

  function renderResults(results, query) {
    if (!resultsBox) return;
    if (results.length === 0) {
      resultsBox.innerHTML = '<div class="search-no-results"><div class="search-no-results-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M16 16L20 20"/></svg></div><p>No results found for &ldquo;' + escapeHtml(query) + '&rdquo;</p><span>Try searching for a service, vaccine, or treatment</span></div>';
      resultsBox.style.display = 'block';
      if (popularBox) popularBox.style.display = 'none';
      return;
    }

    var html = '<div class="search-results-header"><span class="search-results-count">' + results.length + ' result' + (results.length > 1 ? 's' : '') + '</span></div>';
    for (var i = 0; i < results.length; i++) {
      var r = results[i].page;
      var icon = catIcons[r.category] || catIcons['Services'];
      html += '<a href="' + r.url + '" class="search-result-item">';
      html += '<div class="search-result-icon">' + icon + '</div>';
      html += '<div class="search-result-content">';
      html += '<span class="search-result-title">' + highlightMatch(r.title, query) + '</span>';
      html += '<span class="search-result-desc">' + highlightMatch(r.desc, query) + '</span>';
      html += '</div>';
      html += '<span class="search-result-badge">' + escapeHtml(r.category) + '</span>';
      html += '</a>';
    }
    resultsBox.innerHTML = html;
    resultsBox.style.display = 'block';
    if (popularBox) popularBox.style.display = 'none';
  }

  function clearResults() {
    if (resultsBox) { resultsBox.innerHTML = ''; resultsBox.style.display = 'none'; }
    if (popularBox) popularBox.style.display = '';
  }

  // Real-time filtering on input
  sInput.addEventListener('input', function () {
    var q = this.value.trim();
    if (q.length < 2) { clearResults(); return; }
    var results = searchPages(q);
    renderResults(results, q);
  });

  // Enter key navigates to first result
  sInput.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      var firstLink = resultsBox && resultsBox.querySelector('.search-result-item');
      if (firstLink) {
        window.location.href = firstLink.getAttribute('href');
      }
    }
  });

  // Clear when overlay closes
  var sOverlay = document.querySelector('.search-overlay');
  if (sOverlay) {
    var obs = new MutationObserver(function (mutations) {
      for (var m = 0; m < mutations.length; m++) {
        if (mutations[m].attributeName === 'class' && !sOverlay.classList.contains('active')) {
          sInput.value = '';
          clearResults();
        }
      }
    });
    obs.observe(sOverlay, { attributes: true });
  }
})();

// Animate elements on scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, observerOptions);

// Observe all cards and sections with staggered animation
// (Homepage now uses hp-reveal system instead; keep for non-homepage pages)
document.querySelectorAll('.treatment-card, .stat-card, .story-card, .team-stat').forEach((el, index) => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(20px)';
  el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
  observer.observe(el);
});

// Add micro-interactions to treatment cards
document.querySelectorAll('.treatment-card').forEach(card => {
  card.addEventListener('mouseenter', function() {
    this.style.willChange = 'transform';
  });
  
  card.addEventListener('mouseleave', function() {
    this.style.willChange = 'auto';
  });
  
  // Add subtle tilt effect on mouse move
  card.addEventListener('mousemove', function(e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    
    const rotateX = (y - centerY) / 20;
    const rotateY = (centerX - x) / 20;
    
    this.style.transform = `translateY(-6px) scale(1.02) perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });
  
  card.addEventListener('mouseleave', function() {
    this.style.transform = '';
  });
});

// Add magnetic effect to "View all services" button
const viewAllBtn = document.querySelector('.btn-secondary');
if (viewAllBtn) {
  viewAllBtn.addEventListener('mousemove', function(e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;
    
    const moveX = x * 0.15;
    const moveY = y * 0.15;
    
    this.style.transform = `translateY(-3px) scale(1.02) translate(${moveX}px, ${moveY}px)`;
  });
  
  viewAllBtn.addEventListener('mouseleave', function() {
    this.style.transform = '';
  });
}


// Newsletter form submission
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
  newsletterForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const emailInput = newsletterForm.querySelector('.newsletter-input');
    const email = emailInput.value.trim();
    
    if (email) {
      console.log('Newsletter subscription:', email);
      // Add your newsletter subscription logic here
      
      // Show success message (you can customize this)
      const btn = newsletterForm.querySelector('.newsletter-btn');
      const originalText = btn.innerHTML;
      btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M13 4L6 11L3 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Subscribed!';
      btn.style.background = 'linear-gradient(135deg, #10B981 0%, #059669 100%)';
      
      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        emailInput.value = '';
      }, 3000);
    }
  });
}

// ================================
// Desktop Search Overlay
// ================================
(function () {
  var searchBtn = document.getElementById('headerSearchBtn');
  var overlay = document.getElementById('searchOverlay');
  var closeBtn = document.getElementById('searchOverlayClose');
  var backdrop = overlay ? overlay.querySelector('.search-overlay-backdrop') : null;
  var input = overlay ? overlay.querySelector('.search-overlay-input') : null;

  if (!searchBtn || !overlay) return;

  function openSearch() {
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (input) {
      setTimeout(function () { input.focus(); }, 100);
    }
  }

  function closeSearch() {
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    if (input) input.value = '';
  }

  searchBtn.addEventListener('click', openSearch);
  closeBtn.addEventListener('click', closeSearch);
  if (backdrop) backdrop.addEventListener('click', closeSearch);

  // Close on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
      closeSearch();
    }
  });
})();
