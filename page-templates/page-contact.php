<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section class="ct-hero">
    <div class="container">
      <div class="ct-hero-grid">
        <div class="ct-hero-text">
          <div class="ct-hero-eyebrow">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Get In Touch
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'ct_hero_title', 'Contact <span class="gradient-text">Rey London</span> Pharmacy' ) ); ?></h1>
          <p class="ct-hero-sub"><?php echo esc_html( rl_field( 'ct_hero_subtitle', 'We\'re here to help with prescriptions, travel vaccinations, specialist consultations, and any health questions. Two Chislehurst locations, walk-ins welcome.' ) ); ?></p>

          <div class="ct-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Walk-Ins Welcome</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Appointments</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Two Locations</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered</span>
          </div>

          <div class="ct-hero-ctas">
            <a href="tel:02084673158" class="ct-btn-primary">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Call 020 8467 3158
            </a>
            <a href="#contact-form" class="ct-btn-outline">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              Send a Message
            </a>
          </div>
        </div>

        <!-- Quick Contact Cards -->
        <div class="ct-hero-cards">
          <div class="ct-hero-card">
            <div class="ct-hero-card-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <div class="ct-hero-card-content">
              <h3>Pond Pharmacy</h3>
              <p>59 High Street, Chislehurst, BR7 5AF</p>
              <a href="tel:02084673158">020 8467 3158</a>
            </div>
          </div>
          <div class="ct-hero-card">
            <div class="ct-hero-card-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <div class="ct-hero-card-content">
              <h3>Chislehurst Pharmacy</h3>
              <p>59 Chislehurst Road, Chislehurst, BR7 5NP</p>
              <a href="tel:02082950017">020 8295 0017</a>
            </div>
          </div>
          <div class="ct-hero-card">
            <div class="ct-hero-card-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            <div class="ct-hero-card-content">
              <h3>Email Us</h3>
              <p>We respond within 24 hours</p>
              <a href="mailto:hello@reylondon.co.uk">hello@reylondon.co.uk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== QUICK INFO ===================== -->
  <section class="ct-quick">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">How Can We Help?</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Whether you need a prescription, travel consultation, or specialist service — we're here for you.</p>
      </div>
      <div class="ct-quick-grid ct-reveal">
        <div class="ct-quick-card">
          <div class="ct-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><circle cx="12" cy="16" r="1"/></svg></div>
          <div class="ct-quick-stat">Book Online</div>
          <div class="ct-quick-label">Schedule appointments for vaccinations, consultations & more</div>
        </div>
        <div class="ct-quick-card">
          <div class="ct-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
          <div class="ct-quick-stat">Call Us</div>
          <div class="ct-quick-label">Speak directly to our pharmacists for guidance</div>
        </div>
        <div class="ct-quick-card">
          <div class="ct-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="ct-quick-stat">Walk In</div>
          <div class="ct-quick-label">No appointment needed for most pharmacy services</div>
        </div>
        <div class="ct-quick-card">
          <div class="ct-quick-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-4"/><path d="M16 16v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2"/><line x1="8" y1="12" x2="8" y2="12.01"/></svg></div>
          <div class="ct-quick-stat">Free Delivery</div>
          <div class="ct-quick-label">On prescriptions over £20 across South East London</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="ct-locations" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Find Your Nearest <span class="gradient-text" style="background:linear-gradient(135deg,var(--primary-blue),var(--light-blue),#3a6bb5);background-size:200% auto;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Rey London</span> Pharmacy</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Both pharmacies are conveniently located in Chislehurst with easy access from across South East London.</p>
      </div>
      <div class="ct-loc-grid ct-reveal">
        <!-- Pond Pharmacy -->
        <div class="ct-loc-card">
          <div class="ct-loc-image">
            <img src="https://images.unsplash.com/photo-1586015555751-63bb77f4322a?w=700&h=400&fit=crop" alt="Pond Pharmacy, Chislehurst">
          </div>
          <div class="ct-loc-content">
            <h3>Pond Pharmacy</h3>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <p>59 High Street, Chislehurst, BR7 5AF</p>
            </div>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg>
              <a href="tel:02084673158">020 8467 3158</a>
            </div>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <p>Mon–Fri 9am–6pm &nbsp;|&nbsp; Sat 9am–1pm</p>
            </div>
            <div class="ct-loc-actions">
              <a href="https://www.google.com/maps/search/?api=1&query=59+High+Street+Chislehurst+BR7+5AF" target="_blank" rel="noopener" class="ct-loc-btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                Get Directions
              </a>
              <a href="tel:02084673158" class="ct-loc-btn-outline">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg>
                Call Now
              </a>
            </div>
          </div>
        </div>
        <!-- Chislehurst Pharmacy -->
        <div class="ct-loc-card">
          <div class="ct-loc-image">
            <img src="https://images.unsplash.com/photo-1576602976047-174e57a47881?w=700&h=400&fit=crop" alt="Chislehurst Pharmacy">
          </div>
          <div class="ct-loc-content">
            <h3>Chislehurst Pharmacy</h3>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <p>59 Chislehurst Road, Chislehurst, BR7 5NP</p>
            </div>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg>
              <a href="tel:02082950017">020 8295 0017</a>
            </div>
            <div class="ct-loc-row">
              <svg class="ct-loc-row-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <p>Mon–Fri 9am–6pm &nbsp;|&nbsp; Sat 9am–1pm</p>
            </div>
            <div class="ct-loc-actions">
              <a href="https://www.google.com/maps/search/?api=1&query=59+Chislehurst+Road+Chislehurst+BR7+5NP" target="_blank" rel="noopener" class="ct-loc-btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                Get Directions
              </a>
              <a href="tel:02082950017" class="ct-loc-btn-outline">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg>
                Call Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== MAP ===================== -->
  <section class="ct-map-section">
    <div class="ct-map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2492.8!2d0.0545!3d51.4045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDI0JzE2LjIiTiAwwrAwMycxNi4yIkU!5e0!3m2!1sen!2suk!4v1" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Rey London Pharmacy locations in Chislehurst"></iframe>
    </div>
  </section>

  <!-- ===================== CONTACT FORM + INFO ===================== -->
  <section class="ct-form-section" id="contact-form">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Send Us a Message</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Have a question about our services? Need to arrange something specific? Fill in the form and we'll be in touch within 24 hours.</p>
      </div>
      <div class="ct-form-grid ct-reveal">
        <!-- Left: Info -->
        <div class="ct-form-info">
          <h3>Other Ways to Reach Us</h3>
          <p>Prefer to speak to someone directly? Here are all the ways you can get in touch with our team.</p>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg></div>
            <div>
              <div class="ct-info-label">Pond Pharmacy</div>
              <span class="ct-info-value"><a href="tel:02084673158">020 8467 3158</a></span>
            </div>
          </div>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3"/></svg></div>
            <div>
              <div class="ct-info-label">Chislehurst Pharmacy</div>
              <span class="ct-info-value"><a href="tel:02082950017">020 8295 0017</a></span>
            </div>
          </div>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            <div>
              <div class="ct-info-label">Email</div>
              <span class="ct-info-value"><a href="mailto:hello@reylondon.co.uk">hello@reylondon.co.uk</a></span>
            </div>
          </div>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <div>
              <div class="ct-info-label">Opening Hours</div>
              <span class="ct-info-value">Mon–Fri 9am–6pm &nbsp;|&nbsp; Sat 9am–1pm</span>
            </div>
          </div>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-4"/></svg></div>
            <div>
              <div class="ct-info-label">Delivery</div>
              <span class="ct-info-value">Free on orders over £20</span>
            </div>
          </div>
        </div>
        <!-- Right: Form -->
        <div class="ct-form-card">
          <h3>Your Enquiry</h3>
          <p>We'll get back to you as soon as possible.</p>
          <form id="contactForm">
            <div class="ct-form-row">
              <div class="ct-form-group">
                <label for="ctName">Full Name</label>
                <input type="text" id="ctName" name="name" placeholder="John Smith" required>
              </div>
              <div class="ct-form-group">
                <label for="ctEmail">Email Address</label>
                <input type="email" id="ctEmail" name="email" placeholder="john@example.com" required>
              </div>
            </div>
            <div class="ct-form-row">
              <div class="ct-form-group">
                <label for="ctPhone">Phone Number</label>
                <input type="tel" id="ctPhone" name="phone" placeholder="07123 456 789">
              </div>
              <div class="ct-form-group">
                <label for="ctSubject">Subject</label>
                <select id="ctSubject" name="subject">
                  <option value="">Select a topic…</option>
                  <option value="prescriptions">Prescriptions</option>
                  <option value="travel-health">Travel Vaccinations</option>
                  <option value="weight-loss">Weight Loss Consultation</option>
                  <option value="b12">Vitamin B12 Injection</option>
                  <option value="hpv">HPV Vaccine</option>
                  <option value="delivery">Delivery Enquiry</option>
                  <option value="complaint">Feedback / Complaint</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="ct-form-group full" style="margin-bottom:16px;">
              <label for="ctMessage">Message</label>
              <textarea id="ctMessage" name="message" placeholder="Tell us how we can help…" rows="5" required></textarea>
            </div>
            <button type="submit" class="ct-form-submit">
              Send Message
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </button>
            <p class="ct-form-note">We respond within 24 hours on business days. For urgent matters, call us directly.</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== OPENING HOURS ===================== -->
  <section class="ct-hours-section" id="hours">
    <div class="container ct-hours-inner">
      <h2 class="ct-hours-title">Opening Hours</h2>
      <p class="ct-hours-sub">Both pharmacies keep the same core hours. Extended hours available by appointment for specialist services.</p>
      <div class="ct-hours-grid ct-reveal">
        <div class="ct-hours-card">
          <h3>Pond Pharmacy</h3>
          <div class="ct-hours-row"><span class="ct-hours-day">Monday – Friday</span><span class="ct-hours-time">9:00 am – 6:00 pm</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Saturday</span><span class="ct-hours-time">9:00 am – 1:00 pm</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Sunday</span><span class="ct-hours-time">Closed</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Bank Holidays</span><span class="ct-hours-time">Closed</span></div>
          <div class="ct-hours-note">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
            Walk-ins welcome during opening hours
          </div>
        </div>
        <div class="ct-hours-card">
          <h3>Chislehurst Pharmacy</h3>
          <div class="ct-hours-row"><span class="ct-hours-day">Monday – Friday</span><span class="ct-hours-time">9:00 am – 6:00 pm</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Saturday</span><span class="ct-hours-time">9:00 am – 1:00 pm</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Sunday</span><span class="ct-hours-time">Closed</span></div>
          <div class="ct-hours-row"><span class="ct-hours-day">Bank Holidays</span><span class="ct-hours-time">Closed</span></div>
          <div class="ct-hours-note">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
            Convenient parking on surrounding streets
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="ct-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Quick answers to common questions about visiting, booking, and contacting Rey London Pharmacy.</p>
      </div>
      <div class="ct-faq-grid ct-reveal">
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Do I need an appointment?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Walk-ins are welcome for most services including prescriptions and over-the-counter purchases. For travel vaccinations, weight loss consultations, and specialist services, we recommend booking an appointment to guarantee availability.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Which pharmacy should I visit?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Both locations offer the same core services. Pond Pharmacy on High Street is our main branch with full travel clinic facilities. Chislehurst Pharmacy on Chislehurst Road offers the same excellent care with convenient parking nearby.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Is parking available?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes. Pond Pharmacy has on-street parking on High Street and nearby public car parks. Chislehurst Pharmacy has convenient parking available on Chislehurst Road and surrounding streets.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Can I transfer my NHS prescription to Rey London?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes, transferring is simple. Just nominate us as your preferred pharmacy through your GP surgery, or ask us in-store and we can guide you through the process. It takes effect within 24–48 hours.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Do you offer home delivery?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes. We offer free delivery on prescription orders over £20 across South East London. Same-day delivery is available for urgent prescriptions placed before 2pm.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">How quickly will you respond to my enquiry?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">We aim to respond to all email and form enquiries within 24 hours during business days. For urgent matters, please call us directly on 020 8467 3158.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">What payment methods do you accept?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">We accept Visa, Mastercard, American Express, Apple Pay, Google Pay, and cash. NHS prescriptions are free where eligible.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Are you open on bank holidays?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">We are generally closed on bank holidays, but may open for reduced hours during some holidays. Please call ahead or check our social media for up-to-date bank holiday opening times.</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FOOTER CTA ===================== -->
  <section class="ct-footer-cta-block">
    <div class="ct-footer-cta-bg"><div class="ct-footer-cta-orb ct-footer-cta-orb-1"></div><div class="ct-footer-cta-orb ct-footer-cta-orb-2"></div></div>
    <div class="container ct-footer-cta-inner">
      <div class="ct-footer-cta-top">
        <div class="ct-cta-badges">
          <span class="ct-cta-badge">GPhC Registered</span>
          <span class="ct-cta-badge">Two Locations</span>
          <span class="ct-cta-badge">Same-Day Service</span>
        </div>
        <h2 class="ct-footer-cta-title">Ready to visit us?</h2>
        <p class="ct-footer-cta-sub">Book a consultation, walk in, or call us — our pharmacists are ready to help you with expert care across both South East London locations.</p>
        <div class="ct-footer-cta-buttons">
          <a href="#book" class="hp-btn-cta-white">Book Appointment</a>
          <a href="tel:02084673158" class="hp-btn-cta-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Us: 020 8467 3158
          </a>
        </div>
        <div class="ct-cta-checks">
          <span>✓ Expert pharmacist consultations</span>
          <span>✓ No GP referral required</span>
          <span>✓ Same-day appointments available</span>
        </div>
      </div>
      <div class="ct-footer-cta-divider"></div>
      <div class="ct-footer-newsletter-row">
        <div class="ct-footer-newsletter-text">
          <h3>Stay informed about your health</h3>
          <p>Get expert health tips, exclusive offers, and updates delivered to your inbox</p>
        </div>
        <form class="newsletter-form ct-footer-newsletter-form">
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
  <footer class="footer">
    <div class="footer-glow"></div>
    <div class="container">
      <div class="footer-main">
        <div class="footer-grid">
          <div class="footer-brand-col">
            <div class="footer-logo-wrapper"><span class="footer-logo-text">Rey London</span></div>
            <p class="footer-description">Your trusted healthcare partner in London. Providing expert pharmaceutical care and personalized health services since 2010.</p>
            <div class="footer-contact-cards">
              <div class="contact-card">
                <div class="contact-card-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2"/></svg></div>
                <div class="contact-card-content"><span class="contact-card-label">Pond Pharmacy</span><a href="tel:02084673158" class="contact-card-value">020 8467 3158</a></div>
              </div>
              <div class="contact-card">
                <div class="contact-card-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2"/></svg></div>
                <div class="contact-card-content"><span class="contact-card-label">Chislehurst Pharmacy</span><a href="tel:02082950017" class="contact-card-value">020 8295 0017</a></div>
              </div>
            </div>
            <div class="footer-social">
              <span class="social-label">Follow Us</span>
              <div class="social-links-premium">
                <a href="#facebook" class="social-link" aria-label="Facebook"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M15 1H12C10.6739 1 9.40215 1.52678 8.46447 2.46447C7.52678 3.40215 7 4.67392 7 6V9H4V13H7V19H11V13H14L15 9H11V6C11 5.73478 11.1054 5.48043 11.2929 5.29289C11.4804 5.10536 11.7348 5 12 5H15V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href="#instagram" class="social-link" aria-label="Instagram"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="16" height="16" rx="4" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg></a>
                <a href="#twitter" class="social-link" aria-label="Twitter"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M19 3a8.5 8.5 0 01-2.36.64 4.13 4.13 0 001.81-2.27 8.21 8.21 0 01-2.61 1 4.1 4.1 0 00-7 3.74A11.64 11.64 0 012 2.13a4.1 4.1 0 001.27 5.47A4.07 4.07 0 011.64 7v.05a4.1 4.1 0 003.29 4 4.1 4.1 0 01-1.85.07 4.1 4.1 0 003.83 2.85A8.23 8.23 0 011 15.54a11.6 11.6 0 006.29 1.84c7.55 0 11.68-6.25 11.68-11.67 0-.18 0-.35-.01-.53A8.35 8.35 0 0019 3z" stroke="currentColor" stroke-width="2"/></svg></a>
              </div>
            </div>
          </div>
          <div class="footer-links-col">
            <h4 class="footer-col-title">Services</h4>
            <ul class="footer-links-list">
              <li><a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>">NHS Prescriptions</a></li>
              <li><a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>">Travel Clinic</a></li>
              <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Weight Loss Programs</a></li>
              <li><a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>">HPV Vaccine</a></li>
              <li><a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>">Vitamin B12</a></li>
              <li><a href="/#delivery">Free Delivery</a></li>
            </ul>
          </div>
          <div class="footer-links-col">
            <h4 class="footer-col-title">Quick Links</h4>
            <ul class="footer-links-list">
              <li><a href="/">Home</a></li>
              <li><a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>">Meet the Team</a></li>
              <li><a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>">Health Hub</a></li>
              <li><a href="/#testimonials">Testimonials</a></li>
              <li><a href="/#locations">Locations</a></li>
              <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-links-col">
            <h4 class="footer-col-title">Support</h4>
            <ul class="footer-links-list">
              <li><a href="#faq">FAQs</a></li>
              <li><a href="#hours">Opening Hours</a></li>
              <li><a href="/#privacy">Privacy Policy</a></li>
              <li><a href="/#terms">Terms &amp; Conditions</a></li>
              <li><a href="/#complaints">Complaints Procedure</a></li>
              <li><a href="/#accessibility">Accessibility</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom-premium">
        <div class="footer-bottom-content">
          <div class="footer-legal">
            <p class="footer-copyright">© 2026 Rey London Pharmacy. All rights reserved.</p>
            <p class="footer-registration">Registered Pharmacy | GPhC Registration: 1234567</p>
          </div>
          <div class="footer-certifications">
            <div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA Approved"></div>
            <div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC Registered"></div>
            <div class="cert-badge"><img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO Registered"></div>
          </div>
          <div class="footer-payments">
            <span class="payments-label">We Accept</span>
            <div class="payment-methods">
              <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/visa.svg" alt="Visa">
              <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mastercard.svg" alt="Mastercard">
              <div class="payment-badge-text">Apple Pay</div>
              <div class="payment-badge-text">Google Pay</div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
