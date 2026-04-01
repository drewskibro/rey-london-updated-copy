<?php
/**
 * Template Name: NHS Pharmacy First
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
$booking_url = rl_booking_url();
?>

  <!-- ===================== HERO ===================== -->
  <section class="pf-hero">
    <div class="container">
      <div class="pf-hero-grid">
        <div class="pf-hero-text">
          <div class="pf-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <?php echo esc_html( rl_field( 'pf_hero_eyebrow', 'NHS Pharmacy First  |  Free NHS Treatment' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'pf_hero_title', 'Free NHS Treatment in Chislehurst. <span class="gradient-text">No GP Appointment Needed.</span>' ) ); ?></h1>
          <p class="pf-hero-sub"><?php echo esc_html( rl_field( 'pf_hero_subtitle', 'Under the NHS Pharmacy First scheme, our pharmacists at Chislehurst Pharmacy Group can assess and treat seven common conditions — completely free of charge. No referral, no waiting weeks for a GP. Walk in or book online and get treated the same day.' ) ); ?></p>

          <div class="pf-hero-ctas">
            <a href="<?php echo esc_url( rl_field( 'pf_hero_cta1_url', home_url( '/book-appointment/' ) ) ); ?>" class="pf-btn-primary"><?php echo esc_html( rl_field( 'pf_hero_cta1_text', 'Book a Pharmacy First Appointment' ) ); ?></a>
            <a href="<?php echo esc_url( rl_field( 'pf_hero_cta2_url', '#conditions' ) ); ?>" class="pf-btn-outline"><?php echo esc_html( rl_field( 'pf_hero_cta2_text', 'Learn About the Seven Conditions' ) ); ?></a>
          </div>

          <div class="pf-hero-trust">
            <?php
            $pf_trust_badges = rl_field( 'pf_hero_trust_badges' );
            if ( $pf_trust_badges && is_array( $pf_trust_badges ) ) :
                foreach ( $pf_trust_badges as $badge ) : ?>
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $badge['text'] ); ?></span>
                <?php endforeach;
            else : ?>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> NHS Funded — Free to You</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No GP Referral Needed</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Treatment Available</span>
            <?php endif; ?>
          </div>
        </div>

        <div class="pf-hero-visual">
          <?php $pf_hero_img = rl_field( 'pf_hero_image' ); ?>
          <?php if ( $pf_hero_img ) : ?>
          <div class="pf-hero-visual-inner">
            <img src="<?php echo esc_url( $pf_hero_img ); ?>" alt="NHS Pharmacy First Service" style="width:100%;height:auto;border-radius:16px;" />
          </div>
          <?php else : ?>
          <div class="pf-hero-visual-inner">
            <svg viewBox="0 0 120 140" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M60 5L10 25v45c0 35 50 60 50 60s50-25 50-60V25L60 5z" stroke="currentColor" stroke-width="2" fill="rgba(255,255,255,.06)"/>
              <path d="M45 70l10 10 20-25" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              <text x="60" y="115" text-anchor="middle" fill="currentColor" font-size="10" font-weight="700" font-family="Inter, sans-serif" opacity=".6">NHS</text>
            </svg>
          </div>
          <?php endif; ?>
          <div class="pf-hero-float-badge">
            <div class="pf-float-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
            <div class="pf-float-text"><span class="pf-float-stat">7 Conditions</span><span class="pf-float-label">Treated Free</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== STATS BAR ===================== -->
  <section class="pf-quick" id="at-a-glance">
    <div class="container">
      <div class="pf-quick-grid">
        <?php
        $pf_stats = rl_field( 'pf_stats_cards' );
        if ( $pf_stats && is_array( $pf_stats ) ) :
            foreach ( $pf_stats as $card ) : ?>
            <div class="pf-quick-card pf-reveal">
              <div class="pf-quick-stat"><?php echo esc_html( $card['stat'] ); ?></div>
              <div class="pf-quick-label"><?php echo esc_html( $card['label'] ); ?></div>
            </div>
            <?php endforeach;
        else : ?>
        <div class="pf-quick-card pf-reveal">
          <div class="pf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
          <div class="pf-quick-stat">7</div>
          <div class="pf-quick-label">Conditions Treated</div>
        </div>
        <div class="pf-quick-card pf-reveal">
          <div class="pf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div class="pf-quick-stat">FREE</div>
          <div class="pf-quick-label">NHS Funded</div>
        </div>
        <div class="pf-quick-card pf-reveal">
          <div class="pf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div class="pf-quick-stat">No GP</div>
          <div class="pf-quick-label">Appointment Needed</div>
        </div>
        <div class="pf-quick-card pf-reveal">
          <div class="pf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div class="pf-quick-stat">Same Day</div>
          <div class="pf-quick-label">Treatment Available</div>
        </div>
        <div class="pf-quick-card pf-reveal">
          <div class="pf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="pf-quick-stat">GPhC</div>
          <div class="pf-quick-label">Registered Pharmacy</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== CONDITIONS WE TREAT ===================== -->
  <section class="pf-section-light" id="conditions">
    <div class="container">
      <div style="text-align:center; max-width:720px; margin:0 auto 48px;">
        <div class="pf-eyebrow pf-reveal"><?php echo esc_html( rl_field( 'pf_conditions_eyebrow', 'CONDITIONS WE TREAT' ) ); ?></div>
        <h2 class="pf-section-title pf-reveal"><?php echo wp_kses_post( rl_field( 'pf_conditions_title', 'Seven Common Conditions. Treated Free. <span class="gradient-text">Today.</span>' ) ); ?></h2>
        <p class="pf-body-text pf-reveal"><?php echo esc_html( rl_field( 'pf_conditions_subtitle', 'Our GPhC-registered pharmacists can assess, diagnose and treat the following conditions under the NHS Pharmacy First scheme — with medication supplied free of charge where clinically appropriate.' ) ); ?></p>
      </div>

      <div class="pf-conditions-grid">
        <?php
        $pf_conditions = rl_field( 'pf_conditions' );
        if ( $pf_conditions && is_array( $pf_conditions ) ) :
            $condition_icons = array(
              '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
            );
            $i = 0;
            foreach ( $pf_conditions as $cond ) : $i++; ?>
            <div class="pf-condition-card pf-reveal">
              <div class="pf-condition-number"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
              <h3 class="pf-condition-name"><?php echo esc_html( $cond['name'] ); ?></h3>
              <div class="pf-condition-age"><?php echo esc_html( $cond['age_range'] ); ?></div>
              <p class="pf-condition-desc"><?php echo esc_html( $cond['description'] ); ?></p>
            </div>
            <?php endforeach;
        else : ?>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">01</div>
          <h3 class="pf-condition-name">Sinusitis</h3>
          <div class="pf-condition-age">Ages 12 and over</div>
          <p class="pf-condition-desc">A blocked or runny nose with facial pain or pressure lasting more than ten days, or symptoms that worsen after initial improvement. Our pharmacist will assess and treat where appropriate.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">02</div>
          <h3 class="pf-condition-name">Sore Throat</h3>
          <div class="pf-condition-age">Ages 5 and over</div>
          <p class="pf-condition-desc">A painful throat that makes swallowing uncomfortable. Our pharmacist will assess the severity using a clinical scoring system and provide appropriate NHS-funded treatment.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">03</div>
          <h3 class="pf-condition-name">Earache (Acute Otitis Media)</h3>
          <div class="pf-condition-age">Ages 1 to 17</div>
          <p class="pf-condition-desc">Pain in one or both ears, which may be sharp, dull or accompanied by temporary hearing loss. Particularly common in children — walk in without a GP appointment.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">04</div>
          <h3 class="pf-condition-name">Infected Insect Bite</h3>
          <div class="pf-condition-age">Ages 1 and over</div>
          <p class="pf-condition-desc">A bite or sting that has become red, swollen, warm to the touch, or is showing signs of infection such as discharge. Our pharmacist will assess and prescribe antibiotics where needed.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">05</div>
          <h3 class="pf-condition-name">Impetigo</h3>
          <div class="pf-condition-age">Ages 1 and over</div>
          <p class="pf-condition-desc">A highly contagious skin infection causing red sores, usually around the nose and mouth, that burst and form honey-coloured crusts. Early treatment prevents it spreading.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">06</div>
          <h3 class="pf-condition-name">Shingles</h3>
          <div class="pf-condition-age">Ages 18 and over</div>
          <p class="pf-condition-desc">A painful, blistering rash caused by reactivation of the chickenpox virus. Starting antiviral treatment early is important — if you suspect shingles, come in without delay.</p>
        </div>
        <div class="pf-condition-card pf-reveal">
          <div class="pf-condition-number">07</div>
          <h3 class="pf-condition-name">Uncomplicated UTI</h3>
          <div class="pf-condition-age">Women aged 16 to 64 only</div>
          <p class="pf-condition-desc">Burning or stinging when passing urine, needing to go more frequently, or cloudy and strong-smelling urine. No GP visit needed — our pharmacist can prescribe treatment directly.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== LIFESTYLE BANNER ===================== -->
  <div class="pf-lifestyle-banner">
    <?php $pf_banner_img = rl_field( 'pf_banner_image' ); ?>
    <img
      src="<?php echo esc_url( $pf_banner_img ?: 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1600&q=80&auto=format&fit=crop&crop=center' ); ?>"
      alt="Pharmacist consulting with a patient at Chislehurst Pharmacy"
      class="pf-lifestyle-banner-img"
      loading="lazy"
    />
    <div class="pf-lifestyle-banner-overlay">
      <div class="pf-lifestyle-banner-caption">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <div>
          <strong><?php echo esc_html( rl_field( 'pf_banner_title', 'NHS Pharmacy First' ) ); ?></strong>
          <span><?php echo esc_html( rl_field( 'pf_banner_text', 'Free treatment for 7 common conditions — no GP referral needed' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== HOW IT WORKS ===================== -->
  <section class="pf-section-white" id="how-it-works">
    <div class="container">
      <div style="text-align:center; max-width:720px; margin:0 auto 48px;">
        <div class="pf-eyebrow pf-reveal"><?php echo esc_html( rl_field( 'pf_hiw_eyebrow', 'HOW IT WORKS' ) ); ?></div>
        <h2 class="pf-section-title pf-reveal"><?php echo wp_kses_post( rl_field( 'pf_hiw_title', 'Three Steps to <span class="gradient-text">Free NHS Treatment</span>' ) ); ?></h2>
        <p class="pf-body-text pf-reveal"><?php echo esc_html( rl_field( 'pf_hiw_subtitle', 'No referral, no red tape. Just expert care when you need it, at either of our Chislehurst locations.' ) ); ?></p>
      </div>

      <div class="pf-steps-grid">
        <?php
        $pf_steps = rl_field( 'pf_hiw_steps' );
        if ( $pf_steps && is_array( $pf_steps ) ) :
            $si = 0;
            foreach ( $pf_steps as $step ) : $si++; ?>
            <div class="pf-step-card pf-reveal">
              <div class="pf-step-num"><?php echo esc_html( $si ); ?></div>
              <h3><?php echo esc_html( $step['title'] ); ?></h3>
              <p><?php echo esc_html( $step['description'] ); ?></p>
            </div>
            <?php endforeach;
        else : ?>
        <div class="pf-step-card pf-reveal">
          <div class="pf-step-num">1</div>
          <h3>Walk In or Book Online</h3>
          <p>Visit Pond Pharmacy on the High Street or Chislehurst Pharmacy on Chislehurst Road during opening hours, or book a convenient slot online. No GP referral needed — just turn up.</p>
        </div>
        <div class="pf-step-card pf-reveal">
          <div class="pf-step-num">2</div>
          <h3>Private Pharmacist Consultation</h3>
          <p>One of our trained pharmacists will see you in a private consultation room. They'll ask about your symptoms, medical history and any current medications, following NHS clinical guidelines throughout.</p>
        </div>
        <div class="pf-step-card pf-reveal">
          <div class="pf-step-num">3</div>
          <h3>Walk Out Treated</h3>
          <p>If your condition meets the NHS Pharmacy First criteria, you'll receive appropriate treatment on the spot — including prescription-only medicines such as antibiotics or antivirals where clinically indicated. Completely free of charge.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== ELIGIBILITY ===================== -->
  <section class="pf-section-light" id="eligibility">
    <div class="container">
      <div class="pf-eligibility-block pf-reveal">
        <div class="pf-eyebrow"><?php echo esc_html( rl_field( 'pf_elig_eyebrow', 'WHO IS ELIGIBLE?' ) ); ?></div>
        <h2 class="pf-section-title"><?php echo wp_kses_post( rl_field( 'pf_elig_title', 'Is Pharmacy First <span class="gradient-text">Right for You?</span>' ) ); ?></h2>
        <div class="pf-elig-body">
          <?php echo wp_kses_post( rl_field( 'pf_elig_body', '<p>NHS Pharmacy First is available to anyone registered with a GP in England. Most conditions can be treated across a wide age range — from young children to adults. The UTI pathway is available to women aged 16 to 64 only.</p><p>You do not need to be registered with a GP in Chislehurst — any England-registered GP qualifies. If your symptoms suggest something more serious, our pharmacist will refer you to the appropriate NHS service without delay.</p>' ) ); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="pf-locations" id="locations">
    <div class="container">
      <div style="text-align:center; max-width:720px; margin:0 auto 48px;">
        <div class="pf-eyebrow pf-reveal">OUR LOCATIONS</div>
        <h2 class="pf-section-title pf-reveal"><?php echo wp_kses_post( rl_field( 'pf_locations_title', 'Visit Us at Either <span class="gradient-text">Chislehurst Location</span>' ) ); ?></h2>
      </div>

      <div class="pf-loc-grid pf-reveal">
        <?php
        $pf_locations = rl_field( 'pf_locations' );
        if ( $pf_locations && is_array( $pf_locations ) ) :
            foreach ( $pf_locations as $loc ) : ?>
        <div class="pf-loc-card">
          <h3><?php echo esc_html( $loc['name'] ); ?></h3>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span><?php echo esc_html( $loc['address'] ); ?></span></div>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $loc['phone'] ) ); ?>"><?php echo esc_html( $loc['phone'] ); ?></a></div>
          <?php if ( ! empty( $loc['hours'] ) ) : ?>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span><?php echo esc_html( $loc['hours'] ); ?></span></div>
          <?php endif; ?>
          <?php if ( ! empty( $loc['directions_url'] ) ) : ?>
          <a href="<?php echo esc_url( $loc['directions_url'] ); ?>" target="_blank" class="pf-loc-cta">Get Directions &rarr;</a>
          <?php endif; ?>
        </div>
            <?php endforeach;
        else : ?>
        <div class="pf-loc-card">
          <h3>Pond Pharmacy — Chislehurst</h3>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>59 High Street, Chislehurst, BR7 5AF</span></div>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg><a href="tel:02084673158">020 8467 3158</a></div>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span>Mon–Fri: 9am–6pm &nbsp;|&nbsp; Sat: 9am–1pm &nbsp;|&nbsp; Sun: Closed</span></div>
          <a href="https://maps.google.com/?q=59+High+Street+Chislehurst+BR7+5AF" target="_blank" class="pf-loc-cta">Get Directions &rarr;</a>
        </div>
        <div class="pf-loc-card">
          <h3>Chislehurst Pharmacy</h3>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>59 Chislehurst Road, Chislehurst, BR7 5NP</span></div>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg><a href="tel:02082950017">020 8295 0017</a></div>
          <div class="pf-loc-detail"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span>Mon–Fri: 9am–6pm &nbsp;|&nbsp; Sat: 9am–1pm &nbsp;|&nbsp; Sun: Closed</span></div>
          <a href="https://maps.google.com/?q=59+Chislehurst+Road+BR7+5NP" target="_blank" class="pf-loc-cta">Get Directions &rarr;</a>
        </div>
        <?php endif; ?>
      </div>

      <div class="pf-serving-text pf-reveal"><?php echo esc_html( rl_field( 'pf_locations_serving', 'Conveniently located to serve patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and surrounding South East London areas. Free parking available at both locations.' ) ); ?></div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="pf-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center; max-width:720px; margin:0 auto 48px;">
        <div class="pf-eyebrow pf-reveal">FREQUENTLY ASKED QUESTIONS</div>
        <h2 class="pf-section-title pf-reveal"><?php echo wp_kses_post( rl_field( 'pf_faq_title', 'Pharmacy First — <span class="gradient-text">Your Questions Answered</span>' ) ); ?></h2>
      </div>

      <div class="pf-faq-list">
        <?php
        $pf_faqs = rl_field( 'pf_faqs' );
        if ( $pf_faqs && is_array( $pf_faqs ) ) :
            $fi = 0;
            foreach ( $pf_faqs as $faq ) : $fi++; ?>
            <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num"><?php echo esc_html( str_pad( $fi, 2, '0', STR_PAD_LEFT ) ); ?></span><span class="pf-faq-question"><?php echo esc_html( $faq['question'] ); ?></span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner"><?php echo wp_kses_post( $faq['answer'] ); ?></div></div></div>
            <?php endforeach;
        else : ?>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">01</span><span class="pf-faq-question">Is it really free?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">Yes. The NHS Pharmacy First service is fully funded by the NHS. There is no charge for the consultation or for any medication supplied under the scheme.</div></div></div>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">02</span><span class="pf-faq-question">Do I need to see my GP first?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">No. You can walk straight into either of our Chislehurst locations and ask for a Pharmacy First consultation. No referral needed.</div></div></div>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">03</span><span class="pf-faq-question">What conditions can you treat?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">We treat seven conditions under the scheme: sinusitis, sore throat, earache, infected insect bites, impetigo, shingles, and uncomplicated UTIs in women aged 16 to 64.</div></div></div>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">04</span><span class="pf-faq-question">Do I need to be registered with a specific GP?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">You need to be registered with any GP in England — it doesn't need to be a local Chislehurst practice.</div></div></div>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">05</span><span class="pf-faq-question">What if my condition can't be treated here?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">If your symptoms fall outside the Pharmacy First criteria or suggest something more serious, our pharmacist will refer you to the right NHS service — whether that's your GP, NHS 111, or urgent care.</div></div></div>
        <div class="pf-faq-item"><button class="pf-faq-trigger"><span class="pf-faq-num">06</span><span class="pf-faq-question">Can children use Pharmacy First?</span><svg class="pf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="pf-faq-answer"><div class="pf-faq-answer-inner">Yes. Several conditions are treated in children — earache from age 1 to 17, sore throat from age 5, and sinusitis from age 12. A parent or guardian should attend with younger children.</div></div></div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== CLOSING CTA ===================== -->
  <section class="pf-footer-cta-block" id="book">
    <div class="pf-footer-cta-bg"><div class="pf-footer-cta-orb pf-footer-cta-orb-1"></div><div class="pf-footer-cta-orb pf-footer-cta-orb-2"></div></div>
    <div class="container pf-footer-cta-inner">
      <div class="pf-footer-cta-top">
        <div class="pf-cta-badges">
          <span class="pf-cta-badge">NHS Funded</span>
          <span class="pf-cta-badge">7 Conditions</span>
          <span class="pf-cta-badge">Same-Day Service</span>
        </div>
        <h2 class="pf-footer-cta-title"><?php echo esc_html( rl_field( 'pf_cta_title', 'Don\'t Wait Weeks for a GP. Get Treated Today.' ) ); ?></h2>
        <p class="pf-footer-cta-sub"><?php echo esc_html( rl_field( 'pf_cta_subtitle', 'Both our Chislehurst locations offer NHS Pharmacy First — walk in during opening hours or book your slot online. Free treatment, expert pharmacists, no appointment needed.' ) ); ?></p>
        <div class="pf-cta-buttons">
          <a href="<?php echo esc_url( rl_field( 'pf_cta_cta1_url', home_url( '/book-appointment/' ) ) ); ?>" class="pf-cta-primary"><?php echo esc_html( rl_field( 'pf_cta_cta1_text', 'Book a Pharmacy First Appointment' ) ); ?></a>
          <a href="<?php echo esc_url( rl_field( 'pf_cta_cta2_url', home_url( '/contact/' ) ) ); ?>" class="pf-cta-secondary"><?php echo esc_html( rl_field( 'pf_cta_cta2_text', 'Find Your Nearest Location' ) ); ?></a>
        </div>
        <div class="pf-cta-checks">
          <span>✓ No referral needed</span>
          <span>✓ Seven conditions treated free</span>
          <span>✓ Same-day appointments at both locations</span>
        </div>
      </div>
      <!-- Divider -->
      <div class="pf-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="pf-footer-newsletter-row">
        <div class="pf-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert health tips, NHS service updates, and appointment reminders delivered to your inbox</p>
        </div>
        <form class="newsletter-form pf-footer-newsletter-form">
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
  <div class="pf-disclaimer">
    <div class="container">
      <?php echo esc_html( rl_field( 'pf_disclaimer', 'The NHS Pharmacy First service is available to patients registered with a GP in England. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. If your condition falls outside the scheme criteria, you will be referred to an appropriate NHS service. Information is accurate as of March 2026.' ) ); ?>
    </div>
  </div>

<?php get_footer(); ?>
