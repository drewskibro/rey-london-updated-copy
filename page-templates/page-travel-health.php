<?php
/**
 * Template Name: Travel Health
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ========== HERO SECTION ========== -->
  <section class="th-hero">
    <div class="th-hero-bg">
      <div class="th-hero-orb th-hero-orb-1"></div>
      <div class="th-hero-orb th-hero-orb-2"></div>
    </div>
    <div class="container th-hero-container">
      <div class="th-hero-grid">
        <div class="th-hero-text">
          <div class="th-hero-pill">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>Official Yellow Fever Centre</span>
          </div>
          <h1 class="th-hero-title"><?php echo wp_kses_post( rl_field( 'th_hero_title', 'South East London\'s Trusted <span class="gradient-text">Travel Health Clinic</span>' ) ); ?></h1>
          <p class="th-hero-subtitle"><?php echo esc_html( rl_field( 'th_hero_subtitle', 'From yellow fever certification to malaria prevention – protect yourself with expert travel vaccinations before your next adventure. Serving Chislehurst, Bromley, Orpington, Sidcup, and Bexley.' ) ); ?></p>
          <div class="th-hero-ctas">
            <a href="#book" class="btn-primary th-btn-lg">Book Travel Consultation</a>
            <a href="#vaccines" class="btn-outline th-btn-lg th-btn-outline-hero">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
              Check What Vaccines You Need
            </a>
          </div>
          <div class="th-trust-strip">
            <div class="th-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/></svg>
              <span>Yellow Fever Centre</span>
            </div>
            <div class="th-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>All Travel Vaccines</span>
            </div>
            <div class="th-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <span>Same-Day Appointments</span>
            </div>
            <div class="th-trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
              <span>Expert Pharmacist Advice</span>
            </div>
          </div>
        </div>
        <div class="th-hero-visual">
          <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&h=600&fit=crop" alt="Travel health clinic South East London — passport and vaccinations for safe travel">
          <div class="th-hero-badge-premium">
            <div class="th-badge-icon-wrap">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <div class="th-badge-text">
              <span class="th-badge-label">GPhC Registered</span>
              <span class="th-badge-sublabel">Qualified Pharmacists</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STATS SECTION ========== -->
  <section class="th-stats-section-dark">
    <div class="th-stats-bg-dark"><div class="th-stats-orb th-stats-orb-1"></div><div class="th-stats-orb th-stats-orb-2"></div></div>
    <div class="container th-stats-container-dark">
      <div class="th-stats-grid-dark">
        <div class="th-stat-card-dark">
          <div class="th-stat-number-dark">Official</div>
          <div class="th-stat-label-dark">Yellow Fever Centre</div>
          <div class="th-stat-desc-dark">Internationally recognized certificates</div>
        </div>
        <div class="th-stat-card-dark">
          <div class="th-stat-number-dark">1,000+</div>
          <div class="th-stat-label-dark">Travelers Protected</div>
          <div class="th-stat-desc-dark">Safe journeys across 50+ countries</div>
        </div>
        <div class="th-stat-card-dark">
          <div class="th-stat-number-dark">15+</div>
          <div class="th-stat-label-dark">Years Experience</div>
          <div class="th-stat-desc-dark">Trusted travel health expertise</div>
        </div>
        <div class="th-stat-card-dark">
          <div class="th-stat-number-dark">4.9★</div>
          <div class="th-stat-label-dark">Patient Rating</div>
          <div class="th-stat-desc-dark">GPhC registered pharmacists</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHY CHOOSE US ========== -->
  <section class="th-why-section">
    <div class="container">
      <h2 class="section-title">Why choose our South East London <span class="gradient-text">travel clinic?</span></h2>
      <p class="section-subtitle">More than just jabs – comprehensive travel health protection that gives you confidence from booking to landing.</p>
      <div class="th-why-grid-3">
        <div class="th-why-card">
          <div class="th-why-card-image"><img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop" alt="Expert pharmacist travel consultation South East London"></div>
          <div class="th-why-card-body">
            <div class="th-why-card-number">01</div>
            <h3>Expert Travel Consultations</h3>
            <p>Personalized risk assessment based on your exact itinerary, not generic destination advice. We consider your route, accommodation type, activities, and medical history.</p>
            <a href="#book" class="th-why-card-link">Book Consultation <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          </div>
        </div>
        <div class="th-why-card">
          <div class="th-why-card-image"><img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=600&h=400&fit=crop" alt="Same-day travel vaccination appointments"></div>
          <div class="th-why-card-body">
            <div class="th-why-card-number">02</div>
            <h3>Same-Day Appointments</h3>
            <p>Last-minute trip? No problem. Get essential vaccinations administered the same day and walk out protected, not stressed about timing.</p>
            <a href="#book" class="th-why-card-link">Book Today <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          </div>
        </div>
        <div class="th-why-card">
          <div class="th-why-card-image"><img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600&h=400&fit=crop" alt="Travel vaccines in stock at Chislehurst pharmacy"></div>
          <div class="th-why-card-body">
            <div class="th-why-card-number">03</div>
            <h3>Every Vaccine In Stock</h3>
            <p>No prescription delays or follow-up visits. We stock every travel vaccine including yellow fever, rabies, Japanese encephalitis, and malaria prevention.</p>
            <a href="#vaccines" class="th-why-card-link">View Vaccines <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== POPULAR DESTINATIONS ========== -->
  <section class="destinations-section" id="destinations">
    <div class="destinations-bg"><div class="destinations-orb destinations-orb-1"></div><div class="destinations-orb destinations-orb-2"></div></div>
    <div class="container destinations-container">
      <div class="destinations-header">
        <div class="destinations-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          <span>Popular Destinations</span>
        </div>
        <h2 class="destinations-title">Traveling to these<br class="destinations-br-md"> destinations?</h2>
        <p class="destinations-desc">Each destination has unique health risks. We ensure you're protected for exactly where you're going – not over-vaccinated or under-prepared.</p>
      </div>
      <div class="th-dest-grid">
        <a href="<?php echo esc_url( home_url( '/travel-thailand/' ) ); ?>" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1528181304800-259b08848526?w=500&h=400&fit=crop" alt="Thailand travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Thailand</h3>
          <p class="dest-card-vaccines">5 recommended vaccines</p>
        </a>
        <a href="#india" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=500&h=400&fit=crop" alt="India travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">India</h3>
          <p class="dest-card-vaccines">7 recommended vaccines</p>
        </a>
        <a href="#kenya" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?w=500&h=400&fit=crop" alt="Kenya travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Kenya</h3>
          <p class="dest-card-vaccines">6 recommended vaccines</p>
        </a>
        <a href="#vietnam" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=500&h=400&fit=crop" alt="Vietnam travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Vietnam</h3>
          <p class="dest-card-vaccines">5 recommended vaccines</p>
        </a>
        <a href="#tanzania" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?w=500&h=400&fit=crop" alt="Tanzania travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Tanzania</h3>
          <p class="dest-card-vaccines">6 recommended vaccines</p>
        </a>
        <a href="#morocco" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=500&h=400&fit=crop" alt="Morocco travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Morocco</h3>
          <p class="dest-card-vaccines">4 recommended vaccines</p>
        </a>
        <a href="#dubai" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=500&h=400&fit=crop" alt="Dubai travel health advice"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Dubai</h3>
          <p class="dest-card-vaccines">3 recommended vaccines</p>
        </a>
        <a href="#indonesia" class="dest-card">
          <div class="dest-card-image"><img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=500&h=400&fit=crop" alt="Indonesia travel vaccinations"><div class="dest-card-overlay"></div></div>
          <h3 class="dest-card-name">Indonesia</h3>
          <p class="dest-card-vaccines">5 recommended vaccines</p>
        </a>
      </div>
      <p class="th-dest-note">Don't see your destination? We cover all global travel health needs – <a href="#book">book a consultation</a> for personalized advice.</p>
    </div>
  </section>

  <!-- ========== COMPREHENSIVE SERVICES ========== -->
  <section class="th-services-section" id="services">
    <div class="container">
      <h2 class="section-title">Everything you need for <span class="gradient-text">safe travel</span></h2>
      <p class="section-subtitle">One appointment, complete protection. Walk out with vaccinations, medications, certificates, and the knowledge to stay healthy abroad.</p>
      <div class="th-services-grid">
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M19.5 12.572l-7.5 7.428l-7.5-7.428A5 5 0 1 1 12 6.006a5 5 0 1 1 7.5 6.572"/></svg>
          </div>
          <h3>Travel Vaccinations</h3>
          <p>Full range of travel-specific vaccines including yellow fever, typhoid, hepatitis A/B, rabies, cholera, Japanese encephalitis, and meningitis. Administered by GPhC-registered pharmacists.</p>
        </div>
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Malaria Prevention</h3>
          <p>Destination-specific antimalarial medication (Malarone, Doxycycline, or Mefloquine) with clear dosing instructions. No confusion about when to start or stop.</p>
        </div>
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Travel Health Kits</h3>
          <p>Personalized first aid supplies based on your destination risks. Include diarrhea treatment, altitude sickness prevention, or wound care as needed.</p>
        </div>
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h3>Official Certificates</h3>
          <p>Yellow Fever Centre issuing internationally recognized vaccination certificates required for entry to endemic countries. Accepted at all borders.</p>
        </div>
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
          </div>
          <h3>Pre-Travel Health Advice</h3>
          <p>Guidance on food safety, water purification, insect bite prevention, altitude acclimatization, and what to do if you get sick abroad.</p>
        </div>
        <div class="th-service-card">
          <div class="th-service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3>Post-Travel Follow-Up</h3>
          <p>Returned home feeling unwell? We provide post-travel screening and advice for symptoms that may appear days or weeks after your trip — including fever, rashes, or gastrointestinal illness.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== AVAILABLE VACCINES ========== -->
  <section class="th-vaccines-section" id="vaccines">
    <div class="th-vaccines-bg"><div class="th-vaccines-orb th-vaccines-orb-1"></div><div class="th-vaccines-orb th-vaccines-orb-2"></div></div>
    <div class="container th-vaccines-container">
      <div class="destinations-header">
        <div class="destinations-pill">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Complete Vaccine Range</span>
        </div>
        <h2 class="destinations-title">Available Travel<br class="destinations-br-md"> Vaccinations</h2>
        <p class="destinations-desc">We stock and administer every travel vaccine recommended by UK health authorities. No referrals needed, no delays.</p>
      </div>
      <div class="th-vaccine-grid">
        <div class="th-vaccine-card th-vaccine-featured">
          <div class="th-vaccine-badge">Official Centre</div>
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/></svg></div>
          <h4>Yellow Fever</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>Typhoid</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19.5 12.572l-7.5 7.428l-7.5-7.428A5 5 0 1 1 12 6.006a5 5 0 1 1 7.5 6.572"/></svg></div>
          <h4>Hepatitis A</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19.5 12.572l-7.5 7.428l-7.5-7.428A5 5 0 1 1 12 6.006a5 5 0 1 1 7.5 6.572"/></svg></div>
          <h4>Hepatitis B</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>Rabies</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>Cholera</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h4>Japanese Encephalitis</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div>
          <h4>Meningitis ACWY</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>Tetanus/Diphtheria/Polio</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>Tick-borne Encephalitis</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>BCG (Tuberculosis)</h4>
        </div>
        <div class="th-vaccine-card">
          <div class="th-vaccine-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4>MMR (Measles/Mumps/Rubella)</h4>
        </div>
      </div>
      <p class="th-vaccine-note">All vaccines administered by qualified pharmacists with full safety protocols and monitoring.</p>
    </div>
  </section>

  <!-- ========== HOW IT WORKS ========== -->
  <section class="how-it-works" id="how-it-works">
    <div class="container">
      <h2 class="section-title gradient-text">Your travel health journey</h2>
      <p class="section-subtitle">Three simple steps to complete travel protection</p>
      <div class="steps-grid">
        <div class="step-card">
          <div class="step-image"><img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=600&h=400&fit=crop" alt="Book travel health appointment online or by phone"></div>
          <div class="step-content">
            <span class="step-label">Step 1</span>
            <h3>Book Your Consultation</h3>
            <p>Call either pharmacy or book online. Bring your itinerary details – countries, regions, dates, and activities. We recommend 6-8 weeks before travel, but can accommodate urgent requests.</p>
            <span class="th-step-meta">Book 24/7 online or call during opening hours</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-image"><img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop" alt="Expert pharmacist travel vaccination South East London"></div>
          <div class="step-content">
            <span class="step-label">Step 2</span>
            <h3>Expert Assessment & Vaccination</h3>
            <p>Our GPhC-registered pharmacist reviews your travel plans, medical history, and current medications. You'll receive necessary vaccinations immediately, plus malaria prevention if needed.</p>
            <span class="th-step-meta">Typically 30-45 minutes appointment</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-image"><img src="https://images.unsplash.com/photo-1436491865332-7a61a109db05?w=600&h=400&fit=crop" alt="Travel protected and confident with vaccination certificate"></div>
          <div class="step-content">
            <span class="step-label">Step 3</span>
            <h3>Travel Protected & Confident</h3>
            <p>Leave with yellow fever certificate (if required), antimalarial medication with clear instructions, travel health kit, and 24/7 emergency advice card. You're ready to enjoy your trip, not worry about health risks.</p>
            <span class="th-step-meta">Official certificates valid internationally</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TRUST / ABOUT SECTION ========== -->
  <section class="th-trust-section">
    <div class="container">
      <div class="th-trust-grid">
        <div class="th-trust-content">
          <span class="th-eyebrow">COMPREHENSIVE TRAVEL HEALTH EXPERTISE</span>
          <h2 class="section-title th-trust-title">Your trusted travel health partner in <span class="gradient-text">South East London</span></h2>
          <p class="th-trust-intro">Our travel health service goes beyond just administering vaccinations. We provide comprehensive destination-specific guidance that keeps you safe before, during, and after your trip. With two convenient South East London locations and over 15 years serving travelers across Bromley, Orpington, Sidcup, Bexley, and Chislehurst, we understand the health risks unique to each region you might visit.</p>
          <div class="th-feature-cards">
            <div class="th-feature-card">
              <div class="th-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
              <div>
                <h4>Destination-Specific Expertise</h4>
                <p>Thailand needs different preparation than Tanzania. Urban Dubai requires different vaccines than rural Kenya. We assess your exact itinerary and activities.</p>
              </div>
            </div>
            <div class="th-feature-card">
              <div class="th-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/></svg></div>
              <div>
                <h4>Official Yellow Fever Centre</h4>
                <p>One of the few authorized yellow fever vaccination centers in South East London. Issue internationally recognized certificates required for entry to endemic countries.</p>
              </div>
            </div>
            <div class="th-feature-card">
              <div class="th-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
              <div>
                <h4>Convenient Local Access</h4>
                <p>Two pharmacies serving South East London with free parking, extended hours, and easy access from surrounding areas. No need to travel into Central London.</p>
              </div>
            </div>
            <div class="th-feature-card">
              <div class="th-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
              <div>
                <h4>Ongoing Support</h4>
                <p>Access to your vaccination records anytime. Need repeat antimalarials? Quick refills without full re-consultation. Got sick abroad? Emergency advice line.</p>
              </div>
            </div>
          </div>
          <a href="#book" class="btn-primary th-btn-lg">Book Your Travel Health Consultation</a>
        </div>
        <div class="th-trust-visual">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=700&h=900&fit=crop" alt="Pharmacist providing travel health consultation South East London">
          <div class="th-trust-float-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>15+ Years Serving South East London Travelers</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== LOCATIONS ========== -->
  <section class="locations-section" id="locations">
    <div class="container">
      <h2 class="section-title">Two Convenient South East London <span class="gradient-text">Locations</span></h2>
      <p class="section-subtitle">Based in Chislehurst, we're South East London's local travel health clinic serving patients across Bromley, Orpington, Sidcup, Bexley, Eltham, Lewisham, and surrounding areas.</p>
      <div class="locations-grid">
        <div class="location-card">
          <div class="location-image"><img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=600&h=400&fit=crop" alt="Chislehurst Pharmacy travel health clinic"></div>
          <div class="location-content">
            <h3>Chislehurst Pharmacy</h3>
            <div class="location-details">
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
              </div>
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:02082950017">020 8295 0017</a>
              </div>
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
              </div>
            </div>
            <p class="th-location-services"><strong>Services:</strong> Yellow Fever Vaccination Centre • All travel vaccines • Same-day appointments • Antimalarial medications • Travel health kits</p>
            <p class="th-location-area">Serving Chislehurst, Bromley, and Sidcup</p>
            <div class="location-actions">
              <a href="#directions" class="btn-primary">Get Directions</a>
              <a href="tel:02082950017" class="btn-outline">Call Now</a>
            </div>
          </div>
        </div>
        <div class="location-card">
          <div class="location-image"><img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=400&fit=crop" alt="Pond End Pharmacy travel vaccinations"></div>
          <div class="location-content">
            <h3>Pond End Pharmacy</h3>
            <div class="location-details">
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <p>59 High St, Chislehurst BR7 5AF</p>
              </div>
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:02084673158">020 8467 3158</a>
              </div>
              <div class="detail-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
              </div>
            </div>
            <p class="th-location-services"><strong>Services:</strong> Full travel vaccination service • Malaria prevention • Official vaccination certificates • Travel health consultations • Emergency travel advice</p>
            <p class="th-location-area">Convenient for Orpington, Bexley, and Eltham</p>
            <div class="location-actions">
              <a href="#directions" class="btn-primary">Get Directions</a>
              <a href="tel:02084673158" class="btn-outline">Call Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="th-faq-section" id="faq">
    <div class="container">
      <h2 class="section-title">Travel Health Questions <span class="gradient-text">Answered</span></h2>
      <p class="section-subtitle">Everything you need to know before your travel health appointment</p>
      <div class="th-faq-list">
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>When should I book my travel vaccinations?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Ideally 6-8 weeks before departure to complete multi-dose vaccines like rabies or Japanese encephalitis. However, we accommodate last-minute travelers – even travelers leaving in days can receive essential single-dose vaccines like hepatitis A and typhoid. Book as soon as you know your destination.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>Do I need a yellow fever certificate for my destination?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Yellow fever certificates are mandatory for entry to many countries in Africa and South America. Some countries also require it if you've transited through endemic regions. We're an official Yellow Fever Centre and issue internationally recognized certificates valid for life. We'll confirm requirements for your specific itinerary during consultation.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>How much do travel vaccinations cost?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Costs vary by vaccine and number of doses needed. During your consultation, we provide exact pricing based on your destination requirements. We offer package deals for common destination combinations. Contact us for a personalized quote.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>What's the difference between Malarone and Doxycycline for malaria?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Both are effective antimalarials. Malarone starts 1-2 days before travel and stops 7 days after, making it convenient for short trips. Doxycycline starts 1 day before and continues 4 weeks after, making it cost-effective for longer trips. We recommend based on your itinerary, budget, and medical history.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>Can I get vaccinated if I'm pregnant or breastfeeding?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Some vaccines are safe during pregnancy and breastfeeding, others aren't recommended. We assess each case individually, weighing travel risks against vaccination risks. Book a consultation to discuss your specific situation – we often find safe solutions.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>What should I bring to my travel health appointment?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Bring your itinerary (countries, regions, cities, dates), previous vaccination records, list of current medications, and details of planned activities (safari, diving, trekking, etc.). This helps us provide accurate risk assessment and recommendations.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>Do you provide travel health advice for children?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>Yes. Children have different vaccination schedules and requirements. We provide family travel health consultations and administer age-appropriate vaccines. Some vaccines have minimum age requirements – we'll guide you on timing.</p>
          </div>
        </div>
        <div class="th-faq-item">
          <button class="th-faq-trigger" aria-expanded="false">
            <span>What if I get sick while traveling?</span>
            <svg class="th-faq-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 7.5l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="th-faq-content">
            <p>We provide an emergency advice card with your vaccination record. For ongoing support, call either pharmacy during opening hours. For emergencies abroad, seek local medical care and contact your travel insurance provider.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA + NEWSLETTER (merged) ========== -->
  <section class="th-footer-cta-block" id="book">
    <div class="th-footer-cta-bg"><div class="th-footer-cta-orb th-footer-cta-orb-1"></div><div class="th-footer-cta-orb th-footer-cta-orb-2"></div></div>
    <div class="container th-footer-cta-inner">
      <!-- CTA top -->
      <div class="th-footer-cta-top">
        <div class="th-cta-badges">
          <span class="th-cta-badge">Yellow Fever Centre</span>
          <span class="th-cta-badge">Expert Pharmacists</span>
          <span class="th-cta-badge">Same-Day Service</span>
        </div>
        <h2 class="th-footer-cta-title">Protect your next adventure</h2>
        <p class="th-footer-cta-sub">Don't let preventable illness ruin your trip. Get comprehensive travel health protection from South East London's trusted travel clinic.</p>
        <div class="cta-buttons">
          <a href="#book" class="btn-cta-primary">Book Travel Health Consultation</a>
          <a href="#vaccines" class="btn-cta-secondary-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
            Check What Vaccines You Need
          </a>
        </div>
        <div class="th-cta-checks">
          <span>✓ All vaccines in stock</span>
          <span>✓ Official yellow fever certificates</span>
          <span>✓ Same-day appointments available</span>
        </div>
      </div>
      <!-- Divider -->
      <div class="th-footer-cta-divider"></div>
      <!-- Newsletter row -->
      <div class="th-footer-newsletter-row">
        <div class="th-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert travel health tips, exclusive offers, and destination guides delivered to your inbox</p>
        </div>
        <form class="newsletter-form th-footer-newsletter-form">
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
