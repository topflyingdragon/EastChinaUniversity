<?php

// 隐藏admin bar
add_filter( 'show_admin_bar', '__return_false' );

// 注册加载JS & CSS文件
add_action( 'wp_enqueue_scripts', 'register_scripts' );

function register_scripts() {
    // 注册bootstrap.min.js
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '3.1.1', true );
    // 注册move-top.js
    wp_register_script( 'movetop', get_template_directory_uri() . '/js/move-top.js', 'jquery', '1.2', true );
    // 注册easing.js
    wp_register_script( 'easing', get_template_directory_uri() . '/js/easing.js', 'jquery', '1.1.2', true );
    // 注册flexy-menu.js
    wp_register_script( 'flexy-menu', get_template_directory_uri() . '/js/flexy-menu.js', 'jquery', '3.0.0', true );
    // 注册jquery.flexisel.js
    wp_register_script( 'flexisel', get_template_directory_uri() . '/js/jquery.flexisel.js', 'jquery', '1.0.0', true );
    // 注册jquery.fancybox.js
    wp_register_script( 'jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', 'jquery', '2.1.5', true );
    // 注册responsiveslides.js
    wp_register_script( 'responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js', 'jquery', '1.54', true );
    // 注册用户自定义custom.js
    wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', 'jquery', '3.0.0', true );

    // 注册eastchina-style.css
    wp_register_style( 'eastchina-style', get_stylesheet_uri(), array(), '1.0' );
    // 注册bootstrap.min.css
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '', '3.1.1' );
    // 注册flexy-menu.css
    wp_register_style( 'flexymenu', get_template_directory_uri() . '/css/flexy-menu.css', '', '4.0.1' );
    // 注册touchTouch.css
    wp_register_style( 'touchTouch', get_template_directory_uri() . '/css/touchTouch.css', '', '2.1.5' );
    // 注册font-awesome
    wp_register_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', '', '4.6.3' );
    // 调用加载函数
    enqueue_scripts();

}
//---------------------------------------------------------
//				Set Posts per page
add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {
  global $wp_the_query;

  if($query->query['category_name'] == "foreign_teachers/teachers_style" ||
	 $query->query['category_name'] == "foreign_teachers/honorary_professor" ||
	 $query->query['category_name'] == "foreign_teachers/visiting_scholar" ){
    $query->set( 'posts_per_page', 20 );
  }
  return $query;
}
//---------------------------------------------------------
/**
 * 加载CSS & JS文件
 */
function enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'movetop' );
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'flexy-menu' );
    wp_enqueue_script( 'flexisel' );
    wp_enqueue_script( 'jqueryfancybox' );
    wp_enqueue_script( 'responsiveslides' );
    wp_enqueue_script( 'custom' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'eastchina-style' );
    wp_enqueue_style( 'flexymenu' );
    wp_enqueue_style( 'touchTouch' );
    wp_enqueue_style( 'font-awesome' );

}


register_nav_menus( array(
    'place_primary' => "主菜单"
) );

class Sidebar_walker_nav_menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        //$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
        $output .= $indent;

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="list-group-item"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


include("includes/creekoo_options.php");


function simple_get_most_viewed($posts_num=10, $days=30){
    global $wpdb;
    $sql = "SELECT ID , post_title , comment_count
            FROM $wpdb->posts
           WHERE post_type = 'post' AND TO_DAYS(now()) - TO_DAYS(post_date) < $days
		   AND ($wpdb->posts.`post_status` = 'publish' OR $wpdb->posts.`post_status` = 'inherit')
           ORDER BY comment_count DESC LIMIT 0 , $posts_num ";
    $posts = $wpdb->get_results($sql);
    $output = "";
    foreach ($posts as $post){
        $output .= "\n<li><a href= \"".get_permalink($post->ID)."\" rel=\"bookmark\" title=\"".$post->post_title." (".$post->comment_count."条评论)\" ><span style=\"margin-right:5px\">&bull;</span>". $post->post_title."</a></li>";
    }
    echo $output;
}

