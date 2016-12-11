<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="blog-info">
        <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a></h4>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="row">
                <div class="col-md-4">
                    <?php the_post_thumbnail('thumbnail', 'style=width:100%;height:auto;'); ?>
                </div>
                <div class="col-md-8">
        <?php endif; ?>

        <p class="pub-date">发布时间： <?php echo get_the_date(); ?></p>
        <div class="blog-info-text">
            <p class="snglp">
                <?php
                the_excerpt();
                ?>
            </p>
            <a href="<?php the_permalink() ?>" title="详细阅读：<?php the_title_attribute(); ?>" class="btn btn-primary hvr-rectangle-in">详细阅读</a>
        </div>

        <?php if ( has_post_thumbnail() ) : ?>
                </div>
            </div>
        <?php endif; ?>

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
