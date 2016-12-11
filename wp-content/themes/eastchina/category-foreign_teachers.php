<?php get_header(); ?>

<div class="blog">

    <div class="two-col-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4><a href="<?php echo home_url('/'); ?>category/foreign_teachers/teachers_style/">教师风采</a></h4>
                    <?php
                    // 教师风采
                    $args = array(
                        'posts_per_page'   => 3,
                        'category_name'    => 'teachers_style',
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

                                        <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a></h4>
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
                    <h4><a href="<?php echo home_url('/'); ?>category/foreign_teachers/visiting_scholar/">交流学者</a></h4>
                    <?php
                    // 交流学者
                    $args = array(
                        'posts_per_page'   => 5,
                        'category_name'    => 'visiting_scholar',
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
            <h4><a href="<?php echo home_url('/'); ?>category/foreign_teachers/honorary_professor/">荣誉教授</a></h4>
            <ul id="flexiselInfo">
                <?php
                // 荣誉教授
                $args = array(
                    'posts_per_page'   => 10,
                    'category_name'    => 'honorary_professor',
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
                                    <?php the_post_thumbnail('medium', 'style=width:100%;height:auto;max-height:335px'); ?>
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
</div>

<?php get_footer(); ?>