register_sidebar(array(
    'name' => '右边栏小工具一',
    'id' => 'primary-widget-area',
    'description' => '右边栏小工具一',
    'before_widget' => '<div id="%1$s" class="list-group %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 style="display: none;">',
    'after_title' => '</h4>',
));

register_sidebar(array(
    'name' => '右边栏小工具二',
    'id' => 'secondary-widget-area',
    'description' => '右边栏小工具二',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
));

function article_index($content) {
    $matches = array();
    $ul_li = '';

    $r = "/<h3>([^<]+)<\/h3>/im";

    if(preg_match_all($r, $content, $matches)) {
        foreach($matches[1] as $num => $title) {
            $content = str_replace($matches[0][$num], '<h3 id="title-'.$num.'">'.$title.'</h3>', $content);
            $ul_li .= '<li><a href="#title-'.$num.'" title="'.$title.'">'.$title."</a></li>\n";
        }

        $content = "\n<div id=\"article-index\">
                <span>文章索引</span>
                <ul id=\"article-index-ul\">\n" . $ul_li . "</ul>
            </div>\n" . $content;
    }
    return $content;
}
add_filter( "the_content", "article_index" );


function pagination($query_string){
    global $posts_per_page, $paged;
    $my_query = new WP_Query($query_string ."&posts_per_page=-1");
    $total_posts = $my_query->post_count;
    if(empty($paged))$paged = 1;
    $prev = $paged - 1;
    $next = $paged + 1;
    $range = 5;
    $showitems = ($range * 2)+1;
    $pages = ceil($total_posts/$posts_per_page);
    if(1 != $pages){
        echo "<div class='pagination'>";
        echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."' class='fir_las'>最前</a>":"";
        echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."' class='page_previous'>上一页</a>":"";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }
        echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."' class='page_next'>下一页</a>" :"";
        echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."' class='fir_las'>最后</a>":"";
        echo "</div>\n";
    }
}

