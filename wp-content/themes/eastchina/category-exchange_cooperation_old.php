<?php get_header(); ?>

<div class="blog">

    <div class="two-col-panel">
        <div class="container">
            <h4><a href="<?php echo home_url('/'); ?>category/exchange_cooperation/cooperation_study/">合作办学</a></h4>
            <div class="row">
                <?php
                // 合作办学
                $args = array(
                    'posts_per_page'   => 10,
                    'category_name'    => 'cooperation_study',
                    'orderby'          => 'date',
                    'order'            => 'DESC'
                );
                $posts = get_posts($args);
                if (count($posts)) {
                    foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                    <div class="col-md-6">
                        <div class="blog-info">
                            <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();
                }
                ?>
            </div>

            <br><br>
            <h4><a href="<?php echo home_url('/'); ?>institution_locations/">机构分布</a></h4>
        </div>
    </div>

</div>

<?php get_footer(); ?>
