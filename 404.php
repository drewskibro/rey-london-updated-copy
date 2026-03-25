<?php
/**
 * 404 Error Page
 *
 * @package Rey_London
 */

get_header();
?>

<main class="site-main">
  <div class="container">
    <div class="error-404">
      <h1>Page Not Found</h1>
      <p>Sorry, the page you're looking for doesn't exist or has been moved.</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">Back to Homepage</a>
    </div>
  </div>
</main>

<?php get_footer(); ?>