class hacklog_archives
{
    function GetPosts()
    {
        global  $wpdb;
        if ( $posts = wp_cache_get( 'posts', 'ihacklog-clean-archives' ) )
            return $posts;
        $query="SELECT DISTINCT ID,post_date,post_date_gmt,comment_count,comment_status,post_password FROM $wpdb->posts WHERE post_type='post' AND post_status = 'publish' AND comment_status = 'open'";
        $rawposts =$wpdb->get_results( $query, OBJECT );
        foreach( $rawposts as $key => $post ) {
            $posts[ mysql2date( 'Y.m', $post->post_date ) ][] = $post;
            $rawposts[$key] = null;
        }
        $rawposts = null;
        wp_cache_set( 'posts', $posts, 'ihacklog-clean-archives' );;
        return $posts;
    }
    function PostList( $atts = array() )
    {
        global $wp_locale;
        global $hacklog_clean_archives_config;
        $atts = shortcode_atts(array(
            'usejs'        => $hacklog_clean_archives_config['usejs'],
            'monthorder'   => $hacklog_clean_archives_config['monthorder'],
            'postorder'    => $hacklog_clean_archives_config['postorder'],
            'postcount'    => '1',
            'commentcount' => '1',
        ), $atts);
        $atts=array_merge(array('usejs'=>1,'monthorder'   =>'new','postorder'    =>'new'),$atts);
        $posts = $this->GetPosts();
        ( 'new' == $atts['monthorder'] ) ? krsort( $posts ) : ksort( $posts );
        foreach( $posts as $key => $month ) {
            $sorter = array();
            foreach ( $month as $post )
                $sorter[] = $post->post_date_gmt;
            $sortorder = ( 'new' == $atts['postorder'] ) ? SORT_DESC : SORT_ASC;
            array_multisort( $sorter, $sortorder, $month );
            $posts[$key] = $month;
            unset($month);
        }
        $html = '<div class="car-container';
        if ( 1 == $atts['usejs'] ) $html .= ' car-collapse';
        $html .= '">'. "\n";
        if ( 1 == $atts['usejs'] ) $html .= '<a href="#" class="car-toggler">展开所有月份'."</a>\n\n";
        $html .= '<ul class="car-list">' . "\n";
        $firstmonth = TRUE;
        foreach( $posts as $yearmonth => $posts ) {
            list( $year, $month ) = explode( '.', $yearmonth );
            $firstpost = TRUE;
            foreach( $posts as $post ) {
                if ( TRUE == $firstpost ) {
                    $spchar = $firstmonth ? '<span class="car-toggle-icon car-minus">-</span>' : '<span class="car-toggle-icon car-plus">+</span>';
                    $html .= '	<li><span class="car-yearmonth" style="cursor:pointer;">'.$spchar.' ' . sprintf( __('%1$s %2$d'), $wp_locale->get_month($month), $year );
                    if ( '0' != $atts['postcount'] )
                    {
                        $html .= ' <span title="文章数量">(共' . count($posts) . '篇文章)</span>';
                    }
                    if ($firstmonth == FALSE) {
                        $html .= "</span>\n		<ul class='car-monthlisting' style='display:none;'>\n";
                    } else {
                        $html .= "</span>\n		<ul class='car-monthlisting'>\n";
                    }
                    $firstpost = FALSE;
                    $firstmonth = FALSE;
                }
                $html .= '			<li>' .  mysql2date( 'd', $post->post_date ) . '日: <a target="_blank" href="' . get_permalink( $post->ID ) . '">' . get_the_title( $post->ID ) . '</a>';
                if ( '0' != $atts['commentcount'] && ( 0 != $post->comment_count || 'closed' != $post->comment_status ) && empty($post->post_password) )
                    $html .= ' <span title="评论数量">(' . $post->comment_count . '条评论)</span>';
                $html .= "</li>\n";
            }
            $html .= "		</ul>\n	</li>\n";
        }
        $html .= "</ul>\n</div>\n";
        return $html;
    }
    function PostCount()
    {
        $num_posts = wp_count_posts( 'post' );
        return number_format_i18n( $num_posts->publish );
    }
}
if(!empty($post->post_content))
{
    $all_config=explode(';',$post->post_content);
    foreach($all_config as $item)
    {
        $temp=explode('=',$item);
        $hacklog_clean_archives_config[trim($temp[0])]=htmlspecialchars(strip_tags(trim($temp[1])));
    }
}
else
{
    $hacklog_clean_archives_config=array('usejs'=>1,'monthorder'   =>'new','postorder'    =>'new');
}
$hacklog_archives=new hacklog_archives();


add_action( 'creekoo_footerinfo', 'creekoo_footerinfo_init' );
function creekoo_footerinfo_init() {
    ?>
    <span class="comm1"><?php echo comicpress_copyright(); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" target="_blank"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></span>.<span class="comm"><a href="http://www.gshop123.com" rel="nofollow" target="_blank" title="好店品——一站式购物解决方案">好店品</a></span>.<span class="comm"><a href="http://guoishupi.com" rel="nofollow" target="_blank" title="果树皮——着装天堂">果树皮</a></span>.主题版权by<span class="comm"><a href="http://www.creekoo.com/" target="_blank" title="主题KooPle源自CreeKoo">KooPle</a></span><?php if (get_option('creekoo_beian') == 'Display') { ?><span class="comm"><?php echo stripslashes(get_option('creekoo_beianhao')); ?><?php } else { } ?></span><?php if (get_option('creekoo_tj') == 'Display') { ?><span class="comm"><?php echo stripslashes(get_option('creekoo_tjcode')); ?><?php } else { } ?></span>
    <?php
}

function password_hint( $c ){
    global $post, $user_ID, $user_identity;
    if ( empty($post->post_password) )
        return $c;
    if ( isset($_COOKIE['wp-postpass_'.COOKIEHASH]) && stripslashes($_COOKIE['wp-postpass_'.COOKIEHASH]) == $post->post_password )
        return $c;
    if($hint = get_post_meta($post->ID, 'password_hint', true)){
        $url = get_option('siteurl').'/wp-pass.php';
        if($hint)
            $hint = '密码提示：'.$hint;
        else
            $hint = "请输入您的密码";
        if($user_ID)
            $hint .= sprintf('欢迎进入，您的密码是：', $user_identity, $post->post_password);
        $out = <<<END
<form method="post" action="$url">
<p>这篇文章是受保护的文章，请输入密码继续阅读：</p>
<div>
<label>$hint<br/>
<input type="password" name="post_password"/></label>
<input type="submit" value="输入密码" name="Submit"/>
</div>
</form>
END;
        return $out;
    }else{
        return $c;
    }
}
add_filter('the_content', 'password_hint');

