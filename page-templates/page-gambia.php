<?php
/**
 * Template Name: Gambia Travel Health
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="th-hero">
    <div class="th-hero-bg">
      <div class="th-hero-orb th-hero-orb-1"></div>
      <div class="th-hero-orb th-hero-orb-2"></div>
    </div>
    <div class="container th-hero-container">
      <div class="th-hero-content">
        <div class="th-hero-badge">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          <span><?php echo esc_html( rl_field( 'gambia_hero_badge', 'Gambia Travel Health' ) ); ?></span>
        </div>
        <h1 class="th-hero-title"><?php echo esc_html( rl_field( 'gambia_hero_title', 'Gambia Travel Vaccinations in South East London' ) ); ?></h1>
        <p class="th-hero-subtitle"><?php echo esc_html( rl_field( 'gambia_hero_subtitle', 'Expert travel health advice and essential vaccines for your Gambia trip. Same-day appointments available at both our Chislehurst locations.' ) ); ?></p>
        <div class="th-hero-actions">
          <a href="#booking" class="th-btn-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Gambia Travel Consultation
          </a>
          <a href="<?php echo esc_url( home_url( rl_field( 'gambia_hero_cta2_url', '/contact/' ) ) ); ?>" class="th-btn-secondary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <?php echo esc_html( rl_field( 'gambia_hero_cta2_label', 'Find Your Nearest Location' ) ); ?>
          </a>
        </div>
        <div class="th-hero-trust">
          <div class="th-trust-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span><?php echo esc_html( rl_field( 'gambia_hero_trust_1', 'GPhC Registered' ) ); ?></span>
          </div>
          <div class="th-trust-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span><?php echo esc_html( rl_field( 'gambia_hero_trust_2', 'Same-Day Appointments' ) ); ?></span>
          </div>
          <div class="th-trust-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            <span><?php echo esc_html( rl_field( 'gambia_hero_trust_3', 'Expert Pharmacist Advice' ) ); ?></span>
          </div>
        </div>
      </div>
      <div class="th-hero-visual">
        <img src="https://images.unsplash.com/photo-1552553302-9211bf7f7053?w=800&h=600&fit=crop" alt="The Gambia West Africa">
        <div class="th-hero-visual-overlay"></div>
      </div>
    </div>
  </section>

  <!-- Section 1: Vaccinations Needed -->
  <section class="th-section th-vaccines-section" id="vaccines">
    <div class="container">
      <div class="th-section-header">
        <div class="th-section-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Recommended Vaccines</span>
        </div>
        <h2 class="section-title">Essential Vaccinations for<br><span class="gradient-text-light">Gambia Travel</span></h2>
        <p class="th-section-desc">Planning a trip to The Gambia from London? Our South East London travel clinics provide comprehensive vaccination services and expert travel health advice for Gambia travellers. Whether you're visiting Banjul, the River Gambia, Kunta Kinteh Island, or exploring upcountry, we'll ensure you're fully protected with the right vaccines and antimalarial medication. Our GPhC-registered pharmacists assess your specific itinerary and medical history to create a personalised vaccination plan tailored to your trip.</p>
      </div>

      <!-- Routine Vaccines -->
      <div class="th-vaccine-category">
        <div class="th-category-header th-category-routine">
          <div class="th-category-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
          </div>
          <div>
            <h3>Routine Vaccines</h3>
            <p>Ensure these are up to date before travel</p>
          </div>
        </div>
        <div class="th-vaccine-grid">
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">MMR</div>
            <div class="th-vaccine-full">Measles, Mumps, Rubella</div>
            <p class="th-vaccine-desc">Essential routine vaccine protecting against three serious viral infections. Most UK adults received this as children but check your records.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                All travellers
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                2 doses (if not previously vaccinated)
              </span>
            </div>
          </div>
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">DTP Booster</div>
            <div class="th-vaccine-full">Diphtheria, Tetanus, Polio</div>
            <p class="th-vaccine-desc">A combined booster vaccine recommended every 10 years for travellers. Protects against three potentially fatal diseases.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                All travellers
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                1 booster dose
              </span>
            </div>
          </div>
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">Hepatitis A</div>
            <div class="th-vaccine-full">Hepatitis A Virus</div>
            <p class="th-vaccine-desc">Essential for all travellers to The Gambia. Spread through contaminated food and water, Hepatitis A is common in West Africa. Provides long-term immunity after a two-dose course.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                All travellers
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                1 dose (booster at 6–12 months)
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Recommended Vaccines -->
      <div class="th-vaccine-category">
        <div class="th-category-header th-category-recommended">
          <div class="th-category-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div>
            <h3>Recommended Vaccines for The Gambia</h3>
            <p>Strongly advised depending on your itinerary</p>
          </div>
        </div>
        <div class="th-vaccine-grid">
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">Hepatitis B</div>
            <div class="th-vaccine-full">Hepatitis B Virus</div>
            <p class="th-vaccine-desc">Recommended for longer stays or if you may be exposed to blood or body fluids. Particularly important for adventure travellers and those visiting rural areas.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                Long stays, adventure travellers
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                3 doses over 21 days (accelerated)
              </span>
            </div>
          </div>
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">Typhoid</div>
            <div class="th-vaccine-full">Salmonella Typhi</div>
            <p class="th-vaccine-desc">Common in areas with poor sanitation. Spread through contaminated food and water. Essential for The Gambia — typhoid risk is significant throughout the country due to limited water sanitation infrastructure.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                All travellers (especially street food lovers)
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                1 dose
              </span>
            </div>
          </div>
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">Meningitis ACWY</div>
            <div class="th-vaccine-full">Meningococcal Disease</div>
            <p class="th-vaccine-desc">Recommended for The Gambia, which lies within the African meningitis belt. Risk is highest during the dry season (December to June). A single dose provides protection for up to five years.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                All travellers (especially dry season)
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                1 dose
              </span>
            </div>
          </div>
          <div class="th-vaccine-card">
            <div class="th-vaccine-name">Rabies</div>
            <div class="th-vaccine-full">Rabies Virus</div>
            <p class="th-vaccine-desc">Strongly recommended for adventure travellers, rural visitors, and animal contact. Rabies is present in The Gambia through stray dogs and wildlife. Pre-exposure vaccination is recommended for adventure travellers and those visiting rural areas.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                Adventure travellers, animal contact
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                3 doses over 21–28 days
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Required Vaccines -->
      <div class="th-vaccine-category">
        <div class="th-category-header th-category-required">
          <div class="th-category-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <div>
            <h3>Required Vaccines</h3>
            <p>May be mandatory depending on your route</p>
          </div>
        </div>
        <div class="th-vaccine-grid">
          <div class="th-vaccine-card th-vaccine-card-required">
            <div class="th-vaccine-name">Yellow Fever</div>
            <div class="th-vaccine-full">Yellow Fever Virus (Certificate Required)</div>
            <p class="th-vaccine-desc">Required if arriving from a country with risk of Yellow Fever transmission. The Gambia itself is a Yellow Fever risk area, so vaccination is recommended for most travellers regardless of entry requirements. Your pharmacist will advise based on your specific itinerary.</p>
            <div class="th-vaccine-meta">
              <span class="th-vaccine-who">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                Travellers from endemic countries
              </span>
              <span class="th-vaccine-doses">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                1 dose (lifetime immunity)
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lifestyle Banner 1 -->
  <div class="th-lifestyle-banner">
    <div class="th-lifestyle-img-wrap">
      <img src="https://images.unsplash.com/photo-1506665531195-3566af2b4dfa?w=1400&h=500&fit=crop&q=80" alt="The Gambia — local markets, river excursions and West African adventures" loading="lazy">
      <div class="th-lifestyle-overlay"></div>
    </div>
    <div class="th-lifestyle-caption">
      <div class="container">
        <div class="th-lifestyle-caption-inner">
          <div class="th-lifestyle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <p>Local markets, river excursions, and West African adventures — protecting your health means enjoying The Gambia to the fullest</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2: Health Risks -->
  <section class="th-section-dark th-risks-section" id="health-risks">
    <div class="th-section-dark-bg">
      <div class="th-dark-orb th-dark-orb-1"></div>
      <div class="th-dark-orb th-dark-orb-2"></div>
    </div>
    <div class="container th-risks-container">
      <div class="th-section-header th-section-header-dark">
        <div class="th-section-pill th-pill-dark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          <span>Know Before You Go</span>
        </div>
        <h2 class="th-title-dark">Health Risks When Traveling<br>to The Gambia</h2>
        <p class="th-desc-dark">Understanding potential health risks helps you prepare properly. Our pharmacists will assess your specific itinerary and activities to provide tailored advice.</p>
      </div>

      <div class="th-risks-grid">
        <div class="th-risk-card">
          <div class="th-risk-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Mosquito-Borne Diseases</h3>
          <p>Malaria is a serious risk throughout The Gambia, including urban areas such as Banjul. Risk is present year-round but peaks during and just after the rainy season (June to November). Dengue fever and Zika virus are also present. Use DEET-based repellents, sleep under treated mosquito nets, and wear long sleeves during dawn and dusk.</p>
        </div>
        <div class="th-risk-card">
          <div class="th-risk-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z"/></svg>
          </div>
          <h3>Food & Water Safety</h3>
          <p>Travellers' diarrhoea is common. Drink bottled water only, avoid ice from unknown sources, and be cautious with street food—choose busy stalls with fresh preparation. Typhoid and Hepatitis A are real risks from contaminated food and water, making vaccination essential before your trip.</p>
        </div>
        <div class="th-risk-card">
          <div class="th-risk-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Schistosomiasis (Bilharzia)</h3>
          <p>A parasitic infection found in freshwater rivers and lakes throughout The Gambia, including the River Gambia. Avoid swimming, wading, or washing in freshwater. Infection can cause serious long-term organ damage if untreated. Sea swimming is generally safe.</p>
        </div>
        <div class="th-risk-card">
          <div class="th-risk-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Rabies from Animal Bites</h3>
          <p>Stray dogs are common throughout The Gambia, including tourist areas. Rabies is fatal once symptoms appear and post-exposure treatment may be difficult to access locally. Pre-exposure vaccination is strongly recommended, particularly for adventure travellers, cyclists, and families with children.</p>
        </div>
        <div class="th-risk-card">
          <div class="th-risk-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/></svg>
          </div>
  </section>

  <!-- Section 3: Antimalarial Medication -->
  <section class="th-section th-malaria-section" id="malaria">
    <div class="container">
      <div class="th-section-header">
        <div class="th-section-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          <span>Malaria Prevention</span>
        </div>
        <h2 class="section-title">Malaria Prevention<br><span class="gradient-text-light">for The Gambia</span></h2>
        <p class="th-section-desc">The Gambia is a high-risk malaria country. Unlike some destinations where malaria is limited to rural border areas, malaria transmission occurs throughout The Gambia — including urban areas such as Banjul and the coastal tourist regions. Risk is present year-round but peaks during and just after the rainy season (June to November). Antimalarial prophylaxis is strongly recommended for all travellers regardless of itinerary.</p>
      </div>

      <div class="th-malaria-grid">
        <div class="th-malaria-card">
          <div class="th-malaria-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h3>Risk Areas in The Gambia</h3>
          <p>All areas of The Gambia carry malaria risk, including Banjul, the Atlantic coast resorts (Kololi, Kotu, Bakau), and up-country regions. Risk is highest during and immediately after the rainy season (June to November). The River Gambia corridor has particularly high mosquito density. Plasmodium falciparum, the most dangerous form, is the predominant species.</p>
        </div>
        <div class="th-malaria-card">
          <div class="th-malaria-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Antimalarial Options</h3>
          <p>We prescribe Malarone (atovaquone/proguanil), Doxycycline, and Mefloquine. Our pharmacists will recommend the most suitable option based on your health, activities, and duration of stay. All options available in stock at both clinics.</p>
        </div>
        <div class="th-malaria-card">
          <div class="th-malaria-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Bite Prevention</h3>
          <p>Use DEET 50% insect repellent on exposed skin. Wear light-coloured long sleeves and trousers at dawn/dusk. Sleep under insecticide-treated mosquito nets in rural areas. We stock premium DEET repellents at both clinics.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Lifestyle Banner 2 -->
  <div class="th-lifestyle-banner">
    <div class="th-lifestyle-img-wrap">
      <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=1400&h=500&fit=crop&q=80" alt="River Gambia and West African landscape — travel health protection" loading="lazy">
      <div class="th-lifestyle-overlay"></div>
    </div>
    <div class="th-lifestyle-caption">
      <div class="container">
        <div class="th-lifestyle-caption-inner">
          <div class="th-lifestyle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <p>From river excursions to wildlife reserves — book your travel consultation and get protected before you go</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 4: Booking & Process -->
  <section class="th-section-dark th-process-section" id="booking">
    <div class="th-section-dark-bg">
      <div class="th-dark-orb th-dark-orb-1"></div>
      <div class="th-dark-orb th-dark-orb-2"></div>
    </div>
    <div class="container th-process-container">
      <div class="th-section-header th-section-header-dark">
        <div class="th-section-pill th-pill-dark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <span>Simple 3-Step Process</span>
        </div>
        <h2 class="th-title-dark">How to Get Your Gambia<br>Travel Vaccinations</h2>
      </div>

      <div class="th-steps-grid">
        <div class="th-step-card">
          <div class="th-step-number">1</div>
          <h3>Book Consultation</h3>
          <p>Call or visit either of our South East London clinics. We serve patients from Chislehurst, Bromley, Orpington, Sidcup, Bexley, and surrounding areas. Walk-ins welcome or book ahead by phone.</p>
          <div class="th-step-cta">
            <a href="tel:02082950017">020 8295 0017</a>
            <a href="tel:02084673158">020 8467 3158</a>
          </div>
        </div>
        <div class="th-step-card">
          <div class="th-step-number">2</div>
          <h3>Expert Assessment</h3>
          <p>Our GPhC-registered pharmacists review your itinerary, medical history, and provide personalised The Gambia travel health advice. We'll identify exactly which vaccines and medications you need.</p>
        </div>
        <div class="th-step-card">
          <div class="th-step-number">3</div>
          <h3>Same-Day Vaccination</h3>
          <p>Receive your vaccines immediately. We stock all The Gambia travel vaccinations and can complete your course before departure. No waiting lists, no delays—get protected the same day.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Location & Service Area -->
  <section class="th-section th-locations-section" id="locations-th">
    <div class="container">
      <div class="th-section-header">
        <div class="th-section-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Our Clinics</span>
        </div>
        <h2 class="section-title">The Gambia Travel Clinic Locations<br><span class="gradient-text-light">in South East London</span></h2>
      </div>

      <div class="th-locations-grid">
        <div class="th-location-card">
          <div class="th-location-badge">Main Clinic</div>
          <h3>Chislehurst Pharmacy & Travel Clinic</h3>
          <div class="th-location-details">
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>59 Chislehurst Rd, Chislehurst BR7 5NP</span>
            </div>
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:02082950017">020 8295 0017</a>
            </div>
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <span>Mon–Fri: 9am–6pm | Sat: 9am–1pm | Sun: Closed</span>
            </div>
          </div>
          <p class="th-location-serving">Serving Chislehurst, Bromley, Sidcup, and South East London</p>
          <div class="th-location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2494.5!2d0.0566!3d51.4075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a9f8a8a8a8a8%3A0x0!2s59+Chislehurst+Rd%2C+Chislehurst+BR7+5NP!5e0!3m2!1sen!2suk!4v1" width="100%" height="200" style="border:0;border-radius:12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <a href="tel:02082950017" class="th-location-btn">Book at Chislehurst</a>
        </div>

        <div class="th-location-card">
          <div class="th-location-badge">Second Location</div>
          <h3>Pond Pharmacy</h3>
          <div class="th-location-details">
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>59 High St, Chislehurst BR7 5AF</span>
            </div>
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:02084673158">020 8467 3158</a>
            </div>
            <div class="th-location-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <span>Mon–Fri: 8.30am–6.30pm | Sat: 9am–2pm | Sun: Closed</span>
            </div>
          </div>
          <p class="th-location-serving">Convenient location for Orpington, Bexley, and surrounding areas</p>
          <div class="th-location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2494.5!2d0.0586!3d51.4095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a9f8a8a8a8a8%3A0x0!2s59+High+St%2C+Chislehurst+BR7+5AF!5e0!3m2!1sen!2suk!4v1" width="100%" height="200" style="border:0;border-radius:12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <a href="tel:02084673158" class="th-location-btn">Book at Pond Pharmacy</a>
        </div>
      </div>

      <div class="th-service-area">
        <p>While based in Chislehurst, we welcome The Gambia travelers from across South East London and beyond. Easy access from <strong>Bromley, Orpington, Sidcup, Bexley, Eltham, Greenwich, Lewisham,</strong> and surrounding areas.</p>
      </div>
    </div>
  </section>

  <!-- Section 6: Pricing & Packages -->
  <section class="th-section-dark th-pricing-section" id="pricing">
    <div class="th-section-dark-bg">
      <div class="th-dark-orb th-dark-orb-1"></div>
      <div class="th-dark-orb th-dark-orb-2"></div>
    </div>
    <div class="container th-pricing-container">
      <div class="th-section-header th-section-header-dark">
        <div class="th-section-pill th-pill-dark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="2" x2="12" y2="22"/><path d="M17 6H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/><line x1="8" y1="2" x2="16" y2="2"/><line x1="8" y1="22" x2="16" y2="22"/></svg>
          <span>Clear Pricing</span>
        </div>
        <h2 class="th-title-dark">The Gambia Travel Vaccination<br>Packages</h2>
      </div>

      <div class="th-pricing-grid">
        <div class="th-pricing-card">
          <div class="th-pricing-tier">Essential</div>
          <h3>Essential Gambia Package</h3>
          <div class="th-pricing-price">
            <span class="th-price-from">From</span>
            <span class="th-price-amount">£120</span>
          </div>
          <ul class="th-pricing-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Hepatitis A vaccination
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Typhoid vaccination
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Travel health consultation
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Personalised travel advice
            </li>
          </ul>
          <a href="tel:02082950017" class="th-pricing-btn">Book Essential Package</a>
        </div>

        <div class="th-pricing-card th-pricing-card-featured">
          <div class="th-pricing-popular">Most Popular</div>
          <div class="th-pricing-tier">Comprehensive</div>
          <h3>Comprehensive Gambia Package</h3>
          <div class="th-pricing-price">
            <span class="th-price-from">From</span>
            <span class="th-price-amount">£280</span>
          </div>
          <ul class="th-pricing-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Hepatitis A & B vaccinations
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Typhoid vaccination
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Meningitis ACWY
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Travel health consultation
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              Antimalarial assessment
            </li>
          </ul>
          <a href="tel:02082950017" class="th-pricing-btn th-pricing-btn-featured">Book Comprehensive Package</a>
        </div>

        <div class="th-pricing-card th-pricing-card-individual">
          <div class="th-pricing-tier">Individual Vaccines</div>
          <h3>À La Carte Pricing</h3>
          <div class="th-individual-list">
            <div class="th-individual-item">
              <span>Hepatitis A</span>
              <span class="th-individual-price">From £50</span>
            </div>
            <div class="th-individual-item">
              <span>Hepatitis B (per dose)</span>
              <span class="th-individual-price">From £40</span>
            </div>
            <div class="th-individual-item">
              <span>Typhoid</span>
              <span class="th-individual-price">From £35</span>
            </div>
            <div class="th-individual-item">
              <span>Meningitis ACWY</span>
              <span class="th-individual-price">From £55</span>
            </div>
            <div class="th-individual-item">
              <span>Rabies (per dose)</span>
              <span class="th-individual-price">From £65</span>
            </div>
            <div class="th-individual-item">
              <span>Yellow Fever + Certificate</span>
              <span class="th-individual-price">From £75</span>
            </div>
            <div class="th-individual-item">
              <span>DTP Booster</span>
              <span class="th-individual-price">From £35</span>
            </div>
            <div class="th-individual-item">
              <span>Antimalarial Tablets</span>
              <span class="th-individual-price">From £30</span>
            </div>
          </div>
          <p class="th-pricing-note">All prices include expert consultation and administration by qualified pharmacists</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Timing & Planning -->
  <section class="th-section th-timing-section" id="timing">
    <div class="container">
      <div class="th-section-header">
        <div class="th-section-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          <span>Planning Your Vaccines</span>
        </div>
        <h2 class="section-title">When to Get The Gambia<br><span class="gradient-text-light">Travel Vaccinations</span></h2>
        <p class="th-section-desc">Ideally, book your Gambia travel vaccination appointment 6–8 weeks before departure. However, we accommodate last-minute travellers with same-day appointments and can provide immediate protection for most vaccines. Even if your trip is just days away, it's always worth visiting our clinic—many vaccines offer rapid protection.</p>
      </div>

      <div class="th-timeline-grid">
        <div class="th-timeline-card th-timeline-ideal">
          <div class="th-timeline-badge">Ideal</div>
          <div class="th-timeline-period">6–8 Weeks Before</div>
          <h3>Full Vaccine Courses</h3>
          <p>Best timing for multi-dose vaccines like Hepatitis B. Allows time for Rabies pre-exposure course if needed. Your body develops full immunity before departure.</p>
        </div>
        <div class="th-timeline-card th-timeline-good">
          <div class="th-timeline-badge">Good</div>
          <div class="th-timeline-period">2–4 Weeks Before</div>
          <h3>Most Vaccines Available</h3>
          <p>Still time for single-dose vaccines (Hepatitis A, Typhoid) and accelerated courses. Antimalarial medication can be prescribed. First doses of multi-dose courses can begin.</p>
        </div>
        <div class="th-timeline-card th-timeline-lastmin">
          <div class="th-timeline-badge">Last Minute</div>
          <div class="th-timeline-period">Days Before Departure</div>
          <h3>Same-Day Vaccines</h3>
          <p>Don't skip it! Many vaccines provide rapid protection. Hepatitis A and Typhoid can be given same-day. Antimalarial tablets available immediately. Some protection is always better than none.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Why Choose Us -->
  <section class="th-section-dark th-why-section" id="why-us">
    <div class="th-section-dark-bg">
      <div class="th-dark-orb th-dark-orb-1"></div>
      <div class="th-dark-orb th-dark-orb-2"></div>
    </div>
    <div class="container th-why-container">
      <div class="th-section-header th-section-header-dark">
        <div class="th-section-pill th-pill-dark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span>Why Chislehurst Pharmacy Group</span>
        </div>
        <h2 class="th-title-dark">Why Choose Our<br>Gambia Travel Clinic</h2>
      </div>

      <div class="th-why-grid">
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
          </div>
          <h3>Expert GPhC-Registered Pharmacists</h3>
          <p>Qualified specialists in travel health providing evidence-based vaccination advice</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>All Gambia Vaccines in Stock</h3>
          <p>No ordering delays—we carry every recommended vaccine for Gambia travel</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Same-Day Appointments</h3>
          <p>Walk in or call ahead—no waiting weeks for your travel vaccination appointment</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="2" x2="12" y2="22"/><path d="M17 6H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/><line x1="8" y1="2" x2="16" y2="2"/><line x1="8" y1="22" x2="16" y2="22"/></svg>
          </div>
          <h3>Competitive Pricing</h3>
          <p>Transparent prices with package deals to save you money on your Gambia vaccines</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3>Serving SE London 15+ Years</h3>
          <p>Trusted by thousands of patients across Chislehurst, Bromley, and beyond</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/></svg>
          </div>
          <h3>Comprehensive Travel Health</h3>
          <p>Expert advice on all travel vaccines, antimalarials, and destination-specific health risks</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <h3>Comprehensive Travel Health Advice</h3>
          <p>Beyond vaccines—food safety tips, antimalarials, first aid kits, and travel insurance guidance</p>
        </div>
        <div class="th-why-card">
          <div class="th-why-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Family-Friendly Consultations</h3>
          <p>Child-safe dosing expertise and a welcoming environment for families travelling with children of all ages</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ -->
  <section class="th-section th-faq-section" id="faq">
    <div class="container">
      <div class="th-section-header">
        <div class="th-section-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          <span>Common Questions</span>
        </div>
        <h2 class="section-title">The Gambia Travel<br><span class="gradient-text-light">Vaccination FAQs</span></h2>
      </div>

      <div class="th-faq-list">
        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>Do I need vaccinations for The Gambia?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>While no vaccinations are legally mandatory for UK travellers entering The Gambia directly, several are strongly recommended by the NHS and WHO. Hepatitis A and Typhoid vaccinations are considered essential for all travellers. Additional vaccines like Hepatitis B, Meningitis ACWY, and Rabies are recommended based on your activities and itinerary. Our pharmacists will assess your specific plans and advise accordingly.</p>
          </div>
        </details>

        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>How much do The Gambia travel vaccinations cost?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>Individual vaccines range from £35–£65 per dose. Our Essential Gambia Package starts from £120 (Hepatitis A + Typhoid + consultation), and the Comprehensive Package from £280 (including Hepatitis A &amp; B, Typhoid, Meningitis ACWY + consultation). All prices include expert consultation and administration. We offer competitive pricing with package discounts to make travel health affordable.</p>
          </div>
        </details>

        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>Can I get vaccinated last minute?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>Yes! We offer same-day appointments at both our clinics. While 6–8 weeks before departure is ideal, most single-dose vaccines like Hepatitis A and Typhoid can be given right up until your departure date and still offer significant protection. Walk-ins are welcome, or call ahead to guarantee your slot.</p>
          </div>
        </details>

        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>Do you provide Yellow Fever certificates?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>A Yellow Fever certificate is required if you are arriving from or transiting through a country with risk of Yellow Fever transmission. It is not required for travellers flying directly from the UK. However, The Gambia itself is a Yellow Fever risk area, and NaTHNaC recommends vaccination for most travellers regardless of entry requirements. Your pharmacist will confirm whether you need the vaccine and certificate based on your specific itinerary.</p>
          </div>
        </details>

        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>Which areas of The Gambia have malaria risk?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>All areas of The Gambia carry malaria risk, including Banjul, the Atlantic coast resorts (Kololi, Kotu, Bakau, Cape Point), and up-country regions. Risk is highest during and immediately after the rainy season (June to November) but is present year-round. This is different from some Asian destinations where malaria is confined to border areas — in The Gambia, antimalarial prophylaxis is recommended for all travellers regardless of where in the country you are visiting.</p>
          </div>
        </details>

        <details class="th-faq-item">
          <summary class="th-faq-question">
            <span>How long before travel should I get vaccinated?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="th-faq-answer">
            <p>Ideally 6–8 weeks before departure for full vaccine courses. However, many single-dose vaccines can be given 2–4 weeks before travel. Even last-minute travellers benefit from same-day single-dose vaccines. Hepatitis B requires 3 doses over 21 days (accelerated schedule), and Meningitis ACWY is a single dose. Book as early as possible, but don't delay—coming late is always better than not coming at all.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="th-section-dark th-final-cta" id="book-now">
    <div class="th-section-dark-bg">
      <div class="th-dark-orb th-dark-orb-1"></div>
      <div class="th-dark-orb th-dark-orb-2"></div>
    </div>
    <div class="container th-final-cta-container">
      <h2 class="th-title-dark">Book Your Gambia Travel<br>Vaccinations Today</h2>
      <p class="th-desc-dark">Expert travel health services across South East London. Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and surrounding areas.</p>
      <div class="th-final-cta-buttons">
        <a href="tel:02082950017" class="th-btn-primary">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Chislehurst: 020 8295 0017
        </a>
        <a href="tel:02084673158" class="th-btn-primary">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Pond Pharmacy: 020 8467 3158
        </a>
      </div>
      <div class="th-final-trust">
        <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA">
        <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI DSS">
        <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO">
        <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC">
      </div>
    </div>
  </section>

  <!-- Footer -->

<?php get_footer(); ?>
