<?php if (have_posts()) : ?>
    <div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="blog-info">
            <?php if ( has_post_thumbnail() ) : ?>

                <div class="col-md-3" style="height:250px">
                    <img style="width: 150px; height: 155px;" src='<?php the_post_thumbnail_url(); ?>' />
                    <h4><a href="<?php the_permalink() ?>" style="font-size: 12pt;"><?php the_title();?></a></h4>
                </div>

            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    </div>
    <nav>
        <?php
        if (function_exists('page_navi')) :
            page_navi('elm_class=pagination&items=12&prev_label=上一页&next_label=下一页&show_boundary=false');
        endif;
        ?>
    </nav>

<?php endif; ?>
