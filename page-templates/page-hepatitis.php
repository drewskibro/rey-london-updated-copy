<?php
/**
 * Template Name: Hepatitis Vaccine
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="hep-hero">
    <div class="container">
      <div class="hep-hero-grid">
        <div class="hep-hero-text">
          <div class="hep-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            GPhC Registered&nbsp;&nbsp;|&nbsp;&nbsp;Hepatitis Vaccination Centre
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'hep_hero_title', 'Hepatitis A &amp; B Vaccines London: <span class="gradient-text">Complete Liver Protection</span> in Chislehurst' ) ); ?></h1>
          <p class="hep-hero-sub"><?php echo esc_html( rl_field( 'hep_hero_subtitle', 'GPhC-registered pharmacy offering hepatitis A and hepatitis B vaccinations for travel, work, and lifelong health protection. Single vaccines or combined course available. Same-day appointments at our Chislehurst pharmacies.' ) ); ?></p>

          <div class="hep-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered Pharmacists</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 25+ Years Protection</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Single or Combined Course</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Appointments</span>
          </div>

          <div class="hep-hero-ctas">
            <a href="#book" class="hep-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Hepatitis Vaccination
            </a>
            <a href="#pricing" class="hep-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
              Check Which Vaccine You Need
            </a>
          </div>
        </div>

        <div class="hep-hero-visual">
          <div class="hep-hero-visual-inner">
            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80&auto=format&fit=crop" alt="Pharmacist preparing hepatitis vaccination in clinical setting — professional travel health service" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="hep-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="hep-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          At a Glance
        </div>
        <h2 class="section-title">Key Facts About Hepatitis Vaccines</h2>
      </div>
      <div class="hep-quick-grid">
        <div class="hep-quick-card">
          <div class="hep-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="hep-quick-stat">25+ Years</div>
          <div class="hep-quick-label">Complete course provides lifelong immunity</div>
        </div>
        <div class="hep-quick-card">
          <div class="hep-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <div class="hep-quick-stat">Essential</div>
          <div class="hep-quick-label">Required for Asia, Africa, Americas, Middle East</div>
        </div>
        <div class="hep-quick-card">
          <div class="hep-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg></div>
          <div class="hep-quick-stat">A, B, or A+B</div>
          <div class="hep-quick-label">Hepatitis A only, B only, or combined Twinrix</div>
        </div>
        <div class="hep-quick-card">
          <div class="hep-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <div class="hep-quick-stat">Flexible</div>
          <div class="hep-quick-label">Standard or accelerated courses available</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== UNDERSTANDING HEPATITIS ===================== -->
  <section class="hep-section-white" id="about">
    <div class="container">
      <div class="hep-two-col">
        <div>
          <span class="hep-eyebrow">What You Need to Know</span>
          <h2 class="hep-section-title">What Are Hepatitis A and Hepatitis B?</h2>
          <p class="hep-body-text">Hepatitis A and hepatitis B are viral infections that attack the liver, causing inflammation and potentially serious disease. While both affect the liver, they spread differently and require different protection strategies.</p>
          <p class="hep-body-text"><strong>Hepatitis A</strong> spreads through contaminated food and water — the faecal-oral route. It's highly contagious in regions with poor sanitation. The virus causes acute liver inflammation lasting 2–6 months. Most people recover completely, but the illness can be severe enough to hospitalise and ruin travel plans.</p>
          <p class="hep-body-text"><strong>Hepatitis B</strong> transmits through blood and bodily fluids — sexual contact, contaminated needles, medical procedures with unsterile equipment, and mother-to-baby during birth. Unlike hepatitis A, hepatitis B can become a <strong>lifelong chronic infection</strong>, leading to cirrhosis, liver failure, and liver cancer.</p>
          <p class="hep-body-text">Both are preventable through vaccination — offering protection whether you're travelling abroad, working in healthcare, or simply protecting your long-term health.</p>

          <div class="hep-stat-grid">
            <div class="hep-stat-box"><div class="hep-stat-num">1,400,000</div><div class="hep-stat-desc">Hepatitis A cases annually worldwide</div></div>
            <div class="hep-stat-box"><div class="hep-stat-num">296,000,000</div><div class="hep-stat-desc">People living with chronic hepatitis B</div></div>
            <div class="hep-stat-box"><div class="hep-stat-num">820,000</div><div class="hep-stat-desc">Hepatitis B deaths each year</div></div>
            <div class="hep-stat-box"><div class="hep-stat-num">95%+</div><div class="hep-stat-desc">Vaccine effectiveness after full course</div></div>
          </div>
        </div>
        <div class="hep-visual-placeholder">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&q=80&auto=format&fit=crop" alt="Medical illustration of liver health and hepatitis protection" loading="lazy" />
          <div class="hep-visual-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <span>Both viruses are preventable through vaccination</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== COMPARISON TABLE ===================== -->
  <section class="hep-section-light" id="comparison">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Understanding the Difference: Hepatitis A vs Hepatitis B</h2>
      </div>
      <div class="hep-compare-wrapper">
        <table class="hep-compare-table">
          <thead><tr><th></th><th>Hepatitis A</th><th>Hepatitis B</th></tr></thead>
          <tbody>
            <tr><td>How It Spreads</td><td>Contaminated food/water, poor hygiene, faecal-oral route</td><td>Blood, bodily fluids, sexual contact, needles, childbirth</td></tr>
            <tr><td>Risk Regions</td><td>Asia, Africa, South/Central America, Middle East</td><td>Same regions + Eastern Europe, Pacific Islands</td></tr>
            <tr><td>Becomes Chronic?</td><td>No — always acute infection only</td><td>Yes — can become lifelong infection</td></tr>
            <tr><td>Serious Complications</td><td>Rare liver failure (mainly adults 50+)</td><td>Cirrhosis, liver cancer, liver failure</td></tr>
            <tr><td>Typical Recovery</td><td>2–6 months complete recovery</td><td>Can persist for life if chronic</td></tr>
            <tr><td>Vaccine Schedule</td><td>2 doses (0, 6–12 months)</td><td>3 doses (0, 1, 6 months)</td></tr>
            <tr><td>Protection Duration</td><td>25+ years after course</td><td>20–30+ years, often lifelong</td></tr>
            <tr><td>NHS Availability</td><td>Yes (travel to endemic areas)</td><td>Limited (occupational/high-risk only)</td></tr>
          </tbody>
        </table>
      </div>
      <div class="hep-highlight-box" style="margin-top:32px;">
        <strong>Good news:</strong> Both vaccines are safe, highly effective, and provide decades of protection. The combined Hepatitis A+B vaccine (Twinrix) protects against both viruses in a convenient 3-dose course.
      </div>
    </div>
  </section>

  <!-- ===================== WHO SHOULD GET VACCINATED ===================== -->
  <section class="hep-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Who Needs Hepatitis A &amp; B Vaccines?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Three key groups who benefit most from hepatitis vaccination. Our pharmacist will assess your individual needs during consultation.</p>
      </div>

      <div class="hep-who-grid">
        <div class="hep-who-card">
          <div class="hep-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
          <h3>Travellers</h3>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis A Essential For:</h4>
          <ul class="hep-who-list"><li>Travel to Asia, Africa, South/Central America, Middle East</li><li>Any destination with poor sanitation</li><li>Long-stay travel or visiting friends/family abroad</li><li>Adventure travel and rural areas</li></ul>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis B Essential For:</h4>
          <ul class="hep-who-list"><li>Long stays (6+ months) in endemic areas</li><li>Activities involving potential blood/fluid exposure</li><li>Medical/dental treatment abroad</li><li>Sexual contact with new partners while travelling</li></ul>
          <div class="hep-who-note">Popular destinations (Thailand, Bali, India, Egypt, Brazil, Peru, Vietnam) require both vaccines.</div>
        </div>
        <div class="hep-who-card">
          <div class="hep-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h3>Healthcare &amp; Occupational</h3>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis B Essential:</h4>
          <ul class="hep-who-list"><li>Doctors, nurses, paramedics, dentists</li><li>Laboratory staff handling blood</li><li>Prison staff and emergency services</li><li>Care home workers</li><li>Students entering healthcare professions</li></ul>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis A:</h4>
          <ul class="hep-who-list"><li>Laboratory workers handling hepatitis A virus</li><li>Sewage and sanitation workers</li><li>Care home staff in outbreak situations</li></ul>
          <div class="hep-who-note">Hepatitis B vaccination often mandatory for healthcare roles. We provide occupational documentation.</div>
        </div>
        <div class="hep-who-card">
          <div class="hep-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>Lifestyle &amp; Medical Risk</h3>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis A:</h4>
          <ul class="hep-who-list"><li>People with chronic liver disease</li><li>Men who have sex with men (MSM)</li><li>People who inject drugs</li><li>Close contacts of hepatitis A cases</li></ul>
          <h4 style="font-size:14px;font-weight:700;color:var(--hep-green);margin:8px 0;">Hepatitis B:</h4>
          <ul class="hep-who-list"><li>Anyone with multiple sexual partners</li><li>Men who have sex with men (MSM)</li><li>People who inject drugs</li><li>Chronic kidney or liver disease patients</li><li>Household contacts of hepatitis B carriers</li></ul>
          <div class="hep-who-note">All UK babies born since 2017 receive hepatitis B as part of routine childhood immunisation.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="hep-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Choose Your Hepatitis Vaccination Course</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Single vaccines or combined protection. Standard or accelerated schedules available.</p>
      </div>

      <div class="hep-pricing-grid">
        <!-- Hep A -->
        <div class="hep-price-card">
          <div class="hep-price-name">Hepatitis A Only</div>
          <div class="hep-price-amount"><sup>£</sup>50</div>
          <div class="hep-price-per">per dose</div>
          <div class="hep-price-details">
            <h4>Complete Course</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 2 doses required · Total: £100</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Doses at 0, 6–12 months</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 25+ years protection</li>
            </ul>
            <h4>What's Included</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Havrix or Vaqta vaccine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration &amp; observation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination record card</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Follow-up appointment reminders</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No additional fees</li>
            </ul>
          </div>
          <a href="#book" class="hep-price-cta">Book Hepatitis A</a>
        </div>

        <!-- Hep B -->
        <div class="hep-price-card">
          <div class="hep-price-name">Hepatitis B Only</div>
          <div class="hep-price-amount"><sup>£</sup>50</div>
          <div class="hep-price-per">per dose</div>
          <div class="hep-price-details">
            <h4>Standard Course</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 3 doses · Total: £150</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Doses at 0, 1, 6 months</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 20–30+ years protection</li>
            </ul>
            <h4>Accelerated Course</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 4 doses · Total: £200</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Doses at 0, 7, 21 days + 12-month booster</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Protection within 3 weeks</li>
            </ul>
            <h4>What's Included</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Engerix-B or HBvaxPRO vaccine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> All follow-up appointments booked</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No additional fees</li>
            </ul>
          </div>
          <a href="#book" class="hep-price-cta">Book Hepatitis B</a>
        </div>

        <!-- Combined A+B -->
        <div class="hep-price-card featured">
          <div class="hep-price-badge-top">Most Popular</div>
          <div class="hep-price-name">Combined A+B (Twinrix)</div>
          <div class="hep-price-amount"><sup>£</sup>75</div>
          <div class="hep-price-per">per dose</div>
          <div class="hep-price-details">
            <h4>Standard Course</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 3 doses · Total: £225</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Doses at 0, 1, 6 months</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Protects against BOTH viruses</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 25–30+ years immunity</li>
            </ul>
            <h4>Why Choose Combined</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> One fewer injection than separate courses</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Saves £25 vs separate vaccines</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Comprehensive dual protection</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Accelerated schedule available</li>
            </ul>
            <h4>What's Included</h4>
            <ul class="hep-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Twinrix combined vaccine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> All appointments pre-scheduled</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No additional fees</li>
            </ul>
          </div>
          <a href="#book" class="hep-price-cta">Book Combined A+B</a>
        </div>
      </div>

      <div class="hep-pricing-info-box">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span><strong>Complete transparency:</strong> All prices include pharmacist consultation, administration, vaccination record, and appointment coordination. No hidden fees or consultation charges. Pay per dose or book complete course in advance.</span>
      </div>
      <p class="hep-pricing-note">Hepatitis A: Book first dose at least 2 weeks before travel. Hepatitis B standard course takes 6 months — start early. Accelerated available for urgent travel with 12-month booster.</p>
    </div>
  </section>

  <!-- ===================== HOW IT WORKS ===================== -->
  <section class="hep-section-light" id="how-it-works">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">What to Expect at Your Appointment</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">A streamlined, professional vaccination experience from consultation to protection.</p>
      </div>
      <div class="hep-hiw-grid">
        <div class="hep-hiw-photo-col">
          <div class="hep-hiw-photo-wrap">
            <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop" alt="Pharmacist administering a hepatitis vaccine in a professional clinical setting" class="hep-hiw-photo" loading="lazy" />
            <div class="hep-hiw-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span>GPhC-Registered Pharmacists</span>
            </div>
          </div>
        </div>
        <div>
          <span class="hep-eyebrow">Your Appointment</span>
          <div class="hep-process-steps">
            <div class="hep-process-step">
              <div class="hep-step-num">1</div>
              <div class="hep-step-body"><h4>Travel &amp; Health Consultation (5–10 min)</h4><p>Our GPhC-registered pharmacist reviews your travel destinations, departure dates, previous vaccinations, medical history, and occupational risks. We determine which hepatitis vaccine(s) you need and recommend the best schedule — standard or accelerated.</p></div>
            </div>
            <div class="hep-process-step">
              <div class="hep-step-num">2</div>
              <div class="hep-step-body"><h4>Vaccination (2 min)</h4><p>Single injection administered into your upper arm (deltoid muscle). Hepatitis A and B vaccines are inactivated — they cannot cause the disease. If receiving both separate vaccines on the same day, they're given in different arms.</p></div>
            </div>
            <div class="hep-process-step">
              <div class="hep-step-num">3</div>
              <div class="hep-step-body"><h4>Record Card &amp; Future Bookings (5 min)</h4><p>You receive a vaccination record card documenting vaccine brand, batch number, and dates. We book all follow-up appointments and send automated reminders. Bring your record card to each subsequent dose.</p></div>
            </div>
          </div>
          <div class="hep-total-time">Allow 20 minutes total · Book hepatitis A at least 2 weeks before travel</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== HIGH-RISK REGIONS ===================== -->
  <section class="hep-section-dark" id="risk-areas">
    <div class="container">
      <div style="text-align:center;">
        <div class="hep-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Risk Areas</div>
        <h2 class="section-title">Where Are Hepatitis A &amp; B Common?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Understanding global risk helps you choose the right protection for your travels.</p>
      </div>

      <div class="hep-risk-two-col">
        <div class="hep-risk-col">
          <h3><span class="hep-risk-flag">🛡️</span> Hepatitis A High-Risk Regions</h3>
          <h4>Africa</h4>
          <ul class="hep-risk-list"><li>All of Sub-Saharan Africa</li><li>North Africa (Egypt, Morocco, Tunisia, Algeria, Libya)</li></ul>
          <h4>Asia</h4>
          <ul class="hep-risk-list"><li>Indian subcontinent (India, Pakistan, Bangladesh, Nepal, Sri Lanka)</li><li>Southeast Asia (Thailand, Vietnam, Cambodia, Laos, Indonesia, Myanmar, Philippines)</li><li>Central Asia (all countries)</li></ul>
          <h4>Americas</h4>
          <ul class="hep-risk-list"><li>Central America (all countries)</li><li>South America (excluding Chile, Argentina, Uruguay)</li><li>Caribbean (Haiti, Dominican Republic)</li></ul>
          <h4>Middle East</h4>
          <ul class="hep-risk-list"><li>All countries</li></ul>
        </div>
        <div class="hep-risk-col">
          <h3><span class="hep-risk-flag">🩸</span> Hepatitis B High-Risk Regions</h3>
          <h4>Africa</h4>
          <ul class="hep-risk-list"><li>Sub-Saharan Africa (5–10% prevalence)</li><li>North Africa</li></ul>
          <h4>Asia</h4>
          <ul class="hep-risk-list"><li>East Asia (China, Mongolia, North/South Korea)</li><li>Southeast Asia (2–8% prevalence)</li><li>South Asia (moderate prevalence)</li></ul>
          <h4>Pacific &amp; Americas</h4>
          <ul class="hep-risk-list"><li>Pacific Islands (high prevalence)</li><li>Amazon basin (Brazil, Peru, Colombia, Venezuela)</li></ul>
          <h4>Europe &amp; Middle East</h4>
          <ul class="hep-risk-list"><li>Eastern Europe &amp; Southern Europe (parts)</li><li>All Middle Eastern countries (moderate-high)</li></ul>
        </div>
      </div>

      <div class="hep-info-box">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <strong>Popular destinations requiring both vaccines:</strong> Thailand, Bali, India, Egypt, Kenya, Tanzania, Brazil, Peru, Vietnam, Cambodia, Philippines, Myanmar. Comprehensive protection recommended for these areas.
      </div>
    </div>
  </section>

  <!-- ===================== SIDE EFFECTS ===================== -->
  <section class="hep-section-white" id="safety">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Side Effects &amp; Safety Information</h2>
      </div>
      <div class="hep-two-col" style="margin-top:48px;">
        <div class="hep-side-col">
          <h3>Common Side Effects (Mild, 1 in 10 people)</h3>
          <h4 style="font-size:15px;font-weight:700;color:var(--primary-blue);margin:12px 0 8px;">Hepatitis A Vaccine:</h4>
          <ul class="hep-side-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Injection site soreness, redness, swelling</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Mild headache &amp; fatigue</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Low-grade fever &amp; general malaise</li>
          </ul>
          <h4 style="font-size:15px;font-weight:700;color:var(--primary-blue);margin:12px 0 8px;">Hepatitis B Vaccine:</h4>
          <ul class="hep-side-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Injection site pain or tenderness</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Mild fever (38°C or below)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Headache, tiredness, mild nausea</li>
          </ul>
          <p class="hep-side-note">Mild effects typically appear within 24–48 hours and resolve within 2–3 days without treatment. Manage with over-the-counter paracetamol if needed.</p>
        </div>
        <div class="hep-side-col">
          <h3>Contraindications &amp; Precautions</h3>
          <div class="hep-side-warning">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <div><strong>Do not vaccinate if:</strong> Severe allergic reaction to previous dose. Hepatitis B/Combined: Severe yeast allergy. Acute severe illness with high fever (defer).</div>
          </div>
          <h4 style="font-size:15px;font-weight:700;color:var(--primary-blue);margin:12px 0 8px;">Precautions:</h4>
          <ul class="hep-contra-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Pregnancy: Hep B safe if high risk; Hep A generally deferred</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Breastfeeding: Both vaccines safe</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Immunosuppression: Safe but may have reduced effectiveness</li>
          </ul>
          <p class="hep-side-note">Both vaccines have outstanding safety profiles with hundreds of millions of doses administered worldwide over 30+ years. Serious reactions are extremely rare — less than 1 in 1,000,000 doses.</p>
        </div>
      </div>
      <div class="hep-safety-box">Both hepatitis A and B vaccines are <strong>inactivated vaccines</strong> — they cannot cause the disease. We observe all patients for 15 minutes post-vaccination. Emergency treatment is immediately available.</div>
    </div>
  </section>

  <!-- ===================== NHS vs PRIVATE ===================== -->
  <section class="hep-section-light" id="nhs-private">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Hepatitis Vaccines: NHS or Private?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Understanding when you can access free NHS vaccination vs when private is needed.</p>
      </div>
      <div style="overflow-x:auto;">
        <table class="hep-nhs-table">
          <thead><tr><th></th><th>Free on NHS</th><th>Private at REY London</th></tr></thead>
          <tbody>
            <tr>
              <td>Hepatitis A</td>
              <td><ul class="hep-nhs-list"><li>Travel to endemic areas (GP referral, 6–8 weeks wait)</li><li>Chronic liver disease</li><li>Occupational exposure (sewage/lab)</li><li>MSM (sexual health clinics)</li></ul></td>
              <td><ul class="hep-nhs-list"><li>Immediate appointments (no GP wait)</li><li>Last-minute travel (&lt;6 weeks)</li><li>Pharmacy convenience</li><li>Combined A+B preferred</li><li>Accelerated schedule needed</li></ul></td>
            </tr>
            <tr>
              <td>Hepatitis B</td>
              <td><ul class="hep-nhs-list"><li>Healthcare workers (occupational)</li><li>Prison staff (occupational)</li><li>MSM (sexual health clinics)</li><li>People who inject drugs</li><li>UK babies (routine since 2017)</li></ul></td>
              <td><ul class="hep-nhs-list"><li>Travel to endemic areas</li><li>Not eligible for occupational NHS</li><li>Accelerated schedule for urgent travel</li><li>Combined A+B preferred</li><li>Pharmacy convenience &amp; speed</li></ul></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="hep-highlight-box" style="margin-top:32px;">
        <strong>Important:</strong> Many GPs now only provide hepatitis B for occupational health, not travel. NHS appointments may have 6–8 week wait times. Private vaccination offers immediate access, flexible scheduling, and combined A+B availability.
      </div>
    </div>
  </section>

  <!-- ===================== WHY CHOOSE ===================== -->
  <section class="hep-section-dark" id="why-us">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title" style="color:var(--white);">Expert Hepatitis Vaccination in Chislehurst</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;color:rgba(255,255,255,.75);">REY London Pharmacy provides professional, accessible hepatitis vaccination with expert guidance and flexible scheduling.</p>
      </div>

      <div class="hep-why-grid">
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div>
          <h3>GPhC Registered Pharmacists</h3>
          <p>All vaccinations administered by General Pharmaceutical Council registered pharmacists with specialist travel health training.</p>
        </div>
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>Genuine MHRA-Licensed Vaccines</h3>
          <p>Havrix, Vaqta, Engerix-B, HBvaxPRO, and Twinrix. All vaccines stored at 2–8°C with full cold chain documentation.</p>
        </div>
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <h3>Flexible Scheduling Options</h3>
          <p>Standard or accelerated courses. We schedule all follow-up appointments during your first visit and send automated reminders.</p>
        </div>
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <h3>Two Convenient Locations</h3>
          <p>Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London. Extended hours, free parking, walk-ins welcome.</p>
        </div>
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h3>Same-Day &amp; Emergency</h3>
          <p>Last-minute travel? Same-day appointments subject to vaccine availability. Walk-ins welcome for first doses. Perfect for late planners.</p>
        </div>
        <div class="hep-why-card">
          <div class="hep-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
          <h3>Complete Travel Health Service</h3>
          <p>Hepatitis often needed with yellow fever, typhoid, rabies, meningitis. One comprehensive pre-travel consultation covers all needs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="hep-locations" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Find your nearest<br><span class="gradient-text">Rey London pharmacy</span></h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Visit us in person for expert advice and immediate service</p>
      </div>
      <div class="hep-loc-grid">
        <!-- Pond Pharmacy -->
        <div class="hep-loc-card">
          <div class="hep-loc-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg" alt="Pond Pharmacy" loading="lazy" />
          </div>
          <div class="hep-loc-content">
            <h3>Pond Pharmacy</h3>
            <div class="hep-loc-details">
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 High St, Chislehurst BR7 5AF</p>
              </div>
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02084673158">020 8467 3158</a>
              </div>
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
              </div>
            </div>
            <div class="hep-loc-actions">
              <a href="https://maps.google.com/?q=59+High+Street+Chislehurst+BR7+5AF" target="_blank" class="hep-loc-btn-primary">Get Directions</a>
              <a href="tel:02084673158" class="hep-loc-btn-outline">Call Now</a>
            </div>
          </div>
        </div>

        <!-- Chislehurst Pharmacy -->
        <div class="hep-loc-card">
          <div class="hep-loc-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg" alt="Chislehurst Pharmacy" loading="lazy" />
          </div>
          <div class="hep-loc-content">
            <h3>Chislehurst Pharmacy</h3>
            <div class="hep-loc-details">
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
              </div>
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02082950017">020 8295 0017</a>
              </div>
              <div class="hep-loc-row">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
              </div>
            </div>
            <div class="hep-loc-actions">
              <a href="https://maps.google.com/?q=59+Chislehurst+Road+BR7+5NP" target="_blank" class="hep-loc-btn-primary">Get Directions</a>
              <a href="tel:02082950017" class="hep-loc-btn-outline">Call Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="hep-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="hep-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Hepatitis Vaccine FAQs</h2>
      </div>
      <div class="hep-faq-list">
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">01</span><span class="hep-faq-question">Do I need both hepatitis A and hepatitis B vaccines for travel?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">It depends on your destination and planned activities. Hepatitis A is recommended for most travellers to Asia, Africa, South America, and the Middle East due to food/water contamination risk. Hepatitis B is essential if staying 6+ months, may need medical treatment, have sexual contact with new partners, or work in healthcare. The combined A+B vaccine (Twinrix) offers convenient comprehensive protection for both.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">02</span><span class="hep-faq-question">Can I get hepatitis vaccines on the NHS?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis A: Often available free on NHS for travel to endemic areas — consult your GP 6–8 weeks before departure. Hepatitis B: Free on NHS only for occupational health (healthcare workers, prison staff) or high-risk groups, NOT typically for travel. Most travellers require private vaccination. REY London offers immediate appointments without GP referral wait times.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">03</span><span class="hep-faq-question">How long before travel should I get vaccinated?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis A: First dose at least 2 weeks before travel (ideally 3–4 weeks). Single dose provides good short-term protection for imminent trips. Hepatitis B: Standard course takes 6 months — start as early as possible. Accelerated course provides protection in 3 weeks but requires 12-month booster. Combined A+B: Same timeline as hepatitis B schedules.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">04</span><span class="hep-faq-question">What if I'm travelling in 2 weeks and haven't been vaccinated?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis A: First dose now still provides substantial protection — don't delay. Hepatitis B: Consider accelerated schedule (doses at 0, 7, 21 days) for urgent travel, with 12-month booster later. OR assess your specific risk and consider deferring hepatitis B to future trips if low-risk activities. Combined A+B: Accelerated schedule available. Book consultation to discuss your situation.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">05</span><span class="hep-faq-question">How long does hepatitis vaccine protection last?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis A: 25+ years after completing the 2-dose course, possibly lifelong. No routine boosters needed. Hepatitis B: 20–30+ years after 3-dose course, often lifelong protection. Routine boosters not needed for most people. Healthcare workers: May require blood tests (anti-HBs titres) and 5-year boosters depending on results. Bring vaccination records to appointments.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">06</span><span class="hep-faq-question">Is the combined Hepatitis A+B vaccine better than separate vaccines?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Combined (Twinrix) offers convenience — one fewer injection, one fewer appointment. It costs £225 vs £250 for separate hepatitis A and B courses, saving you £25 and time. Same high protection, same schedule (0, 1, 6 months). Most travellers choose combined for simplicity and comprehensive protection.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">07</span><span class="hep-faq-question">Can children receive hepatitis vaccines?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Yes. Hepatitis A: Approved from 1 year old. Hepatitis B: Approved from birth — all UK babies born since 2017 receive it as routine childhood immunisation (6-in-1 vaccine at 8, 12, 16 weeks). Travel doses follow same schedules as adults but may use different vaccine volumes. Bring child's existing vaccination record (red book) to appointment.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">08</span><span class="hep-faq-question">I started my hepatitis B course abroad but didn't finish. Can I continue here?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Absolutely. Hepatitis B vaccination is a series — you don't need to restart. Just continue where you left off. Ideally bring documentation of doses received (dates, vaccine brand if available). If you don't have records, we can arrange a blood test to check antibody levels and determine next steps. The vaccine series remains valid even with long gaps between doses.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">09</span><span class="hep-faq-question">Do I need a booster if I was vaccinated years ago?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Usually no. Hepatitis A: No booster needed after full 2-dose course — protection lasts 25+ years. Hepatitis B: No routine travel booster after full 3-dose course. Healthcare workers: May need blood test to check anti-HBs antibody levels and possible 5-year booster depending on results and exposure risk. Bring previous vaccination documentation to consultation.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">10</span><span class="hep-faq-question">Are hepatitis vaccines safe during pregnancy?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis A: Generally deferred during pregnancy unless high exposure risk makes it essential. Hepatitis B: Safe during pregnancy if significant exposure risk exists (e.g., healthcare work, travel to endemic area). Both are inactivated vaccines containing no live virus. We assess risk vs benefit during consultation. Inform pharmacist if you're pregnant or may become pregnant.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">11</span><span class="hep-faq-question">What are the side effects?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Most people experience only mild effects: injection site soreness, headache, or fatigue for 1–2 days. Manage with paracetamol if needed. Serious reactions are extremely rare — less than 1 in 1,000,000 doses. Both vaccines have excellent safety records with hundreds of millions of doses administered globally over 30+ years. We observe all patients for 15 minutes post-vaccination.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">12</span><span class="hep-faq-question">Can I have hepatitis vaccines with other travel vaccinations?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Yes. Hepatitis A and B can be given simultaneously with yellow fever, typhoid, rabies, meningitis, and other travel vaccines. We administer them at separate sites (different arms). This is ideal for multi-destination travel requiring multiple vaccines. Book a comprehensive travel health consultation to coordinate all necessary vaccinations efficiently.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">13</span><span class="hep-faq-question">I have liver disease. Should I get hepatitis vaccines?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Yes, strongly recommended. People with chronic liver disease (cirrhosis, hepatitis C, fatty liver disease, alcoholic liver disease) face higher risk of severe complications from hepatitis A or B infection. Hepatitis A can cause acute liver failure in people with existing liver disease. Hepatitis B can accelerate liver damage. Inform pharmacist of your liver condition during consultation.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">14</span><span class="hep-faq-question">What if I'm allergic to yeast?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">Hepatitis B and combined A+B vaccines are grown in yeast — severe yeast allergy (anaphylaxis to yeast) is a contraindication. You cannot receive these vaccines. Hepatitis A vaccine does NOT contain yeast and is safe. If you have yeast allergy, you can receive hepatitis A vaccine separately but not hepatitis B or Twinrix. Mild yeast sensitivity (not anaphylaxis) may still allow vaccination with extended observation — discuss during consultation.</div></div></div>
        <div class="hep-faq-item"><button class="hep-faq-trigger"><span class="hep-faq-num">15</span><span class="hep-faq-question">Do I need proof of hepatitis vaccination for travel?</span><svg class="hep-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hep-faq-answer"><div class="hep-faq-answer-inner">No country requires hepatitis vaccination certificates for entry (unlike yellow fever which has legal requirements). However, some employers, universities, volunteer organisations, or clinical placements DO require proof of hepatitis B vaccination and immunity (blood test showing antibodies). We provide detailed vaccination record cards and can arrange antibody testing if needed for employment or educational purposes.</div></div></div>
      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA + NEWSLETTER ===================== -->
  <section class="hep-footer-cta-block" id="book">
    <div class="hep-footer-cta-bg"><div class="hep-footer-cta-orb hep-footer-cta-orb-1"></div><div class="hep-footer-cta-orb hep-footer-cta-orb-2"></div></div>
    <div class="container hep-footer-cta-inner">
      <div class="hep-footer-cta-top">
        <div class="hep-cta-badges">
          <span class="hep-cta-badge">GPhC Registered</span>
          <span class="hep-cta-badge">25–30+ Years Protection</span>
          <span class="hep-cta-badge">Single or Combined</span>
          <span class="hep-cta-badge">Same-Day Appointments</span>
        </div>
        <h2 class="hep-footer-cta-title">Protect Your Liver. Protect Your Future.</h2>
        <p class="hep-footer-cta-sub">Don't risk serious liver disease while travelling or at work. Book your hepatitis vaccination at REY London Pharmacy in Chislehurst today.</p>
        <div class="cta-buttons">
          <a href="tel:02084673158" class="btn-cta-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Hepatitis Vaccination
          </a>
          <a href="tel:02084673158" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="hep-cta-checks">
          <span>✓ GPhC Registered Pharmacists</span>
          <span>✓ 25–30+ Years Protection</span>
          <span>✓ Single or Combined Vaccines</span>
          <span>✓ Same-Day Available</span>
        </div>
        <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,.55);">Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London</p>
      </div>
      <div class="hep-footer-cta-divider"></div>
      <div class="hep-footer-newsletter-row">
        <div class="hep-footer-newsletter-text">
          <h3>Travel health updates &amp; advice</h3>
          <p>Get expert travel health tips, vaccine reminders, and destination guides delivered to your inbox before your next trip.</p>
        </div>
        <form class="newsletter-form hep-footer-newsletter-form">
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
  <div class="hep-disclaimer">
    <div class="container">
      This information is for educational purposes and does not constitute medical advice. Hepatitis A and B vaccinations are prescription-only medicines in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. Information is accurate as of March 2026 and based on current MHRA, NHS, and WHO guidance.
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-glow"></div>
    <div class="container">
      <div class="footer-main" style="padding-top:0;">
        <div class="footer-grid">
          <div class="footer-brand-col">
            <div class="footer-logo-wrapper"><span class="footer-logo-text">Rey London</span></div>
            <p class="footer-description">Your trusted healthcare partner in London. Providing expert pharmaceutical care and personalized health services since 2010.</p>
            <div class="footer-contact-cards">
              <div class="contact-card"><div class="contact-card-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2"/></svg></div><div class="contact-card-content"><span class="contact-card-label">Pond Pharmacy</span><a href="tel:02084673158" class="contact-card-value">020 8467 3158</a></div></div>
              <div class="contact-card"><div class="contact-card-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2"/></svg></div><div class="contact-card-content"><span class="contact-card-label">Chislehurst Pharmacy</span><a href="tel:02082950017" class="contact-card-value">020 8295 0017</a></div></div>
            </div>
            <div class="footer-social"><span class="social-label">Follow Us</span><div class="social-links-premium"><a href="#facebook" class="social-link" aria-label="Facebook"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M15 1H12C10.67 1 9.4 1.53 8.46 2.46C7.53 3.4 7 4.67 7 6V9H4V13H7V19H11V13H14L15 9H11V6C11 5.73 11.1 5.48 11.29 5.29C11.48 5.1 11.73 5 12 5H15V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a><a href="#instagram" class="social-link" aria-label="Instagram"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="16" height="16" rx="4" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg></a></div></div>
          </div>
          <div class="footer-links-col"><h4 class="footer-col-title">Services</h4><ul class="footer-links-list"><li><a href="/#prescriptions">NHS Prescriptions</a></li><li><a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>">Travel Clinic</a></li><li><a href="<?php echo esc_url( home_url( '/yellow-fever-vaccine/' ) ); ?>">Yellow Fever Vaccine</a></li><li><a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>">HPV Vaccine</a></li><li><a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>">Vitamin B12</a></li><li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Weight Loss Programs</a></li></ul></div>
          <div class="footer-links-col"><h4 class="footer-col-title">Hepatitis Vaccines</h4><ul class="footer-links-list"><li><a href="#about">What is Hepatitis?</a></li><li><a href="#comparison">A vs B Comparison</a></li><li><a href="#eligibility">Who Needs Vaccines</a></li><li><a href="#pricing">Pricing &amp; Courses</a></li><li><a href="#risk-areas">Risk Regions</a></li><li><a href="#faq">FAQs</a></li></ul></div>
          <div class="footer-links-col"><h4 class="footer-col-title">Support</h4><ul class="footer-links-list"><li><a href="/#faq">FAQs</a></li><li><a href="/#opening-hours">Opening Hours</a></li><li><a href="/#privacy">Privacy Policy</a></li><li><a href="/#terms">Terms &amp; Conditions</a></li></ul></div>
        </div>
      </div>
      <div class="footer-bottom-premium">
        <div class="footer-bottom-content">
          <div class="footer-legal"><p class="footer-copyright">© 2026 Rey London Pharmacy. All rights reserved.</p><p class="footer-registration">Registered Pharmacy | GPhC Registration: 1234567</p></div>
          <div class="footer-certifications"><div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA Approved"></div><div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC Registered"></div><div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO Registered"></div></div>
          <div class="footer-payments"><span class="payments-label">We Accept</span><div class="payment-methods"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/visa.svg" alt="Visa"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mastercard.svg" alt="Mastercard"><div class="payment-badge-text">Apple Pay</div><div class="payment-badge-text">Google Pay</div></div></div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
