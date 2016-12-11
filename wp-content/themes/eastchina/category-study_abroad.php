<?php get_header(); ?>

<div class="blog">

    <div class="two-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><a href="<?php echo home_url('/'); ?>category/study_abroad/study_abroad_application/">留学申请</a></h4>
                    <?php
                    // 办理指南
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'study_abroad_application',
                        'orderby'          => 'date',
                        'order'            => 'DESC'
                    );
                    $posts = get_posts($args);
                    if (count($posts)) {
                        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="blog-info">
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
                        <?php endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-6">
                    <h4><a href="<?php echo home_url('/'); ?>category/study_abroad/postgraduate_recruit/">研究生招生</a></h4>
                    <?php
                    // 研究生招生
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'postgraduate_recruit',
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

            </div>
        </div>
    </div>

    <div class="two-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><a href="<?php echo home_url('/'); ?>category/study_abroad/chinese_project/">汉语言项目</a></h4>
                    <?php
                    // 汉语言项目
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'chinese_project',
                        'orderby'          => 'date',
                        'order'            => 'DESC'
                    );
                    $posts = get_posts($args);
                    if (count($posts)) {
                        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="blog-info">
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
                        <?php endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-6">
                    <h4><a href="<?php echo home_url('/'); ?>category/study_abroad/undergraduates_recruit/">本科生招生</a></h4>
                    <?php
                    // 本科生招生
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'undergraduates_recruit',
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

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
