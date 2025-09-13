<?php get_header(); ?>

<main id="main" class="site-main" style="padding-top: 150px; padding-bottom: 80px;">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
