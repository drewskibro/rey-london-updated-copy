<?php
/**
 * Main Template — Blog listing fallback
 *
 * @package Rey_London
 */

get_header();
?>

<main class="site-main">
  <div class="container">

    <div class="health-hub-hero">
      <h1>Health Hub</h1>
      <p>Expert insights on weight loss, travel health, and living your healthiest life.</p>
    </div>

    <?php if ( have_posts() ) : ?>
    <div class="articles-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="article-card">
          <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>" class="article-card-image">
            <?php the_post_thumbnail( 'health-hub-card' ); ?>
          </a>
          <?php endif; ?>
          <div class="article-card-content">
            <h2 class="article-card-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="article-card-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
            <a href="<?php the_permalink(); ?>" class="article-card-link">Read More →</a>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <div class="pagination">
      <?php the_posts_pagination( array(
          'prev_text' => '← Previous',
          'next_text' => 'Next →',
      ) ); ?>
    </div>

    <?php else : ?>
    <p>No articles found.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
