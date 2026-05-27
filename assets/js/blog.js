/**
 * Blog Post — TOC toggle + FAQ accordion + smooth scroll
 * @package Rey_London
 */
(function () {
  'use strict';

  /* ── Table of Contents toggle ── */
  var toc = document.querySelector('.bp-toc');
  if (toc) {
    var toggle = toc.querySelector('.bp-toc-toggle');
    var list = toc.querySelector('.bp-toc-list');
    var chevron = toc.querySelector('.bp-toc-chevron');

    if (toggle && list) {
      // Set initial expanded height so CSS transition works
      list.style.maxHeight = list.scrollHeight + 'px';

      toggle.addEventListener('click', function () {
        var collapsed = toc.getAttribute('data-collapsed') === 'true';
        if (collapsed) {
          toc.setAttribute('data-collapsed', 'false');
          toggle.setAttribute('aria-expanded', 'true');
          list.style.maxHeight = list.scrollHeight + 'px';
          list.style.opacity = '1';
        } else {
          toc.setAttribute('data-collapsed', 'true');
          toggle.setAttribute('aria-expanded', 'false');
          list.style.maxHeight = '0';
          list.style.opacity = '0';
        }
      });
    }

    // Smooth-scroll for TOC links
    toc.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var id = this.getAttribute('href').slice(1);
        var target = document.getElementById(id);
        if (target) {
          e.preventDefault();
          var offset = 90; // fixed nav height
          var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
          window.scrollTo({ top: top, behavior: 'smooth' });
          history.pushState(null, '', '#' + id);
        }
      });
    });
  }

  /* ── FAQ Accordion ── */
  var faqButtons = document.querySelectorAll('.bp-faq-trigger');
  faqButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.bp-faq-item');
      var answer = item.querySelector('.bp-faq-answer');
      var isOpen = item.classList.contains('bp-faq-open');

      // Close all open items first (exclusive accordion)
      document.querySelectorAll('.bp-faq-item.bp-faq-open').forEach(function (openItem) {
        if (openItem !== item) {
          openItem.classList.remove('bp-faq-open');
          openItem.querySelector('.bp-faq-trigger').setAttribute('aria-expanded', 'false');
          openItem.querySelector('.bp-faq-answer').style.maxHeight = null;
        }
      });

      // Toggle current
      if (isOpen) {
        item.classList.remove('bp-faq-open');
        this.setAttribute('aria-expanded', 'false');
        answer.style.maxHeight = null;
      } else {
        item.classList.add('bp-faq-open');
        this.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  /* ── Scroll-spy for TOC active state ── */
  if (toc) {
    var headings = [];
    toc.querySelectorAll('a[href^="#"]').forEach(function (link) {
      var id = link.getAttribute('href').slice(1);
      var el = document.getElementById(id);
      if (el) headings.push({ el: el, link: link });
    });

    if (headings.length) {
      var onScroll = function () {
        var scrollPos = window.pageYOffset + 120;
        var current = null;
        headings.forEach(function (h) {
          if (h.el.offsetTop <= scrollPos) current = h;
        });
        headings.forEach(function (h) {
          h.link.classList.toggle('bp-toc-active', h === current);
        });
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }
  }
})();
