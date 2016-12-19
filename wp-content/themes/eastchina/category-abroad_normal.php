<?php get_header(); ?>

<div class="blog">
    <div class="container">
        <div class="col-md-8 blog-left" >
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-info">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a></h4>
                            <p class="pub-date">发布时间： <?php echo get_the_date(); ?></p>
                            <?php echo get_the_content(); ?>
                    </div>
                <?php endwhile; ?>

                <nav>
                    <?php
                    if (function_exists('page_navi')) :
                        page_navi('elm_class=pagination&items=4&prev_label=上一页&next_label=下一页&show_boundary=false');
                    endif;
                    ?>
                </nav>

            <?php endif; ?>
        </div>

        <div class="col-md-4 single-page-right">
            <?php
            get_sidebar();
            ?>
        </div>

        <div class="clearfix"> </div>

    </div>
</div>

<?php get_footer(); ?>