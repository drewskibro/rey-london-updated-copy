<?php
/**
 * Single Post Template — Blog Post
 *
 * @package Rey_London
 */

get_header();

// Gather data
$author_name = rl_field( 'article_author' ) ?: get_the_author_meta( 'display_name' );
if ( ! $author_name || $author_name === get_the_author_meta( 'user_login' ) ) {
    $author_name = rl_option( 'superintendent_pharmacist', 'Sumeet Banker' );
}
$author_role = rl_option( 'default_author_role', 'Superintendent Pharmacist' );
$reviewer    = rl_option( 'superintendent_pharmacist', 'Sumeet Banker' );
$gphc        = rl_option( 'superintendent_gphc_number', '2075664' );
$gphc_url    = rl_option( 'gphc_verify_url', 'https://www.pharmacyregulation.org/registers/pharmacist/2075664' );
$profile_url = rl_option( 'reviewer_profile_url', '' );

// Author avatar
$author_photo_id = rl_field( 'author_photo' );
$author_img      = $author_photo_id ? wp_get_attachment_image_url( $author_photo_id, 'thumbnail' ) : '';
if ( ! $author_img ) {
    $global_img = rl_option( 'pharmacist_image', '' );
    $author_img = is_numeric( $global_img ) ? wp_get_attachment_image_url( $global_img, 'thumbnail' ) : $global_img;
}

// Reviewer avatar
$reviewer_photo_id = rl_field( 'reviewer_photo' );
$reviewer_img      = $reviewer_photo_id ? wp_get_attachment_image_url( $reviewer_photo_id, 'thumbnail' ) : '';
if ( ! $reviewer_img ) {
    $global_img   = rl_option( 'pharmacist_image', '' );
    $reviewer_img = is_numeric( $global_img ) ? wp_get_attachment_image_url( $global_img, 'thumbnail' ) : $global_img;
}

// Reading time
$reading_time = rl_field( 'reading_time' );
if ( ! $reading_time ) {
    $word_count   = str_word_count( wp_strip_all_tags( get_the_content() ) );
    $reading_time = max( 1, ceil( $word_count / 250 ) );
}

$categories = get_the_category();
$cat_name   = ! empty( $categories ) ? $categories[0]->name : 'Health';

