<?php
/**
 * Template Name: Hair Loss
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ========== HERO SECTION ========== -->
  <section class="hl-hero">
    <div class="hl-hero-bg">
      <div class="hl-hero-orb hl-hero-orb-1"></div>
      <div class="hl-hero-orb hl-hero-orb-2"></div>
    </div>
    <div class="container hl-hero-container">
      <div class="hl-hero-grid">
        <div class="hl-hero-text">
          <div class="hl-hero-pill">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span>Private &amp; Discreet Service</span>
          </div>
          <h1 class="hl-hero-title"><?php echo wp_kses_post( rl_field( 'hl_hero_title', 'Hair Loss Treatment in <span class="gradient-text">South East London</span>' ) ); ?></h1>
          <p class="hl-hero-subtitle"><?php echo esc_html( rl_field( 'hl_hero_subtitle', 'Regain your confidence with clinically proven treatments. Private consultations, prescription finasteride, minoxidil, and expert pharmacist support to stop hair loss and stimulate regrowth — at both Chislehurst locations.' ) ); ?></p>
          <div class="hl-hero-ctas">
            <a href="#book" class="hl-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Private Consultation
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hl-btn-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Find Your Nearest Location
            </a>
          </div>
          <div class="hl-hero-trust">
            <div class="hl-hero-trust-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Private &amp; Discreet</span>
            </div>
            <div class="hl-hero-trust-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Clinically Proven</span>
            </div>
            <div class="hl-hero-trust-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>GPhC Registered</span>
            </div>
            <div class="hl-hero-trust-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Same-Day Appointments</span>
            </div>
          </div>
        </div>
        <div class="hl-hero-visual">
          <img src="<?php echo esc_url( rl_field( 'hl_hero_image', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=800&h=600&fit=crop&crop=face' ) ); ?>" alt="Hair loss treatment consultation — South East London" loading="eager">
          <div class="hl-hero-badge">
            <div class="hl-hero-badge-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <div class="hl-hero-badge-text">
              <span class="hl-hero-badge-label">GPhC Registered</span>
              <span class="hl-hero-badge-sub">Finasteride &amp; Minoxidil</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== QUICK INFO CARDS ========== -->
  <section class="hl-quick-section">
    <div class="container">
      <div class="hl-quick-grid">
        <div class="hl-quick-card hl-reveal">
          <div class="hl-quick-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
          </div>
          <div class="hl-quick-stat">90%</div>
          <p>of men stopped further hair loss with finasteride in clinical trials</p>
        </div>
        <div class="hl-quick-card hl-reveal">
          <div class="hl-quick-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div class="hl-quick-stat">3–6</div>
          <p>months to see visible improvement with consistent daily treatment</p>
        </div>
        <div class="hl-quick-card hl-reveal">
          <div class="hl-quick-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <div class="hl-quick-stat">100%</div>
          <p>private and discreet — confidential consultations at both locations</p>
        </div>
        <div class="hl-quick-card hl-reveal">
          <div class="hl-quick-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="hl-quick-stat">50%</div>
          <p>of men over 50 are affected — you are not alone in this</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== UNDERSTANDING HAIR LOSS ========== -->
  <section class="hl-understanding-section" id="understanding">
    <div class="container">
      <div class="hl-understanding-grid">
        <div class="hl-understanding-content hl-reveal" data-reveal="left">
          <span class="hl-eyebrow">YOU'RE NOT ALONE</span>
          <h2 class="section-title" style="text-align:left;">Understanding male pattern <span class="gradient-text-light">baldness</span></h2>
          <p class="hl-intro-text">Male pattern baldness affects around 50% of men over 50 — but it can start as early as your late teens or twenties. Watching your hairline recede or crown thin isn't vanity. It's genuine loss of confidence in how you present yourself to the world.</p>

          <div class="hl-fact-cards">
            <div class="hl-fact-card hl-reveal">
              <div class="hl-fact-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div>
                <h4>The Pattern</h4>
                <p>Hair loss typically begins at the temples or crown, gradually progressing over months or years. Without treatment, the process continues irreversibly.</p>
              </div>
            </div>
            <div class="hl-fact-card hl-reveal">
              <div class="hl-fact-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <h4>The Cause</h4>
                <p>Your hair follicles become sensitive to dihydrotestosterone (DHT), a hormone that shrinks follicles until they stop producing visible hair. It's genetic — not lifestyle.</p>
              </div>
            </div>
            <div class="hl-fact-card hl-reveal">
              <div class="hl-fact-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </div>
              <div>
                <h4>The Good News</h4>
                <p>Clinically proven treatments can stop further loss and stimulate regrowth. The earlier you start, the better your results — most men see real improvement within months.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="hl-understanding-visual hl-reveal" data-reveal="right">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=700&fit=crop&crop=face" alt="Confident professional man — hair loss treatment South East London">
          <div class="hl-visual-badge">
            <div class="hl-visual-badge-stat">50%</div>
            <div class="hl-visual-badge-desc">of men over 50 are affected by male pattern baldness</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TREATMENT OPTIONS ========== -->
  <section class="hl-treatments-section" id="treatments">
    <div class="hl-section-bg"><div class="hl-section-orb hl-section-orb-1"></div><div class="hl-section-orb hl-section-orb-2"></div></div>
    <div class="container hl-section-inner">
      <div class="hl-section-header">
        <div class="hl-pill"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg><span>Prescription-Strength Treatments</span></div>
        <h2 class="hl-section-title">Clinically proven hair loss treatments</h2>
        <p class="hl-section-desc">Stop settling for ineffective shampoos and supplements. We provide prescription-strength treatments with proven clinical results — the same medications dermatologists recommend.</p>
      </div>

      <div class="hl-treatment-grid">
        <!-- Finasteride Card -->
        <div class="hl-treatment-card hl-reveal">
          <div class="hl-treatment-card-header">
            <div class="hl-treatment-badge hl-badge-rx">PRESCRIPTION ONLY</div>
            <div class="hl-treatment-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
            </div>
            <h3>Finasteride 1mg Tablets</h3>
            <p class="hl-treatment-subhead">(Propecia)</p>
          </div>
          <div class="hl-treatment-body">
            <div class="hl-treatment-row">
              <strong>What it is:</strong>
              <p>Oral tablet taken once daily. Blocks the DHT hormone that causes hair follicles to shrink, stopping further hair loss and stimulating regrowth.</p>
            </div>
            <div class="hl-treatment-row hl-treatment-highlight">
              <strong>How effective:</strong>
              <p>Clinical trials: <b>9 out of 10 men</b> experienced hair regrowth or prevented further loss. Visible results within 3–6 months.</p>
            </div>
            <div class="hl-treatment-row">
              <strong>Who it's for:</strong>
              <p>Men with early to moderate hair loss who want to stop progression and regrow hair. Most effective when started before significant thinning.</p>
            </div>
            <div class="hl-treatment-options">
              <span class="hl-option-pill">Generic Finasteride 1mg — more affordable</span>
              <span class="hl-option-pill">Branded Propecia 1mg — original formulation</span>
            </div>
            <p class="hl-treatment-note">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
              Prescription required. Our pharmacist assesses suitability during consultation.
            </p>
          </div>
        </div>

        <!-- Minoxidil Card -->
        <div class="hl-treatment-card hl-reveal">
          <div class="hl-treatment-card-header">
            <div class="hl-treatment-badge hl-badge-otc">NO PRESCRIPTION NEEDED</div>
            <div class="hl-treatment-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3>Minoxidil Solution/Foam</h3>
            <p class="hl-treatment-subhead">(Regaine)</p>
          </div>
          <div class="hl-treatment-body">
            <div class="hl-treatment-row">
              <strong>What it is:</strong>
              <p>Topical solution or foam applied directly to scalp twice daily. Stimulates blood flow to hair follicles, encouraging growth and preventing further loss.</p>
            </div>
            <div class="hl-treatment-row hl-treatment-highlight">
              <strong>How effective:</strong>
              <p>Clinical studies: <b>Around 60% of men</b> (3 in 5) reported hair regrowth after 48 weeks of consistent use.</p>
            </div>
            <div class="hl-treatment-row">
              <strong>Who it's for:</strong>
              <p>Men who prefer topical treatment over oral medication, or those combining with finasteride for maximum results.</p>
            </div>
            <div class="hl-treatment-options">
              <span class="hl-option-pill">Regaine for Men solution</span>
              <span class="hl-option-pill">Regaine foam — less greasy</span>
              <span class="hl-option-pill">Generic minoxidil — more affordable</span>
            </div>
            <p class="hl-treatment-note">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
              Available over-the-counter. Our pharmacist provides application guidance.
            </p>
          </div>
        </div>
      </div>

      <!-- Combination Therapy Card -->
      <div class="hl-combo-card hl-reveal">
        <div class="hl-combo-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <div class="hl-combo-content">
          <h3>Combination Therapy — Maximum Results</h3>
          <p>Using finasteride AND minoxidil together provides maximum hair retention and regrowth. Finasteride blocks DHT internally while minoxidil stimulates follicles externally. Many men achieve best results combining both treatments.</p>
        </div>
        <a href="#book" class="hl-combo-cta">Ask About Combination Therapy</a>
      </div>
    </div>
  </section>

  <!-- ========== HOW OUR SERVICE WORKS ========== -->
  <section class="hl-process-section" id="process">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Your hair loss treatment <span class="gradient-text-light">journey</span></h2>
        <p class="section-subtitle">A simple, confidential 3-step process from first consultation to ongoing results.</p>
      </div>

      <div class="hl-process-grid">
        <div class="hl-process-photo-col hl-reveal" data-reveal="left">
          <div class="hl-process-photo-wrap">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80&auto=format&fit=crop" alt="Private pharmacy consultation for hair loss treatment" loading="lazy">
            <div class="hl-process-photo-badge">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              <span>Completely Private &amp; Confidential</span>
            </div>
          </div>
        </div>
        <div class="hl-process-content-col hl-reveal" data-reveal="right">
          <span class="hl-eyebrow">YOUR TREATMENT PATHWAY</span>
          <div class="hl-process-steps">
            <div class="hl-process-step">
              <div class="hl-step-num">1</div>
              <div class="hl-step-body">
                <h4>Private Consultation</h4>
                <p>Book a confidential appointment at either Chislehurst location. Discuss your hair loss pattern, medical history, and goals with our GPhC-registered pharmacist. Takes 15–20 minutes.</p>
              </div>
            </div>
            <div class="hl-process-step">
              <div class="hl-step-num">2</div>
              <div class="hl-step-body">
                <h4>Personalised Treatment Plan</h4>
                <p>We'll recommend the most effective treatment for your stage of hair loss — finasteride, minoxidil, or combination therapy. You'll leave with clear instructions and realistic expectations.</p>
              </div>
            </div>
            <div class="hl-process-step">
              <div class="hl-step-num">3</div>
              <div class="hl-step-body">
                <h4>Ongoing Support &amp; Monitoring</h4>
                <p>Results take 3–6 months. We provide ongoing advice, answer questions about side effects, and adjust your treatment if needed. Regular follow-ups ensure you're on track.</p>
              </div>
            </div>
          </div>
          <div class="hl-process-total">Total initial consultation: approximately 15–20 minutes</div>
          <a href="#book" class="hl-btn-primary" style="margin-top:20px;">Book Your Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== REALISTIC EXPECTATIONS ========== -->
  <section class="hl-expectations-section" id="expectations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Realistic <span class="gradient-text-light">expectations</span></h2>
        <p class="section-subtitle" style="max-width:860px;margin:0 auto;">Hair loss treatments work — but they require patience, consistency, and realistic goals. Here's what to expect.</p>
      </div>
      <div class="hl-expect-grid">
        <div class="hl-expect-card hl-reveal">
          <div class="hl-expect-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Timeline for Results</h3>
          <p>Visible improvement: 3–6 months minimum. Peak results: 12–24 months. Hair growth is gradual — progress photos help track subtle improvements you might otherwise miss.</p>
        </div>
        <div class="hl-expect-card hl-reveal">
          <div class="hl-expect-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3>Consistency is Critical</h3>
          <p>Finasteride: one tablet daily. Minoxidil: applied to scalp twice daily. Missing doses reduces effectiveness. Treatment must continue long-term to maintain results.</p>
        </div>
        <div class="hl-expect-card hl-reveal">
          <div class="hl-expect-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3>What Success Looks Like</h3>
          <p>Success is stopping further loss and regrowing hair in thinning areas. Most men see thicker, healthier existing hair, slower recession, and regrowth in crown and vertex areas.</p>
        </div>
        <div class="hl-expect-card hl-reveal">
          <div class="hl-expect-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>
          </div>
          <h3>Ongoing Treatment Required</h3>
          <p>Hair loss treatments manage a genetic condition — they're not a cure. Stopping means hair loss resumes within 6–12 months. Think of it like managing any chronic condition.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHO CAN USE THESE TREATMENTS ========== -->
  <section class="hl-suitability-section" id="suitability">
    <div class="hl-section-bg"><div class="hl-section-orb hl-section-orb-1"></div><div class="hl-section-orb hl-section-orb-2"></div></div>
    <div class="container hl-section-inner">
      <h2 class="hl-section-title" style="margin-bottom:16px;">Is hair loss treatment right for you?</h2>
      <p class="hl-section-desc" style="margin-bottom:48px;">Understanding who benefits most from finasteride and minoxidil helps set realistic expectations from the start.</p>
      <div class="hl-suit-grid">
        <div class="hl-suit-card hl-suit-positive hl-reveal">
          <div class="hl-suit-card-header">
            <div class="hl-suit-icon hl-suit-icon-green">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <h3>Ideal Candidates</h3>
          </div>
          <ul class="hl-suit-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Men aged 18–65 with male pattern baldness</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Early to moderate hair loss (receding or thinning)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Committed to daily treatment for at least 12 months</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Realistic expectations about gradual improvement</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Generally healthy with no contraindications</li>
          </ul>
          <div class="hl-suit-note hl-suit-note-positive">
            <strong>Best results:</strong> Men who start treatment early see the best outcomes. Once follicles are completely dormant, regrowth becomes much harder.
          </div>
        </div>
        <div class="hl-suit-card hl-suit-caution hl-reveal">
          <div class="hl-suit-card-header">
            <div class="hl-suit-icon hl-suit-icon-amber">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <h3>Consider Carefully</h3>
          </div>
          <ul class="hl-suit-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>Women (except specific formulations under medical supervision)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>Men planning to father children soon (finasteride precaution)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>Certain medical conditions (discuss during consultation)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>Complete baldness (treatments can't revive fully dead follicles)</li>
          </ul>
          <div class="hl-suit-note hl-suit-note-caution">
            <strong>When to see your GP:</strong> If you have sudden hair loss, patchy bald spots, or hair loss with scalp irritation, see your GP first. These may indicate conditions other than male pattern baldness.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SAFETY INFORMATION ========== -->
  <section class="hl-safety-section" id="safety">
    <!-- Lifestyle banner -->
    <div class="hl-safety-banner">
      <img src="https://images.unsplash.com/photo-1559599101-f09722fb4948?w=1600&q=80&auto=format&fit=crop" alt="Confident man — proven hair loss treatments South East London" loading="lazy" class="hl-safety-banner-img">
      <div class="hl-safety-banner-overlay">
        <div class="hl-safety-banner-caption">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <div>
            <strong>Proven Since 1997</strong>
            <span>Finasteride approved by MHRA for over 25 years</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div style="text-align:center;margin-top:72px;">
        <h2 class="section-title">Safety <span class="gradient-text-light">information</span></h2>
        <p class="section-subtitle" style="max-width:860px;margin:0 auto;">Both finasteride and minoxidil are well-studied medications with established safety profiles. Side effects are uncommon but important to understand.</p>
      </div>
      <div class="hl-safety-grid hl-reveal">
        <div class="hl-safety-col">
          <h3>Finasteride — affects &lt;2% of users</h3>
          <ul class="hl-safety-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Most men experience no side effects</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Possible: decreased libido (uncommon)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Possible: erectile difficulties (uncommon)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Side effects resolve when stopping treatment</li>
          </ul>
          <p class="hl-safety-note-text">Discuss any concerns during consultation — we'll help you weigh benefits vs. risks for your situation.</p>
        </div>
        <div class="hl-safety-col">
          <h3>Minoxidil — generally well-tolerated</h3>
          <ul class="hl-safety-list">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Scalp irritation or dryness (occasional)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Temporary increased shedding (weeks 2–4, normal)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Facial hair growth if drips onto face</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Initial shedding = sign treatment is working</li>
          </ul>
          <p class="hl-safety-note-text">Wash hands after application and avoid contact with eyes. Our pharmacist provides full application guidance.</p>
        </div>
      </div>
      <div class="hl-safety-box">Our pharmacist provides full safety information during consultation and is available for ongoing questions throughout your treatment.</div>
    </div>
  </section>

  <!-- ========== PRICING ========== -->
  <section class="hl-pricing-section" id="pricing">
    <div class="hl-section-bg"><div class="hl-section-orb hl-section-orb-1"></div><div class="hl-section-orb hl-section-orb-2"></div></div>
    <div class="container hl-section-inner">
      <div class="hl-section-header">
        <div class="hl-pill"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Transparent Pricing</span></div>
        <h2 class="hl-section-title">Private hair loss treatment pricing</h2>
        <p class="hl-section-desc">No hidden costs. Free initial consultation with treatment purchase.</p>
      </div>

      <div class="hl-pricing-grid">
        <div class="hl-pricing-card hl-reveal">
          <div class="hl-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Consultation</h3>
          <div class="hl-pricing-value">Free</div>
          <p class="hl-pricing-desc">Initial consultation with treatment purchase. Private, confidential, 15–20 minutes.</p>
        </div>
        <div class="hl-pricing-card hl-pricing-featured hl-reveal">
          <div class="hl-pricing-badge">Most Popular</div>
          <div class="hl-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/><path d="M12 9v6"/><path d="M9 12h6"/></svg>
          </div>
          <h3>Finasteride</h3>
          <div class="hl-pricing-value"><?php echo esc_html( rl_field( 'hl_price_finasteride', 'From £25' ) ); ?> <span>/month</span></div>
          <ul class="hl-pricing-items">
            <li>Generic Finasteride 1mg (28 tabs)</li>
            <li>Branded Propecia also available</li>
            <li>Includes prescription &amp; support</li>
          </ul>
        </div>
        <div class="hl-pricing-card hl-reveal">
          <div class="hl-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Minoxidil</h3>
          <div class="hl-pricing-value"><?php echo esc_html( rl_field( 'hl_price_minoxidil', 'From £25' ) ); ?></div>
          <ul class="hl-pricing-items">
            <li>Regaine for Men solution/foam</li>
            <li>Generic minoxidil available</li>
            <li>No prescription required</li>
          </ul>
        </div>
        <div class="hl-pricing-card hl-pricing-combo hl-reveal">
          <div class="hl-pricing-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3>Combination Package</h3>
          <div class="hl-pricing-value"><?php echo esc_html( rl_field( 'hl_price_combo', 'Save more' ) ); ?></div>
          <p class="hl-pricing-desc">Finasteride + minoxidil together for maximum results. Ask during consultation for bundle pricing.</p>
        </div>
      </div>

      <p class="hl-pricing-note-line">Prices for private service. Not available on NHS prescription for cosmetic hair loss.</p>
      <div class="hl-payment-info">We accept cash, card, and contactless payments including Apple Pay and Google Pay.</div>
    </div>
  </section>

  <!-- ========== WHY CHOOSE CHISLEHURST PHARMACY GROUP ========== -->
  <section class="hl-why-section" id="why-us">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Why choose Chislehurst Pharmacy Group for <span class="gradient-text-light">hair loss treatment</span></h2>
      </div>
      <div class="hl-why-grid">
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>GPhC-Registered Pharmacists</h3>
          <p>Fully registered with the General Pharmaceutical Council and experienced in prescribing hair loss treatments. Professional, knowledgeable care.</p>
        </div>
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <h3>Complete Discretion</h3>
          <p>Private consultation rooms at both locations. No one else will know why you're visiting. Your consultation and treatment are completely confidential.</p>
        </div>
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
          <h3>Genuine UK Medications</h3>
          <p>All medications sourced from approved UK pharmaceutical suppliers. Genuine finasteride and Regaine — no grey market products.</p>
        </div>
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <h3>Same-Day Appointments</h3>
          <p>Walk-ins welcome. Same-day and next-day appointments often available. Saturday consultations for those with work commitments.</p>
        </div>
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg></div>
          <h3>No GP Referral Needed</h3>
          <p>Access private hair loss treatment without needing to see your GP first. Quick eligibility assessment during your consultation.</p>
        </div>
        <div class="hl-why-card hl-reveal">
          <div class="hl-why-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
          <h3>Ongoing Support</h3>
          <p>Treatment doesn't end at the prescription. We provide ongoing advice, progress monitoring, and side effect management throughout your entire journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== LOCATIONS ========== -->
  <section class="hl-locations-section" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Visit Us at Our South East London Locations</h2>
      </div>
      <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>
      <div class="hl-serving-text">Serving patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham and surrounding South East London areas. Free parking available at both locations.</div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="hl-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <div class="hl-pill" style="display:inline-flex;margin:0 auto 16px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> FAQs</div>
        <h2 class="section-title">Hair Loss Treatment <span class="gradient-text-light">FAQs</span></h2>
      </div>
      <div class="hl-faq-list">
        <?php
        if ( function_exists( 'have_rows' ) && have_rows( 'hl_faqs' ) ) :
          $faq_num = 0;
          while ( have_rows( 'hl_faqs' ) ) :
            the_row();
            $faq_num++;
            $faq_q = get_sub_field( 'question' );
            $faq_a = get_sub_field( 'answer' );
        ?>
        <div class="hl-faq-item"><button class="hl-faq-trigger"><span class="hl-faq-num"><?php echo str_pad( (string) $faq_num, 2, '0', STR_PAD_LEFT ); ?></span><span class="hl-faq-question"><?php echo esc_html( $faq_q ); ?></span><svg class="hl-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button><div class="hl-faq-answer"><div class="hl-faq-answer-inner"><?php echo wp_kses_post( $faq_a ); ?></div></div></div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER CTA + NEWSLETTER ========== -->
  <section class="hl-footer-cta-block" id="book">
    <div class="hl-section-bg"><div class="hl-section-orb hl-section-orb-1"></div><div class="hl-section-orb hl-section-orb-2"></div></div>
    <div class="container hl-footer-cta-inner">
      <div class="hl-footer-cta-top">
        <div class="hl-cta-badges">
          <span class="hl-cta-badge">GPhC Registered</span>
          <span class="hl-cta-badge">Private &amp; Discreet</span>
          <span class="hl-cta-badge">Same-Day Service</span>
        </div>
        <h2 class="hl-footer-cta-title"><?php echo esc_html( rl_field( 'hl_cta_title', 'Stop hair loss before it progresses' ) ); ?></h2>
        <p class="hl-footer-cta-sub"><?php echo esc_html( rl_field( 'hl_cta_subtitle', 'The earlier you start treatment, the better your results. Book your confidential consultation today at Chislehurst Pharmacy Group — no GP referral needed.' ) ); ?></p>
        <div class="hl-footer-cta-btns">
          <a href="<?php echo esc_url( home_url( '/contact-page/#book-appointment' ) ); ?>" class="hl-btn-cta-white">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Hair Loss Consultation
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hl-btn-cta-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Find Your Nearest Location
          </a>
        </div>
        <div class="hl-cta-checks">
          <span>✓ Finasteride &amp; minoxidil available</span>
          <span>✓ Same-day consultations</span>
          <span>✓ Ongoing pharmacist support</span>
        </div>
      </div>
      <div class="hl-footer-cta-divider"></div>
      <div class="hl-footer-newsletter-row">
        <div class="hl-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert health tips, exclusive offers, and treatment updates delivered to your inbox</p>
        </div>
        <form class="newsletter-form hl-footer-newsletter-form">
          <input type="text" name="rl_hp" style="display:none" tabindex="-1" autocomplete="off">
          <div class="newsletter-input-wrapper">
            <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 6l-9 6-9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <input type="email" name="email" autocomplete="email" placeholder="Enter your email address" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Medical Disclaimer -->
  <div class="hl-disclaimer">
    <div class="container">
      This information is for educational purposes and does not constitute medical advice. Finasteride is a prescription-only medicine. Suitability is assessed by our GPhC-registered pharmacists during consultation. Information is accurate as of March 2026 and based on current MHRA guidance.
    </div>
  </div>

  <!-- Footer -->

<?php get_footer(); ?>
