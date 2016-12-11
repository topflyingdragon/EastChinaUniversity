<?php get_header(); ?>

<div class="blog">

    <div class="two-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4><a href="<?php echo home_url('/'); ?>category/public_abroad/abroad_rules/">规章制度</a></h4>
                    <?php
                    // 规章制度
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'abroad_rules',
                        'orderby'          => 'date',
                        'order'            => 'DESC'
                    );
                    $posts = get_posts($args);
                    if (count($posts)) {
                        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="blog-info">
                                <div class="row">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="col-md-4">
                                        <?php the_post_thumbnail('thumbnail', 'style=width:100%;height:auto;'); ?>
                                    </div>
                                    <div class="col-md-8">
                                    <?php else: ?>
                                    <div class="col-md-12">
                                        <?php endif; ?>
                                        <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                                        <p class="pub-date"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></p>
                                        <div class="blog-info-text">
                                            <p class="snglp">
                                                <?php
                                                the_excerpt();
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <h4><a href="<?php echo home_url('/'); ?>category/public_abroad/abroad_guide/">办理指南</a></h4>
                    <?php
                    // 办理指南
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'abroad_guide',
                        'orderby'          => 'date',
                        'order'            => 'DESC'
                    );
                    $posts = get_posts($args);
                    if (count($posts)) {
                        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="blog-info">
                                <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                                <p class="pub-date"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></p>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="three-col-list-panel">
        <div class="container">
            <div class="row">
                <h4><a href="<?php echo home_url('/'); ?>category/public_abroad/abroad_download/">表格下载</a></h4>

                <?php
                // 交流项目
                $args = array(
                    'posts_per_page'   => 12,
                    'category_name'    => 'abroad_download',
                    'orderby'          => 'date',
                    'order'            => 'DESC'
                );
                $posts = get_posts($args);
                if (count($posts)) {
                    foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                        <div class="col-md-4">
                            <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                }
                ?>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
