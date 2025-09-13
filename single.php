<?php get_header(); ?>

<!-- 🏥 Hospital Single Blog Post -->
<section class="py-5" style="background:#ffffff; font-family:'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;">
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <!-- Post Title -->
          <h1 class="fw-bold text-primary mb-3 text-start" style="font-family: 'Merriweather', serif;">
            <?php the_title(); ?>
          </h1>
          
          <!-- Meta Info -->
          <p class="text-muted mb-4 text-start">
            <i class="bi bi-calendar-event"></i> <?php echo get_the_date(); ?>
            &nbsp; | &nbsp;
            <i class="bi bi-person"></i> <?php the_author(); ?>
            &nbsp; | &nbsp;
            <i class="bi bi-chat"></i> <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
          </p>

          <!-- Featured Image -->
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="mb-4 bg-light p-3 rounded shadow-sm text-start">
              <?php the_post_thumbnail('large', ['class'=>'img-fluid rounded']); ?>
            </div>
          <?php endif; ?>

          <!-- Content -->
          <div class="content mb-5 text-start" style="line-height:1.8; font-size:1.05rem;">
            <?php the_content(); ?>
          </div>

          <!-- Tags / Categories -->
          <div class="mb-5 text-start">
            <p class="mb-1">
              <strong>Categories:</strong> <?php the_category(', '); ?>
            </p>
            <p class="mb-0">
              <strong>Tags:</strong> <?php the_tags('', ', '); ?>
            </p>
          </div>

          <!-- Post Navigation -->
          <div class="d-flex justify-content-between mb-5 text-start">
            <div><?php previous_post_link('%link', '« Previous Post'); ?></div>
            <div><?php next_post_link('%link', 'Next Post »'); ?></div>
          </div>

          <!-- Comments Section -->
          <div class="mt-5 text-start">
            <?php comments_template(); ?>
          </div>

        <?php endwhile; endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
