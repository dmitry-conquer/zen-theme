<?php get_header(); ?>

<main class="archive-page">
  <div class="container">
    <header class="archive-header">
      <h1><?php the_archive_title(); ?></h1>
      <?php if ( get_the_archive_description() ) : ?>
        <div class="archive-description"><?php the_archive_description(); ?></div>
      <?php endif; ?>
    </header>

    <?php if ( have_posts() ) : ?>
      <div class="archive-posts">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="archive-post__thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="archive-post__content">
              <div class="archive-post__meta">
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
              </div>
              <h2 class="archive-post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div class="archive-post__excerpt">
                <?php the_excerpt(); ?>
              </div>
              <a class="archive-post__readmore" href="<?php the_permalink(); ?>">Читати далі</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_navigation(); ?>
    <?php else : ?>
      <p><?php esc_html_e( 'No posts found.', 'zen-theme' ); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
