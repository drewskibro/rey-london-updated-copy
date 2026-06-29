<?php
/**
 * Category Archive Template — Health Hub styled
 *
 * @package Rey_London
 */

get_header();

$hh_author = function_exists( 'rl_hh_author' ) ? rl_hh_author() : array( 'name' => 'Sumeet Banker', 'title' => 'Superintendent Pharmacist', 'img' => '' );
$hh_badge_map = array( 'wellness' => 'hh-badge--wellness', 'travel-health' => 'hh-badge--travel', 'weight-loss' => 'hh-badge--weight', 'seasonal' => 'hh-badge--seasonal', 'prescriptions' => 'hh-badge--wellness', 'pharmacy-advice' => 'hh-badge--wellness', 'vaccinations' => 'hh-badge--travel', 'hair-loss' => 'hh-badge--wellness' );
$current_cat = get_queried_object();
?>

  <!-- Hero -->
  <section class="hh-hero">
    <div class="hh-hero-bg">
      <div class="hh-hero-orb hh-hero-orb-1"></div>
      <div class="hh-hero-orb hh-hero-orb-2"></div>
    </div>
    <div class="container hh-hero-container">
      <div class="hh-hero-eyebrow">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
          <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
        </svg>
        HEALTH HUB
      </div>
      <h1 class="hh-hero-title"><?php echo esc_html( $current_cat->name ); ?></h1>
      <?php if ( $current_cat->description ) : ?>
        <p class="hh-hero-subtitle"><?php echo esc_html( $current_cat->description ); ?></p>
      <?php else : ?>
        <p class="hh-hero-subtitle">Expert advice from our GPhC-registered pharmacists on <?php echo esc_html( strtolower( $current_cat->name ) ); ?>.</p>
      <?php endif; ?>

      <nav class="hh-breadcrumb" style="margin-top: 24px;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none;">Home</a>
        <span style="color: rgba(255,255,255,0.4); margin: 0 8px;">›</span>
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none;">Health Hub</a>
        <span style="color: rgba(255,255,255,0.4); margin: 0 8px;">›</span>
        <span style="color: rgba(255,255,255,0.9);"><?php echo esc_html( $current_cat->name ); ?></span>
      </nav>
    </div>
  </section>

  <!-- Articles Grid -->
  <section class="hh-articles-section">
    <div class="container">
      <div class="hh-section-header">
        <h2 class="hh-section-title"><?php echo esc_html( $current_cat->name ); ?> Articles</h2>
        <p class="hh-section-lead"><?php echo esc_html( $current_cat->count ); ?> article<?php echo $current_cat->count !== 1 ? 's' : ''; ?> in this category</p>
      </div>

      <?php if ( have_posts() ) : ?>
      <div class="hh-articles-grid" id="articlesGrid">
        <?php while ( have_posts() ) : the_post();
            $art_cats    = get_the_category();
            $cat         = ! empty( $art_cats ) ? $art_cats[0]->slug : 'wellness';
            $cat_txt     = ! empty( $art_cats ) ? strtoupper( $art_cats[0]->name ) : 'WELLNESS';
            $badge_class = $hh_badge_map[ $cat ] ?? 'hh-badge--wellness';
            $art_img     = get_the_post_thumbnail_url( get_the_ID(), 'health-hub-card' );
            $art_words   = str_word_count( wp_strip_all_tags( get_the_content() ) );
            $art_read    = max( 1, ceil( $art_words / 250 ) ) . ' min read';
        ?>
        <a href="<?php the_permalink(); ?>" class="hh-article-card" data-category="<?php echo esc_attr( $cat ); ?>">
          <?php if ( $art_img ) : ?>
          <div class="hh-article-img-wrap">
            <img src="<?php echo esc_url( $art_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="hh-article-img">
            <div class="hh-article-cat-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $cat_txt ); ?></div>
          </div>
          <?php endif; ?>
          <div class="hh-article-body">
            <div class="hh-article-meta">
              <span class="hh-read-time"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><?php echo esc_html( $art_read ); ?></span>
              <span class="hh-meta-dot">·</span>
              <span class="hh-date"><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
            </div>
            <h3 class="hh-article-title"><?php the_title(); ?></h3>
            <p class="hh-article-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
            <div class="hh-byline hh-byline--sm">
              <?php if ( function_exists( 'rl_hh_avatar' ) ) { rl_hh_avatar( $hh_author, 'sm' ); } ?>
              <div class="hh-byline-info">
                <span class="hh-byline-name"><?php echo esc_html( $hh_author['name'] ); ?></span>
                <span class="hh-byline-title"><?php echo esc_html( $hh_author['title'] ); ?></span>
              </div>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </div>

      <div class="pagination" style="margin-top: 48px; text-align: center;">
        <?php the_posts_pagination( array(
            'prev_text' => '← Previous',
            'next_text' => 'Next →',
        ) ); ?>
      </div>

      <?php else : ?>
      <p style="text-align: center; padding: 60px 0; color: var(--text-gray);">No articles found in this category yet.</p>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
