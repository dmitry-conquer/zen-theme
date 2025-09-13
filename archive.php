<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZEN Theme
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php if (have_posts()): ?>

    <?php the_archive_title('<h1>', '</h1>'); ?>

    <?php
    while (have_posts()):
      the_post();
      ?>

      <article>
        <?php the_title('<h2>', '</h2>'); ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>
      </article>

      <?php
    endwhile;
    ?>

  <?php else: ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

  <?php endif; ?>

</main>

<?php
get_footer();
