<?php
/**
 * Template Name: Prescription Services
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ============================================
       HERO SECTION
       ============================================ -->
  <section class="rx-hero">
    <div class="rx-hero-bg">
      <div class="rx-hero-orb rx-hero-orb-1"></div>
      <div class="rx-hero-orb rx-hero-orb-2"></div>
    </div>
    <div class="container rx-hero-container">
      <!-- Left: Content -->
      <div class="rx-hero-content">
        <div class="rx-hero-badge">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>NHS &amp; Private Prescription Services · South East London</span>
        </div>
        <h1 class="rx-hero-title">
          <?php echo wp_kses_post( rl_field( 'rx_hero_title', 'NHS &amp; Private Prescription Services in <span class="rx-gradient-text">South East London</span>' ) ); ?>
        </h1>
        <p class="rx-hero-subtitle">
          <?php echo esc_html( rl_field( 'rx_hero_subtitle', 'Online ordering, automatic refills, and same-day collection. Your prescriptions managed by our GPhC-registered pharmacists.' ) ); ?>
        </p>
        <div class="rx-hero-actions">
          <a href="#register" class="rx-btn-primary">
            Register for Free Online Ordering
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="#locations" class="rx-btn-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Find Your Branch
          </a>
        </div>

        <!-- Trust Badge Strip -->
        <div class="rx-hero-trust">
          <div class="rx-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
            <span>NHS Prescriptions</span>
          </div>
          <div class="rx-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>Track Your Order</span>
          </div>
          <div class="rx-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
            <span>Automatic Reminders</span>
          </div>
          <div class="rx-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>Same-Day Collection</span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="rx-hero-visual">
        <div class="rx-hero-img-wrap">
          <?php $hero_img = rl_field( 'rx_hero_image' ); ?>
          <img src="<?php echo esc_url( $hero_img ?: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=700&h=600&fit=crop' ); ?>" alt="NHS prescription services South East London — medication dispensed by GPhC pharmacist">
          <div class="rx-hero-img-overlay"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       STATS BAR
       ============================================ -->
  <section class="rx-stats-bar">
    <div class="container">
      <div class="rx-stats-grid">
        <?php
        $rx_stats = rl_field( 'rx_stats' );
        if ( $rx_stats ) :
          $stat_count = count( $rx_stats );
          foreach ( $rx_stats as $i => $stat ) :
        ?>
        <div class="rx-stat-item">
          <div class="rx-stat-number"><?php echo esc_html( $stat['number'] ); ?></div>
          <div class="rx-stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
        </div>
        <?php if ( $i < $stat_count - 1 ) : ?><div class="rx-stat-divider"></div><?php endif; ?>
        <?php endforeach; else : ?>
        <div class="rx-stat-item">
          <div class="rx-stat-number">Free</div>
          <div class="rx-stat-label">NHS Prescription Collection</div>
        </div>
        <div class="rx-stat-divider"></div>
        <div class="rx-stat-item">
          <div class="rx-stat-number">10K+</div>
          <div class="rx-stat-label">Patients Served</div>
        </div>
        <div class="rx-stat-divider"></div>
        <div class="rx-stat-item">
          <div class="rx-stat-number">15+</div>
          <div class="rx-stat-label">Years Serving London</div>
        </div>
        <div class="rx-stat-divider"></div>
        <div class="rx-stat-item">
          <div class="rx-stat-number">2</div>
          <div class="rx-stat-label">South East London Locations</div>
        </div>
        <div class="rx-stat-divider"></div>
        <div class="rx-stat-item">
          <div class="rx-stat-number">4.9/5</div>
          <div class="rx-stat-label">Patient Satisfaction</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 1: HOW IT WORKS
       ============================================ -->
  <section class="rx-section rx-section-light" id="how-it-works">
    <div class="container">
      <div class="rx-section-header">
        <div class="rx-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          Simple Service
        </div>
        <h2 class="section-title"><?php echo esc_html( rl_field( 'rx_hiw_title', 'Simple Prescription Management' ) ); ?></h2>
        <p class="section-subtitle"><?php echo esc_html( rl_field( 'rx_hiw_subtitle', 'Managing your NHS or private prescriptions has never been easier.' ) ); ?></p>
      </div>

      <?php $hiw_intro = rl_field( 'rx_hiw_intro' ); ?>
      <?php if ( $hiw_intro ) : ?>
        <div class="rx-intro-text"><?php echo wp_kses_post( $hiw_intro ); ?></div>
      <?php else : ?>
        <p class="rx-intro-text">
          Managing your NHS or private prescriptions has never been easier. Our South East London pharmacies offer comprehensive prescription services including electronic prescriptions, automatic refills, and same-day collection. Serving patients across <strong>Chislehurst, Bromley, Orpington, Sidcup, Bexley</strong>, and surrounding areas.
        </p>
      <?php endif; ?>

      <div class="rx-steps-grid">
        <?php
        $rx_steps = rl_field( 'rx_steps' );
        if ( $rx_steps ) :
          foreach ( $rx_steps as $i => $step ) :
            $step_num = str_pad( $i + 1, 2, '0', STR_PAD_LEFT );
        ?>
        <div class="rx-step-card">
          <?php if ( ! empty( $step['image'] ) ) : ?>
          <div class="rx-step-visual">
            <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>">
          </div>
          <?php endif; ?>
          <div class="rx-step-content">
            <div class="rx-step-num">Step <?php echo esc_html( $step_num ); ?></div>
            <h3><?php echo esc_html( $step['title'] ); ?></h3>
            <p><?php echo esc_html( $step['description'] ); ?></p>
          </div>
        </div>
        <?php endforeach; else : ?>
        <div class="rx-step-card">
          <div class="rx-step-visual">
            <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?w=600&h=400&fit=crop" alt="Order prescription online South East London">
          </div>
          <div class="rx-step-content">
            <div class="rx-step-num">Step 1</div>
            <h3>Order Your Prescription</h3>
            <p>Order online through our free registration portal, call us, visit in person, or ask your GP to send your prescription electronically to either of our pharmacies.</p>
          </div>
        </div>
        <div class="rx-step-card">
          <div class="rx-step-visual">
            <img src="https://images.unsplash.com/photo-1576671081837-49000212a370?w=600&h=400&fit=crop" alt="GPhC pharmacist dispensing prescription safely">
          </div>
          <div class="rx-step-content">
            <div class="rx-step-num">Step 2</div>
            <h3>We Dispense &amp; Prepare</h3>
            <p>Our GPhC-registered pharmacists carefully dispense your medication and conduct all necessary safety checks. We'll text you when it's ready.</p>
          </div>
        </div>
        <div class="rx-step-card">
          <div class="rx-step-visual">
            <img src="https://images.unsplash.com/photo-1530026405186-ed1f139313f8?w=600&h=400&fit=crop" alt="Collect your prescription from either pharmacy location">
          </div>
          <div class="rx-step-content">
            <div class="rx-step-num">Step 3</div>
            <h3>Collect at Your Convenience</h3>
            <p>Pick up from either Chislehurst Pharmacy or Pond Pharmacy at a time that suits you. We'll text you when it's ready.</p>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 2: PRESCRIPTION SERVICES
       ============================================ -->
  <section class="rx-section rx-section-dark" id="services">
    <div class="rx-dark-bg">
      <div class="rx-dark-orb rx-dark-orb-1"></div>
      <div class="rx-dark-orb rx-dark-orb-2"></div>
    </div>
    <div class="container rx-dark-container">
      <div class="rx-section-header">
        <div class="rx-pill rx-pill-light">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3"/><rect x="9" y="11" width="14" height="10" rx="1"/><path d="M9 11v10"/><path d="M5 17H3"/></svg>
          Your Local Pharmacy
        </div>
        <h2 class="section-title" style="color: #fff;"><?php echo esc_html( rl_field( 'rx_delivery_title', 'How We Manage Your Prescriptions' ) ); ?></h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.75);"><?php echo esc_html( rl_field( 'rx_delivery_subtitle', 'Two convenient locations. Same-day collection. Managed by pharmacists who know you.' ) ); ?></p>
      </div>

      <?php $del_intro = rl_field( 'rx_delivery_intro' ); ?>
      <?php if ( $del_intro ) : ?>
        <div class="rx-dark-intro"><?php echo wp_kses_post( $del_intro ); ?></div>
      <?php else : ?>
        <p class="rx-dark-intro">
          We manage your NHS and private prescriptions at two convenient South East London locations. Whether you need repeat prescriptions, electronic prescriptions, or same-day collection, we make it simple. Serving patients across <strong>Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham</strong>, and surrounding areas.
        </p>
      <?php endif; ?>

      <div class="rx-features-grid">
        <?php
        $del_features = rl_field( 'rx_delivery_features' );
        if ( $del_features ) :
          foreach ( $del_features as $feat ) :
        ?>
        <div class="rx-feature-card">
          <div class="rx-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3><?php echo esc_html( $feat['title'] ); ?></h3>
          <p><?php echo esc_html( $feat['description'] ); ?></p>
        </div>
        <?php endforeach; else : ?>
        <div class="rx-feature-card">
          <div class="rx-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Same-Day Collection</h3>
          <p>Order before 12pm and collect the same day from either of our two pharmacies.</p>
        </div>
        <div class="rx-feature-card">
          <div class="rx-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Text Notifications</h3>
          <p>We'll text you when your prescription is ready to collect — no need to call or check.</p>
        </div>
        <div class="rx-feature-card">
          <div class="rx-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          </div>
          <h3>Automatic Reminders</h3>
          <p>Receive automatic text reminders 10 days before you run out so you never miss a dose of essential medication.</p>
        </div>
        <div class="rx-feature-card">
          <div class="rx-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <h3>Electronic Prescriptions</h3>
          <p>Fully integrated with NHS EPS — your GP sends prescriptions directly to us, no paper required.</p>
        </div>
        <?php endif; ?>
      </div>

      <!-- Mid-page CTA -->
      <div class="rx-mid-cta">
        <a href="#register" class="rx-btn-white">
          Register for Online Ordering
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#locations" class="rx-btn-ghost">
          Find Your Branch
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 3: ONLINE ORDERING
       ============================================ -->
  <section class="rx-section rx-section-light" id="register">
    <div class="container">
      <div class="rx-online-grid">
        <div class="rx-online-content">
          <div class="rx-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
            Online Ordering
          </div>
          <h2 class="section-title" style="text-align:left;"><?php echo esc_html( rl_field( 'rx_online_title', 'Register for Free Online Prescription Ordering' ) ); ?></h2>

          <?php $online_body = rl_field( 'rx_online_body' ); ?>
          <?php if ( $online_body ) : ?>
            <div class="rx-content-text"><?php echo wp_kses_post( $online_body ); ?></div>
          <?php else : ?>
            <p class="rx-content-text">Take control of your repeat prescriptions with our free online ordering system. Order your regular medications 24/7 from anywhere — at home, at work, or on the go.</p>
            <p class="rx-content-text">Our secure portal links directly with your prescription record, allowing you to manage all your regular medications in one place with just a few clicks.</p>
          <?php endif; ?>

          <div class="rx-benefits-list">
            <?php
            $online_benefits = rl_field( 'rx_online_benefits' );
            if ( $online_benefits ) :
              foreach ( $online_benefits as $ben ) :
            ?>
            <div class="rx-benefit-item">
              <div class="rx-benefit-tick">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rx-benefit-text">
                <strong><?php echo esc_html( $ben['title'] ); ?></strong>
                <span><?php echo esc_html( $ben['description'] ); ?></span>
              </div>
            </div>
            <?php endforeach; else : ?>
            <div class="rx-benefit-item"><div class="rx-benefit-tick"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div><div class="rx-benefit-text"><strong>Always Open</strong><span>Order your medication whenever you need it, day or night, from any device.</span></div></div>
            <div class="rx-benefit-item"><div class="rx-benefit-tick"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div><div class="rx-benefit-text"><strong>Automatic Reminders</strong><span>We remind you when it's time to reorder so you never run out of essential medication.</span></div></div>
            <div class="rx-benefit-item"><div class="rx-benefit-tick"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div><div class="rx-benefit-text"><strong>Track Everything</strong><span>Monitor your order status from submission to collection with real-time updates.</span></div></div>
            <div class="rx-benefit-item"><div class="rx-benefit-tick"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div><div class="rx-benefit-text"><strong>Manage Multiple Prescriptions</strong><span>Handle all your regular medications in one convenient portal.</span></div></div>
            <div class="rx-benefit-item"><div class="rx-benefit-tick"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div><div class="rx-benefit-text"><strong>Secure &amp; Confidential</strong><span>Your prescription information is protected with NHS-grade security.</span></div></div>
            <?php endif; ?>
          </div>

          <a href="#locations" class="rx-btn-primary rx-register-btn">
            Register Now — Find Your Branch
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>

        <div class="rx-online-visual">
          <?php $online_img = rl_field( 'rx_online_image' ); ?>
          <img src="<?php echo esc_url( $online_img ?: 'https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&h=700&fit=crop' ); ?>" alt="Online prescription ordering portal on laptop and mobile">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 4: REPEAT DISPENSING
       ============================================ -->
  <section class="rx-section rx-section-dark" id="repeat-dispensing">
    <div class="rx-dark-bg">
      <div class="rx-dark-orb rx-dark-orb-1"></div>
      <div class="rx-dark-orb rx-dark-orb-2"></div>
    </div>
    <div class="container rx-dark-container">
      <div class="rx-section-header">
        <div class="rx-pill rx-pill-light">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
          Repeat Dispensing
        </div>
        <h2 class="section-title" style="color:#fff;"><?php echo esc_html( rl_field( 'rx_repeat_title', 'What is NHS Repeat Dispensing?' ) ); ?></h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.75);"><?php echo esc_html( rl_field( 'rx_repeat_subtitle', 'A smarter way to manage your long-term medications — we handle it for you.' ) ); ?></p>
      </div>

      <div class="rx-repeat-grid rx-repeat-grid-dark">
        <div class="rx-repeat-text rx-repeat-text-dark">
          <?php $repeat_body = rl_field( 'rx_repeat_body' ); ?>
          <?php if ( $repeat_body ) : ?>
            <?php echo wp_kses_post( $repeat_body ); ?>
          <?php else : ?>
          <p class="rx-dark-body">
            Repeat dispensing allows your GP to issue a batch of prescriptions for medications you take regularly. This means you don't need to request a new prescription from your doctor each time you need a refill — <strong>we manage the schedule for you</strong>.
          </p>
          <p class="rx-dark-body">
            Your GP issues a batch prescription valid for up to 12 months. We dispense your medication at regular intervals according to your dosage schedule. You collect from the pharmacy automatically without contacting your doctor each time.
          </p>
          <?php endif; ?>
          <div class="rx-eps-note rx-eps-note-dark">
            <div class="rx-eps-icon rx-eps-icon-dark">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
            </div>
            <div>
              <strong>Electronic Repeat Dispensing (EPS)</strong>
              <p>We fully support electronic repeat dispensing through the NHS Electronic Prescription Service. Your GP sends prescriptions directly to our pharmacy electronically — no paper, no delays.</p>
            </div>
          </div>
        </div>

        <div class="rx-repeat-benefits">
          <?php
          $repeat_benefits = rl_field( 'rx_repeat_benefits' );
          if ( $repeat_benefits ) :
            foreach ( $repeat_benefits as $rb ) :
          ?>
          <div class="rx-repeat-card rx-repeat-card-dark">
            <div class="rx-repeat-icon rx-repeat-icon-dark">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <h3><?php echo esc_html( $rb['title'] ); ?></h3>
            <p><?php echo esc_html( $rb['description'] ); ?></p>
          </div>
          <?php endforeach; else : ?>
          <div class="rx-repeat-card rx-repeat-card-dark">
            <div class="rx-repeat-icon rx-repeat-icon-dark"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
            <h3>Convenience</h3>
            <p>No repeated GP appointments for the same medication. Your refills happen automatically.</p>
          </div>
          <div class="rx-repeat-card rx-repeat-card-dark">
            <div class="rx-repeat-icon rx-repeat-icon-dark"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3>Time-Saving</h3>
            <p>We handle prescription requests on your behalf automatically — freeing up your time.</p>
          </div>
          <div class="rx-repeat-card rx-repeat-card-dark">
            <div class="rx-repeat-icon rx-repeat-icon-dark"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
            <h3>Better Medication Management</h3>
            <p>Regular intervals ensure you never run out of essential medication.</p>
          </div>
          <div class="rx-repeat-card rx-repeat-card-dark">
            <div class="rx-repeat-icon rx-repeat-icon-dark"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3>Pharmacist Monitoring</h3>
            <p>Our pharmacists monitor your medication for any concerns or interactions at every dispensing.</p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 5: WHAT WE ACCEPT
       ============================================ -->
  <section class="rx-section rx-section-dark" id="prescriptions-accepted">
    <div class="rx-dark-bg">
      <div class="rx-dark-orb rx-dark-orb-1"></div>
      <div class="rx-dark-orb rx-dark-orb-2"></div>
    </div>
    <div class="container rx-dark-container">
      <div class="rx-section-header">
        <div class="rx-pill rx-pill-light">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
          All Types Welcome
        </div>
        <h2 class="section-title" style="color:#fff;"><?php echo wp_kses_post( rl_field( 'rx_accept_title', 'NHS &amp; Private Prescriptions Welcome' ) ); ?></h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.75);"><?php echo esc_html( rl_field( 'rx_accept_subtitle', 'Whatever your prescription type, we have you covered at both locations.' ) ); ?></p>
      </div>

      <div class="rx-accept-grid">
        <div class="rx-accept-card">
          <div class="rx-accept-header">
            <div class="rx-accept-icon">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
            </div>
            <h3>NHS Prescriptions</h3>
          </div>
          <ul class="rx-accept-list">
            <?php
            $nhs_items_raw = rl_field( 'rx_accept_nhs' );
            if ( $nhs_items_raw ) :
              $nhs_items = array_filter( array_map( 'trim', explode( "\n", $nhs_items_raw ) ) );
              foreach ( $nhs_items as $item ) :
            ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> <?php echo esc_html( $item ); ?></li>
            <?php endforeach; else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Electronic prescriptions (EPS)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Paper prescriptions from your GP</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Hospital discharge prescriptions</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Repeat prescriptions</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Repeat dispensing prescriptions</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Same-day prescription collection</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Prescription exemptions honoured</li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="rx-accept-card rx-accept-card-private">
          <div class="rx-accept-header">
            <div class="rx-accept-icon">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3>Private Prescriptions</h3>
          </div>
          <ul class="rx-accept-list">
            <?php
            $private_items_raw = rl_field( 'rx_accept_private' );
            if ( $private_items_raw ) :
              $private_items = array_filter( array_map( 'trim', explode( "\n", $private_items_raw ) ) );
              foreach ( $private_items as $item ) :
            ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> <?php echo esc_html( $item ); ?></li>
            <?php endforeach; else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Private GP prescriptions</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Specialist prescriptions</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Weight loss medications</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Hair loss treatments</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Travel medication</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Emergency medication supplies</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Competitive private prescription pricing</li>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <div class="rx-accept-statement">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <p><?php echo esc_html( rl_field( 'rx_accept_note', 'Both Chislehurst Pharmacy and Pond Pharmacy accept NHS and private prescriptions. We can collect prescriptions from your GP surgery or receive them electronically.' ) ); ?></p>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 6: COLLECTION SERVICE
       ============================================ -->
  <section class="rx-section rx-section-light" id="collection">
    <div class="container">
      <div class="rx-collect-grid">
        <div class="rx-collect-visual">
          <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=600&h=500&fit=crop" alt="Pharmacist collecting prescription from GP surgery South East London">
        </div>
        <div class="rx-collect-content">
          <div class="rx-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            GP Collection
          </div>
          <h2 class="section-title" style="text-align:left;"><?php echo esc_html( rl_field( 'rx_collect_title', 'We Collect From Your GP' ) ); ?></h2>

          <?php $collect_body = rl_field( 'rx_collect_body' ); ?>
          <?php if ( $collect_body ) : ?>
            <p class="rx-content-text"><?php echo esc_html( $collect_body ); ?></p>
          <?php else : ?>
            <p class="rx-content-text">Too busy to collect your prescription from your doctor? No problem. We can arrange to collect your prescription directly from your GP surgery and have it ready for you. Just nominate our pharmacy with your GP and we'll handle the rest.</p>
          <?php endif; ?>

          <div class="rx-collect-steps">
            <?php
            $collect_steps = rl_field( 'rx_collect_steps' );
            if ( $collect_steps ) :
              foreach ( $collect_steps as $i => $cs ) :
            ?>
            <div class="rx-collect-step">
              <div class="rx-collect-step-num"><?php echo esc_html( $i + 1 ); ?></div>
              <p><?php echo wp_kses_post( $cs['text'] ); ?></p>
            </div>
            <?php endforeach; else : ?>
            <div class="rx-collect-step">
              <div class="rx-collect-step-num">1</div>
              <p>Tell your GP to send prescriptions to <strong>Chislehurst Pharmacy</strong> or <strong>Pond Pharmacy</strong></p>
            </div>
            <div class="rx-collect-step">
              <div class="rx-collect-step-num">2</div>
              <p>We receive and dispense your medication with full safety checks</p>
            </div>
            <div class="rx-collect-step">
              <div class="rx-collect-step-num">3</div>
              <p>You collect in-store at either pharmacy — we'll text you when it's ready</p>
            </div>
            <?php endif; ?>
          </div>

          <div class="rx-collect-actions">
            <a href="#locations" class="rx-btn-primary">Find Your Branch
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 7: LOCATIONS
       ============================================ -->
  <section class="locations-section" id="locations">
    <div class="container">
      <h2 class="section-title">Two Convenient South East London Locations</h2>
      <p class="section-subtitle">Both pharmacies offer the full range of NHS and private prescription services</p>

      <div class="locations-grid">
        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg" alt="Chislehurst Pharmacy - prescription services South East London">
          </div>
          <div class="location-content">
            <h3>Chislehurst Pharmacy</h3>
            <div class="location-details">
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Address</span>
                  <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
                </div>
              </div>
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Phone</span>
                  <a href="tel:02082950017">020 8295 0017</a>
                </div>
              </div>
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Hours</span>
                  <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
                </div>
              </div>
            </div>
            <p class="rx-location-serving">NHS prescriptions, Private prescriptions, Electronic prescriptions (EPS), Same-day collection</p>
            <p class="rx-location-area"><em>Serving Chislehurst, Bromley, Sidcup, and South East London</em></p>
            <div class="rx-location-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.3!2d0.0595!3d51.4217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ab8e8e8e8e8e%3A0x0!2s59+Chislehurst+Rd%2C+Chislehurst+BR7+5NP!5e0!3m2!1sen!2suk!4v1234" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" title="Chislehurst Pharmacy map"></iframe>
            </div>
            <div class="location-actions">
              <a href="tel:02082950017" class="btn-primary">Call to Register</a>
              <a href="https://maps.google.com/?q=59+Chislehurst+Rd+Chislehurst+BR7+5NP" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>

        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg" alt="Pond Pharmacy - Chislehurst prescription services">
          </div>
          <div class="location-content">
            <h3>Pond Pharmacy</h3>
            <div class="location-details">
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Address</span>
                  <p>59 High St, Chislehurst BR7 5AF</p>
                </div>
              </div>
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Phone</span>
                  <a href="tel:02084673158">020 8467 3158</a>
                </div>
              </div>
              <div class="detail-item">
                <span class="detail-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </span>
                <div class="detail-text">
                  <span class="detail-label">Hours</span>
                  <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
                </div>
              </div>
            </div>
            <p class="rx-location-serving">NHS prescriptions, Private prescriptions, Electronic prescriptions (EPS), Same-day collection</p>
            <p class="rx-location-area"><em>Convenient location for Orpington, Bexley, and surrounding areas</em></p>
            <div class="rx-location-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.3!2d0.0595!3d51.4217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ab8e8e8e8e8e%3A0x0!2s59+High+St%2C+Chislehurst+BR7+5AF!5e0!3m2!1sen!2suk!4v1234" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" title="Pond Pharmacy map"></iframe>
            </div>
            <div class="location-actions">
              <a href="tel:02084673158" class="btn-primary">Call to Register</a>
              <a href="https://maps.google.com/?q=59+High+St+Chislehurst+BR7+5AF" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>
      </div>

      <div class="rx-service-area-banner">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <p>Based in Chislehurst, we serve patients across South East London including <strong>Bromley, Orpington, Sidcup, Bexley, Eltham, Lewisham</strong>, and beyond. Visit either pharmacy for same-day collection, or nominate us with your GP for electronic prescriptions.</p>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 8: WHY CHOOSE US
       ============================================ -->
  <section class="rx-section rx-section-dark" id="why-us">
    <div class="rx-dark-bg">
      <div class="rx-dark-orb rx-dark-orb-1"></div>
      <div class="rx-dark-orb rx-dark-orb-2"></div>
    </div>
    <div class="container rx-dark-container">
      <div class="rx-section-header">
        <div class="rx-pill rx-pill-light">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          15+ Years of Excellence
        </div>
        <h2 class="section-title" style="color:#fff;">Why Patients Choose Us</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.75);">Your local pharmacist — not a faceless online service.</p>
      </div>

      <div class="rx-why-grid">
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m-4 3h9v7a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-7z"/></svg>
          </div>
          <h3>Same-Day Collection</h3>
          <p>Order before 12pm and your prescription is ready to collect the same day at either pharmacy.</p>
        </div>
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>GPhC-Registered Pharmacists</h3>
          <p>GPhC-registered pharmacists who know your name and your medication history.</p>
        </div>
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>15+ Years Experience</h3>
          <p>Trusted prescription services serving South East London families since 2010.</p>
        </div>
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
          </div>
          <h3>Electronic Prescriptions</h3>
          <p>Fully integrated with NHS EPS for seamless, paperless prescription management.</p>
        </div>
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Medication Reviews</h3>
          <p>Free medication reviews and expert advice from our pharmacist team at any time.</p>
        </div>
        <div class="rx-why-card">
          <div class="rx-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3>Same-Day Collection</h3>
          <p>Prescriptions ready for collection same day when ordered before 12pm at both pharmacies.</p>
        </div>
      </div>

      <!-- Certifications Row -->
      <div class="certifications-modern" style="margin-top: 64px;">
        <div class="cert-label">Certified &amp; Regulated By</div>
        <div class="cert-logos">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI DSS">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SECTION 9: FAQ
       ============================================ -->
  <section class="rx-section rx-section-light" id="faq">
    <div class="container">
      <h2 class="section-title">Prescription Service FAQs</h2>
      <p class="section-subtitle">Everything you need to know about our prescription services in South East London</p>

      <div class="rx-faq-list">
        <?php
        $rx_faqs = rl_field( 'rx_faqs' );
        if ( $rx_faqs ) :
          foreach ( $rx_faqs as $faq ) :
        ?>
        <details class="rx-faq-item">
          <summary class="rx-faq-question">
            <span><?php echo esc_html( $faq['question'] ); ?></span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="rx-faq-answer">
            <?php echo wp_kses_post( $faq['answer'] ); ?>
          </div>
        </details>
        <?php endforeach; else : ?>
        <details class="rx-faq-item">
          <summary class="rx-faq-question">
            <span>How quickly can I collect my prescription?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="rx-faq-answer">
            <p>Same-day collection is available at both pharmacies when ordered before 12pm. We'll text you as soon as it's ready to pick up.</p>
          </div>
        </details>
        <details class="rx-faq-item">
          <summary class="rx-faq-question">
            <span>Do you accept electronic prescriptions?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="rx-faq-answer">
            <p>Yes, we are fully integrated with the NHS Electronic Prescription Service (EPS). Ask your GP to nominate either Chislehurst Pharmacy or Pond Pharmacy as your nominated dispensing pharmacy.</p>
          </div>
        </details>
        <details class="rx-faq-item">
          <summary class="rx-faq-question">
            <span>Can I use both pharmacies?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="rx-faq-answer">
            <p>Yes, you can nominate either Chislehurst Pharmacy (59 Chislehurst Rd, BR7 5NP) or Pond Pharmacy (59 High St, BR7 5AF) — whichever is most convenient.</p>
          </div>
        </details>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       FINAL CTA + FOOTER
       ============================================ -->

<?php get_footer(); ?>
