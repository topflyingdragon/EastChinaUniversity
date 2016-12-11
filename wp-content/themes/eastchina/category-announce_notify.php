<?php get_header(); ?>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-left" >

                <div class="banner-slider">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/news/1.jpg"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/news/2.jpg"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/news/3.jpg"/></li>
                    </ul>
                </div>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
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
                <?php get_sidebar(); ?>

                <?php
                // 新闻动态
                $args = array(
                    'posts_per_page'   => 3,
                    'category_name'    => 'general_news',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post'
                );
                $news_posts = get_posts($args);
                if (count($news_posts)) {
                    echo '<h4 class="side-title">新闻动态</h4>';

                    echo '<dl class="sidebar-same">';
                    foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
                        <dt>
                            <div class="side-date">
                                <span><?php the_time(('d')); ?></span>
                                <span><?php the_time(('Y.m')); ?></span>
                            </div>
                        </dt>
                        <dd>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </dd>
                        <div class="clearfix"> </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    echo '</dl>';
                }
                ?>

                <?php
                // 新闻动态
                $args = array(
                    'posts_per_page'   => 3,
                    'category_name'    => 'announce_notify',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post'
                );
                $news_posts = get_posts($args);
                if (count($news_posts)) {
                    echo '<h4 class="side-title">公告通知</h4>';

                    echo '<dl class="sidebar-same">';
                    foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
                        <dt>
                        <div class="side-date">
                            <span><?php the_time(('d')); ?></span>
                            <span><?php the_time(('Y.m')); ?></span>
                        </div>
                        </dt>
                        <dd>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </dd>
                        <div class="clearfix"> </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    echo '</dl>';
                }
                ?>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>
</div>

<?php get_footer(); ?>
