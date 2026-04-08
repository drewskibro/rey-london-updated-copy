<?php
/**
 * Template Name: DTP Vaccine
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="dtp-hero">
    <div class="container">
      <div class="dtp-hero-grid">
        <div class="dtp-hero-text">
          <div class="dtp-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <?php echo esc_html( rl_field( 'dtp_hero_eyebrow', 'Travel Health · Chislehurst' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'dtp_hero_title', 'DTP Vaccine London: <span class="gradient-text">Tetanus, Diphtheria &amp; Polio Protection</span> in Chislehurst' ) ); ?></h1>
          <p class="dtp-hero-sub"><?php echo esc_html( rl_field( 'dtp_hero_subtitle', 'A single booster injection keeps you protected against three serious diseases. Available same day at both our Chislehurst locations — no referral needed, no long waits.' ) ); ?></p>

          <div class="dtp-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Single injection — no course required</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Protects against three serious diseases</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointments at both locations</span>
          </div>

          <div class="dtp-hero-ctas">
            <a href="#book" class="dtp-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Your DTP Booster
            </a>
            <a href="#eligibility" class="dtp-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
              Check If You're Due a Booster
            </a>
          </div>
        </div>

        <div class="dtp-hero-visual">
          <div class="dtp-hero-visual-inner">
            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80&auto=format&fit=crop" alt="Pharmacist preparing DTP booster injection in clinical setting — professional travel health service" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="dtp-quick" id="at-a-glance">
    <div class="container">
      <div style="text-align:center;">
        <div class="dtp-quick-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          At a Glance
        </div>
        <h2 class="section-title">Key Facts About the DTP Booster</h2>
      </div>
      <div class="dtp-quick-grid">
        <div class="dtp-quick-card">
          <div class="dtp-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <div class="dtp-quick-stat">10 Years</div>
          <div class="dtp-quick-label">Duration of booster protection for most adults</div>
        </div>
        <div class="dtp-quick-card">
          <div class="dtp-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="dtp-quick-stat">1 Injection</div>
          <div class="dtp-quick-label">Single dose — no course required for boosters</div>
        </div>
        <div class="dtp-quick-card">
          <div class="dtp-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <div class="dtp-quick-stat">3 Diseases</div>
          <div class="dtp-quick-label">Tetanus, diphtheria and polio in one shot</div>
        </div>
        <div class="dtp-quick-card">
          <div class="dtp-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="dtp-quick-stat">2 Locations</div>
          <div class="dtp-quick-label">Chislehurst pharmacies serving South East London</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT IS DTP ===================== -->
  <section class="dtp-section-white" id="about">
    <div class="container">
      <div class="dtp-two-col">
        <div>
          <span class="dtp-eyebrow">What You Need to Know</span>
          <h2 class="dtp-section-title">What Is the DTP Vaccine?</h2>
          <p class="dtp-body-text">The DTP vaccine is a combined booster protecting against three serious bacterial and viral diseases — diphtheria, tetanus and polio. In the UK, the adult booster (known as Td/IPV or Revaxis) is given as a single injection and provides up to ten years of protection.</p>
          <p class="dtp-body-text">Most UK adults received their childhood DTP vaccinations as part of the routine immunisation schedule. However, immunity can wane over time. If your last booster was more than ten years ago — or you are travelling to areas where these diseases remain a risk — a single booster dose is recommended.</p>
          <p class="dtp-body-text">The three diseases this vaccine protects against are caused by different organisms and spread in different ways, but all can cause serious, life-threatening illness in unvaccinated adults.</p>
          <p class="dtp-body-text"><strong>Diphtheria</strong> is a highly infectious bacterial infection of the throat that can block the airway and release toxins damaging the heart and nervous system. It spreads through coughing and sneezing and remains a risk in parts of Asia, Africa, Eastern Europe and the Indian subcontinent.</p>
          <p class="dtp-body-text"><strong>Tetanus</strong> is caused by bacteria found in soil and animal manure worldwide. It enters the body through cuts, wounds and burns and releases toxins that cause severe, painful muscle spasms. If untreated, tetanus can be fatal. It is not contagious but the risk is ever-present — particularly in rural areas and destinations with limited medical facilities.</p>
          <p class="dtp-body-text"><strong>Polio</strong> is a viral infection that can cause permanent paralysis. While largely eliminated in the UK, it remains present in parts of South Asia and Africa, and vaccination is essential for travel to affected regions.</p>
        </div>
        <div class="dtp-visual-placeholder">
          <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=800&q=80&auto=format&fit=crop" alt="Pharmacist administering a DTP booster injection — professional clinical setting" loading="lazy" />
          <div class="dtp-visual-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <span>Single injection. Up to ten years of protection.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== COMPARISON TABLE ===================== -->
  <section class="dtp-section-light" id="comparison">
    <div class="container">
      <div style="text-align:center;">
        <div class="dtp-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> The Three Diseases Explained</div>
        <h2 class="section-title">Diphtheria, Tetanus and Polio — at a Glance</h2>
      </div>
      <div class="dtp-compare-wrapper">
        <table class="dtp-compare-table">
          <thead>
            <tr>
              <th></th>
              <th>Diphtheria</th>
              <th>Tetanus</th>
              <th>Polio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Cause</td>
              <td>Bacterial infection</td>
              <td>Bacterial toxin</td>
              <td>Viral infection</td>
            </tr>
            <tr>
              <td>How it spreads</td>
              <td>Coughing, sneezing, close contact</td>
              <td>Contaminated soil entering wounds</td>
              <td>Person-to-person, contaminated water</td>
            </tr>
            <tr>
              <td>Main symptoms</td>
              <td>Sore throat, airway blockage, grey membrane, fever</td>
              <td>Painful muscle spasms, jaw stiffness, breathing difficulty</td>
              <td>Muscle weakness, paralysis</td>
            </tr>
            <tr>
              <td>Serious complications</td>
              <td>Heart damage, nerve damage, death</td>
              <td>Respiratory failure, death</td>
              <td>Permanent paralysis, death</td>
            </tr>
            <tr>
              <td>Risk regions</td>
              <td>Asia, Africa, Eastern Europe, Indian subcontinent</td>
              <td>Worldwide — higher risk in rural areas with limited healthcare</td>
              <td>South Asia, parts of Africa</td>
            </tr>
            <tr>
              <td>Protection from booster</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="dtp-highlight-box" style="margin-top:32px;">
        <strong>Good news:</strong> A single adult booster (Revaxis / Td/IPV) protects against all three diseases in one injection, with up to ten years of immunity for most adults.
      </div>
    </div>
  </section>

  <!-- ===================== WHO NEEDS IT ===================== -->
  <section class="dtp-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Who Needs the DTP Booster?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">Three groups who benefit most from a DTP booster. Our pharmacist will review your vaccination history during consultation.</p>
      </div>

      <div class="dtp-who-grid">
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
          <h3>Travellers</h3>
          <p class="dtp-who-body">A tetanus booster is recommended by NaTHNaC if your last dose was more than ten years ago and you are visiting countries where medical facilities may be limited — particularly if you may be at risk of injury in remote or rural areas. Diphtheria protection is especially important for travel to parts of Asia, Africa and Eastern Europe where vaccine coverage is low. Polio booster is recommended for travel to countries where polio transmission is ongoing, including parts of South Asia and Africa.</p>
          <div class="dtp-who-note"><strong>Recommended for travel to:</strong> India, Pakistan, Bangladesh, Nepal, Afghanistan, parts of sub-Saharan Africa, Southeast Asia, Eastern Europe and any destination with limited medical facilities.</div>
        </div>
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h3>Occupational</h3>
          <p class="dtp-who-body">Adults working in healthcare, emergency services, construction, agriculture, veterinary work or any role involving regular exposure to soil, animals or potential wound injury may benefit from keeping their tetanus protection current. Those travelling overseas for work in areas with limited healthcare should ensure their full DTP booster is up to date before departure.</p>
        </div>
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>Catch-up Vaccination</h3>
          <p class="dtp-who-body">If you have no record of completing your five-dose childhood DTP course, or if more than ten years have passed since your last booster, a single dose will restore your protection. Our pharmacist will review your vaccination history during your consultation and advise accordingly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PRICING ===================== -->
  <section class="dtp-section-white" id="pricing">
    <div class="container">
      <div style="text-align:center;">
        <div class="dtp-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Transparent Pricing</div>
        <h2 class="section-title">DTP Booster — Simple, Inclusive Pricing</h2>
      </div>

      <div class="dtp-pricing-grid dtp-pricing-grid--single">
        <!-- TODO: Replace price placeholder once Sumeet confirms final price -->
        <div class="dtp-price-card featured">
          <div class="dtp-price-name">DTP Booster (Revaxis / Td/IPV)</div>
          <div class="dtp-price-amount" style="font-size:32px;line-height:1.2;"><?php echo esc_html( rl_field( 'dtp_price_display', 'Price to be confirmed' ) ); ?></div>
          <div class="dtp-price-per">Per dose — single injection</div>
          <div class="dtp-price-details">
            <h4>What's Included</h4>
            <ul class="dtp-price-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Revaxis (Td/IPV) vaccine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC pharmacist consultation</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Administration by qualified professional</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 15-minute observation period</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Vaccination record card</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointment available</li>
            </ul>
          </div>
          <a href="#book" class="dtp-price-cta">Book Your DTP Booster</a>
        </div>
      </div>

      <div class="dtp-pricing-info-box">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span><strong>Final price confirmation:</strong> Price to be confirmed by our pharmacist. All pricing includes consultation, administration, observation, and vaccination record — no hidden fees.</span>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="dtp-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="dtp-quick-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">DTP Booster FAQs</h2>
      </div>
      <div class="dtp-faq-list">
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">01</span><span class="dtp-faq-question">What does the DTP vaccine protect against?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">The adult DTP booster (Revaxis/Td/IPV) protects against three diseases: diphtheria, tetanus and polio. It is given as a single injection and is suitable for adults and children over ten years of age as a booster dose.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">02</span><span class="dtp-faq-question">How do I know if I need a booster?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">If your last DTP booster was more than ten years ago, or you have no clear record of completing your childhood vaccination course, a booster is likely recommended. Our pharmacist will review your vaccination history during your consultation and advise on whether a booster is needed for your age, travel plans and medical history.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">03</span><span class="dtp-faq-question">Do I need DTP for travel?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">NaTHNaC recommends a tetanus booster for travel to countries where medical facilities may be limited, if your last dose was more than ten years ago. Diphtheria protection is particularly important for travel to parts of Asia, Africa, Eastern Europe and the Indian subcontinent. Polio boosters are recommended for travel to certain parts of South Asia and Africa. Your pharmacist will advise based on your specific destinations.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">04</span><span class="dtp-faq-question">Is it just one injection?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">Yes — for adults who have completed their childhood course, a single booster injection is all that is required. There is no course to complete. One appointment, one injection, up to ten years of protection.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">05</span><span class="dtp-faq-question">How long does the DTP booster last?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">For most adults, a single booster dose provides protection for up to ten years. If you are travelling to a destination where polio is present, your pharmacist may advise on whether a more recent booster is warranted based on your travel history.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">06</span><span class="dtp-faq-question">Are there any side effects?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">Common side effects are mild and temporary — soreness, redness or swelling at the injection site, mild fever, headache or fatigue. These typically resolve within one to two days. Serious allergic reactions are extremely rare. We observe all patients for 15 minutes post-vaccination as standard practice.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">07</span><span class="dtp-faq-question">Who should not receive the DTP booster?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">The vaccine should not be given to anyone who has had a confirmed severe allergic reaction to a previous dose or to any of the vaccine components. Those with a current high fever should wait until recovered. Our pharmacist will review your medical history before administering the vaccine.</div></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-trigger"><span class="dtp-faq-num">08</span><span class="dtp-faq-question">Can I have the DTP booster alongside other travel vaccines?</span><svg class="dtp-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="dtp-faq-answer"><div class="dtp-faq-answer-inner">Yes — the DTP booster can be given at the same visit as other travel vaccines including hepatitis A, hepatitis B, typhoid and others, provided different injection sites are used. Our pharmacist will coordinate your full pre-travel vaccination schedule during your consultation.</div></div></div>
      </div>
    </div>
  </section>

  <!-- ===================== FINAL CTA ===================== -->
  <section class="dtp-footer-cta-block" id="book">
    <div class="dtp-footer-cta-bg"><div class="dtp-footer-cta-orb dtp-footer-cta-orb-1"></div><div class="dtp-footer-cta-orb dtp-footer-cta-orb-2"></div></div>
    <div class="container dtp-footer-cta-inner">
      <div class="dtp-footer-cta-top">
        <div class="dtp-cta-badges">
          <span class="dtp-cta-badge">GPhC Registered</span>
          <span class="dtp-cta-badge">Up to 10 Years Protection</span>
          <span class="dtp-cta-badge">Single Injection</span>
          <span class="dtp-cta-badge">Same-Day Appointments</span>
        </div>
        <h2 class="dtp-footer-cta-title">Don't Travel Unprotected. Get Your DTP Booster Today.</h2>
        <p class="dtp-footer-cta-sub">One injection. Up to ten years of protection against three serious diseases. Same-day appointments available at both our Chislehurst locations — serving South East London, Bromley, Orpington and Sidcup.</p>
        <div class="cta-buttons">
          <a href="tel:02084673158" class="btn-cta-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Your DTP Booster
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Find Your Nearest Location
          </a>
        </div>
        <div class="dtp-cta-checks">
          <span>✓ Single injection — no course required</span>
          <span>✓ Same-day appointments available</span>
          <span>✓ GPhC-registered pharmacists</span>
        </div>
        <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,.55);">Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London</p>
      </div>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="dtp-disclaimer">
    <div class="container">
      The information on this page is for general information purposes only. It is not intended to replace medical advice from a healthcare professional. We make every effort to keep the content on this page up to date and accurate but we cannot be held liable for any inaccuracies in the information provided. DTP vaccination (Revaxis / Td/IPV) is a prescription-only medicine in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation.
    </div>
  </div>

<?php get_footer(); ?>
