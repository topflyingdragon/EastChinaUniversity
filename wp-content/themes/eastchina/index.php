
<?php get_header(); ?>

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <h3><span class="acrostic">新</span>闻动态</h3>
        <p class="natus aut"></p>
        <div class="banner-bottom-grids">
            <?php
            $catquery = new WP_Query( 'cat=4&posts_per_page=4' );
            while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="col-md-3 banner-bottom-grid">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail', 'style=width:100%;height:auto;'); ?>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php echo strip_tags(get_the_excerpt());?></p>
                    <div class="more">
                        <a href="<?php the_permalink(); ?>">Learn More ></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- banner-bottom -->

<!-- 公告通知 -->
<div id="news" class="news">
    <div class="container">
        <h3><span class="acrostic">公</span>告通知</h3>
        <p class="natus"></p>
        <?php
        $i = 0;
        $catquery = new WP_Query( 'cat=3&posts_per_page=4' );
        while($catquery->have_posts()) : $catquery->the_post();?>
            <?php if ($i % 2 == 0) :?>
                <div class="news-grids">
                <div class="row">
            <?php endif; ?>

            <div class="col-md-6 news">
                <div class="row">
                    <div class="col-md-4 news-grd">
                        <p><?php echo get_the_date('j'); ?><span><?php echo get_the_date('n'); ?>月</span><?php echo get_the_date('Y'); ?></p>
                    </div>
                    <div class="col-md-8 news-grd-right">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                        <div class="more">
                            <a href="<?php the_permalink(); ?>">Learn More ></a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <?php if ($i % 2 == 1) :?>
                <div class="clearfix"> </div>
                </div>
                </div>
            <?php endif; ?>

            <?php $i++; endwhile; ?>
    </div>
</div>
<!-- //公告通知 -->

<!-- services -->
<div id="services" class="services">
    <div class="container">
        <h3><span class="acrostic">学</span>生交流</h3>
        <p class="natus aut"></p>
        <div class="service-grids">
            <ul id="flexiselDemo1">
                <?php
                $arr_icons = array('glyphicon-globe', 'glyphicon-cloud', 'glyphicon-star', 'glyphicon-signal');
                $i = 0;
                $catquery = new WP_Query( 'cat=5&posts_per_page=4' );
                while($catquery->have_posts()) : $catquery->the_post(); ?>

                    <li>
                        <div class="service-grid">
                            <div class="glb">
                                <?php the_post_thumbnail('thumbnail', 'style=width:100%;height:auto;'); ?>
                            </div>
                            <h4 style="height:42px"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                            <div class="learn">
                                <a href="<?php the_permalink(); ?>">Learn More</a>
                            </div>
                        </div>
                    </li>

                <?php $i++; endwhile; ?>
            </ul>

            <script type="text/javascript">
                jQuery(window).load(function() {
                    jQuery("#flexiselDemo1").flexisel({
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
<!-- //services -->

<?php get_footer(); ?>

