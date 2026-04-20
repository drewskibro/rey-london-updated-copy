<?php
/**
 * Template Name: HPV Vaccine
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="hpv-hero">
    <div class="container">
      <div class="hpv-hero-grid">
        <div class="hpv-hero-text">
          <div class="hpv-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <?php echo esc_html( rl_field( 'hpv_hero_eyebrow', 'Cancer Prevention  |  HPV Vaccination' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'hpv_hero_title', 'HPV Vaccine London: Protect Against <span class="gradient-text">Cancer-Causing HPV</span>' ) ); ?></h1>
          <p class="hpv-hero-sub"><?php echo esc_html( rl_field( 'hpv_hero_subtitle', 'Private Gardasil 9 vaccination for men and women aged 9–45+. Same-day appointments available at our South East London clinics. No GP referral needed.' ) ); ?></p>

          <div class="hpv-hero-trust">
            <?php
            $hpv_trust_badges = rl_field( 'hpv_hero_trust_badges' );
            if ( $hpv_trust_badges && is_array( $hpv_trust_badges ) ) :
                foreach ( $hpv_trust_badges as $badge ) : ?>
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $badge['text'] ); ?></span>
                <?php endforeach;
            else : ?>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered Pharmacy</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Appointments</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Gardasil 9 (9-Valent)</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Two Chislehurst Locations</span>
            <?php endif; ?>
          </div>

          <div class="hpv-hero-ctas">
            <a href="<?php echo esc_url( rl_field( 'hpv_hero_cta1_url', '#book' ) ); ?>" class="hpv-btn-primary"><?php echo esc_html( rl_field( 'hpv_hero_cta1_text', 'Book My Vaccination' ) ); ?></a>
            <a href="<?php echo esc_url( rl_field( 'hpv_hero_cta2_url', '#eligibility' ) ); ?>" class="hpv-btn-outline"><?php echo esc_html( rl_field( 'hpv_hero_cta2_text', 'Check Eligibility First' ) ); ?></a>
          </div>
        </div>

        <div class="hpv-hero-visual">
          <?php $hpv_hero_img = rl_field( 'hpv_hero_image' ); ?>
          <?php if ( $hpv_hero_img ) : ?>
          <div class="hpv-hero-visual-inner">
            <img src="<?php echo esc_url( $hpv_hero_img ); ?>" alt="HPV Vaccine London" style="width:100%;height:auto;border-radius:16px;" />
          </div>
          <?php else : ?>
          <div class="hpv-hero-visual-inner">
            <!-- Shield illustration -->
            <svg viewBox="0 0 120 140" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M60 5L10 25v45c0 35 50 60 50 60s50-25 50-60V25L60 5z" stroke="currentColor" stroke-width="2" fill="rgba(255,255,255,.06)"/>
              <path d="M45 70l10 10 20-25" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              <text x="60" y="115" text-anchor="middle" fill="currentColor" font-size="10" font-weight="700" font-family="Inter, sans-serif" opacity=".6">GARDASIL 9</text>
            </svg>
          </div>
          <?php endif; ?>
          <div class="hpv-hero-float-badge">
            <div class="hpv-float-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <div class="hpv-float-text"><span class="hpv-float-stat">9 Types</span><span class="hpv-float-label">HPV Protection</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="hpv-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="hpv-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          <?php echo esc_html( rl_field( 'hpv_keyfacts_pill', 'At a Glance' ) ); ?>
        </div>
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_keyfacts_title', 'Key Facts About the HPV Vaccine' ) ); ?></h2>
      </div>
      <div class="hpv-quick-grid hpv-reveal">
        <?php
        $hpv_keyfacts = rl_field( 'hpv_keyfacts_cards' );
        if ( $hpv_keyfacts && is_array( $hpv_keyfacts ) ) :
            $kf_icons = array(
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
            );
            foreach ( $hpv_keyfacts as $i => $card ) : ?>
        <div class="hpv-quick-card">
          <div class="hpv-quick-icon"><?php echo $kf_icons[ $i % count( $kf_icons ) ]; ?></div>
          <div class="hpv-quick-stat"><?php echo esc_html( $card['stat'] ); ?></div>
          <div class="hpv-quick-label"><?php echo esc_html( $card['label'] ); ?></div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="hpv-quick-card">
          <div class="hpv-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="hpv-quick-stat">9 HPV Types</div>
          <div class="hpv-quick-label">Protection against cancer-causing strains</div>
        </div>
        <div class="hpv-quick-card">
          <div class="hpv-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/></svg></div>
          <div class="hpv-quick-stat">1–2 Doses</div>
          <div class="hpv-quick-label">Depending on your age (under 25 needs 1 dose)</div>
        </div>
        <div class="hpv-quick-card">
          <div class="hpv-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <div class="hpv-quick-stat">15 Minutes</div>
          <div class="hpv-quick-label">Quick appointment, lasting protection</div>
        </div>
        <div class="hpv-quick-card">
          <div class="hpv-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="hpv-quick-stat">2 Locations</div>
          <div class="hpv-quick-label">Chislehurst pharmacies serving South East London</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== UNDERSTANDING HPV ===================== -->
  <section class="hpv-section-light">
    <div class="container">
      <div class="hpv-two-col hpv-reveal">
        <div class="hpv-visual-placeholder">
          <?php $hpv_understanding_img = rl_field( 'hpv_understanding_image' ); ?>
          <?php if ( $hpv_understanding_img ) : ?>
          <img src="<?php echo esc_url( $hpv_understanding_img ); ?>" alt="<?php echo esc_attr( rl_field( 'hpv_understanding_heading', 'Understanding HPV' ) ); ?>" style="width:100%;height:auto;border-radius:16px;" />
          <?php else : ?>
          <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="100" cy="100" r="60" stroke="currentColor" stroke-width="1.5"/><circle cx="100" cy="100" r="40" stroke="currentColor" stroke-width="1" stroke-dasharray="4 4"/><circle cx="100" cy="100" r="10" fill="currentColor" opacity=".15"/><circle cx="80" cy="60" r="6" fill="currentColor" opacity=".2"/><circle cx="130" cy="75" r="6" fill="currentColor" opacity=".2"/><circle cx="70" cy="110" r="6" fill="currentColor" opacity=".2"/><circle cx="140" cy="120" r="6" fill="currentColor" opacity=".2"/><text x="100" y="165" text-anchor="middle" fill="currentColor" font-size="8" font-weight="600" opacity=".5" font-family="Inter">HPV STRUCTURE</text></svg>
          <?php endif; ?>
        </div>
        <div>
          <span class="hpv-eyebrow"><?php echo esc_html( rl_field( 'hpv_understanding_eyebrow', 'The Problem' ) ); ?></span>
          <h2 class="hpv-section-title"><?php echo esc_html( rl_field( 'hpv_understanding_heading', 'What is HPV, and Why Does It Matter?' ) ); ?></h2>
          <?php echo wp_kses_post( rl_field( 'hpv_understanding_body', '<p class="hpv-body-text">Human papillomavirus (HPV) is one of the most common sexually transmitted infections globally. <strong>Over 70% of sexually active people</strong> will contract HPV at some point in their lives.</p><p class="hpv-body-text">Most HPV infections clear naturally without symptoms. But for some people, persistent HPV infection can lead to serious health consequences years or even decades later.</p>' ) ); ?>
          <div class="hpv-callout"><?php echo esc_html( rl_field( 'hpv_understanding_callout', 'HPV causes 99% of cervical cancers and contributes to thousands of other cancers each year in the UK.' ) ); ?></div>
          <?php echo wp_kses_post( rl_field( 'hpv_understanding_body2', '<p class="hpv-body-text">HPV spreads through skin-to-skin contact, including sexual activity. Because most people with HPV show no symptoms, it transmits easily without anyone realising.</p><p class="hpv-body-text"><strong>The good news:</strong> vaccination provides strong protection against the HPV types most likely to cause cancer and genital warts.</p>' ) ); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== GARDASIL 9 ===================== -->
  <section class="hpv-section-white">
    <div class="container">
      <div class="hpv-two-col reverse hpv-reveal">
        <div>
          <span class="hpv-eyebrow"><?php echo esc_html( rl_field( 'hpv_gardasil_eyebrow', 'The Solution' ) ); ?></span>
          <h2 class="hpv-section-title"><?php echo esc_html( rl_field( 'hpv_gardasil_heading', 'Gardasil 9: The Most Comprehensive HPV Protection Available' ) ); ?></h2>
          <?php echo wp_kses_post( rl_field( 'hpv_gardasil_body', '<p class="hpv-body-text">Gardasil 9 is the HPV vaccine used by Chislehurst Pharmacy Group Pharmacy. It\'s the most advanced HPV vaccine available, protecting against nine HPV types:</p><p class="hpv-body-text"><strong>High-Risk Types (Cancer-Causing):</strong> HPV 16, 18, 31, 33, 45, 52, and 58</p><p class="hpv-body-text"><strong>Low-Risk Types (Genital Warts):</strong> HPV 6 and 11</p><p class="hpv-body-text">Together, these nine types are responsible for:</p>' ) ); ?>
          <ul class="hpv-percentage-list">
            <?php
            $gardasil_stats = rl_field( 'hpv_gardasil_stats' );
            if ( $gardasil_stats && is_array( $gardasil_stats ) ) :
                foreach ( $gardasil_stats as $stat ) : ?>
            <li><?php echo esc_html( $stat['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li>90% of cervical cancers</li>
            <li>90% of anal cancers</li>
            <li>90% of genital warts</li>
            <li>70% of vaginal and vulvar cancers</li>
            <li>Significant percentages of penile and oropharyngeal cancers</li>
            <?php endif; ?>
          </ul>
          <div class="hpv-highlight-box"><?php echo wp_kses_post( rl_field( 'hpv_gardasil_highlight', 'Clinical trials show Gardasil 9 is nearly <strong>100% effective</strong> at preventing infections and pre-cancers caused by the HPV types it targets when given before exposure.' ) ); ?></div>
        </div>
        <div class="hpv-visual-placeholder">
          <?php $hpv_gardasil_img = rl_field( 'hpv_gardasil_image' ); ?>
          <?php if ( $hpv_gardasil_img ) : ?>
          <img src="<?php echo esc_url( $hpv_gardasil_img ); ?>" alt="Gardasil 9 Vaccine" style="width:100%;height:auto;border-radius:16px;" />
          <?php else : ?>
          <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="50" y="30" width="100" height="140" rx="12" stroke="currentColor" stroke-width="1.5"/><rect x="65" y="55" width="70" height="8" rx="4" fill="currentColor" opacity=".12"/><rect x="65" y="75" width="70" height="8" rx="4" fill="currentColor" opacity=".12"/><rect x="65" y="95" width="50" height="8" rx="4" fill="currentColor" opacity=".12"/><text x="100" y="47" text-anchor="middle" fill="currentColor" font-size="9" font-weight="700" opacity=".5" font-family="Inter">GARDASIL 9</text><circle cx="100" cy="138" r="16" stroke="currentColor" stroke-width="1.5" fill="currentColor" fill-opacity=".06"/><text x="100" y="142" text-anchor="middle" fill="currentColor" font-size="11" font-weight="800" opacity=".5" font-family="Inter">9</text></svg>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHO SHOULD GET ===================== -->
  <section class="hpv-section-light" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_who_title', 'Who Should Get the HPV Vaccine in London?' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'hpv_who_subtitle', 'The HPV vaccine provides the most benefit when given before exposure. However, even if you\'re sexually active, you can still benefit from vaccination.' ) ); ?></p>
      </div>

      <div class="hpv-who-grid hpv-reveal">
        <?php
        $hpv_who_cards = rl_field( 'hpv_who_cards' );
        if ( $hpv_who_cards && is_array( $hpv_who_cards ) ) :
            $who_icons = array(
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
            );
            foreach ( $hpv_who_cards as $i => $card ) : ?>
        <div class="hpv-who-card">
          <div class="hpv-who-icon"><?php echo $who_icons[ $i % count( $who_icons ) ]; ?></div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <p><?php echo esc_html( $card['description'] ); ?></p>
          <?php if ( ! empty( $card['bullets'] ) && is_array( $card['bullets'] ) ) : ?>
          <ul class="hpv-check-list">
            <?php foreach ( $card['bullets'] as $bullet ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $bullet['text'] ); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <?php if ( ! empty( $card['cta_text'] ) ) : ?>
          <a href="<?php echo esc_url( $card['cta_url'] ?: '#book' ); ?>" class="hpv-card-cta"><?php echo esc_html( $card['cta_text'] ); ?></a>
          <?php endif; ?>
        </div>
            <?php endforeach;
        else : ?>
        <!-- Card 1 -->
        <div class="hpv-who-card">
          <div class="hpv-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
          <h3>Routine Vaccination</h3>
          <p>The NHS recommends HPV vaccination for children aged 12–13 (school year 8). Private vaccination is available for children ages 9+ who missed school vaccination or whose parents prefer private service.</p>
          <ul class="hpv-check-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Only 1 dose needed (most protective schedule)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Ideally given before becoming sexually active</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointments available</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Parental consent required</li>
          </ul>
          <a href="#book" class="hpv-card-cta">Book for Your Child</a>
        </div>
        <!-- Card 2 -->
        <div class="hpv-who-card">
          <div class="hpv-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
          <h3>Catch-Up Vaccination</h3>
          <p>If you missed vaccination at school or moved to the UK from overseas, you can catch up privately. Protection remains highly effective even if you're already sexually active.</p>
          <ul class="hpv-check-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 1 dose schedule (before 25th birthday)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No GP referral needed</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Walk-in and appointments</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Student-friendly scheduling</li>
          </ul>
          <a href="#book" class="hpv-card-cta">Book Your Appointment</a>
        </div>
        <!-- Card 3 -->
        <div class="hpv-who-card">
          <div class="hpv-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <h3>Adult Vaccination</h3>
          <p>Adults who haven't been vaccinated can still benefit. The vaccine protects against HPV types you haven't been exposed to, even if you've had one or more sexual partners.</p>
          <ul class="hpv-check-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 2-dose schedule (ages 25–45)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Protection against future HPV exposure</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Especially important for new relationships</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Available for both men and women</li>
          </ul>
          <a href="#book" class="hpv-card-cta">Check Eligibility</a>
        </div>
        <?php endif; ?>
      </div>

      <div class="hpv-info-box">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <?php echo esc_html( rl_field( 'hpv_who_info_box', 'Men who have sex with men (MSM) aged 45 and under may be eligible for free HPV vaccination through the NHS at sexual health clinics. Contact your local clinic for information.' ) ); ?>
      </div>
    </div>
  </section>

  <!-- ===================== DOSING SCHEDULE ===================== -->
  <section class="hpv-section-white" id="dosing">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_dosing_title', 'How Many Doses Do You Need?' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'hpv_dosing_subtitle', 'The number of doses depends on your age when you receive your first vaccination and your immune system status. For private vaccination, we follow the Gardasil 9 Summary of Product Characteristics.' ) ); ?></p>
      </div>

      <div class="hpv-dose-grid hpv-reveal" style="grid-template-columns:repeat(2,minmax(0,1fr));max-width:820px;margin:48px auto 0;">
        <?php
        $hpv_dosing_cards = rl_field( 'hpv_dosing_cards' );
        if ( $hpv_dosing_cards && is_array( $hpv_dosing_cards ) ) :
            foreach ( $hpv_dosing_cards as $dose ) :
                $dose_num = intval( $dose['dose_number'] );
                $is_recommended = ! empty( $dose['recommended'] ); ?>
        <div class="hpv-dose-card<?php echo $is_recommended ? ' recommended' : ''; ?>">
          <div class="hpv-dose-number"><?php echo esc_html( $dose['dose_number'] ); ?></div>
          <h3><?php echo esc_html( $dose['title'] ); ?></h3>
          <div class="hpv-dose-who"><?php echo esc_html( $dose['who'] ); ?></div>
          <p><?php echo esc_html( $dose['description'] ); ?></p>
          <div class="hpv-timeline"><?php for ( $d = 0; $d < $dose_num; $d++ ) : ?><div class="hpv-timeline-dot"></div><?php if ( $d < $dose_num - 1 ) : ?><div class="hpv-timeline-line"></div><?php endif; endfor; ?></div>
          <div class="hpv-dose-note"><?php echo esc_html( $dose['note'] ); ?></div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="hpv-dose-card recommended">
          <div class="hpv-dose-number">2</div>
          <h3>2 Doses</h3>
          <div class="hpv-dose-who">Adults aged 25 and over</div>
          <p>Two doses are recommended for adults starting their HPV vaccination course at 25 or older.</p>
          <div class="hpv-timeline"><div class="hpv-timeline-dot"></div><div class="hpv-timeline-line"></div><div class="hpv-timeline-dot"></div></div>
          <div class="hpv-dose-note">Doses at 0 and 6 months</div>
        </div>
        <div class="hpv-dose-card">
          <div class="hpv-dose-number">3</div>
          <h3>3 Doses</h3>
          <div class="hpv-dose-who">Immunosuppressed individuals</div>
          <p>If you are immunosuppressed or living with HIV, three doses are required regardless of age.</p>
          <div class="hpv-timeline"><div class="hpv-timeline-dot"></div><div class="hpv-timeline-line"></div><div class="hpv-timeline-dot"></div><div class="hpv-timeline-line"></div><div class="hpv-timeline-dot"></div></div>
          <div class="hpv-dose-note">Doses at 0, 1–2 and 6 months</div>
        </div>
        <?php endif; ?>
      </div>

      <div class="hpv-info-box" style="margin-top:40px;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <?php echo esc_html( rl_field( 'hpv_dosing_info_box', 'Your consultation with our pharmacist will determine the right schedule for you based on your age and medical history. We\'ll book all necessary appointments to ensure you complete your course.' ) ); ?>
      </div>
    </div>
  </section>

  <!-- ===================== PROTECTION SECTION ===================== -->
  <section class="hpv-section-light" id="protection">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_protection_title', 'Cancer Prevention: What Gardasil 9 Protects Against' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:860px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'hpv_protection_subtitle', 'HPV vaccination is one of the most effective cancer prevention tools available. Here\'s what protection against nine HPV types means for your long-term health.' ) ); ?></p>
      </div>

      <div class="hpv-protect-grid hpv-reveal">
        <?php
        $hpv_protection_cards = rl_field( 'hpv_protection_cards' );
        if ( $hpv_protection_cards && is_array( $hpv_protection_cards ) ) :
            $prot_icon = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';
            foreach ( $hpv_protection_cards as $card ) : ?>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><?php echo $prot_icon; ?></div>
          <div class="hpv-protect-content">
            <h3><?php echo esc_html( $card['title'] ); ?></h3>
            <div class="hpv-protect-stat"><?php echo esc_html( $card['stat'] ); ?></div>
            <p><?php echo esc_html( $card['description'] ); ?></p>
          </div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Cervical Cancer</h3>
            <div class="hpv-protect-stat">Prevents 90% of cervical cancers</div>
            <p>HPV types 16 and 18 cause 70% of cervical cancers. Adding types 31, 33, 45, 52, and 58 brings protection to 90%. Vaccination has already dramatically reduced cervical cancer rates.</p>
          </div>
        </div>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Anal Cancer</h3>
            <div class="hpv-protect-stat">Prevents 90% of anal cancers</div>
            <p>HPV causes the majority of anal cancers in both men and women. Gardasil 9 provides comprehensive protection against the HPV types most likely to cause these cancers.</p>
          </div>
        </div>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="4"/><path d="M5.8 14.5A7 7 0 0 1 12 11a7 7 0 0 1 6.2 3.5"/><path d="M12 22v-8"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Oropharyngeal Cancer</h3>
            <div class="hpv-protect-stat">Protects against HPV-related throat cancers</div>
            <p>HPV is increasingly recognised as a cause of cancers of the throat, tonsils, and back of the mouth. HPV type 16 causes about 90% of HPV-positive throat cancers.</p>
          </div>
        </div>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Genital Warts</h3>
            <div class="hpv-protect-stat">Prevents 90% of genital warts</div>
            <p>HPV types 6 and 11 cause 90% of genital warts. While not life-threatening, genital warts require treatment and can recur. Vaccination prevents this common condition.</p>
          </div>
        </div>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Vulvar &amp; Vaginal Cancer</h3>
            <div class="hpv-protect-stat">Prevents 70% of vulvar and vaginal cancers</div>
            <p>HPV is a major cause of vulvar and vaginal cancers in women. Gardasil 9 provides protection against the high-risk HPV types most responsible for these cancers.</p>
          </div>
        </div>
        <div class="hpv-protect-card">
          <div class="hpv-protect-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="hpv-protect-content">
            <h3>Penile Cancer</h3>
            <div class="hpv-protect-stat">Protects against HPV-related penile cancer</div>
            <p>While less common, HPV causes a significant proportion of penile cancers in men. Vaccination provides protection for men and helps prevent transmission to partners.</p>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <div class="hpv-warning-box">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#92400E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        <span><?php echo wp_kses_post( rl_field( 'hpv_protection_warning', '<strong>Important:</strong> The HPV vaccine does not replace cervical screening. Women should continue regular cervical screening (smear tests) as recommended, regardless of vaccination status.' ) ); ?></span>
      </div>
    </div>
  </section>

  <!-- ===================== HOW IT WORKS ===================== -->
  <section class="hpv-section-white" id="how-it-works">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_hiw_title', 'How the HPV Vaccine Works' ) ); ?></h2>
      </div>

      <div class="hpv-hiw-grid hpv-reveal" style="margin-top:48px;">
        <!-- LEFT: Photo -->
        <div class="hpv-hiw-photo-col">
          <div class="hpv-hiw-photo-wrap">
            <?php $hpv_hiw_img = rl_field( 'hpv_hiw_image' ); ?>
            <img
              src="<?php echo esc_url( $hpv_hiw_img ?: 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&q=80&auto=format&fit=crop' ); ?>"
              alt="Pharmacist administering a vaccine to a patient in a professional clinic setting"
              class="hpv-hiw-photo"
              loading="lazy"
            />
            <div class="hpv-hiw-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span><?php echo esc_html( rl_field( 'hpv_hiw_badge_text', 'GPhC-Registered Pharmacists' ) ); ?></span>
            </div>
          </div>
        </div>

        <!-- RIGHT: Science + Steps split -->
        <div class="hpv-hiw-content-col">
          <span class="hpv-eyebrow"><?php echo esc_html( rl_field( 'hpv_hiw_eyebrow', 'Vaccine Mechanism' ) ); ?></span>
          <?php echo wp_kses_post( rl_field( 'hpv_hiw_body', '<p class="hpv-body-text">Gardasil 9 is a recombinant vaccine made from virus-like particles (VLPs) that mimic the outer shell of HPV.</p><p class="hpv-body-text"><strong>Important: The vaccine does NOT contain live virus or viral DNA. It cannot cause HPV infection.</strong></p><p class="hpv-body-text">When you receive the vaccine, your immune system recognises these particles as foreign and creates antibodies. If you\'re later exposed to real HPV, your body already has the antibodies ready to neutralise the virus before it can establish infection.</p>' ) ); ?>
          <div class="hpv-callout" style="margin-top:20px;margin-bottom:28px;"><?php echo esc_html( rl_field( 'hpv_hiw_callout', 'Nearly 100% effective at preventing persistent infection and pre-cancers when given before HPV exposure.' ) ); ?></div>

          <span class="hpv-eyebrow"><?php echo esc_html( rl_field( 'hpv_hiw_steps_eyebrow', 'Your Appointment' ) ); ?></span>
          <div class="hpv-process-steps">
            <?php
            $hpv_hiw_steps = rl_field( 'hpv_hiw_steps' );
            if ( $hpv_hiw_steps && is_array( $hpv_hiw_steps ) ) :
                foreach ( $hpv_hiw_steps as $i => $step ) : ?>
            <div class="hpv-process-step">
              <div class="hpv-step-num"><?php echo esc_html( $i + 1 ); ?></div>
              <div class="hpv-step-body">
                <h4><?php echo esc_html( $step['title'] ); ?></h4>
                <p><?php echo esc_html( $step['description'] ); ?></p>
              </div>
            </div>
                <?php endforeach;
            else : ?>
            <div class="hpv-process-step">
              <div class="hpv-step-num">1</div>
              <div class="hpv-step-body">
                <h4>Consultation (5–10 min)</h4>
                <p>Our pharmacist reviews your medical history, discusses any allergies or concerns, and confirms the appropriate dosing schedule for your age.</p>
              </div>
            </div>
            <div class="hpv-process-step">
              <div class="hpv-step-num">2</div>
              <div class="hpv-step-body">
                <h4>Vaccination (2 min)</h4>
                <p>The vaccine is given as an injection in your upper arm. We use modern, fine needles to minimise discomfort.</p>
              </div>
            </div>
            <div class="hpv-process-step">
              <div class="hpv-step-num">3</div>
              <div class="hpv-step-body">
                <h4>Observation (15 min)</h4>
                <p>You'll wait in our comfortable seating area for 15 minutes. This is standard protocol for all vaccines to monitor for any immediate reactions (which are very rare).</p>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="hpv-total-time"><?php echo esc_html( rl_field( 'hpv_hiw_total_time', 'Total time: approximately 20–30 minutes' ) ); ?></div>
          <div style="text-align:center;margin-top:24px;">
            <a href="#book" class="hpv-card-cta" style="display:inline-flex;">Book Your Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SIDE EFFECTS ===================== -->
  <section class="hpv-section-light" id="safety">

    <!-- Lifestyle banner -->
    <div class="hpv-safety-banner">
      <?php $hpv_safety_banner_img = rl_field( 'hpv_safety_banner_image' ); ?>
      <img
        src="<?php echo esc_url( $hpv_safety_banner_img ?: 'https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=1600&q=80&auto=format&fit=crop&crop=center' ); ?>"
        alt="Young woman smiling and feeling healthy after vaccination — proactive healthcare"
        class="hpv-safety-banner-img"
        loading="lazy"
      />
      <div class="hpv-safety-banner-overlay">
        <div class="hpv-safety-banner-caption">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <div>
            <strong><?php echo esc_html( rl_field( 'hpv_safety_banner_title', 'Trusted Globally Since 2014' ) ); ?></strong>
            <span><?php echo esc_html( rl_field( 'hpv_safety_banner_text', 'Used safely in hundreds of millions of doses worldwide since 2014' ) ); ?></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div style="text-align:center;margin-top:72px;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_safety_title', 'Side Effects and Safety Information' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:860px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'hpv_safety_subtitle', 'Gardasil 9 has been extensively studied in clinical trials involving over 15,000 participants and has been used safely in millions of people worldwide since 2014.' ) ); ?></p>
      </div>

      <div class="hpv-two-col hpv-reveal" style="margin-top:48px;align-items:start;">
        <!-- Left: Common -->
        <div class="hpv-side-col">
          <h3><?php echo esc_html( rl_field( 'hpv_safety_common_title', 'Common Side Effects (Usually Mild & Temporary)' ) ); ?></h3>
          <ul class="hpv-side-list">
            <?php
            $hpv_common_effects = rl_field( 'hpv_safety_common_list' );
            if ( $hpv_common_effects && is_array( $hpv_common_effects ) ) :
                foreach ( $hpv_common_effects as $effect ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $effect['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Pain, redness, or swelling at injection site</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Headache</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Fatigue or tiredness</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Muscle aches</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Mild fever</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Nausea or dizziness</li>
            <?php endif; ?>
          </ul>
          <p class="hpv-side-note"><?php echo esc_html( rl_field( 'hpv_safety_common_note', 'These side effects typically resolve within 1–2 days and can be managed with over-the-counter pain relief if needed.' ) ); ?></p>
        </div>
        <!-- Right: Serious / Contraindications -->
        <div class="hpv-side-col">
          <h3><?php echo esc_html( rl_field( 'hpv_safety_serious_title', 'Serious Side Effects (Very Rare)' ) ); ?></h3>
          <div class="hpv-side-warning"><?php echo esc_html( rl_field( 'hpv_safety_serious_text', 'Serious allergic reactions are extremely rare (fewer than 2 per million doses) but possible with any vaccine. This is why we observe all patients for 15 minutes after vaccination. Our pharmacists are trained to recognise and treat allergic reactions immediately.' ) ); ?></div>
          <h3 style="margin-top:24px;"><?php echo esc_html( rl_field( 'hpv_safety_contra_title', 'Who Should Not Get the Vaccine' ) ); ?></h3>
          <ul class="hpv-contra-list">
            <?php
            $hpv_contra_list = rl_field( 'hpv_safety_contra_list' );
            if ( $hpv_contra_list && is_array( $hpv_contra_list ) ) :
                foreach ( $hpv_contra_list as $contra ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> <?php echo esc_html( $contra['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Severe allergic reaction to previous HPV vaccine dose</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Severe allergy to yeast (vaccine ingredient)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Currently pregnant (delay until after delivery)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Currently moderately or severely ill (delay until recovered)</li>
            <?php endif; ?>
          </ul>
          <p class="hpv-side-note" style="margin-top:16px;"><?php echo esc_html( rl_field( 'hpv_safety_contra_note', 'Gardasil 9 is generally considered compatible with breastfeeding — discuss with your pharmacist if you have concerns.' ) ); ?></p>
        </div>
      </div>

      <div class="hpv-safety-box"><?php echo esc_html( rl_field( 'hpv_safety_box', 'Safety monitoring by the MHRA and WHO continues to confirm HPV vaccines have a favourable safety profile. Extensive post-marketing surveillance studies continue to confirm the vaccine\'s safety and effectiveness.' ) ); ?></div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="hpv-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_pricing_title', 'Transparent Pricing — HPV Vaccine London' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'hpv_pricing_subtitle', 'No hidden fees. No consultation charges. The price you see is the price you pay.' ) ); ?></p>
      </div>

      <div class="hpv-pricing-grid hpv-reveal">
        <!-- Single Dose -->
        <div class="hpv-price-card">
          <div class="hpv-price-amount"><?php echo esc_html( rl_field( 'hpv_price_per_dose', '£150' ) ); ?></div>
          <div class="hpv-price-per">per dose</div>
          <ul class="hpv-price-includes">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Gardasil 9 vaccine</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Pharmacist consultation</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration by qualified professional</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15-minute observation period</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination record / certificate</li>
          </ul>
          <div class="hpv-price-for">Ages 9–24</div>
          <div class="hpv-price-total">£150 total (1 dose)</div>
          <a href="#book" class="hpv-price-cta">Book Single Dose</a>
        </div>
        <!-- Two-Dose (Featured) -->
        <div class="hpv-price-card featured">
          <div class="hpv-price-badge">Most Adults</div>
          <div class="hpv-price-amount">£150</div>
          <div class="hpv-price-per">per dose</div>
          <ul class="hpv-price-includes">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Gardasil 9 vaccine (both doses)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Pharmacist consultations</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration by qualified professional</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15-minute observation periods</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination records / certificates</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Flexible scheduling (6–24 months apart)</li>
          </ul>
          <div class="hpv-price-for">Ages 25–45+</div>
          <div class="hpv-price-total">£300 total (2 doses)</div>
          <a href="#book" class="hpv-price-cta">Book Two-Dose Course</a>
        </div>
        <!-- Three-Dose -->
        <div class="hpv-price-card">
          <div class="hpv-price-amount">£150</div>
          <div class="hpv-price-per">per dose</div>
          <ul class="hpv-price-includes">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Gardasil 9 vaccine (all three doses)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Pharmacist consultations</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration by qualified professional</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Scheduled appointments</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination records / certificates</li>
          </ul>
          <div class="hpv-price-for">Immunocompromised patients</div>
          <div class="hpv-price-total">£450 total (3 doses)</div>
          <a href="#book" class="hpv-price-cta">Book Three-Dose Course</a>
        </div>
      </div>

      <div class="hpv-payment-info">We accept cash, card, and contactless payments. Some private health insurance policies may cover HPV vaccination — check your policy details.</div>
      <div class="hpv-trust-line">GPhC Registered Pharmacy&nbsp;&nbsp;|&nbsp;&nbsp;Genuine Gardasil 9 from Approved UK Suppliers</div>
    </div>
  </section>

  <!-- ===================== WHY CHOOSE ===================== -->
  <section class="hpv-section-light" id="why-us">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_why_title', 'Why Choose Chislehurst Pharmacy Group for Your HPV Vaccination' ) ); ?></h2>
      </div>

      <div class="hpv-why-grid hpv-reveal">
        <?php
        $hpv_why_cards = rl_field( 'hpv_why_cards' );
        if ( $hpv_why_cards && is_array( $hpv_why_cards ) ) :
            $why_icons = array(
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
            );
            foreach ( $hpv_why_cards as $i => $card ) : ?>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><?php echo $why_icons[ $i % count( $why_icons ) ]; ?></div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <p><?php echo esc_html( $card['description'] ); ?></p>
        </div>
            <?php endforeach;
        else : ?>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>GPhC-Registered Pharmacists</h3>
          <p>Our pharmacists are fully registered with the General Pharmaceutical Council and trained in vaccine administration. You're in safe, professional hands.</p>
        </div>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
          <h3>Genuine Gardasil 9</h3>
          <p>We source Gardasil 9 directly from approved UK pharmaceutical suppliers, stored according to strict cold chain protocols to maintain effectiveness.</p>
        </div>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <h3>Convenient Locations</h3>
          <p>Two pharmacy locations in Chislehurst serving South East London, Bromley, Sidcup, Bexley, and Orpington. Easy to reach by car or public transport.</p>
        </div>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <h3>Flexible Scheduling</h3>
          <p>Same-day and next-day appointments often available. Saturday appointments for those with work commitments. Walk-ins welcome subject to availability.</p>
        </div>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg></div>
          <h3>No GP Referral Needed</h3>
          <p>Access private HPV vaccination without needing to see your GP first. Quick eligibility assessment during your consultation.</p>
        </div>
        <div class="hpv-why-card">
          <div class="hpv-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
          <h3>Complete Care</h3>
          <p>Full consultation, safety monitoring, vaccination records, and follow-up appointment booking all included. We don't just vaccinate — we support you throughout.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="hpv-locations" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'hpv_locations_title', 'Visit Us at Our South East London Locations' ) ); ?></h2>
      </div>

      <?php
      /* Default location data used as fallback when the hpv_locations
         ACF repeater has no rows populated, and as per-field fallbacks
         for rows that are missing specific sub-fields (e.g. a row
         without an uploaded image still gets a default photo). */
      $hpv_default_locations = array(
          array(
              'name'           => 'Pond Pharmacy',
              'image'          => 'https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg',
              'description'    => 'HPV vaccinations in Chislehurst, BR7. Gardasil 9 administered by GPhC-registered pharmacists. Same-day appointments for adults and adolescents.',
              'address'        => '59 High Street, Chislehurst, BR7 5AF',
              'phone'          => '020 8467 3158',
              'hours'          => rl_hours_pond(),
              'directions_url' => 'https://maps.google.com/?q=59+High+Street+Chislehurst+BR7+5AF',
          ),
          array(
              'name'           => 'Chislehurst Pharmacy',
              'image'          => 'https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg',
              'description'    => 'HPV vaccinations in Chislehurst. Gardasil 9 for all eligible ages with face-to-face pharmacist support. Serving Orpington, Petts Wood and Sidcup.',
              'address'        => '59 Chislehurst Road, Chislehurst, BR7 5NP',
              'phone'          => '020 8295 0017',
              'hours'          => rl_hours_chislehurst(),
              'directions_url' => 'https://maps.google.com/?q=59+Chislehurst+Road+BR7+5NP',
          ),
      );
      $hpv_locations = rl_field( 'hpv_locations' );
      if ( ! $hpv_locations || ! is_array( $hpv_locations ) ) {
          $hpv_locations = $hpv_default_locations;
      }
      $hpv_book_url = home_url( '/contact-page/#book-appointment' );
      ?>
      <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>

      <div class="hpv-serving-text"><?php echo esc_html( rl_field( 'hpv_locations_serving', 'Conveniently located to serve patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and surrounding South East London areas. Free parking available at both locations.' ) ); ?></div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="hpv-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="hpv-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Frequently Asked Questions About HPV Vaccination</h2>
      </div>

      <div class="hpv-faq-list">
        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">01</span><span class="hpv-faq-question">Can I get the HPV vaccine if I'm already sexually active?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">Yes. Even if you're sexually active, you can still benefit from HPV vaccination. While the vaccine is most effective when given before any sexual activity, it still provides protection against HPV types you haven't been exposed to. Many people have not been exposed to all nine HPV types the vaccine protects against. Vaccination is recommended through age 45.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">02</span><span class="hpv-faq-question">Will the HPV vaccine protect me if I already have HPV?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">The vaccine won't treat existing HPV infections, but it will protect you against the other HPV types you haven't been exposed to yet. Since there are nine different types covered by Gardasil 9, even if you have one type, you can still be protected from the others.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">03</span><span class="hpv-faq-question">Is the HPV vaccine only for women?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">No. The HPV vaccine is recommended for everyone — men and women. HPV causes cancers and genital warts in both sexes. Men can develop HPV-related anal cancer, penile cancer, and throat cancers. Vaccinating men also protects their sexual partners.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">04</span><span class="hpv-faq-question">How long does HPV vaccine protection last?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">Clinical studies show protection lasting at least 10+ years after vaccination, and ongoing research suggests it's likely lifelong. You do not need booster doses. The vaccine generates a strong, sustained immune response.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">05</span><span class="hpv-faq-question">Can I get the HPV vaccine if I'm pregnant?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">HPV vaccination is not recommended during pregnancy. If you discover you're pregnant after starting the vaccine series, delay the remaining doses until after delivery. If you're breastfeeding, vaccination is safe — the vaccine does not pass into breast milk.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">06</span><span class="hpv-faq-question">Why do younger people need fewer doses?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">Research shows that younger immune systems (under age 25) produce a stronger, more sustained antibody response to the vaccine. One dose provides excellent protection for this age group. Adults aged 25+ need two doses to achieve the same level of protection.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">07</span><span class="hpv-faq-question">Will I still need cervical screening (smear tests) after vaccination?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">Yes. The HPV vaccine doesn't protect against all HPV types that can cause cervical cancer, only the nine most common/dangerous ones. Women should continue regular cervical screening as recommended (every 3–5 years from age 25–64 in the UK). Vaccination and screening work together for maximum protection.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">08</span><span class="hpv-faq-question">Does the vaccine contain live virus?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">No. Gardasil 9 is made from virus-like particles — empty protein shells that mimic HPV's outer surface. It does NOT contain live virus, dead virus, or any viral DNA. It cannot cause HPV infection.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">09</span><span class="hpv-faq-question">What if I miss my second dose appointment?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">You don't need to restart the series. Simply get the second dose as soon as convenient. While the recommended interval is 6–24 months, the series can be completed even if more time has passed. The important thing is completing the full course.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">10</span><span class="hpv-faq-question">Can the HPV vaccine cause fertility problems?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">No. Extensive research has found no link between HPV vaccination and fertility problems. This is a myth that has been thoroughly debunked by scientific studies. The vaccine is safe and does not affect your ability to get pregnant.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">11</span><span class="hpv-faq-question">What's the difference between Gardasil 9 and the old HPV vaccines?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">Earlier HPV vaccines (Gardasil and Cervarix) protected against 2 or 4 HPV types. Gardasil 9 protects against 9 types — all the previous ones plus five additional cancer-causing types (31, 33, 45, 52, 58). This increases protection from 70% to 90% of cervical cancers. Gardasil 9 is now the standard vaccine used in the UK.</div></div></div>

        <div class="hpv-faq-item"><button class="hpv-faq-trigger"><span class="hpv-faq-num">12</span><span class="hpv-faq-question">Can I get the HPV vaccine on the NHS?</span><svg class="hpv-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hpv-faq-answer"><div class="hpv-faq-answer-inner">The NHS provides free HPV vaccination to children aged 12–13 in school year 8, and catch-up vaccination for those up to age 25 who missed school vaccination (girls born after Sept 1991, boys born after Sept 2006). Men who have sex with men under 46 can access it at sexual health clinics. If you don't meet NHS criteria, private vaccination is available at Chislehurst Pharmacy Group Pharmacy.</div></div></div>
      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA + NEWSLETTER (integrated, travel-health style) ===================== -->
  <section class="hpv-footer-cta-block" id="book">
    <div class="hpv-footer-cta-bg"><div class="hpv-footer-cta-orb hpv-footer-cta-orb-1"></div><div class="hpv-footer-cta-orb hpv-footer-cta-orb-2"></div></div>
    <div class="container hpv-footer-cta-inner">
      <!-- CTA top -->
      <div class="hpv-footer-cta-top">
        <div class="hpv-cta-badges">
          <span class="hpv-cta-badge">GPhC Registered</span>
          <span class="hpv-cta-badge">Gardasil 9 Vaccine</span>
          <span class="hpv-cta-badge">Same-Day Service</span>
        </div>
        <h2 class="hpv-footer-cta-title"><?php echo esc_html( rl_field( 'hpv_cta_title', 'Protect your future health today' ) ); ?></h2>
        <p class="hpv-footer-cta-sub"><?php echo esc_html( rl_field( 'hpv_cta_subtitle', 'Book your private HPV vaccination at Chislehurst Pharmacy Group Pharmacy — South East London\'s trusted clinic. No GP referral needed, same-day appointments available.' ) ); ?></p>
        <div class="cta-buttons">
          <a href="#book" class="btn-cta-primary">Book HPV Vaccine Appointment</a>
          <a href="tel:02084673158" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="hpv-cta-checks">
          <span>✓ Genuine Gardasil 9 in stock</span>
          <span>✓ No GP referral required</span>
          <span>✓ Same-day appointments available</span>
        </div>
      </div>
      <!-- Divider -->
      <div class="hpv-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="hpv-footer-newsletter-row">
        <div class="hpv-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert health tips, exclusive offers, and vaccination reminders delivered to your inbox</p>
        </div>
        <form class="newsletter-form hpv-footer-newsletter-form">
          <input type="text" name="rl_hp" style="display:none" tabindex="-1" autocomplete="off">
          <div class="newsletter-input-wrapper">
            <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 6l-9 6-9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="hpv-disclaimer">
    <div class="container">
      This information is for educational purposes and does not constitute medical advice. HPV vaccination is a prescription-only medicine in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. Information is accurate as of March 2026 and based on current MHRA guidance and clinical evidence.
    </div>
  </div>


<?php get_footer(); ?>
