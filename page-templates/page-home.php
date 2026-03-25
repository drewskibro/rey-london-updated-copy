<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * @package Rey_London
 */

get_header();
?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="hero-header">
            <div class="hero-text">
              <h1 class="hero-title">
                <span class="hero-title-line"><?php echo esc_html( rl_field( 'hero_title_line1', 'Healthcare that puts' ) ); ?></span>
                <span class="hero-title-line"><span class="gradient-text"><?php echo esc_html( rl_field( 'hero_title_line2', 'you first' ) ); ?></span></span>
              </h1>
              <p class="hero-subtitle">
                <?php echo esc_html( rl_field( 'hero_subtitle', 'Expert prescriptions, travel health, and weight management across South East London. Two Chislehurst locations ready to help.' ) ); ?>
              </p>
            </div>
            <a href="#all-services" class="btn-secondary btn-view-all">
              View all services
              <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
            </a>
          </div>

          <div class="service-grid">
            <?php
            $services = rl_field( 'hero_services' );
            if ( $services ) :
              foreach ( $services as $service ) :
            ?>
            <a href="<?php echo esc_url( $service['url'] ); ?>" class="service-card">
              <span class="service-title"><?php echo esc_html( $service['title'] ); ?></span>
              <div class="service-image">
                <img src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <?php endforeach; else : ?>
            <a href="<?php echo esc_url( home_url( '/prescription-services/' ) ); ?>" class="service-card">
              <span class="service-title">Prescription Services</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769448207085-0.png" alt="Prescriptions" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-card">
              <span class="service-title">Weight Loss</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769450770107-0.png" alt="Weight Loss" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="service-card">
              <span class="service-title">Travel Clinic</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769514464989-0.png" alt="Travel" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/vitamin-b12-injection/' ) ); ?>" class="service-card">
              <span class="service-title">Vitamin B12</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769514862073-0.png" alt="Vitamin B12" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="service-card">
              <span class="service-title">Hair Loss</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/1759225236perioddelay.png" alt="Hair Loss" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <?php endif; ?>
          </div>

          <div class="trust-badges">
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI DSS" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="General Pharmaceutical Council" />
          </div>
        </div>
      </div>
    </section>

    <!-- Latest from Health Hub -->
    <section class="health-hub-section">
      <div class="container">
        <div class="health-hub-header">
          <div class="health-hub-text">
            <span class="health-hub-label">Expert Advice</span>
            <h2 class="section-title">
              Latest from the<br />
              <span class="gradient-text">Health Hub</span>
            </h2>
          </div>
          <a href="#all-articles" class="btn-secondary btn-view-all">
            View all articles
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
          </a>
        </div>

        <div class="articles-grid">
          <!-- Article 1 -->
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img
                src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=800&h=500&fit=crop"
                alt="Weight Loss Guide"
              />
              <div class="article-badge">Weight Loss</div>
            </div>
            <div class="article-content">
              <h3>Why Most Patients Wish They'd Started Mounjaro Sooner</h3>
              <p>
                The dual-action GLP-1 delivering 20.9% average weight loss. Our pharmacist explains what patients need
                to know.
              </p>
              <span class="article-link">
                Read Article
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
              </span>
            </div>
          </a>

          <!-- Article 2 -->
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img
                src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&h=500&fit=crop"
                alt="Travel Health"
              />
              <div class="article-badge">Travel Health</div>
            </div>
            <div class="article-content">
              <h3>The Ultimate Pre-Travel Health Checklist for 2026</h3>
              <p>Vaccines, malaria prevention, health kits — everything you need before your next adventure.</p>
              <span class="article-link">
                Read Article
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
              </span>
            </div>
          </a>

          <!-- Article 3 -->
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img
                src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=500&fit=crop"
                alt="Flu Vaccination"
              />
              <div class="article-badge">Seasonal Health</div>
            </div>
            <div class="article-content">
              <h3>Who Should Get the Flu Jab This Year — and Who Pays for It</h3>
              <p>
                NHS eligibility changes each season. Find out if you qualify for a free jab — or whether private makes
                sense.
              </p>
              <span class="article-link">
                Read Article
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
              </span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Travel Destination Guide Section -->
    <section class="destinations-section" id="destinations">
      <div class="destinations-bg">
        <div class="destinations-orb destinations-orb-1"></div>
        <div class="destinations-orb destinations-orb-2"></div>
      </div>
      <div class="container destinations-container">
        <!-- Header -->
        <div class="destinations-header">
          <div class="destinations-pill">
            <svg
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>2 Locations Across London</span>
          </div>
          <h2 class="destinations-title">
            Search Vaccines by<br class="destinations-br-md" />
            Destination
          </h2>
          <p class="destinations-desc">
            At Rey London, we provide expert travel health services across South East London. Find the vaccines you need
            for your next adventure.
          </p>
        </div>

        <!-- Stats Row -->
        <div class="destinations-stats">
          <div class="dest-stat-card">
            <div class="dest-stat-number">2</div>
            <div class="dest-stat-label">London Locations</div>
          </div>
          <div class="dest-stat-card">
            <div class="dest-stat-number">20+</div>
            <div class="dest-stat-label">Vaccines Available</div>
          </div>
          <div class="dest-stat-card">
            <div class="dest-stat-number">Same</div>
            <div class="dest-stat-label">Day Appointments</div>
          </div>
          <div class="dest-stat-card">
            <div class="dest-stat-number">5★</div>
            <div class="dest-stat-label">Rated Service</div>
          </div>
        </div>

        <!-- Destination Grid -->
        <div class="destinations-grid">
          <a href="#africa" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Africa.webp" alt="Africa" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Africa</h3>
            <p class="dest-card-vaccines">5 recommended vaccines</p>
          </a>

          <a href="#australasia" class="dest-card">
            <div class="dest-card-image">
              <img
                src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Australasia-Pacific.webp"
                alt="Australasia & Pacific"
              />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Australasia & Pacific</h3>
            <p class="dest-card-vaccines">4 recommended vaccines</p>
          </a>

          <a href="#caribbean" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Carribbean.webp" alt="Caribbean" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Caribbean</h3>
            <p class="dest-card-vaccines">4 recommended vaccines</p>
          </a>

          <a href="#central-america" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Central-America.webp" alt="Central America" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Central America</h3>
            <p class="dest-card-vaccines">5 recommended vaccines</p>
          </a>

          <a href="#central-asia" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Central-Asia.webp" alt="Central Asia" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Central Asia</h3>
            <p class="dest-card-vaccines">7 recommended vaccines</p>
          </a>

          <a href="#east-asia" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/East-Asia.webp" alt="East Asia" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">East Asia</h3>
            <p class="dest-card-vaccines">6 recommended vaccines</p>
          </a>

          <a href="#europe-russia" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Europe-Russia.webp" alt="Europe & Russia" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Europe & Russia</h3>
            <p class="dest-card-vaccines">5 recommended vaccines</p>
          </a>

          <a href="#middle-east" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Middle-East.webp" alt="Middle East" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">Middle East</h3>
            <p class="dest-card-vaccines">5 recommended vaccines</p>
          </a>

          <a href="#north-america" class="dest-card">
            <div class="dest-card-image">
              <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/North-America.webp" alt="North America" />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">North America</h3>
            <p class="dest-card-vaccines">4 recommended vaccines</p>
          </a>

          <a href="#south-america" class="dest-card">
            <div class="dest-card-image">
              <img
                src="https://c.animaapp.com/mmkd7a1dRSnHAj/assets/South-America-Antartica.webp"
                alt="South America & Antarctica"
              />
              <div class="dest-card-overlay"></div>
            </div>
            <h3 class="dest-card-name">South America & Antarctica</h3>
            <p class="dest-card-vaccines">6 recommended vaccines</p>
          </a>
        </div>
      </div>
    </section>

    <!-- Locations Section -->
    <section class="locations-section" id="locations">
      <div class="container">
        <h2 class="section-title">
          Find your nearest<br />
          <span class="gradient-text">Rey London pharmacy</span>
        </h2>
        <p class="section-subtitle">Visit us in person for expert advice and immediate service</p>

        <div class="locations-grid">
          <?php
          $locations = rl_field( 'locations' );
          if ( $locations ) :
            foreach ( $locations as $loc ) :
              $phone_digits = preg_replace( '/[^0-9+]/', '', $loc['phone'] );
          ?>
          <div class="location-card">
            <?php if ( ! empty( $loc['image'] ) ) : ?>
            <div class="location-image">
              <img src="<?php echo esc_url( $loc['image'] ); ?>" alt="<?php echo esc_attr( $loc['name'] ); ?>" />
            </div>
            <?php endif; ?>
            <div class="location-content">
              <h3><?php echo esc_html( $loc['name'] ); ?></h3>
              <div class="location-details">
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address" />
                  <p><?php echo esc_html( $loc['address'] ); ?></p>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone" />
                  <a href="tel:<?php echo esc_attr( $phone_digits ); ?>"><?php echo esc_html( $loc['phone'] ); ?></a>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours" />
                  <p><?php echo esc_html( $loc['hours'] ); ?></p>
                </div>
              </div>
              <div class="location-actions">
                <a href="<?php echo esc_url( $loc['directions_url'] ?: '#directions' ); ?>" class="btn-primary">Get Directions</a>
                <a href="tel:<?php echo esc_attr( $phone_digits ); ?>" class="btn-outline">Call Now</a>
              </div>
            </div>
          </div>
          <?php endforeach; else : ?>
          <div class="location-card">
            <div class="location-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769343725749-0.jpeg" alt="Pond Pharmacy" />
            </div>
            <div class="location-content">
              <h3>Pond Pharmacy</h3>
              <div class="location-details">
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address" />
                  <p>59 High St, Chislehurst BR7 5AF</p>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone" />
                  <a href="tel:02084673158">020 8467 3158</a>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours" />
                  <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
                </div>
              </div>
              <div class="location-actions">
                <a href="#directions" class="btn-primary">Get Directions</a>
                <a href="tel:02084673158" class="btn-outline">Call Now</a>
              </div>
            </div>
          </div>
          <div class="location-card">
            <div class="location-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769344823391-0.jpeg" alt="Chislehurst Pharmacy" />
            </div>
            <div class="location-content">
              <h3>Chislehurst Pharmacy</h3>
              <div class="location-details">
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-19.svg" alt="Address" />
                  <p>59 Chislehurst Rd, Chislehurst BR7 5NP</p>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-32.svg" alt="Phone" />
                  <a href="tel:02082950017">020 8295 0017</a>
                </div>
                <div class="detail-item">
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-21.svg" alt="Hours" />
                  <p>Mon-Fri: 8am-8pm | Sat: 9am-6pm | Sun: 10am-4pm</p>
                </div>
              </div>
              <div class="location-actions">
                <a href="#directions" class="btn-primary">Get Directions</a>
                <a href="tel:02082950017" class="btn-outline">Call Now</a>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
      <div class="container">
        <h2 class="section-title">
          Comprehensive healthcare<br />
          <span class="gradient-text">services for you</span>
        </h2>

        <div class="benefits-grid">
          <div class="benefit-card">
            <div class="benefit-image">
              <img
                src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769351232636-1.jpeg"
                alt="Prescriptions"
              />
            </div>
            <div class="benefit-content">
              <h3>Prescription Services</h3>
              <p>
                Same-day collection available. Transfer your prescription to Rey London for convenient, reliable
                service.
              </p>
              <a href="#prescriptions" class="benefit-cta">
                Learn More
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-image">
              <img
                src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769351962465-0.jpeg"
                alt="Weight Loss"
              />
            </div>
            <div class="benefit-content">
              <h3>Weight Loss</h3>
              <p>
                Personalized weight loss programs with expert pharmacist support. Achieve your health goals with our
                proven treatment plans.
              </p>
              <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="benefit-cta">
                Start Your Journey
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-image">
              <img
                src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769370349564-0.jpeg"
                alt="Health Checks"
              />
            </div>
            <div class="benefit-content">
              <h3>Health Checks</h3>
              <p>Blood pressure monitoring, diabetes screening, and cholesterol checks available daily.</p>
              <a href="#health-checks" class="benefit-cta">
                Book a Check
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769370497237-0.jpeg" alt="Travel" />
            </div>
            <div class="benefit-content">
              <h3>Travel Clinic</h3>
              <p>Vaccinations and travel health advice from our experienced pharmacists.</p>
              <a href="#travel-clinic" class="benefit-cta">
                Plan Your Trip
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-image">
              <img
                src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769516916999-0.jpeg"
                alt="Skip the GP wait"
              />
            </div>
            <div class="benefit-content">
              <h3>Skip the GP wait.</h3>
              <p>Free NHS treatment for 7 common conditions including sore throats, UTIs, and skin infections.</p>
              <a href="#nhs-services" class="benefit-cta">
                Get Treatment Now
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517025474-0.jpeg" alt="Delivery" />
            </div>
            <div class="benefit-content">
              <h3>Free Local Delivery</h3>
              <p>Free delivery across London on orders over £20. We know the city.</p>
              <a href="#delivery" class="benefit-cta">
                Order Now
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Premium Testimonials Section -->
    <section class="testimonials-premium" id="testimonials">
      <!-- Decorative elements -->
      <div class="testimonials-bg">
        <div class="testimonials-orb testimonials-orb-1"></div>
        <div class="testimonials-orb testimonials-orb-2"></div>
      </div>

      <div class="container testimonials-container">
        <!-- Header -->
        <div class="testimonials-header">
          <div class="testimonials-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <span>Trusted by Thousands</span>
          </div>
          <h2 class="testimonials-title"><?php echo esc_html( rl_field( 'testimonials_title', 'What Our Patients Say' ) ); ?></h2>
          <p class="testimonials-desc">Real experiences from real patients across our London locations.</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="testimonials-grid">
          <!-- Testimonial 1 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "Excellent service from start to finish. The pharmacist was incredibly knowledgeable about travel vaccines
              and made me feel completely at ease. Same day appointment was a lifesaver!"
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">SJ</div>
              <div>
                <div class="testimonial-name">Sarah Johnson</div>
                <div class="testimonial-location">Chislehurst Branch</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "The weight loss programme has been life-changing. Professional, supportive, and results-driven. I've lost
              18kg in 4 months with their expert guidance."
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">MT</div>
              <div>
                <div class="testimonial-name">Michael Thompson</div>
                <div class="testimonial-location">Pond Pharmacy</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "Quick, efficient blood testing service. Results came back within 24 hours and the staff explained
              everything clearly. Highly recommend for anyone needing health checks."
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">EP</div>
              <div>
                <div class="testimonial-name">Emma Patel</div>
                <div class="testimonial-location">Chislehurst Branch</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 4 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "Fantastic ear wax removal service. Painless procedure and immediate relief. The practitioner was gentle
              and professional throughout. Worth every penny."
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">DW</div>
              <div>
                <div class="testimonial-name">David Williams</div>
                <div class="testimonial-location">Pond Pharmacy</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 5 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "As a frequent traveller, I rely on Rey London for all my travel health needs. Yellow fever certification
              was processed immediately. Couldn't ask for better service."
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">RC</div>
              <div>
                <div class="testimonial-name">Rachel Chen</div>
                <div class="testimonial-location">Pond Pharmacy</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 6 -->
          <div class="testimonial-card">
            <div class="testimonial-stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <p class="testimonial-quote">
              "The smoking cessation programme helped me quit after 15 years. Supportive team, effective treatment, and
              ongoing check-ins made all the difference. Smoke-free for 6 months now!"
            </p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">JM</div>
              <div>
                <div class="testimonial-name">James Mitchell</div>
                <div class="testimonial-location">Chislehurst Branch</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Trust Indicators -->
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
            <div class="testimonials-trust-label">Happy Patients</div>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
      <div class="container">
        <h2 class="section-title gradient-text">How to use our services</h2>
        <p class="section-subtitle">Getting the care you need is simple</p>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769518303266-1.jpeg" alt="Step 1" />
            </div>
            <div class="step-content">
              <span class="step-label">Step 1</span>
              <h3>Visit or Call Us</h3>
              <p>Walk into either location or call ahead to speak with our pharmacists.</p>
            </div>
          </div>

          <div class="step-card">
            <div class="step-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517146368-2.png" alt="Step 2" />
            </div>
            <div class="step-content">
              <span class="step-label">Step 2</span>
              <h3>Expert Consultation</h3>
              <p>Our qualified pharmacists will provide personalized advice for your needs.</p>
            </div>
          </div>

          <div class="step-card">
            <div class="step-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517273031-0.png" alt="Step 3" />
            </div>
            <div class="step-content">
              <span class="step-label">Step 3</span>
              <h3>Get Your Medication</h3>
              <p>Collect immediately or choose free delivery to your London address.</p>
            </div>
          </div>

          <div class="step-card">
            <div class="step-image">
              <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769518806795-0.jpeg" alt="Step 4" />
            </div>
            <div class="step-content">
              <span class="step-label">Step 4</span>
              <h3>Ongoing Support</h3>
              <p>We're here whenever you need us with continuous care and advice.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="team">
      <div class="container">
        <div class="team-header">
          <h2 class="section-title">
            Meet your<br />
            <span class="gradient-text">expert pharmacy team</span>
          </h2>
          <p class="section-subtitle">
            Led by Sumeet Banker, our team delivers exceptional pharmaceutical care across South East London
          </p>
        </div>

        <div class="team-content-grid">
          <!-- Left Column - Hero Pharmacist Feature -->
          <div class="pharmacist-hero">
            <div class="pharmacist-image-wrapper">
              <img
                src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517579457-0.png"
                alt="Sumeet Banker - Superintendent Pharmacist"
                class="pharmacist-image"
              />

              <div class="pharmacist-profile-card">
                <div class="profile-header">
                  <div class="profile-info">
                    <h3 class="profile-name"><?php echo esc_html( rl_field( 'pharmacist_name', 'Sumeet Banker' ) ); ?></h3>
                    <p class="profile-title"><?php echo esc_html( rl_field( 'pharmacist_title', 'Superintendent Pharmacist & Owner' ) ); ?></p>
                    <div class="profile-badge">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 1l2.5 5 5.5.5-4 4 1 5.5L8 13l-5 3 1-5.5-4-4 5.5-.5L8 1z" fill="currentColor" />
                      </svg>
                      <span>GPhC Registered</span>
                    </div>
                  </div>
                </div>

                <p class="profile-bio">
                  <?php echo esc_html( rl_field( 'pharmacist_bio', 'With over 15 years of experience, Sumeet leads our team in providing exceptional pharmaceutical care to the South East London community.' ) ); ?>
                </p>

                <div class="profile-actions">
                  <a href="#contact" class="btn-profile-primary"> Book Consultation </a>
                  <a href="#team-full" class="btn-profile-secondary"> Meet the Team </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column - Premium Stats Grid -->
          <div class="team-stats-premium">
            <div class="stats-grid-premium">
              <!-- Stat 1 -->
              <div class="stat-card-hero">
                <div class="stat-icon-hero">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path
                      d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="stat-content-hero">
                  <div class="stat-number-hero">8</div>
                  <h4 class="stat-label-hero">Qualified Pharmacists</h4>
                </div>
              </div>

              <!-- Stat 2 -->
              <div class="stat-card-hero">
                <div class="stat-icon-hero">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle
                      cx="12"
                      cy="12"
                      r="10"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path d="M12 6v6l4 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="stat-content-hero">
                  <div class="stat-number-hero">15+</div>
                  <h4 class="stat-label-hero">Years Serving London</h4>
                </div>
              </div>

              <!-- Stat 3 -->
              <div class="stat-card-hero">
                <div class="stat-icon-hero">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path
                      d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <circle
                      cx="12"
                      cy="10"
                      r="3"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="stat-content-hero">
                  <div class="stat-number-hero">2</div>
                  <h4 class="stat-label-hero">Premium Locations</h4>
                </div>
              </div>

              <!-- Stat 4 -->
              <div class="stat-card-hero">
                <div class="stat-icon-hero">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path
                      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="stat-content-hero">
                  <div class="stat-number-hero">10,000+</div>
                  <h4 class="stat-label-hero">Patients Served</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="certifications-modern">
          <div class="cert-label">Certified & Regulated By</div>
          <div class="cert-logos">
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/mhra.svg" alt="MHRA" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/gpc.svg" alt="GPC" />
          </div>
        </div>
      </div>
    </section>

    <!-- Top Products Section -->
    <section class="products-section">
      <div class="container">
        <div class="products-header">
          <div class="products-text">
            <span class="products-label">Shop Essentials</span>
            <h2 class="section-title">
              Top products for<br />
              <span class="gradient-text">your wellbeing</span>
            </h2>
          </div>
          <a href="#all-products" class="btn-secondary btn-view-all">
            View all products
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
          </a>
        </div>

        <div class="products-grid">
          <!-- Product 1: Hay Fever -->
          <a href="#hay-fever" class="product-card">
            <div class="product-badge">Popular</div>
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400&h=400&fit=crop"
                alt="Hay Fever Relief"
              />
            </div>
            <div class="product-content">
              <h3>Hay Fever Relief</h3>
              <p>Fast-acting antihistamines for seasonal allergies</p>
              <div class="product-footer">
                <span class="product-price">From £8.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>

          <!-- Product 2: Pain Relief -->
          <a href="#pain-relief" class="product-card">
            <div class="product-badge">Best Seller</div>
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=400&h=400&fit=crop"
                alt="Pain Relief"
              />
            </div>
            <div class="product-content">
              <h3>Pain Relief</h3>
              <p>Effective solutions for headaches and body pain</p>
              <div class="product-footer">
                <span class="product-price">From £4.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>

          <!-- Product 3: Vitamins & Supplements -->
          <a href="#vitamins" class="product-card">
            <div class="product-badge">New</div>
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1550572017-4814c6f55999?w=400&h=400&fit=crop"
                alt="Vitamins"
              />
            </div>
            <div class="product-content">
              <h3>Vitamins & Supplements</h3>
              <p>Essential nutrients for daily health support</p>
              <div class="product-footer">
                <span class="product-price">From £12.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>

          <!-- Product 4: Cold & Flu -->
          <a href="#cold-flu" class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=400&h=400&fit=crop"
                alt="Cold & Flu"
              />
            </div>
            <div class="product-content">
              <h3>Cold & Flu</h3>
              <p>Complete relief for cold and flu symptoms</p>
              <div class="product-footer">
                <span class="product-price">From £6.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>

          <!-- Product 5: Skincare -->
          <a href="#skincare" class="product-card">
            <div class="product-badge">Trending</div>
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=400&h=400&fit=crop"
                alt="Skincare"
              />
            </div>
            <div class="product-content">
              <h3>Skincare Essentials</h3>
              <p>Premium products for healthy, glowing skin</p>
              <div class="product-footer">
                <span class="product-price">From £15.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>

          <!-- Product 6: First Aid -->
          <a href="#first-aid" class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1603398938378-e54eab446dde?w=400&h=400&fit=crop"
                alt="First Aid"
              />
            </div>
            <div class="product-content">
              <h3>First Aid Supplies</h3>
              <p>Everything you need for home emergencies</p>
              <div class="product-footer">
                <span class="product-price">From £9.99</span>
                <span class="product-cta">
                  Shop Now
                  <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
                </span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Integrated CTA + Newsletter Block -->
    <section class="hp-footer-cta-block" id="contact">
      <div class="hp-footer-cta-bg">
        <div class="hp-footer-cta-orb hp-footer-cta-orb-1"></div>
        <div class="hp-footer-cta-orb hp-footer-cta-orb-2"></div>
      </div>
      <div class="container hp-footer-cta-inner">
        <!-- CTA top -->
        <div class="hp-footer-cta-top">
          <div class="hp-cta-badges">
            <span class="hp-cta-badge">GPhC Registered</span>
            <span class="hp-cta-badge">Two Locations</span>
            <span class="hp-cta-badge">Same-Day Service</span>
          </div>
          <h2 class="hp-footer-cta-title"><?php echo esc_html( rl_field( 'cta_title', 'Need help with something?' ) ); ?></h2>
          <p class="hp-footer-cta-sub">
            <?php echo esc_html( rl_field( 'cta_subtitle', 'Our expert pharmacists are here to help you across both South East London locations. No appointment needed for most services.' ) ); ?>
          </p>
          <div class="hp-footer-cta-buttons">
            <a href="<?php echo esc_url( rl_field( 'cta_button_url' ) ?: rl_booking_url() ); ?>" class="hp-btn-cta-white"><?php echo esc_html( rl_field( 'cta_button_text', 'Book Appointment' ) ); ?></a>
            <a href="tel:<?php echo esc_attr( rl_phone_link() ); ?>" class="hp-btn-cta-ghost">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81L9.27 8.95a16 16 0 0 0 6.78 6.78l1.42-1.42a12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                />
              </svg>
              Call Us: <?php echo esc_html( rl_phone() ); ?>
            </a>
          </div>
          <div class="hp-cta-checks">
            <span>✓ Expert pharmacist consultations</span>
            <span>✓ No GP referral required</span>
            <span>✓ Same-day appointments available</span>
          </div>
        </div>
        <!-- Divider -->
        <div class="hp-footer-cta-divider"></div>
        <!-- Newsletter row -->
        <div class="hp-footer-newsletter-row">
          <div class="hp-footer-newsletter-text">
            <h3>Stay informed about your health</h3>
            <p>Get expert health tips, exclusive offers, and updates delivered to your inbox</p>
          </div>
          <form class="newsletter-form hp-footer-newsletter-form">
            <div class="newsletter-input-wrapper">
              <svg class="newsletter-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path
                  d="M3 4h14c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M19 6l-9 6-9-6"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <input type="email" placeholder="Enter your email address" class="newsletter-input" required />
              <button type="submit" class="newsletter-btn">
                Subscribe
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 8h10M9 4l4 4-4 4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
