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
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Weight Loss' ) ) ?: home_url( '/category/weight-loss/' ) ); ?>" class="hh-topic-card hh-topic-card--wl" data-topic="weight-loss" data-category="weight-loss">
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
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Travel Health' ) ) ?: home_url( '/category/travel-health/' ) ); ?>" class="hh-topic-card hh-topic-card--travel" data-topic="travel-health" data-category="travel-health">
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
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Wellness' ) ) ?: home_url( '/category/wellness/' ) ); ?>" class="hh-topic-card hh-topic-card--wellness" data-topic="wellness" data-category="wellness">
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

      <?php
      $hh_author = rl_hh_author();
      $feat_query = new WP_Query( array( 'posts_per_page' => 1, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC' ) );
      if ( $feat_query->have_posts() ) : $feat_query->the_post();
        $feat_cats     = get_the_category();
        $feat_cat      = ! empty( $feat_cats ) ? $feat_cats[0]->slug : 'wellness';
        $feat_cat_text = ! empty( $feat_cats ) ? strtoupper( $feat_cats[0]->name ) : 'WELLNESS';
        $feat_img_url  = get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?: 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?w=900&h=600&fit=crop';
        $feat_word_count = str_word_count( wp_strip_all_tags( get_the_content() ) );
        $feat_read     = max( 1, ceil( $feat_word_count / 250 ) ) . ' min read';
      ?>
      <div class="hh-featured-card" data-category="<?php echo esc_attr( $feat_cat ); ?>">
        <div class="hh-featured-img-col">
          <div class="hh-featured-img-wrap">
            <img src="<?php echo esc_url( $feat_img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="hh-featured-img">
            <div class="hh-featured-cat-badge"><?php echo esc_html( $feat_cat_text ); ?></div>
          </div>
        </div>
        <div class="hh-featured-content-col">
          <div class="hh-featured-meta">
            <span class="hh-read-time">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <?php echo esc_html( $feat_read ); ?>
            </span>
            <span class="hh-meta-dot">·</span>
            <span class="hh-date"><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
          </div>
          <h2 class="hh-featured-title"><?php the_title(); ?></h2>
          <p class="hh-featured-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
          <div class="hh-byline">
            <?php rl_hh_avatar( $hh_author, 'lg' ); ?>
            <div class="hh-byline-info">
              <span class="hh-byline-name"><?php echo esc_html( $hh_author['name'] ); ?></span>
              <span class="hh-byline-title"><?php echo esc_html( $hh_author['title'] ); ?></span>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="hh-featured-cta">
            Read Full Article
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); ?>
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

      <?php
      $hh_badge_map = array( 'wellness' => 'hh-badge--wellness', 'travel-health' => 'hh-badge--travel', 'weight-loss' => 'hh-badge--weight', 'seasonal' => 'hh-badge--seasonal', 'prescriptions' => 'hh-badge--wellness', 'pharmacy-advice' => 'hh-badge--wellness', 'vaccinations' => 'hh-badge--travel' );
      $articles_query = new WP_Query( array(
          'posts_per_page' => 6,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'offset'         => 1,
      ) );
      ?>
      <div class="hh-articles-grid" id="articlesGrid">
        <?php if ( $articles_query->have_posts() ) : while ( $articles_query->have_posts() ) : $articles_query->the_post();
            $art_cats  = get_the_category();
            $cat       = ! empty( $art_cats ) ? $art_cats[0]->slug : 'wellness';
            $cat_txt   = ! empty( $art_cats ) ? strtoupper( $art_cats[0]->name ) : 'WELLNESS';
            $badge_class = $hh_badge_map[ $cat ] ?? 'hh-badge--wellness';
            $art_img   = get_the_post_thumbnail_url( get_the_ID(), 'health-hub-card' );
            $art_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
            $art_read  = max( 1, ceil( $art_words / 250 ) ) . ' min read';
        ?>
        <a href="<?php the_permalink(); ?>" class="hh-article-card" data-category="<?php echo esc_attr( $cat ); ?>">
          <?php if ( $art_img ) : ?>
          <div class="hh-article-img-wrap">
            <img src="<?php echo esc_url( $art_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="hh-article-img">
            <div class="hh-article-cat-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $cat_txt ); ?></div>
          </div>
          <?php endif; ?>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><?php echo esc_html( $art_read ); ?></span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date"><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
            </div>
            <h3 class="hh-article-title"><?php the_title(); ?></h3>
            <p class="hh-article-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
            <div class="hh-byline hh-byline--sm">
              <?php rl_hh_avatar( $hh_author, 'sm' ); ?>
              <div class="hh-byline-info">
                <span class="hh-byline-name"><?php echo esc_html( $hh_author['name'] ); ?></span>
                <span class="hh-byline-title"><?php echo esc_html( $hh_author['title'] ); ?></span>
              </div>
            </div>
          </div>
        </a>
        <?php endwhile; endif; wp_reset_postdata(); ?>
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
        <h2 class="hh-section-title hh-title-white"><?php echo esc_html( rl_field( 'hh_explore_title', 'Explore by Topic' ) ); ?></h2>
        <p class="hh-section-lead hh-lead-muted"><?php echo esc_html( rl_field( 'hh_explore_lead', 'Browse our most-read health guides organised by what matters to you' ) ); ?></p>
      </div>

      <?php
      $hh_tiles = rl_field( 'hh_explore_tiles', array() );
      if ( empty( $hh_tiles ) || ! is_array( $hh_tiles ) ) {
          $hh_tiles = array(
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=600&h=400&fit=crop' ), 'image_alt' => 'GLP-1 Weight Loss', 'icon' => 'shield',      'name' => 'GLP-1 Weight Loss',       'count' => '18 articles', 'url' => home_url( '/weight-loss/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop' ), 'image_alt' => 'Travel Vaccinations', 'icon' => 'globe',       'name' => 'Travel Vaccinations',     'count' => '24 articles', 'url' => home_url( '/travel-health/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=600&h=400&fit=crop' ), 'image_alt' => 'Malaria Prevention',  'icon' => 'shield',      'name' => 'Malaria Prevention',      'count' => '8 articles',  'url' => home_url( '/travel-health/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600&h=400&fit=crop' ), 'image_alt' => 'Prescription Services','icon' => 'plus-box',    'name' => 'Prescription Services',   'count' => '15 articles', 'url' => home_url( '/nhs-prescriptions/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1550572017-4814c6f55999?w=600&h=400&fit=crop' ), 'image_alt' => 'Vitamin B12 and Wellness', 'icon' => 'sun',    'name' => 'Vitamin B12 & Wellness',  'count' => '10 articles', 'url' => home_url( '/vitamin-b12-london/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&h=400&fit=crop' ), 'image_alt' => 'Hair Loss Treatment', 'icon' => 'pill',        'name' => 'Hair Loss Treatment',     'count' => '6 articles',  'url' => home_url( '/hair-loss-london/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1611731958547-55f6ac4bc0a4?w=600&h=400&fit=crop' ), 'image_alt' => 'Yellow Fever Certificates', 'icon' => 'calendar', 'name' => 'Yellow Fever Certificates', 'count' => '5 articles', 'url' => home_url( '/travel-health/' ) ),
              array( 'image' => array( 'url' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=400&fit=crop' ), 'image_alt' => 'Seasonal Health',     'icon' => 'sun-horizon', 'name' => 'Seasonal Health',         'count' => '12 articles', 'url' => '/#nhs-vaccinations' ),
          );
      }
      ?>
      <div class="hh-explore-grid">
        <?php foreach ( $hh_tiles as $tile ) :
            $img_url = is_array( $tile['image'] ?? null ) && ! empty( $tile['image']['url'] ) ? $tile['image']['url'] : '';
            if ( ! $img_url ) { continue; }
            $img_alt = $tile['image_alt'] ?? ( is_array( $tile['image'] ?? null ) ? ( $tile['image']['alt'] ?? '' ) : '' );
            $url     = ! empty( $tile['url'] ) ? $tile['url'] : '#';
            $icon    = $tile['icon'] ?? 'shield';
            $name    = $tile['name'] ?? '';
            $count   = $tile['count'] ?? '';
        ?>
        <a href="<?php echo esc_url( $url ); ?>" class="hh-explore-tile">
          <div class="hh-explore-img-wrap">
            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" class="hh-explore-img">
            <div class="hh-explore-overlay"></div>
          </div>
          <div class="hh-explore-content">
            <div class="hh-explore-icon"><?php echo rl_hh_icon_svg( $icon ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- curated SVG library ?></div>
            <h3 class="hh-explore-name"><?php echo esc_html( $name ); ?></h3>
            <?php if ( $count ) : ?><span class="hh-explore-count"><?php echo esc_html( $count ); ?></span><?php endif; ?>
          </div>
        </a>
        <?php endforeach; ?>
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
        <a href="<?php echo esc_url( home_url( '/contact-page/#book-appointment' ) ); ?>" class="hh-btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
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
