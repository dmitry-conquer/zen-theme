<?php
/**
 * Template for displaying a standard WordPress page.
 *
 * This file is used to render the content of a WordPress page using the default
 * page template. It includes the header and footer templates and displays the
 * content of the current page within a styled container.
 */
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