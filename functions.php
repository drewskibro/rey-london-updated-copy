<?php
/**
 * Chislehurst Pharmacy Group Theme Functions
 *
 * @package Rey_London
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'REY_LONDON_VERSION', filemtime( get_theme_file_path( 'assets/css/globals.css' ) ) );
define( 'REY_LONDON_DIR', get_template_directory() );
define( 'REY_LONDON_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function rey_london_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary'         => __( 'Primary Menu', 'rey-london' ),
        'footer-services' => __( 'Footer Services', 'rey-london' ),
        'footer-links'    => __( 'Footer Quick Links', 'rey-london' ),
    ) );

    add_image_size( 'treatment-card', 600, 400, true );
    add_image_size( 'health-hub-featured', 800, 600, true );
    add_image_size( 'health-hub-card', 600, 400, true );
    add_image_size( 'pharmacist-photo', 600, 750, true );
    add_image_size( 'content-large', 1024, 9999, false );
}
add_action( 'after_setup_theme', 'rey_london_setup' );

/** Make the content-large size available in the editor image-size dropdown. */
function rl_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'content-large' => __( 'Content Large', 'rey-london' ),
    ) );
}
add_filter( 'image_size_names_choose', 'rl_custom_image_sizes' );

/**
 * Enqueue Global Styles & Scripts
 */
