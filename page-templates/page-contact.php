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
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book &amp; Contact
          </div>
          <h1><?php echo wp_kses_post( rl_field( 'ct_hero_title', 'Book an Appointment at <span class="gradient-text">Chislehurst Pharmacy Group</span>' ) ); ?></h1>
          <p class="ct-hero-sub"><?php echo esc_html( rl_field( 'ct_hero_subtitle', 'Book online in minutes — choose your service, pick a time, and we\'ll take care of the rest. Same-day appointments available at both Chislehurst locations.' ) ); ?></p>

          <div class="ct-hero-trust">
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Online Booking</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Appointments</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Two Locations</span>
            <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> GPhC Registered</span>
          </div>

          <div class="ct-hero-ctas">
            <a href="#book-appointment" class="ct-btn-primary">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Book Appointment
            </a>
            <a href="#contact-details" class="ct-btn-outline">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Contact Details
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
            <div class="ct-hero-card-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <div class="ct-hero-card-content">
              <h3>Opening Hours</h3>
              <p>Open Mon–Sat — hours vary by branch, see below</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== BOOK APPOINTMENT ===================== -->
  <section class="ct-booking-section" id="book-appointment">
    <div class="container">
      <div style="text-align:center;">
        <div class="ct-booking-eyebrow">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          Book Online
        </div>
        <h2 class="section-title" style="color:var(--white);">Book an <span class="gradient-text">Appointment</span></h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,.8);max-width:700px;margin:0 auto;">Select your service, choose a convenient time, and book instantly. No phone call needed — appointments confirmed immediately.</p>
      </div>
      <div class="ct-booking-form-wrap ct-reveal">
        <?php echo do_shortcode( '[ameliastepbooking layout=2]' ); ?>
      </div>
      <div class="ct-booking-trust">
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Instant Confirmation</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Same-Day Available</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Free Cancellation</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Both Locations</span>
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
          <div class="ct-quick-stat">Same-Day Collection</div>
          <div class="ct-quick-label">Order before 12pm and collect the same day</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== LOCATIONS ===================== -->
  <section class="ct-locations" id="locations">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Find Your Nearest <span class="gradient-text" style="background:linear-gradient(135deg,var(--primary-blue),var(--light-blue),#3a6bb5);background-size:200% auto;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Chislehurst Pharmacy Group</span> Pharmacy</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Both pharmacies are conveniently located in Chislehurst with easy access from across South East London.</p>
      </div>
      <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>
    </div>
  </section>


  <!-- ===================== CONTACT FORM + INFO ===================== -->
  <section class="ct-form-section" id="contact-details">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Prefer to Get in Touch <span class="gradient-text">Directly</span>?</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">If you have a question that isn't related to booking, send us a message and we'll get back to you within 24 hours. For appointments, <a href="#book-appointment" style="color:var(--primary-blue);font-weight:600;">book online above</a>.</p>
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
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <div>
              <div class="ct-info-label">Opening Hours</div>
              <span class="ct-info-value">Pond: Mon–Fri 8:30am–6:30pm · Sat 9am–2pm<br>Chislehurst: Mon–Fri 9am–6pm · Sat 9am–1pm</span>
            </div>
          </div>
          <div class="ct-info-item">
            <div class="ct-info-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-4"/></svg></div>
            <div>
              <div class="ct-info-label">Collection</div>
              <span class="ct-info-value">Same-day collection available</span>
            </div>
          </div>
        </div>
        <!-- Right: Form -->
        <div class="ct-form-card">
          <div id="contactFormSuccess" class="ct-form-success" hidden>
            <div class="ct-form-success-ring">
              <div class="ct-form-success-icon">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
              </div>
            </div>
            <h3>Thank you — message received</h3>
            <p>We've received your enquiry and will be in touch within 24 hours on business days.</p>
            <div class="ct-form-success-trust">
              <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg> Confirmation sent to your email</span>
              <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg> Average reply within 4 hours</span>
            </div>
            <div class="ct-form-success-hub">
              <span class="ct-form-success-hub-label">While you wait</span>
              <p>Browse expert health advice from our pharmacists</p>
              <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="ct-form-success-hub-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                Explore the Health Hub
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
              </a>
            </div>
            <button type="button" class="ct-form-success-reset">Send another message</button>
          </div>
          <div id="contactFormWrap">
          <h3>Your Enquiry</h3>
          <p>We'll get back to you as soon as possible.</p>
          <form id="contactForm">
            <input type="text" name="rl_hp" style="display:none" tabindex="-1" autocomplete="off">
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
                  <option value="general">General Enquiry</option>
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
    </div>
  </section>


  <!-- ===================== FAQ ===================== -->
  <section class="ct-faq-section" id="faq">
    <div class="container">
      <div style="text-align:center;">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle" style="max-width:700px;margin:0 auto;">Quick answers to common questions about visiting, booking, and contacting Chislehurst Pharmacy Group Pharmacy.</p>
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
          <button class="ct-faq-q" aria-expanded="false">Can I transfer my NHS prescription to Chislehurst Pharmacy Group?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes, transferring is simple. Just nominate us as your preferred pharmacy through your GP surgery, or ask us in-store and we can guide you through the process. It takes effect within 24–48 hours.</div></div>
        </div>
        <div class="ct-faq-item">
          <button class="ct-faq-q" aria-expanded="false">Do you offer same-day collection?<svg class="ct-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="ct-faq-a"><div class="ct-faq-a-inner">Yes. Prescriptions ordered before 12pm are usually ready for same-day collection at either Pond Pharmacy or Chislehurst Pharmacy. We'll text you when your prescription is ready.</div></div>
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
        <h2 class="ct-footer-cta-title">Ready to book your appointment?</h2>
        <p class="ct-footer-cta-sub">Skip the phone queue — book online in minutes and get instant confirmation. Same-day appointments available at both Chislehurst locations.</p>
        <div class="ct-footer-cta-buttons">
          <a href="#book-appointment" class="hp-btn-cta-white">Book Appointment Online</a>
          <a href="#locations" class="hp-btn-cta-ghost">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Find Your Branch
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
          <input type="text" name="rl_hp" style="display:none" tabindex="-1" autocomplete="off">
          <div class="newsletter-input-wrapper">
            <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 6l-9 6-9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          </div>
        </form>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
