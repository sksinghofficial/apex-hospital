<?php get_header(); ?>

<!-- 🏥 Hospital Blog Listing Page -->
<section class="py-5" style="background:#ffffff; font-family:'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;">
    <div class="container mt-5 mb-5">

        <?php if ( have_posts() ) : ?>
            <div class="row g-4">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden blog-card">

                            <!-- 🖼 Featured Image -->
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="overflow-hidden d-block">
                                    <?php the_post_thumbnail( 'large', [ 'class' => 'card-img-top blog-card-img' ] ); ?>
                                </a>
                            <?php else: ?>
                                <div class="bg-light text-center py-5" style="height:250px;">
                                    <i class="bi bi-hospital text-secondary" style="font-size: 3rem;"></i>
                                </div>
                            <?php endif; ?>

                            <!-- 📦 Blog Content -->
                            <div class="card-body p-3 bg-light">
                                <h5 class="card-title mb-2" style="font-family: 'Merriweather', serif; font-size: 2rem;">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-primary" style="color: #1976D2;">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>

                                <p class="text-muted small mb-2">
                                    <i class="bi bi-calendar-event"></i> <?php echo get_the_date(); ?>
                                    &nbsp; | &nbsp;
                                    <i class="bi bi-person"></i> <?php the_author(); ?>
                                </p>

                                <p class="card-text small">
                                    <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                                </p>
                            </div>

                            <!-- 📎 Read More Button -->
                            <div class="card-footer bg-transparent border-0 text-end">
                                <a href="<?php the_permalink(); ?>" 
                                   class="btn btn-sm text-white"
                                   style="background: #E53935; border-radius: 15px;">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- 📑 Pagination -->
            <div class="mt-5">
                <?php
                    the_posts_pagination([
                        'prev_text' => __('« Previous'),
                        'next_text' => __('Next »'),
                    ]);
                ?>
            </div>

        <?php else : ?>
            <p class="text-center text-muted">No blog posts available.</p>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
