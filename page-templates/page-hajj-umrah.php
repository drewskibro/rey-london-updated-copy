<?php
/**
 * Template Name: Hajj & Umrah Vaccination
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="hajj-hero">
    <div class="container">
      <div class="hajj-hero-grid">
        <div class="hajj-hero-text">
          <div class="hajj-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <?php echo esc_html( rl_field( 'hajj_hero_eyebrow', 'Travel Health · Chislehurst' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'hajj_hero_title', 'Hajj &amp; Umrah Vaccination in Chislehurst — <span class="gradient-text">MenACWY Certificate Issued Same Day</span>' ) ); ?></h1>
          <p class="hajj-hero-sub"><?php echo esc_html( rl_field( 'hajj_hero_subtitle', 'Planning Hajj or Umrah? The MenACWY vaccine is mandatory for Hajj and strongly recommended for Umrah. Get vaccinated and receive your official certificate at our Chislehurst pharmacy — no long waits, no referral needed.' ) ); ?></p>

          <div class="hajj-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCD34D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Official MenACWY certificate issued same day</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCD34D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Conjugate vaccine valid for 5 years</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCD34D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointments at both Chislehurst locations</span>
          </div>

          <div class="hajj-hero-ctas">
            <a href="#book" class="hajj-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Your Hajj Vaccination
            </a>
            <a href="#requirements" class="hajj-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
              Which Vaccines Do I Need?
            </a>
          </div>
        </div>

        <div class="hajj-hero-visual">
          <div class="hajj-hero-visual-inner">
            <?php $hajj_hero_img = rl_field( 'hajj_hero_image' ); ?>
            <img src="<?php echo esc_url( $hajj_hero_img ?: 'https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80&auto=format&fit=crop' ); ?>" alt="Pharmacist preparing MenACWY vaccination for Hajj and Umrah pilgrims — professional travel health service in Chislehurst" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== URGENCY BANNER ===================== -->
  <section class="hajj-urgency-banner" aria-label="2025 public health alert">
    <div class="container">
      <div class="hajj-urgency-inner">
        <div class="hajj-urgency-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        </div>
        <div>
          <span class="hajj-urgency-label">2025 UKHSA Alert</span>
          <div class="hajj-urgency-text"><strong>MenW cases confirmed in UK returnees from Umrah.</strong> Book your MenACWY vaccination early — do not travel without your official certificate.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="hajj-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="hajj-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          At a Glance
        </div>
        <h2 class="section-title">Key Facts About Hajj &amp; Umrah Vaccination</h2>
      </div>
      <div class="hajj-quick-grid">
        <div class="hajj-quick-card">
          <div class="hajj-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="hajj-quick-stat">Mandatory</div>
          <div class="hajj-quick-label">MenACWY required for all Hajj pilgrims aged 1+</div>
        </div>
        <div class="hajj-quick-card">
          <div class="hajj-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <div class="hajj-quick-stat">10 Days</div>
          <div class="hajj-quick-label">Certificate must be issued at least 10 days before arrival</div>
        </div>
        <div class="hajj-quick-card">
          <div class="hajj-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <div class="hajj-quick-stat">5 Years</div>
          <div class="hajj-quick-label">Conjugate vaccine certificate validity</div>
        </div>
        <div class="hajj-quick-card">
          <div class="hajj-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div class="hajj-quick-stat">Same Day</div>
          <div class="hajj-quick-label">Certificate issued at your appointment</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT IS MENACWY ===================== -->
  <section class="hajj-section-white" id="about">
    <div class="container">
      <div class="hajj-two-col">
        <div>
          <span class="hajj-eyebrow">What You Need to Know</span>
          <h2 class="hajj-section-title">What Is MenACWY and Why Does It Matter for Hajj and Umrah?</h2>

          <p class="hajj-body-text">Meningococcal disease is a serious, potentially fatal bacterial infection caused by <em>Neisseria meningitidis</em>. It spreads through close contact — coughing, sneezing, sharing food or drinks — and can progress from mild symptoms to life-threatening meningitis or septicaemia within hours. Mass gatherings where millions of people from across the world sleep, eat and worship in close proximity dramatically increase transmission risk, which is why Saudi Arabia requires MenACWY vaccination for Hajj.</p>

          <h3 class="hajj-subsection-title">The outbreak context</h3>
          <p class="hajj-body-text">Hajj has a long history of meningococcal outbreaks. In 2000/2001 a major group W outbreak among Hajj pilgrims led directly to the current Saudi vaccination requirements. By March 2025, 17 meningococcal cases associated with Saudi Arabian pilgrimage had been reported globally. In 2024, 12 cases were confirmed across the UK, US and France among Hajj and Umrah returnees — 9 of whom were <em>unvaccinated</em>. Saudi Ministry of Health data showed Umrah pilgrim compliance was only 54% in March 2025, which is why vaccination enforcement is now tightening.</p>

          <h3 class="hajj-subsection-title">Conjugate vs polysaccharide</h3>
          <p class="hajj-body-text">Two vaccine types exist, but they are not equivalent. The <strong>conjugate MenACWY vaccine</strong> provides longer-lasting immunity and its official certificate is valid for <strong>5 years</strong>. The older <strong>polysaccharide vaccine</strong> produces weaker, shorter-lasting immunity and its certificate is only valid for <strong>3 years</strong>. Saudi authorities and NaTHNaC both prefer the conjugate vaccine — it is what we administer at our Chislehurst pharmacy.</p>

          <a href="https://chislehurstpharmacygroup.kinsta.cloud/contact-page/#book-appointment" class="hajj-info-cta">
            Book Your MenACWY Vaccination
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        <div class="hajj-visual-placeholder">
          <?php $hajj_info_img = rl_field( 'hajj_info_image' ); ?>
          <img src="<?php echo esc_url( $hajj_info_img ?: 'https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop' ); ?>" alt="Pharmacist administering MenACWY vaccination — professional clinical setting" loading="lazy" />
          <div class="hajj-visual-badge hajj-visual-badge--prominent">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <div>
              <strong>Conjugate MenACWY vaccine</strong>
              <span>5-year certificate validity · Preferred by Saudi authorities</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== VACCINE REQUIREMENTS TABLE ===================== -->
  <section class="hajj-section-light" id="requirements">
    <div class="container">
      <div style="text-align:center;">
        <div class="hajj-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Vaccine Requirements</div>
        <h2 class="section-title">Which Vaccines Do I Need for Hajj and Umrah?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Based on current Saudi Ministry of Health, NaTHNaC and UKHSA guidance. Your pharmacist will confirm your individual requirements during consultation.</p>
      </div>
      <div class="hajj-compare-wrapper">
        <table class="hajj-compare-table">
          <thead>
            <tr>
              <th>Vaccine</th>
              <th>Hajj</th>
              <th>Umrah</th>
              <th>Certificate Required</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>MenACWY</strong></td>
              <td>Mandatory</td>
              <td>Strongly recommended</td>
              <td>Yes — 10 days before arrival</td>
            </tr>
            <tr>
              <td>Typhoid</td>
              <td>Recommended</td>
              <td>Recommended</td>
              <td>No</td>
            </tr>
            <tr>
              <td>Hepatitis A</td>
              <td>Recommended</td>
              <td>Recommended</td>
              <td>No</td>
            </tr>
            <tr>
              <td>Hepatitis B</td>
              <td>Recommended</td>
              <td>Recommended</td>
              <td>No</td>
            </tr>
            <tr>
              <td>Influenza (seasonal)</td>
              <td>Recommended</td>
              <td>Recommended</td>
              <td>No</td>
            </tr>
            <tr>
              <td>Polio</td>
              <td>Required if travelling from a polio-risk country</td>
              <td>Required if travelling from a polio-risk country</td>
              <td>Yes, if applicable</td>
            </tr>
            <tr>
              <td>Yellow fever</td>
              <td>Required if transiting an endemic country</td>
              <td>Required if transiting an endemic country</td>
              <td>Yes, if applicable</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="hajj-highlight-box" style="margin-top:32px;">
        For direct UK to Saudi flights, yellow fever vaccination is not a standard requirement. However, Saudi Arabia does require proof of vaccination if you are arriving from a country where yellow fever is present. If you have recently visited or plan to travel through any part of sub-Saharan Africa or South America, your pharmacist will check whether this applies to your itinerary.
      </div>
    </div>
  </section>

  <!-- ===================== WHO NEEDS TO BOOK ===================== -->
  <section class="hajj-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Who Needs to Book?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Whether it's your first pilgrimage or a return journey, our pharmacist will confirm the right vaccination path for you.</p>
      </div>

      <div class="hajj-who-grid">
        <div class="hajj-who-card">
          <div class="hajj-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
          <h3>First-Time Pilgrims</h3>
          <p class="hajj-who-body">If you have never received MenACWY vaccination, you need a full dose at least 10 days before departure. Our pharmacist will confirm which vaccine type is appropriate for your age and health history and issue your official certificate at the same appointment.</p>
        </div>
        <div class="hajj-who-card">
          <div class="hajj-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg></div>
          <h3>Returning Pilgrims</h3>
          <p class="hajj-who-body">If your previous MenACWY certificate has expired — or if more than 5 years have passed since a conjugate vaccine, or more than 3 years since a polysaccharide vaccine — you will need a new dose and a new certificate before you can travel.</p>
        </div>
        <div class="hajj-who-card">
          <div class="hajj-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
          <h3>Umrah Pilgrims</h3>
          <p class="hajj-who-body">MenACWY is not yet universally enforced at the border for Umrah, but Saudi health authorities are tightening compliance following 2024/2025 outbreaks. UKHSA strongly advises all Umrah pilgrims to vaccinate regardless. Our pharmacist will advise on your full travel health needs for Saudi Arabia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== YOUR APPOINTMENT ===================== -->
  <section class="hajj-section-light" id="how-it-works">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Your Appointment</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">A straightforward, professional appointment from consultation to certificate — approximately 20 minutes total.</p>
      </div>
      <div class="hajj-hiw-grid">
        <div class="hajj-hiw-photo-col">
          <div class="hajj-hiw-photo-wrap">
            <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop" alt="Pharmacist administering MenACWY vaccination in a professional clinical setting" class="hajj-hiw-photo" loading="lazy" />
            <div class="hajj-hiw-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span>GPhC-Registered Pharmacists</span>
            </div>
          </div>
        </div>
        <div>
          <span class="hajj-eyebrow">What to Expect</span>
          <div class="hajj-process-steps">
            <div class="hajj-process-step">
              <div class="hajj-step-num">1</div>
              <div class="hajj-step-body"><h4>Consultation</h4><p>Our GPhC-registered pharmacist confirms your travel dates, reviews any previous MenACWY vaccination, and checks whether you need additional recommended vaccines for your pilgrimage (typhoid, hepatitis A and B, influenza). We also verify whether polio or yellow fever requirements apply to your specific itinerary.</p></div>
            </div>
            <div class="hajj-process-step">
              <div class="hajj-step-num">2</div>
              <div class="hajj-step-body"><h4>Vaccination</h4><p>Single MenACWY conjugate vaccine administered into your upper arm. Additional recommended vaccines can be given at the same visit using different injection sites. Protection begins to develop within 7–10 days.</p></div>
            </div>
            <div class="hajj-process-step">
              <div class="hajj-step-num">3</div>
              <div class="hajj-step-body"><h4>Certificate Issued</h4><p>Your official MenACWY vaccination certificate is issued at the same appointment — bring it to your visa application or keep it with your passport. We also provide a vaccination record card for any additional vaccines administered.</p></div>
            </div>
          </div>
          <div class="hajj-total-time">Allow approximately 20 minutes total · Certificate issued same day</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="hajj-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <div class="hajj-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Transparent Pricing</div>
        <h2 class="section-title">Hajj &amp; Umrah Vaccination Pricing</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Simple, inclusive pricing. All MenACWY appointments include the official certificate — no hidden fees.</p>
      </div>

      <div class="hajj-pricing-grid hajj-pricing-grid--single">
        <!-- TODO: Replace MenACWY price placeholder once Sumeet confirms final price -->
        <div class="hajj-price-card featured">
          <div class="hajj-price-badge-top">Mandatory for Hajj</div>
          <div class="hajj-price-name">MenACWY Vaccination + Certificate</div>
          <div class="hajj-price-amount" style="font-size:32px;line-height:1.2;"><?php echo esc_html( rl_field( 'hajj_menacwy_price_display', 'Price to be confirmed' ) ); ?></div>
          <div class="hajj-price-per">Per dose — includes official certificate</div>
          <div class="hajj-price-details">
            <h4>What's Included</h4>
            <ul class="hajj-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Conjugate MenACWY vaccine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration by qualified professional</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> <strong>Official MenACWY certificate issued same day</strong></li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15-minute observation period</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Certificate valid for 5 years</li>
            </ul>
          </div>
          <a href="#book" class="hajj-price-cta">Book Your Hajj Vaccination</a>
        </div>
      </div>

      <!-- Recommended additional vaccines — all prices TBC -->
      <div class="hajj-addons">
        <h3 class="hajj-addons-title">Recommended Additional Vaccines for Hajj &amp; Umrah</h3>
        <p class="hajj-addons-sub">Your pharmacist may recommend some or all of the following alongside your MenACWY, depending on your medical history and itinerary. These can be administered at the same appointment using different injection sites.</p>
        <div class="hajj-addons-grid">
          <!-- TODO: Replace price placeholders once Sumeet confirms final prices -->
          <div class="hajj-addon-card">
            <div class="hajj-addon-name">Typhoid</div>
            <div class="hajj-addon-price"><?php echo esc_html( rl_field( 'hajj_typhoid_price_display', 'Price to be confirmed' ) ); ?></div>
          </div>
          <div class="hajj-addon-card">
            <div class="hajj-addon-name">Hepatitis A</div>
            <div class="hajj-addon-price"><?php echo esc_html( rl_field( 'hajj_hepa_price_display', 'Price to be confirmed' ) ); ?></div>
          </div>
          <div class="hajj-addon-card">
            <div class="hajj-addon-name">Hepatitis B</div>
            <div class="hajj-addon-price"><?php echo esc_html( rl_field( 'hajj_hepb_price_display', 'Price to be confirmed' ) ); ?></div>
          </div>
          <div class="hajj-addon-card">
            <div class="hajj-addon-name">Influenza (seasonal)</div>
            <div class="hajj-addon-price"><?php echo esc_html( rl_field( 'hajj_flu_price_display', 'Price to be confirmed' ) ); ?></div>
          </div>
        </div>
      </div>

      <div class="hajj-pricing-info-box">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span><strong>Final price confirmation:</strong> All prices are to be confirmed by our pharmacist. MenACWY pricing includes consultation, administration, observation, and the official certificate — no hidden fees.</span>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="hajj-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="hajj-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Hajj &amp; Umrah Vaccination FAQs</h2>
      </div>
      <div class="hajj-faq-list">
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">01</span><span class="hajj-faq-question">Is the MenACWY vaccine mandatory for Hajj?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">Yes. The Saudi Ministry of Health requires a valid MenACWY vaccination certificate for all pilgrims aged 1 year and over arriving for Hajj. Your certificate must be issued at least 10 days before arrival in Saudi Arabia, and conjugate MenACWY certificates are valid for 5 years.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">02</span><span class="hajj-faq-question">Do I need it for Umrah as well?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">MenACWY is strongly recommended for Umrah and enforcement is tightening. Saudi compliance for Umrah pilgrims was only 54% in March 2025, which contributed to a meningococcal W outbreak. The UKHSA confirmed MenW cases in UK Umrah returnees during February and March 2025. NaTHNaC and UKHSA both strongly advise all Umrah pilgrims to be vaccinated regardless of whether it is enforced at the border.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">03</span><span class="hajj-faq-question">How long is the certificate valid for?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">Certificate validity depends on the vaccine type. A <strong>conjugate MenACWY</strong> certificate is valid for <strong>5 years</strong>. A <strong>polysaccharide MenACWY</strong> certificate is only valid for <strong>3 years</strong>. The conjugate vaccine is preferred by Saudi authorities and NaTHNaC — it provides longer, more durable immunity, and it is what we administer at our Chislehurst pharmacy.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">04</span><span class="hajj-faq-question">How soon before travel do I need to get vaccinated?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">Your MenACWY certificate must be issued at least <strong>10 days before arrival</strong> in Saudi Arabia. Protection develops within 7 to 10 days of vaccination. We recommend booking at least 2 to 3 weeks before departure to leave a buffer and to allow time for any additional recommended vaccines (typhoid, hepatitis A and B, influenza) if needed.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">05</span><span class="hajj-faq-question">What other vaccines are recommended for Hajj and Umrah?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">NaTHNaC recommends MenACWY (mandatory/strongly recommended), typhoid, hepatitis A, hepatitis B, and seasonal influenza for Hajj and Umrah pilgrims. A polio booster is required if you are travelling from a polio-risk country. Yellow fever is only required if you are transiting through or arriving from a country with yellow fever transmission risk — it is not required for direct UK to Saudi flights. Your pharmacist will confirm what you need based on your itinerary and medical history.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">06</span><span class="hajj-faq-question">I was vaccinated several years ago — do I need a new certificate?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">If more than 5 years have passed since a conjugate MenACWY vaccination, or more than 3 years since a polysaccharide vaccination, your certificate has expired and you will need a new dose and a new certificate before you can travel. Bring any previous vaccination records to your appointment — our pharmacist will review them and confirm whether a fresh dose is required.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">07</span><span class="hajj-faq-question">Are there any side effects?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">Common side effects are mild and temporary — soreness, redness or swelling at the injection site, mild fever, headache or fatigue. These typically resolve within one to two days. Serious allergic reactions are extremely rare. We observe all patients for 15 minutes post-vaccination as standard practice and provide aftercare guidance before you leave.</div></div></div>
        <div class="hajj-faq-item"><button class="hajj-faq-trigger"><span class="hajj-faq-num">08</span><span class="hajj-faq-question">Is the vaccine suitable for older pilgrims or those with health conditions?</span><svg class="hajj-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hajj-faq-answer"><div class="hajj-faq-answer-inner">MenACWY is suitable for adults of all ages, including older pilgrims and most people with long-term health conditions. Our pharmacist will review your full medical history during consultation — including any medications, allergies and previous reactions — and confirm the vaccine is safe for you. The vaccine should not be given to anyone who has had a confirmed severe allergic reaction to a previous dose or to any of the vaccine components.</div></div></div>
      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA ===================== -->
  <section class="hajj-footer-cta-block" id="book">
    <div class="hajj-footer-cta-bg"><div class="hajj-footer-cta-orb hajj-footer-cta-orb-1"></div><div class="hajj-footer-cta-orb hajj-footer-cta-orb-2"></div></div>
    <div class="container hajj-footer-cta-inner">
      <div class="hajj-footer-cta-top">
        <div class="hajj-cta-badges">
          <span class="hajj-cta-badge">GPhC Registered</span>
          <span class="hajj-cta-badge">Official Certificate Same Day</span>
          <span class="hajj-cta-badge">5-Year Validity</span>
          <span class="hajj-cta-badge">Same-Day Appointments</span>
        </div>
        <h2 class="hajj-footer-cta-title">Don't Risk Your Hajj or Umrah. Book Your Vaccination Today.</h2>
        <p class="hajj-footer-cta-sub">MenW cases among UK pilgrims have been confirmed in 2024 and 2025. Protect yourself, protect your family, and ensure your certificate is in order before you travel. Same-day appointments at both our Chislehurst locations.</p>
        <div class="cta-buttons">
          <a href="tel:02084673158" class="btn-cta-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Your Hajj Vaccination
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Find Your Nearest Location
          </a>
        </div>
        <div class="hajj-cta-checks">
          <span>✓ Official MenACWY certificate issued same day</span>
          <span>✓ Conjugate vaccine valid for 5 years</span>
          <span>✓ Serving Chislehurst, Bromley, Orpington and South East London</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="hajj-disclaimer">
    <div class="container">
      The information on this page is for general information purposes only. It is not intended to replace medical advice from a healthcare professional. Vaccination requirements for Hajj and Umrah are set by the Saudi Ministry of Health and are subject to change. Always verify current requirements with your travel agent or the Saudi embassy before travelling. We make every effort to keep this page up to date but cannot be held liable for any inaccuracies.
    </div>
  </div>

<?php get_footer(); ?>
