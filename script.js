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
  console.log('__ANIMA_DBG__ search overlay moved to body');
}

if (searchBtn && searchOverlay) {
  searchBtn.addEventListener('click', () => {
    console.log('__ANIMA_DBG__ search btn clicked, adding active class');
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

// Search functionality
if (searchInput) {
  searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      const searchTerm = searchInput.value.trim();
      if (searchTerm) {
        console.log('Searching for:', searchTerm);
        // Add your search logic here
      }
    }
  });
}

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
