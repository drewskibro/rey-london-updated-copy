<?php
/**
 * Template Name: Malaria Prevention
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="mal-hero">
    <div class="container">
      <div class="mal-hero-grid">
        <div class="mal-hero-text">
          <div class="mal-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <?php echo esc_html( rl_field( 'mal_hero_eyebrow', 'Travel Health · Chislehurst' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'mal_hero_title', 'Malaria Prevention in Chislehurst — <span class="gradient-text">Antimalarial Tablets Prescribed Same Day</span>' ) ); ?></h1>
          <p class="mal-hero-sub"><?php echo esc_html( rl_field( 'mal_hero_subtitle', 'Protect yourself against malaria with expert pharmacist advice and same-day prescriptions. We assess your destination, recommend the right antimalarial, and dispense your tablets at the same appointment — no GP referral, no waiting.' ) ); ?></p>

          <div class="mal-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCA5A5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Prescriptions issued same day</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCA5A5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Three antimalarial options available</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCA5A5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointments at both locations</span>
          </div>

          <div class="mal-hero-ctas">
            <a href="#book" class="mal-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Malaria Consultation
            </a>
            <a href="#comparison" class="mal-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
              Which Antimalarial Do I Need?
            </a>
          </div>
        </div>

        <div class="mal-hero-visual">
          <div class="mal-hero-visual-inner">
            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80&auto=format&fit=crop" alt="Pharmacist preparing antimalarial prescription — malaria prevention service in Chislehurst" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="mal-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="mal-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          At a Glance
        </div>
        <h2 class="section-title">Key Facts About Malaria Prevention</h2>
      </div>
      <div class="mal-quick-grid">
        <div class="mal-quick-card">
          <div class="mal-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="mal-quick-stat">3 Options</div>
          <div class="mal-quick-label">Malarone, Doxycycline, or Mefloquine</div>
        </div>
        <div class="mal-quick-card">
          <div class="mal-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div class="mal-quick-stat">Same Day</div>
          <div class="mal-quick-label">Prescription and tablets in one visit</div>
        </div>
        <div class="mal-quick-card">
          <div class="mal-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="mal-quick-stat">2 Locations</div>
          <div class="mal-quick-label">Chislehurst pharmacies serving SE London</div>
        </div>
        <div class="mal-quick-card">
          <div class="mal-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div>
          <div class="mal-quick-stat">Expert</div>
          <div class="mal-quick-label">GPhC-registered pharmacist assessment</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT IS MALARIA ===================== -->
  <section class="mal-section-white" id="about">
    <div class="container">
      <div class="mal-two-col">
        <div>
          <span class="mal-eyebrow">What You Need to Know</span>
          <h2 class="mal-section-title">What Is Malaria?</h2>
          <p class="mal-body-text">Malaria is a serious and potentially fatal disease caused by Plasmodium parasites, transmitted through the bites of infected Anopheles mosquitoes. It cannot be caught from person-to-person contact — only through mosquito bites (or very rarely through blood transfusion or shared needles).</p>
          <p class="mal-body-text">Symptoms typically appear 7 to 30 days after being bitten, but can take up to a year to develop. Early symptoms include high fever, sweating and chills, headache, muscle pain, nausea, and diarrhoea. If untreated, malaria can progress rapidly to severe illness including organ failure, seizures, coma, and death — sometimes within 24 hours of the first symptom.</p>
          <p class="mal-body-text">There are five species of Plasmodium that infect humans. <strong>Plasmodium falciparum</strong> is the most dangerous and is the predominant species in sub-Saharan Africa. <strong>Plasmodium vivax</strong> is common in South and Southeast Asia and can relapse months or years after initial infection. Both can be prevented with the right antimalarial medication.</p>
          <p class="mal-body-text">Malaria kills over 600,000 people per year globally. The vast majority of deaths are preventable with appropriate prophylaxis. Taking antimalarial tablets as prescribed, combined with bite prevention measures, reduces your risk of infection by over 90%.</p>
          <p class="mal-body-text">No antimalarial is 100% effective, which is why bite prevention (DEET repellent, bed nets, covering exposed skin at dusk and dawn) is always recommended alongside medication. Our pharmacists will advise on both.</p>
        </div>
        <div class="mal-visual-placeholder">
          <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop" alt="Pharmacist providing antimalarial prescription and travel health advice" loading="lazy" />
          <div class="mal-visual-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <span>Over 90% risk reduction with prophylaxis + bite prevention.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== COMPARISON TABLE ===================== -->
  <section class="mal-section-light" id="comparison">
    <div class="container">
      <div style="text-align:center;">
        <div class="mal-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> The Three Antimalarials</div>
        <h2 class="section-title">Malarone vs Doxycycline vs Mefloquine</h2>
      </div>
      <div class="mal-compare-wrapper">
        <table class="mal-compare-table">
          <thead>
            <tr><th></th><th>Malarone</th><th>Doxycycline</th><th>Mefloquine</th></tr>
          </thead>
          <tbody>
            <tr><td>Generic name</td><td>Atovaquone / Proguanil</td><td>Doxycycline</td><td>Mefloquine</td></tr>
            <tr><td>How it works</td><td>Kills the parasite in the liver before it reaches the blood</td><td>Stops the parasite multiplying in the blood</td><td>Kills the parasite in the blood</td></tr>
            <tr><td>Dosing</td><td>1 tablet daily</td><td>1 capsule daily</td><td>1 tablet weekly</td></tr>
            <tr><td>Start before travel</td><td>1–2 days</td><td>1–2 days</td><td>2–3 weeks</td></tr>
            <tr><td>Continue after return</td><td>7 days</td><td>4 weeks</td><td>4 weeks</td></tr>
            <tr><td>Common side effects</td><td>Headache, stomach upset, mouth ulcers (generally well tolerated)</td><td>Sun sensitivity, stomach upset, thrush (women)</td><td>Vivid dreams, dizziness, anxiety (less common but can be significant)</td></tr>
            <tr><td>Best for</td><td>Short trips, last-minute travel, fewest side effects</td><td>Budget-conscious travellers, longer trips</td><td>Longer trips where weekly dosing is preferred</td></tr>
            <tr><td>Not suitable for</td><td>Severe kidney impairment</td><td>Pregnancy, children under 12</td><td>History of depression, anxiety, epilepsy, or psychiatric conditions</td></tr>
          </tbody>
        </table>
      </div>
      <div class="mal-highlight-box" style="margin-top:32px;">
        <strong>Not sure which is right for you?</strong> Our pharmacist will recommend the most appropriate antimalarial based on your destination, trip length, medical history, and personal preferences during your consultation.
      </div>
    </div>
  </section>

  <!-- ===================== WHO NEEDS ANTIMALARIALS ===================== -->
  <section class="mal-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Who Needs Antimalarials?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Malaria risk varies by destination, region, and season. Our pharmacist will assess your specific itinerary during consultation.</p>
      </div>
      <div class="mal-who-grid">
        <div class="mal-who-card">
          <div class="mal-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <h3>Travellers to Sub-Saharan Africa</h3>
          <p class="mal-who-body">Malaria risk is high throughout most of sub-Saharan Africa year-round, including popular destinations like Kenya, Tanzania, Ghana, Nigeria, The Gambia, Uganda, and Mozambique. Antimalarial prophylaxis is recommended for virtually all travellers to these regions regardless of itinerary. Plasmodium falciparum is the predominant species — the most dangerous form.</p>
        </div>
        <div class="mal-who-card">
          <div class="mal-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <h3>Travellers to South / Southeast Asia</h3>
          <p class="mal-who-body">Malaria risk in Asia is regional and seasonal. Countries including India, Cambodia, Myanmar, Laos, and parts of Indonesia and the Philippines have areas of transmission. Risk is typically highest in rural, forested, and border areas rather than major cities. Your pharmacist will assess your specific itinerary to determine whether prophylaxis is needed.</p>
        </div>
        <div class="mal-who-card">
          <div class="mal-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>Travellers to Central / South America</h3>
          <p class="mal-who-body">Parts of the Amazon basin (Brazil, Peru, Colombia, Venezuela, Ecuador), Central America (Panama, Honduras, Guatemala), and Haiti carry malaria risk. Risk varies significantly by altitude, region, and season. Urban areas and high-altitude destinations (e.g. Cusco, Bogotá, Quito) are generally malaria-free. Your pharmacist will advise based on your exact destinations and activities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== BITE PREVENTION ===================== -->
  <section class="mal-section-white" id="bite-prevention">
    <div class="container">
      <div style="text-align:center;">
        <span class="mal-eyebrow">Belt and Braces</span>
        <h2 class="mal-section-title">Antimalarials + Bite Prevention = Maximum Protection</h2>
        <p class="mal-body-text" style="max-width:800px;margin:0 auto 40px;">No antimalarial tablet is 100% effective. Combining medication with bite prevention measures reduces your risk of malaria infection by over 90%. Our pharmacists will advise on both during your consultation.</p>
      </div>
      <div class="mal-who-grid">
        <div class="mal-who-card" style="background:var(--white);border:1px solid rgba(10,47,138,.1);color:var(--primary-blue);">
          <h3 style="color:var(--primary-blue);">DEET Insect Repellent (50%)</h3>
          <p style="color:var(--text-gray);">Apply to all exposed skin from dusk to dawn. Reapply every 4–6 hours. We stock pharmaceutical-grade DEET at both pharmacies.</p>
        </div>
        <div class="mal-who-card" style="background:var(--white);border:1px solid rgba(10,47,138,.1);color:var(--primary-blue);">
          <h3 style="color:var(--primary-blue);">Insecticide-Treated Bed Nets</h3>
          <p style="color:var(--text-gray);">Sleep under a treated net every night in risk areas, even in air-conditioned rooms. Tuck the net under your mattress.</p>
        </div>
        <div class="mal-who-card" style="background:var(--white);border:1px solid rgba(10,47,138,.1);color:var(--primary-blue);">
          <h3 style="color:var(--primary-blue);">Protective Clothing</h3>
          <p style="color:var(--text-gray);">Wear long sleeves, long trousers, and socks from dusk to dawn when Anopheles mosquitoes are most active.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== YOUR APPOINTMENT ===================== -->
  <section class="mal-section-light" id="how-it-works">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Your Appointment</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Prescription and tablets in one visit — approximately 15–20 minutes total.</p>
      </div>
      <div class="mal-hiw-grid">
        <div class="mal-hiw-photo-col">
          <div class="mal-hiw-photo-wrap">
            <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop" alt="Pharmacist prescribing antimalarial tablets" class="mal-hiw-photo" loading="lazy" />
            <div class="mal-hiw-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
              <span>GPhC-Registered Pharmacists</span>
            </div>
          </div>
        </div>
        <div>
          <span class="mal-eyebrow">What to Expect</span>
          <div class="mal-process-steps">
            <div class="mal-process-step">
              <div class="mal-step-num">1</div>
              <div class="mal-step-body"><h4>Consultation (10 min)</h4><p>Our GPhC-registered pharmacist reviews your destinations, travel dates, accommodation type, planned activities, medical history, and any current medications. We determine whether you need antimalarials and which option is most appropriate for your trip.</p></div>
            </div>
            <div class="mal-process-step">
              <div class="mal-step-num">2</div>
              <div class="mal-step-body"><h4>Prescription &amp; Dispensing (5 min)</h4><p>Your antimalarial is prescribed and dispensed at the same appointment. We provide clear dosing instructions — when to start, how to take it, and how long to continue after you return. No GP referral needed.</p></div>
            </div>
            <div class="mal-process-step">
              <div class="mal-step-num">3</div>
              <div class="mal-step-body"><h4>Travel Ready</h4><p>Leave with your antimalarial tablets, bite prevention advice, and the confidence that you're properly protected. We're available for follow-up questions before or during your trip.</p></div>
            </div>
          </div>
          <div class="mal-total-time">Allow 15–20 minutes total · Tablets dispensed at the same visit</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="mal-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <div class="mal-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Transparent Pricing</div>
        <h2 class="section-title">Antimalarial Pricing</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">All prices include pharmacist consultation, prescription, dispensing, and bite prevention advice.</p>
      </div>

      <div class="mal-pricing-grid mal-pricing-grid--single">
        <!-- TODO: Replace price placeholder once confirmed -->
        <div class="mal-price-card featured">
          <div class="mal-price-name">Malaria Consultation + Prescription</div>
          <div class="mal-price-amount" style="font-size:32px;line-height:1.2;"><?php echo esc_html( rl_field( 'mal_price_consultation', 'Price to be confirmed' ) ); ?></div>
          <div class="mal-price-per">Consultation + prescription fee</div>
          <div class="mal-price-details">
            <h4>What's Included</h4>
            <ul class="mal-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Destination-specific risk evaluation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Antimalarial prescription</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Medication dispensed same day</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Bite prevention advice</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Follow-up support</li>
            </ul>
          </div>
          <a href="#book" class="mal-price-cta">Book Malaria Consultation</a>
        </div>
      </div>

      <!-- Individual tablet pricing -->
      <div class="mal-pricing-grid" style="margin-top:40px;max-width:900px;margin-left:auto;margin-right:auto;">
        <div class="mal-price-card">
          <div class="mal-price-name">Malarone (Atovaquone/Proguanil)</div>
          <div class="mal-price-amount" style="font-size:28px;"><?php echo esc_html( rl_field( 'mal_price_malarone', '£TBC' ) ); ?></div>
          <div class="mal-price-per">Per tablet</div>
        </div>
        <div class="mal-price-card">
          <div class="mal-price-name">Doxycycline</div>
          <div class="mal-price-amount" style="font-size:28px;"><?php echo esc_html( rl_field( 'mal_price_doxycycline', '£TBC' ) ); ?></div>
          <div class="mal-price-per">Per capsule</div>
        </div>
        <div class="mal-price-card">
          <div class="mal-price-name">Mefloquine</div>
          <div class="mal-price-amount" style="font-size:28px;"><?php echo esc_html( rl_field( 'mal_price_mefloquine', '£TBC' ) ); ?></div>
          <div class="mal-price-per">Per tablet</div>
        </div>
      </div>

      <div class="mal-pricing-info-box">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span><strong>Total cost depends on your trip length</strong> — the number of tablets you need is calculated from your travel dates. Your pharmacist will confirm the exact cost during consultation.</span>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="mal-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="mal-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Malaria Prevention FAQs</h2>
      </div>
      <div class="mal-faq-list">
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">01</span><span class="mal-faq-question">Do I need antimalarial tablets?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Whether you need antimalarials depends on your destination, the specific areas you're visiting, the time of year, your accommodation type, and your planned activities. Not all countries — or all areas within a country — carry malaria risk. Our pharmacist will assess your specific itinerary during consultation and recommend whether prophylaxis is needed. NaTHNaC country-specific guidance is used to inform every recommendation.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">02</span><span class="mal-faq-question">Which antimalarial is best for me?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">There is no single "best" antimalarial — the right choice depends on your destination, length of trip, medical history, other medications, and personal preferences. Malarone is generally the best tolerated with the shortest post-travel course (7 days). Doxycycline is the most affordable option for longer trips. Mefloquine requires only weekly dosing but is not suitable for everyone. Your pharmacist will recommend the most appropriate option during your consultation.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">03</span><span class="mal-faq-question">When should I start taking antimalarials?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Malarone and Doxycycline should be started 1–2 days before entering a malaria zone. Mefloquine should be started 2–3 weeks before travel to ensure it is well tolerated and to build up protective levels. All three must be continued after leaving the malaria zone — Malarone for 7 days, Doxycycline and Mefloquine for 4 weeks. Your pharmacist will calculate exact start and stop dates based on your itinerary.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">04</span><span class="mal-faq-question">What are the side effects?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Malarone is generally well tolerated. The most common side effects are headache, stomach upset, and occasionally mouth ulcers. Doxycycline can cause sun sensitivity (important in tropical climates), stomach irritation, and thrush in women. Take it with food and plenty of water. Mefloquine can cause vivid dreams, dizziness, and in some people anxiety or mood changes — it is not recommended for those with a history of depression, anxiety, epilepsy, or psychiatric conditions. Serious side effects with any antimalarial are rare.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">05</span><span class="mal-faq-question">Can I drink alcohol while taking antimalarials?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Moderate alcohol consumption is generally safe with all three antimalarials. However, alcohol can worsen the stomach irritation sometimes caused by Doxycycline and may increase the dizziness associated with Mefloquine. Use common sense — moderate drinking is unlikely to be a problem, but heavy drinking is not advisable while taking any medication.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">06</span><span class="mal-faq-question">What if I forget to take a dose?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Take the missed dose as soon as you remember, then continue with your normal schedule. Do not take a double dose. If you miss multiple doses, you may not be fully protected — continue taking the medication and use extra bite prevention measures. Contact our pharmacy for advice if you are unsure.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">07</span><span class="mal-faq-question">Do I need antimalarials for my destination?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">Malaria risk varies significantly by country, region, altitude, and season. Popular destinations with high risk include Kenya, Tanzania, The Gambia, Ghana, Nigeria, and parts of India. Some destinations have regional risk only — for example, Thailand's major cities and beach resorts are generally malaria-free, but rural border areas carry risk. The only way to know for certain is to have your specific itinerary assessed by a qualified pharmacist. Book a consultation and bring your travel plans.</div></div></div>
        <div class="mal-faq-item"><button class="mal-faq-trigger"><span class="mal-faq-num">08</span><span class="mal-faq-question">Can I buy antimalarials over the counter?</span><svg class="mal-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="mal-faq-answer"><div class="mal-faq-answer-inner">No — all antimalarial tablets available in the UK are prescription-only medicines. They must be prescribed by a qualified healthcare professional following a clinical assessment of your travel plans and medical history. Our pharmacists can prescribe and dispense antimalarials at the same appointment — no GP referral needed.</div></div></div>
      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA ===================== -->
  <section class="mal-footer-cta-block" id="book">
    <div class="mal-footer-cta-bg"><div class="mal-footer-cta-orb mal-footer-cta-orb-1"></div><div class="mal-footer-cta-orb mal-footer-cta-orb-2"></div></div>
    <div class="container mal-footer-cta-inner">
      <div class="mal-footer-cta-top">
        <div class="mal-cta-badges">
          <span class="mal-cta-badge">GPhC Registered</span>
          <span class="mal-cta-badge">Three Antimalarials in Stock</span>
          <span class="mal-cta-badge">Same-Day Prescriptions</span>
        </div>
        <h2 class="mal-footer-cta-title">Don't Risk Malaria. Get Protected Before You Travel.</h2>
        <p class="mal-footer-cta-sub">Expert antimalarial prescriptions from GPhC-registered pharmacists. Same-day appointments at both our Chislehurst locations — serving South East London, Bromley, Orpington, and Sidcup.</p>
        <div class="cta-buttons">
          <a href="<?php echo esc_url( home_url( '/contact-page/#book-appointment' ) ); ?>" class="btn-cta-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Malaria Consultation
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Find Your Nearest Location
          </a>
        </div>
        <div class="mal-cta-checks">
          <span>✓ Same-day prescriptions available</span>
          <span>✓ Three antimalarial options in stock</span>
          <span>✓ GPhC-registered pharmacists</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="mal-disclaimer">
    <div class="container">
      The information on this page is for general information purposes only. It is not intended to replace medical advice from a healthcare professional. Antimalarial medications are prescription-only medicines in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. Information is based on current NaTHNaC, UKHSA, and WHO guidance.
    </div>
  </div>

<?php get_footer(); ?>