// Avatar helper
$author_initials   = strtoupper( substr( $author_name, 0, 1 ) );
$reviewer_initials = strtoupper( substr( $reviewer, 0, 1 ) );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <!-- ============================================
       HERO — integrated featured image + review block
       ============================================ -->
  <section class="bp-hero">
    <div class="bp-hero-bg">
      <div class="bp-hero-blob bp-hero-blob-1"></div>
      <div class="bp-hero-blob bp-hero-blob-2"></div>
    </div>
    <div class="container bp-hero-container">
      <nav class="bp-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span class="bp-bc-sep"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>">Health Hub</a>
        <span class="bp-bc-sep"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></span>
        <span class="bp-bc-current"><?php the_title(); ?></span>
      </nav>

      <div class="bp-meta-row">
        <span class="bp-category-badge"><?php echo esc_html( $cat_name ); ?></span>
        <span class="bp-reading-time">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          <?php echo esc_html( $reading_time ); ?> min read
        </span>
      </div>

      <h1 class="bp-title"><?php the_title(); ?></h1>

      <?php if ( has_excerpt() ) : ?>
        <p class="bp-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
      <?php endif; ?>

      <div class="bp-author-row">
        <?php if ( $author_img ) : ?>
          <img src="<?php echo esc_url( $author_img ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="bp-author-avatar bp-author-avatar--img" />
        <?php else : ?>
          <div class="bp-author-avatar"><?php echo esc_html( $author_initials ); ?></div>
        <?php endif; ?>
        <div class="bp-author-info">
          <span class="bp-author-name"><?php echo esc_html( $author_name ); ?></span>
          <span class="bp-author-meta">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time>
          </span>
        </div>
      </div>

      <!-- Featured image integrated into hero -->
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="bp-hero-featured">
        <?php the_post_thumbnail( 'large', array( 'class' => 'bp-hero-img' ) ); ?>
      </div>
      <?php endif; ?>

      <!-- Clinically Reviewed — tightly integrated -->
      <div class="bp-review-card">
        <div class="bp-review-header">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Clinically Reviewed Content</span>
        </div>
        <div class="bp-review-columns">
          <div class="bp-review-person">
            <?php if ( $author_img ) : ?>
              <img src="<?php echo esc_url( $author_img ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="bp-review-avatar" />
            <?php else : ?>
              <div class="bp-review-avatar"><?php echo esc_html( $author_initials ); ?></div>
            <?php endif; ?>
            <div>
              <span class="bp-review-label">Written by</span>
              <span class="bp-review-name"><?php echo esc_html( $author_name ); ?></span>
              <span class="bp-review-title"><?php echo esc_html( $author_role ); ?></span>
            </div>
          </div>
          <div class="bp-review-person">
            <?php if ( $reviewer_img ) : ?>
              <img src="<?php echo esc_url( $reviewer_img ); ?>" alt="<?php echo esc_attr( $reviewer ); ?>" class="bp-review-avatar bp-review-avatar--verify" />
            <?php else : ?>
              <div class="bp-review-avatar bp-review-avatar--verify"><?php echo esc_html( $reviewer_initials ); ?></div>
            <?php endif; ?>
            <div>
              <span class="bp-review-label">Reviewed &amp; fact-checked by</span>
              <span class="bp-review-name"><?php echo esc_html( $reviewer ); ?></span>
              <span class="bp-review-title">Superintendent Pharmacist<?php echo $gphc ? ' &middot; GPhC: ' . esc_html( $gphc ) : ''; ?></span>
              <div class="bp-review-links">
                <?php if ( $gphc_url ) : ?>
                  <a href="<?php echo esc_url( $gphc_url ); ?>" target="_blank" rel="noopener">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    Verify on GPhC Register
                  </a>
                <?php endif; ?>
                <?php if ( $profile_url ) : ?>
                  <a href="<?php echo esc_url( $profile_url ); ?>">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    View Full Profile
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="bp-review-footer">
          <span class="bp-review-meta">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Last updated: <?php echo esc_html( get_the_modified_date( 'M j, Y' ) ); ?>
          </span>
          <span class="bp-review-meta bp-review-meta--check">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Medically reviewed
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       ARTICLE CONTENT (TOC + closer injected via filters)
       ============================================ -->
  <section class="bp-article-section">
    <div class="container">
      <div class="bp-article-wrap">
        <div class="bp-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       FAQ SECTION
       ============================================ -->
  <?php
  $faqs = rl_field( 'post_faqs' );
  if ( $faqs ) :
  ?>
  <section class="bp-faq-section">
    <div class="container">
      <div class="bp-faq-header">
        <span class="bp-faq-pill">FAQs</span>
        <h2 class="bp-faq-title">Frequently Asked Questions</h2>
      </div>
      <div class="bp-faq-list">
        <?php foreach ( $faqs as $i => $faq ) : $num = str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?>
        <div class="bp-faq-item">
          <button class="bp-faq-trigger" aria-expanded="false" aria-controls="bp-faq-<?php echo esc_attr( $i ); ?>">
            <span class="bp-faq-num"><?php echo esc_html( $num ); ?></span>
            <span class="bp-faq-question"><?php echo esc_html( $faq['question'] ); ?></span>
            <svg class="bp-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="bp-faq-answer" id="bp-faq-<?php echo esc_attr( $i ); ?>">
            <div class="bp-faq-answer-inner">
              <?php echo wp_kses_post( $faq['answer'] ); ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Compliance pills + Next article are injected via the_content filter
       after the closer card, so they flow as one cohesive end-of-post unit -->

<?php endwhile; ?>

<?php get_footer(); ?>
