<?php
/**
 * Template Name: Typhoid Vaccine
 * Template Post Type: page
 *
 * Six-section service page. Reuses the existing DTP service-page
 * component classes (dtp-*) so no new styles are introduced — the
 * design system, spacing, typography and colour tokens are shared.
 *
 * Booking URL is a placeholder ("#") until the client confirms.
 *
 * @package Rey_London
 */

get_header();

// TODO: Replace "#" with the real booking URL once confirmed by the client.
$typh_booking_url = '#';
?>

  <!-- ===================== SECTION 1 — HERO ===================== -->
  <section class="dtp-hero">
    <div class="container">
      <div class="dtp-hero-grid">
        <div class="dtp-hero-text">
          <div class="dtp-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <?php echo esc_html( rl_field( 'typh_hero_eyebrow', 'Travel Health · Chislehurst' ) ); ?>
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'typh_hero_title', 'Typhoid Vaccination in <span class="gradient-text">Chislehurst</span>' ) ); ?></h1>
          <p class="dtp-hero-sub"><?php echo esc_html( rl_field( 'typh_hero_subtitle', 'Protect yourself before you travel. Available at both our Chislehurst branches — no GP referral needed.' ) ); ?></p>

          <div style="margin:-8px 0 28px;max-width:620px;color:rgba(255,255,255,.78);font-size:15px;line-height:1.7;">
            <p style="margin:0 0 14px;">Typhoid fever is a serious bacterial infection caused by <strong style="color:#fff;font-weight:600;">Salmonella typhi</strong>, spread through contaminated food and water. It is most common in parts of Asia, Africa, and Latin America where hygiene standards and access to clean water vary. There are around 21 million cases worldwide every year.</p>
            <p style="margin:0;">Symptoms include high fever, abdominal pain, loss of appetite, and constipation or diarrhoea. In serious cases it can lead to intestinal perforation or meningitis, both of which can be life-threatening. Vaccination is the most effective way to protect yourself before travelling to an at-risk area.</p>
          </div>

          <div class="dtp-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC-registered pharmacists</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> No GP referral needed</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891B2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-day appointments</span>
          </div>

          <div class="dtp-hero-ctas">
            <a href="<?php echo esc_url( $typh_booking_url ); ?>" class="dtp-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book a Travel Consultation
            </a>
            <a href="#vaccines" class="dtp-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
              Which Vaccine Is Right for Me?
            </a>
          </div>
        </div>

        <div class="dtp-hero-visual">
          <div class="dtp-hero-visual-inner">
            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80&auto=format&fit=crop" alt="Pharmacist preparing a typhoid vaccination in a clinical setting — professional travel health service" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SECTION 2 — THE VACCINES WE OFFER ===================== -->
  <section class="dtp-section-dark" id="vaccines">
    <div class="container">
      <div style="text-align:center;">
        <div class="dtp-quick-pill" style="background:rgba(103,232,249,.12);color:#67E8F9;border-color:rgba(103,232,249,.35);">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          The Vaccines We Offer
        </div>
        <h2 class="section-title">Which Typhoid Vaccine Is Right for You?</h2>
        <p class="section-subtitle" style="max-width:800px;margin:0 auto 0;">We routinely offer two typhoid vaccines at Chislehurst Pharmacy Group.</p>
      </div>

      <div class="dtp-who-grid" style="grid-template-columns:repeat(2,1fr);max-width:1100px;margin:48px auto 0;">
        <!-- Typhim Vi -->
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2l4 4-10 10-6 2 2-6L18 2z"/><path d="M14.5 5.5l4 4"/></svg></div>
          <h3>Typhim Vi — injected vaccine</h3>
          <p class="dtp-who-body">A single injection that provides protection for three years. Suitable for anyone aged 2 years and over travelling to an at-risk area. A booster dose is recommended every three years to maintain protection. This is our most commonly administered typhoid vaccine.</p>
          <ul class="dtp-who-list">
            <li>Single injection — no course required</li>
            <li>Protection lasts three years</li>
            <li>Suitable from age 2 and over</li>
            <li>Booster recommended every three years</li>
          </ul>
        </div>

        <!-- Vivotif -->
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2h8v6a4 4 0 0 1-4 4 4 4 0 0 1-4-4V2z"/><path d="M8 8h8"/><path d="M10 12v10"/><path d="M14 12v10"/></svg></div>
          <h3>Vivotif — oral vaccine (needle-free)</h3>
          <p class="dtp-who-body">A course of three capsules, each taken on alternate days. Suitable for those aged 6 years and over. Protection lasts for one year, and the course can be repeated to maintain cover. Vivotif is available on special order for patients who prefer a needle-free alternative — speak to our team when booking and we'll arrange it for you.</p>
          <ul class="dtp-who-list">
            <li>Three capsules on alternate days</li>
            <li>Needle-free alternative</li>
            <li>Suitable from age 6 and over</li>
            <li>Protection lasts one year · course can be repeated</li>
          </ul>
          <div class="dtp-who-note">Available on special order — please mention Vivotif when you book.</div>
        </div>
      </div>

      <!-- Viatim note — inline-styled so it reads correctly on the dark section -->
      <div style="max-width:1100px;margin:32px auto 0;padding:20px 26px;background:rgba(255,255,255,.06);border-left:4px solid var(--dtp-accent,#0891B2);border-radius:0 12px 12px 0;color:rgba(255,255,255,.82);font-size:15px;line-height:1.7;">
        <strong style="color:#fff;">Note:</strong> A combined typhoid and Hepatitis A injection called Viatim was previously available but is no longer manufactured. If you received this vaccine in the past, your pharmacist will advise on the appropriate approach for your upcoming travel.
      </div>

      <div style="text-align:center;margin-top:40px;">
        <a href="<?php echo esc_url( $typh_booking_url ); ?>" class="dtp-btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          Book a Travel Consultation
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== SECTION 3 — HOW TYPHOID IS SPREAD ===================== -->
  <section class="dtp-section-white" id="how-spread">
    <div class="container">
      <div class="dtp-two-col">
        <div>
          <span class="dtp-eyebrow">Understanding the Risk</span>
          <h2 class="dtp-section-title">How Is Typhoid Spread?</h2>
          <p class="dtp-body-text">Typhoid is transmitted through contaminated food or water, or through close contact with an infected person.</p>
          <p class="dtp-body-text">The bacteria spread when someone who is ill — or who has recently recovered but is still shedding the bacteria — handles food without washing their hands thoroughly. Drinking or using water contaminated with sewage is another common route of infection, particularly in areas with limited sanitation infrastructure.</p>
          <p class="dtp-body-text">Travellers are at greatest risk when eating <strong>street food</strong>, drinking <strong>tap water</strong>, or consuming <strong>ice, salads, or shellfish</strong> in high-risk regions.</p>
        </div>
        <div class="dtp-visual-placeholder">
          <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80&auto=format&fit=crop" alt="Food and water hygiene in high-risk travel destinations — typhoid prevention" loading="lazy" />
          <div class="dtp-visual-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            <span>Food-and-water hygiene is the main prevention route alongside vaccination.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SECTION 4 — WHO SHOULD GET VACCINATED ===================== -->
  <section class="dtp-section-dark" id="eligibility">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Who Should Get the Typhoid Vaccine?</h2>
        <p class="section-subtitle" style="max-width:820px;margin:0 auto 0;">Typhoid vaccination is recommended for anyone travelling to parts of the world where the infection is common. Risk is highest in South Asia — particularly India, Pakistan, and Bangladesh — as well as across sub-Saharan Africa and parts of Central and South America.</p>
      </div>

      <div class="dtp-who-grid" style="grid-template-columns:1fr;max-width:820px;margin:48px auto 0;">
        <div class="dtp-who-card">
          <div class="dtp-who-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <h3>You should consider vaccination if you are:</h3>
          <ul class="dtp-who-list">
            <li>Travelling to a high-risk country, even for a short trip</li>
            <li>Visiting friends or family in an at-risk region</li>
            <li>Travelling off the beaten track or staying in areas with limited access to clean water</li>
            <li>Planning a longer trip where food and water hygiene may be difficult to control</li>
          </ul>
          <div class="dtp-who-note">Even if you have been vaccinated before, check with your pharmacist whether you are due a booster — protection from both vaccines reduces over time.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SECTION 5 — HOW QUICKLY DOES THE VACCINE WORK ===================== -->
  <section class="dtp-section-white" id="timing">
    <div class="container">
      <div style="max-width:820px;margin:0 auto;text-align:center;">
        <span class="dtp-eyebrow">Timing &amp; Protection</span>
        <h2 class="dtp-section-title">How Long Does the Typhoid Vaccine Take to Work?</h2>
      </div>
      <div style="max-width:820px;margin:32px auto 0;">
        <p class="dtp-body-text">The <strong>Typhim Vi</strong> injection begins to provide protection within around two weeks of administration. You should ideally have it at least two weeks before you travel, though it can still be given closer to your departure date if necessary.</p>
        <p class="dtp-body-text">For <strong>Vivotif</strong>, the three-capsule course should be completed at least one week before travel, as each capsule is taken on alternate days over five days.</p>
        <div class="dtp-highlight-box">
          <strong>Travelling soon?</strong> If your travel is imminent, speak to our team — we'll advise on the best option for your timeline.
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== SECTION 6 — BOOK YOUR APPOINTMENT ===================== -->
  <!--
    Uses the standardised location-cards template partial that the home
    page and other service pages share, so the card style stays in sync
    with the rest of the site rather than re-inventing a one-off layout.
  -->
  <section class="locations-section" id="book">
    <div class="container">
      <h2 class="section-title">
        Book Your <span class="gradient-text">Travel Consultation</span>
      </h2>
      <p class="section-subtitle" style="max-width:820px;margin:0 auto;">Sumeet and the team at both Chislehurst Pharmacy Group branches can advise on typhoid vaccination as part of a full travel health consultation. We'll review your itinerary, destination, and health history to ensure you have the right vaccinations before you fly. Same-day and next-day appointments are usually available.</p>

      <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>

      <p style="text-align:center;margin-top:32px;font-size:14px;color:var(--text-gray);">Typhoid vaccination is a private service. Prices are available on request — call either branch for details.</p>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="dtp-disclaimer">
    <div class="container">
      The information on this page is for general information purposes only. It is not intended to replace medical advice from a healthcare professional. Typhoid vaccines (Typhim Vi and Vivotif) are prescription-only medicines in the UK. Eligibility and suitability are assessed by our GPhC-registered pharmacists during your consultation. Reviewed by Sumeet Banker — Superintendent Pharmacist · GPhC: 2075664.
    </div>
  </div>

<?php get_footer(); ?>
