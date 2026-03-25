<?php
/**
 * Single Post Template
 *
 * @package Rey_London
 */

get_header();
?>

<main class="site-main">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="single-post">
        <header class="post-header">
          <h1><?php the_title(); ?></h1>
          <div class="post-meta">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
            <span class="post-author">by <?php the_author(); ?></span>
          </div>
          <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-featured-image">
            <?php the_post_thumbnail( 'large' ); ?>
          </div>
          <?php endif; ?>
        </header>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
