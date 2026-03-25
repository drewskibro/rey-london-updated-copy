<?php
/**
 * Theme Footer
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = rl_pharmacy_name();
$phone_pond    = rl_option( 'phone_pond', '020 8467 3158' );
$phone_chisl   = rl_option( 'phone_chislehurst', '020 8295 0017' );
$booking_url   = rl_booking_url();
?>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-glow"></div>
      <div class="container">
        <!-- Main Footer Content -->
        <div class="footer-main">
          <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand-col">
              <div class="footer-logo-wrapper">
                <span class="footer-logo-text"><?php echo esc_html( $pharmacy_name ); ?></span>
              </div>
              <p class="footer-description">
                <?php echo esc_html( rl_option( 'footer_description', 'Your trusted healthcare partner in London. Providing expert pharmaceutical care and personalized health services since 2010.' ) ); ?>
              </p>

              <!-- Contact Cards -->
              <div class="footer-contact-cards">
                <div class="contact-card">
                  <div class="contact-card-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2" />
                    </svg>
                  </div>
                  <div class="contact-card-content">
                    <span class="contact-card-label">Pond Pharmacy</span>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone_pond ) ); ?>" class="contact-card-value"><?php echo esc_html( $phone_pond ); ?></a>
                  </div>
                </div>

                <div class="contact-card">
                  <div class="contact-card-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18 8c0 5.5-7 11-7 11S4 13.5 4 8a7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <circle cx="11" cy="8" r="2" stroke="currentColor" stroke-width="2" />
                    </svg>
                  </div>
                  <div class="contact-card-content">
                    <span class="contact-card-label">Chislehurst Pharmacy</span>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone_chisl ) ); ?>" class="contact-card-value"><?php echo esc_html( $phone_chisl ); ?></a>
                  </div>
                </div>
              </div>

              <!-- Social Links -->
              <div class="footer-social">
                <span class="social-label">Follow Us</span>
                <div class="social-links-premium">
                  <a href="<?php echo esc_url( rl_option( 'social_facebook', '#' ) ); ?>" class="social-link" aria-label="Facebook">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M15 1H12C10.6739 1 9.40215 1.52678 8.46447 2.46447C7.52678 3.40215 7 4.67392 7 6V9H4V13H7V19H11V13H14L15 9H11V6C11 5.73478 11.1054 5.48043 11.2929 5.29289C11.4804 5.10536 11.7348 5 12 5H15V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                  <a href="<?php echo esc_url( rl_option( 'social_instagram', '#' ) ); ?>" class="social-link" aria-label="Instagram">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <rect x="2" y="2" width="16" height="16" rx="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <circle cx="10" cy="10" r="3" stroke="currentColor" stroke-width="2" />
                      <circle cx="14.5" cy="5.5" r="0.5" fill="currentColor" />
                    </svg>
                  </a>
                  <a href="<?php echo esc_url( rl_option( 'social_twitter', '#' ) ); ?>" class="social-link" aria-label="Twitter">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M19 3a8.5 8.5 0 01-2.36.64 4.13 4.13 0 001.81-2.27 8.21 8.21 0 01-2.61 1 4.1 4.1 0 00-7 3.74A11.64 11.64 0 012 2.13a4.1 4.1 0 001.27 5.47A4.07 4.07 0 011.64 7v.05a4.1 4.1 0 003.29 4 4.1 4.1 0 01-1.85.07 4.1 4.1 0 003.83 2.85A8.23 8.23 0 011 15.54a11.6 11.6 0 006.29 1.84c7.55 0 11.68-6.25 11.68-11.67 0-.18 0-.35-.01-.53A8.35 8.35 0 0019 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                  <a href="<?php echo esc_url( rl_option( 'social_linkedin', '#' ) ); ?>" class="social-link" aria-label="LinkedIn">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M13 7a5 5 0 015 5v6h-4v-6a1 1 0 00-2 0v6H8v-6a5 5 0 015-5zM4 8h4v10H4V8zM6 5a2 2 0 100-4 2 2 0 000 4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Services Column -->
            <div class="footer-links-col">
              <h4 class="footer-col-title">Services</h4>
              <ul class="footer-links-list">
                <li><a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>">NHS Prescriptions</a></li>
                <li><a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>">Travel Clinic</a></li>
                <li><a href="<?php echo esc_url( home_url( '/health-checks/' ) ); ?>">Health Checks</a></li>
                <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Weight Loss Programs</a></li>
                <li><a href="<?php echo esc_url( home_url( '/vaccinations/' ) ); ?>">Vaccinations</a></li>
              </ul>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-links-col">
              <h4 class="footer-col-title">Quick Links</h4>
              <ul class="footer-links-list">
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                <li><a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>">Meet the Team</a></li>
                <li><a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>">Health Hub</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
              </ul>
            </div>

            <!-- Support Column -->
            <div class="footer-links-col">
              <h4 class="footer-col-title">Support</h4>
              <ul class="footer-links-list">
                <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQs</a></li>
                <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms & Conditions</a></li>
                <li><a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>">Accessibility</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom-premium">
          <div class="footer-bottom-content">
            <div class="footer-legal">
              <p class="footer-copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( $pharmacy_name ); ?>. All rights reserved.</p>
              <p class="footer-registration"><?php echo esc_html( rl_option( 'footer_registration', 'Registered Pharmacy | GPhC Registration: 1234567' ) ); ?></p>
            </div>

            <div class="footer-certifications">
              <div class="cert-badge">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA Approved" />
              </div>
              <div class="cert-badge">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPhC Registered" />
              </div>
              <div class="cert-badge">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO Registered" />
              </div>
            </div>

            <div class="footer-payments">
              <span class="payments-label">We Accept</span>
              <div class="payment-methods">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/visa.svg" alt="Visa" />
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mastercard.svg" alt="Mastercard" />
                <div class="payment-badge-text">Apple Pay</div>
                <div class="payment-badge-text">Google Pay</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
