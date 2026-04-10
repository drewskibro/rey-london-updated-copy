<?php
/**
 * Template Name: Weight Loss
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ============================================
       HERO SECTION
       ============================================ -->
  <section class="wl-hero">
    <div class="wl-hero-bg">
      <div class="wl-hero-orb wl-hero-orb-1"></div>
      <div class="wl-hero-orb wl-hero-orb-2"></div>
    </div>
    <div class="container wl-hero-container">
      <!-- Left: Content -->
      <div class="wl-hero-content">
        <div class="wl-hero-badge">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Medical Weight Loss · London</span>
        </div>
        <h1 class="wl-hero-title">
          <?php echo esc_html( rl_field( 'wl_hero_title', 'Lose 10–20% of your body weight in 12 months — with prescription support at your local London pharmacy' ) ); ?>
        </h1>
        <p class="wl-hero-subtitle">
          <?php echo esc_html( rl_field( 'wl_hero_subtitle', 'Mounjaro and Wegovy prescriptions from our South East London pharmacists. No GP referral. No long waits. Expert face-to-face care at Chislehurst and Pond End — from people who know your name.' ) ); ?>
        </p>
        <div class="wl-hero-actions">
          <a href="#consultation" class="btn-primary wl-btn-hero-primary">
            Book Free Consultation
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="#treatments" class="btn-secondary wl-btn-hero-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
            </svg>
            Check Eligibility
          </a>
        </div>
        <div class="wl-hero-trust">
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>GPhC Registered</span>
          </div>
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>No GP Referral Needed</span>
          </div>
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span>Face-to-Face Support</span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="wl-hero-visual">
        <div class="wl-hero-img-stack">
          <div class="wl-hero-img wl-hero-img-main">
            <?php $wl_hero_main = rl_field( 'wl_hero_image_main' ); ?>
            <img src="<?php echo esc_url( $wl_hero_main ?: 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=700&h=800&fit=crop' ); ?>" alt="Medical weight loss consultation at Chislehurst Pharmacy Group pharmacy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SOCIAL PROOF BAR
       ============================================ -->
  <section class="wl-proof-bar">
    <div class="container">
      <div class="wl-proof-grid">
        <div class="wl-proof-item">
          <div class="wl-proof-number">10,000+</div>
          <div class="wl-proof-label">Patients Served</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">10–20%*</div>
          <div class="wl-proof-label">Average Body Weight Lost</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">4.9/5</div>
          <div class="wl-proof-label">Patient Satisfaction</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">2</div>
          <div class="wl-proof-label">London Clinics</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">Same Day</div>
          <div class="wl-proof-label">Appointments Available</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">FREE</div>
          <div class="wl-proof-label">Initial Consultation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       WHY DIETS FAIL — PROBLEM/SOLUTION
       ============================================ -->
  <section class="wl-vs-section" id="why-medical">
    <div class="wl-vs-bg">
      <div class="wl-vs-orb wl-vs-orb-1"></div>
      <div class="wl-vs-orb wl-vs-orb-2"></div>
    </div>
    <div class="container wl-vs-container">
      <!-- Header -->
      <div class="wl-vs-header">
        <div class="wl-vs-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
          </svg>
          <span>The Science Behind Weight Loss</span>
        </div>
        <h2 class="wl-vs-title">Why diets alone rarely work —<br class="wl-vs-br-md"> and what finally does</h2>
        <p class="wl-vs-desc">Hunger isn't a willpower problem. It's a biology problem. GLP-1 treatments like Mounjaro and Wegovy fix the biology.</p>
      </div>

      <!-- Stats Row -->
      <div class="wl-vs-stats">
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">95%</div>
          <div class="wl-vs-stat-label">of diets fail within 5 years</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">20%</div>
          <div class="wl-vs-stat-label">body weight lost with GLP-1</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">72wk</div>
          <div class="wl-vs-stat-label">clinical trial duration</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">2x</div>
          <div class="wl-vs-stat-label">receptor activation (GLP-1 + GIP)</div>
        </div>
      </div>

      <!-- Cards Grid -->
      <div class="wl-vs-grid">
        <!-- Problem Card -->
        <div class="wl-vs-card wl-vs-card-problem">
          <div class="wl-vs-card-badge wl-vs-badge-muted">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Traditional approach
          </div>
          <h3 class="wl-vs-card-title">Diets that make your body fight back</h3>
          <ul class="wl-vs-list">
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Hunger hormones spike</strong>
                <span>Restricting calories triggers ghrelin surges that overwhelm willpower</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Metabolism slows down</strong>
                <span>Your body adapts to lower calories by burning less energy</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Weight comes right back</strong>
                <span>95% of weight lost through dieting alone is regained within 5 years</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Unsustainable struggle</strong>
                <span>Months of effort with minimal lasting results</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Solution Card -->
        <div class="wl-vs-card wl-vs-card-solution">
          <div class="wl-vs-card-badge wl-vs-badge-glow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            The medical approach
          </div>
          <h3 class="wl-vs-card-title">GLP-1 treatments that work with your biology</h3>
          <ul class="wl-vs-list">
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Natural appetite reduction</strong>
                <span>Signals your brain that you're full — cravings fade on their own</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Hours of satiety</strong>
                <span>Slows stomach emptying so you feel satisfied long after eating</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Clinically proven results</strong>
                <span>15–20% average weight loss in 12 months in clinical trials</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Expert guidance throughout</strong>
                <span>Monthly face-to-face reviews with your pharmacist</span>
              </div>
            </li>
          </ul>
          <a href="#consultation" class="wl-vs-cta">
            Start Your Journey
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       TREATMENTS SECTION
       ============================================ -->
  <section class="products-section" id="treatments">
    <div class="container">
      <div class="products-header">
        <div class="products-text">
          <span class="products-label">GLP-1 Prescription Treatments</span>
          <h2 class="section-title">
            Licensed treatments, proven by<br>
            <span class="gradient-text">clinical trials</span>
          </h2>
        </div>
      </div>

      <div class="products-grid">
        <?php
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_treatments' ) ) :
          while ( have_rows( 'wl_treatments' ) ) :
            the_row();
            $wl_name  = get_sub_field( 'name' );
            $wl_desc  = get_sub_field( 'description' );
            $wl_image = get_sub_field( 'image' );
            $wl_price = get_sub_field( 'price' );
            $wl_badge = get_sub_field( 'badge' );
            $wl_url   = get_sub_field( 'url' );
        ?>
        <div class="product-card">
          <?php if ( $wl_badge ) : ?>
          <div class="product-badge"><?php echo esc_html( $wl_badge ); ?></div>
          <?php endif; ?>
          <div class="product-image">
            <img src="<?php echo esc_url( $wl_image ); ?>" alt="<?php echo esc_attr( $wl_name ); ?>">
          </div>
          <div class="product-content">
            <h3><?php echo esc_html( $wl_name ); ?></h3>
            <p><?php echo esc_html( $wl_desc ); ?></p>
            <div class="product-footer">
              <span class="product-price"><?php echo esc_html( $wl_price ); ?></span>
              <a href="<?php echo esc_url( $wl_url ? $wl_url : '#consultation' ); ?>" class="product-cta">
                Book Now
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow">
              </a>
            </div>
          </div>
        </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>

      <!-- Eligibility note -->
      <div class="wl-eligibility-note">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <p>Eligibility is assessed at your consultation. Treatments are typically available if your BMI is 30+ (or 27+ with a weight-related condition like Type 2 diabetes or hypertension). Our pharmacist will advise on the best option for your health profile.</p>
      </div>
    </div>
  </section>

  <!-- ============================================
       OUTCOMES / BENEFITS SECTION
       ============================================ -->
  <section class="services-section" id="results">
    <div class="container">
      <h2 class="section-title">
        The real-world results our<br>
        <span class="gradient-text">London patients achieve</span>
      </h2>
      <p class="section-subtitle">Weight loss that changes more than just the number on the scales</p>

      <div class="benefits-grid">
        <?php
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_benefits' ) ) :
          while ( have_rows( 'wl_benefits' ) ) :
            the_row();
            $ben_title = get_sub_field( 'title' );
            $ben_desc  = get_sub_field( 'description' );
            $ben_image = get_sub_field( 'image' );
        ?>
        <div class="benefit-card">
          <div class="benefit-image">
            <img src="<?php echo esc_url( $ben_image ); ?>" alt="<?php echo esc_attr( $ben_title ); ?>">
          </div>
          <div class="benefit-content">
            <h3><?php echo esc_html( $ben_title ); ?></h3>
            <p><?php echo esc_html( $ben_desc ); ?></p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       HOW IT WORKS — STEPS
       ============================================ -->
  <?php
  /* ── Journey Steps — ACF-driven with hardcoded fallback ── */
  $journey_title    = get_field( 'wl_journey_title' )    ?: 'Your weight loss journey at Chislehurst Pharmacy Group';
  $journey_subtitle = get_field( 'wl_journey_subtitle' ) ?: 'Four clear steps from your first conversation to your goal weight';
  $journey_steps    = get_field( 'wl_journey_steps' );

  /* Fallback data when the repeater is empty / not yet saved */
  if ( empty( $journey_steps ) ) {
      $journey_steps = array(
          array(
              'image'       => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop',
              'image_alt'   => 'Initial weight loss consultation',
              'label'       => 'Step 1',
              'heading'     => 'Free Consultation',
              'description' => 'Meet your pharmacist at our Chislehurst or Pond End clinic. We review your health history, calculate your BMI, discuss your goals and confirm which treatment is right for you. No pressure, no commitment on the day.',
          ),
          array(
              'image'       => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=400&fit=crop',
              'image_alt'   => 'Same day prescription Mounjaro Wegovy London',
              'label'       => 'Step 2',
              'heading'     => 'Same-Day Prescription',
              'description' => 'As Independent Prescribers, our pharmacists can prescribe Mounjaro, Wegovy or Saxenda the same day. You leave your appointment with your medication and a clear injection guide — no waiting for a GP letter.',
          ),
          array(
              'image'       => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&h=400&fit=crop',
              'image_alt'   => 'Monthly review weight loss check-in',
              'label'       => 'Step 3',
              'heading'     => 'Monthly Check-Ins',
              'description' => 'Every month, pop back in for a face-to-face review. We track your weight, blood pressure and how you\'re feeling. We adjust your dose as needed and tackle any side effects early. You\'re never left to figure it out alone.',
          ),
          array(
              'image'       => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop',
              'image_alt'   => 'Reach goal weight London',
              'label'       => 'Step 4',
              'heading'     => 'Reach Your Goal',
              'description' => 'Most patients reach their target weight within 9–12 months. We then transition you to a maintenance plan designed to keep the weight off permanently — because the goal isn\'t just losing weight, it\'s not finding it again.',
          ),
      );
  }
  ?>
  <section class="how-it-works" id="how-it-works">
    <div class="container">
      <h2 class="section-title gradient-text"><?php echo esc_html( $journey_title ); ?></h2>
      <p class="section-subtitle"><?php echo esc_html( $journey_subtitle ); ?></p>

      <div class="steps-grid">
        <?php foreach ( $journey_steps as $i => $step ) : ?>
        <div class="step-card">
          <div class="step-image">
            <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['image_alt'] ?? '' ); ?>">
          </div>
          <div class="step-content">
            <span class="step-label"><?php echo esc_html( $step['label'] ); ?></span>
            <h3><?php echo esc_html( $step['heading'] ); ?></h3>
            <p><?php echo esc_html( $step['description'] ); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       TESTIMONIALS
       ============================================ -->
  <section class="testimonials-premium" id="testimonials">
    <div class="testimonials-bg">
      <div class="testimonials-orb testimonials-orb-1"></div>
      <div class="testimonials-orb testimonials-orb-2"></div>
    </div>
    <div class="container testimonials-container">
      <div class="testimonials-header">
        <div class="testimonials-pill">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
          </svg>
          <span>Real Patient Stories</span>
        </div>
        <h2 class="testimonials-title">What our weight loss patients say</h2>
        <p class="testimonials-desc">Real results from real people across Chislehurst, South East London, and beyond.</p>
      </div>

      <div class="testimonials-grid">
        <?php
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_testimonials' ) ) :
          while ( have_rows( 'wl_testimonials' ) ) :
            the_row();
            $t_quote    = get_sub_field( 'quote' );
            $t_name     = get_sub_field( 'name' );
            $t_initials = get_sub_field( 'initials' );
            $t_detail   = get_sub_field( 'detail' );
            $t_stars    = (int) get_sub_field( 'stars' );
            if ( ! $t_stars ) $t_stars = 5;
        ?>
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <?php for ( $s = 0; $s < $t_stars; $s++ ) : ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <?php endfor; ?>
          </div>
          <p class="testimonial-quote"><?php echo esc_html( $t_quote ); ?></p>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><?php echo esc_html( $t_initials ); ?></div>
            <div>
              <div class="testimonial-name"><?php echo esc_html( $t_name ); ?></div>
              <?php if ( $t_detail ) : ?>
              <div class="testimonial-location"><?php echo esc_html( $t_detail ); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>

      <div class="testimonials-trust">
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">4.9/5</div>
          <div class="testimonials-trust-label">Average Rating</div>
        </div>
        <div class="testimonials-trust-divider"></div>
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">400+</div>
          <div class="testimonials-trust-label">5-Star Reviews</div>
        </div>
        <div class="testimonials-trust-divider"></div>
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">10,000+</div>
          <div class="testimonials-trust-label">Patients Served</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       LOCATIONS — SEO OPTIMIZED FOR BOTH CLINICS
       ============================================ -->
  <section class="locations-section" id="locations">
    <div class="container">
      <h2 class="section-title">
        Medical weight loss near you —<br>
        <span class="gradient-text">two South East London clinics</span>
      </h2>
      <p class="section-subtitle">Weight loss prescriptions at both locations. Walk-ins welcome. Same-day appointments available.</p>

      <div class="locations-grid">
        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg" alt="Chislehurst Pharmacy Group Pond Pharmacy - Weight Loss Chislehurst">
          </div>
          <div class="location-content">
            <h3>Pond Pharmacy</h3>
            <p class="wl-location-seo">Medical weight loss in Chislehurst, BR7. Prescription Mounjaro & Wegovy with same-day appointments. Serving Chislehurst, Bromley, Sidcup, and Bexley.</p>
            <div class="location-details">
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 High St, Chislehurst BR7 5AF</p>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02084673158">020 8467 3158</a>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
              </div>
            </div>
            <div class="location-actions">
              <a href="tel:02084673158" class="btn-primary">Book Consultation</a>
              <a href="https://maps.google.com/?q=59+High+St+Chislehurst+BR7+5AF" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>

        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg" alt="Chislehurst Pharmacy Group Chislehurst Pharmacy - Weight Loss London">
          </div>
          <div class="location-content">
            <h3>Chislehurst Pharmacy</h3>
            <p class="wl-location-seo">Medical weight loss in Chislehurst. Prescription Mounjaro & Wegovy with face-to-face pharmacist support. Serving Orpington, Petts Wood, St Mary Cray, and Swanley.</p>
            <div class="location-details">
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02082950017">020 8295 0017</a>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
              </div>
            </div>
            <div class="location-actions">
              <a href="tel:02082950017" class="btn-primary">Book Consultation</a>
              <a href="https://maps.google.com/?q=59+Chislehurst+Rd+Chislehurst+BR7+5NP" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  /* ── Why Choose Us — ACF-driven with hardcoded fallback ── */
  $why_title           = get_field( 'wl_why_title' )           ?: 'Why choose Chislehurst Pharmacy Group for';
  $why_title_highlight = get_field( 'wl_why_title_highlight' ) ?: 'medical weight loss?';
  $why_subtitle        = get_field( 'wl_why_subtitle' )        ?: "We're not an online chatbot or a faceless app. We're your local pharmacist — the difference is enormous.";
  $why_pharm_image     = get_field( 'wl_why_pharmacist_image' ) ?: 'https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517579457-0.png';
  $why_pharm_name      = get_field( 'wl_why_pharmacist_name' )  ?: 'Sumeet Banker';
  $why_pharm_role      = get_field( 'wl_why_pharmacist_role' )  ?: 'Superintendent Pharmacist & Independent Prescriber';
  $why_pharm_badge     = get_field( 'wl_why_pharmacist_badge' ) ?: 'GPhC Registered';
  $why_pharm_bio       = get_field( 'wl_why_pharmacist_bio' )   ?: '"Weight is complex — it\'s hormonal, emotional, and behavioural. That\'s why I believe everyone deserves face-to-face care from someone who actually listens. Not an algorithm."';
  $why_stats           = get_field( 'wl_why_stats' );
  $why_pillars         = get_field( 'wl_why_pillars' );

  if ( empty( $why_stats ) ) {
      $why_stats = array(
          array( 'number' => 'No GP',  'label' => 'Referral required — start this week' ),
          array( 'number' => '15+',    'label' => 'Years of pharmacy expertise in London' ),
          array( 'number' => '2',      'label' => 'Convenient South East London locations' ),
          array( 'number' => '10K+',   'label' => "Patients who've trusted our care" ),
      );
  }

  if ( empty( $why_pillars ) ) {
      $why_pillars = array(
          array( 'title' => 'Independent Prescribers on-site',  'description' => 'No referral, no waiting list — prescription same day' ),
          array( 'title' => 'Monthly face-to-face reviews',     'description' => 'We track more than weight — blood pressure, glucose, wellbeing' ),
          array( 'title' => 'Genuine clinical privacy',         'description' => "Discreet consultations — we've heard everything before" ),
      );
  }

  /* SVG icons for stat cards — cycled by index */
  $stat_icons = array(
      '<svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>',
      '<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>',
      '<svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>',
      '<svg viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  );

  $pillar_icons = array(
      '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>',
      '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
      '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
  );
  ?>
  <!-- ============================================
       WHY CHISLEHURST PHARMACY GROUP
       ============================================ -->
  <section class="team-section" id="why-us">
    <div class="container">
      <div class="team-header">
        <h2 class="section-title">
          <?php echo esc_html( $why_title ); ?><br>
          <span class="gradient-text"><?php echo esc_html( $why_title_highlight ); ?></span>
        </h2>
        <p class="section-subtitle"><?php echo esc_html( $why_subtitle ); ?></p>
      </div>

      <div class="team-content-grid">
        <div class="pharmacist-hero">
          <div class="pharmacist-image-wrapper">
            <img src="<?php echo esc_url( $why_pharm_image ); ?>" alt="<?php echo esc_attr( $why_pharm_name ); ?> — <?php echo esc_attr( $why_pharm_role ); ?>" class="pharmacist-image">
            <div class="pharmacist-profile-card">
              <div class="profile-header">
                <div class="profile-info">
                  <h3 class="profile-name"><?php echo esc_html( $why_pharm_name ); ?></h3>
                  <p class="profile-title"><?php echo esc_html( $why_pharm_role ); ?></p>
                  <div class="profile-badge">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M8 1l2.5 5 5.5.5-4 4 1 5.5L8 13l-5 3 1-5.5-4-4 5.5-.5L8 1z" fill="currentColor"/>
                    </svg>
                    <span><?php echo esc_html( $why_pharm_badge ); ?></span>
                  </div>
                </div>
              </div>
              <p class="profile-bio"><?php echo esc_html( $why_pharm_bio ); ?></p>
              <div class="profile-actions">
                <a href="tel:02084673158" class="btn-profile-primary">Book Consultation</a>
                <a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>" class="btn-profile-secondary">Meet the Team</a>
              </div>
            </div>
          </div>
        </div>

        <div class="team-stats-premium">
          <div class="stats-grid-premium">
            <?php foreach ( $why_stats as $i => $stat ) : ?>
            <div class="stat-card-hero">
              <div class="stat-icon-hero">
                <?php echo $stat_icons[ $i % count( $stat_icons ) ]; ?>
              </div>
              <div class="stat-content-hero">
                <div class="stat-number-hero"><?php echo esc_html( $stat['number'] ); ?></div>
                <h4 class="stat-label-hero"><?php echo esc_html( $stat['label'] ); ?></h4>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Feature pillars -->
          <div class="wl-pillars">
            <?php foreach ( $why_pillars as $i => $pillar ) : ?>
            <div class="wl-pillar">
              <div class="wl-pillar-icon">
                <?php echo $pillar_icons[ $i % count( $pillar_icons ) ]; ?>
              </div>
              <div class="wl-pillar-text">
                <strong><?php echo esc_html( $pillar['title'] ); ?></strong>
                <span><?php echo esc_html( $pillar['description'] ); ?></span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="certifications-modern">
        <div class="cert-label">Certified & Regulated By</div>
        <div class="cert-logos">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       FAQ
       ============================================ -->
  <section class="services-section" id="faq">
    <div class="container">
      <h2 class="section-title">
        Your questions about<br>
        <span class="gradient-text">medical weight loss answered</span>
      </h2>
      <p class="section-subtitle">Everything you need to know before booking your consultation</p>

      <div class="wl-faq-grid">
        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How much weight can I expect to lose?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Clinical trials show that Mounjaro users lose an average of 20–22% of their body weight over 72 weeks. Wegovy users average 15–17% over 68 weeks. That means if you weigh 100kg, you could expect to lose 15–22kg. Results depend on your adherence to treatment and lifestyle changes — our monthly check-ins are designed to maximise yours.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Do I need a GP referral to start?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>No. Our pharmacists are Independent Prescribers, which means they are legally authorised to assess your suitability and issue a prescription directly. You don't need to see your GP first, and there's no waiting list. Many of our patients book on a Monday and start treatment by Wednesday.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Am I eligible for Mounjaro or Wegovy?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>NICE guidelines recommend GLP-1 treatments if your BMI is 30 or above (or 27+ if you have a weight-related condition such as Type 2 diabetes, pre-diabetes, hypertension, or high cholesterol). During your free consultation, your pharmacist will review your full health profile to confirm eligibility and discuss the most suitable option.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>What is the difference between Mounjaro and Wegovy?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Both are GLP-1 receptor agonists, but Mounjaro (tirzepatide) also activates the GIP receptor — making it a dual-action treatment. This dual mechanism produces greater weight loss in clinical trials (20%+ vs 15–17% with Wegovy). Wegovy (semaglutide) has a slightly longer safety track record and may be preferable for some patients. Your pharmacist will recommend the best option during consultation.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>What are the side effects?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>The most common side effects are mild and digestive: nausea, reduced appetite, and occasionally loose stools in the first few weeks. These typically improve significantly after the initial dose titration period. We always start on the lowest dose and increase slowly. The monthly face-to-face reviews exist specifically to catch any side effects early and adjust your plan accordingly.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How much does treatment cost in London?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Mounjaro starts from £125/month including medication and monthly consultations. Wegovy starts from £199/month and Saxenda from £150/month. Exact costs vary by dose level and are confirmed at your consultation. Unlike online services, our fee covers genuine face-to-face pharmacist time every month — not just medication dispatch.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How long does treatment last?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Most patients see meaningful results within 3 months and reach their target weight within 9–12 months. Treatment duration varies: some patients use it as a 12-month programme then transition to lifestyle maintenance; others continue longer to sustain results. This is discussed and personalised at each review.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Can I get Mounjaro or Wegovy near Chislehurst or Bromley?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Yes. Our Pond Pharmacy at 59 High St, Chislehurst BR7 5AF and our Chislehurst Road location serve patients from across South East London including Chislehurst, Bromley, Sidcup, Bexley, Orpington, Petts Wood, St Mary Cray and Swanley. Both locations offer walk-in consultations and same-day appointments.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ============================================
       FINAL CTA + NEWSLETTER (integrated block)
       ============================================ -->
  <section class="wl-footer-cta-block" id="consultation">
    <div class="wl-footer-cta-bg"><div class="wl-footer-cta-orb wl-footer-cta-orb-1"></div><div class="wl-footer-cta-orb wl-footer-cta-orb-2"></div></div>
    <div class="container wl-footer-cta-inner">
      <!-- CTA top -->
      <div class="wl-footer-cta-top">
        <div class="wl-cta-badges">
          <span class="wl-cta-badge">GPhC Registered</span>
          <span class="wl-cta-badge">Independent Prescribers</span>
          <span class="wl-cta-badge">Same-Day Prescription</span>
          <span class="wl-cta-badge">No GP Referral</span>
        </div>
        <h2 class="wl-footer-cta-title">Start losing weight this week —<br>not in 3 months</h2>
        <p class="wl-footer-cta-sub">Free consultation. No GP referral. Same-day prescription. Two South East London locations with face-to-face pharmacist support.</p>
        <div class="wl-footer-cta-buttons">
          <a href="tel:02084673158" class="wl-btn-cta-white">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Free Consultation
          </a>
          <a href="tel:02084673158" class="wl-btn-cta-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="wl-cta-checks">
          <span>✓ Mounjaro &amp; Wegovy in stock</span>
          <span>✓ Same-day appointments</span>
          <span>✓ Face-to-face pharmacist care</span>
          <span>✓ Two Chislehurst locations</span>
        </div>
        <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,.55);">Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London</p>
      </div>
      <!-- Divider -->
      <div class="wl-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="wl-footer-newsletter-row">
        <div class="wl-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert tips on weight management, nutrition, and pharmacy health services — straight to your inbox</p>
        </div>
        <form class="newsletter-form wl-footer-newsletter-form">
          <div class="newsletter-input-wrapper">
            <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 6l-9 6-9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->

<?php get_footer(); ?>
