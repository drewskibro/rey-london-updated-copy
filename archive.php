<?php
/**
 * Archive Template
 *
 * @package Rey_London
 */

get_header();
?>

<main class="site-main">
  <div class="container">

    <header class="archive-header">
      <?php the_archive_title( '<h1>', '</h1>' ); ?>
      <?php the_archive_description( '<p class="archive-description">', '</p>' ); ?>
    </header>

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
