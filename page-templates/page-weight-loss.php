<?php
/**
 * Template Name: Weight Loss
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ============================================
       HERO SECTION
       ============================================ -->
  <section class="wl-hero">
    <div class="wl-hero-bg">
      <div class="wl-hero-orb wl-hero-orb-1"></div>
      <div class="wl-hero-orb wl-hero-orb-2"></div>
    </div>
    <div class="container wl-hero-container">
      <!-- Left: Content -->
      <div class="wl-hero-content">
        <div class="wl-hero-badge">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Medical Weight Loss · London</span>
        </div>
        <h1 class="wl-hero-title">
          <?php echo esc_html( rl_field( 'wl_hero_title', 'Lose 10–20% of your body weight in 12 months — with prescription support at your local London pharmacy' ) ); ?>
        </h1>
        <p class="wl-hero-subtitle">
          <?php echo esc_html( rl_field( 'wl_hero_subtitle', 'Mounjaro and Wegovy prescriptions from our South East London pharmacists. No GP referral. No long waits. Expert face-to-face care at Chislehurst and Pond End — from people who know your name.' ) ); ?>
        </p>
        <div class="wl-hero-actions">
          <a href="#consultation" class="btn-primary wl-btn-hero-primary">
            Book Free Consultation
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="tel:02084673158" class="btn-secondary wl-btn-hero-secondary">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M14.5 11.5V13.5C14.5 14.05 14.05 14.5 13.5 14.5C6.6 14.5 1 8.9 1 2C1 1.45 1.45 1 2 1H4.5C5.05 1 5.5 1.45 5.5 2V4.5C5.5 5.05 5.05 5.5 4.5 5.5H3.5C4 8.5 6.5 11 9.5 11.5V10.5C9.5 9.95 9.95 9.5 10.5 9.5H13C13.55 9.5 14 9.95 14 10.5V11.5Z" fill="currentColor"/>
            </svg>
            020 8467 3158
          </a>
        </div>
        <div class="wl-hero-trust">
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>GPhC Registered</span>
          </div>
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>No GP Referral Needed</span>
          </div>
          <div class="wl-trust-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span>Face-to-Face Support</span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="wl-hero-visual">
        <div class="wl-hero-img-stack">
          <div class="wl-hero-img wl-hero-img-main">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=700&h=800&fit=crop" alt="Medical weight loss consultation at Rey London pharmacy">
          </div>
          <div class="wl-hero-img wl-hero-img-secondary">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=500&h=400&fit=crop" alt="Weight loss results">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       SOCIAL PROOF BAR
       ============================================ -->
  <section class="wl-proof-bar">
    <div class="container">
      <div class="wl-proof-grid">
        <div class="wl-proof-item">
          <div class="wl-proof-number">10,000+</div>
          <div class="wl-proof-label">Patients Served</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">10–20%</div>
          <div class="wl-proof-label">Average Body Weight Lost</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">4.9/5</div>
          <div class="wl-proof-label">Patient Satisfaction</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">2</div>
          <div class="wl-proof-label">London Clinics</div>
        </div>
        <div class="wl-proof-divider"></div>
        <div class="wl-proof-item">
          <div class="wl-proof-number">Same Day</div>
          <div class="wl-proof-label">Appointments Available</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       WHY DIETS FAIL — PROBLEM/SOLUTION
       ============================================ -->
  <section class="wl-vs-section" id="why-medical">
    <div class="wl-vs-bg">
      <div class="wl-vs-orb wl-vs-orb-1"></div>
      <div class="wl-vs-orb wl-vs-orb-2"></div>
    </div>
    <div class="container wl-vs-container">
      <!-- Header -->
      <div class="wl-vs-header">
        <div class="wl-vs-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
          </svg>
          <span>The Science Behind Weight Loss</span>
        </div>
        <h2 class="wl-vs-title">Why diets alone rarely work —<br class="wl-vs-br-md"> and what finally does</h2>
        <p class="wl-vs-desc">Hunger isn't a willpower problem. It's a biology problem. GLP-1 treatments like Mounjaro and Wegovy fix the biology.</p>
      </div>

      <!-- Stats Row -->
      <div class="wl-vs-stats">
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">95%</div>
          <div class="wl-vs-stat-label">of diets fail within 5 years</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">20%</div>
          <div class="wl-vs-stat-label">body weight lost with GLP-1</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">72wk</div>
          <div class="wl-vs-stat-label">clinical trial duration</div>
        </div>
        <div class="wl-vs-stat-card">
          <div class="wl-vs-stat-number">2x</div>
          <div class="wl-vs-stat-label">receptor activation (GLP-1 + GIP)</div>
        </div>
      </div>

      <!-- Cards Grid -->
      <div class="wl-vs-grid">
        <!-- Problem Card -->
        <div class="wl-vs-card wl-vs-card-problem">
          <div class="wl-vs-card-badge wl-vs-badge-muted">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Traditional approach
          </div>
          <h3 class="wl-vs-card-title">Diets that make your body fight back</h3>
          <ul class="wl-vs-list">
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Hunger hormones spike</strong>
                <span>Restricting calories triggers ghrelin surges that overwhelm willpower</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Metabolism slows down</strong>
                <span>Your body adapts to lower calories by burning less energy</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Weight comes right back</strong>
                <span>95% of weight lost through dieting alone is regained within 5 years</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-bad">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </div>
              <div>
                <strong>Unsustainable struggle</strong>
                <span>Months of effort with minimal lasting results</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Solution Card -->
        <div class="wl-vs-card wl-vs-card-solution">
          <div class="wl-vs-card-badge wl-vs-badge-glow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            The medical approach
          </div>
          <h3 class="wl-vs-card-title">GLP-1 treatments that work with your biology</h3>
          <ul class="wl-vs-list">
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Natural appetite reduction</strong>
                <span>Signals your brain that you're full — cravings fade on their own</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Hours of satiety</strong>
                <span>Slows stomach emptying so you feel satisfied long after eating</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Clinically proven results</strong>
                <span>15–20% average weight loss in 12 months in clinical trials</span>
              </div>
            </li>
            <li>
              <div class="wl-vs-icon wl-vs-icon-good">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <strong>Expert guidance throughout</strong>
                <span>Monthly face-to-face reviews with your pharmacist</span>
              </div>
            </li>
          </ul>
          <a href="#consultation" class="wl-vs-cta">
            Start Your Journey
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       TREATMENTS SECTION
       ============================================ -->
  <section class="products-section" id="treatments">
    <div class="container">
      <div class="products-header">
        <div class="products-text">
          <span class="products-label">GLP-1 Prescription Treatments</span>
          <h2 class="section-title">
            Licensed treatments, proven by<br>
            <span class="gradient-text">clinical trials</span>
          </h2>
        </div>
      </div>

      <div class="products-grid">
        <!-- Mounjaro -->
        <div class="product-card">
          <div class="product-badge">Most Effective</div>
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=400&fit=crop" alt="Mounjaro tirzepatide weight loss injection">
          </div>
          <div class="product-content">
            <h3>Mounjaro (Tirzepatide)</h3>
            <p>The most advanced GLP-1 treatment available. Activates two receptors (GLP-1 and GIP) for significantly greater weight loss than older options. Clinical trials show up to 22% body weight lost in 72 weeks.</p>
            <div class="product-footer">
              <span class="product-price">From £125/mo</span>
              <a href="#consultation" class="product-cta">
                Book Now
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow">
              </a>
            </div>
          </div>
        </div>

        <!-- Wegovy -->
        <div class="product-card">
          <div class="product-badge">NICE Approved</div>
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Wegovy semaglutide prescription">
          </div>
          <div class="product-content">
            <h3>Wegovy (Semaglutide)</h3>
            <p>The first GLP-1 to receive NICE approval for obesity. Reduces appetite by mimicking the natural fullness hormone. Proven to deliver 15–17% average weight loss in clinical trials over 68 weeks.</p>
            <div class="product-footer">
              <span class="product-price">From £199/mo</span>
              <a href="#consultation" class="product-cta">
                Book Now
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow">
              </a>
            </div>
          </div>
        </div>

        <!-- Saxenda -->
        <div class="product-card">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=400&fit=crop" alt="Saxenda liraglutide weight management">
          </div>
          <div class="product-content">
            <h3>Saxenda (Liraglutide)</h3>
            <p>A well-established daily GLP-1 injection with a strong safety record. Approved for long-term weight management. An excellent choice for patients seeking a proven treatment already familiar to clinicians.</p>
            <div class="product-footer">
              <span class="product-price">From £150/mo</span>
              <a href="#consultation" class="product-cta">
                Book Now
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow">
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Eligibility note -->
      <div class="wl-eligibility-note">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <p>Eligibility is assessed at your consultation. Treatments are typically available if your BMI is 30+ (or 27+ with a weight-related condition like Type 2 diabetes or hypertension). Our pharmacist will advise on the best option for your health profile.</p>
      </div>
    </div>
  </section>

  <!-- ============================================
       OUTCOMES / BENEFITS SECTION
       ============================================ -->
  <section class="services-section" id="results">
    <div class="container">
      <h2 class="section-title">
        The real-world results our<br>
        <span class="gradient-text">London patients achieve</span>
      </h2>
      <p class="section-subtitle">Weight loss that changes more than just the number on the scales</p>

      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop" alt="Reduced joint pain after weight loss">
          </div>
          <div class="benefit-content">
            <h3>Joints that no longer hurt</h3>
            <p>Every kg lost removes approximately 4kg of pressure from your knees. Patients who lose 15kg report walking further, sleeping better, and needing less pain relief within 3–4 months.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&h=400&fit=crop" alt="Improved blood sugar and type 2 diabetes">
          </div>
          <div class="benefit-content">
            <h3>Blood sugar under control</h3>
            <p>Many of our Type 2 diabetes patients reduce or stop their metformin within 6 months of starting Mounjaro. Lower blood glucose, improved HbA1c, and reduced cardiovascular risk — beyond just weight.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&h=400&fit=crop" alt="More energy and confidence after weight loss">
          </div>
          <div class="benefit-content">
            <h3>Energy and confidence restored</h3>
            <p>Patients consistently report sleeping better, having more energy for family and work, and feeling genuinely confident in their body again — often after years of struggling alone.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&h=400&fit=crop" alt="Blood pressure improvement London pharmacy">
          </div>
          <div class="benefit-content">
            <h3>Blood pressure that finally drops</h3>
            <p>Losing 5–10% of body weight reduces systolic blood pressure by an average of 5–8mmHg. Our pharmacists monitor your results at every visit, tracking progress beyond just weight.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=600&h=400&fit=crop" alt="Sustainable eating habits">
          </div>
          <div class="benefit-content">
            <h3>A changed relationship with food</h3>
            <p>GLP-1 treatments reduce cravings and emotional eating at the neurological level — not just willpower. Patients describe "finally feeling in control" of their diet for the first time in years.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="benefit-card">
          <div class="benefit-image">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop" alt="Long term weight maintenance">
          </div>
          <div class="benefit-content">
            <h3>Results that actually stay</h3>
            <p>Unlike crash diets, medically supervised GLP-1 programmes teach sustainable habits alongside the treatment. Our ongoing support means you're equipped to maintain your results long-term.</p>
            <a href="#consultation" class="benefit-cta">
              Learn More
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       HOW IT WORKS — STEPS
       ============================================ -->
  <section class="how-it-works" id="how-it-works">
    <div class="container">
      <h2 class="section-title gradient-text">Your weight loss journey at Rey London</h2>
      <p class="section-subtitle">Four clear steps from your first conversation to your goal weight</p>

      <div class="steps-grid">
        <div class="step-card">
          <div class="step-image">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Initial weight loss consultation">
          </div>
          <div class="step-content">
            <span class="step-label">Step 1</span>
            <h3>Free Consultation</h3>
            <p>Meet your pharmacist at our Chislehurst or Pond End clinic. We review your health history, calculate your BMI, discuss your goals and confirm which treatment is right for you. No pressure, no commitment on the day.</p>
          </div>
        </div>

        <div class="step-card">
          <div class="step-image">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=400&fit=crop" alt="Same day prescription Mounjaro Wegovy London">
          </div>
          <div class="step-content">
            <span class="step-label">Step 2</span>
            <h3>Same-Day Prescription</h3>
            <p>As Independent Prescribers, our pharmacists can prescribe Mounjaro, Wegovy or Saxenda the same day. You leave your appointment with your medication and a clear injection guide — no waiting for a GP letter.</p>
          </div>
        </div>

        <div class="step-card">
          <div class="step-image">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&h=400&fit=crop" alt="Monthly review weight loss check-in">
          </div>
          <div class="step-content">
            <span class="step-label">Step 3</span>
            <h3>Monthly Check-Ins</h3>
            <p>Every month, pop back in for a face-to-face review. We track your weight, blood pressure and how you're feeling. We adjust your dose as needed and tackle any side effects early. You're never left to figure it out alone.</p>
          </div>
        </div>

        <div class="step-card">
          <div class="step-image">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop" alt="Reach goal weight London">
          </div>
          <div class="step-content">
            <span class="step-label">Step 4</span>
            <h3>Reach Your Goal</h3>
            <p>Most patients reach their target weight within 9–12 months. We then transition you to a maintenance plan designed to keep the weight off permanently — because the goal isn't just losing weight, it's not finding it again.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       TESTIMONIALS
       ============================================ -->
  <section class="testimonials-premium" id="testimonials">
    <div class="testimonials-bg">
      <div class="testimonials-orb testimonials-orb-1"></div>
      <div class="testimonials-orb testimonials-orb-2"></div>
    </div>
    <div class="container testimonials-container">
      <div class="testimonials-header">
        <div class="testimonials-pill">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
          </svg>
          <span>Real Patient Stories</span>
        </div>
        <h2 class="testimonials-title">What our weight loss patients say</h2>
        <p class="testimonials-desc">Real results from real people across Chislehurst, South East London, and beyond.</p>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"18kg down in 5 months with Mounjaro. I'd tried every diet for 10 years. The difference is that the hunger just stopped. My knee pain is nearly gone, my blood pressure is normal for the first time in years. This has genuinely changed my life."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">MT</div>
            <div>
              <div class="testimonial-name">Michael T.</div>
              <div class="testimonial-location">Pond End Pharmacy</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"I was sceptical — I'd been through so many failed diets. But the pharmacist at Chislehurst was so thorough and caring. Wegovy worked and the monthly check-ins kept me on track. Down 22kg and feeling like myself again."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">SR</div>
            <div>
              <div class="testimonial-name">Sarah R.</div>
              <div class="testimonial-location">Chislehurst Pharmacy</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"My GP had a 3-month waiting list. Rey London had me started on Mounjaro within a week. The pharmacist knew everything about the treatment and answered every single question I had. I've now lost 3 stone and my diabetes medication has been halved."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">JA</div>
            <div>
              <div class="testimonial-name">James A.</div>
              <div class="testimonial-location">Pond End Pharmacy</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"As a busy working mum, I didn't have time for an expensive weight loss clinic. Rey London fit perfectly into my routine — pop in monthly on my way home. Lost 14kg without the stress. Genuinely could not recommend more highly."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">LK</div>
            <div>
              <div class="testimonial-name">Louise K.</div>
              <div class="testimonial-location">Chislehurst Pharmacy</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"The weight loss programme has been life-changing. Professional, supportive, results-driven. I've lost 18kg in 4 months with expert guidance at every step. The pharmacist is far more accessible than any doctor I've seen."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">PB</div>
            <div>
              <div class="testimonial-name">Peter B.</div>
              <div class="testimonial-location">Pond End Pharmacy</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#facc15" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">"After a hip replacement, my surgeon told me I needed to lose weight before they'd consider the second hip. In 7 months with Mounjaro at Rey London, I lost 25kg. The op is now booked. I'm beyond grateful."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">DH</div>
            <div>
              <div class="testimonial-name">Diana H.</div>
              <div class="testimonial-location">Chislehurst Pharmacy</div>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonials-trust">
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">4.9/5</div>
          <div class="testimonials-trust-label">Average Rating</div>
        </div>
        <div class="testimonials-trust-divider"></div>
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">400+</div>
          <div class="testimonials-trust-label">5-Star Reviews</div>
        </div>
        <div class="testimonials-trust-divider"></div>
        <div class="testimonials-trust-item">
          <div class="testimonials-trust-number">10,000+</div>
          <div class="testimonials-trust-label">Patients Served</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       LOCATIONS — SEO OPTIMIZED FOR BOTH CLINICS
       ============================================ -->
  <section class="locations-section" id="locations">
    <div class="container">
      <h2 class="section-title">
        Medical weight loss near you —<br>
        <span class="gradient-text">two South East London clinics</span>
      </h2>
      <p class="section-subtitle">Weight loss prescriptions at both locations. Walk-ins welcome. Same-day appointments available.</p>

      <div class="locations-grid">
        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg" alt="Rey London Pond Pharmacy - Weight Loss Chislehurst">
          </div>
          <div class="location-content">
            <h3>Pond Pharmacy — Chislehurst</h3>
            <p class="wl-location-seo">Medical weight loss in Chislehurst, BR7. Prescription Mounjaro & Wegovy with same-day appointments. Serving Chislehurst, Bromley, Sidcup, and Bexley.</p>
            <div class="location-details">
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 High St, Chislehurst BR7 5AF</p>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02084673158">020 8467 3158</a>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
              </div>
            </div>
            <div class="location-actions">
              <a href="tel:02084673158" class="btn-primary">Book Consultation</a>
              <a href="https://maps.google.com/?q=59+High+St+Chislehurst+BR7+5AF" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>

        <div class="location-card">
          <div class="location-image">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg" alt="Rey London Chislehurst Pharmacy - Weight Loss London">
          </div>
          <div class="location-content">
            <h3>Chislehurst Pharmacy — Pond End</h3>
            <p class="wl-location-seo">Medical weight loss at Pond End, SE London. Prescription Mounjaro & Wegovy with face-to-face pharmacist support. Serving Orpington, Petts Wood, St Mary Cray, and Swanley.</p>
            <div class="location-details">
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address">
                <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone">
                <a href="tel:02082950017">020 8295 0017</a>
              </div>
              <div class="detail-item">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours">
                <p>Mon–Fri: 8am–8pm | Sat: 9am–6pm | Sun: 10am–4pm</p>
              </div>
            </div>
            <div class="location-actions">
              <a href="tel:02082950017" class="btn-primary">Book Consultation</a>
              <a href="https://maps.google.com/?q=59+Chislehurst+Rd+Chislehurst+BR7+5NP" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       WHY REY LONDON
       ============================================ -->
  <section class="team-section" id="why-us">
    <div class="container">
      <div class="team-header">
        <h2 class="section-title">
          Why choose Rey London for<br>
          <span class="gradient-text">medical weight loss?</span>
        </h2>
        <p class="section-subtitle">We're not an online chatbot or a faceless app. We're your local pharmacist — the difference is enormous.</p>
      </div>

      <div class="team-content-grid">
        <div class="pharmacist-hero">
          <div class="pharmacist-image-wrapper">
            <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517579457-0.png" alt="Sumeet Banker — Superintendent Pharmacist, Rey London weight loss specialist" class="pharmacist-image">
            <div class="pharmacist-profile-card">
              <div class="profile-header">
                <div class="profile-info">
                  <h3 class="profile-name">Sumeet Banker</h3>
                  <p class="profile-title">Superintendent Pharmacist & Independent Prescriber</p>
                  <div class="profile-badge">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M8 1l2.5 5 5.5.5-4 4 1 5.5L8 13l-5 3 1-5.5-4-4 5.5-.5L8 1z" fill="currentColor"/>
                    </svg>
                    <span>GPhC Registered</span>
                  </div>
                </div>
              </div>
              <p class="profile-bio">"Weight is complex — it's hormonal, emotional, and behavioural. That's why I believe everyone deserves face-to-face care from someone who actually listens. Not an algorithm."</p>
              <div class="profile-actions">
                <a href="tel:02084673158" class="btn-profile-primary">Book Consultation</a>
                <a href="/#team" class="btn-profile-secondary">Meet the Team</a>
              </div>
            </div>
          </div>
        </div>

        <div class="team-stats-premium">
          <div class="stats-grid-premium">
            <div class="stat-card-hero">
              <div class="stat-icon-hero">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="stat-content-hero">
                <div class="stat-number-hero">No GP</div>
                <h4 class="stat-label-hero">Referral required — start this week</h4>
              </div>
            </div>

            <div class="stat-card-hero">
              <div class="stat-icon-hero">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 6v6l4 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="stat-content-hero">
                <div class="stat-number-hero">15+</div>
                <h4 class="stat-label-hero">Years of pharmacy expertise in London</h4>
              </div>
            </div>

            <div class="stat-card-hero">
              <div class="stat-icon-hero">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="stat-content-hero">
                <div class="stat-number-hero">2</div>
                <h4 class="stat-label-hero">Convenient South East London locations</h4>
              </div>
            </div>

            <div class="stat-card-hero">
              <div class="stat-icon-hero">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="stat-content-hero">
                <div class="stat-number-hero">10K+</div>
                <h4 class="stat-label-hero">Patients who've trusted our care</h4>
              </div>
            </div>
          </div>

          <!-- Feature pillars -->
          <div class="wl-pillars">
            <div class="wl-pillar">
              <div class="wl-pillar-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
              </div>
              <div class="wl-pillar-text">
                <strong>Independent Prescribers on-site</strong>
                <span>No referral, no waiting list — prescription same day</span>
              </div>
            </div>
            <div class="wl-pillar">
              <div class="wl-pillar-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div class="wl-pillar-text">
                <strong>Monthly face-to-face reviews</strong>
                <span>We track more than weight — blood pressure, glucose, wellbeing</span>
              </div>
            </div>
            <div class="wl-pillar">
              <div class="wl-pillar-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              </div>
              <div class="wl-pillar-text">
                <strong>Genuine clinical privacy</strong>
                <span>Discreet consultations — we've heard everything before</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="certifications-modern">
        <div class="cert-label">Certified & Regulated By</div>
        <div class="cert-logos">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO">
          <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       FAQ
       ============================================ -->
  <section class="services-section" id="faq">
    <div class="container">
      <h2 class="section-title">
        Your questions about<br>
        <span class="gradient-text">medical weight loss answered</span>
      </h2>
      <p class="section-subtitle">Everything you need to know before booking your consultation</p>

      <div class="wl-faq-grid">
        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How much weight can I expect to lose?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Clinical trials show that Mounjaro users lose an average of 20–22% of their body weight over 72 weeks. Wegovy users average 15–17% over 68 weeks. That means if you weigh 100kg, you could expect to lose 15–22kg. Results depend on your adherence to treatment and lifestyle changes — our monthly check-ins are designed to maximise yours.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Do I need a GP referral to start?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>No. Our pharmacists are Independent Prescribers, which means they are legally authorised to assess your suitability and issue a prescription directly. You don't need to see your GP first, and there's no waiting list. Many of our patients book on a Monday and start treatment by Wednesday.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Am I eligible for Mounjaro or Wegovy?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>NICE guidelines recommend GLP-1 treatments if your BMI is 30 or above (or 27+ if you have a weight-related condition such as Type 2 diabetes, pre-diabetes, hypertension, or high cholesterol). During your free consultation, your pharmacist will review your full health profile to confirm eligibility and discuss the most suitable option.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>What is the difference between Mounjaro and Wegovy?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Both are GLP-1 receptor agonists, but Mounjaro (tirzepatide) also activates the GIP receptor — making it a dual-action treatment. This dual mechanism produces greater weight loss in clinical trials (20%+ vs 15–17% with Wegovy). Wegovy (semaglutide) has a slightly longer safety track record and may be preferable for some patients. Your pharmacist will recommend the best option during consultation.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>What are the side effects?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>The most common side effects are mild and digestive: nausea, reduced appetite, and occasionally loose stools in the first few weeks. These typically improve significantly after the initial dose titration period. We always start on the lowest dose and increase slowly. The monthly face-to-face reviews exist specifically to catch any side effects early and adjust your plan accordingly.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How much does treatment cost in London?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Mounjaro starts from £125/month including medication and monthly consultations. Wegovy starts from £199/month and Saxenda from £150/month. Exact costs vary by dose level and are confirmed at your consultation. Unlike online services, our fee covers genuine face-to-face pharmacist time every month — not just medication dispatch.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>How long does treatment last?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Most patients see meaningful results within 3 months and reach their target weight within 9–12 months. Treatment duration varies: some patients use it as a 12-month programme then transition to lifestyle maintenance; others continue longer to sustain results. This is discussed and personalised at each review.</p>
          </div>
        </details>

        <details class="wl-faq-item">
          <summary class="wl-faq-question">
            <span>Can I get Mounjaro or Wegovy near Chislehurst or Bromley?</span>
            <svg class="wl-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </summary>
          <div class="wl-faq-answer">
            <p>Yes. Our Pond Pharmacy at 59 High St, Chislehurst BR7 5AF and our Chislehurst Road location serve patients from across South East London including Chislehurst, Bromley, Sidcup, Bexley, Orpington, Petts Wood, St Mary Cray and Swanley. Both locations offer walk-in consultations and same-day appointments.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ============================================
       FINAL CTA + NEWSLETTER (integrated block)
       ============================================ -->
  <section class="wl-footer-cta-block" id="consultation">
    <div class="wl-footer-cta-bg"><div class="wl-footer-cta-orb wl-footer-cta-orb-1"></div><div class="wl-footer-cta-orb wl-footer-cta-orb-2"></div></div>
    <div class="container wl-footer-cta-inner">
      <!-- CTA top -->
      <div class="wl-footer-cta-top">
        <div class="wl-cta-badges">
          <span class="wl-cta-badge">GPhC Registered</span>
          <span class="wl-cta-badge">Independent Prescribers</span>
          <span class="wl-cta-badge">Same-Day Prescription</span>
          <span class="wl-cta-badge">No GP Referral</span>
        </div>
        <h2 class="wl-footer-cta-title">Start losing weight this week —<br>not in 3 months</h2>
        <p class="wl-footer-cta-sub">Free consultation. No GP referral. Same-day prescription. Two South East London locations with face-to-face pharmacist support.</p>
        <div class="wl-footer-cta-buttons">
          <a href="tel:02084673158" class="wl-btn-cta-white">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Free Consultation
          </a>
          <a href="tel:02084673158" class="wl-btn-cta-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="wl-cta-checks">
          <span>✓ Mounjaro &amp; Wegovy in stock</span>
          <span>✓ Same-day appointments</span>
          <span>✓ Face-to-face pharmacist care</span>
          <span>✓ Two Chislehurst locations</span>
        </div>
        <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,.55);">Serving Chislehurst, Bromley, Orpington, Sidcup, Bexley, and South East London</p>
      </div>
      <!-- Divider -->
      <div class="wl-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="wl-footer-newsletter-row">
        <div class="wl-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert tips on weight management, nutrition, and pharmacy health services — straight to your inbox</p>
        </div>
        <form class="newsletter-form wl-footer-newsletter-form">
          <div class="newsletter-input-wrapper">
            <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 6l-9 6-9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->

<?php get_footer(); ?>
