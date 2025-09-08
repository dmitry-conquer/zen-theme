<?php
if (!defined('ABSPATH')) {
  exit;
}
?>

<?php get_header(); ?>

<main class="base-page">
  <div class="container">
    <div class="prose">
      <?php
      while (have_posts()):
        the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>