function rey_london_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'rey-london-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Global CSS
    wp_enqueue_style(
        'rey-london-globals',
        REY_LONDON_URI . '/assets/css/globals.css',
        array(),
        REY_LONDON_VERSION
    );

    // Search styles
    wp_enqueue_style(
        'rey-london-search',
        REY_LONDON_URI . '/assets/css/search-styles.css',
        array( 'rey-london-globals' ),
        REY_LONDON_VERSION
    );

    // Theme stylesheet (style.css - mostly metadata)
    wp_enqueue_style(
        'rey-london-style',
        get_stylesheet_uri(),
        array( 'rey-london-globals' ),
        REY_LONDON_VERSION
    );

    // Page-specific CSS
    if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
        wp_enqueue_style( 'rey-london-weight-loss', REY_LONDON_URI . '/assets/css/weight-loss.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-weight-loss-js', REY_LONDON_URI . '/assets/js/weight-loss.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-travel-health.php' ) ) {
        wp_enqueue_style( 'rey-london-travel-health', REY_LONDON_URI . '/assets/css/travel-health.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-travel-health-js', REY_LONDON_URI . '/assets/js/travel-health.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-health-hub.php' ) || is_home() || is_category() || is_tag() || is_archive() ) {
        wp_enqueue_style( 'rey-london-health-hub', REY_LONDON_URI . '/assets/css/health-hub.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        if ( is_page_template( 'page-templates/page-health-hub.php' ) ) {
            wp_enqueue_script( 'rey-london-health-hub-js', REY_LONDON_URI . '/assets/js/health-hub.js', array(), REY_LONDON_VERSION, true );
        }
    }

    if ( is_singular( 'post' ) ) {
        wp_enqueue_style( 'rey-london-blog-post', REY_LONDON_URI . '/assets/css/blog-post.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-blog-js', REY_LONDON_URI . '/assets/js/blog.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-flu-covid.php' ) ) {
        wp_enqueue_style( 'rey-london-flu-covid', REY_LONDON_URI . '/assets/css/flu-covid.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
    }

    if ( is_page_template( 'page-templates/page-contact.php' ) ) {
        wp_enqueue_style( 'rey-london-contact', REY_LONDON_URI . '/assets/css/contact.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-contact-js', REY_LONDON_URI . '/assets/js/contact.js', array( 'rey-london-newsletter-js' ), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-team.php' ) ) {
        wp_enqueue_style( 'rey-london-team', REY_LONDON_URI . '/assets/css/meet-the-team.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-team-js', REY_LONDON_URI . '/assets/js/meet-the-team.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-hair-loss.php' ) ) {
        wp_enqueue_style( 'rey-london-hair-loss', REY_LONDON_URI . '/assets/css/hair-loss.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-hair-loss-js', REY_LONDON_URI . '/assets/js/hair-loss.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-prescription-services.php' ) ) {
        wp_enqueue_style( 'rey-london-prescriptions', REY_LONDON_URI . '/assets/css/prescription-services.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-prescriptions-js', REY_LONDON_URI . '/assets/js/prescription-services.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-vitamin-b12.php' ) ) {
        wp_enqueue_style( 'rey-london-vitamin-b12', REY_LONDON_URI . '/assets/css/vitamin-b12.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-vitamin-b12-js', REY_LONDON_URI . '/assets/js/vitamin-b12.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-hepatitis.php' ) ) {
        wp_enqueue_style( 'rey-london-hepatitis', REY_LONDON_URI . '/assets/css/hepatitis-vaccine-london.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-hepatitis-js', REY_LONDON_URI . '/assets/js/hepatitis.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-dtp.php' ) ) {
        wp_enqueue_style( 'rey-london-dtp', REY_LONDON_URI . '/assets/css/dtp.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-dtp-js', REY_LONDON_URI . '/assets/js/dtp.js', array(), REY_LONDON_VERSION, true );
    }

    // Typhoid page — reuses the DTP service-page component styles (dtp-*).
    if ( is_page_template( 'page-templates/page-typhoid.php' ) ) {
        wp_enqueue_style( 'rey-london-dtp', REY_LONDON_URI . '/assets/css/dtp.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
    }

    if ( is_page_template( 'page-templates/page-hajj-umrah.php' ) ) {
        wp_enqueue_style( 'rey-london-hajj-umrah', REY_LONDON_URI . '/assets/css/hajj-umrah.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-hajj-umrah-js', REY_LONDON_URI . '/assets/js/hajj-umrah.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-malaria.php' ) ) {
        wp_enqueue_style( 'rey-london-malaria', REY_LONDON_URI . '/assets/css/malaria.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-malaria-js', REY_LONDON_URI . '/assets/js/malaria.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-hpv.php' ) ) {
        wp_enqueue_style( 'rey-london-hpv', REY_LONDON_URI . '/assets/css/hpv-vaccine-london.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-hpv-js', REY_LONDON_URI . '/assets/js/hpv.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-pharmacy-first.php' ) ) {
        wp_enqueue_style( 'rey-london-pharmacy-first', REY_LONDON_URI . '/assets/css/pharmacy-first.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-pharmacy-first-js', REY_LONDON_URI . '/assets/js/pharmacy-first.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-yellow-fever.php' ) ) {
        wp_enqueue_style( 'rey-london-yellow-fever', REY_LONDON_URI . '/assets/css/yellow-fever-vaccine-london.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-yellow-fever-js', REY_LONDON_URI . '/assets/js/yellow-fever.js', array(), REY_LONDON_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-thailand.php' ) || is_page_template( 'page-templates/page-india.php' ) || is_page_template( 'page-templates/page-gambia.php' ) ) {
        wp_enqueue_style( 'rey-london-thailand', REY_LONDON_URI . '/assets/css/thailand.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
    }

    // Homepage animations
    if ( is_page_template( 'page-templates/page-home.php' ) ) {
        wp_enqueue_script( 'rey-london-homepage', REY_LONDON_URI . '/assets/js/homepage-animations.js', array(), REY_LONDON_VERSION, true );
    }

    // Newsletter JS — loaded on all pages
    wp_enqueue_script(
        'rey-london-newsletter-js',
        REY_LONDON_URI . '/assets/js/newsletter.js',
        array(),
        REY_LONDON_VERSION,
        true
    );

    // Navigation JS — loaded on all pages
    wp_enqueue_script(
        'rey-london-nav-js',
        REY_LONDON_URI . '/assets/js/rey-london-nav.js',
        array(),
        REY_LONDON_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'rey_london_scripts' );

/**
 * ACF Includes
 */
if ( file_exists( REY_LONDON_DIR . '/inc/acf-options.php' ) ) {
    require_once REY_LONDON_DIR . '/inc/acf-options.php';
}

if ( file_exists( REY_LONDON_DIR . '/inc/acf-fields.php' ) ) {
    require_once REY_LONDON_DIR . '/inc/acf-fields.php';
}

/**
 * Helper: Health Hub default author — returns [initials, name, title].
 */
function rl_hh_author() {
    $photo     = rl_field( 'hh_author_photo' );
    $photo_url = is_array( $photo ) && ! empty( $photo['url'] ) ? $photo['url'] : '';
    $photo_alt = is_array( $photo ) && ! empty( $photo['alt'] ) ? $photo['alt'] : '';
    return array(
        'initials'  => rl_field( 'hh_author_initials', 'SB' ),
        'name'      => rl_field( 'hh_author_name', 'Sumeet Banker' ),
        'title'     => rl_field( 'hh_author_title', 'Lead Pharmacist' ),
        'photo_url' => $photo_url,
        'photo_alt' => $photo_alt,
    );
}

/**
 * Helper: Render the Health Hub byline avatar (photo if set, else initials).
 */
function rl_hh_avatar( $author, $size = 'lg' ) {
    $class = 'hh-byline-avatar' . ( $size === 'sm' ? ' hh-byline-avatar--sm' : '' );
    if ( ! empty( $author['photo_url'] ) ) {
        $alt = $author['photo_alt'] ?: $author['name'];
        printf(
            '<div class="%s hh-byline-avatar--photo"><img src="%s" alt="%s"></div>',
            esc_attr( $class ),
            esc_url( $author['photo_url'] ),
            esc_attr( $alt )
        );
    } else {
        printf( '<div class="%s">%s</div>', esc_attr( $class ), esc_html( $author['initials'] ) );
    }
}

/**
 * Helper: Get option field with fallback
 */
function rl_option( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name, 'option' );
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}

/**
 * Helper: Get page field with fallback
 */
function rl_field( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name );
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}

/**
 * Helper: Get pharmacy name
 */
function rl_pharmacy_name() {
    return rl_option( 'pharmacy_name', 'Chislehurst Pharmacy Group' );
}

/**
 * Helper: Get pharmacy phone
 */
function rl_phone() {
    return rl_option( 'pharmacy_phone', '020 8467 3158' );
}

/**
 * Helper: Pond Pharmacy opening hours summary (single line)
 */
function rl_hours_pond() {
    return rl_option( 'hours_pond_summary', 'Mon–Fri: 8:30am–6:30pm | Sat: 9am–2pm | Sun: Closed' );
}

/**
 * Helper: Chislehurst Pharmacy opening hours summary (single line)
 */
function rl_hours_chislehurst() {
    return rl_option( 'hours_chislehurst_summary', 'Mon–Fri: 9am–6pm | Sat: 9am–1pm | Sun: Closed' );
}

/**
 * Helper: Get phone link (digits only)
 */
function rl_phone_link() {
    $phone = rl_phone();
    return preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Helper: Get booking URL
 */
function rl_booking_url() {
    $url = rl_option( 'pharmacy_booking_url' );
    if ( $url ) {
        return $url;
    }
    $page = rl_option( 'booking_page' );
    if ( $page ) {
        return get_permalink( $page );
    }
    return home_url( '/contact-page/#book-appointment' );
}

/**
 * Helper: Get logo URL
 */
function rl_logo_url() {
    $custom_logo = rl_option( 'pharmacy_logo' );
    if ( $custom_logo ) {
        if ( is_numeric( $custom_logo ) ) {
            return wp_get_attachment_image_url( $custom_logo, 'full' );
        }
        return is_array( $custom_logo ) ? $custom_logo['url'] : $custom_logo;
    }
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        return wp_get_attachment_image_url( $custom_logo_id, 'full' );
    }
    return get_template_directory_uri() . '/assets/images/logo.svg';
}

/**
 * Allow SVG uploads in the WordPress media library.
 */
add_filter( 'upload_mimes', function ( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
} );

/**
 * Register widget areas
 */
function rey_london_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'rey-london' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'rey_london_widgets_init' );

/**
 * Custom excerpt length
 */
function rey_london_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'rey_london_excerpt_length' );

/**
 * Custom excerpt more
 */
function rey_london_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'rey_london_excerpt_more' );

