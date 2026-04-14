<?php
/**
 * Template Name: Vitamin B12
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ========== HERO SECTION ========== -->
  <section class="b12-hero">
    <div class="b12-hero-bg">
      <div class="b12-hero-orb b12-hero-orb-1"></div>
      <div class="b12-hero-orb b12-hero-orb-2"></div>
    </div>
    <div class="container b12-hero-container">
      <div class="b12-hero-grid">
        <div class="b12-hero-text">
          <div class="b12-hero-pill">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
            <span><?php echo esc_html( rl_field( 'b12_hero_pill', 'Private Injection Service' ) ); ?></span>
          </div>
          <h1 class="b12-hero-title"><?php echo wp_kses_post( rl_field( 'b12_hero_title', 'Vitamin B12 Injections in <span class="gradient-text">South East London</span>' ) ); ?></h1>
          <p class="b12-hero-subtitle"><?php echo esc_html( rl_field( 'b12_hero_subtitle', 'Boost your energy, lift brain fog, and address B12 deficiency with a fast-acting intramuscular injection. No GP referral needed. Walk-ins welcome at both Chislehurst pharmacies.' ) ); ?></p>
          <div class="b12-hero-ctas">
            <a href="#book" class="btn-primary b12-btn-lg">Book Your B12 Injection</a>
            <a href="#symptoms" class="btn-outline b12-btn-lg b12-btn-outline-hero">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
              Check If You're Deficient
            </a>
          </div>
          <div class="b12-trust-strip">
            <?php
            $b12_trust = rl_field( 'b12_hero_trust' );
            if ( $b12_trust && is_array( $b12_trust ) ) :
                $b12_trust_icons = array(
                    '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>',
                    '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
                    '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                    '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                );
                foreach ( $b12_trust as $i => $item ) : ?>
            <div class="b12-trust-item">
              <?php echo $b12_trust_icons[ $i % count( $b12_trust_icons ) ]; ?>
              <span><?php echo esc_html( $item['text'] ); ?></span>
            </div>
                <?php endforeach;
            else : ?>
            <div class="b12-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span>GPhC Registered</span>
            </div>
            <div class="b12-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <span>Walk-ins Welcome</span>
            </div>
            <div class="b12-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
              <span>Expert Pharmacists</span>
            </div>
            <div class="b12-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <span>No Referral Needed</span>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="b12-hero-visual">
          <?php $b12_hero_img = rl_field( 'b12_hero_image' ); ?>
          <img src="<?php echo esc_url( $b12_hero_img ?: 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&h=600&fit=crop' ); ?>" alt="Vitamin B12 injection South East London — pharmacist in professional setting">
          <div class="b12-hero-badge-premium">
            <div class="b12-badge-icon-wrap">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <div class="b12-badge-text">
              <span class="b12-badge-label">GPhC Registered</span>
              <span class="b12-badge-sublabel">Hydroxocobalamin</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STATS SECTION ========== -->
  <section class="b12-stats-section">
    <div class="container">
      <div class="b12-stats-grid">
        <?php
        $b12_stats = rl_field( 'b12_stats' );
        if ( $b12_stats && is_array( $b12_stats ) ) :
            foreach ( $b12_stats as $stat ) : ?>
        <div class="b12-stat-card b12-revealed">
          <div class="b12-stat-number"><?php echo esc_html( $stat['number'] ); ?></div>
          <div class="b12-stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="b12-stat-card b12-revealed">
          <div class="b12-stat-number">1 in 5</div>
          <div class="b12-stat-label">UK adults have low B12 levels</div>
        </div>
        <div class="b12-stat-card b12-revealed">
          <div class="b12-stat-number">100%</div>
          <div class="b12-stat-label">Absorption via injection vs ~50% from tablets</div>
        </div>
        <div class="b12-stat-card b12-revealed">
          <div class="b12-stat-number">24–72h</div>
          <div class="b12-stat-label">When most people notice improved energy</div>
        </div>
        <div class="b12-stat-card b12-revealed">
          <div class="b12-stat-number">15 min</div>
          <div class="b12-stat-label">Quick in-clinic appointment</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ========== WHAT IS B12 SECTION ========== -->
  <section class="b12-about-section">
    <div class="container">
      <div class="b12-about-grid">
        <div class="b12-about-visual">
          <?php $b12_about_img = rl_field( 'b12_about_image' ); ?>
          <img src="<?php echo esc_url( $b12_about_img ?: 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=600&h=700&fit=crop' ); ?>" alt="Vitamin B12 deficiency symptoms and health effects">
          <div class="b12-about-badge">
            <div class="b12-badge-stat"><?php echo esc_html( rl_field( 'b12_about_badge', '6–8 wks' ) ); ?></div>
            <div class="b12-badge-desc"><?php echo esc_html( rl_field( 'b12_about_badge_desc', 'How long a single injection can sustain optimal B12 levels' ) ); ?></div>
          </div>
        </div>
        <div class="b12-about-content">
          <span class="b12-eyebrow"><?php echo esc_html( rl_field( 'b12_about_eyebrow', 'THE ESSENTIAL VITAMIN' ) ); ?></span>
          <h2 class="section-title b12-left-title"><?php echo wp_kses_post( rl_field( 'b12_about_heading', 'Why Vitamin B12 matters more than <span class="gradient-text">you think</span>' ) ); ?></h2>
          <p class="b12-intro-text"><?php echo esc_html( rl_field( 'b12_about_intro', 'Vitamin B12 is essential for red blood cell production, nerve function, and DNA synthesis. Your body can\'t make it — you have to get it from food or supplements. Many people are chronically low without knowing it.' ) ); ?></p>

          <div class="b12-fact-cards">
            <?php
            $b12_facts = rl_field( 'b12_about_facts' );
            if ( $b12_facts && is_array( $b12_facts ) ) :
                $fact_icons = array(
                    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
                    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
                    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
                );
                foreach ( $b12_facts as $i => $fact ) : ?>
            <div class="b12-fact-card b12-revealed">
              <div class="b12-fact-icon"><?php echo $fact_icons[ $i % count( $fact_icons ) ]; ?></div>
              <div>
                <h4><?php echo esc_html( $fact['title'] ); ?></h4>
                <p><?php echo esc_html( $fact['description'] ); ?></p>
              </div>
            </div>
                <?php endforeach;
            else : ?>
            <div class="b12-fact-card b12-revealed">
              <div class="b12-fact-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
              <div><h4>Energy Production</h4><p>B12 is critical for converting food into cellular energy. Low levels leave mitochondria unable to function properly, causing chronic fatigue no amount of sleep fixes.</p></div>
            </div>
            <div class="b12-fact-card">
              <div class="b12-fact-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div>
              <div><h4>Brain &amp; Nerve Health</h4><p>B12 maintains the myelin sheath protecting your nerves. Deficiency causes brain fog, memory issues, pins and needles, and in severe cases, irreversible nerve damage.</p></div>
            </div>
            <div class="b12-fact-card">
              <div class="b12-fact-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
              <div><h4>Red Blood Cell Formation</h4><p>Without adequate B12, red blood cells become abnormally large and can't carry oxygen efficiently — leading to anaemia, shortness of breath, and persistent weakness.</p></div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SYMPTOMS / WHO NEEDS IT ========== -->
  <section class="b12-symptoms-section" id="symptoms">
    <div class="b12-symptoms-bg">
      <div class="b12-symp-orb b12-symp-orb-1"></div>
      <div class="b12-symp-orb b12-symp-orb-2"></div>
    </div>
    <div class="container b12-symptoms-container">
      <div class="destinations-header">
        <div class="destinations-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          <span><?php echo esc_html( rl_field( 'b12_symptoms_pill', 'Recognise the Signs' ) ); ?></span>
        </div>
        <h2 class="destinations-title"><?php echo wp_kses_post( rl_field( 'b12_symptoms_title', 'Could you be B12 <br class="destinations-br-md">deficient?' ) ); ?></h2>
        <p class="destinations-desc"><?php echo esc_html( rl_field( 'b12_symptoms_desc', 'B12 deficiency often goes undiagnosed for years. These symptoms are commonly dismissed as stress or ageing — but they may have a simple, correctable cause.' ) ); ?></p>
      </div>

      <div class="b12-symptoms-grid">
        <?php
        $b12_symptoms = rl_field( 'b12_symptoms_cards' );
        if ( $b12_symptoms && is_array( $b12_symptoms ) ) :
            $symp_icons = array(
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>',
            );
            foreach ( $b12_symptoms as $i => $card ) : ?>
        <div class="b12-symptom-card b12-revealed">
          <div class="b12-symptom-icon"><?php echo $symp_icons[ $i % count( $symp_icons ) ]; ?></div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <p><?php echo esc_html( $card['description'] ); ?></p>
        </div>
            <?php endforeach;
        else : ?>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>Extreme Tiredness &amp; Fatigue</h3><p>Persistent exhaustion even after adequate sleep. Feeling drained after minimal exertion or struggling to get through the day.</p></div>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div><h3>Brain Fog &amp; Poor Concentration</h3><p>Difficulty focusing, forgetfulness, mental cloudiness. Tasks that used to be easy feel mentally draining.</p></div>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div><h3>Pins &amp; Needles</h3><p>Tingling or numbness in hands, feet, or legs — a sign of nerve involvement. Can worsen significantly without treatment.</p></div>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div><h3>Shortness of Breath</h3><p>Reduced red blood cell production means less oxygen reaches muscles and organs. Even light activity can leave you breathless.</p></div>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><h3>Low Mood &amp; Irritability</h3><p>B12 is involved in serotonin production. Deficiency can contribute to depressive symptoms, anxiety, and mood instability.</p></div>
        <div class="b12-symptom-card b12-revealed"><div class="b12-symptom-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg></div><h3>Pale or Jaundiced Skin</h3><p>A yellowing or pallor to skin and whites of eyes can indicate B12-related anaemia affecting red blood cell production and breakdown.</p></div>
        <?php endif; ?>
      </div>

      <div class="b12-at-risk-note">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
        <?php echo wp_kses_post( rl_field( 'b12_at_risk_note', '<p><strong>Higher risk groups:</strong> Vegans &amp; vegetarians, over-50s, people with IBS/Crohn\'s/coeliac, those taking metformin or proton pump inhibitors, and anyone with pernicious anaemia.</p>' ) ); ?>
      </div>
    </div>
  </section>

  <!-- ========== INJECTION VS TABLETS ========== -->
  <section class="b12-compare-section" id="why-injection">
    <div class="container">
      <h2 class="section-title"><?php echo wp_kses_post( rl_field( 'b12_compare_title', 'Injection vs <span class="gradient-text">oral supplements</span>' ) ); ?></h2>
      <p class="section-subtitle"><?php echo esc_html( rl_field( 'b12_compare_subtitle', 'Not all B12 is absorbed equally. Here\'s why injections are far superior for those with deficiency or poor gut absorption.' ) ); ?></p>
      <div class="b12-compare-grid">
        <div class="b12-compare-card b12-compare-winner b12-revealed">
          <div class="b12-compare-header b12-header-winner">
            <div class="b12-compare-badge">Recommended</div>
            <div class="b12-compare-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
            </div>
            <h3>Intramuscular Injection</h3>
          </div>
          <div class="b12-compare-body">
            <ul class="b12-compare-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><strong>100% absorption</strong> — bypasses digestive system entirely</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Results felt within 24–72 hours</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Effective even with gut absorption problems</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Lasts 6–8 weeks per injection</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Nothing to remember daily</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Ideal for vegans, IBS, Crohn's, coeliac, metformin users</li>
            </ul>
          </div>
        </div>
        <div class="b12-compare-card b12-revealed">
          <div class="b12-compare-header">
            <div class="b12-compare-icon b12-icon-muted">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
            </div>
            <h3>Oral Tablets / Sprays</h3>
          </div>
          <div class="b12-compare-body">
            <ul class="b12-compare-list b12-compare-list-muted">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Only 40–50% absorbed in healthy gut</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Much less effective with gut conditions</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Results take weeks to feel</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Must remember to take daily</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Ineffective for pernicious anaemia</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>Poor compliance leads to continued deficiency</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== HOW IT WORKS ========== -->
  <section class="b12-process-section" id="process">
    <div class="container">
      <h2 class="section-title"><?php echo wp_kses_post( rl_field( 'b12_process_title', 'Your B12 injection <span class="gradient-text">appointment</span>' ) ); ?></h2>
      <p class="section-subtitle"><?php echo esc_html( rl_field( 'b12_process_subtitle', 'A quick, simple process — from walking in to feeling better, usually within 15 minutes.' ) ); ?></p>
      <div class="b12-steps-grid">
        <?php
        $b12_steps = rl_field( 'b12_process_steps' );
        if ( $b12_steps && is_array( $b12_steps ) ) :
            foreach ( $b12_steps as $i => $step ) :
                $step_img   = isset( $step['image'] ) ? $step['image'] : '';
                $step_title = isset( $step['title'] ) ? $step['title'] : '';
                $step_desc  = isset( $step['description'] ) ? $step['description'] : '';
                $step_meta  = isset( $step['meta'] ) ? $step['meta'] : '';
                ?>
        <div class="b12-step-card">
          <?php if ( $step_img ) : ?>
          <div class="b12-step-image">
            <img src="<?php echo esc_url( $step_img ); ?>" alt="<?php echo esc_attr( $step_title ); ?>">
          </div>
          <?php endif; ?>
          <div class="b12-step-content">
            <span class="b12-step-label">Step <?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
            <h3><?php echo esc_html( $step_title ); ?></h3>
            <p><?php echo esc_html( $step_desc ); ?></p>
            <?php if ( $step_meta ) : ?>
            <span class="b12-step-meta"><?php echo esc_html( $step_meta ); ?></span>
            <?php endif; ?>
          </div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="b12-step-card">
          <div class="b12-step-image">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Brief consultation with pharmacist before B12 injection">
          </div>
          <div class="b12-step-content">
            <span class="b12-step-label">Step 01</span>
            <h3>Brief Consultation</h3>
            <p>Our pharmacist takes a brief health history to ensure a B12 injection is appropriate for you. Walk-ins are welcome — no appointment necessary. The whole process takes under 15 minutes.</p>
            <span class="b12-step-meta">No GP referral needed</span>
          </div>
        </div>
        <div class="b12-step-card">
          <div class="b12-step-image">
            <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=600&h=400&fit=crop" alt="Vitamin B12 intramuscular injection administered by pharmacist">
          </div>
          <div class="b12-step-content">
            <span class="b12-step-label">Step 02</span>
            <h3>The Injection</h3>
            <p>Hydroxocobalamin is administered as a quick intramuscular injection, typically into the upper arm. It takes seconds, with minimal discomfort. No special preparation required beforehand.</p>
            <span class="b12-step-meta">Takes less than 60 seconds</span>
          </div>
        </div>
        <div class="b12-step-card">
          <div class="b12-step-image">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop" alt="Post-injection aftercare and ongoing B12 maintenance programme">
          </div>
          <div class="b12-step-content">
            <span class="b12-step-label">Step 03</span>
            <h3>Aftercare &amp; Repeat Schedule</h3>
            <p>Most people notice improved energy within 24–72 hours. For ongoing wellbeing, monthly or bi-monthly injections are typical. We'll recommend a maintenance schedule based on your symptoms and lifestyle.</p>
            <span class="b12-step-meta">Easy ongoing programme</span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ========== BENEFITS SECTION ========== -->
  <section class="b12-benefits-section" id="benefits">
    <div class="container">
      <h2 class="section-title"><?php echo wp_kses_post( rl_field( 'b12_benefits_title', 'Benefits most people <span class="gradient-text">notice</span>' ) ); ?></h2>
      <p class="section-subtitle"><?php echo esc_html( rl_field( 'b12_benefits_subtitle', 'B12 injections can produce noticeable improvements across multiple aspects of daily health and wellbeing.' ) ); ?></p>
      <div class="b12-benefits-grid">
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Sustained Energy</h3>
          <p>Move from dragging through the day to feeling genuinely alert and engaged — without relying on excessive caffeine.</p>
        </div>
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Sharper Mental Clarity</h3>
          <p>Brain fog lifts, concentration improves, and memory becomes more reliable — many people describe it as "thinking clearly again."</p>
        </div>
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Improved Mood</h3>
          <p>B12 supports serotonin synthesis. Many people experience a positive lift in mood, reduced irritability, and greater emotional resilience.</p>
        </div>
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </div>
          <h3>Nerve Health</h3>
          <p>Tingling, numbness, and pins &amp; needles in hands and feet often reduce significantly once B12 levels are restored to normal range.</p>
        </div>
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Better Sleep Quality</h3>
          <p>B12 supports melatonin regulation. Restoring optimal levels can help normalise sleep patterns and reduce insomnia symptoms.</p>
        </div>
        <div class="b12-benefit-card b12-revealed">
          <div class="b12-benefit-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Immune Support</h3>
          <p>B12 plays a role in white blood cell production. Maintaining optimal levels helps support your immune system's ability to fight infections.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PRICING SECTION ========== -->
  <section class="b12-pricing-section" id="book">
    <div class="b12-symptoms-bg">
      <div class="b12-symp-orb b12-symp-orb-1"></div>
      <div class="b12-symp-orb b12-symp-orb-2"></div>
    </div>
    <div class="container b12-symptoms-container">
      <div class="destinations-header">
        <div class="destinations-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <span><?php echo esc_html( rl_field( 'b12_pricing_pill', 'Transparent Pricing' ) ); ?></span>
        </div>
        <h2 class="destinations-title"><?php echo wp_kses_post( rl_field( 'b12_pricing_title', 'Simple, affordable <br class="destinations-br-md">B12 injection pricing' ) ); ?></h2>
        <p class="destinations-desc"><?php echo esc_html( rl_field( 'b12_pricing_desc', 'No hidden fees. Competitive private pricing with no GP referral or waiting list required.' ) ); ?></p>
      </div>

      <div class="b12-pricing-grid">
        <div class="b12-pricing-card b12-revealed">
          <div class="b12-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 2 4 4"/><path d="m17 7 3-3"/><path d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5"/><path d="m9 11 4 4"/><path d="m5 19-3 3"/><path d="m14 4 6 6"/></svg>
          </div>
          <h3>Single Injection</h3>
          <div class="b12-pricing-value b12-pricing-value--tbc">Price to be confirmed</div>
          <p class="b12-pricing-desc">Single hydroxocobalamin injection. No appointment needed — walk in during pharmacy hours.</p>
        </div>
        <div class="b12-pricing-card b12-pricing-featured b12-revealed">
          <div class="b12-pricing-badge">Best Value</div>
          <div class="b12-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3>Course of 3</h3>
          <div class="b12-pricing-value b12-pricing-value--tbc">Price to be confirmed</div>
          <ul class="b12-pricing-items">
            <li>3 injections over 3 months</li>
            <li>Ideal for first-time patients</li>
            <li>Pharmacist advice included</li>
            <li>Save vs single sessions</li>
          </ul>
        </div>
        <div class="b12-pricing-card b12-revealed">
          <div class="b12-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Maintenance Plan</h3>
          <div class="b12-pricing-value b12-pricing-value--tbc">Price to be confirmed</div>
          <p class="b12-pricing-desc">Ongoing monthly injections for sustained wellbeing. Perfect for vegans, active professionals, and those managing deficiency long-term.</p>
        </div>
      </div>

      <p class="b12-pricing-note"><?php echo esc_html( rl_field( 'b12_pricing_note', 'Prices may vary — call for current pricing. NHS B12 injections available for clinically diagnosed deficiency with GP referral.' ) ); ?></p>

      <div class="b12-pricing-ctas">
        <a href="#book" class="btn-primary b12-btn-lg">Book Your B12 Injection</a>
        <a href="#symptoms" class="btn-outline b12-btn-lg b12-btn-outline-hero">Check If You're Deficient</a>
      </div>
    </div>
  </section>

  <!-- ========== LOCATIONS SECTION ========== -->
  <section class="locations-section" id="locations">
    <div class="container">
      <h2 class="section-title"><?php echo wp_kses_post( rl_field( 'b12_locations_title', 'Two South East London <span class="gradient-text">locations</span>' ) ); ?></h2>
      <p class="section-subtitle"><?php echo esc_html( rl_field( 'b12_locations_subtitle', 'B12 injections available at both pharmacies — walk-ins welcome, no appointment needed.' ) ); ?></p>
      <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="b12-faq-section" id="faq">
    <div class="container">
      <h2 class="section-title">Vitamin B12 Injection <span class="gradient-text-light">FAQs</span></h2>
      <p class="section-subtitle">Common questions about B12 injections, deficiency, and our private service.</p>
      <div class="b12-faq-list">
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">How quickly will I feel the effects?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>Most people notice improved energy, mood, and mental clarity within 24–72 hours. Those with significant deficiency may feel results even faster. Full benefit builds over the first few weeks.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">Do I need a blood test first?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>You don't need a blood test for our private service. However, if you suspect deficiency, getting your levels checked first is useful to track improvement. Our pharmacist can advise based on your symptoms at the consultation.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">Is a B12 injection better than tablets?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>Yes, for most people experiencing deficiency symptoms. Injections guarantee 100% absorption by bypassing the digestive system. Tablets rely on gut absorption and intrinsic factor — both of which can be impaired in many common conditions.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">How often do I need B12 injections?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>For general wellbeing, monthly injections are typical. For diagnosed deficiency or symptomatic treatment, a loading dose course (3 injections over 2-4 weeks) may be recommended first, then maintenance every 8–12 weeks. We'll tailor a schedule to your needs.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">Does the injection hurt?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>Most people describe a brief mild sting — similar to a flu jab. The injection takes only a few seconds. Some experience mild tenderness at the injection site for a day or two afterwards, which is completely normal.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">I'm vegan — how often should I have injections?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>Vegans get no dietary B12 from animal products and are at high risk of deficiency. Monthly injections are a reliable maintenance strategy. Many vegans prefer injections over daily supplements for the guaranteed absorption and convenience.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">Can I get B12 injections on the NHS?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>NHS B12 injections are available for clinically diagnosed deficiency or pernicious anaemia, but require a GP referral and often have waiting times. Our private service offers fast access with no referral needed — ideal if you want to start treatment quickly.</p></div>
        </div>
        <div class="b12-faq-item">
          <button class="b12-faq-trigger">Are there any side effects?<svg class="b12-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
          <div class="b12-faq-content"><p>B12 injections are extremely safe. The most common experience is mild soreness at the injection site for 24–48 hours. Some people notice a temporary skin flush. Serious reactions are very rare. B12 is water-soluble — your body excretes any excess naturally.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA ========== -->
  <section class="cta-section" id="cta">
    <div class="cta-content-full">
      <div class="b12-cta-badges">
        <?php
        $b12_cta_badges = rl_field( 'b12_cta_badges' );
        if ( $b12_cta_badges && is_array( $b12_cta_badges ) ) :
            foreach ( $b12_cta_badges as $badge ) : ?>
        <span class="b12-cta-badge"><?php echo esc_html( $badge['text'] ); ?></span>
            <?php endforeach;
        else : ?>
        <span class="b12-cta-badge">Walk-ins Welcome</span>
        <span class="b12-cta-badge">No Referral Needed</span>
        <span class="b12-cta-badge">GPhC Registered</span>
        <?php endif; ?>
      </div>
      <h2><?php echo esc_html( rl_field( 'b12_cta_title', 'Feel the difference a B12 injection makes' ) ); ?></h2>
      <p><?php echo esc_html( rl_field( 'b12_cta_subtitle', 'Don\'t let low B12 leave you tired, foggy, and running below your potential. Our pharmacists are ready to help — same day, no fuss.' ) ); ?></p>
      <div class="cta-buttons">
        <a href="#book" class="btn-cta-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          Book B12 Injection Now
        </a>
        <a href="#locations" class="btn-secondary b12-btn-lg">View Our Locations</a>
      </div>
      <div class="b12-cta-checks">
        <span>✓ Hydroxocobalamin injection</span>
        <span>✓ Results in 24–72 hours</span>
        <span>✓ Walk-ins at both locations</span>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->

<?php get_footer(); ?>
