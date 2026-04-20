<?php
/**
 * Template Name: Yellow Fever Vaccine
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="yf-hero">
    <div class="container">
      <div class="yf-hero-grid">
        <div class="yf-hero-text">
          <div class="yf-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><circle cx="12" cy="12" r="3"/></svg>
            <?php echo esc_html( rl_field( 'yf_hero_eyebrow', 'NaTHNaC Registered  |  Yellow Fever Vaccination Centre' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'yf_hero_title', 'Yellow Fever Vaccine London: <span class="gradient-text">Official Vaccination Centre</span> in Chislehurst' ) ); ?></h1>
          <p class="yf-hero-sub"><?php echo esc_html( rl_field( 'yf_hero_subtitle', 'Registered Yellow Fever Vaccination Centre serving South East London. Lifetime protection with official International Certificate included. Same-day appointments available at our Chislehurst pharmacies.' ) ); ?></p>

          <div class="yf-hero-trust">
            <?php
            $yf_trust_badges = rl_field( 'yf_hero_trust_badges' );
            if ( $yf_trust_badges && is_array( $yf_trust_badges ) ) :
                foreach ( $yf_trust_badges as $badge ) : ?>
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $badge['text'] ); ?></span>
                <?php endforeach;
            else : ?>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> NaTHNaC Registered Centre</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Official ICVP Certificate</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered Pharmacists</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Valid for Life</span>
            <?php endif; ?>
          </div>

          <div class="yf-hero-ctas">
            <a href="#book" class="yf-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Yellow Fever Vaccination
            </a>
            <a href="tel:02084673158" class="yf-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Check if You Need Certificate
            </a>
          </div>
        </div>

        <div class="yf-hero-visual">
          <div class="yf-hero-visual-inner">
            <?php $yf_hero_img = rl_field( 'yf_hero_image' ); ?>
            <img src="<?php echo esc_url( $yf_hero_img ?: 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=800&q=80&auto=format&fit=crop' ); ?>" alt="Traveller overlooking African savanna landscape — yellow fever vaccination for travel protection" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="yf-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="yf-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          <?php echo esc_html( rl_field( 'yf_keyfacts_pill', 'At a Glance' ) ); ?>
        </div>
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_keyfacts_title', 'Key Facts About the Yellow Fever Vaccine' ) ); ?></h2>
      </div>
      <div class="yf-quick-grid yf-reveal">
        <?php
        $yf_keyfacts = rl_field( 'yf_keyfacts_cards' );
        if ( $yf_keyfacts && is_array( $yf_keyfacts ) ) :
            $kf_icons = array(
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
            );
            foreach ( $yf_keyfacts as $i => $card ) : ?>
        <div class="yf-quick-card">
          <div class="yf-quick-icon"><?php echo $kf_icons[ $i % count( $kf_icons ) ]; ?></div>
          <div class="yf-quick-stat"><?php echo esc_html( $card['stat'] ); ?></div>
          <div class="yf-quick-label"><?php echo esc_html( $card['label'] ); ?></div>
        </div>
            <?php endforeach;
        else : ?>
        <div class="yf-quick-card">
          <div class="yf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="yf-quick-stat">Lifetime</div>
          <div class="yf-quick-label">Single dose provides lifelong immunity</div>
        </div>
        <div class="yf-quick-card">
          <div class="yf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg></div>
          <div class="yf-quick-stat">Official ICVP</div>
          <div class="yf-quick-label">International Certificate of Vaccination included</div>
        </div>
        <div class="yf-quick-card">
          <div class="yf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <div class="yf-quick-stat">20 Minutes</div>
          <div class="yf-quick-label">Consultation + vaccination appointment</div>
        </div>
        <div class="yf-quick-card">
          <div class="yf-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="yf-quick-stat">2 Locations</div>
          <div class="yf-quick-label">Chislehurst pharmacies serving South East London</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== UNDERSTANDING YELLOW FEVER ===================== -->
  <section class="yf-section-white" id="about">
    <div class="container">
      <div class="yf-two-col yf-reveal">
        <div>
          <span class="yf-eyebrow"><?php echo esc_html( rl_field( 'yf_understanding_eyebrow', 'What You Need to Know' ) ); ?></span>
          <h2 class="yf-section-title"><?php echo esc_html( rl_field( 'yf_understanding_heading', 'What is Yellow Fever?' ) ); ?></h2>
          <?php
          $yf_understanding_body = rl_field( 'yf_understanding_body' );
          if ( $yf_understanding_body ) :
              echo wp_kses_post( $yf_understanding_body );
          else : ?>
          <p class="yf-body-text">Yellow Fever is a serious viral disease transmitted by infected mosquitoes in tropical regions of Africa and South America. The virus can cause severe illness with a <strong>mortality rate exceeding 50%</strong> in those who develop serious symptoms.</p>
          <p class="yf-body-text">While yellow fever is not found in the UK or Europe, travellers visiting endemic areas face significant risk. The disease cannot be treated once contracted — <strong>vaccination is the only effective prevention.</strong></p>
          <p class="yf-body-text">Many countries legally require proof of yellow fever vaccination for entry, even if you're just transiting through an airport in an affected region. Without an official International Certificate of Vaccination or Prophylaxis (ICVP), you may be <strong>denied boarding, quarantined on arrival, or refused entry entirely.</strong></p>
          <?php endif; ?>

          <div class="yf-stat-grid">
            <?php
            $yf_understanding_stats = rl_field( 'yf_understanding_stats' );
            if ( $yf_understanding_stats && is_array( $yf_understanding_stats ) ) :
                foreach ( $yf_understanding_stats as $stat ) : ?>
            <div class="yf-stat-box">
              <div class="yf-stat-num"><?php echo esc_html( $stat['number'] ); ?></div>
              <div class="yf-stat-desc"><?php echo esc_html( $stat['description'] ); ?></div>
            </div>
                <?php endforeach;
            else : ?>
            <div class="yf-stat-box">
              <div class="yf-stat-num">200,000</div>
              <div class="yf-stat-desc">Estimated cases globally per year</div>
            </div>
            <div class="yf-stat-box">
              <div class="yf-stat-num">30–60K</div>
              <div class="yf-stat-desc">Deaths annually worldwide</div>
            </div>
            <div class="yf-stat-box">
              <div class="yf-stat-num">50%+</div>
              <div class="yf-stat-desc">Mortality rate in severe cases</div>
            </div>
            <div class="yf-stat-box">
              <div class="yf-stat-num">99%</div>
              <div class="yf-stat-desc">Protection with vaccination</div>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="yf-visual-placeholder">
          <?php $yf_understanding_img = rl_field( 'yf_understanding_image' ); ?>
          <img src="<?php echo esc_url( $yf_understanding_img ?: 'https://images.unsplash.com/photo-1516426122078-c23e76319801?w=800&q=80&auto=format&fit=crop' ); ?>" alt="Mosquito close-up on tropical leaf — yellow fever is transmitted by infected mosquitoes" loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHY YOU NEED IT ===================== -->
  <section class="yf-section-white" id="why-vaccinate">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_why_need_title', 'Why You Need the Yellow Fever Vaccine' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_why_need_subtitle', 'Three compelling reasons why yellow fever vaccination is essential for travel to affected regions — not optional.' ) ); ?></p>
      </div>

      <div class="yf-need-grid yf-reveal">
        <?php
        $yf_why_need_cards = rl_field( 'yf_why_need_cards' );
        if ( $yf_why_need_cards && is_array( $yf_why_need_cards ) ) :
            foreach ( $yf_why_need_cards as $i => $card ) : ?>
        <div class="yf-need-card">
          <div class="yf-need-num"><?php echo esc_html( $i + 1 ); ?></div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <?php echo wp_kses_post( $card['body'] ); ?>
        </div>
            <?php endforeach;
        else : ?>
        <div class="yf-need-card">
          <div class="yf-need-num">1</div>
          <h3>Legal Entry Requirement</h3>
          <p>Many countries in Africa, South America, and Asia require a valid yellow fever certificate for entry. This includes countries with <strong>no yellow fever risk</strong> but requiring proof if you've travelled from endemic areas. Your certificate becomes valid <strong>10 days after vaccination</strong>.</p>
        </div>
        <div class="yf-need-card">
          <div class="yf-need-num">2</div>
          <h3>Serious Disease Prevention</h3>
          <p>Yellow fever begins with fever, headache, and muscle pain. In 15% of cases, it progresses to liver and kidney failure, bleeding, and organ damage. <strong>Half of those who develop severe symptoms die.</strong> Vaccination provides 99% protection.</p>
        </div>
        <div class="yf-need-card">
          <div class="yf-need-num">3</div>
          <h3>Lifetime Protection</h3>
          <p>Unlike many travel vaccines, yellow fever vaccination provides <strong>lifelong immunity from a single dose.</strong> Your official certificate is valid for life, even if it shows an old expiry date — certificates issued before 2016 are still valid under WHO rules.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== LIFESTYLE BANNER 1 ===================== -->
  <div class="yf-lifestyle-banner">
    <?php $yf_banner1_img = rl_field( 'yf_banner1_image' ); ?>
    <img src="<?php echo esc_url( $yf_banner1_img ?: 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?w=1600&q=80&auto=format&fit=crop' ); ?>" alt="African safari landscape at golden hour — yellow fever vaccination essential for travel to sub-Saharan Africa" loading="lazy" />
    <div class="yf-lifestyle-banner-overlay">
      <div class="yf-lifestyle-banner-caption">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <div>
          <strong><?php echo esc_html( rl_field( 'yf_banner1_title', '40+ Countries Require Certification' ) ); ?></strong>
          <span><?php echo esc_html( rl_field( 'yf_banner1_text', 'Protect yourself before exploring Africa & South America' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== WHERE IS YELLOW FEVER FOUND ===================== -->
  <section class="yf-section-dark" id="risk-areas">
    <div class="container">
      <div style="text-align:center;">
        <div class="yf-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <?php echo esc_html( rl_field( 'yf_risk_pill', 'Risk Areas' ) ); ?>
        </div>
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_risk_title', 'Yellow Fever Risk Areas' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_risk_subtitle', 'Yellow fever is endemic across large areas of sub-Saharan Africa and South America. If your itinerary passes through or near these regions, you almost certainly need vaccination and certification.' ) ); ?></p>
      </div>

      <div class="yf-risk-two-col yf-reveal">
        <div class="yf-risk-col">
          <h3>
            <span class="yf-risk-flag">🌍</span>
            Africa
          </h3>
          <p style="font-size:15px;color:var(--text-gray);margin-bottom:18px;line-height:1.6;"><?php echo esc_html( rl_field( 'yf_risk_africa_body', 'Sub-Saharan Africa (47 countries at risk). West Africa carries the highest risk.' ) ); ?></p>
          <?php
          $yf_risk_africa_list = rl_field( 'yf_risk_africa_list' );
          if ( $yf_risk_africa_list ) :
              echo wp_kses_post( $yf_risk_africa_list );
          else : ?>
          <ul class="yf-risk-list">
            <li>Ghana, Nigeria, Senegal, Côte d'Ivoire (West Africa — highest risk)</li>
            <li>Kenya, Ethiopia, Tanzania, Uganda (East Africa)</li>
            <li>Democratic Republic of Congo, Cameroon, Sudan (Central Africa)</li>
            <li>Angola, Zambia, Zimbabwe (Southern Africa risk zones)</li>
            <li>South Africa (some border regions only)</li>
          </ul>
          <?php endif; ?>
        </div>
        <div class="yf-risk-col">
          <h3>
            <span class="yf-risk-flag">🌎</span>
            South America
          </h3>
          <p style="font-size:15px;color:var(--text-gray);margin-bottom:18px;line-height:1.6;"><?php echo esc_html( rl_field( 'yf_risk_americas_body', 'Central and South America (13 countries). Amazon rainforest regions carry the highest risk.' ) ); ?></p>
          <?php
          $yf_risk_americas_list = rl_field( 'yf_risk_americas_list' );
          if ( $yf_risk_americas_list ) :
              echo wp_kses_post( $yf_risk_americas_list );
          else : ?>
          <ul class="yf-risk-list">
            <li>Brazil (Amazon basin, north and central states)</li>
            <li>Peru, Colombia, Ecuador (Andean and Amazon regions)</li>
            <li>Bolivia, Venezuela, Guyana, Suriname</li>
            <li>Panama, Trinidad and Tobago</li>
            <li>Argentina and Paraguay (border risk zones)</li>
          </ul>
          <?php endif; ?>
        </div>
      </div>

      <div class="yf-transit-box yf-reveal">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        <?php
        $yf_risk_transit = rl_field( 'yf_risk_transit_warning' );
        if ( $yf_risk_transit ) :
            echo '<div>' . wp_kses_post( $yf_risk_transit ) . '</div>';
        else : ?>
        <div>
          <strong style="display:block;margin-bottom:8px;color:var(--primary-blue);">Transit Warning — Don't Overlook This</strong>
          Even if your destination doesn't have yellow fever, you may need a certificate if <strong>transiting through affected countries.</strong> For example, travelling UK → Kenya → Seychelles requires a certificate for Seychelles entry, despite no yellow fever in Seychelles. The same applies to many Asian and island nations. We check your complete itinerary during consultation.
          <br>
          <a href="tel:02084673158" class="yf-transit-box-cta" style="margin-top:18px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 2 4.11 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L8.27 7.95a16 16 0 0 0 6.78 6.78l1.42-1.42A12.84 12.84 0 0 0 19.28 14 2 2 0 0 1 22 16.92z"/></svg>
            Check Your Country Requirements
          </a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== WHO SHOULD GET VACCINATED ===================== -->
  <section class="yf-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_who_title', 'Who Should Get the Yellow Fever Vaccine?' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_who_subtitle', 'Yellow fever vaccination is recommended for all eligible travellers visiting or transiting endemic regions. Our pharmacist will assess your individual circumstances.' ) ); ?></p>
      </div>

      <div class="yf-who-grid yf-reveal">
        <?php
        $yf_who_cards = rl_field( 'yf_who_cards' );
        if ( $yf_who_cards && is_array( $yf_who_cards ) ) :
            $who_icons = array(
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 12 20a19.45 19.45 0 0 1-4.83-2.78M2.11 2A19.79 19.79 0 0 0 2 12a19.79 19.79 0 0 0 3.09 8.67"/><path d="M6.5 6.5h11"/><path d="M17 3l-5 5-5-5"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>',
            );
            foreach ( $yf_who_cards as $i => $card ) : ?>
        <div class="yf-who-card">
          <div class="yf-who-icon">
            <?php echo $who_icons[ $i % count( $who_icons ) ]; ?>
          </div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <p><?php echo esc_html( $card['description'] ); ?></p>
        </div>
            <?php endforeach;
        else : ?>
        <!-- Card 1 -->
        <div class="yf-who-card">
          <div class="yf-who-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 12 20a19.45 19.45 0 0 1-4.83-2.78M2.11 2A19.79 19.79 0 0 0 2 12a19.79 19.79 0 0 0 3.09 8.67"/><path d="M6.5 6.5h11"/><path d="M17 3l-5 5-5-5"/></svg>
          </div>
          <h3>Travellers to Endemic Areas</h3>
          <p>Anyone aged 9 months or older travelling to or through countries where yellow fever occurs or where a certificate is required for entry. This includes tourists, business travellers, volunteers, and those visiting friends and family.</p>
        </div>
        <!-- Card 2 -->
        <div class="yf-who-card">
          <div class="yf-who-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3>People Transiting Affected Countries</h3>
          <p>Even if you're not staying in a yellow fever country, transiting through airports in endemic regions may require certification for onward travel. Many Asian and island nations require proof if arriving from Africa or South America.</p>
        </div>
        <!-- Card 3 -->
        <div class="yf-who-card">
          <div class="yf-who-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
          </div>
          <h3>Laboratory Workers</h3>
          <p>Researchers and laboratory staff who may be exposed to yellow fever virus through their work. Vaccination provides essential protection against accidental exposure or aerosol transmission in controlled research environments.</p>
        </div>
        <?php endif; ?>
      </div>

      <div class="yf-info-box">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <?php
        $yf_who_info = rl_field( 'yf_who_info_box' );
        if ( $yf_who_info ) :
            echo wp_kses_post( $yf_who_info );
        else : ?>
        The yellow fever vaccine is suitable from <strong>9 months of age</strong>. Infants under 9 months, severely immunocompromised individuals, and those with certain conditions may not be eligible. Our pharmacist will assess your suitability during consultation.
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== LIFESTYLE BANNER 2 ===================== -->
  <div class="yf-lifestyle-banner">
    <?php $yf_banner2_img = rl_field( 'yf_banner2_image' ); ?>
    <img src="<?php echo esc_url( $yf_banner2_img ?: 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=1600&q=80&auto=format&fit=crop' ); ?>" alt="Pharmacist preparing travel vaccination in clinical setting" loading="lazy" />
    <div class="yf-lifestyle-banner-overlay">
      <div class="yf-lifestyle-banner-caption">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        <div>
          <strong><?php echo esc_html( rl_field( 'yf_banner2_title', 'Professional Travel Health Service' ) ); ?></strong>
          <span><?php echo esc_html( rl_field( 'yf_banner2_text', 'GPhC-registered pharmacists · Consultation + vaccine + certificate in 20 minutes' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== VACCINATION PROCESS ===================== -->
  <section class="yf-section-white" id="how-it-works">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_process_title', 'What to Expect at Your Appointment' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_process_subtitle', 'A streamlined, professional vaccination experience. From consultation to certified ICVP in under 20 minutes.' ) ); ?></p>
      </div>

      <div class="yf-hiw-grid yf-reveal">
        <!-- LEFT: Photo -->
        <div class="yf-hiw-photo-col">
          <div class="yf-hiw-photo-wrap">
            <?php $yf_process_img = rl_field( 'yf_process_image' ); ?>
            <img
              src="<?php echo esc_url( $yf_process_img ?: 'https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop' ); ?>"
              alt="Pharmacist administering a travel vaccine in a professional clinical setting"
              class="yf-hiw-photo"
              loading="lazy"
            />
            <div class="yf-hiw-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span><?php echo esc_html( rl_field( 'yf_process_badge', 'GPhC-Registered Pharmacists' ) ); ?></span>
            </div>
          </div>
        </div>

        <!-- RIGHT: Steps -->
        <div class="yf-hiw-content-col">
          <span class="yf-eyebrow">Your Appointment</span>
          <div class="yf-process-steps">
            <?php
            $yf_process_steps = rl_field( 'yf_process_steps' );
            if ( $yf_process_steps && is_array( $yf_process_steps ) ) :
                foreach ( $yf_process_steps as $i => $step ) : ?>
            <div class="yf-process-step">
              <div class="yf-step-num"><?php echo esc_html( $i + 1 ); ?></div>
              <div class="yf-step-body">
                <h4><?php echo esc_html( $step['title'] ); ?></h4>
                <p><?php echo esc_html( $step['description'] ); ?></p>
              </div>
            </div>
                <?php endforeach;
            else : ?>
            <div class="yf-process-step">
              <div class="yf-step-num">1</div>
              <div class="yf-step-body">
                <h4>Travel Consultation (5–10 minutes)</h4>
                <p>Our GPhC-registered pharmacist reviews your travel itinerary, destination countries, transit points, and medical history. We confirm whether you need yellow fever vaccination and check for any contraindications.</p>
              </div>
            </div>
            <div class="yf-process-step">
              <div class="yf-step-num">2</div>
              <div class="yf-step-body">
                <h4>Vaccination (2 minutes)</h4>
                <p>Single injection administered into your upper arm. The yellow fever vaccine is a live attenuated vaccine grown in eggs. We use only WHO-prequalified vaccine from approved manufacturers, stored under strict cold chain conditions.</p>
              </div>
            </div>
            <div class="yf-process-step">
              <div class="yf-step-num">3</div>
              <div class="yf-step-body">
                <h4>Official Certificate Issued (5 minutes)</h4>
                <p>You receive your International Certificate of Vaccination or Prophylaxis (ICVP) immediately. We complete all required fields — vaccine batch number, date, official stamp, and pharmacist signature. Your certificate is valid 10 days after vaccination and lasts for life.</p>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="yf-total-time"><?php echo esc_html( rl_field( 'yf_process_time', '⏱ Allow 20 minutes total · Book at least 10 days before travel' ) ); ?></div>
          <div style="text-align:center;margin-top:24px;">
            <a href="#book" class="yf-price-cta" style="display:inline-flex;">Book Your Appointment →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== ICVP CERTIFICATE ===================== -->
  <section class="yf-section-dark" id="certificate">
    <div class="container">
      <div style="text-align:center;">
        <div class="yf-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg>
          <?php echo esc_html( rl_field( 'yf_cert_pill', 'The Yellow Card' ) ); ?>
        </div>
        <h2 class="section-title" style="color:var(--white);"><?php echo esc_html( rl_field( 'yf_cert_title', 'Your Official Yellow Fever Certificate' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:820px;margin:0 auto 0;color:rgba(255,255,255,.75);"><?php echo esc_html( rl_field( 'yf_cert_subtitle', 'As a NaTHNaC-registered Yellow Fever Vaccination Centre, Chislehurst Pharmacy Group Pharmacy is authorised to issue the official International Certificate of Vaccination or Prophylaxis (ICVP), known as the "yellow card."' ) ); ?></p>
      </div>

      <div class="yf-cert-card yf-reveal">
        <div class="yf-cert-two-col">
          <div class="yf-cert-col">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg>
              What's on your certificate
            </h4>
            <ul class="yf-cert-list">
              <?php
              $yf_cert_items = rl_field( 'yf_cert_items' );
              if ( $yf_cert_items && is_array( $yf_cert_items ) ) :
                  foreach ( $yf_cert_items as $item ) : ?>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $item['text'] ); ?></li>
                  <?php endforeach;
              else : ?>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Your full name and date of birth</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Passport number</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccine manufacturer and batch number</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Date of vaccination</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Signature of administering pharmacist</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Official Chislehurst Pharmacy Group Pharmacy vaccination centre stamp</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Validity dates (valid for life, starting 10 days post-vaccination)</li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="yf-cert-col">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
              Bring to your appointment
            </h4>
            <ul class="yf-cert-list">
              <?php
              $yf_cert_bring = rl_field( 'yf_cert_bring' );
              if ( $yf_cert_bring && is_array( $yf_cert_bring ) ) :
                  foreach ( $yf_cert_bring as $item ) : ?>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $item['text'] ); ?></li>
                  <?php endforeach;
              else : ?>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Valid passport (required for certificate)</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Previous yellow fever certificate (if previously vaccinated)</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> List of all countries you're visiting and transiting</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Current medication list (if applicable)</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Travel insurance details (recommended)</li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="yf-cert-validity">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <span><?php
          $yf_cert_validity = rl_field( 'yf_cert_validity' );
          if ( $yf_cert_validity ) :
              echo wp_kses_post( $yf_cert_validity );
          else : ?>
          <strong>Certificate validity:</strong> Your ICVP is valid for life. Even certificates issued before July 2016 with an original expiry date are now accepted as lifelong under updated WHO regulations. Keep your certificate safe and make multiple copies for your records.
          <?php endif; ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SIDE EFFECTS & SAFETY ===================== -->
  <section class="yf-section-white" id="safety">

    <!-- Safety Banner -->
    <div class="yf-safety-banner">
      <?php $yf_safety_banner_img = rl_field( 'yf_safety_banner_image' ); ?>
      <img
        src="<?php echo esc_url( $yf_safety_banner_img ?: 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1600&q=80&auto=format&fit=crop&crop=center' ); ?>"
        alt="Healthcare professional reviewing travel health documentation — professional travel vaccination service"
        class="yf-safety-banner-img"
        loading="lazy"
      />
      <div class="yf-safety-banner-overlay">
        <div class="yf-safety-banner-caption">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <div>
            <strong><?php echo esc_html( rl_field( 'yf_safety_banner_title', '600+ Million Doses Administered Worldwide' ) ); ?></strong>
            <span><?php echo esc_html( rl_field( 'yf_safety_banner_text', 'WHO-prequalified vaccine · Over 80 years of safety record' ) ); ?></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div style="text-align:center;margin-top:72px;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_safety_title', 'Side Effects & Safety Information' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:860px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_safety_subtitle', 'The yellow fever vaccine has an excellent safety record with over 500 million doses administered. Serious reactions are extremely rare. We observe all patients for 15 minutes post-vaccination.' ) ); ?></p>
      </div>

      <div class="yf-two-col equal yf-reveal" style="margin-top:48px;align-items:start;">
        <!-- Left: Common + Rare -->
        <div class="yf-side-col">
          <h3><?php echo esc_html( rl_field( 'yf_safety_common_title', 'Common Side Effects (Affecting up to 1 in 3 People)' ) ); ?></h3>
          <ul class="yf-side-list">
            <?php
            $yf_common_list = rl_field( 'yf_safety_common_list' );
            if ( $yf_common_list && is_array( $yf_common_list ) ) :
                foreach ( $yf_common_list as $item ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $item['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Injection site pain, redness, or swelling</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Headache</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Muscle aches</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Low-grade fever</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Fatigue</li>
            <?php endif; ?>
          </ul>
          <p class="yf-side-note"><?php echo esc_html( rl_field( 'yf_safety_common_note', 'These mild effects typically appear 5–10 days after vaccination and resolve within 2 weeks without treatment.' ) ); ?></p>

          <h3 style="margin-top:32px;"><?php echo esc_html( rl_field( 'yf_safety_serious_title', 'Serious Side Effects (Very Rare)' ) ); ?></h3>
          <div class="yf-side-warning">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#92400E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <div><?php echo wp_kses_post( rl_field( 'yf_safety_serious_text', 'Anaphylaxis: approximately 1.3 per 100,000 doses · YEL-AND (neurotropic disease): very rare · YEL-AVD (viscerotropic disease): approximately 0.3 per 100,000 doses. We observe all patients for 15 minutes and are trained to respond to any reaction immediately.' ) ); ?></div>
          </div>
        </div>

        <!-- Right: Contraindications + Precautions -->
        <div class="yf-side-col">
          <h3><?php echo esc_html( rl_field( 'yf_safety_contra_title', 'Who Should NOT Receive Yellow Fever Vaccine' ) ); ?></h3>
          <ul class="yf-contra-list">
            <?php
            $yf_contra_list = rl_field( 'yf_safety_contra_list' );
            if ( $yf_contra_list && is_array( $yf_contra_list ) ) :
                foreach ( $yf_contra_list as $item ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> <?php echo esc_html( $item['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Infants under 9 months old</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Severe egg allergy or previous severe reaction to yellow fever vaccine</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Thymus disorders or history of thymus removal</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Severely immunocompromised (symptomatic HIV, chemotherapy, high-dose steroids)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> People over 60 travelling to areas where vaccination is not essential (risk-benefit assessment required)</li>
            <?php endif; ?>
          </ul>

          <h3 style="margin-top:28px;"><?php echo esc_html( rl_field( 'yf_safety_precautions_title', 'Special Precautions' ) ); ?></h3>
          <ul class="yf-precaution-list">
            <?php
            $yf_precautions = rl_field( 'yf_safety_precautions' );
            if ( $yf_precautions && is_array( $yf_precautions ) ) :
                foreach ( $yf_precautions as $item ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg> <?php echo wp_kses_post( $item['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg> <strong>Pregnancy:</strong> Only if travel to high-risk area is unavoidable</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg> <strong>Breastfeeding infants under 9 months:</strong> Contraindicated</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg> <strong>Ages 60+:</strong> Requires careful risk-benefit assessment by our pharmacist</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg> <strong>Mild immunosuppression:</strong> Case-by-case evaluation based on medication and dose</li>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <div class="yf-safety-box"><?php echo wp_kses_post( rl_field( 'yf_safety_box', 'Safety monitoring by the MHRA, WHO, and NaTHNaC continues to confirm yellow fever vaccine has an excellent, well-established safety profile. Over 500 million doses have been safely administered worldwide over eight decades.' ) ); ?></div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="yf-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_pricing_title', 'Transparent Yellow Fever Vaccine Pricing' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto 0;"><?php echo esc_html( rl_field( 'yf_pricing_subtitle', 'All-inclusive price. No hidden fees. No consultation charges.' ) ); ?></p>
      </div>

      <div class="yf-pricing-wrapper yf-reveal">
        <div class="yf-price-card-single">
          <div class="yf-price-badge-top"><?php echo esc_html( rl_field( 'yf_price_badge', 'All-Inclusive · Everything Included' ) ); ?></div>
          <div class="yf-price-amount"><sup>£</sup><?php echo esc_html( rl_field( 'yf_price_amount', '85' ) ); ?></div>
          <div class="yf-price-per">per person · single lifetime dose</div>
          <ul class="yf-price-includes">
            <?php
            $yf_price_includes = rl_field( 'yf_price_includes' );
            if ( $yf_price_includes && is_array( $yf_price_includes ) ) :
                foreach ( $yf_price_includes as $item ) : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( $item['text'] ); ?></li>
                <?php endforeach;
            else : ?>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Yellow fever vaccine (single lifetime dose)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist travel health consultation</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Full travel health risk assessment</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination administration</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15-minute post-vaccination observation period</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Official International Certificate of Vaccination (ICVP)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccine batch number documentation</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No additional fees whatsoever</li>
            <?php endif; ?>
          </ul>
          <div class="yf-price-validity">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            Certificate valid for life · Valid 10 days post-vaccination
          </div>
          <a href="#book" class="yf-price-cta">Book Your Vaccination</a>
        </div>
      </div>

      <div class="yf-pricing-info-box yf-reveal">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span><?php echo wp_kses_post( rl_field( 'yf_pricing_info', 'Unlike many vaccination centres, we include the official ICVP certificate in our price — some providers charge £20–40 extra for the certificate. The price you see is the price you pay. We accept cash, card, and contactless payments.' ) ); ?></span>
      </div>
      <p class="yf-pricing-note"><?php echo esc_html( rl_field( 'yf_pricing_note', 'Important: Book at least 10 days before your departure date to ensure your certificate is valid on arrival at your destination.' ) ); ?></p>
    </div>
  </section>

  <!-- ===================== WHY CHOOSE ===================== -->
  <section class="yf-section-dark" id="why-us">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title" style="color:var(--white);"><?php echo esc_html( rl_field( 'yf_why_title', 'Official Yellow Fever Vaccination Centre' ) ); ?></h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;color:rgba(255,255,255,.75);"><?php echo esc_html( rl_field( 'yf_why_subtitle', 'Chislehurst Pharmacy Group Pharmacy is an officially designated NaTHNaC Yellow Fever Vaccination Centre — the only type of centre authorised to issue valid ICVP certificates.' ) ); ?></p>
      </div>

      <div class="yf-why-grid yf-reveal">
        <?php
        $yf_why_cards = rl_field( 'yf_why_cards' );
        if ( $yf_why_cards && is_array( $yf_why_cards ) ) :
            $why_icons = array(
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>',
            );
            foreach ( $yf_why_cards as $i => $card ) : ?>
        <div class="yf-why-card">
          <div class="yf-why-icon"><?php echo $why_icons[ $i % count( $why_icons ) ]; ?></div>
          <h3><?php echo esc_html( $card['title'] ); ?></h3>
          <p><?php echo esc_html( $card['description'] ); ?></p>
        </div>
            <?php endforeach;
        else : ?>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>NaTHNaC Registered Centre</h3>
          <p>Officially designated by the National Travel Health Network and Centre (NaTHNaC) as an authorised Yellow Fever Vaccination Centre. Only registered centres can issue valid, internationally accepted ICVP certificates.</p>
        </div>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <h3>GPhC Registered Pharmacists</h3>
          <p>All vaccinations administered by General Pharmaceutical Council registered pharmacists with specialist travel health training. Your health is in the hands of qualified, experienced professionals.</p>
        </div>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
          <h3>Genuine WHO-Prequalified Vaccine</h3>
          <p>We stock only WHO-prequalified yellow fever vaccine from licensed UK manufacturers, stored at correct temperatures and handled according to strict cold-chain protocols from receipt to administration.</p>
        </div>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <h3>Two Convenient Chislehurst Locations</h3>
          <p>Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and wider South East London. Easy parking at both sites, accessible by public transport and Southeastern rail.</p>
        </div>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <h3>Same-Day &amp; Emergency Appointments</h3>
          <p>Last-minute travel? We offer same-day yellow fever vaccination appointments subject to vaccine availability. Walk-ins are welcome, but booking is recommended to guarantee your slot.</p>
        </div>
        <div class="yf-why-card">
          <div class="yf-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
          <h3>Complete Travel Health Service</h3>
          <p>Yellow fever vaccination is often combined with other travel vaccines — typhoid, hepatitis A/B, rabies, meningitis. We provide comprehensive pre-travel consultations covering all destination-specific risks in one appointment.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="yf-locations" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title"><?php echo esc_html( rl_field( 'yf_locations_title', 'Visit Our Yellow Fever Vaccination Centres in Chislehurst' ) ); ?></h2>
      </div>

      <div class="yf-loc-grid yf-reveal">
        <?php
        $yf_locations = rl_field( 'yf_locations' );
        if ( $yf_locations && is_array( $yf_locations ) ) :
            foreach ( $yf_locations as $loc ) : ?>
        <div class="yf-loc-card">
          <h3><?php echo esc_html( $loc['name'] ); ?></h3>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span><?php echo esc_html( $loc['address'] ); ?></span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg>
            <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $loc['phone'] ) ); ?>"><?php echo esc_html( $loc['phone'] ); ?></a>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span><?php echo esc_html( $loc['hours'] ); ?></span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span><?php echo esc_html( $loc['parking'] ); ?></span>
          </div>
          <a href="<?php echo esc_url( $loc['directions_url'] ); ?>" target="_blank" class="yf-loc-cta"><?php echo esc_html( $loc['cta_text'] ); ?></a>
        </div>
            <?php endforeach;
        else : ?>
        <div class="yf-loc-card">
          <h3>Pond Pharmacy — Chislehurst</h3>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>59 High Street, Chislehurst, BR7 5AF</span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg>
            <a href="tel:02084673158">020 8467 3158</a>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>Mon–Fri: 8:30am–6:30pm &nbsp;|&nbsp; Sat: 9:00am–2:00pm &nbsp;|&nbsp; Sun: Closed</span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span>Free parking available &nbsp;·&nbsp; Near Chislehurst High Street</span>
          </div>
          <a href="https://maps.google.com/?q=59+High+Street+Chislehurst+BR7+5AF" target="_blank" class="yf-loc-cta">Book Chislehurst Appointment →</a>
        </div>
        <div class="yf-loc-card">
          <h3>Chislehurst Pharmacy — Station</h3>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>59 Chislehurst Road, Chislehurst, BR7 5NP</span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.11 2 2 0 0 1 4.11 2h3"/></svg>
            <a href="tel:02082950017">020 8295 0017</a>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>Mon–Fri: 9:00am–6:00pm &nbsp;|&nbsp; Sat: 9:00am–1:00pm &nbsp;|&nbsp; Sun: Closed</span>
          </div>
          <div class="yf-loc-detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span>Station car park nearby &nbsp;·&nbsp; Direct Southeastern rail access</span>
          </div>
          <a href="https://maps.google.com/?q=59+Chislehurst+Road+BR7+5NP" target="_blank" class="yf-loc-cta">Book Station Appointment →</a>
        </div>
        <?php endif; ?>
      </div>

      <div class="yf-serving-text"><?php echo esc_html( rl_field( 'yf_locations_serving', 'Conveniently located to serve patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and surrounding South East London areas. Free parking available at both locations.' ) ); ?></div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="yf-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="yf-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Yellow Fever Vaccine FAQs</h2>
      </div>

      <div class="yf-faq-list">

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">01</span>
            <span class="yf-faq-question">How long does yellow fever vaccination protection last?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">A single dose of yellow fever vaccine provides lifelong immunity for most people. The International Certificate of Vaccination is now valid for life (previously 10 years under old WHO rules). You won't need booster doses unless you were pregnant, immunocompromised, or haematopoietic stem cell transplant recipients when first vaccinated — in which case re-vaccination may be recommended before travel.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">02</span>
            <span class="yf-faq-question">When should I get the yellow fever vaccine before travel?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Book your vaccination at least 10 days before departure. Your ICVP certificate becomes valid 10 days after vaccination. Some countries strictly enforce this 10-day rule and may deny entry if you arrive sooner. For complete protection and compliance, we recommend vaccinating 2–3 weeks before travel where possible. Same-day appointments are available if you have last-minute plans.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">03</span>
            <span class="yf-faq-question">Which countries require yellow fever certification?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Over 40 countries require proof of yellow fever vaccination for entry. This includes most of sub-Saharan Africa, parts of South America, and some Asian/Pacific nations when arriving from endemic areas. Requirements change frequently — we check current NaTHNaC guidance during your consultation and advise you on your specific itinerary.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">04</span>
            <span class="yf-faq-question">Do I need yellow fever vaccine if I'm only transiting through an affected country?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yes, often. Many countries require certification if you've transited through a yellow fever endemic country, even if you didn't leave the airport transit area. For example, flying UK → Addis Ababa → Mombasa typically requires a certificate for Kenya entry even if you had no contact with Ethiopian territory. We'll assess your specific itinerary, including all transit stops, during your consultation.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">05</span>
            <span class="yf-faq-question">Can I get yellow fever vaccine on the NHS?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">No. Yellow fever vaccination has never been available on the NHS. It must be obtained privately from a registered Yellow Fever Vaccination Centre like Chislehurst Pharmacy Group Pharmacy. Our all-inclusive price is £85, which covers the vaccine, consultation, official ICVP certificate, and everything you need in a single appointment — no hidden fees.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">06</span>
            <span class="yf-faq-question">I lost my yellow fever certificate. Can I get a replacement?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">If you were vaccinated at Chislehurst Pharmacy Group Pharmacy, we can issue a replacement certificate if we have your original vaccination records on file — including the vaccine batch number and date of administration. Bring valid photo ID. If you were vaccinated elsewhere, contact that vaccination centre directly. You cannot obtain a legitimate replacement from a different centre without proof of your original vaccination record.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">07</span>
            <span class="yf-faq-question">Is the yellow fever vaccine safe during pregnancy?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yellow fever vaccine is generally avoided during pregnancy because it is a live attenuated vaccine, and there are theoretical concerns about potential foetal infection. However, if travel to a high-risk endemic area is unavoidable and mosquito bite prevention alone is considered insufficient protection, vaccination may be recommended after careful risk-benefit assessment. Discuss your situation with our pharmacist who will help you weigh the risks and alternatives.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">08</span>
            <span class="yf-faq-question">I'm over 60. Can I get the yellow fever vaccine?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yes, but with additional precautions. People over 60 have a slightly higher risk of rare serious side effects (approximately 1.2 per 100,000 doses). If travel to a yellow fever area is essential, vaccination is still generally recommended as the risk of yellow fever itself far outweighs vaccine risk. If travel is discretionary or to low actual-risk areas, we'll discuss alternatives including exemption letters, which some countries will accept in lieu of vaccination.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">09</span>
            <span class="yf-faq-question">Can my child get the yellow fever vaccine?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yellow fever vaccine is approved from 9 months of age. Children aged 9 months and over can be safely vaccinated. Infants under 9 months should not receive the vaccine due to an increased risk of a rare but serious neurological complication. If your infant under 9 months must travel to a high-risk area, our pharmacist will discuss protective measures such as mosquito avoidance strategies and can provide exemption documentation for border requirements.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">10</span>
            <span class="yf-faq-question">What if I have an egg allergy?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yellow fever vaccine is grown in eggs, so egg allergy requires careful assessment. Severe egg allergy causing anaphylaxis (throat swelling, difficulty breathing, collapse) constitutes a contraindication. If you have a milder egg allergy — for example, hives or mild swelling after eating eggs — vaccination may still be possible with an extended observation period. Please disclose your complete allergy history, including severity and prior reactions, during your consultation so we can advise appropriately.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">11</span>
            <span class="yf-faq-question">I'm on immunosuppressive medication. Can I get vaccinated?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Severe immunosuppression (e.g., high-dose corticosteroids, chemotherapy, biological immunosuppressants like anti-TNF agents) is a contraindication because yellow fever vaccine is live and could cause serious disease in significantly immunocompromised individuals. Mild immunosuppression — such as low-dose maintenance steroids or methotrexate — may be acceptable depending on the specific medication and dose. We'll review your complete medication list and, if needed, consult with your specialist before recommending vaccination or alternatives.</div></div>
        </div>

        <div class="yf-faq-item">
          <button class="yf-faq-trigger">
            <span class="yf-faq-num">12</span>
            <span class="yf-faq-question">What's the difference between yellow fever vaccine and malaria prevention?</span>
            <svg class="yf-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="yf-faq-answer"><div class="yf-faq-answer-inner">Yellow fever and malaria are entirely separate diseases requiring different prevention strategies. Yellow fever is prevented by a one-time vaccine providing lifelong protection from a single dose. Malaria prevention requires daily or weekly antimalarial tablets taken throughout your entire trip — currently no vaccine exists for travellers. Many of the same destinations, particularly in sub-Saharan Africa, require BOTH yellow fever vaccination and antimalarial medication. At Chislehurst Pharmacy Group Pharmacy, we provide comprehensive travel health consultations covering all risks relevant to your specific destinations.</div></div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA + NEWSLETTER ===================== -->
  <section class="yf-footer-cta-block" id="book">
    <div class="yf-footer-cta-bg"><div class="yf-footer-cta-orb yf-footer-cta-orb-1"></div><div class="yf-footer-cta-orb yf-footer-cta-orb-2"></div></div>
    <div class="container yf-footer-cta-inner">
      <!-- CTA top -->
      <div class="yf-footer-cta-top">
        <div class="yf-cta-badges">
          <?php
          $yf_cta_badges = rl_field( 'yf_cta_badges' );
          if ( $yf_cta_badges && is_array( $yf_cta_badges ) ) :
              foreach ( $yf_cta_badges as $badge ) : ?>
          <span class="yf-cta-badge"><?php echo esc_html( $badge['text'] ); ?></span>
              <?php endforeach;
          else : ?>
          <span class="yf-cta-badge">NaTHNaC Registered</span>
          <span class="yf-cta-badge">Official Certificate Included</span>
          <span class="yf-cta-badge">Same-Day Service</span>
          <span class="yf-cta-badge">GPhC Pharmacists</span>
          <?php endif; ?>
        </div>
        <h2 class="yf-footer-cta-title"><?php echo esc_html( rl_field( 'yf_cta_title', 'Protect Yourself Before You Travel' ) ); ?></h2>
        <p class="yf-footer-cta-sub"><?php echo esc_html( rl_field( 'yf_cta_subtitle', 'Don\'t risk being denied boarding or quarantined on arrival. Book your yellow fever vaccination at our registered vaccination centre in Chislehurst today.' ) ); ?></p>
        <div class="cta-buttons">
          <a href="tel:02084673158" class="btn-cta-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Yellow Fever Vaccination
          </a>
          <a href="tel:02084673158" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="yf-cta-checks">
          <span>✓ NaTHNaC Registered Centre</span>
          <span>✓ Official ICVP Included</span>
          <span>✓ Same-Day Available</span>
          <span>✓ £85 All-Inclusive</span>
        </div>
        <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,.55);">Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London</p>
      </div>
      <!-- Divider -->
      <div class="yf-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="yf-footer-newsletter-row">
        <div class="yf-footer-newsletter-text">
          <h3>Travel health updates &amp; advice</h3>
          <p>Get expert travel health tips, vaccine reminders, and destination guides delivered to your inbox before your next trip.</p>
        </div>
        <form class="newsletter-form yf-footer-newsletter-form">
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
  <div class="yf-disclaimer">
    <div class="container">
      This information is for educational purposes and does not constitute medical advice. Yellow fever vaccination is a prescription-only medicine in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. Only NaTHNaC-registered vaccination centres are authorised to issue International Certificates of Vaccination or Prophylaxis (ICVP). Information is accurate as of March 2026 and based on current NaTHNaC, WHO, and MHRA guidance.
    </div>
  </div>

<?php get_footer(); ?>
