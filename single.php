<?php
if (!defined('ABSPATH')) {
	exit;
}
?>
<?php get_header(); ?>

<main class="single-post-page">
  <div class="container">
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>
        <?php get_template_part('template-parts/content', 'single'); ?>
      <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>