if ( function_exists('add_theme_support') )
    add_theme_support('post-thumbnails');
function catch_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
        $random = mt_rand(1, 20);
        echo get_bloginfo ( 'stylesheet_directory' );
        echo '/images/random/tb'.$random.'.jpg';
    }
    return $first_img;
}

add_filter( 'avatar_defaults', 'fb_addgravatar' );
function fb_addgravatar( $avatar_defaults ) {
    $myavatar = get_bloginfo('template_directory') . '/images/gravatar.png';
    $avatar_defaults[$myavatar] = '自定义头像';
    return $avatar_defaults;
}

function creekoo_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $commentcount,$wpdb, $post;
    if(!$commentcount) {
        $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = $post->ID AND comment_type = '' AND comment_approved = '1' AND !comment_parent");
        $cnt = count($comments);
        $page = get_query_var('cpage');
        $cpp=get_option('comments_per_page');
        if (ceil($cnt / $cpp) == 1 || ($page > 1 && $page  == ceil($cnt / $cpp))) {
            $commentcount = $cnt + 1;
        } else {
            $commentcount = $cpp * $page + 1;
        }
    }
    ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php $add_below = 'div-comment'; ?>
        <div class="comment-author"><?php if (get_option('creekoo_localavatar') == 'Display') { ?>
                <?php
                $p = 'avatar/';
                $f = md5(strtolower($comment->comment_author_email));
                $a = $p . $f .'.png';
                $e = ABSPATH . $a;
                if (!is_file($e)){
                    $d = get_bloginfo('wpurl'). '/avatar/default.png';
                    $s = '40';
                    $r = get_option('avatar_rating');
                    $g = 'http://www.gravatar.com/avatar/'.$f.'.jpg?s='.$s.'&d='.$d.'&r='.$r;
                    $avatarContent = file_get_contents($g);
                    file_put_contents($e, $avatarContent);
                    if ( filesize($e) == 0 ){ copy($d, $e); }
                };
                ?>
                <img src='<?php bloginfo('wpurl'); ?>/<?php echo $a ?>' alt='' class='avatar' />
                <?php { echo ''; } ?>
            <?php } else { ?><?php echo get_avatar( $comment, 40 ); ?><?php } ?>
            <div style="float:right"><span class="floor"><?php
                    if(!$parent_id = $comment->comment_parent){
                        switch ($commentcount){
                            case 2 :echo "沙发";--$commentcount;break;
                            case 3 :echo "板凳";--$commentcount;break;
                            case 4 :echo "地板";--$commentcount;break;
                            default:printf('%1$s楼', --$commentcount);
                        }
                    }
                    ?></span><span class="datetime"><?php comment_date('Y-m-d') ?> <?php comment_time() ?></span><span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span></div>
            <?php comment_author_link() ?>
        </div>
        <?php if ( $comment->comment_approved == '0' ) : ?>
            <span style="color:#C00; font-style:inherit">您的评论正在等待审核中...</span>
            <br />
        <?php endif; ?>
        <?php comment_text() ?>
    </div>
    <div class="clear"></div>

    <?php
}
function creekoo_end_comment() {
    echo '</li>';
}

