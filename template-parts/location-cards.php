<?php
/**
 * Template Part: Location Cards (standardised)
 *
 * Usage: get_template_part( 'template-parts/location-cards', null, $args );
 *
 * Optional $args keys:
 *   'cta_prefix'  — Button text prefix (default: 'Book at')
 *   'cta_url'     — Booking URL (default: contact page #book-appointment)
 *   'show_map'    — Whether to show embedded maps (default: true)
 *
 * @package Rey_London
 */

$defaults = array(
    'cta_prefix' => 'Book at',
    'cta_url'    => 'https://chislehurstpharmacygroup.kinsta.cloud/contact-page/#book-appointment',
    'show_map'   => true,
);
$args = wp_parse_args( $args ?? array(), $defaults );

// SVG icons
$icon_pin   = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>';
$icon_phone = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
$icon_clock = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>';
$icon_ext   = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>';
$icon_arrow = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>';
$icon_map   = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"/><line x1="8" y1="2" x2="8" y2="18"/><line x1="16" y1="6" x2="16" y2="22"/></svg>';

// Location data
$locations = array(
    array(
        'name'      => 'Chislehurst Pharmacy',
        'address'   => '59 Chislehurst Rd, Chislehurst BR7 5NP',
        'phone'     => '020 8295 0017',
        'phone_raw' => '02082950017',
        'hours'     => 'Mon–Fri: 9am–6pm | Sat: 9am–1pm | Sun: Closed',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.7526655406878!2d0.050895488534915226!3d51.40759914526407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8abb7aad30f47%3A0xbf60f9a0bdac20e!2sChislehurst%20Pharmacy%20%26%20Travel%20Clinic!5e0!3m2!1sen!2suk!4v1776151254609!5m2!1sen!2suk',
        'map_link'  => 'https://maps.google.com/?q=59+Chislehurst+Rd+Chislehurst+BR7+5NP',
    ),
    array(
        'name'      => 'Pond Pharmacy',
        'address'   => '59 High St, Chislehurst BR7 5AF',
        'phone'     => '020 8467 3158',
        'phone_raw' => '02084673158',
        'hours'     => 'Mon–Fri: 8:30am–6:30pm | Sat: 9am–2pm | Sun: Closed',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.175332813155!2d0.0647090766147177!3d51.4182057717932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ab20b9bfd2d5%3A0x92c9dc4d9fa96c0e!2sPond%20Pharmacy%20-%20Vaccinations%20and%20Diagnostics%20Clinic!5e0!3m2!1sen!2suk!4v1776151216113!5m2!1sen!2suk',
        'map_link'  => 'https://maps.google.com/?q=59+High+St+Chislehurst+BR7+5AF',
    ),
);
?>

<div class="locations-grid">
  <?php foreach ( $locations as $loc ) : ?>
  <div class="location-card">
    <div class="location-content">
      <h3><?php echo esc_html( $loc['name'] ); ?></h3>
      <div class="location-details">
        <div class="detail-item">
          <span class="detail-icon"><?php echo $icon_pin; ?></span>
          <div class="detail-text">
            <span class="detail-label">Address</span>
            <p><?php echo esc_html( $loc['address'] ); ?></p>
          </div>
        </div>
        <div class="detail-item">
          <span class="detail-icon"><?php echo $icon_phone; ?></span>
          <div class="detail-text">
            <span class="detail-label">Phone</span>
            <a href="tel:<?php echo esc_attr( $loc['phone_raw'] ); ?>"><?php echo esc_html( $loc['phone'] ); ?></a>
          </div>
        </div>
        <div class="detail-item">
          <span class="detail-icon"><?php echo $icon_clock; ?></span>
          <div class="detail-text">
            <span class="detail-label">Hours</span>
            <p><?php echo esc_html( $loc['hours'] ); ?></p>
          </div>
        </div>
      </div>

      <?php if ( $args['show_map'] ) : ?>
      <div class="location-map-wrap">
        <a href="<?php echo esc_url( $loc['map_link'] ); ?>" target="_blank" rel="noopener" class="location-map-link">
          <?php echo $icon_map; ?> Open in Maps <?php echo $icon_ext; ?>
        </a>
        <div class="location-map">
          <iframe src="<?php echo esc_url( $loc['map_embed'] ); ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo esc_attr( $loc['name'] ); ?> map"></iframe>
        </div>
      </div>
      <?php endif; ?>

      <div class="location-actions">
        <a href="<?php echo esc_url( $args['cta_url'] ); ?>" class="btn-primary"><?php echo esc_html( $args['cta_prefix'] . ' ' . $loc['name'] ); ?> <?php echo $icon_arrow; ?></a>
        <a href="<?php echo esc_url( $loc['map_link'] ); ?>" target="_blank" rel="noopener" class="btn-outline">Get Directions</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
