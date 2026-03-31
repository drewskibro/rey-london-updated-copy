<?php
/**
 * Template Name: Health Hub
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===========================
       HERO SECTION
  =========================== -->
  <section class="hh-hero">
    <div class="hh-hero-bg">
      <div class="hh-hero-orb hh-hero-orb-1"></div>
      <div class="hh-hero-orb hh-hero-orb-2"></div>
    </div>
    <div class="container hh-hero-container">
      <div class="hh-hero-eyebrow">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
          <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
        </svg>
        HEALTH HUB
      </div>
      <h1 class="hh-hero-title">
        <?php echo wp_kses_post( rl_field( 'hh_hero_title', 'Expert insights on weight loss, travel health, and living your <span class="hh-gradient-text">healthiest life</span>' ) ); ?>
      </h1>
      <p class="hh-hero-subtitle"><?php echo esc_html( rl_field( 'hh_hero_subtitle', 'Trusted advice from our GPhC-registered pharmacists. Evidence-based guidance to help you make informed health decisions across South East London.' ) ); ?></p>

      <!-- Category Filter Tabs -->
      <div class="hh-filter-tabs" id="filterTabs">
        <button class="hh-tab active" data-filter="all">All Articles</button>
        <button class="hh-tab" data-filter="weight-loss">Weight Loss</button>
        <button class="hh-tab" data-filter="travel-health">Travel Health</button>
        <button class="hh-tab" data-filter="wellness">Wellness &amp; Prevention</button>
      </div>
    </div>
  </section>

  <!-- ===========================
       CHOOSE YOUR TOPIC
  =========================== -->
  <section class="hh-topics-section">
    <div class="container">
      <div class="hh-section-header">
        <h2 class="hh-section-title">What brings you here today?</h2>
        <p class="hh-section-lead">Start with the health topic that matters most to you right now</p>
      </div>

      <div class="hh-topic-cards">

        <!-- Card 1: Weight Loss -->
        <a href="#weight-loss-articles" class="hh-topic-card hh-topic-card--wl" data-topic="weight-loss" data-category="weight-loss">
          <div class="hh-topic-img-wrap">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=900&h=600&fit=crop" alt="Person preparing healthy food — Weight Loss Journeys" class="hh-topic-img">
            <div class="hh-topic-overlay"></div>
          </div>
          <div class="hh-topic-content">
            <div class="hh-topic-badge">Weight Loss</div>
            <h3 class="hh-topic-title">Weight Loss Journeys</h3>
            <p class="hh-topic-desc">GLP-1 medications, side effects management, nutrition guides, and real patient experiences</p>
            <span class="hh-topic-cta-pill">
              Explore Weight Loss Content
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </div>
        </a>

        <!-- Card 2: Travel Health -->
        <a href="#travel-health-articles" class="hh-topic-card hh-topic-card--travel" data-topic="travel-health" data-category="travel-health">
          <div class="hh-topic-img-wrap">
            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=900&h=600&fit=crop" alt="Travel destination with passport — Travel Health Guides" class="hh-topic-img">
            <div class="hh-topic-overlay"></div>
          </div>
          <div class="hh-topic-content">
            <div class="hh-topic-badge">Travel Health</div>
            <h3 class="hh-topic-title">Travel Health Guides</h3>
            <p class="hh-topic-desc">Destination-specific vaccines, malaria prevention, yellow fever requirements, and travel safety</p>
            <span class="hh-topic-cta-pill">
              Explore Travel Health
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </div>
        </a>

        <!-- Card 3: Wellness -->
        <a href="#wellness-articles" class="hh-topic-card hh-topic-card--wellness" data-topic="wellness" data-category="wellness">
          <div class="hh-topic-img-wrap">
            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=900&h=600&fit=crop" alt="Wellness and healthy lifestyle scene" class="hh-topic-img">
            <div class="hh-topic-overlay"></div>
          </div>
          <div class="hh-topic-content">
            <div class="hh-topic-badge">Wellness</div>
            <h3 class="hh-topic-title">Wellness &amp; Prevention</h3>
            <p class="hh-topic-desc">Vitamin guidance, prescription education, flu jabs, and staying healthy year-round</p>
            <span class="hh-topic-cta-pill">
              Explore Wellness Content
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ===========================
       FEATURED ARTICLE
  =========================== -->
  <section class="hh-featured-section">
    <div class="container">
      <div class="hh-section-header hh-section-header--light">
        <div class="hh-featured-editorial-label">
          <span class="hh-featured-editorial-rule"></span>
          <div class="hh-featured-editorial-text">
            <span class="hh-featured-editorial-eyebrow">Featured This Week</span>
            <span class="hh-featured-editorial-title">Editor's Pick</span>
          </div>
        </div>
      </div>

      <div class="hh-featured-card" data-category="weight-loss">
        <div class="hh-featured-img-col">
          <div class="hh-featured-img-wrap">
            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?w=900&h=600&fit=crop" alt="Clinical weight loss — Mounjaro vs Wegovy comparison" class="hh-featured-img">
            <div class="hh-featured-cat-badge">WEIGHT LOSS</div>
          </div>
        </div>
        <div class="hh-featured-content-col">
          <div class="hh-featured-meta">
            <span class="hh-read-time">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              8 min read
            </span>
            <span class="hh-meta-dot">·</span>
            <span class="hh-date">Mar 14, 2026</span>
          </div>
          <h2 class="hh-featured-title">Mounjaro vs Wegovy: What the Clinical Trials Actually Show</h2>
          <p class="hh-featured-excerpt">"My GP mentioned Wegovy. But my friend lost heaps of weight on Mounjaro. Are they the same thing? Should I ask for the other one?" Two of the most-prescribed GLP-1 medications — but they work differently, cost differently, and suit different patients. Our lead pharmacist breaks down what the data actually shows.</p>
          <div class="hh-byline">
            <div class="hh-byline-avatar">SB</div>
            <div class="hh-byline-info">
              <span class="hh-byline-name">Sumeet Banker</span>
              <span class="hh-byline-title">Lead Pharmacist</span>
            </div>
          </div>
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="hh-featured-cta">
            Read Full Article
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===========================
       LATEST ARTICLES GRID
  =========================== -->
  <section class="hh-articles-section">
    <div class="container">
      <div class="hh-section-header">
        <h2 class="hh-section-title">Latest from Our Pharmacists</h2>
        <p class="hh-section-lead">Evidence-based health guidance — written and reviewed by our GPhC-registered team</p>
      </div>

      <div class="hh-articles-grid" id="articlesGrid">

        <!-- Article 1 -->
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="hh-article-card" data-category="wellness">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800&h=450&fit=crop" alt="Person with energy and wellness — B12 injections article" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--wellness">WELLNESS</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>5 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Mar 10, 2026</span>
            </div>
            <h3 class="hh-article-title">7 Signs You Might Be Deficient in Vitamin B12</h3>
            <p class="hh-article-excerpt">Fatigue, brain fog, pins and needles — these 7 warning signs could mean your B12 is dangerously low. Here's when an injection is right for you.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Superintendent Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

        <!-- Article 2 -->
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="hh-article-card" data-category="travel-health">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=800&h=450&fit=crop" alt="Tropical destination — travel health article" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--travel">TRAVEL HEALTH</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>6 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Mar 03, 2026</span>
            </div>
            <h3 class="hh-article-title">The Ultimate Pre-Travel Health Checklist for 2026</h3>
            <p class="hh-article-excerpt">Vaccines, malaria tablets, health kits, insurance — the complete pharmacist-approved checklist for travellers from South East London.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Lead Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

        <!-- Article 3 -->
        <a href="<?php echo esc_url( home_url( '/travel-thailand/' ) ); ?>" class="hh-article-card" data-category="travel-health">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=800&h=450&fit=crop" alt="Thailand temple — Thailand travel vaccinations guide" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--travel">TRAVEL HEALTH</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>12 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Feb 28, 2026</span>
            </div>
            <h3 class="hh-article-title">Thailand Travel Vaccinations: Complete Guide for South East London Travellers</h3>
            <p class="hh-article-excerpt">Essential vaccines, malaria prevention, and health advice for your Thailand trip from our yellow fever centre.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Superintendent Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

        <!-- Article 4 -->
        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="hh-article-card" data-category="weight-loss">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&h=450&fit=crop" alt="Healthy meal prep — weight loss guide" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--weight">WEIGHT LOSS</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>7 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Feb 21, 2026</span>
            </div>
            <h3 class="hh-article-title">What Actually Happens When You Start Mounjaro: Week by Week</h3>
            <p class="hh-article-excerpt">The first injection, the appetite changes, the expected side effects — and when to call us if something feels wrong.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Lead Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

        <!-- Article 5 -->
        <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="hh-article-card" data-category="wellness">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=800&h=450&fit=crop" alt="NHS prescription — prescription services article" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--wellness">PRESCRIPTIONS</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>4 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Feb 14, 2026</span>
            </div>
            <h3 class="hh-article-title">NHS Repeat Prescriptions: 5 Things Chislehurst Patients Should Know</h3>
            <p class="hh-article-excerpt">NHS Electronic Prescription Service means you never need to collect a paper script again. Here's how to set it up properly.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Superintendent Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

        <!-- Article 6 -->
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="hh-article-card" data-category="wellness">
          <div class="hh-article-img-wrap">
            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=450&fit=crop" alt="Flu vaccination — seasonal health article" class="hh-article-img">
            <div class="hh-article-cat-badge hh-badge--seasonal">SEASONAL HEALTH</div>
          </div>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>5 min read</span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date">Feb 07, 2026</span>
            </div>
            <h3 class="hh-article-title">Who Should Get the Flu Jab This Year — and Who Pays for It</h3>
            <p class="hh-article-excerpt">NHS eligibility criteria change each season. Find out if you qualify for a free jab — or whether a private one makes sense for your family.</p>
            <div class="hh-byline hh-byline--sm">
              <div class="hh-byline-avatar hh-byline-avatar--sm">SB</div>
              <div class="hh-byline-info">
                <span class="hh-byline-name">Sumeet Banker</span>
                <span class="hh-byline-title">Lead Pharmacist</span>
              </div>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ===========================
       POPULAR TOPICS (EXPLORE BY TOPIC)
  =========================== -->
  <section class="hh-explore-section">
    <div class="hh-explore-bg">
      <div class="hh-explore-orb hh-explore-orb-1"></div>
      <div class="hh-explore-orb hh-explore-orb-2"></div>
    </div>
    <div class="container hh-explore-container">
      <div class="hh-section-header hh-section-header--on-dark">
        <h2 class="hh-section-title hh-title-white">Explore by Topic</h2>
        <p class="hh-section-lead hh-lead-muted">Browse our most-read health guides organised by what matters to you</p>
      </div>

      <div class="hh-explore-grid">

        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=600&h=400&fit=crop" alt="GLP-1 Weight Loss" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="hh-explore-name">GLP-1 Weight Loss</h3>
            <span class="hh-explore-count">18 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Travel Vaccinations" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <h3 class="hh-explore-name">Travel Vaccinations</h3>
            <span class="hh-explore-count">24 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=600&h=400&fit=crop" alt="Malaria Prevention" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="hh-explore-name">Malaria Prevention</h3>
            <span class="hh-explore-count">8 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600&h=400&fit=crop" alt="Prescription Services" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
            </div>
            <h3 class="hh-explore-name">Prescription Services</h3>
            <span class="hh-explore-count">15 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1550572017-4814c6f55999?w=600&h=400&fit=crop" alt="Vitamin B12 and Wellness" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/></svg>
            </div>
            <h3 class="hh-explore-name">Vitamin B12 &amp; Wellness</h3>
            <span class="hh-explore-count">10 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&h=400&fit=crop" alt="Hair Loss Treatment" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/></svg>
            </div>
            <h3 class="hh-explore-name">Hair Loss Treatment</h3>
            <span class="hh-explore-count">6 articles</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1611731958547-55f6ac4bc0a4?w=600&h=400&fit=crop" alt="Yellow Fever Certificates" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <h3 class="hh-explore-name">Yellow Fever Certificates</h3>
            <span class="hh-explore-count">5 articles</span>
          </div>
        </a>

        <a href="/#nhs-vaccinations" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=400&fit=crop" alt="Seasonal Health" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/></svg>
            </div>
            <h3 class="hh-explore-name">Seasonal Health</h3>
            <span class="hh-explore-count">12 articles</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ===========================
       TRUSTED EXPERTISE
  =========================== -->
  <section class="hh-trust-section">
    <div class="container">
      <div class="hh-trust-grid">

        <!-- Left: Text Content -->
        <div class="hh-trust-text">
          <div class="hh-trust-eyebrow">EXPERT PHARMACIST INSIGHTS</div>
          <h2 class="hh-trust-title">Health advice you can trust</h2>
          <p class="hh-trust-body">Every article in our Health Hub is written and clinically reviewed by our GPhC-registered pharmacists. We combine over 15 years of pharmaceutical expertise with the latest clinical evidence to provide accurate, actionable health guidance for South East London families.</p>

          <div class="hh-trust-markers">
            <div class="hh-trust-marker">
              <div class="hh-trust-marker-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="hh-trust-marker-text">
                <strong>Pharmacist-Written</strong>
                <span>All content created by qualified, registered pharmacists – not AI or freelance writers</span>
              </div>
            </div>
            <div class="hh-trust-marker">
              <div class="hh-trust-marker-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
              </div>
              <div class="hh-trust-marker-text">
                <strong>Clinically Reviewed</strong>
                <span>Evidence-based advice backed by peer-reviewed studies and clinical trials</span>
              </div>
            </div>
            <div class="hh-trust-marker">
              <div class="hh-trust-marker-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              </div>
              <div class="hh-trust-marker-text">
                <strong>Regularly Updated</strong>
                <span>Content reviewed and updated as new research and guidelines emerge</span>
              </div>
            </div>
            <div class="hh-trust-marker">
              <div class="hh-trust-marker-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="hh-trust-marker-text">
                <strong>Local Expertise</strong>
                <span>Specific guidance for South East London patients, from pharmacists who serve your community</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Visual -->
        <div class="hh-trust-visual">
          <div class="hh-trust-img-wrap">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517579457-0.png" alt="Sumeet Banker — Superintendent Pharmacist, Chislehurst Pharmacy Group" class="hh-trust-img">
            <div class="hh-trust-float-badge">
              <div class="hh-trust-float-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
              </div>
              <div class="hh-trust-float-text">
                <span class="hh-trust-float-main">GPhC Registered</span>
                <span class="hh-trust-float-sub">Pharmacy</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===========================
       SERVICE CONNECTION CTA
  =========================== -->
  <section class="hh-cta-section">
    <div class="hh-cta-bg">
      <div class="hh-cta-orb-1"></div>
      <div class="hh-cta-orb-2"></div>
    </div>
    <div class="container hh-cta-container">
      <h2 class="hh-cta-title">Questions about your health?</h2>
      <p class="hh-cta-body">Our Health Hub provides trusted information, but nothing replaces a personal consultation. Speak with our expert pharmacists about prescriptions, travel health, weight management, and wellness.</p>
      <div class="hh-cta-buttons">
        <a href="tel:02084673158" class="hh-btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l1.09-1.09a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Book Consultation
        </a>
        <a href="/" class="hh-btn-outline">
          Explore Our Services
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
      <div class="hh-cta-trust">
        <span class="hh-cta-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          GPhC-registered pharmacists
        </span>
        <span class="hh-cta-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Two Chislehurst locations
        </span>
        <span class="hh-cta-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Same-day appointments available
        </span>
      </div>
    </div>
  </section>
  <!-- ===========================
       FOOTER (exact homepage footer)
  =========================== -->

<?php get_footer(); ?>
