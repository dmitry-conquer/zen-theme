<?php get_header(); ?>

<main class="single-post-page">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
        <header class="single-post__header">
          <h1 class="single-post__title"><?php the_title(); ?></h1>
          <div class="single-post__meta">
            <span class="single-post__date">
              <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </span>
            <span class="single-post__author">
              <?php esc_html_e('By', 'zen-theme'); ?> <?php the_author(); ?>
            </span>
            <span class="single-post__categories">
              <?php the_category(', '); ?>
            </span>
          </div>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="single-post__thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="single-post__content">
          <?php the_content(); ?>
        </div>

        <footer class="single-post__footer">
          <nav class="single-post__nav">
            <div class="single-post__nav-previous"><?php previous_post_link('%link', '← %title'); ?></div>
            <div class="single-post__nav-next"><?php next_post_link('%link', '%title →'); ?></div>
          </nav>
        </footer>
      </article>

      <?php if ( comments_open() || get_comments_number() ) : ?>
        <section class="single-post__comments">
          <?php comments_template(); ?>
        </section>
      <?php endif; ?>

    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
