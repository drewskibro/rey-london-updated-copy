    // Category filter tabs — filters articles, topic cards, and featured article
    const tabs = document.querySelectorAll('.hh-tab');
    const articleCards = document.querySelectorAll('.hh-article-card');
    const topicCards = document.querySelectorAll('.hh-topic-card');
    const featuredCard = document.querySelector('.hh-featured-card[data-category]');
    const articlesSection = document.querySelector('.hh-articles-section');
    const topicsSection = document.querySelector('.hh-topics-section');
    const featuredSection = document.querySelector('.hh-featured-section');

    function showElement(el) {
      el.style.display = '';
      // Force reveal so items aren't stuck at opacity 0
      el.classList.remove('hh-reveal');
      el.classList.add('hh-revealed');
      el.style.opacity = '';
      el.style.transform = '';
    }

    function hideElement(el) {
      el.style.display = 'none';
    }

    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;
        const isAll = filter === 'all';

        // Filter article cards
        let visibleArticles = 0;
        articleCards.forEach(card => {
          if (isAll || card.dataset.category === filter) {
            showElement(card);
            visibleArticles++;
          } else {
            hideElement(card);
          }
        });

        // Filter topic journey cards
        topicCards.forEach(card => {
          if (isAll || card.dataset.category === filter) {
            showElement(card);
          } else {
            hideElement(card);
          }
        });

        // Filter featured article
        if (featuredSection && featuredCard) {
          if (isAll || featuredCard.dataset.category === filter) {
            featuredSection.style.display = '';
          } else {
            featuredSection.style.display = 'none';
          }
        }

        // Show/hide "all articles" heading context
        topicsSection.style.display = '';

        // Smooth scroll to topics section so user sees the result
        if (!isAll) {
          topicsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Scroll reveal observer
    const hhObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('hh-revealed');
          }, entry.target.dataset.delay || 0);
          hhObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.hh-article-card, .hh-explore-tile, .hh-trust-marker, .hh-topic-card').forEach((el, i) => {
      el.classList.add('hh-reveal');
      el.dataset.delay = (i % 3) * 80;
      hhObserver.observe(el);
    });

    // Newsletter form
    const hhNewsletterForm = document.querySelector('.hh-newsletter-form');
    if (hhNewsletterForm) {
      hhNewsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = hhNewsletterForm.querySelector('.hh-newsletter-btn');
        btn.textContent = '✓ Subscribed!';
        btn.style.background = 'linear-gradient(135deg, #10B981 0%, #059669 100%)';
        setTimeout(() => {
          btn.textContent = 'Subscribe';
          btn.style.background = '';
          hhNewsletterForm.reset();
        }, 3000);
      });
    }
