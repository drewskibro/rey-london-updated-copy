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

// Dropdown menu interactions
document.querySelectorAll('.nav-item.has-dropdown').forEach(item => {
  const link = item.querySelector('.nav-link');
  
  // Prevent default click on dropdown triggers
  link.addEventListener('click', (e) => {
    if (window.innerWidth > 1024) {
      e.preventDefault();
    }
  });
  
  // Add active state on hover
  item.addEventListener('mouseenter', () => {
    item.classList.add('active');
  });
  
  item.addEventListener('mouseleave', () => {
    item.classList.remove('active');
  });
});

// Search overlay functionality
const searchBtn = document.querySelector('.search-btn');
const searchOverlay = document.querySelector('.search-overlay');
const searchClose = document.querySelector('.search-close');
const searchInput = document.querySelector('.search-overlay-input');

if (searchBtn && searchOverlay) {
  searchBtn.addEventListener('click', () => {
    searchOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
      searchInput.focus();
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
document.querySelectorAll('.treatment-card, .benefit-card, .stat-card, .story-card, .step-card, .team-stat, .product-card').forEach((el, index) => {
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

// Search functionality
const searchInput = document.querySelector('.search-input');
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
