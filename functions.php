<?php
/**
 * Rey London Theme Functions
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
}
add_action( 'after_setup_theme', 'rey_london_setup' );

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

    if ( is_page_template( 'page-templates/page-contact.php' ) ) {
        wp_enqueue_style( 'rey-london-contact', REY_LONDON_URI . '/assets/css/contact.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-contact-js', REY_LONDON_URI . '/assets/js/contact.js', array(), REY_LONDON_VERSION, true );
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

    if ( is_page_template( 'page-templates/page-hpv.php' ) ) {
        wp_enqueue_style( 'rey-london-hpv', REY_LONDON_URI . '/assets/css/hpv-vaccine-london.css', array( 'rey-london-globals' ), REY_LONDON_VERSION );
        wp_enqueue_script( 'rey-london-hpv-js', REY_LONDON_URI . '/assets/js/hpv.js', array(), REY_LONDON_VERSION, true );
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
    return rl_option( 'pharmacy_name', 'Rey London' );
}

/**
 * Helper: Get pharmacy phone
 */
function rl_phone() {
    return rl_option( 'pharmacy_phone', '020 8467 3158' );
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
    $page = rl_option( 'booking_page' );
    if ( $page ) {
        return get_permalink( $page );
    }
    return home_url( '/book-appointment/' );
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
 * Force Classic Editor for pages using Rey London templates.
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
