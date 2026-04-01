<?php
/**
 * Theme Header — Three-Tier Navigation
 *
 * Structure: top banner + header bar + mega dropdowns.
 * When no ACF values are saved, every link falls back to hardcoded defaults.
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = rl_pharmacy_name();
$phone_pond    = rl_option( 'phone_pond', '020 8467 3158' );
$phone_chisl   = rl_option( 'phone_chislehurst', '020 8295 0017' );
$phone         = rl_phone();
$phone_link    = rl_phone_link();
$booking_url   = rl_booking_url();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Top Banner -->
    <div class="top-banner">
      <p><?php echo esc_html( rl_option( 'top_banner_text', 'GPhC-registered pharmacists across two Chislehurst locations · No GP referral needed · Same-day appointments available' ) ); ?></p>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header-content">
          <?php $logo_url = rl_logo_url(); ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <?php if ( $logo_url ) : ?>
              <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="logo-img" />
            <?php else : ?>
              <span class="logo-text"><?php echo esc_html( $pharmacy_name ); ?></span>
            <?php endif; ?>
          </a>

          <nav class="nav">
            <!-- Services Dropdown -->
            <div class="nav-item has-dropdown">
              <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="nav-link">
                Services
                <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
              </a>
              <div class="mega-dropdown">
                <div class="dropdown-content">
                  <div class="dropdown-section">
                    <h4 class="dropdown-title">NHS Services</h4>
                    <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="4" y="4" width="16" height="16" rx="2" />
                          <path d="M9 9h6v6H9z" /><path d="M12 9v6" /><path d="M9 12h6" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">NHS Prescriptions</span>
                        <span class="link-desc">Free prescription collection</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/pharmacy-first/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Pharmacy First</span>
                        <span class="link-desc">Free NHS treatment — 7 conditions</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/nhs-vaccinations/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">NHS Vaccinations</span>
                        <span class="link-desc">Flu jabs & immunisations</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-section">
                    <h4 class="dropdown-title">Private Services</h4>
                    <a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Vitamin B12 Injections</span>
                        <span class="link-desc">Energy & health boosts</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10" /><line x1="2" y1="12" x2="22" y2="12" /><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Travel Clinic</span>
                        <span class="link-desc">Vaccinations & advice</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/health-checks/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Health Checks</span>
                        <span class="link-desc">Blood pressure & diabetes</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-section">
                    <h4 class="dropdown-title">Specialist Care</h4>
                    <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Weight Loss</span>
                        <span class="link-desc">Personalized programs</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Hair Loss</span>
                        <span class="link-desc">Effective treatments</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><path d="M9 12l2 2 4-4" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">HPV Vaccine</span>
                        <span class="link-desc">Gardasil 9 protection</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-featured">
                    <div class="featured-card">
                      <div class="featured-badge">Most Popular</div>
                      <h5>Free Delivery Service</h5>
                      <p>Get your prescriptions delivered free across London on orders over £20</p>
                      <a href="<?php echo esc_url( home_url( '/delivery/' ) ); ?>" class="featured-btn">Learn More →</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Travel Health Dropdown -->
            <div class="nav-item has-dropdown">
              <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="nav-link">
                Travel Health
                <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
              </a>
              <div class="mega-dropdown travel-health-dropdown">
                <div class="dropdown-content dropdown-content-4col">
                  <div class="dropdown-section">
                    <h4 class="dropdown-title">Travel Vaccinations</h4>
                    <a href="<?php echo esc_url( home_url( '/hepatitis-vaccine-london/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><path d="M9 12l2 2 4-4" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Hepatitis A & B</span>
                        <span class="link-desc">Essential travel protection</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/yellow-fever-vaccine-london/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10" /><line x1="2" y1="12" x2="22" y2="12" /><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Yellow Fever</span>
                        <span class="link-desc">Official vaccination centre</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">HPV Vaccine</span>
                        <span class="link-desc">Gardasil 9 protection</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-section">
                    <h4 class="dropdown-title">Popular Destinations</h4>
                    <a href="<?php echo esc_url( home_url( '/travel-thailand/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon"><span class="flag-icon">🇹🇭</span></div>
                      <div class="link-content">
                        <span class="link-name">Thailand</span>
                        <span class="link-desc">Vaccinations & malaria advice</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/travel-india/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon"><span class="flag-icon">🇮🇳</span></div>
                      <div class="link-content">
                        <span class="link-name">India</span>
                        <span class="link-desc">Vaccines, malaria & health advice</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/travel-gambia/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon"><span class="flag-icon">🇬🇲</span></div>
                      <div class="link-content">
                        <span class="link-name">The Gambia</span>
                        <span class="link-desc">Yellow fever & travel vaccines</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-section">
                    <h4 class="dropdown-title">Travel Services</h4>
                    <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="1" y="4" width="22" height="16" rx="2" ry="2" /><line x1="1" y1="10" x2="23" y2="10" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Travel Consultations</span>
                        <span class="link-desc">Personalised travel health plans</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/malaria-prevention/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><path d="M9 12l2 2 4-4" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Malaria Prevention</span>
                        <span class="link-desc">Tablets & expert guidance</span>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-featured travel-featured">
                    <div class="featured-card">
                      <div class="featured-badge">🌍 Travel Ready</div>
                      <h5>Planning a Trip?</h5>
                      <p>Book a travel consultation and get a personalised vaccination plan for your destination</p>
                      <a href="<?php echo esc_url( $booking_url ); ?>" class="featured-btn">Book Consultation →</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Health Hub -->
            <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="nav-link">Health Hub</a>

            <!-- About Dropdown -->
            <div class="nav-item has-dropdown">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link">
                About
                <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
              </a>
              <div class="mega-dropdown about-dropdown">
                <div class="dropdown-content dropdown-content-2col">
                  <div class="dropdown-section">
                    <h4 class="dropdown-title">About Us</h4>
                    <a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Meet the Team</span>
                        <span class="link-desc">Our expert pharmacists</span>
                      </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="dropdown-link">
                      <div class="link-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" />
                        </svg>
                      </div>
                      <div class="link-content">
                        <span class="link-name">Contact & Locations</span>
                        <span class="link-desc">Find us in Chislehurst</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav>

          <!-- Header Actions -->
          <div class="header-actions">
            <!-- Search Button (Desktop) -->
            <button class="header-search-btn" id="headerSearchBtn" aria-label="Search services">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" />
              </svg>
            </button>

            <a href="<?php echo esc_url( $booking_url ); ?>" class="btn-primary">Book Consultation</a>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="hamburgerBtn" aria-label="Toggle menu" aria-expanded="false">
              <span class="hamburger-line"></span>
              <span class="hamburger-line"></span>
              <span class="hamburger-line"></span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Search Overlay (Desktop) -->
    <div class="search-overlay" id="searchOverlay" aria-hidden="true">
      <div class="search-overlay-backdrop"></div>
      <div class="search-overlay-content">
        <button class="search-overlay-close" id="searchOverlayClose" aria-label="Close search">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button>
        <div class="search-overlay-inner">
          <form class="search-overlay-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
            <div class="search-overlay-input-wrap">
              <svg class="search-overlay-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" />
              </svg>
              <input type="search" name="s" class="search-overlay-input" placeholder="Search for services, treatments, or advice..." autocomplete="off" />
            </div>
          </form>
          <div class="search-overlay-popular">
            <span class="search-popular-label">Popular Searches</span>
            <div class="search-popular-links">
              <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="search-popular-link">Weight Loss Programs</a>
              <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="search-popular-link">Travel Vaccinations</a>
              <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="search-popular-link">NHS Prescriptions</a>
              <a href="<?php echo esc_url( home_url( '/yellow-fever-vaccine-london/' ) ); ?>" class="search-popular-link">Yellow Fever Vaccine</a>
              <a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>" class="search-popular-link">Vitamin B12 Injections</a>
              <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="search-popular-link">Hair Loss Treatment</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>

    <!-- Mobile Navigation Drawer -->
    <nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
      <div class="mobile-nav-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
          <?php if ( $logo_url ) : ?>
            <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="logo-img" style="height:36px" />
          <?php else : ?>
            <span class="logo-text"><?php echo esc_html( $pharmacy_name ); ?></span>
          <?php endif; ?>
        </a>
        <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button>
      </div>

      <div class="mobile-nav-body">
        <!-- Services Accordion -->
        <div class="mobile-nav-item">
          <button class="mobile-nav-trigger" aria-expanded="false">
            Services
            <svg class="mobile-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </button>
          <div class="mobile-nav-sub">
            <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="mobile-nav-sub-link">NHS Prescriptions</a>
            <a href="<?php echo esc_url( home_url( '/pharmacy-first/' ) ); ?>" class="mobile-nav-sub-link">Pharmacy First</a>
            <a href="<?php echo esc_url( home_url( '/nhs-vaccinations/' ) ); ?>" class="mobile-nav-sub-link">NHS Vaccinations</a>
            <a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>" class="mobile-nav-sub-link">Vitamin B12 Injections</a>
            <a href="<?php echo esc_url( home_url( '/health-checks/' ) ); ?>" class="mobile-nav-sub-link">Health Checks</a>
            <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="mobile-nav-sub-link">Weight Loss</a>
            <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="mobile-nav-sub-link">Hair Loss</a>
            <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="mobile-nav-sub-link">HPV Vaccine</a>
          </div>
        </div>

        <!-- Travel Health Accordion -->
        <div class="mobile-nav-item">
          <button class="mobile-nav-trigger" aria-expanded="false">
            Travel Health
            <svg class="mobile-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </button>
          <div class="mobile-nav-sub">
            <a href="<?php echo esc_url( home_url( '/hepatitis-vaccine-london/' ) ); ?>" class="mobile-nav-sub-link">Hepatitis A &amp; B</a>
            <a href="<?php echo esc_url( home_url( '/yellow-fever-vaccine-london/' ) ); ?>" class="mobile-nav-sub-link">Yellow Fever</a>
            <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="mobile-nav-sub-link">HPV Vaccine</a>
            <a href="<?php echo esc_url( home_url( '/travel-thailand/' ) ); ?>" class="mobile-nav-sub-link">Thailand</a>
            <a href="<?php echo esc_url( home_url( '/travel-india/' ) ); ?>" class="mobile-nav-sub-link">India</a>
            <a href="<?php echo esc_url( home_url( '/travel-gambia/' ) ); ?>" class="mobile-nav-sub-link">The Gambia</a>
            <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="mobile-nav-sub-link">Travel Consultations</a>
            <a href="<?php echo esc_url( home_url( '/malaria-prevention/' ) ); ?>" class="mobile-nav-sub-link">Malaria Prevention</a>
          </div>
        </div>

        <!-- Health Hub (direct link) -->
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="mobile-nav-link">Health Hub</a>

        <!-- About Accordion -->
        <div class="mobile-nav-item">
          <button class="mobile-nav-trigger" aria-expanded="false">
            About
            <svg class="mobile-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </button>
          <div class="mobile-nav-sub">
            <a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>" class="mobile-nav-sub-link">Meet the Team</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mobile-nav-sub-link">Contact &amp; Locations</a>
          </div>
        </div>
      </div>

      <div class="mobile-nav-footer">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="mobile-nav-cta">
          Book Consultation
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" />
          </svg>
        </a>
      </div>
    </nav>
