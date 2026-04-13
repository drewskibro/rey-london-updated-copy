<?php
/**
 * ACF Field Group Definitions
 *
 * Registers all ACF field groups for the Rey London theme.
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

// =============================================================================
// HOMEPAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_homepage',
    'title'    => 'Homepage Sections',
    'fields'   => array(

        // ── HERO SECTION ──
        array(
            'key'   => 'field_rl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hero_title_line1',
            'label'         => 'Hero Title Line 1',
            'name'          => 'hero_title_line1',
            'type'          => 'text',
            'default_value' => 'Healthcare that puts',
        ),
        array(
            'key'           => 'field_rl_hero_title_line2',
            'label'         => 'Hero Title Line 2 (Gradient)',
            'name'          => 'hero_title_line2',
            'type'          => 'text',
            'default_value' => 'you first',
        ),
        array(
            'key'           => 'field_rl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Expert prescriptions, travel health, and weight management across South East London. Two Chislehurst locations ready to help.',
        ),
        array(
            'key'          => 'field_rl_hero_services',
            'label'        => 'Service Cards',
            'name'         => 'hero_services',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Service Card',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hero_service_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_hero_service_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_hero_service_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── DESTINATIONS SECTION ──
        array(
            'key'   => 'field_rl_destinations_tab',
            'label' => 'Destinations',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_destinations_title',
            'label'         => 'Section Title',
            'name'          => 'destinations_title',
            'type'          => 'text',
            'default_value' => 'Search Vaccines by Destination',
        ),
        array(
            'key'           => 'field_rl_destinations_desc',
            'label'         => 'Description',
            'name'          => 'destinations_description',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'At Rey London, we provide expert travel health services across South East London. Find the vaccines you need for your next adventure.',
        ),
        array(
            'key'          => 'field_rl_destinations_stats',
            'label'        => 'Stats',
            'name'         => 'destinations_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_dest_stat_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_dest_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),
        array(
            'key'          => 'field_rl_destinations_cards',
            'label'        => 'Destination Cards',
            'name'         => 'destinations_cards',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Destination',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_dest_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_dest_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_dest_vaccines',
                    'label' => 'Vaccines Text',
                    'name'  => 'vaccines_text',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_dest_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── LOCATIONS SECTION ──
        array(
            'key'   => 'field_rl_locations_tab',
            'label' => 'Locations',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_locations',
            'label'        => 'Locations',
            'name'         => 'locations',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Location',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_loc_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_loc_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_loc_address',
                    'label' => 'Address',
                    'name'  => 'address',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_phone',
                    'label' => 'Phone',
                    'name'  => 'phone',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_hours',
                    'label' => 'Opening Hours',
                    'name'  => 'hours',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_directions_url',
                    'label' => 'Directions URL',
                    'name'  => 'directions_url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── SERVICES SECTION ──
        array(
            'key'   => 'field_rl_services_tab',
            'label' => 'Services',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_services_title',
            'label'         => 'Section Title',
            'name'          => 'services_title',
            'type'          => 'text',
            'default_value' => 'Comprehensive healthcare services for you',
        ),
        array(
            'key'          => 'field_rl_services_cards',
            'label'        => 'Service Benefit Cards',
            'name'         => 'services_cards',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Service',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_svc_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_svc_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
                array(
                    'key'           => 'field_rl_svc_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_svc_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── TESTIMONIALS SECTION ──
        array(
            'key'   => 'field_rl_testimonials_tab',
            'label' => 'Testimonials',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_testimonials_title',
            'label'         => 'Section Title',
            'name'          => 'testimonials_title',
            'type'          => 'text',
            'default_value' => 'What Our Patients Say',
        ),
        array(
            'key'          => 'field_rl_testimonials',
            'label'        => 'Testimonials',
            'name'         => 'testimonials',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Testimonial',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_test_quote',
                    'label' => 'Quote',
                    'name'  => 'quote',
                    'type'  => 'textarea',
                    'rows'  => 4,
                ),
                array(
                    'key'   => 'field_rl_test_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_test_initials',
                    'label' => 'Initials',
                    'name'  => 'initials',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_test_location',
                    'label' => 'Branch/Location',
                    'name'  => 'location',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_test_stars',
                    'label'         => 'Star Rating (1-5)',
                    'name'          => 'stars',
                    'type'          => 'number',
                    'default_value' => 5,
                    'min'           => 1,
                    'max'           => 5,
                ),
            ),
        ),
        array(
            'key'          => 'field_rl_trust_stats',
            'label'        => 'Trust Stats',
            'name'         => 'trust_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Trust Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_trust_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_trust_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),

        // ── HOW IT WORKS SECTION ──
        array(
            'key'   => 'field_rl_hiw_tab',
            'label' => 'How It Works',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hiw_title',
            'label'         => 'Section Title',
            'name'          => 'hiw_title',
            'type'          => 'text',
            'default_value' => 'How it works',
        ),
        array(
            'key'           => 'field_rl_hiw_subtitle',
            'label'         => 'Subtitle',
            'name'          => 'hiw_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Getting started with Rey London is simple',
        ),
        array(
            'key'          => 'field_rl_hiw_steps',
            'label'        => 'Steps',
            'name'         => 'hiw_steps',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Step',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hiw_step_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hiw_step_desc',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
            ),
        ),

        // ── TEAM SECTION ──
        array(
            'key'   => 'field_rl_team_tab',
            'label' => 'Team',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_pharmacist_name',
            'label'         => 'Lead Pharmacist Name',
            'name'          => 'pharmacist_name',
            'type'          => 'text',
            'default_value' => 'Sumeet Banker',
        ),
        array(
            'key'           => 'field_rl_pharmacist_title',
            'label'         => 'Pharmacist Title',
            'name'          => 'pharmacist_title',
            'type'          => 'text',
            'default_value' => 'Superintendent Pharmacist & Owner',
        ),
        array(
            'key'           => 'field_rl_pharmacist_bio',
            'label'         => 'Pharmacist Bio',
            'name'          => 'pharmacist_bio',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'With over 15 years of experience, Sumeet leads our team in providing exceptional pharmaceutical care to the South East London community.',
        ),
        array(
            'key'           => 'field_rl_pharmacist_image',
            'label'         => 'Pharmacist Photo',
            'name'          => 'pharmacist_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        array(
            'key'          => 'field_rl_team_stats',
            'label'        => 'Team Stats',
            'name'         => 'team_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_team_stat_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_team_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),

        // ── PRODUCTS SECTION ──
        array(
            'key'   => 'field_rl_products_tab',
            'label' => 'Products',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_products_title',
            'label'         => 'Section Title',
            'name'          => 'products_title',
            'type'          => 'text',
            'default_value' => 'Featured Products & Treatments',
        ),
        array(
            'key'          => 'field_rl_products',
            'label'        => 'Products',
            'name'         => 'products',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Product',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_prod_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_prod_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                ),
                array(
                    'key'           => 'field_rl_prod_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_prod_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_prod_badge',
                    'label' => 'Badge Text',
                    'name'  => 'badge',
                    'type'  => 'text',
                    'instructions' => 'e.g. "Most Popular", "New"',
                ),
                array(
                    'key'   => 'field_rl_prod_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── FOOTER CTA SECTION ──
        array(
            'key'   => 'field_rl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to take control of your health?',
        ),
        array(
            'key'           => 'field_rl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Book a consultation with our expert pharmacists today',
        ),
        array(
            'key'           => 'field_rl_cta_button_text',
            'label'         => 'Button Text',
            'name'          => 'cta_button_text',
            'type'          => 'text',
            'default_value' => 'Book Consultation',
        ),
        array(
            'key'   => 'field_rl_cta_button_url',
            'label' => 'Button URL',
            'name'  => 'cta_button_url',
            'type'  => 'url',
        ),

        // ── PHARMACIST STATS ──
        array( 'key' => 'field_rl_hp_team_stats_tab', 'label' => 'Pharmacist Stats', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hp_team_stat1_num', 'label' => 'Stat 1 — Number', 'name' => 'hp_team_stat1_number', 'type' => 'text', 'default_value' => '15+' ),
        array( 'key' => 'field_rl_hp_team_stat1_lbl', 'label' => 'Stat 1 — Label', 'name' => 'hp_team_stat1_label', 'type' => 'text', 'default_value' => 'Years Serving London' ),
        array( 'key' => 'field_rl_hp_team_stat2_num', 'label' => 'Stat 2 — Number', 'name' => 'hp_team_stat2_number', 'type' => 'text', 'default_value' => '2' ),
        array( 'key' => 'field_rl_hp_team_stat2_lbl', 'label' => 'Stat 2 — Label', 'name' => 'hp_team_stat2_label', 'type' => 'text', 'default_value' => 'Chislehurst Locations' ),
        array( 'key' => 'field_rl_hp_team_stat3_num', 'label' => 'Stat 3 — Number', 'name' => 'hp_team_stat3_number', 'type' => 'text', 'default_value' => '10,000+' ),
        array( 'key' => 'field_rl_hp_team_stat3_lbl', 'label' => 'Stat 3 — Label', 'name' => 'hp_team_stat3_label', 'type' => 'text', 'default_value' => 'Patients Served' ),
        array( 'key' => 'field_rl_hp_team_stat4_num', 'label' => 'Stat 4 — Number', 'name' => 'hp_team_stat4_number', 'type' => 'text', 'default_value' => 'Same Day' ),
        array( 'key' => 'field_rl_hp_team_stat4_lbl', 'label' => 'Stat 4 — Label', 'name' => 'hp_team_stat4_label', 'type' => 'text', 'default_value' => 'Appointments Available' ),

        // ── HEALTH HUB ARTICLES ──
        array( 'key' => 'field_rl_hp_hub_tab', 'label' => 'Health Hub Articles', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hp_hub_articles', 'label' => 'Featured Articles', 'name' => 'hp_hub_articles', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Article',
            'instructions' => 'Add 3 featured Health Hub article cards for the homepage. Each card links to the full article.',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hp_hub_art_image', 'label' => 'Card Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Landscape, approx 800x500px.' ),
                array( 'key' => 'field_rl_hp_hub_art_badge', 'label' => 'Category Badge', 'name' => 'badge', 'type' => 'text', 'instructions' => 'e.g. "Weight Loss", "Travel Health", "Seasonal Health"' ),
                array( 'key' => 'field_rl_hp_hub_art_title', 'label' => 'Article Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hp_hub_art_desc', 'label' => 'Short Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_hp_hub_art_url', 'label' => 'Article URL', 'name' => 'url', 'type' => 'url', 'instructions' => 'Full URL to the article page. Defaults to /health-hub/ if left blank.' ),
            ),
        ),

        // ── HOW IT WORKS ──
        array( 'key' => 'field_rl_hp_hiw_tab', 'label' => 'How It Works', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hp_hiw_title', 'label' => 'Section Title', 'name' => 'hp_hiw_title', 'type' => 'text', 'default_value' => 'How to use our services' ),
        array( 'key' => 'field_rl_hp_hiw_subtitle', 'label' => 'Section Subtitle', 'name' => 'hp_hiw_subtitle', 'type' => 'text', 'default_value' => 'Getting the care you need is simple' ),
        array(
            'key' => 'field_rl_hp_hiw_steps', 'label' => 'Step Cards', 'name' => 'hp_hiw_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'instructions' => 'Add 3 cards. The step label auto-defaults to "Step 1 / Step 2 / Step 3" if left blank. All fields support ACF — drop in images and copy once finalised.',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hp_hiw_step_image', 'label' => 'Card Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Recommended: 800×440px or similar landscape. Displays at 220px height with object-fit cover.' ),
                array( 'key' => 'field_rl_hp_hiw_step_label', 'label' => 'Step Label', 'name' => 'label', 'type' => 'text', 'instructions' => 'e.g. "Step 1". Leave blank to auto-generate from row number.' ),
                array( 'key' => 'field_rl_hp_hiw_step_title', 'label' => 'Heading', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hp_hiw_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-home.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );

// =============================================================================
// WEIGHT LOSS PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_weight_loss',
    'title'    => 'Weight Loss Page',
    'fields'   => array(

        // ── HERO ──
        array(
            'key'   => 'field_rl_wl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_hero_badge',
            'label'         => 'Hero Badge Text',
            'name'          => 'wl_hero_badge',
            'type'          => 'text',
            'default_value' => 'Medical Weight Loss · London',
        ),
        array(
            'key'           => 'field_rl_wl_hero_title',
            'label'         => 'Hero Title',
            'name'          => 'wl_hero_title',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Lose 10–20% of your body weight in 12 months — with prescription support at your local London pharmacy',
        ),
        array(
            'key'           => 'field_rl_wl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'wl_hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Mounjaro and Wegovy prescriptions from our South East London pharmacists. No GP referral. No long waits. Expert face-to-face care at Chislehurst and Pond End — from people who know your name.',
        ),
        array(
            'key'           => 'field_rl_wl_hero_image_main',
            'label'         => 'Hero Main Image',
            'name'          => 'wl_hero_image_main',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        array(
            'key'           => 'field_rl_wl_hero_image_secondary',
            'label'         => 'Hero Secondary Image',
            'name'          => 'wl_hero_image_secondary',
            'type'          => 'image',
            'return_format' => 'url',
        ),

        // ── TREATMENTS / PRODUCTS ──
        array(
            'key'   => 'field_rl_wl_treatments_tab',
            'label' => 'Treatments',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_treatments',
            'label'        => 'Treatment Cards',
            'name'         => 'wl_treatments',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Treatment',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_treat_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                ),
                array(
                    'key'           => 'field_rl_wl_treat_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_badge',
                    'label' => 'Badge',
                    'name'  => 'badge',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── JOURNEY STEPS ──
        array(
            'key'   => 'field_rl_wl_journey_tab',
            'label' => 'Journey Steps',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_journey_title',
            'label'         => 'Section Title',
            'name'          => 'wl_journey_title',
            'type'          => 'text',
            'default_value' => 'Your weight loss journey at Chislehurst Pharmacy Group',
        ),
        array(
            'key'           => 'field_rl_wl_journey_subtitle',
            'label'         => 'Section Subtitle',
            'name'          => 'wl_journey_subtitle',
            'type'          => 'text',
            'default_value' => 'Four clear steps from your first conversation to your goal weight',
        ),
        array(
            'key'          => 'field_rl_wl_journey_steps',
            'label'        => 'Steps',
            'name'         => 'wl_journey_steps',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Step',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_rl_wl_step_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_wl_step_image_alt',
                    'label' => 'Image Alt Text',
                    'name'  => 'image_alt',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_step_label',
                    'label' => 'Step Label',
                    'name'  => 'label',
                    'type'  => 'text',
                    'instructions' => 'e.g. "Step 1"',
                ),
                array(
                    'key'   => 'field_rl_wl_step_heading',
                    'label' => 'Heading',
                    'name'  => 'heading',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_step_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 4,
                ),
            ),
        ),

        // ── WHY CHOOSE US ──
        array(
            'key'   => 'field_rl_wl_why_tab',
            'label' => 'Why Choose Us',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_why_title',
            'label'         => 'Section Title (line 1)',
            'name'          => 'wl_why_title',
            'type'          => 'text',
            'default_value' => 'Why choose Chislehurst Pharmacy Group for',
        ),
        array(
            'key'           => 'field_rl_wl_why_title_highlight',
            'label'         => 'Section Title (highlighted line)',
            'name'          => 'wl_why_title_highlight',
            'type'          => 'text',
            'default_value' => 'medical weight loss?',
        ),
        array(
            'key'           => 'field_rl_wl_why_subtitle',
            'label'         => 'Section Subtitle',
            'name'          => 'wl_why_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => "We're not an online chatbot or a faceless app. We're your local pharmacist — the difference is enormous.",
        ),
        array(
            'key'           => 'field_rl_wl_why_pharmacist_image',
            'label'         => 'Pharmacist Photo',
            'name'          => 'wl_why_pharmacist_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        array(
            'key'           => 'field_rl_wl_why_pharmacist_name',
            'label'         => 'Pharmacist Name',
            'name'          => 'wl_why_pharmacist_name',
            'type'          => 'text',
            'default_value' => 'Sumeet Banker',
        ),
        array(
            'key'           => 'field_rl_wl_why_pharmacist_role',
            'label'         => 'Pharmacist Title / Role',
            'name'          => 'wl_why_pharmacist_role',
            'type'          => 'text',
            'default_value' => 'Superintendent Pharmacist & Independent Prescriber',
        ),
        array(
            'key'           => 'field_rl_wl_why_pharmacist_badge',
            'label'         => 'Pharmacist Badge',
            'name'          => 'wl_why_pharmacist_badge',
            'type'          => 'text',
            'default_value' => 'GPhC Registered',
        ),
        array(
            'key'           => 'field_rl_wl_why_pharmacist_bio',
            'label'         => 'Pharmacist Quote / Bio',
            'name'          => 'wl_why_pharmacist_bio',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => '"Weight is complex — it\'s hormonal, emotional, and behavioural. That\'s why I believe everyone deserves face-to-face care from someone who actually listens. Not an algorithm."',
        ),
        array(
            'key'          => 'field_rl_wl_why_stats',
            'label'        => 'Stats Cards',
            'name'         => 'wl_why_stats',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_why_stat_number',
                    'label' => 'Number / Value',
                    'name'  => 'number',
                    'type'  => 'text',
                    'instructions' => 'e.g. "No GP", "15+", "2", "10K+"',
                ),
                array(
                    'key'   => 'field_rl_wl_why_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),
        array(
            'key'          => 'field_rl_wl_why_pillars',
            'label'        => 'Feature Pillars',
            'name'         => 'wl_why_pillars',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Pillar',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_why_pillar_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_why_pillar_desc',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'text',
                ),
            ),
        ),

        // ── BENEFITS / OUTCOMES ──
        array(
            'key'   => 'field_rl_wl_benefits_tab',
            'label' => 'Benefits / Outcomes',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_benefits',
            'label'        => 'Benefit Cards',
            'name'         => 'wl_benefits',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Benefit',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_benefit_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_benefit_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                ),
                array(
                    'key'           => 'field_rl_wl_benefit_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
            ),
        ),

        // ── TESTIMONIALS ──
        array(
            'key'   => 'field_rl_wl_testimonials_tab',
            'label' => 'Testimonials',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_testimonials',
            'label'        => 'Testimonials',
            'name'         => 'wl_testimonials',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Testimonial',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_test_quote',
                    'label' => 'Quote',
                    'name'  => 'quote',
                    'type'  => 'textarea',
                    'rows'  => 4,
                ),
                array(
                    'key'   => 'field_rl_wl_test_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_test_initials',
                    'label' => 'Initials',
                    'name'  => 'initials',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_test_detail',
                    'label' => 'Detail (e.g. "Lost 18kg in 4 months")',
                    'name'  => 'detail',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_wl_test_stars',
                    'label'         => 'Star Rating',
                    'name'          => 'stars',
                    'type'          => 'number',
                    'default_value' => 5,
                    'min'           => 1,
                    'max'           => 5,
                ),
            ),
        ),

        // ── COMPLIANCE DISCLAIMER ──
        array(
            'key'   => 'field_rl_wl_disclaimer_tab',
            'label' => 'Compliance Disclaimer',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_disclaimer_text',
            'label'         => 'Full Disclaimer Text',
            'name'          => 'wl_disclaimer_text',
            'type'          => 'textarea',
            'rows'          => 6,
            'instructions'  => 'Full compliance disclaimer shown in the "Important Information" block directly before the FAQ section. Keep this compliant with current MHRA, ASA CAP Code and GPhC guidance.',
            'default_value' => 'Results cited are based on average outcomes from the SURMOUNT-1 clinical trial (tirzepatide 15mg, 72-week data). Individual results will vary. Weight loss depends on adherence to treatment, dietary changes, physical activity and individual metabolic factors. These figures are provided for informational purposes only and do not constitute medical advice. A full clinical assessment with a qualified healthcare professional is required before starting any weight loss treatment.',
        ),

        // ── FAQ ──
        array(
            'key'   => 'field_rl_wl_faq_tab',
            'label' => 'FAQs',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_faqs',
            'label'        => 'FAQs',
            'name'         => 'wl_faqs',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add FAQ',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_faq_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_faq_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // ── CTA ──
        array(
            'key'   => 'field_rl_wl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'wl_cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to start your weight loss journey?',
        ),
        array(
            'key'           => 'field_rl_wl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'wl_cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
        ),
        array(
            'key'           => 'field_rl_wl_cta_button_text',
            'label'         => 'CTA Button Text',
            'name'          => 'wl_cta_button_text',
            'type'          => 'text',
            'default_value' => 'Book Free Consultation',
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-weight-loss.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );

// =============================================================================
// HAIR LOSS PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hair_loss',
    'title'    => 'Hair Loss Page',
    'fields'   => array(

        // ── HERO ──
        array(
            'key'   => 'field_rl_hl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hl_hero_title',
            'label'         => 'Hero Title',
            'name'          => 'hl_hero_title',
            'type'          => 'text',
            'default_value' => 'Hair Loss Treatment in South East London',
        ),
        array(
            'key'           => 'field_rl_hl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'hl_hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Regain your confidence with clinically proven treatments. Private consultations, prescription finasteride, minoxidil, and expert pharmacist support to stop hair loss and stimulate regrowth — at both Chislehurst locations.',
        ),
        array(
            'key'           => 'field_rl_hl_hero_image',
            'label'         => 'Hero Image',
            'name'          => 'hl_hero_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),

        // ── TREATMENTS ──
        array(
            'key'   => 'field_rl_hl_treatments_tab',
            'label' => 'Treatments',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_treatments',
            'label'        => 'Treatment Options',
            'name'         => 'hl_treatments',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Treatment',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_treat_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_treat_type',
                    'label' => 'Type (e.g. Oral Tablet, Topical)',
                    'name'  => 'type',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_treat_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
                array(
                    'key'   => 'field_rl_hl_treat_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'          => 'field_rl_hl_treat_features',
                    'label'        => 'Key Features',
                    'name'         => 'features',
                    'type'         => 'repeater',
                    'layout'       => 'table',
                    'button_label' => 'Add Feature',
                    'sub_fields'   => array(
                        array(
                            'key'   => 'field_rl_hl_treat_feature_text',
                            'label' => 'Feature',
                            'name'  => 'text',
                            'type'  => 'text',
                        ),
                    ),
                ),
            ),
        ),

        // ── PRICING ──
        array(
            'key'   => 'field_rl_hl_pricing_tab',
            'label' => 'Pricing',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_pricing',
            'label'        => 'Pricing Cards',
            'name'         => 'hl_pricing',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Pricing Card',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_price_name',
                    'label' => 'Treatment Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_price_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_price_period',
                    'label' => 'Period (e.g. per month)',
                    'name'  => 'period',
                    'type'  => 'text',
                ),
                array(
                    'key'          => 'field_rl_hl_price_includes',
                    'label'        => 'Includes',
                    'name'         => 'includes',
                    'type'         => 'repeater',
                    'layout'       => 'table',
                    'button_label' => 'Add Item',
                    'sub_fields'   => array(
                        array(
                            'key'   => 'field_rl_hl_price_include_text',
                            'label' => 'Item',
                            'name'  => 'text',
                            'type'  => 'text',
                        ),
                    ),
                ),
            ),
        ),

        // ── FAQ ──
        array(
            'key'   => 'field_rl_hl_faq_tab',
            'label' => 'FAQs',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_faqs',
            'label'        => 'FAQs',
            'name'         => 'hl_faqs',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add FAQ',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_faq_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_faq_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // ── QUICK PRICE FIELDS ──
        array( 'key' => 'field_rl_hl_qprice_tab', 'label' => 'Quick Prices', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hl_price_finasteride', 'label' => 'Finasteride Price', 'name' => 'hl_price_finasteride', 'type' => 'text', 'default_value' => 'From £25', 'instructions' => 'Shown on the Finasteride pricing card. Include "From" if applicable.' ),
        array( 'key' => 'field_rl_hl_price_minoxidil', 'label' => 'Minoxidil Price', 'name' => 'hl_price_minoxidil', 'type' => 'text', 'default_value' => 'From £25' ),
        array( 'key' => 'field_rl_hl_price_combo', 'label' => 'Combination Package Text', 'name' => 'hl_price_combo', 'type' => 'text', 'default_value' => 'Save more', 'instructions' => 'Shown on the Combination Package card.' ),

        // ── CTA ──
        array(
            'key'   => 'field_rl_hl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'hl_cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to take the first step?',
        ),
        array(
            'key'           => 'field_rl_hl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'hl_cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-hair-loss.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );

// =============================================================================
// TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_travel_health',
    'title'    => 'Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_th_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_hero_title', 'label' => 'Hero Title', 'name' => 'th_hero_title', 'type' => 'text', 'default_value' => 'South East London\'s Trusted Travel Health Clinic' ),
        array( 'key' => 'field_rl_th_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'th_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'From yellow fever certification to malaria prevention – protect yourself with expert travel vaccinations before your next adventure.' ),
        array( 'key' => 'field_rl_th_hero_image', 'label' => 'Hero Image', 'name' => 'th_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_th_hero_pill', 'label' => 'Hero Pill / Badge Text', 'name' => 'th_hero_pill', 'type' => 'text', 'default_value' => 'GPhC Registered Travel Clinic' ),
        array( 'key' => 'field_rl_th_is_yfc', 'label' => 'Is Yellow Fever Centre?', 'name' => 'th_is_yellow_fever_centre', 'type' => 'true_false', 'ui' => 1, 'default_value' => 0, 'instructions' => 'MASTER TOGGLE. Turn ON once Yellow Fever Centre designation is officially confirmed. While OFF, all Yellow Fever Centre claims on the page are hidden/neutralised (hero pill, stats card, Official Certificates service card, Official Yellow Fever Centre feature card, the yellow fever FAQ answer, and the final CTA badge). Flipping this ON restores all of them in one click. Do not turn on until designation is officially confirmed — claiming to be a YFC when not designated is an ASA/MHRA/GPhC compliance issue.' ),
        array( 'key' => 'field_rl_th_stats_tab', 'label' => 'Stats Bar', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_stat1_number', 'label' => 'Stat 1 — Number / Value', 'name' => 'th_stat1_number', 'type' => 'text', 'default_value' => 'Same Day' ),
        array( 'key' => 'field_rl_th_stat1_label', 'label' => 'Stat 1 — Label', 'name' => 'th_stat1_label', 'type' => 'text', 'default_value' => 'Travel vaccinations available' ),
        array( 'key' => 'field_rl_th_stat1_desc', 'label' => 'Stat 1 — Description', 'name' => 'th_stat1_desc', 'type' => 'text', 'default_value' => 'No referral needed, no long waits' ),
        array( 'key' => 'field_rl_th_why_tab', 'label' => 'Why Choose Us', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_why_title', 'label' => 'Section Title', 'name' => 'th_why_title', 'type' => 'text', 'default_value' => 'Why choose our South East London travel clinic?', 'instructions' => 'Plain text. The words "travel clinic?" will automatically be wrapped in the gradient accent.' ),
        array( 'key' => 'field_rl_th_why_subtitle', 'label' => 'Section Subtitle', 'name' => 'th_why_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'More than just jabs – comprehensive travel health protection that gives you confidence from booking to landing.' ),
        array(
            'key' => 'field_rl_th_why_cards', 'label' => 'Why Choose Cards', 'name' => 'th_why_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'instructions' => 'The numbered label (01, 02, 03...) is auto-generated from the row order. Add, remove or reorder cards in any order — numbering adjusts automatically.',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_why_card_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_th_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                array( 'key' => 'field_rl_th_why_card_cta_label', 'label' => 'CTA Label', 'name' => 'cta_label', 'type' => 'text', 'default_value' => 'Book Consultation' ),
                array( 'key' => 'field_rl_th_why_card_cta_url', 'label' => 'CTA URL', 'name' => 'cta_url', 'type' => 'text', 'default_value' => '#book', 'instructions' => 'Can be a full URL, an on-page anchor like #book or #vaccines, or a path like /contact/.' ),
            ),
        ),
        array( 'key' => 'field_rl_th_journey_tab', 'label' => 'How It Works / Journey', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_journey_title', 'label' => 'Section Title', 'name' => 'th_journey_title', 'type' => 'text', 'default_value' => 'Your travel health journey' ),
        array( 'key' => 'field_rl_th_journey_subtitle', 'label' => 'Section Subtitle', 'name' => 'th_journey_subtitle', 'type' => 'text', 'default_value' => 'Three simple steps to complete travel protection' ),
        array(
            'key' => 'field_rl_th_journey_steps', 'label' => 'Journey Steps', 'name' => 'th_journey_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'instructions' => 'The "Step 1 / Step 2 / Step 3" label is auto-generated from row order — reorder, add or remove steps and the numbering adjusts automatically.',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_journey_step_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_th_journey_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_journey_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 4 ),
                array( 'key' => 'field_rl_th_journey_step_meta', 'label' => 'Meta / Pill Text', 'name' => 'meta', 'type' => 'text', 'instructions' => 'The small pill-style line shown beneath the description (e.g. "Typically 30-45 minutes appointment").' ),
            ),
        ),
        array( 'key' => 'field_rl_th_trust_tab', 'label' => 'Trust / About', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_trust_eyebrow', 'label' => 'Eyebrow', 'name' => 'th_trust_eyebrow', 'type' => 'text', 'default_value' => 'COMPREHENSIVE TRAVEL HEALTH EXPERTISE', 'instructions' => 'Small uppercase label above the section heading.' ),
        array( 'key' => 'field_rl_th_trust_title_main', 'label' => 'Title — Main', 'name' => 'th_trust_title_main', 'type' => 'text', 'default_value' => 'Your trusted travel health partner in' ),
        array( 'key' => 'field_rl_th_trust_title_accent', 'label' => 'Title — Accent (gradient)', 'name' => 'th_trust_title_accent', 'type' => 'text', 'default_value' => 'South East London', 'instructions' => 'The phrase that gets wrapped in the gradient accent. Appears after the main title text.' ),
        array( 'key' => 'field_rl_th_trust_intro', 'label' => 'Intro Paragraph', 'name' => 'th_trust_intro', 'type' => 'textarea', 'rows' => 5, 'default_value' => 'Our travel health service goes beyond just administering vaccinations. We provide comprehensive destination-specific guidance that keeps you safe before, during, and after your trip. With two convenient South East London locations and over 15 years serving travellers across Bromley, Orpington, Sidcup, Bexley, and Chislehurst, we understand the health risks unique to each region you might visit.' ),
        array( 'key' => 'field_rl_th_trust_feat1_title', 'label' => 'Feature 1 — Title (Destination-Specific Expertise)', 'name' => 'th_trust_feat1_title', 'type' => 'text', 'default_value' => 'Destination-Specific Expertise' ),
        array( 'key' => 'field_rl_th_trust_feat1_desc', 'label' => 'Feature 1 — Description', 'name' => 'th_trust_feat1_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Thailand needs different preparation than Tanzania. Urban Dubai requires different vaccines than rural Kenya. We assess your exact itinerary and activities.' ),
        array( 'key' => 'field_rl_th_trust_feat2_title', 'label' => 'Feature 2 — Title (Convenient Local Access)', 'name' => 'th_trust_feat2_title', 'type' => 'text', 'default_value' => 'Convenient Local Access' ),
        array( 'key' => 'field_rl_th_trust_feat2_desc', 'label' => 'Feature 2 — Description', 'name' => 'th_trust_feat2_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Two pharmacies serving South East London with free parking, extended hours, and easy access from surrounding areas. No need to travel into Central London.' ),
        array( 'key' => 'field_rl_th_trust_feat3_title', 'label' => 'Feature 3 — Title (Ongoing Support)', 'name' => 'th_trust_feat3_title', 'type' => 'text', 'default_value' => 'Ongoing Support' ),
        array( 'key' => 'field_rl_th_trust_feat3_desc', 'label' => 'Feature 3 — Description', 'name' => 'th_trust_feat3_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Access to your vaccination records anytime. Need repeat antimalarials? Quick refills without full re-consultation. Got sick abroad? Emergency advice line.' ),
        array( 'key' => 'field_rl_th_trust_cta_label', 'label' => 'CTA Button Label', 'name' => 'th_trust_cta_label', 'type' => 'text', 'default_value' => 'Book Your Travel Health Consultation' ),
        array( 'key' => 'field_rl_th_trust_cta_url', 'label' => 'CTA Button URL', 'name' => 'th_trust_cta_url', 'type' => 'text', 'default_value' => '#book', 'instructions' => 'Can be an on-page anchor (#book), a path (/contact/), or a full URL.' ),
        array( 'key' => 'field_rl_th_trust_image', 'label' => 'Main Image', 'name' => 'th_trust_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_th_trust_badge_text', 'label' => 'Floating Badge Text', 'name' => 'th_trust_badge_text', 'type' => 'text', 'default_value' => '15+ Years Serving South East London Travellers', 'instructions' => 'Small pill badge overlaid on the bottom of the main image.' ),
        array( 'key' => 'field_rl_th_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_locations_title_main', 'label' => 'Section Title — Main', 'name' => 'th_locations_title_main', 'type' => 'text', 'default_value' => 'Two Convenient South East London' ),
        array( 'key' => 'field_rl_th_locations_title_accent', 'label' => 'Section Title — Accent (gradient)', 'name' => 'th_locations_title_accent', 'type' => 'text', 'default_value' => 'Locations' ),
        array( 'key' => 'field_rl_th_locations_subtitle', 'label' => 'Section Subtitle', 'name' => 'th_locations_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Based in Chislehurst, we're South East London's local travel health clinic serving patients across Bromley, Orpington, Sidcup, Bexley, Eltham, Lewisham, and surrounding areas." ),
        array(
            'key' => 'field_rl_th_locations', 'label' => 'Location Cards', 'name' => 'th_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_loc_image', 'label' => 'Card Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_th_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_loc_hours', 'label' => 'Opening Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_loc_services', 'label' => 'Services Bullet Line', 'name' => 'services', 'type' => 'textarea', 'rows' => 3, 'instructions' => 'Use • as a separator between services. The word "Services:" is added automatically as a bold prefix — do not include it here.' ),
                array( 'key' => 'field_rl_th_loc_area', 'label' => 'Serving Area Line', 'name' => 'area', 'type' => 'text', 'instructions' => 'Short line shown beneath the services, e.g. "Serving Chislehurst, Bromley, and Sidcup".' ),
                array( 'key' => 'field_rl_th_loc_directions_url', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_th_vaccines_tab', 'label' => 'Vaccinations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_vaccines', 'label' => 'Vaccination Cards', 'name' => 'th_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccination',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_th_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_doses', 'label' => 'Doses Info', 'name' => 'doses', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_th_destinations_tab', 'label' => 'Destinations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_destinations', 'label' => 'Destination Cards', 'name' => 'th_destinations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Destination',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_dest_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_dest_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_th_dest_vaccines', 'label' => 'Vaccines Required', 'name' => 'vaccines', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_dest_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_th_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_faqs', 'label' => 'FAQs', 'name' => 'th_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-health.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// THAILAND PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_thailand',
    'title'    => 'Thailand Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_thai_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_thai_hero_badge', 'label' => 'Hero Badge Text', 'name' => 'thai_hero_badge', 'type' => 'text', 'default_value' => 'Thailand Travel Health' ),
        array( 'key' => 'field_rl_thai_hero_image', 'label' => 'Hero Image', 'name' => 'thai_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_thai_hero_title', 'label' => 'Hero Title', 'name' => 'thai_hero_title', 'type' => 'text', 'default_value' => 'Thailand Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_thai_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'thai_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your Thailand trip. Same-day appointments available at both our Chislehurst locations.' ),
        array( 'key' => 'field_rl_thai_hero_cta2_label', 'label' => 'Second CTA — Label', 'name' => 'thai_hero_cta2_label', 'type' => 'text', 'default_value' => 'Check What Vaccines You Need' ),
        array( 'key' => 'field_rl_thai_hero_cta2_url', 'label' => 'Second CTA — URL', 'name' => 'thai_hero_cta2_url', 'type' => 'text', 'default_value' => '#vaccines' ),
        array( 'key' => 'field_rl_thai_hero_trust_1', 'label' => 'Trust Point 1', 'name' => 'thai_hero_trust_1', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
        array( 'key' => 'field_rl_thai_hero_trust_2', 'label' => 'Trust Point 2', 'name' => 'thai_hero_trust_2', 'type' => 'text', 'default_value' => 'Same-Day Appointments' ),
        array( 'key' => 'field_rl_thai_hero_trust_3', 'label' => 'Trust Point 3', 'name' => 'thai_hero_trust_3', 'type' => 'text', 'default_value' => 'Expert Pharmacist Advice' ),
        array( 'key' => 'field_rl_thai_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_thai_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'thai_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_thai_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_thai_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_thai_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_thai_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_thai_price_essential', 'label' => 'Essential Package Price', 'name' => 'thai_price_essential', 'type' => 'text', 'default_value' => '£TBC', 'instructions' => 'e.g. "£120" or "£TBC" while awaiting confirmation.' ),
        array( 'key' => 'field_rl_thai_price_comprehensive', 'label' => 'Comprehensive Package Price', 'name' => 'thai_price_comprehensive', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_hepa', 'label' => 'Hepatitis A Price', 'name' => 'thai_price_hepa', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_hepb', 'label' => 'Hepatitis B (per dose) Price', 'name' => 'thai_price_hepb', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_typhoid', 'label' => 'Typhoid Price', 'name' => 'thai_price_typhoid', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_je', 'label' => 'Japanese Encephalitis (per dose) Price', 'name' => 'thai_price_je', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_rabies', 'label' => 'Rabies (per dose) Price', 'name' => 'thai_price_rabies', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_dtp', 'label' => 'DTP Booster Price', 'name' => 'thai_price_dtp', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_price_antimalarial', 'label' => 'Antimalarial Tablets Price', 'name' => 'thai_price_antimalarial', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_thai_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_thai_faqs', 'label' => 'FAQs', 'name' => 'thai_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_thai_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-thailand.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HEPATITIS VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hepatitis',
    'title'    => 'Hepatitis Vaccine Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hep_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hep_hero_title', 'label' => 'Hero Title', 'name' => 'hep_hero_title', 'type' => 'text', 'default_value' => 'Hepatitis A & B Vaccines London: Complete Liver Protection in Chislehurst' ),
        array( 'key' => 'field_rl_hep_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hep_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'GPhC-registered pharmacy offering hepatitis A and hepatitis B vaccinations for travel, work, and lifelong health protection.' ),
        array( 'key' => 'field_rl_hep_hero_image', 'label' => 'Hero Image', 'name' => 'hep_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_hep_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hep_pricing', 'label' => 'Pricing Cards', 'name' => 'hep_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hep_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_doses', 'label' => 'Doses', 'name' => 'doses', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_protection', 'label' => 'Protection Duration', 'name' => 'protection', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hep_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hep_faqs', 'label' => 'FAQs', 'name' => 'hep_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hep_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-hepatitis.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HPV VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hpv',
    'title'    => 'HPV Vaccine Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hpv_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_hero_title', 'label' => 'Hero Title', 'name' => 'hpv_hero_title', 'type' => 'text', 'default_value' => 'HPV Vaccine London: Protect Against Cancer-Causing HPV' ),
        array( 'key' => 'field_rl_hpv_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hpv_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Private Gardasil 9 vaccination for men and women aged 9–45+. Same-day appointments available at our South East London clinics. No GP referral needed.' ),
        array( 'key' => 'field_rl_hpv_hero_image', 'label' => 'Hero Image', 'name' => 'hpv_hero_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default shield illustration' ),
        array( 'key' => 'field_rl_hpv_hero_eyebrow', 'label' => 'Hero Eyebrow Text', 'name' => 'hpv_hero_eyebrow', 'type' => 'text', 'default_value' => 'Cancer Prevention  |  HPV Vaccination' ),
        array(
            'key' => 'field_rl_hpv_hero_trust_badges', 'label' => 'Hero Trust Badges', 'name' => 'hpv_hero_trust_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_trust_badge_text', 'label' => 'Badge Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── HERO CTA BUTTONS ──
        array( 'key' => 'field_rl_hpv_hero_cta1_text', 'label' => 'Button 1 Text', 'name' => 'hpv_hero_cta1_text', 'type' => 'text', 'default_value' => 'Book My Vaccination' ),
        array( 'key' => 'field_rl_hpv_hero_cta1_url', 'label' => 'Button 1 URL', 'name' => 'hpv_hero_cta1_url', 'type' => 'url', 'default_value' => '#book' ),
        array( 'key' => 'field_rl_hpv_hero_cta2_text', 'label' => 'Button 2 Text', 'name' => 'hpv_hero_cta2_text', 'type' => 'text', 'default_value' => 'Check Eligibility First' ),
        array( 'key' => 'field_rl_hpv_hero_cta2_url', 'label' => 'Button 2 URL', 'name' => 'hpv_hero_cta2_url', 'type' => 'url', 'default_value' => '#eligibility' ),

        // ── KEY FACTS / AT A GLANCE ──
        array( 'key' => 'field_rl_hpv_keyfacts_tab', 'label' => 'Key Facts', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_keyfacts_pill', 'label' => 'Pill Label', 'name' => 'hpv_keyfacts_pill', 'type' => 'text', 'default_value' => 'At a Glance' ),
        array( 'key' => 'field_rl_hpv_keyfacts_title', 'label' => 'Section Title', 'name' => 'hpv_keyfacts_title', 'type' => 'text', 'default_value' => 'Key Facts About the HPV Vaccine' ),
        array(
            'key' => 'field_rl_hpv_keyfacts_cards', 'label' => 'Stat Cards', 'name' => 'hpv_keyfacts_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Stat Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_kf_stat', 'label' => 'Stat Number/Text', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_kf_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── UNDERSTANDING HPV ──
        array( 'key' => 'field_rl_hpv_understanding_tab', 'label' => 'Understanding HPV', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_understanding_image', 'label' => 'Section Image', 'name' => 'hpv_understanding_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default SVG illustration' ),
        array( 'key' => 'field_rl_hpv_understanding_eyebrow', 'label' => 'Eyebrow', 'name' => 'hpv_understanding_eyebrow', 'type' => 'text', 'default_value' => 'The Problem' ),
        array( 'key' => 'field_rl_hpv_understanding_heading', 'label' => 'Heading', 'name' => 'hpv_understanding_heading', 'type' => 'text', 'default_value' => 'What is HPV, and Why Does It Matter?' ),
        array( 'key' => 'field_rl_hpv_understanding_body', 'label' => 'Body Content', 'name' => 'hpv_understanding_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Human papillomavirus (HPV) is one of the most common sexually transmitted infections globally. <strong>Over 70% of sexually active people</strong> will contract HPV at some point in their lives.</p><p>Most HPV infections clear naturally without symptoms. But for some people, persistent HPV infection can lead to serious health consequences years or even decades later.</p>' ),
        array( 'key' => 'field_rl_hpv_understanding_callout', 'label' => 'Callout Text', 'name' => 'hpv_understanding_callout', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'HPV causes 99% of cervical cancers and contributes to thousands of other cancers each year in the UK.' ),
        array( 'key' => 'field_rl_hpv_understanding_body2', 'label' => 'Body Content (below callout)', 'name' => 'hpv_understanding_body2', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>HPV spreads through skin-to-skin contact, including sexual activity. Because most people with HPV show no symptoms, it transmits easily without anyone realising.</p><p><strong>The good news:</strong> vaccination provides strong protection against the HPV types most likely to cause cancer and genital warts.</p>' ),

        // ── GARDASIL 9 / THE SOLUTION ──
        array( 'key' => 'field_rl_hpv_gardasil_tab', 'label' => 'Gardasil 9', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_gardasil_image', 'label' => 'Section Image', 'name' => 'hpv_gardasil_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default SVG illustration' ),
        array( 'key' => 'field_rl_hpv_gardasil_eyebrow', 'label' => 'Eyebrow', 'name' => 'hpv_gardasil_eyebrow', 'type' => 'text', 'default_value' => 'The Solution' ),
        array( 'key' => 'field_rl_hpv_gardasil_heading', 'label' => 'Heading', 'name' => 'hpv_gardasil_heading', 'type' => 'text', 'default_value' => 'Gardasil 9: The Most Comprehensive HPV Protection Available' ),
        array( 'key' => 'field_rl_hpv_gardasil_body', 'label' => 'Body Content', 'name' => 'hpv_gardasil_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Gardasil 9 is the HPV vaccine used by REY London Pharmacy. It\'s the most advanced HPV vaccine available, protecting against nine HPV types:</p><p><strong>High-Risk Types (Cancer-Causing):</strong> HPV 16, 18, 31, 33, 45, 52, and 58</p><p><strong>Low-Risk Types (Genital Warts):</strong> HPV 6 and 11</p><p>Together, these nine types are responsible for:</p>' ),
        array(
            'key' => 'field_rl_hpv_gardasil_stats', 'label' => 'Protection Stats List', 'name' => 'hpv_gardasil_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_gard_stat_text', 'label' => 'Stat Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_gardasil_highlight', 'label' => 'Highlight Box Text', 'name' => 'hpv_gardasil_highlight', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => 'Clinical trials show Gardasil 9 is nearly <strong>100% effective</strong> at preventing infections and pre-cancers caused by the HPV types it targets when given before exposure.' ),

        // ── WHO SHOULD GET VACCINATED ──
        array( 'key' => 'field_rl_hpv_who_tab', 'label' => 'Who Should Get Vaccinated', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_who_title', 'label' => 'Section Title', 'name' => 'hpv_who_title', 'type' => 'text', 'default_value' => 'Who Should Get the HPV Vaccine in London?' ),
        array( 'key' => 'field_rl_hpv_who_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_who_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'The HPV vaccine provides the most benefit when given before exposure. However, even if you\'re sexually active, you can still benefit from vaccination.' ),
        array(
            'key' => 'field_rl_hpv_who_cards', 'label' => 'Eligibility Cards', 'name' => 'hpv_who_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_who_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_who_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                array(
                    'key' => 'field_rl_hpv_who_card_bullets', 'label' => 'Bullet Points', 'name' => 'bullets', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Bullet',
                    'sub_fields' => array(
                        array( 'key' => 'field_rl_hpv_who_bullet_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                    ),
                ),
                array( 'key' => 'field_rl_hpv_who_card_cta', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_who_card_cta_url', 'label' => 'CTA URL', 'name' => 'cta_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_who_info_box', 'label' => 'Info Box Text', 'name' => 'hpv_who_info_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Men who have sex with men (MSM) aged 45 and under may be eligible for free HPV vaccination through the NHS at sexual health clinics. Contact your local clinic for information.' ),

        // ── DOSING SCHEDULE ──
        array( 'key' => 'field_rl_hpv_dosing_tab', 'label' => 'Dosing Schedule', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_dosing_title', 'label' => 'Section Title', 'name' => 'hpv_dosing_title', 'type' => 'text', 'default_value' => 'How Many Doses Do You Need?' ),
        array( 'key' => 'field_rl_hpv_dosing_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_dosing_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'The number of doses depends on your age when you receive your first vaccination and your immune system status.' ),
        array(
            'key' => 'field_rl_hpv_dosing_cards', 'label' => 'Dose Cards', 'name' => 'hpv_dosing_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Dose Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_dose_number', 'label' => 'Dose Number', 'name' => 'dose_number', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_who', 'label' => 'Who (Age Range)', 'name' => 'who', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_hpv_dose_note', 'label' => 'Timing Note', 'name' => 'note', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_recommended', 'label' => 'Recommended?', 'name' => 'recommended', 'type' => 'true_false', 'default_value' => 0 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_dosing_info_box', 'label' => 'Info Box Text', 'name' => 'hpv_dosing_info_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Your consultation with our pharmacist will determine the right schedule for you based on your age and medical history. We\'ll book all necessary appointments to ensure you complete your course.' ),

        // ── PROTECTION SECTION ──
        array( 'key' => 'field_rl_hpv_protection_tab', 'label' => 'Protection', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_protection_title', 'label' => 'Section Title', 'name' => 'hpv_protection_title', 'type' => 'text', 'default_value' => 'Cancer Prevention: What Gardasil 9 Protects Against' ),
        array( 'key' => 'field_rl_hpv_protection_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_protection_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'HPV vaccination is one of the most effective cancer prevention tools available. Here\'s what protection against nine HPV types means for your long-term health.' ),
        array(
            'key' => 'field_rl_hpv_protection_cards', 'label' => 'Protection Cards', 'name' => 'hpv_protection_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Protection Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_prot_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_prot_stat', 'label' => 'Stat Line', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_prot_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_protection_warning', 'label' => 'Warning Box Text', 'name' => 'hpv_protection_warning', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<strong>Important:</strong> The HPV vaccine does not replace cervical screening. Women should continue regular cervical screening (smear tests) as recommended, regardless of vaccination status.' ),

        // ── HOW IT WORKS ──
        array( 'key' => 'field_rl_hpv_hiw_tab', 'label' => 'How It Works', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_hiw_title', 'label' => 'Section Title', 'name' => 'hpv_hiw_title', 'type' => 'text', 'default_value' => 'How the HPV Vaccine Works' ),
        array( 'key' => 'field_rl_hpv_hiw_image', 'label' => 'Photo', 'name' => 'hpv_hiw_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Photo of pharmacist administering vaccine' ),
        array( 'key' => 'field_rl_hpv_hiw_badge_text', 'label' => 'Photo Badge Text', 'name' => 'hpv_hiw_badge_text', 'type' => 'text', 'default_value' => 'GPhC-Registered Pharmacists' ),
        array( 'key' => 'field_rl_hpv_hiw_eyebrow', 'label' => 'Mechanism Eyebrow', 'name' => 'hpv_hiw_eyebrow', 'type' => 'text', 'default_value' => 'Vaccine Mechanism' ),
        array( 'key' => 'field_rl_hpv_hiw_body', 'label' => 'Mechanism Body', 'name' => 'hpv_hiw_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Gardasil 9 is a recombinant vaccine made from virus-like particles (VLPs) that mimic the outer shell of HPV.</p><p><strong>Important: The vaccine does NOT contain live virus or viral DNA. It cannot cause HPV infection.</strong></p><p>When you receive the vaccine, your immune system recognises these particles as foreign and creates antibodies. If you\'re later exposed to real HPV, your body already has the antibodies ready to neutralise the virus before it can establish infection.</p>' ),
        array( 'key' => 'field_rl_hpv_hiw_callout', 'label' => 'Callout Text', 'name' => 'hpv_hiw_callout', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Nearly 100% effective at preventing persistent infection and pre-cancers when given before HPV exposure.' ),
        array( 'key' => 'field_rl_hpv_hiw_steps_eyebrow', 'label' => 'Steps Eyebrow', 'name' => 'hpv_hiw_steps_eyebrow', 'type' => 'text', 'default_value' => 'Your Appointment' ),
        array(
            'key' => 'field_rl_hpv_hiw_steps', 'label' => 'Appointment Steps', 'name' => 'hpv_hiw_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_hiw_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_hiw_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_hiw_total_time', 'label' => 'Total Time Text', 'name' => 'hpv_hiw_total_time', 'type' => 'text', 'default_value' => 'Total time: approximately 20–30 minutes' ),

        // ── SIDE EFFECTS / SAFETY ──
        array( 'key' => 'field_rl_hpv_safety_tab', 'label' => 'Side Effects / Safety', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_safety_banner_image', 'label' => 'Safety Banner Image', 'name' => 'hpv_safety_banner_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Wide banner photo for safety section' ),
        array( 'key' => 'field_rl_hpv_safety_banner_title', 'label' => 'Banner Title', 'name' => 'hpv_safety_banner_title', 'type' => 'text', 'default_value' => 'Trusted Globally Since 2014' ),
        array( 'key' => 'field_rl_hpv_safety_banner_text', 'label' => 'Banner Subtitle', 'name' => 'hpv_safety_banner_text', 'type' => 'text', 'default_value' => 'Used safely in 300+ million doses worldwide' ),
        array( 'key' => 'field_rl_hpv_safety_title', 'label' => 'Section Title', 'name' => 'hpv_safety_title', 'type' => 'text', 'default_value' => 'Side Effects and Safety Information' ),
        array( 'key' => 'field_rl_hpv_safety_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_safety_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Gardasil 9 has been extensively studied in clinical trials involving over 15,000 participants and has been used safely in millions of people worldwide since 2014.' ),
        array( 'key' => 'field_rl_hpv_safety_common_title', 'label' => 'Common Side Effects Title', 'name' => 'hpv_safety_common_title', 'type' => 'text', 'default_value' => 'Common Side Effects (Usually Mild & Temporary)' ),
        array(
            'key' => 'field_rl_hpv_safety_common_list', 'label' => 'Common Side Effects', 'name' => 'hpv_safety_common_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Side Effect',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_safety_common_item', 'label' => 'Side Effect', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_safety_common_note', 'label' => 'Common Side Effects Note', 'name' => 'hpv_safety_common_note', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'These side effects typically resolve within 1–2 days and can be managed with over-the-counter pain relief if needed.' ),
        array( 'key' => 'field_rl_hpv_safety_serious_title', 'label' => 'Serious Side Effects Title', 'name' => 'hpv_safety_serious_title', 'type' => 'text', 'default_value' => 'Serious Side Effects (Very Rare)' ),
        array( 'key' => 'field_rl_hpv_safety_serious_text', 'label' => 'Serious Side Effects Text', 'name' => 'hpv_safety_serious_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Serious allergic reactions are extremely rare (less than 1 in 1,000,000 doses) but possible with any vaccine. This is why we observe all patients for 15 minutes after vaccination. Our pharmacists are trained to recognise and treat allergic reactions immediately.' ),
        array( 'key' => 'field_rl_hpv_safety_contra_title', 'label' => 'Contraindications Title', 'name' => 'hpv_safety_contra_title', 'type' => 'text', 'default_value' => 'Who Should Not Get the Vaccine' ),
        array(
            'key' => 'field_rl_hpv_safety_contra_list', 'label' => 'Contraindications', 'name' => 'hpv_safety_contra_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Contraindication',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_safety_contra_item', 'label' => 'Contraindication', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_safety_contra_note', 'label' => 'Contraindications Note', 'name' => 'hpv_safety_contra_note', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Breastfeeding is safe — the vaccine does not pass into breast milk.' ),
        array( 'key' => 'field_rl_hpv_safety_box', 'label' => 'Safety Summary Box', 'name' => 'hpv_safety_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Safety monitoring by the MHRA and WHO continues to confirm HPV vaccines have a favourable safety profile. Over 160 studies confirm the vaccine\'s safety and effectiveness.' ),

        // ── WHY CHOOSE US ──
        array( 'key' => 'field_rl_hpv_why_tab', 'label' => 'Why Choose Us', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_why_title', 'label' => 'Section Title', 'name' => 'hpv_why_title', 'type' => 'text', 'default_value' => 'Why Choose REY London for Your HPV Vaccination' ),
        array(
            'key' => 'field_rl_hpv_why_cards', 'label' => 'Feature Cards', 'name' => 'hpv_why_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Feature Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── LOCATIONS ──
        array( 'key' => 'field_rl_hpv_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_locations_title', 'label' => 'Section Title', 'name' => 'hpv_locations_title', 'type' => 'text', 'default_value' => 'Visit Us at Our South East London Locations' ),
        array(
            'key' => 'field_rl_hpv_locations', 'label' => 'Location Cards', 'name' => 'hpv_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_image', 'label' => 'Card Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_hpv_loc_description', 'label' => 'Short Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_hpv_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_hours', 'label' => 'Opening Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_directions_url', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_locations_serving', 'label' => 'Serving Areas Text', 'name' => 'hpv_locations_serving', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Conveniently located to serve patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and surrounding South East London areas. Free parking available at both locations.' ),

        array( 'key' => 'field_rl_hpv_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_pricing_title', 'label' => 'Pricing Section Title', 'name' => 'hpv_pricing_title', 'type' => 'text', 'default_value' => 'Transparent Pricing — HPV Vaccine London' ),
        array( 'key' => 'field_rl_hpv_pricing_subtitle', 'label' => 'Pricing Subtitle', 'name' => 'hpv_pricing_subtitle', 'type' => 'text', 'default_value' => 'No hidden fees. No consultation charges. The price you see is the price you pay.' ),
        array( 'key' => 'field_rl_hpv_price_per_dose', 'label' => 'Price Per Dose', 'name' => 'hpv_price_per_dose', 'type' => 'text', 'default_value' => '£150', 'instructions' => 'Shown on all pricing cards' ),
        array(
            'key' => 'field_rl_hpv_pricing', 'label' => 'Pricing Options (override)', 'name' => 'hpv_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Option', 'instructions' => 'Leave empty to use the hardcoded pricing cards',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_doses', 'label' => 'Doses', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_cta_title', 'label' => 'CTA Title', 'name' => 'hpv_cta_title', 'type' => 'text', 'default_value' => 'Protect your future health today' ),
        array( 'key' => 'field_rl_hpv_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'hpv_cta_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your private HPV vaccination at REY London Pharmacy — South East London\'s trusted clinic. No GP referral needed, same-day appointments available.' ),
        array( 'key' => 'field_rl_hpv_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hpv_faqs', 'label' => 'FAQs', 'name' => 'hpv_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-hpv.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// YELLOW FEVER VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_yellow_fever',
    'title'    => 'Yellow Fever Vaccine Page',
    'fields'   => array(
        // ── HERO ──
        array( 'key' => 'field_rl_yf_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_hero_title', 'label' => 'Hero Title', 'name' => 'yf_hero_title', 'type' => 'text', 'default_value' => 'Yellow Fever Vaccine London: Official Vaccination Centre in Chislehurst' ),
        array( 'key' => 'field_rl_yf_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'yf_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Registered Yellow Fever Vaccination Centre serving South East London. Lifetime protection with official International Certificate included.' ),
        array( 'key' => 'field_rl_yf_hero_image', 'label' => 'Hero Image', 'name' => 'yf_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_hero_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'yf_hero_eyebrow', 'type' => 'text', 'default_value' => 'NaTHNaC Registered  |  Yellow Fever Vaccination Centre' ),
        array(
            'key' => 'field_rl_yf_hero_trust_badges', 'label' => 'Trust Badges', 'name' => 'yf_hero_trust_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_trust_badge_text', 'label' => 'Badge Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── KEY FACTS ──
        array( 'key' => 'field_rl_yf_keyfacts_tab', 'label' => 'Key Facts', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_keyfacts_pill', 'label' => 'Pill Label', 'name' => 'yf_keyfacts_pill', 'type' => 'text', 'default_value' => 'At a Glance' ),
        array( 'key' => 'field_rl_yf_keyfacts_title', 'label' => 'Section Title', 'name' => 'yf_keyfacts_title', 'type' => 'text', 'default_value' => 'Key Facts About the Yellow Fever Vaccine' ),
        array(
            'key' => 'field_rl_yf_keyfacts_cards', 'label' => 'Stat Cards', 'name' => 'yf_keyfacts_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Stat Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_kf_stat', 'label' => 'Stat', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_kf_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── UNDERSTANDING YELLOW FEVER ──
        array( 'key' => 'field_rl_yf_understanding_tab', 'label' => 'Understanding YF', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_understanding_eyebrow', 'label' => 'Eyebrow', 'name' => 'yf_understanding_eyebrow', 'type' => 'text', 'default_value' => 'What You Need to Know' ),
        array( 'key' => 'field_rl_yf_understanding_heading', 'label' => 'Heading', 'name' => 'yf_understanding_heading', 'type' => 'text', 'default_value' => 'What is Yellow Fever?' ),
        array( 'key' => 'field_rl_yf_understanding_body', 'label' => 'Body Content', 'name' => 'yf_understanding_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array(
            'key' => 'field_rl_yf_understanding_stats', 'label' => 'Stat Boxes', 'name' => 'yf_understanding_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_und_stat_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_und_stat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_understanding_image', 'label' => 'Section Image', 'name' => 'yf_understanding_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_understanding_badge', 'label' => 'Image Badge Text', 'name' => 'yf_understanding_badge', 'type' => 'text', 'default_value' => '50%+ mortality rate in severe cases' ),

        // ── WHY YOU NEED IT ──
        array( 'key' => 'field_rl_yf_why_need_tab', 'label' => 'Why You Need It', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_why_need_title', 'label' => 'Section Title', 'name' => 'yf_why_need_title', 'type' => 'text', 'default_value' => 'Why You Need the Yellow Fever Vaccine' ),
        array( 'key' => 'field_rl_yf_why_need_subtitle', 'label' => 'Subtitle', 'name' => 'yf_why_need_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Three compelling reasons why yellow fever vaccination is essential for travel to affected regions — not optional.' ),
        array(
            'key' => 'field_rl_yf_why_need_cards', 'label' => 'Reason Cards', 'name' => 'yf_why_need_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Reason',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_need_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_need_body', 'label' => 'Body', 'name' => 'body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),

        // ── LIFESTYLE BANNERS ──
        array( 'key' => 'field_rl_yf_banners_tab', 'label' => 'Banners', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_banner1_image', 'label' => 'Banner 1 Image', 'name' => 'yf_banner1_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_banner1_title', 'label' => 'Banner 1 Title', 'name' => 'yf_banner1_title', 'type' => 'text', 'default_value' => '40+ Countries Require Certification' ),
        array( 'key' => 'field_rl_yf_banner1_text', 'label' => 'Banner 1 Subtitle', 'name' => 'yf_banner1_text', 'type' => 'text', 'default_value' => 'Protect yourself before exploring Africa & South America' ),
        array( 'key' => 'field_rl_yf_banner2_image', 'label' => 'Banner 2 Image', 'name' => 'yf_banner2_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_banner2_title', 'label' => 'Banner 2 Title', 'name' => 'yf_banner2_title', 'type' => 'text', 'default_value' => 'Professional Travel Health Service' ),
        array( 'key' => 'field_rl_yf_banner2_text', 'label' => 'Banner 2 Subtitle', 'name' => 'yf_banner2_text', 'type' => 'text', 'default_value' => 'GPhC-registered pharmacists · Consultation + vaccine + certificate in 20 minutes' ),

        // ── RISK AREAS ──
        array( 'key' => 'field_rl_yf_risk_tab', 'label' => 'Risk Areas', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_risk_pill', 'label' => 'Pill Label', 'name' => 'yf_risk_pill', 'type' => 'text', 'default_value' => 'Risk Areas' ),
        array( 'key' => 'field_rl_yf_risk_title', 'label' => 'Section Title', 'name' => 'yf_risk_title', 'type' => 'text', 'default_value' => 'Yellow Fever Risk Areas' ),
        array( 'key' => 'field_rl_yf_risk_subtitle', 'label' => 'Subtitle', 'name' => 'yf_risk_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_risk_africa_body', 'label' => 'Africa Description', 'name' => 'yf_risk_africa_body', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_risk_africa_list', 'label' => 'Africa Countries', 'name' => 'yf_risk_africa_list', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array( 'key' => 'field_rl_yf_risk_americas_body', 'label' => 'South America Description', 'name' => 'yf_risk_americas_body', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_risk_americas_list', 'label' => 'South America Countries', 'name' => 'yf_risk_americas_list', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array( 'key' => 'field_rl_yf_risk_transit_warning', 'label' => 'Transit Warning', 'name' => 'yf_risk_transit_warning', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── WHO SHOULD GET VACCINATED ──
        array( 'key' => 'field_rl_yf_who_tab', 'label' => 'Who Should Get', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_who_title', 'label' => 'Section Title', 'name' => 'yf_who_title', 'type' => 'text', 'default_value' => 'Who Should Get the Yellow Fever Vaccine?' ),
        array( 'key' => 'field_rl_yf_who_subtitle', 'label' => 'Subtitle', 'name' => 'yf_who_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_who_cards', 'label' => 'Eligibility Cards', 'name' => 'yf_who_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_who_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_who_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_yf_who_info_box', 'label' => 'Info Box', 'name' => 'yf_who_info_box', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── VACCINATION PROCESS ──
        array( 'key' => 'field_rl_yf_process_tab', 'label' => 'Vaccination Process', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_process_title', 'label' => 'Section Title', 'name' => 'yf_process_title', 'type' => 'text', 'default_value' => 'What to Expect at Your Appointment' ),
        array( 'key' => 'field_rl_yf_process_subtitle', 'label' => 'Subtitle', 'name' => 'yf_process_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_process_image', 'label' => 'Photo', 'name' => 'yf_process_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_process_badge', 'label' => 'Photo Badge Text', 'name' => 'yf_process_badge', 'type' => 'text', 'default_value' => 'GPhC-Registered Pharmacists' ),
        array(
            'key' => 'field_rl_yf_process_steps', 'label' => 'Steps', 'name' => 'yf_process_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_yf_process_time', 'label' => 'Total Time Text', 'name' => 'yf_process_time', 'type' => 'text', 'default_value' => 'Allow 20 minutes total · Book at least 10 days before travel' ),

        // ── ICVP CERTIFICATE ──
        array( 'key' => 'field_rl_yf_cert_tab', 'label' => 'Certificate', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_cert_pill', 'label' => 'Pill Label', 'name' => 'yf_cert_pill', 'type' => 'text', 'default_value' => 'The Yellow Card' ),
        array( 'key' => 'field_rl_yf_cert_title', 'label' => 'Section Title', 'name' => 'yf_cert_title', 'type' => 'text', 'default_value' => 'Your Official Yellow Fever Certificate' ),
        array( 'key' => 'field_rl_yf_cert_subtitle', 'label' => 'Subtitle', 'name' => 'yf_cert_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_cert_items', 'label' => 'Certificate Items', 'name' => 'yf_cert_items', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_cert_item_text', 'label' => 'Item', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array(
            'key' => 'field_rl_yf_cert_bring', 'label' => 'Bring to Appointment', 'name' => 'yf_cert_bring', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_cert_bring_text', 'label' => 'Item', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_cert_validity', 'label' => 'Validity Note', 'name' => 'yf_cert_validity', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── SIDE EFFECTS / SAFETY ──
        array( 'key' => 'field_rl_yf_safety_tab', 'label' => 'Safety', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_safety_banner_image', 'label' => 'Safety Banner Image', 'name' => 'yf_safety_banner_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_safety_banner_title', 'label' => 'Banner Title', 'name' => 'yf_safety_banner_title', 'type' => 'text', 'default_value' => '600+ Million Doses Administered Worldwide' ),
        array( 'key' => 'field_rl_yf_safety_banner_text', 'label' => 'Banner Subtitle', 'name' => 'yf_safety_banner_text', 'type' => 'text', 'default_value' => 'WHO-prequalified vaccine · Over 80 years of safety record' ),
        array( 'key' => 'field_rl_yf_safety_title', 'label' => 'Section Title', 'name' => 'yf_safety_title', 'type' => 'text', 'default_value' => 'Side Effects & Safety Information' ),
        array( 'key' => 'field_rl_yf_safety_subtitle', 'label' => 'Subtitle', 'name' => 'yf_safety_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_safety_common_title', 'label' => 'Common Title', 'name' => 'yf_safety_common_title', 'type' => 'text', 'default_value' => 'Common Side Effects (Affecting 1 in 3 People)' ),
        array(
            'key' => 'field_rl_yf_safety_common_list', 'label' => 'Common Side Effects', 'name' => 'yf_safety_common_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_common_item', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_common_note', 'label' => 'Common Note', 'name' => 'yf_safety_common_note', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_safety_serious_title', 'label' => 'Serious Title', 'name' => 'yf_safety_serious_title', 'type' => 'text', 'default_value' => 'Serious Side Effects (Very Rare)' ),
        array( 'key' => 'field_rl_yf_safety_serious_text', 'label' => 'Serious Text', 'name' => 'yf_safety_serious_text', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_safety_contra_title', 'label' => 'Contra Title', 'name' => 'yf_safety_contra_title', 'type' => 'text', 'default_value' => 'Who Should NOT Receive Yellow Fever Vaccine' ),
        array(
            'key' => 'field_rl_yf_safety_contra_list', 'label' => 'Contraindications', 'name' => 'yf_safety_contra_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_contra_item', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_precautions_title', 'label' => 'Precautions Title', 'name' => 'yf_safety_precautions_title', 'type' => 'text', 'default_value' => 'Special Precautions' ),
        array(
            'key' => 'field_rl_yf_safety_precautions', 'label' => 'Precautions', 'name' => 'yf_safety_precautions', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_prec_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_box', 'label' => 'Safety Summary', 'name' => 'yf_safety_box', 'type' => 'textarea', 'rows' => 3 ),

        // ── PRICING ──
        array( 'key' => 'field_rl_yf_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_pricing_title', 'label' => 'Section Title', 'name' => 'yf_pricing_title', 'type' => 'text', 'default_value' => 'Transparent Yellow Fever Vaccine Pricing' ),
        array( 'key' => 'field_rl_yf_pricing_subtitle', 'label' => 'Subtitle', 'name' => 'yf_pricing_subtitle', 'type' => 'text', 'default_value' => 'All-inclusive price. No hidden fees. No consultation charges.' ),
        array( 'key' => 'field_rl_yf_price_amount', 'label' => 'Price Amount', 'name' => 'yf_price_amount', 'type' => 'text', 'default_value' => '85' ),
        array( 'key' => 'field_rl_yf_price_badge', 'label' => 'Price Badge Text', 'name' => 'yf_price_badge', 'type' => 'text', 'default_value' => 'All-Inclusive · Everything Included' ),
        array(
            'key' => 'field_rl_yf_price_includes', 'label' => 'Includes List', 'name' => 'yf_price_includes', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_price_include_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_pricing_info', 'label' => 'Pricing Info Box', 'name' => 'yf_pricing_info', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_pricing_note', 'label' => 'Pricing Note', 'name' => 'yf_pricing_note', 'type' => 'textarea', 'rows' => 2 ),

        // ── WHY CHOOSE US ──
        array( 'key' => 'field_rl_yf_why_tab', 'label' => 'Why Choose Us', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_why_title', 'label' => 'Section Title', 'name' => 'yf_why_title', 'type' => 'text', 'default_value' => 'Official Yellow Fever Vaccination Centre' ),
        array( 'key' => 'field_rl_yf_why_subtitle', 'label' => 'Subtitle', 'name' => 'yf_why_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_why_cards', 'label' => 'Feature Cards', 'name' => 'yf_why_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── LOCATIONS ──
        array( 'key' => 'field_rl_yf_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_locations_title', 'label' => 'Section Title', 'name' => 'yf_locations_title', 'type' => 'text', 'default_value' => 'Visit Our Yellow Fever Vaccination Centres in Chislehurst' ),
        array(
            'key' => 'field_rl_yf_locations', 'label' => 'Location Cards', 'name' => 'yf_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_hours', 'label' => 'Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_parking', 'label' => 'Parking Info', 'name' => 'parking', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_directions_url', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_yf_loc_cta_text', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_locations_serving', 'label' => 'Serving Areas Text', 'name' => 'yf_locations_serving', 'type' => 'textarea', 'rows' => 2 ),

        // ── FOOTER CTA ──
        array( 'key' => 'field_rl_yf_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_cta_title', 'label' => 'CTA Title', 'name' => 'yf_cta_title', 'type' => 'text', 'default_value' => 'Protect Yourself Before You Travel' ),
        array( 'key' => 'field_rl_yf_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'yf_cta_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_yf_cta_badges', 'label' => 'CTA Badges', 'name' => 'yf_cta_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),

        // ── COUNTRIES (existing) ──
        array( 'key' => 'field_rl_yf_countries_tab', 'label' => 'Countries', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_yf_countries', 'label' => 'Country Cards', 'name' => 'yf_countries', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Country',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_country_name', 'label' => 'Country Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_country_requirement', 'label' => 'Requirement Level', 'name' => 'requirement', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'risk' => 'Risk Areas Only' ) ),
                array( 'key' => 'field_rl_yf_country_flag', 'label' => 'Flag Image', 'name' => 'flag', 'type' => 'image', 'return_format' => 'url' ),
            ),
        ),

        // ── FAQs (existing) ──
        array( 'key' => 'field_rl_yf_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_yf_faqs', 'label' => 'FAQs', 'name' => 'yf_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-yellow-fever.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// CONTACT PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_contact',
    'title'    => 'Contact Page',
    'fields'   => array(
        array( 'key' => 'field_rl_ct_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_ct_hero_title', 'label' => 'Hero Title', 'name' => 'ct_hero_title', 'type' => 'text', 'default_value' => 'Book an Appointment at Chislehurst Pharmacy Group' ),
        array( 'key' => 'field_rl_ct_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'ct_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'We\'re here to help with prescriptions, travel vaccinations, specialist consultations, and any health questions. Two Chislehurst locations, walk-ins welcome.' ),
        array( 'key' => 'field_rl_ct_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_ct_locations', 'label' => 'Location Cards', 'name' => 'ct_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_ct_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_email', 'label' => 'Email', 'name' => 'email', 'type' => 'email' ),
                array( 'key' => 'field_rl_ct_loc_hours', 'label' => 'Opening Hours', 'name' => 'hours', 'type' => 'textarea', 'rows' => 3 ),
                array( 'key' => 'field_rl_ct_loc_map_url', 'label' => 'Google Maps Embed URL', 'name' => 'map_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_ct_loc_directions', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_ct_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_ct_faqs', 'label' => 'FAQs', 'name' => 'ct_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_ct_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-contact.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// MEET THE TEAM PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_team',
    'title'    => 'Meet the Team Page',
    'fields'   => array(
        array( 'key' => 'field_rl_mt_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mt_hero_title', 'label' => 'Hero Title', 'name' => 'mt_hero_title', 'type' => 'text', 'default_value' => 'People Behind Your Exceptional Care' ),
        array( 'key' => 'field_rl_mt_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'mt_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Our team of GPhC-registered pharmacists, independent prescribers, and healthcare professionals are dedicated to delivering personalised, evidence-based care.' ),

        array( 'key' => 'field_rl_mt_lead_tab', 'label' => 'Lead Pharmacist', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mt_lead_photo', 'label' => 'Lead Pharmacist Photo', 'name' => 'mt_lead_photo', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Photo for the featured lead pharmacist section. Recommended: 600x750px.' ),
        array( 'key' => 'field_rl_mt_lead_name', 'label' => 'Lead Name', 'name' => 'mt_lead_name', 'type' => 'text', 'default_value' => 'Dilip Modhvadia' ),
        array( 'key' => 'field_rl_mt_lead_role', 'label' => 'Lead Role', 'name' => 'mt_lead_role', 'type' => 'text', 'default_value' => 'Lead Pharmacist & Independent Prescriber' ),
        array( 'key' => 'field_rl_mt_lead_bio', 'label' => 'Lead Bio', 'name' => 'mt_lead_bio', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'With over 15 years of experience, Dilip leads our clinical team across both locations in Chislehurst. As an Independent Prescriber, he specialises in weight loss treatment, travel health, and ear wax removal — and is well-known for his straightforward, no-jargon approach, no waiting lists, and his commitment to building a system designed to make you well.' ),
        array( 'key' => 'field_rl_mt_lead_quote', 'label' => 'Lead Quote', 'name' => 'mt_lead_quote', 'type' => 'textarea', 'rows' => 3, 'default_value' => '"My approach has always been the same — listen first, treat second. Every patient deserves a pharmacist who takes the time to understand not just their symptoms, but their life. That\'s the standard I hold our entire team to."' ),
        array( 'key' => 'field_rl_mt_lead_credentials', 'label' => 'Lead Credentials', 'name' => 'mt_lead_credentials', 'type' => 'text', 'default_value' => 'MPharm, Ind. Prescriber, GPhC Registered', 'instructions' => 'Comma-separated credential pills, e.g. "MPharm, Ind. Prescriber, GPhC Registered"' ),
        array( 'key' => 'field_rl_mt_lead_cta_text', 'label' => 'Lead CTA Button Text', 'name' => 'mt_lead_cta_text', 'type' => 'text', 'default_value' => 'Book with Dilip' ),
        array(
            'key' => 'field_rl_mt_lead_specialisms', 'label' => 'Lead Specialisms', 'name' => 'mt_lead_specialisms', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Specialism',
            'sub_fields' => array(
                array( 'key' => 'field_rl_mt_lead_spec_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_lead_spec_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_lead_spec_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'text', 'instructions' => 'Relative path, e.g. /weight-loss/' ),
            ),
        ),
        array( 'key' => 'field_rl_mt_lead_stat_num', 'label' => 'Stat Number', 'name' => 'mt_lead_stat_num', 'type' => 'text', 'default_value' => '15+' ),
        array( 'key' => 'field_rl_mt_lead_stat_label', 'label' => 'Stat Label', 'name' => 'mt_lead_stat_label', 'type' => 'text', 'default_value' => 'Years of Clinical Practice' ),

        array( 'key' => 'field_rl_mt_trust_tab', 'label' => 'Trust Bar', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mt_trust_visible', 'label' => 'Show Trust Bar', 'name' => 'mt_trust_visible', 'type' => 'true_false', 'default_value' => 1, 'ui' => 1, 'instructions' => 'Toggle off to hide the trust bar section (star rating, review count, etc.) from the page.' ),
        array( 'key' => 'field_rl_mt_trust_score', 'label' => 'Rating Score', 'name' => 'mt_trust_score', 'type' => 'text', 'default_value' => '4.8' ),
        array( 'key' => 'field_rl_mt_trust_count', 'label' => 'Review Count', 'name' => 'mt_trust_count', 'type' => 'text', 'default_value' => '400+ reviews' ),
        array( 'key' => 'field_rl_mt_trust_source', 'label' => 'Review Source', 'name' => 'mt_trust_source', 'type' => 'text', 'default_value' => 'Google & Trustpilot' ),
        array( 'key' => 'field_rl_mt_trust_headline', 'label' => 'Trust Headline', 'name' => 'mt_trust_headline', 'type' => 'text', 'default_value' => 'Trusted by Surrey.' ),
        array( 'key' => 'field_rl_mt_trust_text', 'label' => 'Trust Text', 'name' => 'mt_trust_text', 'type' => 'text', 'default_value' => "Your health, guided by one of Surrey's most experienced pharmacists." ),
        array( 'key' => 'field_rl_mt_trust_subtext', 'label' => 'Trust Subtext', 'name' => 'mt_trust_subtext', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Over 15 years of clinical experience, hundreds of 5-star reviews, and a proven commitment to face-to-face care that puts you first.' ),

        array( 'key' => 'field_rl_mt_quals_tab', 'label' => 'Qualifications', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_mt_quals', 'label' => 'Qualification Cards', 'name' => 'mt_quals', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Qualification',
            'sub_fields' => array(
                array( 'key' => 'field_rl_mt_qual_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_qual_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
            ),
        ),

        array( 'key' => 'field_rl_mt_members_tab', 'label' => 'Team Members', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_mt_members', 'label' => 'Team Members', 'name' => 'mt_members', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Team Member',
            'sub_fields' => array(
                array( 'key' => 'field_rl_mt_member_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_bio', 'label' => 'Bio', 'name' => 'bio', 'type' => 'textarea', 'rows' => 4 ),
                array( 'key' => 'field_rl_mt_member_photo', 'label' => 'Photo', 'name' => 'photo', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_mt_member_gphc', 'label' => 'GPhC Number', 'name' => 'gphc', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_qualifications', 'label' => 'Qualifications', 'name' => 'qualifications', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_specialisms', 'label' => 'Specialisms (Tags)', 'name' => 'specialisms', 'type' => 'text', 'instructions' => 'Comma-separated tags, e.g. "Weight Loss, Travel Health, Ind. Prescriber"' ),
                array( 'key' => 'field_rl_mt_member_is_featured', 'label' => 'Featured (Lead)?', 'name' => 'is_featured', 'type' => 'true_false', 'default_value' => 0, 'instructions' => 'Toggle on for the lead pharmacist card to show the "Lead Pharmacist" badge.' ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-team.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HEALTH HUB PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_health_hub',
    'title'    => 'Health Hub Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hh_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hh_hero_title', 'label' => 'Hero Title', 'name' => 'hh_hero_title', 'type' => 'text', 'default_value' => 'Expert insights on weight loss, travel health, and living your healthiest life' ),
        array( 'key' => 'field_rl_hh_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hh_hero_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Trusted advice from our GPhC-registered pharmacists. Evidence-based guidance to help you make informed health decisions across South East London.' ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-health-hub.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PRESCRIPTION SERVICES PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_prescriptions',
    'title'    => 'Prescription Services Page',
    'fields'   => array(
        array( 'key' => 'field_rl_rx_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_rx_hero_title', 'label' => 'Hero Title', 'name' => 'rx_hero_title', 'type' => 'text', 'default_value' => 'NHS & Private Prescription Services in South East London' ),
        array( 'key' => 'field_rl_rx_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'rx_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Free delivery, online ordering, and automatic refills. Your prescriptions delivered to your door with expert care from our GPhC-registered pharmacists.' ),
        array( 'key' => 'field_rl_rx_services_tab', 'label' => 'Services', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_rx_services', 'label' => 'Service Cards', 'name' => 'rx_services', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Service',
            'sub_fields' => array(
                array( 'key' => 'field_rl_rx_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_rx_svc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_rx_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_rx_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_rx_faqs', 'label' => 'FAQs', 'name' => 'rx_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_rx_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_rx_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-prescription-services.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// VITAMIN B12 PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_vitamin_b12',
    'title'    => 'Vitamin B12 Page',
    'fields'   => array(
        // ── HERO ──
        array( 'key' => 'field_rl_b12_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_hero_pill', 'label' => 'Hero Pill Text', 'name' => 'b12_hero_pill', 'type' => 'text', 'default_value' => 'Private Injection Service' ),
        array( 'key' => 'field_rl_b12_hero_title', 'label' => 'Hero Title', 'name' => 'b12_hero_title', 'type' => 'text', 'default_value' => 'Vitamin B12 Injections in South East London' ),
        array( 'key' => 'field_rl_b12_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'b12_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Boost your energy, lift brain fog, and address B12 deficiency with a fast-acting intramuscular injection. No GP referral needed. Walk-ins welcome at both Chislehurst pharmacies.' ),
        array( 'key' => 'field_rl_b12_hero_image', 'label' => 'Hero Image', 'name' => 'b12_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array(
            'key' => 'field_rl_b12_hero_trust', 'label' => 'Trust Strip Items', 'name' => 'b12_hero_trust', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_trust_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── STATS ──
        array( 'key' => 'field_rl_b12_stats_tab', 'label' => 'Stats', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_b12_stats', 'label' => 'Stat Cards', 'name' => 'b12_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── WHAT IS B12 ──
        array( 'key' => 'field_rl_b12_about_tab', 'label' => 'What is B12', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_about_image', 'label' => 'Section Image', 'name' => 'b12_about_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_b12_about_badge', 'label' => 'Image Badge Text', 'name' => 'b12_about_badge', 'type' => 'text', 'default_value' => '6–8 wks' ),
        array( 'key' => 'field_rl_b12_about_badge_desc', 'label' => 'Image Badge Description', 'name' => 'b12_about_badge_desc', 'type' => 'text', 'default_value' => 'How long a single injection can sustain optimal B12 levels' ),
        array( 'key' => 'field_rl_b12_about_eyebrow', 'label' => 'Eyebrow', 'name' => 'b12_about_eyebrow', 'type' => 'text', 'default_value' => 'THE ESSENTIAL VITAMIN' ),
        array( 'key' => 'field_rl_b12_about_heading', 'label' => 'Heading', 'name' => 'b12_about_heading', 'type' => 'text', 'default_value' => 'Why Vitamin B12 matters more than you think' ),
        array( 'key' => 'field_rl_b12_about_intro', 'label' => 'Intro Text', 'name' => 'b12_about_intro', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_b12_about_facts', 'label' => 'Fact Cards', 'name' => 'b12_about_facts', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Fact',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_fact_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_fact_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),

        // ── SYMPTOMS ──
        array( 'key' => 'field_rl_b12_symptoms_tab', 'label' => 'Symptoms', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_symptoms_pill', 'label' => 'Pill Text', 'name' => 'b12_symptoms_pill', 'type' => 'text', 'default_value' => 'Recognise the Signs' ),
        array( 'key' => 'field_rl_b12_symptoms_title', 'label' => 'Title', 'name' => 'b12_symptoms_title', 'type' => 'text', 'default_value' => 'Could you be B12 deficient?' ),
        array( 'key' => 'field_rl_b12_symptoms_desc', 'label' => 'Description', 'name' => 'b12_symptoms_desc', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_symptoms_cards', 'label' => 'Symptom Cards', 'name' => 'b12_symptoms_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Symptom',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_symp_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_symp_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),
        array( 'key' => 'field_rl_b12_at_risk_note', 'label' => 'At-Risk Note', 'name' => 'b12_at_risk_note', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── INJECTION VS TABLETS ──
        array( 'key' => 'field_rl_b12_compare_tab', 'label' => 'Injection vs Tablets', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_compare_title', 'label' => 'Title', 'name' => 'b12_compare_title', 'type' => 'text', 'default_value' => 'Injection vs oral supplements' ),
        array( 'key' => 'field_rl_b12_compare_subtitle', 'label' => 'Subtitle', 'name' => 'b12_compare_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_injection_pros', 'label' => 'Injection Advantages', 'name' => 'b12_injection_pros', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_b12_inj_pro_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array(
            'key' => 'field_rl_b12_tablet_cons', 'label' => 'Tablet Disadvantages', 'name' => 'b12_tablet_cons', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_b12_tab_con_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),

        // ── HOW IT WORKS ──
        array( 'key' => 'field_rl_b12_process_tab', 'label' => 'How It Works', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_process_title', 'label' => 'Title', 'name' => 'b12_process_title', 'type' => 'text', 'default_value' => 'Your B12 injection appointment' ),
        array( 'key' => 'field_rl_b12_process_subtitle', 'label' => 'Subtitle', 'name' => 'b12_process_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_process_steps', 'label' => 'Steps', 'name' => 'b12_process_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_step_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_b12_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                array( 'key' => 'field_rl_b12_step_meta', 'label' => 'Meta Note', 'name' => 'meta', 'type' => 'text' ),
            ),
        ),

        // ── BENEFITS ──
        array( 'key' => 'field_rl_b12_benefits_tab', 'label' => 'Benefits', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_benefits_title', 'label' => 'Title', 'name' => 'b12_benefits_title', 'type' => 'text', 'default_value' => 'Benefits most people notice' ),
        array( 'key' => 'field_rl_b12_benefits_subtitle', 'label' => 'Subtitle', 'name' => 'b12_benefits_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_benefits_cards', 'label' => 'Benefit Cards', 'name' => 'b12_benefits_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Benefit',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_benefit_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_benefit_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),

        // ── PRICING ──
        array( 'key' => 'field_rl_b12_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_pricing_pill', 'label' => 'Pill Text', 'name' => 'b12_pricing_pill', 'type' => 'text', 'default_value' => 'Transparent Pricing' ),
        array( 'key' => 'field_rl_b12_pricing_title', 'label' => 'Title', 'name' => 'b12_pricing_title', 'type' => 'text', 'default_value' => 'Simple, affordable B12 injection pricing' ),
        array( 'key' => 'field_rl_b12_pricing_desc', 'label' => 'Description', 'name' => 'b12_pricing_desc', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_pricing', 'label' => 'Pricing Cards', 'name' => 'b12_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Option',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_price_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_price_featured', 'label' => 'Featured?', 'name' => 'featured', 'type' => 'true_false', 'default_value' => 0 ),
                array( 'key' => 'field_rl_b12_price_badge', 'label' => 'Badge Text', 'name' => 'badge', 'type' => 'text', 'instructions' => 'e.g. "Best Value"' ),
            ),
        ),
        array( 'key' => 'field_rl_b12_pricing_note', 'label' => 'Pricing Note', 'name' => 'b12_pricing_note', 'type' => 'textarea', 'rows' => 2 ),

        // ── LOCATIONS ──
        array( 'key' => 'field_rl_b12_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_locations_title', 'label' => 'Title', 'name' => 'b12_locations_title', 'type' => 'text', 'default_value' => 'Two South East London locations' ),
        array( 'key' => 'field_rl_b12_locations_subtitle', 'label' => 'Subtitle', 'name' => 'b12_locations_subtitle', 'type' => 'textarea', 'rows' => 2 ),

        // ── FAQs (existing) ──
        array( 'key' => 'field_rl_b12_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_b12_faqs', 'label' => 'FAQs', 'name' => 'b12_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),

        // ── FOOTER CTA ──
        array( 'key' => 'field_rl_b12_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_cta_title', 'label' => 'CTA Title', 'name' => 'b12_cta_title', 'type' => 'text', 'default_value' => 'Feel the difference a B12 injection makes' ),
        array( 'key' => 'field_rl_b12_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'b12_cta_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_b12_cta_badges', 'label' => 'CTA Badges', 'name' => 'b12_cta_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array( array( 'key' => 'field_rl_b12_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-vitamin-b12.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// INDIA TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_india',
    'title'    => 'India Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_india_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_india_hero_badge', 'label' => 'Hero Badge Text', 'name' => 'india_hero_badge', 'type' => 'text', 'default_value' => 'India Travel Health' ),
        array( 'key' => 'field_rl_india_hero_image', 'label' => 'Hero Image', 'name' => 'india_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_india_hero_title', 'label' => 'Hero Title', 'name' => 'india_hero_title', 'type' => 'text', 'default_value' => 'India Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_india_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'india_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your India trip. Same-day appointments available at both our Chislehurst locations.' ),
        array( 'key' => 'field_rl_india_hero_cta2_label', 'label' => 'Second CTA — Label', 'name' => 'india_hero_cta2_label', 'type' => 'text', 'default_value' => 'Check What Vaccines You Need' ),
        array( 'key' => 'field_rl_india_hero_cta2_url', 'label' => 'Second CTA — URL', 'name' => 'india_hero_cta2_url', 'type' => 'text', 'default_value' => '#vaccines' ),
        array( 'key' => 'field_rl_india_hero_trust_1', 'label' => 'Trust Point 1', 'name' => 'india_hero_trust_1', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
        array( 'key' => 'field_rl_india_hero_trust_2', 'label' => 'Trust Point 2', 'name' => 'india_hero_trust_2', 'type' => 'text', 'default_value' => 'Same-Day Appointments' ),
        array( 'key' => 'field_rl_india_hero_trust_3', 'label' => 'Trust Point 3', 'name' => 'india_hero_trust_3', 'type' => 'text', 'default_value' => 'Expert Pharmacist Advice' ),
        array( 'key' => 'field_rl_india_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_india_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'india_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_india_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_india_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_india_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_india_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_india_price_essential', 'label' => 'Essential Package Price', 'name' => 'india_price_essential', 'type' => 'text', 'default_value' => '£TBC', 'instructions' => 'e.g. "£120" or "£TBC" while awaiting confirmation.' ),
        array( 'key' => 'field_rl_india_price_comprehensive', 'label' => 'Comprehensive Package Price', 'name' => 'india_price_comprehensive', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_hepa', 'label' => 'Hepatitis A Price', 'name' => 'india_price_hepa', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_hepb', 'label' => 'Hepatitis B (per dose) Price', 'name' => 'india_price_hepb', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_typhoid', 'label' => 'Typhoid Price', 'name' => 'india_price_typhoid', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_je', 'label' => 'Japanese Encephalitis (per dose) Price', 'name' => 'india_price_je', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_rabies', 'label' => 'Rabies (per dose) Price', 'name' => 'india_price_rabies', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_dtp', 'label' => 'DTP Booster Price', 'name' => 'india_price_dtp', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_price_antimalarial', 'label' => 'Antimalarial Tablets Price', 'name' => 'india_price_antimalarial', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_india_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_india_faqs', 'label' => 'FAQs', 'name' => 'india_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_india_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-india.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// GAMBIA TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_gambia',
    'title'    => 'Gambia Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_gambia_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_gambia_hero_badge', 'label' => 'Hero Badge Text', 'name' => 'gambia_hero_badge', 'type' => 'text', 'default_value' => 'Gambia Travel Health' ),
        array( 'key' => 'field_rl_gambia_hero_image', 'label' => 'Hero Image', 'name' => 'gambia_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_gambia_hero_title', 'label' => 'Hero Title', 'name' => 'gambia_hero_title', 'type' => 'text', 'default_value' => 'Gambia Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_gambia_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'gambia_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your Gambia trip. Same-day appointments available at both our Chislehurst locations.' ),
        array( 'key' => 'field_rl_gambia_hero_cta2_label', 'label' => 'Second CTA — Label', 'name' => 'gambia_hero_cta2_label', 'type' => 'text', 'default_value' => 'Find Your Nearest Location' ),
        array( 'key' => 'field_rl_gambia_hero_cta2_url', 'label' => 'Second CTA — URL', 'name' => 'gambia_hero_cta2_url', 'type' => 'text', 'default_value' => '/contact/', 'instructions' => 'Can be a full URL, a relative path like /contact/, or an on-page anchor like #booking.' ),
        array( 'key' => 'field_rl_gambia_hero_trust_1', 'label' => 'Trust Point 1', 'name' => 'gambia_hero_trust_1', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
        array( 'key' => 'field_rl_gambia_hero_trust_2', 'label' => 'Trust Point 2', 'name' => 'gambia_hero_trust_2', 'type' => 'text', 'default_value' => 'Same-Day Appointments' ),
        array( 'key' => 'field_rl_gambia_hero_trust_3', 'label' => 'Trust Point 3', 'name' => 'gambia_hero_trust_3', 'type' => 'text', 'default_value' => 'Expert Pharmacist Advice' ),
        array( 'key' => 'field_rl_gambia_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_gambia_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'gambia_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_gambia_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_gambia_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_gambia_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_gambia_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_gambia_price_essential', 'label' => 'Essential Package Price', 'name' => 'gambia_price_essential', 'type' => 'text', 'default_value' => '£TBC', 'instructions' => 'e.g. "£120" or "£TBC" while awaiting confirmation.' ),
        array( 'key' => 'field_rl_gambia_price_comprehensive', 'label' => 'Comprehensive Package Price', 'name' => 'gambia_price_comprehensive', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_hepa', 'label' => 'Hepatitis A Price', 'name' => 'gambia_price_hepa', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_hepb', 'label' => 'Hepatitis B (per dose) Price', 'name' => 'gambia_price_hepb', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_typhoid', 'label' => 'Typhoid Price', 'name' => 'gambia_price_typhoid', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_menacwy', 'label' => 'Meningitis ACWY Price', 'name' => 'gambia_price_menacwy', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_rabies', 'label' => 'Rabies (per dose) Price', 'name' => 'gambia_price_rabies', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_dtp', 'label' => 'DTP Booster Price', 'name' => 'gambia_price_dtp', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_price_antimalarial', 'label' => 'Antimalarial Tablets Price', 'name' => 'gambia_price_antimalarial', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_gambia_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_gambia_faqs', 'label' => 'FAQs', 'name' => 'gambia_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_gambia_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-gambia.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PHARMACY SETTINGS — CONTACT & LOCATIONS
// =============================================================================
acf_add_local_field_group( array(
    'key'    => 'group_rl_contact_locations',
    'title'  => 'Contact & Locations',
    'fields' => array(
        array( 'key' => 'field_rl_opt_group_email', 'label' => 'Group Email', 'name' => 'pharmacy_group_email', 'type' => 'email', 'default_value' => '' ),
        array( 'key' => 'field_rl_opt_booking_url', 'label' => 'Online Booking URL', 'name' => 'pharmacy_booking_url', 'type' => 'url', 'instructions' => 'Main booking link used across all pages' ),
        array( 'key' => 'field_rl_opt_patients_treated', 'label' => 'Patients Treated (stat)', 'name' => 'pharmacy_patients_treated', 'type' => 'text', 'default_value' => '10,000+' ),
        array(
            'key' => 'field_rl_opt_locations', 'label' => 'Locations', 'name' => 'pharmacy_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_opt_loc_name', 'label' => 'Location Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_opt_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_opt_loc_email', 'label' => 'Email', 'name' => 'email', 'type' => 'email' ),
                array( 'key' => 'field_rl_opt_loc_address_1', 'label' => 'Address Line 1', 'name' => 'address_line_1', 'type' => 'text' ),
                array( 'key' => 'field_rl_opt_loc_address_2', 'label' => 'Address Line 2', 'name' => 'address_line_2', 'type' => 'text' ),
                array( 'key' => 'field_rl_opt_loc_postcode', 'label' => 'Postcode', 'name' => 'postcode', 'type' => 'text' ),
                array( 'key' => 'field_rl_opt_loc_directions_url', 'label' => 'Google Maps Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_opt_loc_maps_embed', 'label' => 'Google Maps Embed URL', 'name' => 'maps_embed_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_opt_loc_parking', 'label' => 'Parking Info', 'name' => 'parking', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_opt_loc_store_image', 'label' => 'Storefront Photo', 'name' => 'store_image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_opt_loc_hours_weekday', 'label' => 'Weekday Hours', 'name' => 'hours_weekday', 'type' => 'text', 'default_value' => 'Mon–Fri: 9am–6pm' ),
                array( 'key' => 'field_rl_opt_loc_hours_saturday', 'label' => 'Saturday Hours', 'name' => 'hours_saturday', 'type' => 'text', 'default_value' => 'Sat: 9am–1pm' ),
                array( 'key' => 'field_rl_opt_loc_hours_sunday', 'label' => 'Sunday Hours', 'name' => 'hours_sunday', 'type' => 'text', 'default_value' => 'Sun: Closed' ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'contact-locations' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PHARMACY SETTINGS — REGISTRATION & COMPLIANCE
// =============================================================================
acf_add_local_field_group( array(
    'key'    => 'group_rl_registration',
    'title'  => 'Registration & Compliance',
    'fields' => array(
        array( 'key' => 'field_rl_opt_gphc_number', 'label' => 'GPhC Pharmacy Number', 'name' => 'gphc_registration', 'type' => 'text' ),
        array( 'key' => 'field_rl_opt_company_reg', 'label' => 'Company Registration Number', 'name' => 'company_registration', 'type' => 'text' ),
        array( 'key' => 'field_rl_opt_established_year', 'label' => 'Established Year', 'name' => 'established_year', 'type' => 'text', 'default_value' => '2010' ),
        array( 'key' => 'field_rl_opt_superintendent', 'label' => 'Superintendent Pharmacist', 'name' => 'superintendent_pharmacist', 'type' => 'text', 'default_value' => 'Sumeet Banker' ),
        array( 'key' => 'field_rl_opt_superintendent_gphc', 'label' => 'Superintendent GPhC Number', 'name' => 'superintendent_gphc_number', 'type' => 'text' ),
        array( 'key' => 'field_rl_opt_gphc_verify_url', 'label' => 'GPhC Verify URL', 'name' => 'gphc_verify_url', 'type' => 'url', 'instructions' => 'Link to your GPhC register entry' ),
        array( 'key' => 'field_rl_opt_nathnac_registered', 'label' => 'NaTHNaC Registered?', 'name' => 'nathnac_registered', 'type' => 'true_false', 'default_value' => 1, 'instructions' => 'Yellow Fever Vaccination Centre status' ),
        array( 'key' => 'field_rl_opt_reviewer_url', 'label' => 'Clinical Reviewer Profile URL', 'name' => 'reviewer_profile_url', 'type' => 'url' ),
    ),
    'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'registration-compliance' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PHARMACY SETTINGS — SOCIAL MEDIA
// =============================================================================
acf_add_local_field_group( array(
    'key'    => 'group_rl_social_media',
    'title'  => 'Social Media',
    'fields' => array(
        array( 'key' => 'field_rl_opt_social_facebook', 'label' => 'Facebook URL', 'name' => 'social_facebook', 'type' => 'url' ),
        array( 'key' => 'field_rl_opt_social_instagram', 'label' => 'Instagram URL', 'name' => 'social_instagram', 'type' => 'url' ),
        array( 'key' => 'field_rl_opt_social_twitter', 'label' => 'Twitter / X URL', 'name' => 'social_twitter', 'type' => 'url' ),
        array( 'key' => 'field_rl_opt_social_linkedin', 'label' => 'LinkedIn URL', 'name' => 'social_linkedin', 'type' => 'url' ),
        array( 'key' => 'field_rl_opt_social_tiktok', 'label' => 'TikTok URL', 'name' => 'social_tiktok', 'type' => 'url' ),
    ),
    'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'social-media' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PHARMACY SETTINGS — BRANDING
// =============================================================================
acf_add_local_field_group( array(
    'key'    => 'group_rl_branding',
    'title'  => 'Branding',
    'fields' => array(
        array( 'key' => 'field_rl_opt_top_banner', 'label' => 'Top Banner Text', 'name' => 'top_banner_text', 'type' => 'text', 'default_value' => 'GPhC-registered pharmacists across two Chislehurst locations · No GP referral needed · Same-day appointments available', 'instructions' => 'Text shown in the sticky banner across all pages.' ),
        array( 'key' => 'field_rl_opt_pharmacy_name', 'label' => 'Pharmacy Group Name', 'name' => 'pharmacy_name', 'type' => 'text', 'default_value' => 'Rey London Pharmacy' ),
        array( 'key' => 'field_rl_opt_pharmacy_logo', 'label' => 'Logo', 'name' => 'pharmacy_logo', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_opt_pharmacy_logo_dark', 'label' => 'Logo (Dark/White)', 'name' => 'pharmacy_logo_dark', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'For dark backgrounds / footer' ),
        array( 'key' => 'field_rl_opt_footer_tagline', 'label' => 'Footer Tagline', 'name' => 'footer_tagline', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Your trusted healthcare partner in London. Providing expert pharmaceutical care and personalized health services since 2010.' ),
        array( 'key' => 'field_rl_opt_google_rating', 'label' => 'Google Rating', 'name' => 'google_rating', 'type' => 'number', 'default_value' => '4.9', 'step' => 0.1, 'min' => 0, 'max' => 5 ),
        array( 'key' => 'field_rl_opt_google_review_count', 'label' => 'Google Review Count', 'name' => 'google_review_count', 'type' => 'text', 'default_value' => '200+' ),
        array( 'key' => 'field_rl_opt_google_review_url', 'label' => 'Google Review URL', 'name' => 'google_review_url', 'type' => 'url', 'instructions' => 'Link to leave a Google review' ),
    ),
    'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'branding' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PHARMACY SETTINGS — NAVIGATION
// =============================================================================
acf_add_local_field_group( array(
    'key'    => 'group_rl_navigation',
    'title'  => 'Navigation',
    'fields' => array(
        // ── Top-Level Menu Items ──
        array( 'key' => 'field_rl_nav_toplevel_tab', 'label' => 'Top-Level Menu', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_nav_items', 'label' => 'Menu Items', 'name' => 'nav_menu_items', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Menu Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_item_show', 'label' => 'Show in Menu', 'name' => 'show', 'type' => 'true_false', 'default_value' => 1 ),
                array( 'key' => 'field_rl_nav_item_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_item_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ),
                array( 'key' => 'field_rl_nav_item_has_dropdown', 'label' => 'Has Dropdown?', 'name' => 'has_dropdown', 'type' => 'true_false', 'default_value' => 0 ),
            ),
        ),

        // ── Dropdown Sub-Links ──
        array( 'key' => 'field_rl_nav_dropdowns_tab', 'label' => 'Dropdown Sub-Links', 'type' => 'tab' ),
        array( 'key' => 'field_rl_nav_dropdowns_msg', 'label' => '', 'name' => '', 'type' => 'message', 'message' => 'Configure dropdown sub-links for menu items that have dropdowns enabled. Each section corresponds to a top-level menu item.' ),

        // Weight Loss dropdown
        array( 'key' => 'field_rl_nav_dd_wl_tab', 'label' => 'Weight Loss', 'type' => 'tab', 'placement' => 'left' ),
        array(
            'key' => 'field_rl_nav_dd_wl_links', 'label' => 'Weight Loss Links', 'name' => 'nav_dd_wl_links', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Link',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_dd_wl_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_dd_wl_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),

        // Travel Health dropdown
        array( 'key' => 'field_rl_nav_dd_th_tab', 'label' => 'Travel Health', 'type' => 'tab', 'placement' => 'left' ),
        array(
            'key' => 'field_rl_nav_dd_th_vaccinations', 'label' => 'Vaccinations Links', 'name' => 'nav_dd_th_vaccinations', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Link',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_dd_th_v_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_dd_th_v_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
        array(
            'key' => 'field_rl_nav_dd_th_destinations', 'label' => 'Popular Destinations', 'name' => 'nav_dd_th_destinations', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Destination',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_dd_th_d_name', 'label' => 'Country', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_dd_th_d_flag', 'label' => 'Flag URL', 'name' => 'flag_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_nav_dd_th_d_url', 'label' => 'Page URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),

        // Vaccines dropdown
        array( 'key' => 'field_rl_nav_dd_vac_tab', 'label' => 'Vaccines', 'type' => 'tab', 'placement' => 'left' ),
        array(
            'key' => 'field_rl_nav_dd_vac_links', 'label' => 'Vaccine Links', 'name' => 'nav_dd_vac_links', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Link',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_dd_vac_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_dd_vac_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),

        // About dropdown
        array( 'key' => 'field_rl_nav_dd_about_tab', 'label' => 'About', 'type' => 'tab', 'placement' => 'left' ),
        array(
            'key' => 'field_rl_nav_dd_about_links', 'label' => 'About Links', 'name' => 'nav_dd_about_links', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Link',
            'sub_fields' => array(
                array( 'key' => 'field_rl_nav_dd_about_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'field_rl_nav_dd_about_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'navigation' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

/* ================================================================
   NHS PHARMACY FIRST PAGE
   ================================================================ */
