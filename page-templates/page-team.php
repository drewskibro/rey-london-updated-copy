<?php
/**
 * Template Name: Meet the Team
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="mt-hero">
    <div class="mt-hero-bg">
      <div class="mt-hero-orb mt-hero-orb-1"></div>
      <div class="mt-hero-orb mt-hero-orb-2"></div>
    </div>
    <div class="container" style="position:relative;z-index:2;">
      <div class="mt-hero-eyebrow">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        Our Clinical Team&nbsp;&nbsp;|&nbsp;&nbsp;Chislehurst Pharmacy Group Pharmacy
      </div>
      <h1 class="mt-hero-title"><?php echo wp_kses_post( rl_field( 'mt_hero_title', 'People Behind Your<br><span class="gradient-text">Exceptional Care</span>' ) ); ?></h1>
      <p class="mt-hero-sub"><?php echo esc_html( rl_field( 'mt_hero_subtitle', 'Our team of GPhC-registered pharmacists, independent prescribers, and healthcare professionals are dedicated to delivering personalised, evidence-based care to every patient at both of our South East London locations.' ) ); ?></p>
      <div class="mt-hero-trust">
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered Team</span>
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Independent Prescribers</span>
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15+ Years Combined Experience</span>
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Two South East London Clinics</span>
      </div>
    </div>
  </section>

  <!-- ===================== LEAD PHARMACIST ===================== -->
  <?php
  $lead_name  = rl_field( 'mt_lead_name', 'Sumeet Banker' );
  $lead_role  = rl_field( 'mt_lead_role', 'Lead Pharmacist & Independent Prescriber' );
  $lead_photo = rl_field( 'mt_lead_photo', 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&q=80&auto=format&fit=crop' );
  $lead_bio   = rl_field( 'mt_lead_bio', 'With over 15 years of experience, Sumeet leads our clinical team across both locations in Chislehurst. As an Independent Prescriber, he specialises in weight loss treatment, travel health, and ear wax removal — and is well-known for his straightforward, no-jargon approach, no waiting lists, and his commitment to building a system designed to make you well.' );
  $lead_quote = rl_field( 'mt_lead_quote', '"My approach has always been the same — listen first, treat second. Every patient deserves a pharmacist who takes the time to understand not just their symptoms, but their life. That\'s the standard I hold our entire team to."' );
  $lead_creds = rl_field( 'mt_lead_credentials', 'MPharm, Ind. Prescriber, GPhC Registered' );
  $lead_cta   = rl_field( 'mt_lead_cta_text', 'Book a Consultation' );
  $lead_stat_num   = rl_field( 'mt_lead_stat_num', '15+' );
  $lead_stat_label = rl_field( 'mt_lead_stat_label', 'Years of Clinical Practice' );
  $lead_specialisms = rl_field( 'mt_lead_specialisms' );
  $cred_items = array_map( 'trim', explode( ',', $lead_creds ) );
  ?>
  <section class="mt-lead-section" id="lead-pharmacist">
    <div class="container">
      <div class="mt-lead-grid mt-reveal">
        <!-- Left: Photo card -->
        <div class="mt-lead-photo-col">
          <div class="mt-lead-photo-wrap">
            <img
              src="<?php echo esc_url( $lead_photo ); ?>"
              alt="<?php echo esc_attr( $lead_name . ' — ' . $lead_role ); ?>"
              class="mt-lead-photo"
            />
            <div class="mt-lead-photo-badge">
              <div class="mt-lead-badge-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              </div>
              <div>
                <strong>GPhC Registered</strong>
                <span><?php echo esc_html( $lead_role ); ?></span>
              </div>
            </div>
          </div>
          <!-- Floating stat card -->
          <div class="mt-lead-stat-float">
            <div class="mt-lead-stat-num"><?php echo esc_html( $lead_stat_num ); ?></div>
            <div class="mt-lead-stat-label"><?php echo esc_html( $lead_stat_label ); ?></div>
            <div class="mt-lead-stat-checks">
              <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered</span>
              <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 1000+ Patients Treated</span>
              <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <?php echo esc_html( rl_field( 'mt_trust_count', '400+ reviews' ) ); ?></span>
            </div>
          </div>
        </div>

        <!-- Right: Content -->
        <div class="mt-lead-content">
          <span class="mt-eyebrow">Lead Pharmacist</span>
          <h2 class="mt-lead-name"><?php echo esc_html( $lead_name ); ?></h2>
          <p class="mt-lead-role"><?php echo esc_html( $lead_role ); ?></p>

          <div class="mt-lead-credentials">
            <?php foreach ( $cred_items as $cred ) : ?>
              <span class="mt-cred-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg> <?php echo esc_html( $cred ); ?></span>
            <?php endforeach; ?>
          </div>

          <p class="mt-body-text"><?php echo esc_html( $lead_bio ); ?></p>

          <p class="mt-body-text mt-body-quote"><?php echo esc_html( $lead_quote ); ?></p>

          <div class="mt-lead-specialisms">
            <h4 class="mt-specialisms-title">Clinical Specialisms</h4>
            <div class="mt-specialism-grid">
              <?php if ( $lead_specialisms ) : ?>
                <?php foreach ( $lead_specialisms as $spec ) : ?>
                  <a href="<?php echo esc_url( home_url( $spec['url'] ) ); ?>" class="mt-specialism-card">
                    <div class="mt-spec-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <div><span class="mt-spec-name"><?php echo esc_html( $spec['name'] ); ?></span><span class="mt-spec-desc"><?php echo esc_html( $spec['description'] ); ?></span></div>
                  </a>
                <?php endforeach; ?>
              <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="mt-specialism-card">
                  <div class="mt-spec-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                  <div><span class="mt-spec-name">Weight Loss Treatment</span><span class="mt-spec-desc">Mounjaro, Wegovy &amp; GLP-1s</span></div>
                </a>
                <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="mt-specialism-card">
                  <div class="mt-spec-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
                  <div><span class="mt-spec-name">Travel Health &amp; Vaccinations</span><span class="mt-spec-desc">All destinations, 100+ vaccines</span></div>
                </a>
                <a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>" class="mt-specialism-card">
                  <div class="mt-spec-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="22"/></svg></div>
                  <div><span class="mt-spec-name">Ear Wax Removal</span><span class="mt-spec-desc">Microsuction specialist</span></div>
                </a>
                <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="mt-specialism-card">
                  <div class="mt-spec-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                  <div><span class="mt-spec-name">Clinical Consultations</span><span class="mt-spec-desc">Face-to-face and remote</span></div>
                </a>
              <?php endif; ?>
            </div>
          </div>

          <div class="mt-lead-actions">
            <a href="#book" class="mt-btn-primary"><?php echo esc_html( $lead_cta ); ?></a>
            <?php
            $phone_pond_num       = rl_option( 'phone_pond', '020 8467 3158' );
            $phone_chisl_num      = rl_option( 'phone_chislehurst', '020 8295 0017' );
            $phone_pond_link      = preg_replace( '/[^0-9+]/', '', $phone_pond_num );
            $phone_chisl_link     = preg_replace( '/[^0-9+]/', '', $phone_chisl_num );
            ?>
            <a href="tel:<?php echo esc_attr( $phone_pond_link ); ?>" class="mt-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Pond Pharmacy · <?php echo esc_html( $phone_pond_num ); ?>
            </a>
            <a href="tel:<?php echo esc_attr( $phone_chisl_link ); ?>" class="mt-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Chislehurst Pharmacy · <?php echo esc_html( $phone_chisl_num ); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== TRUST BAR ===================== -->
  <?php if ( rl_field( 'mt_trust_visible', true ) ) : ?>
  <section class="mt-trust-bar">
    <div class="container">
      <div class="mt-trust-inner mt-reveal">
        <div class="mt-trust-rating">
          <div class="mt-trust-stars">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#facc15"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#facc15"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#facc15"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#facc15"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#facc15"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <span class="mt-trust-score"><?php echo esc_html( rl_field( 'mt_trust_score', '4.8' ) ); ?></span>
          <span class="mt-trust-count"><?php echo esc_html( rl_field( 'mt_trust_count', '400+ reviews' ) ); ?></span>
          <span class="mt-trust-source"><?php echo esc_html( rl_field( 'mt_trust_source', 'Google & Trustpilot' ) ); ?></span>
        </div>
        <div class="mt-trust-divider"></div>
        <div class="mt-trust-quote">
          <p><strong><?php echo esc_html( rl_field( 'mt_trust_headline', 'Trusted by Surrey.' ) ); ?></strong> <?php echo esc_html( rl_field( 'mt_trust_text', "Your health, guided by one of Surrey's most experienced pharmacists." ) ); ?></p>
          <span><?php echo esc_html( rl_field( 'mt_trust_subtext', 'Over 15 years of clinical experience, hundreds of 5-star reviews, and a proven commitment to face-to-face care that puts you first.' ) ); ?></span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== FULL TEAM ===================== -->
  <section class="mt-team-section" id="team">
    <div class="container">
      <div style="text-align:center;">
        <div class="mt-pill mt-pill-white">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          Our Clinical Team
        </div>
        <h2 class="section-title" style="color:var(--white);">The People Behind <span class="gradient-text">Your Care</span></h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,.8);max-width:700px;margin:0 auto 0;">Every member of our team is fully GPhC-registered, continuously trained, and committed to delivering the highest standard of care.</p>
      </div>

      <div class="mt-team-grid mt-reveal">
        <?php
        $members = rl_field( 'mt_members' );
        if ( $members ) :
          foreach ( $members as $member ) :
            $is_featured = ! empty( $member['is_featured'] );
            $photo       = ! empty( $member['photo'] ) ? $member['photo'] : '';
            $name        = ! empty( $member['name'] ) ? $member['name'] : '';
            $role        = ! empty( $member['role'] ) ? $member['role'] : '';
            $bio         = ! empty( $member['bio'] ) ? $member['bio'] : '';
            $specialisms = ! empty( $member['specialisms'] ) ? array_map( 'trim', explode( ',', $member['specialisms'] ) ) : array();
        ?>
        <div class="mt-team-card<?php echo $is_featured ? ' mt-team-card-featured' : ''; ?>">
          <?php if ( $is_featured ) : ?>
            <div class="mt-team-card-badge">Lead Pharmacist</div>
          <?php endif; ?>
          <div class="mt-team-avatar-wrap">
            <?php if ( $photo ) : ?>
              <img src="<?php echo esc_url( $photo ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="mt-team-avatar" />
            <?php endif; ?>
          </div>
          <div class="mt-team-card-body">
            <h3 class="mt-team-name"><?php echo esc_html( $name ); ?></h3>
            <p class="mt-team-role"><?php echo esc_html( $role ); ?></p>
            <p class="mt-team-bio"><?php echo esc_html( $bio ); ?></p>
            <?php if ( $specialisms ) : ?>
              <div class="mt-team-tags">
                <?php foreach ( $specialisms as $tag ) : ?>
                  <span><?php echo esc_html( $tag ); ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <a href="#book" class="mt-team-cta">Book Appointment</a>
          </div>
        </div>
        <?php
          endforeach;
        else :
        ?>
          <p style="color:rgba(255,255,255,.7);text-align:center;grid-column:1/-1;">Team members coming soon. Add them via the WordPress admin.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ===================== VALUES / WHY OUR TEAM ===================== -->
  <section class="mt-values-section">
    <div class="container">
      <div style="text-align:center;">
        <div class="mt-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          What Sets Us Apart
        </div>
        <h2 class="section-title">Why Patients Choose<br><span class="gradient-text">Our Team</span></h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto 0;">We're not just dispensing medicines — we're building long-term relationships with our patients and community.</p>
      </div>

      <div class="mt-values-grid mt-reveal">
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Patient-First Always</h3>
          <p>Every decision is made with patient welfare at the centre. No rushed appointments, no cookie-cutter advice — just genuine, individualised care.</p>
        </div>
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <h3>Continuously Trained</h3>
          <p>Our team stays at the forefront of pharmaceutical practice through ongoing CPD, specialist certifications, and regular clinical re-training.</p>
        </div>
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Evidence-Based Care</h3>
          <p>All clinical decisions follow the latest NICE guidelines, MHRA regulations, and peer-reviewed evidence — no trends, no shortcuts.</p>
        </div>
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h3>Locally Anchored</h3>
          <p>Rooted in Chislehurst and South East London, our team understands the community it serves — no call centres, no remote care.</p>
        </div>
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>No Waiting Lists</h3>
          <p>Same-day and next-day appointments available. We believe timely access to care is fundamental, not a premium.</p>
        </div>
        <div class="mt-value-card">
          <div class="mt-value-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Genuinely Caring</h3>
          <p>We take a personal interest in your health journey — from first consultation to achieving your goals. Your wellbeing matters beyond the prescription.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== LIFESTYLE BANNER ===================== -->
  <div class="mt-banner">
    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1400&q=80&auto=format&fit=crop" alt="Our clinical team at Chislehurst Pharmacy Group Pharmacy" class="mt-banner-img" />
    <div class="mt-banner-overlay">
      <div class="mt-banner-caption">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7ee8a2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        <div>
          <strong>GPhC-Registered Clinical Team</strong>
          <span>Delivering expert pharmaceutical care at both our South East London locations</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== FINAL CTA ===================== -->
  <section class="mt-final-cta" id="book">
    <div class="container" style="position:relative;z-index:2;">
      <h2><?php echo esc_html( rl_field( 'mt_final_cta_title', 'Ready to Book a Consultation?' ) ); ?></h2>
      <p><?php echo esc_html( rl_field( 'mt_final_cta_subtitle', 'Speak directly with our clinical team — no waiting lists, no referrals needed.' ) ); ?></p>
      <div class="mt-final-trust">
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered</span>
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Appointments</span>
        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No Referral Required</span>
      </div>
      <div class="mt-final-ctas">
        <a href="#book" class="mt-btn-primary">Book an Appointment</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mt-btn-outline">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Find a Location
        </a>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
