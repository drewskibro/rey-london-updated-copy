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
            <a href="#services" class="btn-secondary btn-view-all">
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
            <a href="<?php echo esc_url( home_url( '/nhs-prescriptions/' ) ); ?>" class="service-card">
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
            <a href="<?php echo esc_url( home_url( '/health-checks/' ) ); ?>" class="service-card">
              <span class="service-title">Health Checks</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769453402126-0.png" alt="Health Checks" />
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
            <a href="<?php echo esc_url( home_url( '/vitamin-b12-london/' ) ); ?>" class="service-card">
              <span class="service-title">Vitamin B12</span>
              <div class="service-image">
                <img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769514862073-0.png" alt="Vitamin B12" />
              </div>
              <div class="arrow-icon">
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-17.svg" alt="Arrow" />
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/hair-loss-london/' ) ); ?>" class="service-card">
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
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="btn-secondary btn-view-all">
            View all articles
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
          </a>
        </div>

        <div class="articles-grid">
          <?php
          if ( function_exists( 'have_rows' ) && have_rows( 'hp_hub_articles' ) ) :
            while ( have_rows( 'hp_hub_articles' ) ) :
              the_row();
              $art_image = get_sub_field( 'image' );
              $art_badge = get_sub_field( 'badge' );
              $art_title = get_sub_field( 'title' );
              $art_desc  = get_sub_field( 'description' );
              $art_url   = get_sub_field( 'url' );
              if ( ! $art_url ) $art_url = home_url( '/health-hub/' );
          ?>
          <a href="<?php echo esc_url( $art_url ); ?>" class="article-card">
            <div class="article-image">
              <?php if ( $art_image ) : ?>
              <img src="<?php echo esc_url( $art_image ); ?>" alt="<?php echo esc_attr( $art_title ); ?>" />
              <?php endif; ?>
              <?php if ( $art_badge ) : ?>
              <div class="article-badge"><?php echo esc_html( $art_badge ); ?></div>
              <?php endif; ?>
            </div>
            <div class="article-content">
              <h3><?php echo esc_html( $art_title ); ?></h3>
              <p><?php echo esc_html( $art_desc ); ?></p>
              <span class="article-link">
                Read Article
                <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" />
              </span>
            </div>
          </a>
          <?php
            endwhile;
          else :
          ?>
          <!-- Fallback: hardcoded cards when ACF repeater is empty -->
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=800&h=500&fit=crop" alt="Weight Loss Guide" />
              <div class="article-badge">Weight Loss</div>
            </div>
            <div class="article-content">
              <h3>Why Most Patients Wish They'd Started Mounjaro Sooner</h3>
              <p>The dual-action GLP-1 delivering 20.9% average weight loss. Our pharmacist explains what patients need to know.</p>
              <span class="article-link">Read Article <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" /></span>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&h=500&fit=crop" alt="Travel Health" />
              <div class="article-badge">Travel Health</div>
            </div>
            <div class="article-content">
              <h3>The Ultimate Pre-Travel Health Checklist for 2026</h3>
              <p>Vaccines, malaria prevention, health kits — everything you need before your next adventure.</p>
              <span class="article-link">Read Article <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" /></span>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="article-card">
            <div class="article-image">
              <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=500&fit=crop" alt="Flu Vaccination" />
              <div class="article-badge">Seasonal Health</div>
            </div>
            <div class="article-content">
              <h3>Who Should Get the Flu Jab This Year — and Who Pays for It</h3>
              <p>NHS eligibility changes each season. Find out if you qualify for a free jab — or whether private makes sense.</p>
              <span class="article-link">Read Article <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/icon-18.svg" alt="Arrow" /></span>
            </div>
          </a>
          <?php endif; ?>
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
            At Chislehurst Pharmacy Group, we provide expert travel health services across South East London. Find the vaccines you need
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
          <span class="gradient-text">Chislehurst Pharmacy Group pharmacy</span>
        </h2>
        <p class="section-subtitle hp-locations-quote"><span>Most patients tell us the same thing after their first visit.</span><br><strong>They waited too long to come in.</strong></p>

        <?php get_template_part( 'template-parts/location-cards', null, array( 'cta_prefix' => 'Book at' ) ); ?>
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
              <h3>NHS Prescriptions</h3>
              <p>
                Collect your prescription same day from either of our Chislehurst locations. Quick, straightforward and local.
              </p>
              <a href="<?php echo esc_url( home_url( '/nhs-prescriptions/' ) ); ?>" class="benefit-cta">
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
                Personalised weight loss programmes with expert pharmacist support. GLP-1 treatments prescribed same day by our pharmacists. Face-to-face care, no GP referral needed.
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
                alt="Vitamin B12 Injections"
              />
            </div>
            <div class="benefit-content">
              <h3>Vitamin B12 Injections</h3>
              <p>Boost your energy, support your immune system and improve your mood. Administered by our qualified pharmacists at both Chislehurst locations — no GP referral needed.</p>
              <a href="<?php echo esc_url( home_url( '/vitamin-b12-london/' ) ); ?>" class="benefit-cta">
                Book Your Injection
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
              <a href="<?php echo esc_url( home_url( '/travel-vaccinations-london/' ) ); ?>" class="benefit-cta">
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
              <a href="<?php echo esc_url( home_url( '/pharmacy-first/' ) ); ?>" class="benefit-cta">
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
              <img src="https://chislehurstpharmacygroup.kinsta.cloud/wp-content/uploads/2026/04/Generated-Image-April-20-2026-1_36PM.jpg" alt="HPV Vaccine — Gardasil 9" />
            </div>
            <div class="benefit-content">
              <h3>HPV Vaccine — Gardasil 9</h3>
              <p>Protection against nine strains of HPV, including those linked to cervical cancer. Available same day at both our Chislehurst locations. No GP referral needed.</p>
              <a href="<?php echo esc_url( home_url( '/hpv-vaccine/' ) ); ?>" class="benefit-cta">
                Book Your Vaccine
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
              "As a frequent traveller, I rely on Chislehurst Pharmacy Group for all my travel health needs. Yellow fever certification
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
            <div class="testimonials-trust-number">2</div>
            <div class="testimonials-trust-label">Chislehurst Locations</div>
          </div>
          <div class="testimonials-trust-divider"></div>
          <div class="testimonials-trust-item">
            <div class="testimonials-trust-number">Same Day</div>
            <div class="testimonials-trust-label">Appointments Available</div>
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
    <section class="how-it-works" id="how-it-works">
      <div class="container">
        <h2 class="section-title gradient-text"><?php echo esc_html( rl_field( 'hp_hiw_title', 'How to use our services' ) ); ?></h2>
        <p class="section-subtitle"><?php echo esc_html( rl_field( 'hp_hiw_subtitle', 'Getting the care you need is simple' ) ); ?></p>

        <div class="steps-grid">
          <?php
          if ( function_exists( 'have_rows' ) && have_rows( 'hp_hiw_steps' ) ) :
            $step_num = 0;
            while ( have_rows( 'hp_hiw_steps' ) ) :
              the_row();
              $step_num++;
              $s_image = get_sub_field( 'image' );
              $s_label = get_sub_field( 'label' );
              $s_title = get_sub_field( 'title' );
              $s_desc  = get_sub_field( 'description' );
              if ( ! $s_label ) $s_label = 'Step ' . $step_num;
          ?>
          <div class="step-card">
            <?php if ( $s_image ) : ?>
            <div class="step-image">
              <img src="<?php echo esc_url( $s_image ); ?>" alt="<?php echo esc_attr( $s_title ); ?>" />
            </div>
            <?php else : ?>
            <div class="step-image step-image-placeholder">
              <span>Image <?php echo (int) $step_num; ?></span>
            </div>
            <?php endif; ?>
            <div class="step-content">
              <span class="step-label"><?php echo esc_html( $s_label ); ?></span>
              <h3><?php echo esc_html( $s_title ? $s_title : 'Step ' . $step_num . ' Title' ); ?></h3>
              <p><?php echo esc_html( $s_desc ? $s_desc : 'Step description — edit in wp-admin.' ); ?></p>
            </div>
          </div>
          <?php
            endwhile;
          else :
            /* Fallback: 3 placeholder cards when ACF repeater is empty */
            for ( $i = 1; $i <= 3; $i++ ) :
          ?>
          <div class="step-card">
            <div class="step-image step-image-placeholder">
              <span>Image <?php echo $i; ?></span>
            </div>
            <div class="step-content">
              <span class="step-label">Step <?php echo $i; ?></span>
              <h3>Step <?php echo $i; ?> Title</h3>
              <p>Add your content in the "How It Works" tab on the homepage in wp-admin.</p>
            </div>
          </div>
          <?php endfor; endif; ?>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <!-- Meet Your Pharmacist — Editorial Layout -->
    <section class="team-section" id="team">
      <div class="team-editorial">
        <div class="team-photo-col">
          <img src="<?php echo esc_url( rl_field( 'pharmacist_image', 'https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769517579457-0.png' ) ); ?>" alt="<?php echo esc_attr( rl_field( 'pharmacist_name', 'Sumeet Banker' ) ); ?>" class="team-photo" />
          <div class="team-photo-fade"></div>
        </div>
        <div class="team-credentials-col">
          <div class="team-credentials-inner">
            <span class="team-eyebrow">Your Pharmacist</span>
            <h2 class="team-name"><?php echo esc_html( rl_field( 'pharmacist_name', 'Sumeet Banker' ) ); ?></h2>
            <p class="team-title"><?php echo esc_html( rl_field( 'pharmacist_title', 'Superintendent Pharmacist & Owner' ) ); ?></p>
            <div class="team-badge">GPhC Registered</div>
            <p class="team-bio"><?php echo esc_html( rl_field( 'pharmacist_bio', 'Sumeet has led Chislehurst Pharmacy Group for over 15 years, building a reputation for face-to-face care that patients across South East London trust.' ) ); ?></p>
            <div class="team-buttons">
              <a href="<?php echo esc_url( home_url( '/contact-page/#book-appointment' ) ); ?>" class="team-btn-primary">Book Consultation</a>
              <a href="<?php echo esc_url( home_url( '/meet-the-team/' ) ); ?>" class="team-btn-ghost">Meet the Team</a>
            </div>
            <div class="team-stats-grid">
              <div class="team-stat">
                <div class="team-stat-number"><?php echo esc_html( rl_field( 'hp_team_stat1_number', '15+' ) ); ?></div>
                <div class="team-stat-label"><?php echo esc_html( rl_field( 'hp_team_stat1_label', 'Years Serving London' ) ); ?></div>
              </div>
              <div class="team-stat">
                <div class="team-stat-number"><?php echo esc_html( rl_field( 'hp_team_stat2_number', '2' ) ); ?></div>
                <div class="team-stat-label"><?php echo esc_html( rl_field( 'hp_team_stat2_label', 'Chislehurst Locations' ) ); ?></div>
              </div>
              <div class="team-stat">
                <div class="team-stat-number"><?php echo esc_html( rl_field( 'hp_team_stat3_number', '10,000+' ) ); ?></div>
                <div class="team-stat-label"><?php echo esc_html( rl_field( 'hp_team_stat3_label', 'Patients Served' ) ); ?></div>
              </div>
              <div class="team-stat">
                <div class="team-stat-number"><?php echo esc_html( rl_field( 'hp_team_stat4_number', 'Same Day' ) ); ?></div>
                <div class="team-stat-label"><?php echo esc_html( rl_field( 'hp_team_stat4_label', 'Appointments Available' ) ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
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

    <!-- Top Products Section (hidden per client request) -->
    <?php /* Products section removed — client does not want to sell products yet.
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
    */ ?>

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
            <a href="<?php echo esc_url( rl_field( 'cta_button_url' ) ?: rl_booking_url() ); ?>" class="hp-btn-cta-white"><?php echo esc_html( rl_field( 'cta_button_text', 'Book Consultation' ) ); ?></a>
            <a href="<?php echo esc_url( home_url( '/contact-page/' ) ); ?>" class="hp-btn-cta-ghost">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
              </svg>
              Contact Us
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
            <input type="text" name="rl_hp" style="display:none" tabindex="-1" autocomplete="off">
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
              <input type="email" name="email" autocomplete="email" placeholder="Enter your email address" class="newsletter-input" required />
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
