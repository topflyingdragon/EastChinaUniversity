<?php get_header(); ?>

<div class="blog">

    <div class="three-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/exchange_term/">交流项目</a></h4>
                    <div class="img-panel">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/students/banner-1.jpg">
                    </div>
                    <?php
                    // 交流项目
                    $args = array(
                        'posts_per_page'   => 3,
                        'category_name'    => 'exchange_term',
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
                <div class="col-md-4">
                    <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/summer_class/">暑期项目</a></h4>
                    <div class="img-panel">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/students/banner-2.jpg">
                    </div>
                    <?php
                    // 暑期项目
                    $args = array(
                        'posts_per_page'   => 3,
                        'category_name'    => 'summer_class',
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
                <div class="col-md-4">
                    <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/abroad_practice/">海外实习</a></h4>
                    <div class="img-panel">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/students/banner-3.jpg">
                    </div>
                    <?php
                    // 海外实习
                    $args = array(
                        'posts_per_page'   => 3,
                        'category_name'    => 'abroad_practice',
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

                <div class="clearfix"> </div>

            </div>
        </div>
    </div>

    <div class="two-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/term_notify/">项目公告</a></h4>
                    <?php
                    // 项目公告
                    $args = array(
                        'posts_per_page'   => 3,
                        'category_name'    => 'term_notify',
                        'orderby'          => 'date',
                        'order'            => 'DESC'
                    );
                    $posts = get_posts($args);
                    if (count($posts)) {
                        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="blog-info">
                                <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/cooperation_guide/">办理指南</a></h4>
                    <?php
                    // 办理指南
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'cooperation_guide',
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

    <div class="four-banner-panel">
        <div class="container">
            <h4><a href="<?php echo home_url('/'); ?>category/student_exchange/study_abroad_knowledge/">游学见闻</a></h4>
            <ul id="flexiselInfo">
                <?php
                // 游学见闻
                $args = array(
                    'posts_per_page'   => 10,
                    'category_name'    => 'study_abroad_knowledge',
                    'orderby'          => 'date',
                    'order'            => 'DESC'
                );
                $posts = get_posts($args);
                if (count($posts)) {
                    foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <div class="banner-grid">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="img-panel">
                                    <?php the_post_thumbnail('thumbnail', 'style=width:100%;height:auto;'); ?>
                                </div>
                                <?php endif; ?>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="content"><?php the_excerpt(); ?></div>
                            </div>
                        </li>
                    <?php endforeach;
                    wp_reset_postdata();
                }
                ?>

            </ul>

            <script type="text/javascript">
                jQuery(window).load(function() {
                    jQuery("#flexiselInfo").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
        </div>
    </div>

<?php get_footer(); ?>
