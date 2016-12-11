<?php get_header(); ?>

<div class="single-page">
    <div class="container">
        <div class="col-md-8 single-page-left">
            <div class="single-page-info">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h5><?php the_title(); ?></h5>
                    <p>
                        <?php the_content(); ?>
                    </p>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4 single-page-right">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