/**
 * Add page slug as body class
 */
function rey_london_body_classes( $classes ) {
    if ( is_page() ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'rey_london_body_classes' );

/**
 * Force Classic Editor for pages using Chislehurst Pharmacy Group templates.
 */
function rey_london_disable_gutenberg_for_templates( $use_block_editor, $post ) {
    if ( empty( $post->ID ) ) {
        return $use_block_editor;
    }

    $template = get_page_template_slug( $post->ID );

    if ( $template && strpos( $template, 'page-templates/' ) === 0 ) {
        return false;
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'rey_london_disable_gutenberg_for_templates', 10, 2 );

/**
 * Theme Activation: Create default Health Hub categories and set permalink structure.
 */
function rey_london_activation() {
    $default_categories = array(
        'Weight Loss'      => 'weight-loss',
        'Travel Health'    => 'travel-health',
        'Hair Loss'        => 'hair-loss',
        'Pharmacy Advice'  => 'pharmacy-advice',
        'Vaccinations'     => 'vaccinations',
    );

    foreach ( $default_categories as $name => $slug ) {
        if ( ! term_exists( $name, 'category' ) ) {
            wp_insert_term( $name, 'category', array( 'slug' => $slug ) );
        }
    }

    update_option( 'permalink_structure', '/health-hub/%postname%/' );
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'rey_london_activation' );

/**
 * Create / update reusable blocks (Synced Patterns).
 * Updates existing blocks in-place to preserve their IDs (and all
 * post references). Only creates new blocks if they don't exist yet.
 */
function rl_register_reusable_blocks() {
    $version = 'v5';
    if ( get_option( 'rl_reusable_blocks_version' ) === $version ) {
        return;
    }

    $blocks = array(
        'CPG – Booking Banner' => '<!-- wp:html -->' . "\n" .
'<style>
.cpg-cta-banner{background:#103385;border-radius:14px;padding:2.5rem 2.75rem;display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;margin:2.5rem 0;font-family:\'Inter\',-apple-system,BlinkMacSystemFont,\'Segoe UI\',sans-serif}
.cpg-cta-banner p{font-size:1.5rem;font-weight:800;color:#fff;line-height:1.3;letter-spacing:-0.02em;max-width:420px;margin:0}
.cpg-cta-right{display:flex;flex-direction:column;gap:1rem;align-items:flex-start}
.cpg-cta-phones{display:flex;gap:1.25rem;flex-wrap:wrap}
.cpg-cta-banner a.cpg-cta-phone{display:inline-flex;align-items:center;gap:.5rem;font-size:.875rem;font-weight:600;color:rgba(255,255,255,.7);text-decoration:none;border-bottom:none;transition:color .2s ease}
.cpg-cta-banner a.cpg-cta-phone:hover{color:#fff}
.cpg-cta-banner a.cpg-cta-phone svg{flex-shrink:0;color:inherit}
.cpg-cta-banner a.cpg-cta-book{display:inline-flex;align-items:center;gap:.5rem;font-size:.9375rem;font-weight:700;color:#103385;background:#fff;text-decoration:none;border-bottom:none;padding:.75rem 1.5rem;border-radius:10px;transition:all .2s ease}
.cpg-cta-banner a.cpg-cta-book:hover{background:#e9f2f9;transform:translateY(-1px)}
.cpg-cta-banner a.cpg-cta-book svg{flex-shrink:0;color:#103385}
@media(max-width:640px){
  .cpg-cta-banner{flex-direction:column;text-align:center;padding:2rem 1.5rem}
  .cpg-cta-banner p{max-width:100%;font-size:1.25rem}
  .cpg-cta-right{align-items:center}
  .cpg-cta-phones{flex-direction:column;align-items:center;gap:.75rem}
}
</style>

<div class="cpg-cta-banner">
  <p>Ready to book? Don\'t leave it any longer.</p>
  <div class="cpg-cta-right">
    <a href="https://chislehurstpharmacygroup.kinsta.cloud/contact-page/#book-appointment" class="cpg-cta-book">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Book a Consultation
    </a>
    <div class="cpg-cta-phones">
      <a href="tel:02082950017" class="cpg-cta-phone">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      020 8295 0017
      </a>
      <a href="tel:02084673158" class="cpg-cta-phone">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      020 8467 3158
      </a>
    </div>
  </div>
</div>' . "\n" . '<!-- /wp:html -->',

        'CPG – Clinically Reviewed Card' => '<!-- wp:html -->' . "\n" .
'<style>
.cpg-review{max-width:900px;margin:2.5rem auto;background:#f0f4fa;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(16,51,133,.08);border:1px solid rgba(16,51,133,.1);font-family:\'Inter\',-apple-system,BlinkMacSystemFont,\'Segoe UI\',sans-serif;text-align:left}
.cpg-review-hdr{display:flex;align-items:center;gap:12px;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:#fff;background:linear-gradient(135deg,#103385 0%,#0f307d 50%,#5a7fc4 100%);padding:14px 40px}
.cpg-review-hdr svg{color:#fff;flex-shrink:0}
.cpg-review-cols{display:grid;grid-template-columns:1fr 1fr;gap:40px;padding:32px 40px 28px}
.cpg-review-person{display:flex;align-items:flex-start;gap:16px}
.cpg-review-avatar{width:80px;height:80px;min-width:80px;border-radius:50%;object-fit:cover;border:3px solid rgba(16,51,133,.12);flex-shrink:0;background:linear-gradient(135deg,#103385 0%,#5a7fc4 100%);color:#fff;display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:800}
img.cpg-review-avatar{background:none;font-size:0}
.cpg-review-avatar--verify{border-color:#10b981;box-shadow:0 0 0 3px rgba(16,185,129,.15)}
.cpg-review-label{display:block;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#103385;margin-bottom:4px}
.cpg-review-name{display:block;font-size:18px;font-weight:700;color:#1a1a1a;letter-spacing:-.01em}
.cpg-review-title{display:block;font-size:14px;color:#6b7280;font-weight:400;margin-bottom:8px}
.cpg-review .cpg-review-links a{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#103385;text-decoration:none;border-bottom:none;transition:color .2s;margin-right:16px}
.cpg-review .cpg-review-links a:hover{color:#5a7fc4;text-decoration:underline}
.cpg-review-ftr{display:flex;align-items:center;gap:28px;padding:20px 40px 28px;border-top:1px solid rgba(16,51,133,.08);flex-wrap:wrap}
.cpg-review-meta{display:flex;align-items:center;gap:8px;font-size:14px;color:#6b7280;font-weight:500}
.cpg-review-meta svg{color:#103385}
.cpg-review-meta--check svg{color:#10b981}
@media(max-width:640px){
  .cpg-review-cols{grid-template-columns:1fr;gap:24px;padding:24px 20px}
  .cpg-review-hdr{padding:14px 20px}
  .cpg-review-ftr{padding:16px 20px 20px;gap:16px}
  .cpg-review-avatar{width:60px;height:60px;min-width:60px}
}
</style>

<div class="cpg-review">
  <div class="cpg-review-hdr">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
    <span>Clinically Reviewed Content</span>
  </div>
  <div class="cpg-review-cols">
    <div class="cpg-review-person">
      <img src="/wp-content/uploads/sumeet-banker.jpg" alt="Sumeet Banker" class="cpg-review-avatar" />
      <div>
        <span class="cpg-review-label">Written by</span>
        <span class="cpg-review-name">Sumeet Banker</span>
        <span class="cpg-review-title">Superintendent Pharmacist</span>
      </div>
    </div>
    <div class="cpg-review-person">
      <img src="/wp-content/uploads/sumeet-banker.jpg" alt="Sumeet Banker" class="cpg-review-avatar cpg-review-avatar--verify" />
      <div>
        <span class="cpg-review-label">Reviewed &amp; fact-checked by</span>
        <span class="cpg-review-name">Sumeet Banker</span>
        <span class="cpg-review-title">Superintendent Pharmacist &middot; GPhC: 2075664</span>
        <div class="cpg-review-links">
          <a href="https://www.pharmacyregulation.org/registers/pharmacist/2075664" target="_blank" rel="noopener">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            Verify on GPhC Register
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="cpg-review-ftr">
    <span class="cpg-review-meta">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Last updated: Apr 15, 2026
    </span>
    <span class="cpg-review-meta cpg-review-meta--check">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
      Medically reviewed
    </span>
  </div>
</div>' . "\n" . '<!-- /wp:html -->',
    );

    // Upsert: update existing blocks in-place to preserve their IDs
    // (and all wp:block references in posts), or create if missing.
    foreach ( $blocks as $title => $content ) {
        $existing = get_posts( array(
            'post_type'   => 'wp_block',
            'post_status' => 'any',
            'title'       => $title,
            'numberposts' => 1,
        ) );

        if ( ! empty( $existing ) ) {
            wp_update_post( array(
                'ID'           => $existing[0]->ID,
                'post_content' => $content,
                'post_status'  => 'publish',
            ) );
        } else {
            wp_insert_post( array(
                'post_type'    => 'wp_block',
                'post_title'   => $title,
                'post_content' => $content,
                'post_status'  => 'publish',
            ) );
        }
    }

    update_option( 'rl_reusable_blocks_version', $version );
}
add_action( 'init', 'rl_register_reusable_blocks' );

/**
 * Register block patterns for blog post components.
 * Patterns are templates — each insertion creates an independent,
 * editable copy so the content can be customised per instance.
 */
function rl_register_block_patterns() {
    register_block_pattern_category( 'cpg', array(
        'label' => __( 'Chislehurst Pharmacy', 'rey-london' ),
    ) );

    register_block_pattern( 'cpg/key-point', array(
        'title'       => __( 'CPG – Key Point', 'rey-london' ),
        'description' => __( 'Highlighted key-point card with bullet list.', 'rey-london' ),
        'categories'  => array( 'cpg' ),
        'content'     => '<!-- wp:html -->' . "\n" .
'<div class="bp-key-point">
  <div class="bp-key-point-header">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
    Key Point
  </div>
  <div class="bp-key-point-body">
    <ul>
      <li>Same-day and next-day appointments.</li>
      <li>Medication prescribed at the same appointment.</li>
      <li>Personalised risk assessment based on your exact itinerary, accommodation and activities.</li>
    </ul>
  </div>
</div>' . "\n" . '<!-- /wp:html -->',
    ) );
}
add_action( 'init', 'rl_register_block_patterns' );

/**
 * Ensure permalink structure stays set.
 */
function rey_london_ensure_permalinks() {
    $desired = '/health-hub/%postname%/';

    if ( get_option( 'permalink_structure' ) !== $desired ) {
        update_option( 'permalink_structure', $desired );
        flush_rewrite_rules();
        return;
    }

    if ( false === get_transient( 'rl_rewrite_rules_ok' ) ) {
        $rules = get_option( 'rewrite_rules' );
        if ( empty( $rules ) ) {
            flush_rewrite_rules();
        }
        set_transient( 'rl_rewrite_rules_ok', 1, HOUR_IN_SECONDS );
    }
}
add_action( 'init', 'rey_london_ensure_permalinks' );

// =============================================================================
// BLOG POST — AUTO TABLE OF CONTENTS (priority 8, runs before closer)
// =============================================================================
function rl_add_toc( $content ) {
    if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }

    $show = function_exists( 'get_field' ) ? get_field( 'show_table_of_contents' ) : true;
    if ( $show === false || $show === '0' || $show === 0 ) {
        return $content;
    }

    preg_match_all( '/<(h[23])(.*?)>(.*?)<\/\1>/si', $content, $matches, PREG_SET_ORDER );
    if ( count( $matches ) < 2 ) {
        return $content;
    }

    $toc_items = array();
    $used_ids  = array();

    foreach ( $matches as $m ) {
        $tag   = $m[1];
        $attrs = $m[2];
        $text  = wp_strip_all_tags( $m[3] );
        $slug  = sanitize_title( $text );

        if ( in_array( $slug, $used_ids, true ) ) {
            $slug .= '-' . count( $used_ids );
        }
        $used_ids[] = $slug;

        if ( ! preg_match( '/id\s*=/i', $attrs ) ) {
            $new_tag = '<' . $tag . $attrs . ' id="' . esc_attr( $slug ) . '">' . $m[3] . '</' . $tag . '>';
            $content = str_replace( $m[0], $new_tag, $content );
        }

        $toc_items[] = array( 'tag' => $tag, 'slug' => $slug, 'text' => $text );
    }

    $toc  = '<nav class="bp-toc" aria-label="Table of Contents">';
    $toc .= '<button class="bp-toc-toggle" aria-expanded="true">';
    $toc .= '<svg class="bp-toc-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>';
    $toc .= '<span class="bp-toc-label">In This Article</span>';
    $toc .= '<span class="bp-toc-chevron"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg></span>';
    $toc .= '</button>';
    $toc .= '<ol class="bp-toc-list">';
    foreach ( $toc_items as $item ) {
        $sub = $item['tag'] === 'h3' ? ' class="bp-toc-sub"' : '';
        $toc .= '<li' . $sub . '><a href="#' . esc_attr( $item['slug'] ) . '">' . esc_html( $item['text'] ) . '</a></li>';
    }
    $toc .= '</ol></nav>';

    return $toc . $content;
}
add_filter( 'the_content', 'rl_add_toc', 8 );

// =============================================================================
// BLOG POST — CONSULTATION CLOSER CARD (priority 12, runs after TOC)
// =============================================================================
function rl_add_consultation_closer( $content ) {
    if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }

    $pharmacist = rl_option( 'superintendent_pharmacist', 'Sumeet Banker' );
    $gphc       = rl_option( 'superintendent_gphc_number', '2075664' );

    // Avatar: post override → global option → initials
    $rev_id  = function_exists( 'get_field' ) ? get_field( 'reviewer_photo' ) : '';
    $avatar  = '';
    if ( $rev_id ) {
        $url    = wp_get_attachment_image_url( $rev_id, 'thumbnail' );
        $avatar = '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $pharmacist ) . '" class="bp-closer-avatar" />';
    } else {
        $global = rl_option( 'pharmacist_image', '' );
        if ( $global ) {
            $url    = is_numeric( $global ) ? wp_get_attachment_image_url( $global, 'thumbnail' ) : $global;
            $avatar = '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $pharmacist ) . '" class="bp-closer-avatar" />';
        } else {
            $first    = explode( ' ', $pharmacist )[0];
            $initials = strtoupper( substr( $first, 0, 1 ) . substr( strrchr( $pharmacist, ' ' ), 1, 1 ) );
            $avatar   = '<div class="bp-closer-avatar">' . esc_html( $initials ) . '</div>';
        }
    }

    // Phone icon SVG
    $phone_svg = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
    $arrow_svg = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>';
    $shield_svg = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';
    $tick_svg = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>';

    // Build closer card
    $h  = '<div class="bp-closer-card">';

    // Header bar
    $h .= '<div class="bp-closer-header">';
    $h .= '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
    $h .= '<span>Your Next Step</span>';
    $h .= '</div>';

    // Body: pharmacist left, CTA right
    $h .= '<div class="bp-closer-body">';

    // Pharmacist column
    $h .= '<div class="bp-closer-pharmacist">';
    $h .= $avatar;
    $h .= '<div class="bp-closer-pharmacist-info">';
    $h .= '<span class="bp-closer-preamble">Your Clinical Team</span>';
    $h .= '<span class="bp-closer-name">' . esc_html( $pharmacist ) . '</span>';
    $h .= '<span class="bp-closer-role">Superintendent Pharmacist</span>';
    if ( $gphc ) {
        $h .= '<span class="bp-closer-gphc">' . $shield_svg . ' GPhC: ' . esc_html( $gphc ) . '</span>';
    }
    $h .= '</div></div>';

    // CTA column
    $h .= '<div class="bp-closer-action">';
    $h .= '<p class="bp-closer-action-title">Ready to take the next step?</p>';
    $h .= '<p class="bp-closer-action-desc">Book your consultation at either Chislehurst Pharmacy Group location. Same-day and next-day appointments usually available.</p>';
    $h .= '<div class="bp-closer-buttons">';
    $h .= '<a href="https://chislehurstpharmacygroup.kinsta.cloud/contact-page/#book-appointment" class="bp-closer-book">Book a Consultation ' . $arrow_svg . '</a>';
    $h .= '</div></div>';

    $h .= '</div>'; // close body

    // Trust row inside card
    $h .= '<div class="bp-closer-trust">';
    $h .= '<span class="bp-closer-trust-item">' . $tick_svg . ' Same-Day Appointments</span>';
    $h .= '<span class="bp-closer-trust-item">' . $tick_svg . ' No GP Referral Needed</span>';
    $h .= '<span class="bp-closer-trust-item">' . $tick_svg . ' Two Chislehurst Locations</span>';
    $h .= '</div>';

    $h .= '</div>'; // close card

    // Compliance pills below card
    $h .= '<div class="bp-closer-compliance">';
    $h .= '<span class="bp-closer-compliance-pill">' . $shield_svg . ' GPhC Registered Pharmacy</span>';
    $h .= '<span class="bp-closer-compliance-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 1v4m0 14v4m-7.78-2.22l2.83-2.83m9.9-9.9l2.83-2.83M1 12h4m14 0h4M4.22 4.22l2.83 2.83m9.9 9.9l2.83 2.83"/></svg> Prescription-Only Medicine</span>';
    $h .= '<span class="bp-closer-compliance-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> Clinical Criteria Apply</span>';
    $h .= '</div>';

    // Next article card
    $next_post = get_next_post();
    if ( ! $next_post ) {
        $next_post = get_previous_post();
    }
    if ( $next_post ) {
        $next_cats = get_the_category( $next_post->ID );
        $next_cat  = ! empty( $next_cats ) ? esc_html( $next_cats[0]->name ) : '';

        $next_word_count = str_word_count( wp_strip_all_tags( $next_post->post_content ) );
        $next_read_time  = max( 1, ceil( $next_word_count / 250 ) );

        $clock_svg = '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>';

        $h .= '<a href="' . esc_url( get_permalink( $next_post ) ) . '" class="bp-next-article-card">';
        $h .= '<span class="bp-next-article-label">Up Next ' . $arrow_svg . '</span>';
        $h .= '<span class="bp-next-article-title">' . esc_html( get_the_title( $next_post ) ) . '</span>';
        $h .= '<span class="bp-next-article-meta">';
        if ( $next_cat ) {
            $h .= '<span class="bp-next-article-category">' . $next_cat . '</span>';
        }
        $h .= '<span class="bp-next-article-readtime">' . $clock_svg . ' ' . $next_read_time . ' min read</span>';
        $h .= '</span>';
        $h .= '</a>';
    }

    return $content . $h;
}
add_filter( 'the_content', 'rl_add_consultation_closer', 12 );

/**
 * Localise AJAX URL + nonces for forms
 */
function rl_localise_ajax() {
    wp_localize_script( 'rey-london-newsletter-js', 'rlAjax', array(
        'url'              => admin_url( 'admin-ajax.php' ),
        'contactNonce'    => wp_create_nonce( 'rl_contact_nonce' ),
        'newsletterNonce' => wp_create_nonce( 'rl_newsletter_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'rl_localise_ajax', 20 );

/**
 * Contact form AJAX handler
 */
function rl_handle_contact_form() {
    check_ajax_referer( 'rl_contact_nonce', 'nonce' );

    // Honeypot check
    if ( ! empty( $_POST['rl_hp'] ) ) {
        wp_send_json_success();
    }

    $name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( empty( $name ) || ! is_email( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    $to      = 'support@chislehurstpharmacygroup.co.uk';
    $subject_line = 'New enquiry via website' . ( $subject ? ' — ' . ucfirst( str_replace( '-', ' ', $subject ) ) : '' );
    $body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nSubject: {$subject}\n\nMessage:\n{$message}";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    );

    $sent = wp_mail( $to, $subject_line, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Message sent.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Could not send message. Please try calling us directly.' ) );
    }
}
add_action( 'wp_ajax_nopriv_rl_contact_form', 'rl_handle_contact_form' );
add_action( 'wp_ajax_rl_contact_form', 'rl_handle_contact_form' );

/**
 * Newsletter signup AJAX handler — adds contact to Brevo list
 */
function rl_handle_newsletter_signup() {
    check_ajax_referer( 'rl_newsletter_nonce', 'nonce' );

    // Honeypot check
    if ( ! empty( $_POST['rl_hp'] ) ) {
        wp_send_json_success();
    }

    $email = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    $api_key = defined( 'BREVO_API_KEY' ) ? BREVO_API_KEY : '';

    if ( empty( $api_key ) ) {
        wp_send_json_error( array( 'message' => 'Newsletter service not configured.' ) );
    }

    $response = wp_remote_post( 'https://api.brevo.com/v3/contacts', array(
        'headers' => array(
            'accept'       => 'application/json',
            'content-type' => 'application/json',
            'api-key'      => $api_key,
        ),
        'body'    => wp_json_encode( array(
            'email'            => $email,
            'updateEnabled'    => true,
            'listIds'          => array( 2 ),
        ) ),
        'timeout' => 15,
    ) );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( array( 'message' => 'Could not connect to newsletter service.' ) );
    }

    $code = wp_remote_retrieve_response_code( $response );

    if ( $code === 201 || $code === 204 ) {
        wp_send_json_success( array( 'message' => 'Subscribed!' ) );
    } else {
        $body = json_decode( wp_remote_retrieve_body( $response ), true );
        $msg  = $body['message'] ?? 'Subscription failed. Please try again.';
        wp_send_json_error( array( 'message' => $msg ) );
    }
}
add_action( 'wp_ajax_nopriv_rl_newsletter_signup', 'rl_handle_newsletter_signup' );
add_action( 'wp_ajax_rl_newsletter_signup', 'rl_handle_newsletter_signup' );
