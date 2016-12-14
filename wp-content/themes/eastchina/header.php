<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="oldie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="oldie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="oldie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">

    <?php include('includes/seo.php'); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <script>$=jQuery;</script>

    <!--[if lt IE 9]>
    <script src="/EastChinaUniversity/wp-content/themes/eastchina/js/html5shiv.min.js"></script>
    <script src="/EastChinaUniversity/wp-content/themes/eastchina/js/respond.min.js"></script>
    <script src="/EastChinaUniversity/wp-content/themes/eastchina/css/bootstrap-ie7.css"></script>
    <![endif]-->
    <!--[if lt IE 8]>

    <![endif]-->

    <?php if ( is_singular() ){ ?>
    <?php } ?>

</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="header-left">
            <a href="/EastChinaUniversity/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/title/title_logo.png">
            </a>
        </div>
        <div class="header-right">
            <div>
                <a href="http://www.ecupl.edu.cn/" target="_blank"><span>|华政首页 |</span></a>
                <a href="http://www.ecupl.edu.cn/" target="_blank"><span> 联系我们 |</span></a>
                <a href="http://ieclaw.ecupl.edu.cn/s/101/t/65/main.htm" target="_blank"><span>English Version|</span></a>
            </div>
            <div class="search-area">
                <form id="searchform" method="get" class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ); ?>">
                    <div class="form-group">
                        <input type="text" name="s" id="s" class="form-control" value="<?php the_search_query(); ?>">
                    </div>
                    <button type="submit" id="searchsubmit" class="btn btn-default" aria-label="Left Align">
                        <span>搜索</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- banner -->
<?php if (is_front_page()) : ?>
<div class="banner">
<?php else : ?>
<div class="banner1">
<?php endif; ?>
    <div class="nav-container">
        <div class="container">
            <div class="banner-navigation">
                <div class="banner-nav">
                    <?php
                    wp_nav_menu( array(
                        'menu_class'        => 'flexy-menu orange nav1',
                        'theme_location'    => 'place_primary',
                        'container'         => false
                    ) );
                    ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_front_page()) : ?>
    <div class="home-slider">
        <ul>
            <?php
            $page = get_page_by_title( 'Banner' );
            $gallery = get_post_gallery( $page->ID, false );
            $ids = explode( ",", $gallery['ids'] );
            $index = 0;
            foreach( $ids as $id ) {
                $img = get_post($id);
                $title = $img->post_excerpt;
                $url = $img->post_content;
                $thumb = wp_get_attachment_image_src( $id, "header_thumbnail");
                $img = $thumb[0];
                ?>
                <li>
                    <img src="<?php echo $img; ?>"/>
                    <div class="banner-link" id="slider_text_<?php echo $index++; ?>">
                        <a href="<?php echo $url; ?>" >
                            <?php echo $title; ?>
                        </a>
                    </div>
                </li>

            <?php } ?>
        </ul>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            var slider = $('.home-slider');
            slider.on('unslider.ready', function(){
                animate(0);
            });
            slider.unslider({
                arrows: false,
                delay: 5000
            });
            slider.on('unslider.change', function(event, index, slide) {
                animate(index);
            });
            function animate(index){
                var obj = $("#slider_text_"+index);
                obj.css({opacity:0});
                setTimeout(function(){
                    obj.animate({opacity: 1});
                },2000);
            }
        });
    </script>
    <script type="text/javascript">
        $(window).resize(function(){
            if($(window).width()<=768){
                $(".banner-nav li").each(function(){
                    $(this).css({display:"block"});
                });
                $(".showhide").css({display:"none"});
                $(".nav-container").height(70);
            }
        });

    </script>
    <?php endif; ?>
    <div class="clearfix"> </div>
</div>
<!-- //banner -->
