<?php

$themename = "KooPle";
$shortname = "creekoo";

$options = array (
	array(  "name" => $themename." Options",
      		"type" => "title"),

//各功能模块控制
    array(  "name" => "综合基本设置",
            "type" => "section"),
    array(  "type" => "open"),
		
	array(  "name" => "文章随机缩略图",
            "id" => $shortname."_thumbnail",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(  "name" => "文章截图、特色图像缩略图",
			"desc" => "（开启前确认“文章缩略图”已开启）",
            "id" => $shortname."_articlepic",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

    array(  "name" => "首页随机推荐",
            "id" => $shortname."_indexrand",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(  "name" => "评论表情",
            "id" => $shortname."_smiley",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),
			
	array(  "name" => "侧边读者墙",
            "id" => $shortname."_wallreaders",
            "type" => "select",
            "std" => "Hide",
            "options" => array("hide", "Display")),
			
	array(  "name" => "头像缓存到本地",
            "desc" => "确保网站根目录有“avatar”文件夹，并设置权限为777",
            "id" => $shortname."_localavatar",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

    array(  "name" => "博客右边栏统计",
            "id" => $shortname."_r_statistics",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),
            
    array(  "name" => "建站日期",
            "id" => $shortname."_builddate",
            "type" => "text",
            "std" => "2013-05-01"),

    array(  "name" => "首页友情链接",
            "id" => $shortname."_r_links",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

//自定义内容设置
    array(  "type" => "close"),
    array(  "name" => "自定义内容",
            "type" => "section"),
    array(  "type" => "open"),
	
	array(  "name" => "右边栏Colorbar",
            "id" => $shortname."_colorbar",
            "type" => "select",
            "std" => "hide",
            "options" => array("Hide", "Display")),

	array(	"name" => "自定义Colorbar内容",
            "id" => $shortname."_colorbarcode",
            "type" => "textarea",
            "std" => "<li><a style=\"background-color:#45B4EB;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题一</a></li>
<li><a style=\"background-color:#9AC813;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题二</a></li>
<li><a style=\"background-color:#00CFF8;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题三</a></li>
<li><a style=\"background-color:#F0547C;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题四</a></li>
<li><a style=\"background-color:#FFA300;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题五</a></li>
<li><a style=\"background-color:#3ABE73;\" target=\"_blank\" href=\"http://www.creekoo.com/\">文章标题六</a></li>"),	

    array(  "name" => "右边栏公告",
            "id" => $shortname."_notice",
            "type" => "select",
            "std" => "hide",
            "options" => array("Hide", "Display")),

    array(  "name" => "右边栏公告内容",
            "id" => $shortname."_notice_code",
            "type" => "textarea",
            "std" => "这里输入你的公告内容，支持HTML标签"), 

	array(	"name" => "网站描述（Description）",
			"id" => $shortname."_description",
			"type" => "textarea",
            "std" => "输入你的网站描述，一般不超过200个字符"),

	array(	"name" => "网站关键词（KeyWords）",
            "id" => $shortname."_keywords",
            "type" => "textarea",
            "std" => "输入你的网站关键字，一般不超过100个字符"),

    array(  "type" => "close"),
	array(  "name" => "网站底部信息设置",
			"type" => "section"),
	array(  "type" => "open"),

    array(  "name" => "自定义底部信息",
            "desc" => "",
            "id" => $shortname."_footerlinkcode",
            "type" => "textarea",
            "std" => "<span class=\"comm1\"><a href=\"http://www.creekoo.com/\" title=\"欢迎访问CreeKoo的博客\">欢迎访问CreeKoo</a></span>-<span class=\"comm\"><a href=\"http://www.creekoo.com/sitemap.html\" target=\"_blank\" title=\"网站地图\">网站地图</a></span>"),

	array(  "name" => "网站统计代码",
            "id" => $shortname."_tj",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

    array(  "name" => "输入你的网站统计代码",
            "desc" => "",
            "id" => $shortname."_tjcode",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "备案号",
            "id" => $shortname."_beian",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(  "name" => "备案号",
            "id" => $shortname."_beianhao",
            "type" => "text",
            "std" => "ICP备888888"),

//微博以及订阅设置
    array(  "type" => "close"),
	array(  "name" => "微博订阅、广告设置",
			"type" => "section"),
	array(  "type" => "open"),

	array(  "name" => "腾讯微博",
            "id" => $shortname."_tqq",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入腾讯微博地址",
            "id" => $shortname."_tqqurl",
            "type" => "text",
            "std" => "http://t.qq.com/"),

	array(  "name" => "新浪微博",
            "id" => $shortname."_tsina",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入新浪微博地址",
            "id" => $shortname."_tsinaurl",
            "type" => "text",
            "std" => "http://weibo.com/"),
	
	array(  "name" => "用QQ邮箱订阅博客",
            "id" => $shortname."_mailqq",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(  "name" => "右边栏广告",
            "id" => $shortname."_ad_sidebar",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(	"name" => "右边栏广告代码（推荐尺寸250*250）",
            "id" => $shortname."_ad_sidebar_code",
            "type" => "textarea",
            "std" => "<a href=\"http://www.creekoo.com/\" target=\"_blank\"><img src=\"http://www.creekoo.com/files/adtest/ad-right.jpg\" alt=\"右边栏广告位\" /></a>"),

	array(	"type" => "close") 
);

function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
    if ( 'save' == $_REQUEST['action'] ) {
        foreach ($options as $value) {
    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
    header("Location: admin.php?page=creekoo_options.php&saved=true");
die;
}
else if( 'reset' == $_REQUEST['action'] ) {
    foreach ($options as $value) {
        delete_option( $value['id'] ); }
    header("Location: admin.php?page=creekoo_options.php&reset=true");
die;
}
}
//add_theme_page($themename." Options", "KooPle主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="creekoo_message"><p>'.$themename.' 主题设置已保存</p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="creekoo_message"><p>'.$themename.' 主题已重新设置</p></div>';
?>
<script type="text/javascript" src="http://www.creekoo.com/files/theme/koople/check_latest_version.js"></script>
<script type="text/javascript">
var _version = '<?php $theme_data = get_theme_data(dirname(__FILE__) . '/../style.css');echo $theme_data['Version'];?>';
jQuery(document).ready(function(){
    jQuery("span.version_number").text(creekootheme_latest_version);
    jQuery("a.downloand_add").attr("href",downloand_add);
    jQuery("a.author_add").attr("href",author_add);
    if(_version < creekootheme_latest_version ){
        jQuery(".version_tips").fadeIn(1000);
    }
    else {
        jQuery(".version_tips").hide();
    };
    jQuery(".close_version_tips").click(function(){
        jQuery(this).parent().fadeOut(1000);
    });
    jQuery(".fl_cbradio_op:checked").each(function() {
        jQuery(this).parent().parent().children().eq(3).show();
    });
    jQuery(".fl_cbradio_cl:checked").each(function() {
        jQuery(this).parent().parent().children().eq(3).hide();
    });
    jQuery(".fl_cbradio_cl").click(function(){
        jQuery(this).parent().parent().children().eq(3).slideUp();
    });
    jQuery(".fl_cbradio_op").click(function(){
        jQuery(this).parent().parent().children().eq(3).slideDown();
    });
   jQuery(".theme_options_content > div:not(:first)").hide();
   jQuery(".theme_options_tab li").each(function(index){
       jQuery(this).click(
          function(){
              jQuery(".theme_options_tab li.current").removeClass("current");
              jQuery(this).addClass("current");
              jQuery(".theme_options_content > div:visible").hide();
              jQuery(".theme_options_content > div:eq(" + index + ")").show();
      })
   })
})
</script>
<div class="wrap creekoo_wrap">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/includes/creekoo_options.css"/>
    <script src="<?php bloginfo('template_url') ?>/includes/creekoo_script.js"></script>
<h2><?php echo $themename; ?> 主题设置</h2>
<span class="show_id">
KooPle作者：CreeKoo　　CreeKoo的博客：<a href="http://www.creekoo.com" target="_blank">www.creekoo.com</a></br>Display=显示　　Hide=隐藏
</span>
<div class="version_tips"><?php echo $themename; ?> 新版本 <span class="version_number"></span> 已更新下载。<a href="" class="downloand_add">点击这里</a> 下载最新版本 或 <a href="" class="author_add" target="_blank">访问此主题更新页面</a></div><div class="clear"></div>
<div class="creekoo_opts">
<div class="creekoo_opts">
<form method="post"> 
<?php foreach ($options as $value) {switch ( $value['type'] ) {case "open":?>
<?php break;case "close":?>
</div>
</div>
<br />
<?php break;case "title":?>
<?php break;case 'text':?>
<div class="creekoo_input creekoo_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <span><?php echo $value['desc']; ?></span><div class="clearfix"></div>
 </div>
<?php break;case 'textarea':?>
<div class="creekoo_input creekoo_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <span><?php echo $value['desc']; ?></span><div class="clearfix"></div>
 </div>

<?php break;case 'select':?>
<div class="creekoo_input creekoo_select">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
        <option value="<?php echo $option;?>" <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>>
        <?php
        if ((empty($option) || $option == '' ) && isset($value['default_option_value'])) {
            echo $value['default_option_value'];
        } else {
            echo $option; 
        }?>
        
        </option><?php } ?>
</select>
    <span><?php echo $value['desc']; ?></span><div class="clearfix"></div>
</div>

<?php break;case "checkbox":?>
<div class="creekoo_input creekoo_checkbox">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
    <span><?php echo $value['desc']; ?></span><div class="clearfix"></div>
 </div>


<?php break; case "section":$i++;?>
<div class="creekoo_section">
<div class="creekoo_title"><h3><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" />
</span><div class="clearfix"></div></div>
<div class="creekoo_options">
<?php break; }} ?>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="恢复默认" /> <font color=#ff0000>提示：此按钮将恢复主题初始状态，您的所有设置将消失！</font>
<input type="hidden" name="action" value="reset" />
</div> 
</div>
</div>
<?php } ?>
<?php
add_action('admin_menu', 'mytheme_add_admin');
?>