function comicpress_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
    SELECT
    YEAR(min(post_date_gmt)) AS firstdate,
    YEAR(max(post_date_gmt)) AS lastdate
    FROM
    $wpdb->posts
    WHERE
    post_status = 'publish'
    ");
    $output = '';
    if($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

function record_visitors(){
    if (is_singular()) {global $post;
        $post_ID = $post->ID;
        if($post_ID)
        {
            $post_views = (int)get_post_meta($post_ID, 'views', true);
            if(!update_post_meta($post_ID, 'views', ($post_views+1)))
            {
                add_post_meta($post_ID, 'views', 1, true);
            }
        }
    }
}
add_action('wp_head', 'record_visitors');
function post_views($before = '(点击 ', $after = ' 次)', $echo = 1)
{
    global $post;
    $post_ID = $post->ID;
    $views = (int)get_post_meta($post_ID, 'views', true);
    if ($echo) echo $before, number_format($views), $after;
    else return $views;
};

//评论邮件自动通知
function comment_mail_notify($comment_id) {
    $admin_email = get_bloginfo ('admin_email'); // $admin_email 可改為你指定的 e-mail.
    $comment = get_comment($comment_id);
    $comment_author_email = trim($comment->comment_author_email);
    $parent_id = $comment->comment_parent ? $comment->comment_parent : '';
    $to = $parent_id ? trim(get_comment($parent_id)->comment_author_email) : '';
    $spam_confirmed = $comment->comment_approved;
    if (($parent_id != '') && ($spam_confirmed != 'spam') && ($to != $admin_email) && ($comment_author_email == $admin_email)) {
        $wp_email = 'no-reply@' . preg_replace('#^www\.#', '', strtolower($_SERVER['SERVER_NAME'])); // e-mail 發出點, no-reply 可改為可用的 e-mail.
        $subject = '您在 [' . get_option("blogname") . '] 的评论有新的回复';
        $message = '
    <div style="font: 13px Microsoft Yahei;padding: 0px 20px 0px 20px;border: #ccc 1px solid;border-left-width: 4px; max-width: 600px;margin-left: auto;margin-right: auto;">
      <p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
      <p>您曾在 [' . get_option("blogname") . '] 的文章 《' . get_the_title($comment->comment_post_ID) . '》 上发表评论：<br />'
            . nl2br(get_comment($parent_id)->comment_content) . '</p>
      <p>' . trim($comment->comment_author) . ' 给您的回复如下:<br>'
            . nl2br($comment->comment_content) . '</p>
      <p style="color:#f00">您可以点击 <a href="' . htmlspecialchars(get_comment_link($parent_id, array('type' => 'comment'))) . '">查看回复的完整內容</a></p>
      <p style="color:#f00">欢迎再次光临 <a href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
      <p style="color:#999">(此邮件由系统自动发出，请勿回复。)</p>
    </div>';
        $message = convert_smilies($message);
        $from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
        $headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
        wp_mail( $to, $subject, $message, $headers );
    }
}
add_action('comment_post', 'comment_mail_notify');

//友情链接
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

//fancybox 自动对图片链接添加属性
add_filter('the_content', 'fancybox');
function fancybox ($content)
{ global $post;
    $pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|swf)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="box" class="fancybox"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

//移除header的不必要的链接
remove_action( 'wp_head',   'feed_links_extra', 3 );
remove_action( 'wp_head',   'rsd_link' );
remove_action( 'wp_head',   'wlwmanifest_link' );
remove_action( 'wp_head',   'index_rel_link' );
remove_action( 'wp_head',   'start_post_rel_link', 10, 0 );
remove_action( 'wp_head',   'wp_generator' );

//自定义登录页面
function custom_login_logo() { echo '<link rel="stylesheet" id="wp-admin-css" href="'.get_bloginfo('template_directory').'/admstyle.css" type="text/css" />';}
add_action('login_head', 'custom_login_logo');

//全部设置结束
function cms_excerpt_more() {
    return ' ...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length() {
    return 150;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

// sort category in admin panel
add_filter( 'get_terms_args', 'wpse_53094_sort_get_terms_args', 10, 2 );
function wpse_53094_sort_get_terms_args( $args, $taxonomies )
{
    global $pagenow;
    if( !is_admin() || ('post.php' != $pagenow && 'post-new.php' != $pagenow) )
        return $args;

    $args['orderby'] = 'id';
    $args['order'] = 'ASC';

    return $args;
}