acf_add_local_field_group( array(
    'key' => 'group_rl_pharmacy_first',
    'title' => 'NHS Pharmacy First',
    'fields' => array(

        // ── HERO ──
        array( 'key' => 'field_rl_pf_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_hero_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'pf_hero_eyebrow', 'type' => 'text', 'default_value' => 'NHS Pharmacy First  |  Free NHS Treatment' ),
        array( 'key' => 'field_rl_pf_hero_title', 'label' => 'Hero Title', 'name' => 'pf_hero_title', 'type' => 'text', 'default_value' => 'Free NHS Treatment in Chislehurst. No GP Appointment Needed.' ),
        array( 'key' => 'field_rl_pf_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'pf_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Under the NHS Pharmacy First scheme, our pharmacists at Chislehurst Pharmacy Group can assess and treat seven common conditions — completely free of charge. No referral, no waiting weeks for a GP. Walk in or book online and get treated the same day.' ),
        array( 'key' => 'field_rl_pf_hero_image', 'label' => 'Hero Image', 'name' => 'pf_hero_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default shield illustration' ),
        array( 'key' => 'field_rl_pf_hero_cta1_text', 'label' => 'Button 1 Text', 'name' => 'pf_hero_cta1_text', 'type' => 'text', 'default_value' => 'Book a Pharmacy First Appointment' ),
        array( 'key' => 'field_rl_pf_hero_cta1_url', 'label' => 'Button 1 URL', 'name' => 'pf_hero_cta1_url', 'type' => 'url', 'default_value' => '/book-appointment/' ),
        array( 'key' => 'field_rl_pf_hero_cta2_text', 'label' => 'Button 2 Text', 'name' => 'pf_hero_cta2_text', 'type' => 'text', 'default_value' => 'Learn About the Seven Conditions' ),
        array( 'key' => 'field_rl_pf_hero_cta2_url', 'label' => 'Button 2 URL', 'name' => 'pf_hero_cta2_url', 'type' => 'url', 'default_value' => '#conditions' ),
        array(
            'key' => 'field_rl_pf_hero_trust_badges', 'label' => 'Hero Trust Badges', 'name' => 'pf_hero_trust_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_trust_badge_text', 'label' => 'Badge Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── STATS BAR ──
        array( 'key' => 'field_rl_pf_stats_tab', 'label' => 'Stats Bar', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_pf_stats_cards', 'label' => 'Stat Cards', 'name' => 'pf_stats_cards', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_stat_stat', 'label' => 'Stat', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── CONDITIONS ──
        array( 'key' => 'field_rl_pf_conditions_tab', 'label' => 'Conditions', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_conditions_eyebrow', 'label' => 'Eyebrow', 'name' => 'pf_conditions_eyebrow', 'type' => 'text', 'default_value' => 'CONDITIONS WE TREAT' ),
        array( 'key' => 'field_rl_pf_conditions_title', 'label' => 'Section Title', 'name' => 'pf_conditions_title', 'type' => 'text', 'default_value' => 'Seven Common Conditions. Treated Free. Today.' ),
        array( 'key' => 'field_rl_pf_conditions_subtitle', 'label' => 'Subtitle', 'name' => 'pf_conditions_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_pf_conditions', 'label' => 'Conditions', 'name' => 'pf_conditions', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Condition',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_cond_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_cond_age', 'label' => 'Age Range', 'name' => 'age_range', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_cond_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── LIFESTYLE BANNER ──
        array( 'key' => 'field_rl_pf_banner_tab', 'label' => 'Lifestyle Banner', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_banner_image', 'label' => 'Banner Image', 'name' => 'pf_banner_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Full-width lifestyle photo (recommended 1600px wide). Shows between Conditions and How It Works.' ),
        array( 'key' => 'field_rl_pf_banner_title', 'label' => 'Banner Caption Title', 'name' => 'pf_banner_title', 'type' => 'text', 'default_value' => 'NHS Pharmacy First' ),
        array( 'key' => 'field_rl_pf_banner_text', 'label' => 'Banner Caption Text', 'name' => 'pf_banner_text', 'type' => 'text', 'default_value' => 'Free treatment for 7 common conditions — no GP referral needed' ),

        // ── HOW IT WORKS ──
        array( 'key' => 'field_rl_pf_hiw_tab', 'label' => 'How It Works', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_hiw_eyebrow', 'label' => 'Eyebrow', 'name' => 'pf_hiw_eyebrow', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
        array( 'key' => 'field_rl_pf_hiw_title', 'label' => 'Section Title', 'name' => 'pf_hiw_title', 'type' => 'text', 'default_value' => 'Three Steps to Free NHS Treatment' ),
        array( 'key' => 'field_rl_pf_hiw_subtitle', 'label' => 'Subtitle', 'name' => 'pf_hiw_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_pf_hiw_steps', 'label' => 'Steps', 'name' => 'pf_hiw_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── ELIGIBILITY ──
        array( 'key' => 'field_rl_pf_elig_tab', 'label' => 'Eligibility', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_elig_eyebrow', 'label' => 'Eyebrow', 'name' => 'pf_elig_eyebrow', 'type' => 'text', 'default_value' => 'WHO IS ELIGIBLE?' ),
        array( 'key' => 'field_rl_pf_elig_title', 'label' => 'Title', 'name' => 'pf_elig_title', 'type' => 'text', 'default_value' => 'Is Pharmacy First Right for You?' ),
        array( 'key' => 'field_rl_pf_elig_body', 'label' => 'Body Content', 'name' => 'pf_elig_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── FAQs ──
        // ── LOCATIONS ──
        array( 'key' => 'field_rl_pf_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_locations_title', 'label' => 'Section Title', 'name' => 'pf_locations_title', 'type' => 'text', 'default_value' => 'Visit Us at Either Chislehurst Location' ),
        array(
            'key' => 'field_rl_pf_locations', 'label' => 'Locations', 'name' => 'pf_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_loc_hours', 'label' => 'Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_loc_directions', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_pf_locations_serving', 'label' => 'Serving Text', 'name' => 'pf_locations_serving', 'type' => 'textarea', 'rows' => 2 ),

        // ── FAQs ──
        array( 'key' => 'field_rl_pf_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_faq_title', 'label' => 'FAQ Title', 'name' => 'pf_faq_title', 'type' => 'text', 'default_value' => 'Pharmacy First — Your Questions Answered' ),
        array(
            'key' => 'field_rl_pf_faqs', 'label' => 'FAQs', 'name' => 'pf_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_pf_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_pf_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),

        // ── FOOTER CTA ──
        array( 'key' => 'field_rl_pf_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_cta_title', 'label' => 'CTA Title', 'name' => 'pf_cta_title', 'type' => 'text', 'default_value' => 'Don\'t Wait Weeks for a GP. Get Treated Today.' ),
        array( 'key' => 'field_rl_pf_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'pf_cta_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_pf_cta_cta1_text', 'label' => 'Button 1 Text', 'name' => 'pf_cta_cta1_text', 'type' => 'text', 'default_value' => 'Book a Pharmacy First Appointment' ),
        array( 'key' => 'field_rl_pf_cta_cta1_url', 'label' => 'Button 1 URL', 'name' => 'pf_cta_cta1_url', 'type' => 'url', 'default_value' => '/book-appointment/' ),
        array( 'key' => 'field_rl_pf_cta_cta2_text', 'label' => 'Button 2 Text', 'name' => 'pf_cta_cta2_text', 'type' => 'text', 'default_value' => 'Find Your Nearest Location' ),
        array( 'key' => 'field_rl_pf_cta_cta2_url', 'label' => 'Button 2 URL', 'name' => 'pf_cta_cta2_url', 'type' => 'url', 'default_value' => '/contact/' ),

        // ── DISCLAIMER ──
        array( 'key' => 'field_rl_pf_disclaimer_tab', 'label' => 'Disclaimer', 'type' => 'tab' ),
        array( 'key' => 'field_rl_pf_disclaimer', 'label' => 'Disclaimer Text', 'name' => 'pf_disclaimer', 'type' => 'textarea', 'rows' => 3 ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-pharmacy-first.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

/* ================================================================
   MALARIA PREVENTION PAGE
   ================================================================ */
acf_add_local_field_group( array(
    'key' => 'group_rl_malaria', 'title' => 'Malaria Prevention Page', 'fields' => array(
        // ── HERO ──
        array( 'key' => 'field_rl_mal_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mal_hero_eyebrow', 'label' => 'Eyebrow', 'name' => 'mal_hero_eyebrow', 'type' => 'text', 'default_value' => 'Travel Health · Chislehurst' ),
        array( 'key' => 'field_rl_mal_hero_title', 'label' => 'Hero Title (HTML allowed)', 'name' => 'mal_hero_title', 'type' => 'text', 'default_value' => 'Malaria Prevention in Chislehurst — Antimalarial Tablets Prescribed Same Day' ),
        array( 'key' => 'field_rl_mal_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'mal_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Protect yourself against malaria with expert pharmacist advice and same-day prescriptions. We assess your destination, recommend the right antimalarial, and dispense your tablets at the same appointment — no GP referral, no waiting.' ),
        array( 'key' => 'field_rl_mal_hero_image', 'label' => 'Hero Image', 'name' => 'mal_hero_image', 'type' => 'image', 'return_format' => 'url' ),

        // ── PRICING ──
        array( 'key' => 'field_rl_mal_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mal_price_consultation', 'label' => 'Consultation + Prescription Price', 'name' => 'mal_price_consultation', 'type' => 'text', 'default_value' => 'Price to be confirmed', 'instructions' => 'The main consultation fee shown on the primary pricing card.' ),
        array( 'key' => 'field_rl_mal_price_malarone', 'label' => 'Malarone — Per Tablet Price', 'name' => 'mal_price_malarone', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_mal_price_doxycycline', 'label' => 'Doxycycline — Per Capsule Price', 'name' => 'mal_price_doxycycline', 'type' => 'text', 'default_value' => '£TBC' ),
        array( 'key' => 'field_rl_mal_price_mefloquine', 'label' => 'Mefloquine — Per Tablet Price', 'name' => 'mal_price_mefloquine', 'type' => 'text', 'default_value' => '£TBC' ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-malaria.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );
